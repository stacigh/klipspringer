<?php
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit ();
}
delete_option('ssklip_settings_accessibility');
delete_option('ssklip_settings_appearance');
delete_option('ssklip_settings_closebutton');
delete_option('ssklip_settings_customstyles');
?>