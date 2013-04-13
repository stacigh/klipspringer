<form method="post" action="options.php">
    <?php settings_fields("ssklip_settings_closebutton_group"); ?>
    	<table class="form-table">
		<tbody>
			<!-- SECTION: BUTTON POSITION -->
			<tr valign="top">
				<th scope="row" colspan="2">
					<h3><?php _e('Button Position', 'ssklip_domain'); ?></h3>
				</th>
			</tr>
			<!-- Position -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_closebutton[button_position]"><?php _e('Where would you like the button to appear?','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="radio" name="ssklip_settings_closebutton[button_position]" value="br" <?php if (isset($ssklip_options_closebutton['button_position'])) { checked('br', $ssklip_options_closebutton['button_position']); } ?>> <?php _e('Bottom Right','ssklip_domain'); ?><br />
					<input type="radio" name="ssklip_settings_closebutton[button_position]" value="bl" <?php if (isset($ssklip_options_closebutton['button_position'])) { checked('bl', $ssklip_options_closebutton['button_position']); } ?>> <?php _e('Bottom Left','ssklip_domain'); ?><br />
					<input type="radio" name="ssklip_settings_closebutton[button_position]" value="tr" <?php if (isset($ssklip_options_closebutton['button_position'])) { checked('tr', $ssklip_options_closebutton['button_position']); } ?>> <?php _e('Top Right','ssklip_domain'); ?><br />
					<input type="radio" name="ssklip_settings_closebutton[button_position]" value="tl" <?php if (isset($ssklip_options_closebutton['button_position'])) { checked('tl', $ssklip_options_closebutton['button_position']); } ?>> <?php _e('Top Left','ssklip_domain'); ?><br />
					<p class="description">Default is bottom right. If disabled, the button will not be displayed.</p>
				</td>
			</tr>
			<!-- SECTION: BUTTON APPEARANCE -->
			<tr valign="top">
				<th scope="row" colspan="2">
					<h3><?php _e('Button Appearance', 'ssklip_domain'); ?></h3>
				</th>
			</tr>
			<!-- String -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_closebutton[button_string]"><?php _e('What would you like the button to say?', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_closebutton[button_string]" id="ssklip_settings_closebutton[button_string]" value="<?php echo $ssklip_options_closebutton['button_string']; ?>" />
					<p class="description"><?php _e('Default is Close','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Background Color -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_closebutton[button_bgcolor]"><?php _e('Button background color', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_closebutton[button_bgcolor]" id="ssklip_settings_closebutton[button_bgcolor]" value="<?php echo $ssklip_options_closebutton['button_bgcolor']; ?>" />
					<p class="description"><?php _e('Default is rgba(26,26,26,.7). Accepts #HEX, rgb(), rgba(), and hsl()','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Text Color -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_closebutton[button_txtcolor]"><?php _e('Button Text Color', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_closebutton[button_txtcolor]" id="ssklip_settings_closebutton[button_txtcolor]" value="<?php echo $ssklip_options_closebutton['button_txtcolor']; ?>"/>
					<p class="description"><?php _e('Default is #FFFFFF. Accepts #HEX, rgb(), rgba(), and hsl()','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Text Size -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_closebutton[button_txtsize]"><?php _e('Button Text Size', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_closebutton[button_txtsize]" id="ssklip_settings_closebutton[button_txtsize]" value="<?php echo $ssklip_options_closebutton['button_txtsize']; ?>"/>
					<p class="description"><?php _e('Default is .65em. Accepts px, pt, em and rem.', 'ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Letter Spacing -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_closebutton[button_ltrspace]"><?php _e('Button Text Tracking/Letter Spacing', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_closebutton[button_ltrspace]" id="ssklip_settings_closebutton[button_ltrspace]" value="<?php echo $ssklip_options_closebutton['button_ltrspace']; ?>"/>
					<p class="description">Default is 1px. Accepts px, pt, em and rem.</p>
				</td>
			</tr>
			<!-- Underline Text -->
			<tr valign="top">
				<th scope="row">
					<label><?php _e('Underline text','ssklip_domain'); ?></label>
				</th>
				<td>
					<input id="ssklip_settings_closebutton[button_underline]" type="checkbox" name="ssklip_settings_closebutton[button_underline]" value="1" <?php if (isset($ssklip_options_closebutton['button_underline'])) { checked('1', $ssklip_options_closebutton['button_underline']); } ?> />
					<label class="description" for="ssklip_settings_closebutton[button_underline]"><?php _e('Enabled', 'ssklip_domain'); ?></label>
					<p class="description"><?php _e('Default is disabled.','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Uppercase Text -->
			<tr valign="top">
				<th scope="row">
					<label><?php _e('Set text in uppercase','ssklip_domain'); ?></label>
				</th>
				<td>
					<input id="ssklip_settings_closebutton[button_uppercase]" type="checkbox" name="ssklip_settings_closebutton[button_uppercase]" value="1" <?php if (isset($ssklip_options_closebutton['button_uppercase'])) { checked('1', $ssklip_options_closebutton['button_uppercase']); } ?> />
					<label class="description" for="ssklip_settings_closebutton[button_uppercase]"><?php _e('Enabled', 'ssklip_domain'); ?></label>
					<p class="description"><?php _e('Default is enabled.','ssklip_domain'); ?></p>
				</td>
			</tr>			
			<!-- Padding Top -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_closebutton[button_padding_top]"><?php _e('Button top padding', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_closebutton[button_padding_top]" id="ssklip_settings_closebutton[button_padding_top]" value="<?php echo $ssklip_options_closebutton['button_padding_top']; ?>"/>
					<p class="description"><?php _e('Default is 10px. Accepts px, pt, em and rem.','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Padding Bottom -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_closebutton[button_padding_bottom]"><?php _e('Button bottom padding', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_closebutton[button_padding_bottom]" id="ssklip_settings_closebutton[button_padding_bottom]" value="<?php echo $ssklip_options_closebutton['button_padding_bottom']; ?>"/>
					<p class="description"><?php _e('Default is 10px. Accepts px, pt, em and rem.','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Padding Left -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_closebutton[button_padding_left]"><?php _e('Button left padding', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_closebutton[button_padding_left]" id="ssklip_settings_closebutton[button_padding_left]" value="<?php echo $ssklip_options_closebutton['button_padding_left']; ?>"/>
					<p class="description"><?php _e('Default is 10px. Accepts px, pt, em and rem.','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Padding Right -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_closebutton[button_padding_right]"><?php _e('Button right padding', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_closebutton[button_padding_right]" id="ssklip_settings_closebutton[button_padding_right]" value="<?php echo $ssklip_options_closebutton['button_padding_right']; ?>"/>
					<p class="description"><?php _e('Default is 10px. Accepts px, pt, em and rem.','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- SECTION: HOVER -->
			<tr valign="top">
				<th scope="row" colspan="2">
					<h3><?php _e('On Mouse Hover', 'ssklip_domain'); ?></h3>
				</th>
			</tr>
			<!-- Background Color Hover -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_closebutton[button_bgcolor_hover]"><?php _e('Background color', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_closebutton[button_bgcolor_hover]" id="ssklip_settings_closebutton[button_bgcolor_hover]" value="<?php echo $ssklip_options_closebutton['button_bgcolor_hover']; ?>" />
					<p class="description"><?php _e('Default is rgba(26,26,26,1). Accepts #HEX, rgb(), rgba(), and hsl()','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Text Color Hover -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_closebutton[button_txtcolor_hover]"><?php _e('Text color', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_closebutton[button_txtcolor_hover]" id="ssklip_settings_closebutton[button_txtcolor_hover]" value="<?php echo $ssklip_options_closebutton['button_txtcolor_hover']; ?>" />
					<p class="description"><?php _e('Default is rgba(255,255,255,0.5). Accepts #HEX, rgb(), rgba(), and hsl()','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- SECTION: ACTIVE -->
			<tr valign="top">
				<th scope="row" colspan="2">
					<h3><?php _e('On Mouse Click', 'ssklip_domain'); ?></h3>
				</th>
			</tr>
			<!-- Background Color Active -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_closebutton[button_bgcolor_active]"><?php _e('Background color', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_closebutton[button_bgcolor_active]" id="ssklip_settings_closebutton[button_bgcolor_active]" value="<?php echo $ssklip_options_closebutton['button_bgcolor_active']; ?>" />
					<p class="description"><?php _e('Default is #CCCCCC. Accepts #HEX, rgb(), rgba(), and hsl()','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Text Color Active -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_closebutton[button_txtcolor_active]"><?php _e('Text color', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_closebutton[button_txtcolor_active]" id="ssklip_settings_closebutton[button_txtcolor_active]" value="<?php echo $ssklip_options_closebutton['button_txtcolor_active']; ?>" />
					<p class="description"><?php _e('Default is #333333. Accepts #HEX, rgb(), rgba(), and hsl()','ssklip_domain'); ?></p>
				</td>
			</tr>
		</tbody>
	</table>
	
		
	<!-- SUBMIT FORM -->
	<p class="submit">
		<input type="submit" class="button-primary" value="<?php _e('Save Options', 'ssklip_domain'); ?>"
	</p>
</form>



