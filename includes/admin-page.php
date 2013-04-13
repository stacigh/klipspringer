<?php 

// Add Tabs to the top of the page
// Set default tab to Accessibility
function ssklip_options_page() {

	// Retrieve plugin settings from option table
	global $ssklip_options_accessibility;
	global $ssklip_options_appearance;
	global $ssklip_options_closebutton;
	global $ssklip_options_customstyles;
	
	
	// Get the current tab. Set Accessibility as default tab.
	if( isset( $_GET[ 'tab' ] ) ) {
		$current = $_GET[ 'tab' ];
	} else {
		$current = 'accessibility';
	}
	
	
	echo '<div class="wrap">';
	echo '<div id="icon-options-general" class="icon32"><br /></div>';
	
	// Define Tab Slugs & Text
    $tabs = array( 'accessibility' => 'Accessibility', 'appearance' => 'Appearance', 'closebutton' => 'Close Button Appearance', 'customstyles' => 'Custom Styles', 'documentation' => 'Documentation' );
    $links = array();
    
    // Tabs loop
    foreach( $tabs as $tab => $name ) :
    	if ( $tab == $current ) :
    		$links[] = "<a class='nav-tab nav-tab-active' href='?page=ssklip_options&tab=$tab'>$name</a>";
    	else :
    		$links[] = "<a class='nav-tab' href='?page=ssklip_options&tab=$tab'>$name</a>";
    	endif;
    endforeach;
    
    echo '<h2 class="nav-tab-wrapper">';
	    foreach ( $links as $link )
	    	echo $link;
    echo '</h2>';
    // End Tabs loop
    
    // Begin Form

    
    // BEGIN TAB CONTENT
    // Accessibility Tab
    if ($current == 'accessibility'){
	    include('admin-accessibility.php');
    }
    
    // Appearance Tab
    if ($current == 'appearance'){
	    include('admin-appearance.php');
    }
    
    // Close Button Appearance Tab
    if ($current == 'closebutton'){
	    include('admin-closebutton.php');
    }
    
    // Custom Styles Tab
    if ($current == 'customstyles'){
	    include('admin-customstyles.php');
    }
    
    // Documentation Tab
    if ($current == 'documentation'){
	    include('admin-documentation.php');
    }
    
    echo '</div>';
}

// Add Options Link to Settings Flyout Menu	
function ssklip_add_options_link(){
	add_options_page(
		'Klipspringer Options', // Page title displayed in the header
		'Klipspringer Options', // Text for the menu
		'manage_options', // Allows access to the Administration Panel Options
		'ssklip_options', // Slug
		'ssklip_options_page' // Function to be called to output content
	);
}
add_action('admin_menu', 'ssklip_add_options_link');

// Stores plugin options in the database
function ssklip_register_settings(){
	register_setting(
		'ssklip_settings_accessibility_group', // The form
		'ssklip_settings_accessibility' // The database
	);
	register_setting(
		'ssklip_settings_appearance_group', // The form
		'ssklip_settings_appearance' // The database
	);
	register_setting(
		'ssklip_settings_closebutton_group', // The form
		'ssklip_settings_closebutton' // The database
	);
	register_setting(
		'ssklip_settings_customstyles_group', // The form
		'ssklip_settings_customstyles' // The database
	);
}
add_action('admin_init', 'ssklip_register_settings');

?>