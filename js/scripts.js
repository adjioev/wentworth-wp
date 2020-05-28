(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		$('.agents-carousel').slick({
			arrows: true,
			dots: false,
			infinite: false,
			speed: 300,
			slidesToShow: 1,
			centerMode: false,
			variableWidth: true
		});
	});
	
})(jQuery, this);
