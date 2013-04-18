<?php

/* -- Registering Widgets
------------------------------------------------- */
if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Klipspringer Column 1',
		'id'   => 'ssklip-col1',
		'description'   => 'Use 1 column layout for more advanced configurations. See documentation for more information.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	
	register_sidebar(array(
		'name' => 'Klipspringer Column 2',
		'id'   => 'ssklip-col2',
		'description'   => 'Activated in 2, 3 and 4 column layouts.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	
	register_sidebar(array(
		'name' => 'Klipspringer Column 3',
		'id'   => 'ssklip-col3',
		'description'   => 'Activated in 3 and 4 column layouts.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	
	register_sidebar(array(
		'name' => 'Klipspringer Column 4',
		'id'   => 'ssklip-col4',
		'description'   => 'Activated in 4 column layout.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

}
add_action('wp_footer', 'ssklip_set_widget_content');


/* -- Global JS Variables
------------------------------------------------- */
function ssklip_global_js_vars() {

	// Load the global options variable
	global $ssklip_options_accessibility;
	global $ssklip_options_closebutton;
	global $ssklip_options_customstyles;
	
	
	// Local variables
	$btn_pos = $ssklip_options_closebutton['button_position'];
	
	// Positioning the Close Button	
	if (isset($btn_pos) && ($btn_pos == 'tl')){
		echo 
			'<style>
				.ssklip-button-close {
					top:0; left: 0;
				}
			</style>';
		
	} elseif(isset($btn_pos) && ($btn_pos == 'tr')) { 
		echo 
			'<style>
				.ssklip-button-close {
					top:0; right: 0;
				}
			</style>';
		
	} elseif(isset($btn_pos) && ($btn_pos == 'bl')) {
		echo 
			'<style>
				.ssklip-button-close {
					bottom:0; left: 0;
				}
			</style>';
		
	} else {
		echo 
			'<style>
				.ssklip-button-close {
					bottom:0; right: 0;
				}
			</style>';
		
	}
	
	// Close button underline text
	if (isset($ssklip_options_closebutton['button_underline'])) {
		echo 
			'<style>
				.ssklip-button-close {
					text-decoration: underline;
				}
			</style>';
	} 
	
	// Close button uppercase text
	if (isset($ssklip_options_closebutton['button_uppercase'])) {
		echo 
			'<style>
				.ssklip-button-close {
					text-transform: uppercase;
				}
			</style>';
	}		
	
	
	// If Close button enabled/disabled
	// Set variable with appropriate state
	if (isset($ssklip_options_accessibility['enable_xbutton'])) {
		$ssklip_xbutton = 'enabled';
	} else {
		$ssklip_xbutton = 'disabled';
		echo 
			'<style>
				.ssklip-button-close {
					display: none !important;
				}
			</style>';
	}
	
	// Echo Custom styles
	echo '<style>'.$ssklip_options_customstyles['styles'].'</style>';
	
	// ESC key enabled/disabled
	// Set variable with appropriate state
	if (isset($ssklip_options_accessibility['enable_esc'])) {
		$ssklip_esc = 'enabled';
	} else {
		$ssklip_esc = 'disabled';
	}
	
	// Scroll to close enabled/disabled
	// Set variable with appropriate state
	if (isset($ssklip_options_accessibility['enable_scroll'])) {
		$ssklip_scroll = 'enabled';
	} else {
		$ssklip_scroll = 'disabled';
	}

	// Store the values as javascript global variables
	echo 
		'<script type="text/javascript">
			var ssklip_xbutton = "'. $ssklip_xbutton .'";
			var ssklip_esc = "'. $ssklip_esc .'";
			var ssklip_scroll = "'. $ssklip_scroll .'";
		</script>';
}
add_action( 'wp_head', 'ssklip_global_js_vars' );

?>