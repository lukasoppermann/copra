<?php
function loop( $nav, $lang)
{
	foreach ($nav as $item)
	{
		// $content = checkLanguage($item, Config::get('content.locale'));
		if( isset($item['content']) && array_key_exists(Config::get('app.locale'), $item['content']) )
		{
			$itemContent = $item['content'][Config::get('app.locale')];

			echo '<li class="'.('content/'.trim($itemContent['link'], '/') == Request::path() ? ' is-active' : '').'">
				<a rel="dns-prefetch" data-id="'.$itemContent['id'].'" href="'.url('/content/'.trim($itemContent['link'], '/')).'">
						'.$itemContent['menu_label'].'
				</a>';
				if ( isset($item['children']) && is_array($item['children']) ){
					loop($item['children'], $lang);
				}
			echo '</li>';
			$itemContent = null;
		}
	}
}
?>
{{--------------------------

	Template: Menu

	--------------------------}}

<div class="main-navigation shadow-inside-bend">
	
	<div class="main-width">
	
		<div class="svg logo">
			<svg version="1.1" class="logo-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="140px" height="110px" viewBox="0 0 140 110" enable-background="new 0 0 140 110" xml:space="preserve">
			<g>
				<polygon fill="#E1464B" points="120,110 0,110 0,0 140,0 140,90 	"/>
				<polygon fill="#B9323C" points="120,110 140,90 120,90 	"/>
			</g>
			</svg>
			
			<div class="logo-shadow"></div>
		</div>
		<ul class="main-navigation-list">
			<?=loop(Api::get('navigation.json'), 'en'); ?>
		</ul>
			
	</div>
			
</div>