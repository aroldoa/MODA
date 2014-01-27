<?php

	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );

	// Load jQuery
	if (!is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://code.jquery.com/jquery-latest.min.js"), false);
	   wp_enqueue_script('jquery');
	   wp_register_script('modernizr', ("http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"), false);
	   wp_enqueue_script('modernizr');
	   wp_register_script('jquery_masonry', get_template_directory_uri(). '/js/masonry.pkgd.min.js', array('jquery'), '' );
	   wp_enqueue_script('jquery_masonry');
	   wp_register_script('jquery_slicknav', get_template_directory_uri(). '/js/jquery.slicknav.min.js', array('jquery'), '' );
	   wp_enqueue_script('jquery_slicknav');
	   wp_register_script('jquery_zoom', get_template_directory_uri(). '/js/jquery.zoom.min.js', array('jquery'), '' );
	   wp_enqueue_script('jquery_zoom');
	   wp_register_script('jquery_carousel', get_template_directory_uri(). '/js/jquery.carousel.js', array('jquery'), '' );
	   wp_enqueue_script('jquery_carousel');
	   wp_register_script('jquery_slippry', get_template_directory_uri(). '/js/slippry.min.js', array('jquery'), '' );
	   wp_enqueue_script('jquery_slippry');
	}

	function woocommerce_template_loop_product_thumbnail(){

  	//apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' );

  			$args = array(
   			'post_type' => 'attachment',
   			'numberposts' => -1,
  		    'post_status' => null,
  		    'post_parent' => $post->ID,
  		    'orderby' => 'menu_order',
  		    'order'   => 'DESC'

  );

  	$attachments = get_posts( $args );
     if ( $attachments ) {
     $num = 1 ;
     $order = '' ;
        foreach ( $attachments as $attachment ) {
        	if ($num <= 2) {
        	$order = ($num == 1 ) ? 'bottom' : 'top' ;
        	$image_attributes = wp_get_attachment_image_src( $attachment->ID, 'medium' );
			?>
		<img src="<?php echo $image_attributes[0]; ?>" class = "<?php echo $order ; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
			<?php
           $num++ ;
       }
          }
     }

	}


	function my_widget(){

	}


	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }

    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

	//image sizes

	add_image_size( '2-column', 460, 400, true ); // 220 pixels wide by 180 pixels tall, hard crop mode

	// Woocommerce Hooks
	add_theme_support( 'woocommerce' );

	define('WOOCOMMERCE_USE_CSS', false);

	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
	add_action( 'breadcrumbs', 'woocommerce_breadcrumb', 10 );

	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
	add_action( 'prodtabs', 'woocommerce_output_product_data_tabs', 20 );

	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
	add_action( 'relprod', 'woocommerce_output_related_products', 20 );

	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	add_action('add2cart','woocommerce_template_loop_add_to_cart',30);

	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
	add_action('upsellitems','woocommerce_upsell_display',35);

	remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
	add_action( 'couponform', 'woocommerce_checkout_coupon_form', 40 );

	remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
	add_action('crosssell','woocommerce_cross_sell_display');

	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
	add_action('ratings','woocommerce_template_loop_rating', 5);

	function pbuilder_row_container($styles) {
    	$styles['container'] = __('container', 'moda');
		return $styles;
	}

	add_filter('siteorigin_panels_row_styles', 'pbuilder_row_container');


	function excerpt($limit) {
		$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
    	array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
    $excerpt = implode(" ",$excerpt);
	}
		$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
	}

	function content($limit) {
		$content = explode(' ', get_the_content(), $limit);
	if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
	} else {
    $content = implode(" ",$content);
	}
	$content = preg_replace('/\[.+\]/','', $content);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
	}

	add_filter('widget_text','execute_php',100);
	function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
	 }

	register_nav_menus( array(
		'toplinks' => 'Top Links',
		'primary' => 'Primary Navigation',
		'footer-menu1' => 'Footer Menu 1',
		'footer-menu2' => 'Footer Menu 2'
		) );

	/*
	* Helper function to return the theme option value. If no value has been saved, it returns $default.
	* Needed because options are saved as serialized strings.
	*
	* This code allows the theme to work without errors if the Options Framework plugin has been disabled.
	*/
	if ( !function_exists( 'of_get_option' ) ) {
		function of_get_option($name, $default = false) {
		$optionsframework_settings = get_option('optionsframework');

	// Gets the unique option id
		$option_name = $optionsframework_settings['id'];
		if ( get_option($option_name) ) {
			$options = get_option($option_name);
			}

		if ( isset($options[$name]) ) {
			return $options[$name];
			} else {
			return $default;
			}
		}
	}

    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3 class="spb_headingLeft"><span class="noleftspace">',
    		'after_title'   => '</span></h3>'
    	));
    }

     if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Page Sidebar',
    		'id'   => 'page-sidebar',
    		'description'   => 'These are widgets for the page sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3 class="spb_headingLeft"><span class="noleftspace">',
    		'after_title'   => '</span></h3>'
    	));
    }

	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Shop Sidebar',
    		'id'   => 'shop-sidebar',
    		'description'   => 'These are widgets for the page sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3 class="spb_headingLeft"><span class="noleftspace">',
    		'after_title'   => '</span></h3>'
    	));
    }

	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer One',
    		'id'   => 'footer-one',
    		'description'   => 'These are widgets for the page sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4 class="spb_heading"><span>',
    		'after_title'   => '</span></h4>'
    	));
    }

	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer Two',
    		'id'   => 'footer-two',
    		'description'   => 'These are widgets for the page sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3 class="spb_headingLeft"><span class="noleftspace">',
    		'after_title'   => '</span></h3>'
    	));
    }

    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer Three',
    		'id'   => 'footer-three',
    		'description'   => 'These are widgets for the page sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3 class="spb_headingLeft"><span class="noleftspace">',
    		'after_title'   => '</span></h3>'
    	));
    }

    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer Four',
    		'id'   => 'footer-four',
    		'description'   => 'These are widgets for the page sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3 class="spb_headingLeft"><span class="noleftspace">',
    		'after_title'   => '</span></h3>'
    	));
    }




	add_action('init', 'portfolio');

	function portfolio()
	{
		register_post_type('portfolio',
			array(
				'labels' => array(
					'name' => __('Portfolio'),
					'singular_name' => __('Portfolio'),
					'all_items' => __('All Portfolios'),
					'add_new' => __('Add New Portfolio'),
					'add_new_item' => __('Add A New Portfolio'),
					'new_item' => __('Add Portfolio'),
					'edit_item' => __('Edit Portfolio'),
				),
				'description' => 'Use this panel to add images to the site Portfolios',
				'public' => true,
				'exclude_from_search' => true,
				'menu_position' => 20,
				'supports' => array(
					'title',
					'editor',
					'custom-fields',
					'excerpt',
					'thumbnail',
					'page-attributes',
					'comments'
				),
				'taxonomies' => array('category', 'post_tag'),
				// 'hierarchical' => true,
				'show_in_nav_menus' => false,
			)
		);
	}



	// Load Promotion Post Type
    add_action('init', 'promotions');

    function promotions()
    {
    	register_post_type('promotions',
    		array(
    			'labels' => array(
    				'name' => __('Promotions'),
    				'singular_name' => __('Promotion'),
    				'all_items' => __('All Promotions'),
    				'add_new' => __('Add New Promotion'),
    				'add_new_item' => __('Add A New Promotion'),
    				'new_item' => __('Add Promotion'),
    				'edit_item' => __('Edit Promotion'),
    			),
    			'description' => 'Use this panel to add images to the site Promotions',
    			'public' => true,
    			'exclude_from_search' => true,
    			'menu_position' => 21,
    			'supports' => array(
    				'title',
    				'editor',
    				'custom-fields',
    				'excerpt',
    				'thumbnail',
    				'page-attributes'
    			),
    			// 'hierarchical' => true,
    			'show_in_nav_menus' => false,
    		)
    	);
    }

	// Load Testimonial Post Type
    add_action('init', 'testimonials');

    function testimonials()
    {
    	register_post_type('testimonials',
    		array(
    			'labels' => array(
    				'name' => __('Testimonials'),
    				'singular_name' => __('Testimonial'),
    				'all_items' => __('All Testimonials'),
    				'add_new' => __('Add New Testimonial'),
    				'add_new_item' => __('Add A New Testimonial'),
    				'new_item' => __('Add Testimonial'),
    				'edit_item' => __('Edit Testimonial'),
    			),
    			'description' => 'Use this panel to add images to the site Testimonials',
    			'public' => true,
    			'exclude_from_search' => true,
    			'menu_position' => 22,
    			'supports' => array(
    				'title',
    				'editor',
    				'custom-fields',
    				'excerpt',
    				'page-attributes'
    			),
    			// 'hierarchical' => true,
    			'show_in_nav_menus' => false,
    		)
    	);
    }

	// Load Employees Post Type
    add_action('init', 'employees');

    function employees()
    {
    	register_post_type('employees',
    		array(
    			'labels' => array(
    				'name' => __('Employees'),
    				'singular_name' => __('Employee'),
    				'all_items' => __('All Employees'),
    				'add_new' => __('Add New Employee'),
    				'add_new_item' => __('Add A New Employee'),
    				'new_item' => __('Add Employee'),
    				'edit_item' => __('Edit Employee'),
    			),
    			'description' => 'Use this panel to add images to the site Employees',
    			'public' => true,
    			'exclude_from_search' => true,
    			'menu_position' => 23,
    			'supports' => array(
    				'title',
    				'editor',
    				'custom-fields',
    				'excerpt',
    				'thumbnail',
    				'page-attributes'
    			),
    			// 'hierarchical' => true,
    			'show_in_nav_menus' => false,
    		)
    	);
    }


	add_action('init', 'lookbooks');

	function lookbooks()
	{
		register_post_type('lookbooks',
			array(
				'labels' => array(
					'name' => __('Look Books'),
					'singular_name' => __('LookBook'),
					'all_items' => __('All Look Books'),
					'add_new' => __('Add New Look Book'),
					'add_new_item' => __('Add A New Look Book'),
					'new_item' => __('Add Look Book'),
					'edit_item' => __('Edit Look Book'),
				),
				'description' => 'Use this panel to add images to the site Look Books',
				'public' => true,
				'exclude_from_search' => true,
				'menu_position' => 24,
				'supports' => array(
					'title',
					'editor',
					'custom-fields',
					'excerpt',
					'thumbnail',
					'page-attributes'
				),
				// 'hierarchical' => true,
				'show_in_nav_menus' => false,
			)
		);
	}

	add_action('init', 'brands');

	function brands()
	{
		register_post_type('brands',
			array(
				'labels' => array(
					'name' => __('Brands'),
					'singular_name' => __('Brand'),
					'all_items' => __('All Brands'),
					'add_new' => __('Add New Brand'),
					'add_new_item' => __('Add A New Brand'),
					'new_item' => __('Add Brand'),
					'edit_item' => __('Edit Brand'),
				),
				'description' => 'Use this panel to add images to the site Brands',
				'public' => true,
				'exclude_from_search' => true,
				'menu_position' => 25,
				'supports' => array(
					'title',
					'editor',
					'custom-fields',
					'excerpt',
					'thumbnail',
					'page-attributes'
				),
				// 'hierarchical' => true,
				'show_in_nav_menus' => false,
			)
		);
	}

?>