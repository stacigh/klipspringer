<form method="post" action="options.php">
    <?php settings_fields("ssklip_settings_accessibility_group"); ?>
    	<table class="form-table">
		<tbody>		
			<!-- SECTION: CLOSING KLIPSPRINGER -->
			<tr valign="top">
				<th scope="row" colspan="2">
					<h3><?php _e('How would you like your users to be able to close Klipspringer?','ssklip_domain'); ?></h3>
				</th>
			</tr>
			<!-- Close Button -->
			<tr valign="top">
				<th scope="row">
					<?php _e('Close Button','ssklip_domain'); ?>
				</th>
				<td>
					<input id="ssklip_settings_accessibility[enable_xbutton]" type="checkbox" name="ssklip_settings_accessibility[enable_xbutton]" value="1" <?php if (isset($ssklip_options_accessibility['enable_xbutton'])) { checked('1', $ssklip_options_accessibility['enable_xbutton']); } ?> />
		<label class="description" for="ssklip_settings_accessibility[enable_xbutton]"><?php _e('Enabled', 'ssklip_domain'); ?></label>
				</td>
			</tr>
			<!-- ESC Keypress -->
			<tr valign="top">
				<th scope="row">
					<?php _e('ESC Key Press','ssklip_domain'); ?>
				</th>
				<td>
					<input id="ssklip_settings_accessibility[enable_esc]" type="checkbox" name="ssklip_settings_accessibility[enable_esc]" value="1" <?php if (isset($ssklip_options_accessibility['enable_esc'])) { checked('1', $ssklip_options_accessibility['enable_esc']); } ?> />
					<label class="description" for="ssklip_settings_accessibility[enable_esc]"><?php _e('Enabled', 'ssklip_domain'); ?></label>
				</td>
			</tr>
			<!-- Window Scroll -->
			<tr valign="top">
				<th scope="row">
					<?php _e('Window Scroll','ssklip_domain'); ?>
				</th>
				<td>
					<input id="ssklip_settings_accessibility[enable_scroll]" type="checkbox" name="ssklip_settings_accessibility[enable_scroll]" value="1" <?php if (isset($ssklip_options_accessibility['enable_scroll'])) { checked('1', $ssklip_options_accessibility['enable_scroll']); } ?> />
					<label class="description" for="ssklip_settings_accessibility[enable_scroll]"><?php _e('Enabled', 'ssklip_domain'); ?></label>
				</td>
			</tr>
		</tbody>
	</table>
	
		
	<!-- SUBMIT FORM -->
	<p class="submit">
		<input type="submit" class="button-primary" value="<?php _e('Save Options', 'ssklip_domain'); ?>"
	</p>
</form>