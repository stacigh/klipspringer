<form method="post" action="options.php">
    <?php settings_fields("ssklip_settings_appearance_group"); ?>
    	<table class="form-table">
		<tbody>
			<!-- SECTION: HEIGHT & WIDTH -->
			<tr valign="top">
				<th scope="row" colspan="2">
					<h3><?php _e('Height and Width of Wrappers','ssklip_domain'); ?></h3>
				</th>
			</tr>
			<!-- Set Height -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[height]"><?php _e('Set the height', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[height]" id="ssklip_settings_appearance[height]" value="<?php echo $ssklip_options_appearance['height']; ?>" />
					<p class="description"><?php _e('Default is 100%. PX, EM and % accepted.','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Set Width -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[width]"><?php _e('Set the width of inner content wrapper', 'ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[width]" id="ssklip_settings_appearance[width]" value="<?php echo $ssklip_options_appearance['width']; ?>"/>
					<p class="description"><?php _e('Default is 80%. PX, EM and % accepted.','ssklip_domain'); ?></p>
				</td>
			</tr>
			
			<!-- SECTION: BACKGROUND SETTINGS -->
			<tr valign="top">
				<th scope="row" colspan="2">
					<h3><?php _e('Background Settings', 'ssklip_domain'); ?></h3>
				</th>
			</tr>
			<!-- Set Outer Wrapper BG Color -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[wrapper_outer_bgcolor]"><?php _e('Outer wrapper background color','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[wrapper_outer_bgcolor]" id="ssklip_settings_appearance[wrapper_outer_bgcolor]" value="<?php echo $ssklip_options_appearance['wrapper_outer_bgcolor']; ?>" />
					<p class="description"><?php _e('Default is #333. Accepts #HEX, rgb(), rgba(), and hsl()','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Set Inner Wrapper BG Color -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[wrapper_inner_bgcolor]"><?php _e('Set inner content wrapper background color','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[wrapper_inner_bgcolor]" id="ssklip_settings_appearance[wrapper_inner_bgcolor]" value="<?php echo $ssklip_options_appearance['wrapper_inner_bgcolor']; ?>" />
					<p class="description"><?php _e('Default is #333. Accepts #HEX, rgb(), rgba(), and hsl()','ssklip_domain'); ?></p>
				</td>
			</tr>

			<!-- SECTION: COLUMNS -->
			<tr valign="top">
				<th scope="row" colspan="2">
					<h3><?php _e('Columns', 'ssklip_domain'); ?></h3>
				</th>
			</tr>
			<!-- Set Number of Columns -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[col_layout]"><?php _e('Set number of columns','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="radio" name="ssklip_settings_appearance[col_layout]" value="1" <?php if (isset($ssklip_options_appearance['col_layout'])) { checked('1', $ssklip_options_appearance['col_layout']); } ?>> <?php _e('1','ssklip_domain'); ?><br />
					<input type="radio" name="ssklip_settings_appearance[col_layout]" value="2" <?php if (isset($ssklip_options_appearance['col_layout'])) { checked('2', $ssklip_options_appearance['col_layout']); } ?>> <?php _e('2','ssklip_domain'); ?><br />
					<input type="radio" name="ssklip_settings_appearance[col_layout]" value="3" <?php if (isset($ssklip_options_appearance['col_layout'])) { checked('3', $ssklip_options_appearance['col_layout']); } ?>> <?php _e('3','ssklip_domain'); ?><br />
					<input type="radio" name="ssklip_settings_appearance[col_layout]" value="4" <?php if (isset($ssklip_options_appearance['col_layout'])) { checked('4', $ssklip_options_appearance['col_layout']); } ?>> <?php _e('4','ssklip_domain'); ?><br />
				</td>
			</tr>
			<!-- Column Top Padding -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[col_padding_top]"><?php _e('Set column top padding','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[col_padding_top]" id="ssklip_settings_appearance[col_padding_top]" value="<?php echo $ssklip_options_appearance['col_padding_top']; ?>" />
					<p class="description"><?php _e('Default is 3em.','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Column Bottom Padding -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[col_padding_bottom]"><?php _e('Set column bottom padding','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[col_padding_bottom]" id="ssklip_settings_appearance[col_padding_bottom]" value="<?php echo $ssklip_options_appearance['col_padding_bottom']; ?>" />
					<p class="description"><?php _e('Default is 3em.','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Column L/R Padding -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[col_padding_lr]"><?php _e('Set column left & right padding','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[col_padding_lr]" id="ssklip_settings_appearance[col_padding_lr]" value="<?php echo $ssklip_options_appearance['col_padding_lr']; ?>" />
					<p class="description"><?php _e('Default is 2%.','ssklip_domain'); ?></p>
				</td>
			</tr>
			
			<!-- SECTION: ADJUST TEXT -->
			<tr valign="top">
				<th scope="row" colspan="2">
					<h3><?php _e('Adjust Text', 'ssklip_domain'); ?></h3>
				</th>
			</tr>
			<!-- Set Link Color -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[link_color]"><?php _e('Set link color','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[link_color]" id="ssklip_settings_appearance[link_color]" value="<?php echo $ssklip_options_appearance['link_color']; ?>" />
					<p class="description"><?php _e('Default is inherit. Accepts #HEX, rgb(), rgba(), and hsl()','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Set Link Color :hover -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[link_color_hover]"><?php _e('Set link color on hover','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[link_color_hover]" id="ssklip_settings_appearance[link_color_hover]" value="<?php echo $ssklip_options_appearance['link_color_hover']; ?>" />
					<p class="description"><?php _e('Default is inherit. Accepts #HEX, rgb(), rgba(), and hsl()','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Set Link Color :active -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[link_color_active]"><?php _e('Set link color on mouse click','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[link_color_active]" id="ssklip_settings_appearance[link_color_active]" value="<?php echo $ssklip_options_appearance['link_color_active']; ?>" />
					<p class="description"><?php _e('Default is inherit. Accepts #HEX, rgb(), rgba(), and hsl()','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Set Heading Color -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[h4_color]"><?php _e('Set widget title color','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[h4_color]" id="ssklip_settings_appearance[h4_color]" value="<?php echo $ssklip_options_appearance['h4_color']; ?>" />
					<p class="description"><?php _e('Default is inherit. Accepts #HEX, rgb(), rgba(), and hsl()','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Set Heading Size -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[h4_size]"><?php _e('Set widget title size','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[h4_size]" id="ssklip_settings_appearance[h4_size]" value="<?php echo $ssklip_options_appearance['h4_size']; ?>" />
					<p class="description"><?php _e('Default is inherit. Accepts px, pt, em and rem.','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Set Space Between Heading and Paragraph -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[h4_margin_bottom]"><?php _e('Set space between widget title and text','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[h4_margin_bottom]" id="ssklip_settings_appearance[h4_margin_bottom]" value="<?php echo $ssklip_options_appearance['h4_margin_bottom']; ?>" />
					<p class="description"><?php _e('Default is inherit. Accepts px, pt, em and rem.','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Set Paragraph Text Color -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[p_color]"><?php _e('Set paragraph text color','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[p_color]" id="ssklip_settings_appearance[p_color]" value="<?php echo $ssklip_options_appearance['p_color']; ?>" />
					<p class="description"><?php _e('Default is inherit. Accepts #HEX, rgb(), rgba(), and hsl()','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Set Paragraph Text Size -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[p_size]"><?php _e('Set paragraph text size','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[p_size]" id="ssklip_settings_appearance[p_size]" value="<?php echo $ssklip_options_appearance['p_size']; ?>" />
					<p class="description"><?php _e('Default is inherit. Accepts px, pt, em and rem.','ssklip_domain'); ?></p>
				</td>
			</tr>
			<!-- Set Line Height -->
			<tr valign="top">
				<th scope="row">
					<label class="description" for="ssklip_settings_appearance[line_height]"><?php _e('Set line height','ssklip_domain'); ?></label>
				</th>
				<td>
					<input type="text" name="ssklip_settings_appearance[line_height]" id="ssklip_settings_appearance[line_height]" value="<?php echo $ssklip_options_appearance['line_height']; ?>" />
					<p class="description"><?php _e('Default is inherit. Accepts px, pt, em and rem.','ssklip_domain'); ?></p>
				</td>
			</tr>			
		</tbody>
	</table>
		
	<!-- SUBMIT FORM -->
	<p class="submit">
		<input type="submit" class="button-primary" value="<?php _e('Save Options', 'ssklip_domain'); ?>"
	</p>
</form>