(function ($) {

	// ADJUST PAGE HEADER IMAGE HEIGHT ON MOBILE
	function adjustPageHeaderImg() {
		var       pageTitle = $('.iconAndTitleContainer'),
			featuredBgImage = $('.pageHeaderBgGrid'),
			pageTitleHeight = pageTitle.outerHeight();
		if (pageTitle.css('position') == 'absolute') {
			featuredBgImage.css({
				'height': 'calc(100% - ' + pageTitleHeight + 'px)'
			});
		}
	}
	
	$(window).load(function() {
		adjustPageHeaderImg();
	});
	$(window).resize(function() {
		adjustPageHeaderImg();
	});

})(jQuery);