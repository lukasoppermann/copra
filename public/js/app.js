'use strict';

var support = {
	svg: function(){
		return !!document.createElementNS && !!document.createElementNS('http://www.w3.org/2000/svg', 'svg').createSVGRect;
	}
};

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
      "jquery": "jquery/dist/jquery"
  }
});


require(["jquery", "onMediaQuery/js/onmediaquery"], function($){

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

		$(window).on('resize', function(f){
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
			if($('.js-banner') !== undefined && ( document && document.scrollTop  || document.body && document.body.scrollTop  || 0) < 500){
				clearTimeout(f);
				f = setTimeout(function(){
					$('.js-banner img').css('top',-parseInt((document.body.scrollTop/100)*50)+'px');
					$('.js-banner .block-content-copy').css('top',-parseInt((document.body.scrollTop/100)*25)+'px');
				},10);
			}
		});

		// ---------------------------
		// Image to element height
		//
		function imgFill(){
			$('.teaser-card').find('.block-content-image').each(function(){
				var $this = $(this), $img = $this.find('img');

				if( ! $img.hasClass('media--noResize') )
				{
					$this.height($this.parents('.teaser-card').height()).find('img').css('display','block');

					if( $img.css('width') < $this.css('width') )
					{
						$img.css('width',$this.css('width')).css('height','auto');
					}
				}

			});
		};

		imgFill();

		$(window).on('resize', function(f){
			window.clearTimeout(f);
			f = window.setTimeout(function(){
				imgFill();
			},100);
		});


		// ---------------------------
		// Cards
		//
		$('.js-card-details').on('click', function(){
			$(this).parents('.card').addClass('js-active').siblings('.card').removeClass('js-active');
		});
		$('.card').find('.js-close').on('click', function(){
			$(this).parents('.card').removeClass('js-active');
		});

		// ---------------------------
		// Searchable list with list.js
		//
		$('.search').on('keyup', function(){
			var term = $(this).val().toUpperCase();

			$('.card').each(function(){
				if( term !== "" && ! $(this).find("h3").text().toUpperCase().match( term.replace(/\s+/g, '.+') ) )
				{
					$(this).hide();
				}
				else
				{
					$(this).show();
				}
			});


		});
// $('.card h3').each(function(){
// if( $('.search').val().toUpperCase().match($(this).text().toUpperCase().replace(/\s+/g, '.+')) ){
// $(this).parents('.card').hide()
// }
//
// })
		// ---------------------------
		// Mediaqueries
		//
		var queries = [{
			context: ['small','medium','large'],
			match: function(size) {
				$('body').addClass(size);
			},
			unmatch: function(size) {
				$('body').removeClass(size);
			}
    }
		];
		// Go!
		MQ.init(queries);

});
