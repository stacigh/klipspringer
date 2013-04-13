// Add Tabs to the top of the page
// Set default tab to Accessibility
function ssklip_options_page( $current = 'accessibility' ) {

	// Retrieve plugin settings from option table
	global $ssklip_options;

	// Get the current tab. 
	if( isset( $_GET[ 'tab' ] ) ) {
		$current = $_GET[ 'tab' ];
	} 
	
	// Begin content
	ob_start(); ?>
	
	
	<div class="wrap">
			<div id="icon-plugins" class="icon32"><br></div>
			<h2><?php _e('Klipspringer Options', 'ssklip_domain'); ?></h2>
		
		<br />
	<?php
	echo ob_get_clean();

	// Tabs
    $tabs = array( 'accessibility' => 'Accessibility', 'appearance' => 'Appearance', 'close_button' => 'Close Button Appearance', 'custom_styles' => 'Custom Styles', 'documentation' => 'Documentation' );
    echo '<h2 class="nav-tab-wrapper">';
    
    // Tabs loop
    foreach( $tabs as $tab => $name ){
        $class = ( $tab == $current ) ? "nav-tab-active" : '';
        echo "<a class='nav-tab $class' href='?page=ssklip_options&tab=$tab'>$name</a>";
    }
    
    // Closing .nav-tab-wrapper
    echo '</h2>';
    
    // BEGIN TAB CONTENT
    // Accessibility Options Tab
    if ($current == 'accessibility'){
	    include('admin-accessibility.php');
    }

    echo '</div>';