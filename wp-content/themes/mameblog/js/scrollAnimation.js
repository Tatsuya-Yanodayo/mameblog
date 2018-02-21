jQuery(function(){
	jQuery('a[href^=#]').click(function(){
		var speed = 1400;
		var href = jQuery(this).attr("href");
		var target = jQuery(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		jQuery("html, body").animate({scrollTop:position}, speed, "easeInOutQuad");
		return false;
	});
});