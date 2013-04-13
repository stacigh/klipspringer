<?php
function ssklip_css_overrides(){

	// Retrieve plugin settings from option table
	global $ssklip_options_appearance;
	global $ssklip_options_closebutton;

    ?>

    <style>
    .ssklip-wrapper-outer {
	    height: <?php echo $ssklip_options_appearance['height']; ?>;
	    background: <?php echo $ssklip_options_appearance['wrapper_outer_bgcolor']; ?>;
    }
    .ssklip-wrapper-inner {
	  width: <?php echo $ssklip_options_appearance['width']; ?>;
	  background: <?php echo $ssklip_options_appearance['wrapper_inner_bgcolor']; ?>;
	  color: <?php echo $ssklip_options_appearance['p_color']; ?>;
	}
	.ssklip-wrapper-inner .col1, .ssklip-wrapper-inner .col2, .ssklip-wrapper-inner .col3, .ssklip-wrapper-inner .col4 {
		padding-top: <?php echo $ssklip_options_appearance['col_padding_top']; ?>;
		padding-right: <?php echo $ssklip_options_appearance['col_padding_lr']; ?>;
		padding-bottom:  <?php echo $ssklip_options_appearance['col_padding_bottom']; ?>;
		padding-left: <?php echo $ssklip_options_appearance['col_padding_lr']; ?>;
	}
	.ssklip-wrapper-inner a:not(.ssklip-button-close) {
		color: <?php echo $ssklip_options_appearance['link_color']; ?>;
	}
	.ssklip-wrapper-inner a:not(.ssklip-button-close):hover {
		color: <?php echo $ssklip_options_appearance['link_color_hover']; ?>;		
	}
	.ssklip-wrapper-inner a:not(.ssklip-button-close):active {
		color: <?php echo $ssklip_options_appearance['link_color_active']; ?>;		
	}
	.ssklip-wrapper-inner p, .ssklip-wrapper-inner td, .ssklip-wrapper-inner span, .ssklip-wrapper-inner li, .ssklip-wrapper-inner dt, .ssklip-wrapper-inner dd, .ssklip-wrapper-inner th, .ssklip-wrapper-inner caption {
		color: <?php echo $ssklip_options_appearance['p_color']; ?>;
		font-size: <?php echo $ssklip_options_appearance['p_size']; ?>;
		line-height: <?php echo $ssklip_options_appearance['line_height']; ?>;
	}
	.ssklip-wrapper-inner h4 {
		color: <?php echo $ssklip_options_appearance['h4_color']; ?>;
		font-size: <?php echo $ssklip_options_appearance['h4_size']; ?>;
		margin-bottom: <?php echo $ssklip_options_appearance['h4_margin_bottom']; ?>;
	}
	.ssklip-button-close {
		background: <?php echo $ssklip_options_closebutton['button_bgcolor']; ?>;
		color: <?php echo $ssklip_options_closebutton['button_txtcolor']; ?>;
		font-size: <?php echo $ssklip_options_closebutton['button_txtsize']; ?>;
		letter-spacing: <?php echo $ssklip_options_closebutton['button_ltrspace']; ?>;
		padding-top: <?php echo $ssklip_options_closebutton['button_padding_top']; ?>;
		padding-right: <?php echo $ssklip_options_closebutton['button_padding_right']; ?>;
		padding-bottom: <?php echo $ssklip_options_closebutton['button_padding_bottom']; ?>;
		padding-left: <?php echo $ssklip_options_closebutton['button_padding_left']; ?>;
	}
	.ssklip-button-close:hover {
		background-color: <?php echo $ssklip_options_closebutton['button_bgcolor_hover']; ?>;
		color: <?php echo $ssklip_options_closebutton['button_txtcolor_hover']; ?>; 
	}
	.ssklip-button-close:active {
		background-color: <?php echo $ssklip_options_closebutton['button_bgcolor_active']; ?>;
		color: <?php echo $ssklip_options_closebutton['button_txtcolor_active']; ?>;
	}

    </style>
    <?php
}
add_action('wp_head','ssklip_css_overrides');


?>
