<?php 

function ssklip_options_page(){
	
	// Retrieve plugin options from database
	global $ssklip_options;
	
	// Options Page Layout
	ob_start(); ?>
	<div class="wrap">
		<div id="icon-plugins" class="icon32"></div> 
		<h2><?php _e('Klipspringer Options', 'ssklip_domain'); ?></h2>
		<p><?php _e("Are you ready to tweak some settings? Great! Let's dive in:", 'ssklip_domain'); ?></p>
		
		<br />
		<h2 class="nav-tab-wrapper">
		    <a href="#" class="nav-tab">Usability Settings</a>
		    <a href="#" class="nav-tab nav-tab-active">Height & Width</a>
		    <a href="#" class="nav-tab">Appearance</a>
		</h2>
		<form method="post" action="options.php">
			
			<?php settings_fields('ssklip_settings_group'); ?>
			
			<!-- USABILITY SETTINGS -->
			<h2><?php _e('Usability Settings', 'ssklip_domain'); ?></h2>

				<! -- Disable Close Button -->
				<h3><?php _e('Close via Button', 'ssklip_domain'); ?></h3>
				<p>
					<input id="ssklip_settings[enable_xbutton]" type="checkbox" name="ssklip_settings[enable_xbutton]" value="1" <?php if (isset($ssklip_options['enable_xbutton'])) { checked('1', $ssklip_options['enable_xbutton']); } ?> />
					<label class="description" for="ssklip_settings[enable_xbutton]"><?php _e('Enable close via button', 'ssklip_domain'); ?></label>
				</p>
				
				<!-- Disable Close on ESC -->
				<h3><?php _e('Close via ESC Key', 'ssklip_domain'); ?></h3>
				<p>
					<input id="ssklip_settings[enable_esc]" type="checkbox" name="ssklip_settings[enable_esc]" value="1" <?php if (isset($ssklip_options['enable_esc'])) { checked('1', $ssklip_options['enable_esc']); } ?> />
					<label class="description" for="ssklip_settings[enable_esc]"><?php _e('Enable close via ESC key press', 'ssklip_domain'); ?></label>
				</p>
				
				<!-- Disable Close on Scroll -->
				<h3><?php _e('Close via Window Scroll', 'ssklip_domain'); ?></h3>
				<p>
					<input id="ssklip_settings[enable_scroll]" type="checkbox" name="ssklip_settings[enable_scroll]" value="1" <?php if (isset($ssklip_options['enable_scroll'])) { checked('1', $ssklip_options['enable_scroll']); } ?> />
					<label class="description" for="ssklip_settings[enable_scroll]"><?php _e('Enable close via window scroll', 'ssklip_domain'); ?></label>
				</p>
			
			
			<!-- HEIGHT AND WIDTH -->
			<h2><?php _e('Setting Height and Width', 'ssklip_domain'); ?></h2>
							
				<!-- Height of Klipspringer -->
				<h3><?php _e('Height of Klipspringer', 'ssklip_domain'); ?></h3>
				<p>
					<label class="description" for="ssklip_settings[height]"><?php _e('Set the height of Klipspringer', 'ssklip_domain'); ?></label>
					<input type="text" name="ssklip_settings[height]" id="ssklip_settings[height]" value="<?php echo $ssklip_options['height']; ?>" />
					<p>Can be in any unit. For example, 500px, 50%, 8em, etc.</p>
				</p>
				
				<!-- Width of Klipspringer -->
				<h3><?php _e('Width of Klipspringer', 'ssklip_domain'); ?></h3>
				<p>
					<label class="description" for="ssklip_settings[width]"><?php _e('Set the width of Klipspringer content wrapper', 'ssklip_domain'); ?></label>
					<input type="text" name="ssklip_settings[width]" id="ssklip_settings[width]" value="<?php echo $ssklip_options['width']; ?>"/>
					<p>By default, Klipspringer will take up the entire width of the screen. This setting will adjust the width of the content only. This also can be in any unit. For example, 960px, 80%, 20em, etc.</p>
				</p>
			
			<!-- CLOSE BUTTON -->
			<h2><?php _e('Close Button Styles', 'ssklip_domain'); ?></h2>
						
			<!-- Button Background Color -->
			<h3><?php _e('Button Background Color', 'ssklip_domain'); ?></h3>
			<p>
				<label class="description" for="ssklip_settings[button_bgcolor]"><?php _e('Button Background Color', 'ssklip_domain'); ?></label>
				<input type="text" name="ssklip_settings[button_bgcolor]" id="ssklip_settings[button_bgcolor]" value="<?php echo $ssklip_options['button_bgcolor']; ?>" />
				<p>Hint: HEX, RGB, RGBA or color name.</p>
			</p>
			
			<!-- Text Color -->
			<h3><?php _e('Button Text Color', 'ssklip_domain'); ?></h3>
			<p>
				<label class="description" for="ssklip_settings[button_txtcolor]"><?php _e('Button Text Color', 'ssklip_domain'); ?></label>
				<input type="text" name="ssklip_settings[button_txtcolor]" id="ssklip_settings[button_txtcolor]" value="<?php echo $ssklip_options['button_txtcolor']; ?>"/>
				<p>Hint: HEX, RGB, RGBA or color name.</p>
			</p>
			
			<!-- Text Size -->
			<h3><?php _e('Button Text Size', 'ssklip_domain'); ?></h3>
			<p>
				<label class="description" for="ssklip_settings[button_txtsize]"><?php _e('Button Text Size', 'ssklip_domain'); ?></label>
				<input type="text" name="ssklip_settings[button_txtsize]" id="ssklip_settings[button_txtsize]" value="<?php echo $ssklip_options['button_txtsize']; ?>"/>
				<p>Hint: PX, PT or EM.</p>
			</p>
			
			<!-- Letter Spacing -->
			<h3><?php _e('Button Text Tracking/Letter Spacing', 'ssklip_domain'); ?></h3>
			<p>
				<label class="description" for="ssklip_settings[button_ltrspace]"><?php _e('Button Text Tracking/Letter Spacing', 'ssklip_domain'); ?></label>
				<input type="text" name="ssklip_settings[button_ltrspace]" id="ssklip_settings[button_ltrspace]" value="<?php echo $ssklip_options['button_ltrspace']; ?>"/>
				<p>Hint: PX, PT or EM.</p>
			</p>
			
			<!-- Padding -->
			<h3><?php _e('Padding', 'ssklip_domain'); ?></h3>
			<p>
				<label class="description" for="ssklip_settings[button_ptop]"><?php _e('Button Padding: Top', 'ssklip_domain'); ?></label>
				<input type="text" name="ssklip_settings[button_ptop]" id="ssklip_settings[button_ptop]" value="<?php echo $ssklip_options['button_ptop']; ?>"/>
				<p>Default is 10px.</p>
				
				<label class="description" for="ssklip_settings[button_pbottom]"><?php _e('Button Padding: Bottom', 'ssklip_domain'); ?></label>
				<input type="text" name="ssklip_settings[button_pbottom]" id="ssklip_settings[button_pbottom]" value="<?php echo $ssklip_options['button_pbottom']; ?>"/>
				<p>Default is 10px.</p>
				
				<label class="description" for="ssklip_settings[button_pleft]"><?php _e('Button Padding: Left', 'ssklip_domain'); ?></label>
				<input type="text" name="ssklip_settings[button_pleft]" id="ssklip_settings[button_pleft]" value="<?php echo $ssklip_options['button_pleft']; ?>"/>
				<p>Default is 10px.</p>
				
				<label class="description" for="ssklip_settings[button_pright]"><?php _e('Button Padding: Right', 'ssklip_domain'); ?></label>
				<input type="text" name="ssklip_settings[button_pright]" id="ssklip_settings[button_pright]" value="<?php echo $ssklip_options['button_pright']; ?>"/>
				<p>Default is 10px.</p>
			</p>
			
			<!-- BUTTON ACCESSABILITY SETTINGS -->
				<h2><?php _e('Button Accessability Settings', 'ssklip_domain'); ?></h2>
							
				<!-- Background Color (hover) -->
				<h3><?php _e('Hover Styles', 'ssklip_domain'); ?></h3>
				<p>
					<label class="description" for="ssklip_settings[button_bgcolor_hover]"><?php _e('Button Background Color', 'ssklip_domain'); ?></label>
					<input type="text" name="ssklip_settings[button_bgcolor_hover]" id="ssklip_settings[button_bgcolor_hover]" value="<?php echo $ssklip_options['button_bgcolor_hover']; ?>" />
					<p>Hint: HEX, RGB, RGBA or color name.</p>
				</p>
				
				<!-- Text Color (hover) -->
				<p>
					<label class="description" for="ssklip_settings[button_txtcolor_hover]"><?php _e('Text Color', 'ssklip_domain'); ?></label>
					<input type="text" name="ssklip_settings[button_txtcolor_hover]" id="ssklip_settings[button_txtcolor_hover]" value="<?php echo $ssklip_options['button_txtcolor_hover']; ?>" />
					<p>Hint: HEX, RGB, RGBA or color name.</p>
				</p>
				
				<!-- Background Color (active) -->
				<h3><?php _e('Active (on click) Styles', 'ssklip_domain'); ?></h3>
				<p>
					<label class="description" for="ssklip_settings[button_bgcolor_active]"><?php _e('Button Background Color', 'ssklip_domain'); ?></label>
					<input type="text" name="ssklip_settings[button_bgcolor_active]" id="ssklip_settings[button_bgcolor_active]" value="<?php echo $ssklip_options['button_bgcolor_active']; ?>" />
					<p>Hint: HEX, RGB, RGBA or color name.</p>
				</p>
				
				<!-- Text Color (active) -->
				<p>
					<label class="description" for="ssklip_settings[button_txtcolor_active]"><?php _e('Text Color', 'ssklip_domain'); ?></label>
					<input type="text" name="ssklip_settings[button_txtcolor_active]" id="ssklip_settings[button_txtcolor_active]" value="<?php echo $ssklip_options['button_txtcolor_active']; ?>" />
					<p>Hint: HEX, RGB, RGBA or color name.</p>
				</p>	
				
				<!-- Outline Width (focus) -->
				<h3><?php _e('Keyboard Target (focus) Styles', 'ssklip_domain'); ?></h3>
				<p>
					<label class="description" for="ssklip_settings[button_outline_width]"><?php _e('Keyboard Focus Outline Width', 'ssklip_domain'); ?></label>
					<input type="text" name="ssklip_settings[button_outline_width]" id="ssklip_settings[button_outline_width]" value="<?php echo $ssklip_options['button_outline_width']; ?>" />
					<p>Hint: For none, set at 0px. Default is 2px.</p>
				</p>
				
				<!-- Outline Color (active) -->
				<p>
					<label class="description" for="ssklip_settings[button_outline_color]"><?php _e('Keyboard Focus Outline Color', 'ssklip_domain'); ?></label>
					<input type="text" name="ssklip_settings[button_outline_color]" id="ssklip_settings[button_outline_color]" value="<?php echo $ssklip_options['button_outline_color']; ?>" />
					<p>Hint: HEX, RGB, RGBA or color name.</p>
				</p>
				
			<!-- Background & Text Colors -->
			<h2><?php _e('Background & Text Colors', 'ssklip_domain'); ?></h2>

				<! -- Outer Wrapper BG -->
				<h3><?php _e('Klipspringer Background Colors', 'ssklip_domain'); ?></h3>
				<p>
					<label class="description" for="ssklip_settings[wrapper_outer_bgcolor]"><?php _e('Outer Wrapper Background Color', 'ssklip_domain'); ?></label>
					<input type="text" name="ssklip_settings[wrapper_outer_bgcolor]" id="ssklip_settings[wrapper_outer_bgcolor]" value="<?php echo $ssklip_options['wrapper_outer_bgcolor']; ?>" />
				</p>
				<p>
					<label class="description" for="ssklip_settings[wrapper_inner_bgcolor]"><?php _e('Content Wrapper Background Color', 'ssklip_domain'); ?></label>
					<input type="text" name="ssklip_settings[wrapper_inner_bgcolor]" id="ssklip_settings[wrapper_inner_bgcolor]" value="<?php echo $ssklip_options['wrapper_inner_bgcolor']; ?>" />
				</p>
				<p>
					<label class="description" for="ssklip_settings[wrapper_inner_txtcolor]"><?php _e('Content Text Color', 'ssklip_domain'); ?></label>
					<input type="text" name="ssklip_settings[wrapper_inner_txtcolor]" id="ssklip_settings[wrapper_inner_txtcolor]" value="<?php echo $ssklip_options['wrapper_inner_txtcolor']; ?>" />
				</p>	
				
				<!-- Column Stuff -->
			<h2><?php _e('Column Settings', 'ssklip_domain'); ?></h2>

				<! -- Top Padding -->
				<h3><?php _e('Column Padding', 'ssklip_domain'); ?></h3>
				<p>
					<label class="description" for="ssklip_settings[col_padding_top]"><?php _e('Top Padding', 'ssklip_domain'); ?></label>
					<input type="text" name="ssklip_settings[col_padding_top]" id="ssklip_settings[col_padding_top]" value="<?php echo $ssklip_options['col_padding_top']; ?>" />
				</p>
				<p>
					<label class="description" for="ssklip_settings[col_padding_bottom]"><?php _e('Bottom Padding', 'ssklip_domain'); ?></label>
					<input type="text" name="ssklip_settings[col_padding_bottom]" id="ssklip_settings[col_padding_bottom]" value="<?php echo $ssklip_options['col_padding_bottom']; ?>" />
				</p>
				<p>
					<label class="description" for="ssklip_settings[col_padding_lr]"><?php _e('Left & Right Padding', 'ssklip_domain'); ?></label>
					<input type="text" name="ssklip_settings[col_padding_lr]" id="ssklip_settings[col_padding_lr]" value="<?php echo $ssklip_options['col_padding_lr']; ?>" />
				</p>				
					
			
			<!-- SUBMIT FORM -->
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'ssklip_domain'); ?>"
			</p>
			
		</form>
	</div>
	<?php
	echo ob_get_clean();
}

// Add Options Link to Settings Flyout Menu	
function ssklip_add_options_link(){
	add_options_page('Klipspringer Options', 'Klipspringer Options', 'manage_options', 'ssklip-options', 'ssklip_options_page');
}
add_action('admin_menu', 'ssklip_add_options_link');

// Stores plugin options in the database
function ssklip_register_settings(){
	register_setting('ssklip_settings_group', 'ssklip_settings');
}
add_action('admin_init', 'ssklip_register_settings');

?>