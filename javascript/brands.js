
;(function($) { 
	$(document).ready(function() {
		if($("#BrandBanner").length){
			$("#BrandBanner").after("<div id='BannerPrev'>&nbsp;</div><div id='BannerNext'>&nbsp;</div><div id='BannerPager'></div>").cycle({ 
			    fx:     'scrollHorz', 
			    speed:  700, 
			    timeout: 6000,
			    pager:  '#BannerPager',
			    next:   '#BannerNext', 
			    prev:   '#BannerPrev',
			    //before: onCycleBefore,
		   });
		}
	});
})(jQuery);