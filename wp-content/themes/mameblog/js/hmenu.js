jQuery(function(){
	$hmenu = jQuery('#h-menu');
	 $hmenu.click(function(){
                jQuery(this).toggleClass('open');
                jQuery('#hmenu-nav').toggleClass('open');
      });
});