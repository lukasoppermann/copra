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

				$output_sections .= '<div class="column-'.App::make('Utilities')->variable($child['column'],12).' '.$child['type'].'">';

				if( $child['type'] == 'subsection' )
				{
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
function block_default( $el )
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
					<img src="'.asset(Config::get('app.dirs.media').'/'.$m['src']).'"
						alt="'.App::make('Utilities')->variable($m['description'],$m['src']).'" />
				</div>';
			}
		}
	}

	// markdown content
	if( isset($el['content']) )
	{
		$out .= '<div class="block-content-copy">'.MarkdownExtra::defaultTransform($el['content']).'</div>';
	}

	return $out.'</div>';
}

// posts block
function block_posts_preview( $el )
{
	// get posts
	$posts = Api::get('.json?stream='.$el['stream'].'&lang='.Config::get('app.locale'));

	// build view
	$out = '<div class="'.App::make('Utilities')->variable($el['class']).'">';

	if( !isset($el['mode']) || $el['mode'] == 'default' )
	{

	}
	elseif( $el['mode'] == 'preview' )
	{
		foreach($posts as $p)
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
