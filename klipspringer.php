<?php
/*
Plugin Name: Klipspringer
Plugin URI: www.google.com
Description: Dropdown widget area for storing usefull information.
Author: Stacigh Studios
Author URI: http://www.stacighstudios.com
Version: 1.0
*/

/* -- Global Variables
------------------------------------------------- */
$ssklip_options_accessibility = get_option('ssklip_settings_accessibility'); // Retrieve plugin settings from option table for accessibility form
$ssklip_options_appearance = get_option('ssklip_settings_appearance'); // Retrieve plugin settings from option table for appearance form
$ssklip_options_closebutton = get_option('ssklip_settings_closebutton'); // Retrieve plugin settings from option table for close button form
$ssklip_options_customstyles = get_option('ssklip_settings_customstyles'); // Retrieve plugin settings from option table for custom styles form

/* -- Styles & Scripts
------------------------------------------------- */
include('includes/scripts.php'); // Controls all JS/CSS

/* -- CSS Overrides
------------------------------------------------- */
include('includes/css-overrides.php'); // CSS overrides

/* -- Includes
------------------------------------------------- */
include('includes/display-functions.php'); // Functions
include('includes/admin-page.php'); // Settings page content & functions
include('includes/widget-content.php'); // Widgetized areas HTML

/* -- Link from plugin directory to settings page
------------------------------------------------- */
function ssklip_action_links($links, $file) {
    static $this_plugin;
 
    if (!$this_plugin) {
        $this_plugin = plugin_basename(__FILE__);
    }
 
    // check to make sure we are on the correct plugin
    if ($file == $this_plugin) {
        // the anchor tag and href to the URL we want. For a "Settings" link, this needs to be the url of your settings page
        $settings_link = '<a href="' . get_admin_url() . 'options-general.php?page=ssklip_options">Settings</a>';
        // add the link to the list
        array_unshift($links, $settings_link);
    }
 
    return $links;
}
include_once dirname( __FILE__ ).'/includes/defaults.php';
register_activation_hook( __FILE__, 'ssklip_add_defaults_accessibility');
register_activation_hook( __FILE__, 'ssklip_add_defaults_appearance');
register_activation_hook( __FILE__, 'ssklip_add_defaults_closebutton');

add_filter('plugin_action_links', 'ssklip_action_links', 10, 2);

?>