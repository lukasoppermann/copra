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

				$output_sections .= '<div class="column-'.App::make('Utilities')->variable($child['column'],12).
							' '.App::make('Utilities')->variable($child['class']).' '.$child['type'].'">';

				if( $child['type'] == 'text' )
				{
					$output_sections .= Markdown::defaultTransform($child['content']);
				}

				elseif( $child['type'] == 'image' )
				{
					$output_sections .= "<div class='image'><img src='".asset(Config::get('app.media').'/'.$child['src'])."' alt='".
						App::make('Utilities')->variable($child['description'],$child['src'])."' /></div>";

					if(isset($child['content']) && trim($child['content']) != null)
					{
						$output_sections .= "<div class='content-for-image'>".Markdown::defaultTransform($child['content'])."</div>";
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
