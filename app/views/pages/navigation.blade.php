<?php
function loop( $nav, $parent = "", $result = "" )
{
	foreach ($nav as $item)
	{

		$result .= '<li class="'.
			( trim($item['link'], '/') == (Request::path() != "/" ? Request::path() : 'home') ? ' is-active js-is-active' : '').
			( strpos(Request::path(), trim($item['link'], '/')) !== false ? ' is-active js-is-active' : '').
			'">

			<a rel="dns-prefetch" data-id="'.$item['id'].'" href="'.url($item['link']).'">
					'.$item['menu_label'].'
			</a>';

			// loop through children if they exist
			if ( isset($item['children']) && is_array($item['children']) ){
				$result .= loop($item['children'], $item);
			}


		$result .= '</li>';
	}
	if($result != ""){
		return "<ul>".$result."</ul>";
	}
}
?>
{{--------------------------

	Template: Menu

	--------------------------}}

<div class="main-navigation shadow-inside-bend">

	<div class="main-width">

		<a class="svg logo" href="{{url()}}">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="170px" height="130px" viewBox="0 1.5 170 130" enable-background="new 0 1.5 170 130" xml:space="preserve">
				<g>
					<g>
						<polygon fill="#E1464B" points="133.5,111.5 13.5,111.5 13.5,1.5 153.5,1.5 153.5,91.5 		"/>
						<polygon fill="#B9323C" points="133.5,111.5 153.5,91.5 133.5,91.5 		"/>
					</g>
				</g>
				<g id="Logo_White_Gradient">
					<g>
						<path fill="#FFFFFF" d="M139.353,67.836c-0.248-0.249-1.137-1.041-1.137-1.041s-2.499-1.744-2.717-1.957
							c-0.138-0.136-0.452-0.337-0.95-0.337c-0.091,0-86.039-0.001-86.039-0.001c-7.805,0-14.273-6.946-14.273-14.751
							c0-7.805,6.874-14.155,14.679-14.155c1.561,0,3.103,0.26,4.563,0.757c2.144,0.933,5.192,0.916,6.027,0.488
							c0.834-0.427,1.087-0.616,1.674-0.934s-0.37-0.956-0.37-0.956c-3.455-2.838-7.414-4.597-11.893-4.597
							c-10.696,0-19.397,8.701-19.397,19.397c0,10.696,8.284,18.751,18.979,18.751c0,0,89.985,0,90.369,0
							C139.738,68.5,139.505,67.988,139.353,67.836z"/>
						<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="27.6285" y1="46.0741" x2="56.5855" y2="31.1643">
							<stop  offset="0" style="stop-color:#FFFFFF"/>
							<stop  offset="1" style="stop-color:#DCDDDE"/>
						</linearGradient>
						<path fill="url(#SVGID_1_)" d="M48.918,35.594c1.561,0,3.103,0.26,4.563,0.756c2.144,0.933,5.192,0.916,6.027,0.488
							c-4.952-1.286-6.11-6.487-10.589-6.487c-10.696,0-19.397,8.701-19.397,19.397h4.718C34.239,41.944,41.113,35.594,48.918,35.594z"
							/>
					</g>
					<path fill="#FFFFFF" d="M59.598,62.905c-5.901,0-10.702-4.801-10.702-10.702S53.697,41.5,59.598,41.5s10.703,4.801,10.703,10.703
						S65.499,62.905,59.598,62.905z M59.598,45.662c-3.606,0-6.54,2.934-6.54,6.541c0,3.606,2.934,6.54,6.54,6.54
						c3.607,0,6.541-2.934,6.541-6.54C66.138,48.596,63.205,45.662,59.598,45.662z"/>
					<g>
						<path fill="#FFFFFF" d="M73.642,70.59c0,3.22,0.001,5.668,0.001,6.075c0,0.868,0.512,0.636,0.664,0.484
							c0.248-0.248,1.041-1.137,1.041-1.137s1.602-2.204,1.816-2.421c0.136-0.138,0.337-0.452,0.337-0.95c0-0.117,0-0.917,0-2.142
							L73.642,70.59z"/>
						<path fill="#FFFFFF" d="M94.921,52.342c0-5.858-4.765-10.624-10.624-10.624c-5.858,0-10.795,4.924-10.795,10.782H73.5v10h4.154
							c0,0,0-9.995,0-10h0.003c0-3.559,3.066-6.642,6.625-6.642c3.558,0,6.454,2.895,6.454,6.454c0,3.554-2.889,6.446-6.441,6.453
							c0,0-1.656-0.001-2.998-0.001c-0.663,0-0.589,0.475-0.481,0.659c0.208,0.353,1.639,2.753,1.842,3.064
							c0.097,0.149,0.537,0.48,1.031,0.48c0.391,0,0.653-0.003,0.654-0.003v-0.001C90.179,62.939,94.921,58.185,94.921,52.342z"/>
					</g>
					<path fill="#FFFFFF" d="M112.91,41.75c0,0.001-2.998,0.001-2.998,0.001v0c-0.677,0-0.85,0-0.85,0
						c-5.858,0-10.624,4.766-10.624,10.624L98.5,60.5v2h4v-2v-8c0-3.909,2.863-6.446,7.355-6.47l0,0.001
						c0.002,0,0.263,0.003,0.654,0.003c0.494,0,0.93-0.333,1.031-0.48c0.213-0.308,1.642-2.792,1.851-3.145
						C113.499,42.225,113.573,41.75,112.91,41.75z"/>
					<path fill="#FFFFFF" d="M124.237,41.692c-5.858,0-10.624,4.766-10.624,10.624c0,5.845,4.745,10.602,10.586,10.623v0.009l0.123,0
						c0.292,0,0.53-0.239,0.53-0.53l0-3.232c0-0.292-0.239-0.53-0.53-0.53h-0.124v0.005c-3.506-0.021-6.353-2.819-6.353-6.711
						c0-2.859,2.867-5.97,6.392-5.97s6.263,2.525,6.263,5.52v11h4v-11C134.5,45.642,130.095,41.692,124.237,41.692z"/>
				</g>
			</svg>


			<div class="logo-shadow"></div>
		</a>
		<div class="main-navigation-list">
			<?=loop(Api::get('streams/navigation?nested=true&limit=100&status=1&language='.Config::get('app.locale')));
			?>
		</div>

	</div>

</div>
