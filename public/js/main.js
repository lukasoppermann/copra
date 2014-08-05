'use strict';

var support = {
	svg: function(){
		return !!document.createElementNS && !!document.createElementNS('http://www.w3.org/2000/svg', 'svg').createSVGRect;
	}
}

require.config({
	baseUrl: "/copra/public/js/bower_components",
  paths: {
      // the left side is the module ID,
      // the right side is the path to
      // the jQuery file, relative to baseUrl.
      // Also, the path should NOT include
      // the '.js' file extension. This example
      // is using jQuery 1.9.0 located at
      // js/lib/jquery-1.9.0.js, relative to
      // the HTML page.
      jquery: 'jquery/dist/jquery'
  }
});


require(['requirejs-domready/domReady!', "jquery"], function(doc, $){

	// ---------------------------
	// Navigation Highlight
	//
		var children = $(".main-navigation-list > ul > li");

		for( var i = 0, c = children.length; i < c; i++  )
		{
			children[i].className += " has-red-line";
			if($(children[i]).hasClass('js-is-active'))
			{
				break;
			}
		}


		// ---------------------------
		// Section menu position
		//
		var positionSectionMenu = function(){
			var winWidth = parseInt($("body").css('width'));
			var substract = ((winWidth - 1200)/6);
			if( winWidth > 1150 && substract > 0){
				$('.js-section-menu').css('right',substract);
			}
			else
			{
				$('.js-section-menu').css('right',"");
			}
		};
		positionSectionMenu();

		var f;
		$(window).on('resize', function(){
			window.clearTimeout(f);
			f = window.setTimeout(function(){
				positionSectionMenu();
			},100);
		});


		// ---------------------------
		// Section smooth scrolling
		//
		$('a', '.js-section-menu-link').click(function(e){
			e.preventDefault();

		    $('html, body').animate({
		        scrollTop: $( $.attr(this, 'href') ).offset().top-100
		    }, 500);


		});

		// ---------------------------
		// Scroll state
		//
		$(window).on('scroll', function(f){
			clearTimeout(f);
			f = setTimeout(function(){
				if((document && document.scrollTop  || document.body && document.body.scrollTop  || 0) > 100 ){
					$(".main-navigation").addClass('is-scrolled');
				}else{
					$(".main-navigation").removeClass('is-scrolled');
				}
			},10);
		});

		// ---------------------------
		// Scroll state
		//
		$(window).on('scroll', function(f){
			if($('.js-banner') != undefined && ( document && document.scrollTop  || document.body && document.body.scrollTop  || 0) < 500){
				clearTimeout(f);
				f = setTimeout(function(){
					$('.js-banner img').css('top',-parseInt((document.body.scrollTop/100)*50)+'px');
					$('.js-banner .content-for-image').css('top',-parseInt((document.body.scrollTop/100)*25)+'px');
				},10);
			}
		});
})
