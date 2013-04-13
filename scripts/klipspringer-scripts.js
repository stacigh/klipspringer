jQuery(document).ready(function() {

	
	jQuery('.ssklip-wrapper-outer').appendTo("body");
    
	// Open Klipspringer
	jQuery('.ssklip-button-open').click(function(){
		//jQuery('.ssklip-wrapper-outer').slideDown();
		jQuery('.ssklip-wrapper-outer').slideDown();
		return false;
	});
	
	// If close button is enabled, run script.
	// Else do nothing.
	if (ssklip_xbutton == 'enabled'){
		jQuery('.ssklip-button-close').click(function(){
			jQuery('.ssklip-wrapper-outer').slideUp();
			return false;
		});
	} else { }
	
	
	// If Scroll to Close is enabled, run script.
	// Else, do nothing.
	if (ssklip_scroll == 'enabled'){
		jQuery(window).scroll(function(){
			jQuery('.ssklip-wrapper-outer').slideUp();
		});
	} else { }
	
	// If ESC to Close is enabled, run script.
	// Else, do nothing.
	if (ssklip_esc == 'enabled'){
		jQuery(document).keyup(function(e) {
			if (e.keyCode === 27) { jQuery('.ssklip-wrapper-outer').slideUp(); }   // esc
		});
	} else { }
});