@extends('template')

	@section('content')

	<?
	use \Michelf\MarkdownExtra;

	$output_sections = "";
	$output_sections_menu = "";
	$section_link_data = "";

	foreach($data as $section)
	{
		if( isset($section['link']) )
		{
			$section_link = strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $section['link']));
			$output_sections_menu .= "<li class='js-section-menu-link section-menu-link'><a href='#$section_link'>".$section['link']."</a></li>";
			$section_link_data = "id='$section_link' name='$section_link' ";
		}

		$output_sections .= "<div ".$section_link_data."class='section ".App::make('Utilities')->variable($section['class'],"")."'><div class='inner-section grid no-pseudo'>";

		if( isset($section['content']) )
		{
			foreach($section['content'] as $child)
			{

				if( $child['type'] == 'subsection' )
				{
					$output_sections .= '<div class="column-'.App::make('Utilities')->variable($child['column'],12).' '.$child['type'].' '.App::make('Utilities')->variable($child['class'],"").'">';

					foreach($child['content'] as $subchild)
					{

						if( function_exists( 'block_'.$subchild['type'] ) )
						{
							$output_sections .= call_user_func_array('block_'.$subchild['type'], array($subchild));
						}

					}
				}

				else
				{
					$output_sections .= '<div class="column-'.App::make('Utilities')->variable($child['column'],12).' '.$child['type'].'">';

					if( function_exists( 'block_'.$child['type'] ) )
					{
						$output_sections .= call_user_func_array('block_'.$child['type'], array($child));
					}
				}


				$output_sections .= "</div>";

			}
		}

		$output_sections .= "</div></div>";

	}

	?>

	<ul class="js-section-menu section-menu">{{$output_sections_menu}}</ul>
	{{$output_sections}}


	@stop


<? // Functions to render html-content

// default content
function block_default( $el, $lvl = 0 )
{
	$out = '<div class="'.App::make('Utilities')->variable($el['class']).'">';
	// media
	if( isset($el['media']) )
	{
		// file_exists(asset(Config::get('app.media').'/'.$el['src']))
		foreach( $el['media'] as $m )
		{
			// get extension
			$ext = trim(strrchr($m['src'], '.'),'.');
			// check for image
			if( in_array($ext, Config::get('app.media.images')) )
			{
				$out .= '<div class="block-content-image">
					<img class="'.App::make('Utilities')->variable($m['class']).'" src="'.asset(Config::get('app.dirs.media').'/'.$m['src']).'"
						alt="'.App::make('Utilities')->variable($m['description'],$m['src']).'" />
				</div>';
			}
		}
	}

	// markdown content
	if( isset($el['content']) )
	{
		$out .= '<div class="block-content-copy">'.shiftHeaders(MarkdownExtra::defaultTransform($el['content']),$lvl).'</div>';
	}

	return $out.'</div>';
}

// posts block
function block_stream( $el )
{
	if( isset($el['stream']) )
	{
		// get posts
		$stream = Api::stream($el['stream'])->get(['language' => Config::get('app.locale')]);
		if( $stream['success'] === 'true' )
		{
			// build view
			$out = '<div class="'.App::make('Utilities')->variable($el['class']).'">';

			$out .= "<div class='searchable-optionsGroup'>";
				// add search
				if( isset($el['variables']) && isset($el['variables']['search']) && $el['variables']['search'] == "true" )
				{
					$out .= '<input class="js-searchable-searchBox searchable-searchBox" placeholder="Suche">';
				}
				// add count
				if( isset($el['variables']) && isset($el['variables']['itemCount']) && $el['variables']['itemCount'] == "true" )
				{
					$out .= "<div class='stream-itemCount js-searchable-itemCount'>".count($stream)." Ergebnisse</div>";
				}
			$out .= "</div>";


			if( !isset($el['mode']) || $el['mode'] == 'default' )
			{
				foreach($stream['content'] as $p)
				{
					$text = null;

					foreach( $p['data'] as $content )
					{
						foreach( $content['content'] as $c )
						{
							if($c['type'] == 'default'){
								$text = "NOT DONE ".shiftHeaders(MarkdownExtra::defaultTransform($c['content']),2);
								break;
							}
						}
					}

					$out.= "<div class='post'>".$text."</div>";
				}
			}
			elseif( $el['mode'] == 'preview' )
			{
				foreach($stream['content'] as $p)
				{
					$text = null;

					foreach( $p['data'] as $content )
					{
						foreach( $content['content'] as $c )
						{
							if($c['type'] == 'default'){
								$text = shiftHeaders(MarkdownExtra::defaultTransform($c['content']),2);
								break;
							}
						}
					}

					$out.= "<div class='post-preview'>".$text."</div>";
				}
			}
			// cards
			elseif( $el['mode'] == 'card' )
			{
				foreach($stream['content'] as $card)
				{
					$sides = array_values(array_slice($card['data'],0,2));

					$out .= '<div class="card column-4">';
					$sideClass = 'card-front';
					foreach( $sides as $side)
					{
						$content = "";
						foreach( $side['content'] as $item )
						{
							$content.= call_user_func_array('block_'.$item['type'], array($item));
						}
						$out .= View::make('partials.'.$sideClass)->with('content', $content);

						$sideClass = 'card-back';
					}
					$out .= '</div>';
				}
			}

			if( isset($el['variables']) && isset($el['variables']['emptyState']) && $el['variables']['emptyState'] !== "false" )
			{
				$out .= "<div class='stream-emptyState js-emptyState'>".$el['variables']['emptyState']."</div>";
			}

			return $out.'</div>';
		}
	}
}
// block table
function block_array( $el )
{
	$out = '<div class="'.App::make('Utilities')->variable($el['class']).'">';

	if( !isset($mode) || $mode == 'default' )
	{
		if( array_merge($el['content']) !== $el['content'] || !is_numeric(implode(array_keys($el['content']))) )
		{
			foreach($el['content'] as $term => $def)
			{
				$out .='<div class="def-item item-'.strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '',str_replace(' ','',$term))).'"><span class="def-term">'.$term.'</span><div class="def-content js-searchable-entry item-content-'.strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '',str_replace(' ','',$term))).'">'.MarkdownExtra::defaultTransform($def).'</div></div>';
			}
		}
		else
		{
			foreach($el['content'] as $def)
			{
				$out .='<div class="item"><span class="visual"></span>'.MarkdownExtra::defaultTransform($def).'</div>';
			}
		}
	}
	// table
	elseif( $mode == 'table' )
	{
		$out .= HTML::table($el['content']);
	}

	return $out.'</div>';
}

// change headlien in markdown
function shiftHeaders($text,$level = 1)
{
	return preg_replace_callback(
		"!(</?h)([1-6])(>|\\s)!i",
		function ($treffer) use($level)
		{
			return $treffer[2]+$level >=6 ? $treffer[1]."6".$treffer[3]: $treffer[1].($treffer[2]+$level).$treffer[3];
		},
		$text);
}

?>
