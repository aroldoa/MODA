<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Site Layout
	$layout_array = array(
		'wide' => __('Wide', 'options_check'),
		'fixed' => __('Fixed', 'options_check')
	);

		// Site Layout
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '#f7f7f7',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __('General Options', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Site Title', 'options_check'),
		'desc' => __('Site Title goes here.', 'options_check'),
		'id' => 'site_title',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('Site Tagline', 'options_check'),
		'desc' => __('Site Tagline', 'options_check'),
		'id' => 'site_tagline',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('Site Description', 'options_check'),
		'desc' => __('Site description.', 'options_check'),
		'id' => 'site_description',
		'std' => 'Default Text',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Site Layout', 'options_check'),
		'desc' => __('Select the desired site layout', 'options_check'),
		'id' => 'site_layout',
		'std' => 'wide',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $layout_array);

	$options[] = array(
		'name' => __('Site Logo', 'options_check'),
		'desc' => __('Upload your own custom website logo here.', 'options_check'),
		'id' => 'site_logo',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Footer Logo', 'options_check'),
		'desc' => __('Upload your own custom website logo here for the footer area.', 'options_check'),
		'id' => 'footer_logo',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Site Favicon', 'options_check'),
		'desc' => __('Upload your own custom website favicon here.', 'options_check'),
		'id' => 'site_favicon',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Site Banner Text', 'options_check'),
		'desc' => __('Add Site Banner Message', 'options_check'),
		'id' => 'site_message',
		'std' => 'Need Help with an order? <strong>1 (800) Moda Mia</strong>',
		'type' => 'text');

	$options[] = array(
		'name' => __('Google Analytics', 'options_check'),
		'desc' => __(' Input your Google Analytics Tag Here.', 'options_check'),
		'id' => 'site_analytics',
		'std' => 'Default Text',
		'type' => 'textarea');

	// Start of Branding and Styles
	$options[] = array(
		'name' => __('Branding', 'options_check'),
		'type' => 'heading');


	// Start of Fonts

	$options[] = array(
		'name' => __('Fonts', 'options_check'),
		'type' => 'heading');

	// Start of Blog Area

	$options[] = array(
		'name' => __('Blog', 'options_check'),
		'type' => 'heading');

	// Start of Social Media Area

	$options[] = array(
		'name' => __('Social Media', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' =>  __('Site Background Style', 'options_check'),
		'desc' => __('Change the background CSS.', 'options_check'),
		'id' => 'site_background',
		'std' => $background_defaults,
		'type' => 'background' );

	$options[] = array(
		'name' => __('Check to Show a Hidden Text Input', 'options_check'),
		'desc' => __('Click here and see what happens.', 'options_check'),
		'id' => 'example_showhidden',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Hidden Text Input', 'options_check'),
		'desc' => __('This option is hidden unless activated by a checkbox click.', 'options_check'),
		'id' => 'example_text_hidden',
		'std' => 'Hello',
		'class' => 'hidden',
		'type' => 'text');

	$options[] = array(
		'name' => __('Uploader Test', 'options_check'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_check'),
		'id' => 'example_uploader',
		'type' => 'upload');

	$options[] = array(
		'name' => "Example Image Selector",
		'desc' => "Images for layout.",
		'id' => "example_images",
		'std' => "2c-l-fixed",
		'type' => "images",
		'options' => array(
			'1col-fixed' => $imagepath . '1col.png',
			'2c-l-fixed' => $imagepath . '2cl.png',
			'2c-r-fixed' => $imagepath . '2cr.png')
	);

	$options[] = array(
		'name' => __('Multicheck', 'options_check'),
		'desc' => __('Multicheck description.', 'options_check'),
		'id' => 'example_multicheck',
		'std' => $multicheck_defaults, // These items get checked by default
		'type' => 'multicheck',
		'options' => $multicheck_array);

	$options[] = array(
		'name' => __('Colorpicker', 'options_check'),
		'desc' => __('No color selected by default.', 'options_check'),
		'id' => 'example_colorpicker',
		'std' => '',
		'type' => 'color' );

	$options[] = array( 'name' => __('Typography', 'options_check'),
		'desc' => __('Example typography.', 'options_check'),
		'id' => "example_typography",
		'std' => $typography_defaults,
		'type' => 'typography' );

	$options[] = array(
		'name' => __('Custom Typography', 'options_check'),
		'desc' => __('Custom typography options.', 'options_check'),
		'id' => "custom_typography",
		'std' => $typography_defaults,
		'type' => 'typography',
		'options' => $typography_options );

	$options[] = array(
		'name' => __('Text Editor', 'options_check'),
		'type' => 'heading' );

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);

	$options[] = array(
		'name' => __('Default Text Editor', 'options_check'),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'options_check' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor',
		'type' => 'editor',
		'settings' => $wp_editor_settings );

	return $options;
}