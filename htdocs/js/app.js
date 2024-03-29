'use strict';

var support = {
	svg: function(){
		return !!document.createElementNS && !!document.createElementNS('http://www.w3.org/2000/svg', 'svg').createSVGRect;
	}
};

require.config({
	baseUrl: "/js/bower_components",
  paths: {
      "jquery": "jquery/dist/jquery"
  }
});


require(["jquery", "onMediaQuery/js/onmediaquery"], function($, MQ){


	$('.js-mobile-menu-icon').on('click', function(){
		$('.js-main-navigation-list').toggleClass('is-toggled');
	});
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
		$('a[href*="#"]', '.js-section-menu-link').click(function(e){
			e.preventDefault();

		    $('html, body').animate({
		        scrollTop: $( $.attr(this, 'href') ).offset().top-100
		    }, 500);


		});

		// ---------------------------
		// Scroll state
		//
		if((document && document.documentElement.scrollTop  || document.body && document.body.scrollTop  || 0 ) > 100 ){
			$(".main-navigation").addClass('is-scrolled');
		}else{
			$(".main-navigation").removeClass('is-scrolled');
		}

		$(window).on('scroll', function(f){
			clearTimeout(f);
			f = setTimeout(function(){
				if((document && document.documentElement.scrollTop  || document.body && document.body.scrollTop  || 0) > 100 ){
					$(".main-navigation").addClass('is-scrolled');
				}else{
					$(".main-navigation").removeClass('is-scrolled');
				}
			},10);
		});

		// ---------------------------
		// Scroll state
		//
		var scrollTop = 0;
		$(window).on('scroll', function(f){
			if($('.js-banner') !== undefined && ( document && document.documentElement.scrollTop  || document.body && document.body.scrollTop  || 0) < 500){
				clearTimeout(f);
				f = setTimeout(function(){
					scrollTop = document.body.scrollTop === 0 ? document.documentElement.scrollTop : document.body.scrollTop;
					$('.js-banner img').css('top',-parseInt((scrollTop/100)*50)+'px');
					$('.js-banner .block-content-copy').css('top',-parseInt((scrollTop/100)*25)+'px');
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
			$(this).parents('.card').addClass('is-active').siblings('.card').removeClass('is-active');
			$('.card-overlay').css({'width':$(window).width(),'height':$(window).height()}).addClass('is-active');
		});
		$('.card').find('.js-close').on('click', function(){
			$(this).parents('.card').removeClass('is-active');
			$('.card-overlay').removeClass('is-active');
		});
		$('.card-overlay').on('click', function(){
			$('.card.is-active').removeClass('is-active');
			$('.card-overlay').removeClass('is-active');
		});
		// ---------------------------
		// Searchable list with list.js
		//
		$('.js-searchable').each(function(){
			var $this = $(this);
			$this.db = {};
			$this.opts = {
				item: '.card',
				searchBox: '.js-searchable-searchBox',
				itemCount: '.js-searchable-itemCount',
				emptyState: '.js-emptyState'
			};
			// hide empty state
			$this.find($this.opts.emptyState).hide()

			// build database
			var itemId = 0, searchableData;
			$this.find($this.opts.item).each(function(){

				// reset
				searchableData = "";

				// add id
				itemId++;
				$(this).attr('data-searchableID', itemId)

				// add to db
				.find('.js-searchable-entry').each(function(){
					searchableData += $(this).text().toUpperCase().replace(/(\r\n|\n|\r)/gm,"")+' ';
				});
				$this.db[itemId] = searchableData;
			});

			// search
			var term, count = 0, hide = false;

			$this.find($this.opts.searchBox).on('keyup mouseup blur focus', function(){

				term = $(this).val().toUpperCase().replace(/(,)/gm," ").split(" ");
				count = 0;

				$.each($this.db, function(id, value){

					// reset
					hide = false;

					$.each(term, function(k, t){
						if( ! value.match( t ) )
						{
							hide = true;
							return false;
						}
					});

					if( hide === true )
					{
						$this.find("[data-searchableid="+id+"]").hide();
					}
					else
					{
						$this.find("[data-searchableid="+id+"]").show();
						count++;
					}

				});


				// set count
				$this.find($this.opts.itemCount).text(count+' Ergebnisse');

				// check if empty
				if( count === 0 )
				{
					$this.find($this.opts.emptyState).show();
				}
				else
				{
					$this.find($this.opts.emptyState).hide();
				}

			});

		});


		// ---------------------------
		// equal height
		//
		var row = {
			top: 0,
			height: 0,
			items: []
		};
		var currentDiv = 0;
		var $this;

		$('.card').each(function(){

			$this = $(this);

			if( $this.position().top != row.top )
			{
				// resize last row
				for (currentDiv = 0 ; currentDiv < row.items.length ; currentDiv++) {
					row.items[currentDiv].height(row.height);
				}

				// set height for current row
				row.items.length = 0;
				row.top = $this.position().top;
				row.height = $this.height();
				row.items.push($this);
			}
			else
			{
				row.items.push($this);
				row.height = (row.height < $this.height()) ? ($this.height()) : (row.height);
			}

			// do very last row
			for (currentDiv = 0 ; currentDiv < row.items.length ; currentDiv++) {
				row.items[currentDiv].height(row.height);
			}

		});


		// ---------------------------
		// Mediaqueries
		//
		var queries = [{
			context: ['small','medium','large'],
			match: function(size) {
				if( size == 'large' )
				{
					size = size+' hover';
				}
				$('body').addClass(size);
			},
			unmatch: function(size) {
				if( size == 'large' )
				{
					size = size+' hover';
				}
				$('body').removeClass(size);
			}
    }
		];
		// Go!
		MQ.init(queries);

});
