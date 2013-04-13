<?php

/* -- Widgetized Areas
------------------------------------------------- */

function ssklip_set_widget_content() {  

	global $ssklip_options_appearance;
	global $ssklip_options_closebutton;
	
	// Local variables
	$col_num = $ssklip_options_appearance['col_layout'];
	
	?>
	
<div class="ssklip-wrapper-outer">
	<div class="ssklip-wrapper-inner">
	
	<?php
	
	// Positioning the Close Button	
	if (isset($col_num) && ($col_num == '1')){
		include_once('widget-content-col1.php');
		
	} elseif(isset($col_num) && ($col_num == '2')) {
		include_once('widget-content-col2.php');
		
	} elseif(isset($col_num) && ($col_num == '3')) {
		include_once('widget-content-col3.php');
		
	} else {
		include_once('widget-content-col4.php');
		
	}
	
	?>
	
			
		<a href="#" class="ssklip-button-close"><?php echo $ssklip_options_closebutton['button_string']; ?></a>
	</div>
</div>
<?php
}
?>