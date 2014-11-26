@extends('template')

	@section('content')

	<?
	use \Michelf\MarkdownExtra;

	$blockView = App::make('Services\BlockViewService');

	$output_sections = "";
	$output_sections_menu = "";
	$section_link_data = "";

	foreach($data['content'][Config::get('app.locale')]['data'] as $section)
	{
		if( isset($section['link']) )
		{
			$section_link = strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $section['link']));
			$output_sections_menu .= "<li class='js-section-menu-link section-menu-link'><a href='#$section_link'>".$section['link']."</a></li>";
			$section_link_data = "id='$section_link' name='$section_link' ";
		}

		$output_sections .= "<div ".$section_link_data." class='section ".variable($section['class'],"")."'><div class='inner-section grid no-pseudo'>";

		if( isset($section['content']) )
		{
			foreach($section['content'] as $child)
			{

				if( $child['type'] == 'subsection' )
				{
					$output_sections .= '<div class="column-'.variable($child['column'],12).' '.$child['type'].' '.variable($child['class'],"").'">';

					foreach($child['content'] as $subchild)
					{
						$method = 'from'.Ucfirst($subchild['type']);
						if( method_exists( $blockView, $method ) )
						{
							$output_sections .= $blockView->$method($subchild);
						}
					}
				}
				else
				{
					$output_sections .= '<div class="column-'.variable($child['column'],12).' '.$child['type'].'">';
					$method = 'from'.Ucfirst($child['type']);
					if( method_exists( $blockView, $method ) )
					{
						$output_sections .= $blockView->$method($child);
					}
				}


				$output_sections .= "</div>";

			}
		}

		$output_sections .= "</div></div>";

	}

	?>

	<ul class="js-section-menu section-menu">{{variable($output_sections_menu)}}</ul>
	{{variable($output_sections)}}


	@stop


<? // Functions to render html-content

// @TODO: make default block work again by using it from BlockViewService

// change headlien in markdown

?>
