@extends('template')

	@section('content')

	<?
	use \Michelf\Markdown;

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

		$output_sections .= "<div ".$section_link_data."class='section grid no-pseudo ".App::make('Utilities')->variable($section['class'],"")."'>";

		if( isset($section['content']) )
		{

			foreach($section['content'] as $child)
			{

				$output_sections .= '<div class="column-'.App::make('Utilities')->variable($child['column'],12).' '.$child['type'].
							' '.App::make('Utilities')->variable($child['class']).'">';


				if( $child['type'] == 'default' )
				{
					$output_sections .= block_default($child);
				}

				elseif( $child['type'] == 'subsection' )
				{
						foreach($child['content'] as $subchild)
						{

							if( $subchild['type'] == 'default' )
							{
								$output_sections .= block_default($subchild);
							}

						}
				}


				$output_sections .= "</div>";

			}
		}

		$output_sections .= "</div>";

	}

	?>

	<ul class="js-section-menu section-menu">{{$output_sections_menu}}</ul>
	{{$output_sections}}


	@stop


<? // Functions to render html-content

// default content
function block_default( $el, $out = "" )
{
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
		$out .= '<div class="block-content-copy">'.Markdown::defaultTransform($el['content']).'</div>';
	}

	return $out;
}

?>
