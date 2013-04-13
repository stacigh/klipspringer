<form method="post" action="options.php">
    <?php settings_fields("ssklip_settings_customstyles_group"); ?>
    	<table class="form-table">
		<tbody>		
			<!-- SECTION: CLOSING KLIPSPRINGER -->
			<tr valign="top">
				<th scope="row" colspan="2">
					<h3><?php _e('','ssklip_domain'); ?></h3>
				</th>
			</tr>
			<!-- Close Button -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_customstyles[styles]"><?php _e('Custom Styles', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<textarea style="width: 100%; height: 300px;" id="ssklip_settings_customstyles[styles]" name="ssklip_settings_customstyles[styles]"><?php echo $ssklip_options_customstyles['styles']; ?></textarea>		
				</td>
			</tr>
		</tbody>
	</table>
	
		
	<!-- SUBMIT FORM -->
	<p class="submit">
		<input type="submit" class="button-primary" value="<?php _e('Save Options', 'ssklip_domain'); ?>"
	</p>
</form>