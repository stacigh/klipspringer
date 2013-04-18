<br />
<h3>To add Klipspringer from your WordPress installation:</h3>
<?php
echo '<img src="' . plugins_url( 'img/01-upload-plugin.png' , __FILE__ ) . '" > ';
?>
<ol>
	<li>Download the plugin file to your Desktop or other directory.</li>
	<li>Go to <b>Plugins &gt; Add New</b>.</li>
	<li>Under <b>Upload</b>, click <b>Choose File</b>, navigate to klipspringer.zip and click <b>Install Now</b>.</li>
	<li>After Klipspringer has been uploaded, click <b>Activate Plugin</b>.</li>
</ol>
&nbsp;
<h3>Adding a Trigger Button</h3>

<p>For the most part, Klipspringer is ready to use as soon as you install it. However, you will need to add a class name to any link on your site in order to trigger the slide down area.</p>

&nbsp;

<p><i>Adding Menu Item Trigger Button</i></p>

<p>If you want your trigger to live in your global navigation menu, all you have to do is add a class to a new or existing menu item.</p>

<?php
echo '<img src="' . plugins_url( 'img/04-show-classes-box.png' , __FILE__ ) . '" > ';
?>
<ol>
	<li>Go to <b>Appearance &gt; Menus</b>.</li>
	<li>Click <b>Screen Options</b> in the upper right corner of your screen.</li>
	<li>Check <b>CSS Classes</b> from Show advanced menu properties.</li>
	<li>Add new menu item to, or choose an existing menu item from, your global navigation menu.</li>
	<li>Click the down arrow for your chosen menu item.</li>
	<?php
echo '<img src="' . plugins_url( 'img/05-menu-item-class-name.png' , __FILE__ ) . '" > ';
?>
	<li>In the <b>CSS Classes(optional)</b> box enter <i>ssklip-button-open</i> as the class name.</li>
	<li>Save your menu.</li>
</ol>
&nbsp;

<p><i>Adding Trigger to Any Object</i></p>

<p>You can make any object in your post/page a trigger item. All you have to do is add to your object from the text editor in <b>Edit Post</b> or <b>Edit Page</b>.</p>

&nbsp;

<p>If your object has an existing class, simply add a space to your class name and then include ssklip-button-open to the end of the class name. For example:</p>

<p>&lt;div class="button <b>ssklip-button-open</b>"&gt;</p>

<?php
echo '<img src="' . plugins_url( 'img/06-add-class-to-existing-button.png' , __FILE__ ) . '" > ';?>

<p><i>Adding Trigger to Shortcode</i></p>

<p>In some cases you may be able to add a trigger to an object created by a short code. If you are able to pass a class into your short code, you are able to use it as a trigger. For example:</p>

<p>[button class="ssklip-button-open"]This is your button text[/button]</p>

<?php
echo '<img src="' . plugins_url( 'img/07-open-buttons-front-end.png' , __FILE__ ) . '" > ';
?>

<h3>Adding Content to Klipspringer</h3>
<ol>
	<li>Go to Appearance &gt; Widgets.</li>
	<li>Drag desired widget into desired column.</li>
	<li>Edit your widget settings.</li>
	<li>Click Save.</li>
</ol>
&nbsp;

<h3>Changing Klipspringer Options</h3>

<p>Klipspringer can be styled to fit your theme from the Klipspringer Options panel.</p>

<p>Go to <b>Settings &gt; Klipspringer Options</b></p>

&nbsp;

<p><i>Accessibility Options</i></p>

By default, Klipspringer is set to close 3 different ways.
<ol>
	<li>Close Button: Enables a little button that the user can click to close the opened panel.</li>
	<li>ESC Key Press: Enables the user to exit the opened panel by pressing the ESC key.</li>
	<li>Window Scroll: Enables the user to exit the opened panel by simply scrolling with their mouse.
		<ul>
			<li>Note: If you have a high amount of mobile traffic, it's best that you do not use Window Scroll to close Klipspringer.
			</li>
		</ul>
	</li>
</ol>
&nbsp;

<p><i>Appearance: </i></p>

