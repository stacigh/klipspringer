<?php 

// Sets default values upon installation
function ssklip_add_defaults_accessibility() {
    $defaults = array(
    	// Accessibility
        "enable_xbutton" => '1',
        "enable_esc" => '1',
        "enable_scroll" => '1',
	);
	
    add_option( 'ssklip_settings_accessibility' , $defaults, '', 'yes');
    
}

// Sets default values upon installation
function ssklip_add_defaults_appearance() {
    $defaults = array(

        // Appearance
        "height" => '100%',
        "width" => '80%',
        "wrapper_outer_bgcolor" => '#333',
        "wrapper_inner_bgcolor" => '#333',
        "col_layout" => '4',
        "col_padding_top" => '3em',
        "col_padding_bottom" => '3em',
        "col_padding_lr" => '2%',
        "link_color" => 'inherit',
        "link_color_hover" => 'inherit',
        "link_color_active" => 'inherit',
        "h4_color" => 'inherit',
        "h4_size" => 'inherit',
        "h4_margin_bottom" => 'inherit',
        "p_color" => 'inherit',
        "p_size" => 'inherit',
        "line_height" => 'inherit',

	);
	
    add_option( 'ssklip_settings_appearance' , $defaults, '', 'yes');
    
}

// Sets default values upon installation
function ssklip_add_defaults_closebutton() {
    $defaults = array(
        // Close Button Appearance
        "button_position" => 'br',
        "button_string" => 'Close',
        "button_bgcolor" => 'rgba(26,26,26,0.7)',
        "button_txtcolor" => '#fff',
        "button_txtsize" => '.65em',
        "button_ltrspace" => '1px',
        "button_underline" => 'disabled',
        "button_uppercase" => '1',
        "button_padding_top" => '10px',
        "button_padding_bottom" => '10px',
        "button_padding_left" => '10px',
        "button_padding_right" => '10px',
        "button_bgcolor_hover" => 'rgba(26,26,26,1)',
        "button_txtcolor_hover" => '#fff',
        "button_bgcolor_active" => '#ccc',
        "button_txtcolor_active" => '#fff',
	);
	
    add_option( 'ssklip_settings_closebutton' , $defaults, '', 'yes');
    
}

// Sets default values upon installation
function ssklip_add_defaults_customstyles() {
    $defaults = array(
        // Close Button Appearance
        "styles" => '/* Enter custom styles here */'
	);
	
    add_option( 'ssklip_settings_customstyles' , $defaults, '', 'yes');
    
}

?>