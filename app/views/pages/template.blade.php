@extends('template')
	
	@section('content')

	<?
	use \Michelf\Markdown;
	foreach($data as $section){
		echo "<div class='section ".App::make('Utilities')->variable($section['class'],"")."'>";
		if( isset($section['content']) )
		{	
			foreach($section['content'] as $child){
				echo '<div class="column-'.App::make('Utilities')->variable($child['column'],12).
							' '.App::make('Utilities')->variable($child['class']).'">';
			
				if( $child['type'] == 'text' ){
					echo Markdown::defaultTransform($child['content']);
				}
				
				echo "</div>";
			}
		}
			
		echo "</div>";
	
	}
	
	?>
	@stop