<?php
	
/* -- Scripts
------------------------------------------------- */
function ssklip_load_scripts(){
	wp_enqueue_style(
		'ssklip-grid', 
		plugin_dir_url(dirname(__FILE__)) . 'stylesheets/klipspringer-grid.css'
	);
	
	wp_enqueue_style(
		'ssklip-styles', 
		plugin_dir_url(dirname(__FILE__)) . 'stylesheets/klipspringer-styles.css'
	);
		
	wp_enqueue_script(
		'ssklip-scripts', 
		plugin_dir_url(dirname(__FILE__)) . 'scripts/klipspringer-scripts.js', 
		array('jquery'), 
		null, 
		true
	);
}
add_action('wp_enqueue_scripts', 'ssklip_load_scripts');
?>