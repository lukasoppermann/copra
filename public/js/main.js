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
		var children = $(".main-navigation-list > li");
		
		for( var i = 0, c = children.length; i < c; i++  )
		{
			children[i].className += " has-red-line";
			if($(children[i]).hasClass('is-active'))
			{
				break;
			}
		}

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
		
		
})