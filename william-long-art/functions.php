<?php
/*
	Main theme functions file. Manages all site 
	assets and creates custom theme options.
*/

add_action('wp_enqueue_scripts', 'load_resources');
function load_resources() {
    // Styles
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null);
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.min.css', array(), null);
	wp_enqueue_style('wl-fonts', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700|Open+Sans', array(), null);
	wp_enqueue_style('wl-style', get_stylesheet_uri(), array(), null);
	
	// Scripts, incl de/re-registering jquery to force it into the footer
	wp_deregister_script('jquery');
	wp_register_script( 'jquery', includes_url('/js/jquery/jquery.js'), false, null, true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_script('global-js', get_template_directory_uri() . '/js/global.js', array('jquery'), null, true);
	
	if ( is_home() ) {
        wp_enqueue_script('homepage-js', get_template_directory_uri() . '/js/homepage.js', array('jquery'), null, true);
    }
}

add_filter('show_admin_bar', '__return_false');

remove_action('wp_head', 'print_emoji_detection_script', 7);

remove_action('wp_print_styles', 'print_emoji_styles');

add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
  remove_menu_page( 'edit-comments.php' );
}

add_action('after_setup_theme', 'wl_setup');
function wl_setup() {
    // register a custom primary nav menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme')
    ));
    add_theme_support('title-tag');
}

add_action( 'customize_register' , 'theme_options' );
function theme_options( $wp_customize ) {
	// Sections, settings and controls will be added here
	$wp_customize->remove_panel( 'nav_menus' );
	$wp_customize->remove_section( 'title_tagline');
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_section( 'custom_css');
	
	$wp_customize->add_section('home_page_options', 
		array(
			'title'       => __( 'Home Page', 'william-long-art' ),
			'capability'  => 'edit_theme_options',
			'description' => __('Customise the home page here.', 'william-long-art'), 
		) 
	);
	
	$wp_customize->add_setting( 'bg_img_url',
		array()
	); 
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'bg_img_url_control',
		array(
			'label'    => __( 'The URL of the background image to use.', 'william-long-art' ), 
			'type' => 'url',
			'section'  => 'home_page_options',
			'settings' => 'bg_img_url',
		) 
	));
	
	$wp_customize->add_setting( 'subheader_text',
		array()
	); 
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'subheader_text_control',
		array(
			'label'    => __( 'The text to display below the artist name.', 'william-long-art' ), 
			'type' => 'text',
			'section'  => 'home_page_options',
			'settings' => 'subheader_text',
		) 
	));
	
	$wp_customize->add_setting( 'about_text',
		array()
	); 
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'about_text_control',
		array(
			'label'    => __( 'The text to display in the About Me section.', 'william-long-art' ), 
			'type' => 'textarea',
			'section'  => 'home_page_options',
			'settings' => 'about_text',
		) 
	));
	
	$wp_customize->add_section('google_options', 
		array(
			'title'       => __( 'Google Maps & Analytics', 'william-long-art' ),
			'capability'  => 'edit_theme_options',
			'description' => __('Add your Google Maps and Analytics code here.', 'william-long-art'), 
		) 
	);
	
	$wp_customize->add_setting( 'google_maps_src',
		array()
	);
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'google_maps_control',
		array(
			'label'    => __( 'The Google Maps source URL.', 'william-long-art' ), 
			'type' => 'textarea',
			'section'  => 'google_options',
			'settings' => 'google_maps_src',
		) 
	));
	
	$wp_customize->add_setting( 'google_analytics',
		array()
	); 
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'google_analytics_control',
		array(
			'label'    => __( 'The Google Analytics code (include the script tags).', 'william-long-art' ),
			'type' => 'textarea',
			'section'  => 'google_options',
			'settings' => 'google_analytics',
		) 
	));
	
	$wp_customize->add_section('plugin_shortcodes', 
		array(
			'title'       => __( 'Plugin Shortcodes', 'william-long-art' ),
			'capability'  => 'edit_theme_options',
			'description' => __('Add your shortcodes for WPForms and FooGallery here.', 'william-long-art'), 
		) 
	);
	
	$wp_customize->add_setting( 'wpforms_shortcode',
		array()
	); 
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'wpforms_control',
		array(
			'label'    => __( 'The WPForms plugin shortcode.', 'william-long-art' ), 
			'type' => 'text',
			'section'  => 'plugin_shortcodes',
			'settings' => 'wpforms_shortcode',
		) 
	));
	
	$wp_customize->add_setting( 'foogallery_shortcode',
		array()
	); 
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'foogallery_control',
		array(
			'label'    => __( 'The FooGallery plugin shortcode.', 'william-long-art' ), 
			'type' => 'text',
			'section'  => 'plugin_shortcodes',
			'settings' => 'foogallery_shortcode',
		) 
	));
	
}