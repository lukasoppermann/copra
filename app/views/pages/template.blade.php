@extends('template')
	
	@section('content')

	<?
	use \Michelf\Markdown;
	
	foreach(Api::get('.json?path='.$path)['data'] as $section){
		
		echo "<div class='section ".App::make('Utilities')->variable($section['class'],"")."'>";
		
		if( isset($section['children']) )
		{	
			foreach($section['children'] as $child){
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