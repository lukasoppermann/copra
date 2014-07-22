'use strict';

var support = {
	svg: function(){
		return !!document.createElementNS && !!document.createElementNS('http://www.w3.org/2000/svg', 'svg').createSVGRect;
	}
} 

require.config({
	baseUrl: "/copra/public/js/bower_components",
});