<p>If you need to adjust settings to make the Klipspringer plugin match your site, the Appearance Settings are where you adjust colors and layout.</p>
<ol>
	<li>Height: Sets the height of Klipspringer panel. Can be a percentage or pixel/em measurement.</li>
	<li>Width: Adjusts the inner content wrapper of Klipspringer panel. By default, the entire wrapper will be opened in an immersive view. This setting will keep the immersive view intact but allows you to adjust the inner content wrapper width to match the width of your site.</li>
	<li>Outer Wrapper Background Color: This is the background color for the entire drop down panel.</li>
	<li>Inner Wrapper Background Color: This is the background for the inner container only.</li>
	<li>Columns: You can adjust how many widget columns your plugin will display by selecting a value 1-4.</li>
	<li>Column Top Padding: The space between the top of the columns and the top of the website.</li>
	<li>Column Bottom Padding: The space between the bottom of the columns and the end of the Klipspringer panel wrapper.</li>
	<li>Column Left/Right Padding: The space between each column on the left and right sides.</li>
	<li>Link Color: By default, this will inherit the color from your theme but can be overridden if you wish. Accepts HEX, RGB, RGBA and HSL values. Formatting is required. For example: #00ff00 or rgb(0,255,0)</li>
	<li>Link Color on Hover: Also inherited and can also take HEX, RGB, RGBA and HSL values.</li>
	<li>Link Color on Mouse Click: Also inherited and can also take HEX, RGB, RGBA and HSL values.</li>
	<li>Widget Title Color: Also inherited and can also take HEX, RGB, RGBA and HSL values.</li>
	<li>Widget Title Size: Also inherited but accepts %, PX, PT, EM and REM values.</li>
	<li>Space between widget title and text: This is the bottom margin of the widget title. Accepts %, PX, PT, EM and REM values.</li>
	<li>Paragraph Color:  Also inherited and can also take HEX, RGB, RGBA and HSL values.</li>
	<li>Paragraph Text Size: Also inherited but can accept %, PX, PT, EM and REM values.</li>
	<li>Line Height: The space between lines of text. Inherited from your theme but also accepts %, PX, PT, EM and REM values.</li>
</ol>
&nbsp;

<p><i>Close Button Appearance</i></p>

<p>Adjust the size, color, position and general appearance of the close button. If the close button is disabled, it will not display.</p>
<ol>
	<li>Button Position: Moves the button to any corner of the inner wrapper.</li>
	<li>Button String: Default is Close but can be anything by overriding this value.</li>
	<li>Background color: Accepts HEX, RGB, RGBA and HSL values.</li>
	<li>Button Text Color: Accepts HEX, RGB, RGBA and HSL values.</li>
	<li>Button Text Size: Accepts %, PX, PT, EM and REM values.</li>
	<li>Button Tracking/Letter Spacing: The amount of space between each letter. Accepts %, PX, PT, EM and REM values.</li>
	<li>Underline Text: Check if you would like the button text to be underlined.</li>
	<li>Uppercase: Check if you would like the button text to be set in uppercase letters.</li>
	<li>Button Top Padding: Adjusts the amount of space between the text and the top of the button. This is how you set the height of the button. The height is the amount of padding on the top and bottom as well as the size of the text.</li>
	<li>Button Bottom Padding. Adjusts the amount of space between the text and the bottom of the button. This is how you set the height of the button. The height is the amount of padding on the top and bottom as well as the size of the text.</li>
	<li>Button Left Padding: Adjusts the amount of space between the text and the left side of the button. This is how the width of the button is set. The width is the amount of padding on the left and right as well as the width of the text.</li>
	<li>Button Right Padding: Adjusts the amount of space between the text and the right side of the button. This is how the width of the button is set. The width is the amount of padding on the left and right as well as the width of the text.</li>
	<li>Background Color on Mouse Hover: Accepts HEX, RGB, RGBA and HSL values.</li>
	<li>Text Color on Mouse Hover: Accepts HEX, RGB, RGBA and HSL values.</li>
	<li>Background Color on Mouse Click: Accepts HEX, RGB, RGBA and HSL values.</li>
	<li>Text Color on Mouse Click: Accepts HEX, RGB, RGBA and HSL values.</li>
</ol>
&nbsp;

<h3>Custom Styles Codex:</h3>

<dl>
	<dt><strong>.ssklip-wrapper-outer { }</strong></dt>
	<dd>The outer container that controls the width and the height of the wrapper.</dd>
</dl>

<dl>
	<dt><strong>.ssklip-wrapper-inner { }</strong></dt>
	<dd>The inner container that controls the width and height of the widget fields.</dd>
</dl>

<dl>
	<dt><strong>.ssklip-button-open { }</strong></dt>
	<dd>The trigger button. If your trigger is part of a navigation menu, you should avoid applying styles to the button. If your trigger is a button on a page, feel free to style away. Klipspringer is packaged assuming you will be using the navigation bar to open the widget area and does not include styles for the button.</dd>
</dl>

<dl>
	<dt><strong>.ssklip-button-close { }</strong></dt>
	<dd>This is the button inside the widget area that will close your widget area.</dd>
</dl>

<dl>
	<dt><strong>.ssklip-wrapper-inner .col1 { }</strong></dt>
	<dd>The first column.</dd>
</dl>

<dl>
	<dt><strong>.ssklip-wrapper-inner .col2 { }</strong></dt>
	<dd>The second column. This is disabled if you choose 1 column in the settings for Klipspringer.</dd>
</dl>

<dl>
	<dt><strong>.ssklip-wrapper-inner .col3 { }</strong></dt>
	<dd>The third column. Disabled in 1 and 2 column layouts as defined in the plugin settings.</dd>
</dl>

<dl>
	<dt><strong>.ssklip-wrapper-inner .col4 { }</strong></dt>
	<dd>The fourth column. Disabled in 1, 2 and 3 column layouts as defined in the plugin settings.</dd>
</dl>
