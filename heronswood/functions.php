<?php
/*
	The main PHP functions file, where all scripts and 
	other resources are managed, and custom options 
	integrated into the main wp-admin panels.
*/

add_action('wp_enqueue_scripts', 'load_resources');
function load_resources() {
    // Styles
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null);
	wp_enqueue_style('lity', get_template_directory_uri() . '/css/lity.min.css', array(), null);
	wp_enqueue_style('lato', 'https://fonts.googleapis.com/css?family=Lato:300,700', array(), null);
	wp_enqueue_style('heronswood-style', get_stylesheet_uri(), array(), null);
	// Scripts
	wp_deregister_script('jquery');
    wp_register_script( 'jquery', includes_url('/js/jquery/jquery.js'), false, null, true);
    wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_script('lity', get_template_directory_uri() . '/js/lity.min.js', array('jquery'), null, true);
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
}

add_filter('show_admin_bar', '__return_false');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
  remove_menu_page( 'edit.php' );
  remove_menu_page( 'edit-comments.php' );
}

add_action('after_setup_theme', 'heronswood_setup');
function heronswood_setup() {
    // register a custom primary nav menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme')
    ));
    add_theme_support('title-tag');
}

add_action( 'customize_register' , 'heronswood_options' );
function heronswood_options( $wp_customize ) {
	// Sections, settings and controls will be added here
	$wp_customize->remove_panel( 'nav_menus' );
	$wp_customize->remove_section( 'title_tagline');
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_section( 'custom_css');
	$wp_customize->add_section('front_page_options', 
		array(
			'title'       => __( 'Front Page', 'heronswood' ),
			'capability'  => 'edit_theme_options',
			'description' => __('Customise the front page here.', 'heronswood'), 
		) 
	);
	$wp_customize->add_setting( 'about_us_text',
		array('default' => '<p>Run by Dr. Miriam Hally, Heronswood Medical Centre is located on the Cork Road, Carrigaline in the Heronswood Estate. There is ample free parking directly outside the surgery.</p>')
	); 
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'about_us_text_control',
		array(
			'label'    => __( 'The text to display in the About Us section.', 'heronswood' ), 
			'type' => 'textarea',
			'section'  => 'front_page_options',
			'settings' => 'about_us_text',
		) 
	));
	$wp_customize->add_setting( 'contact_us_text',
		array('default' => '<p>Please call <strong><a href="tel:0214374694">021 4374694</a></strong> for an appointment.</p><p>Surgeries are operated Monday to Friday 9:00AM to 6:00PM.</p><p>For service after hours, at weekends or on bank holidays, please call Southdoc on <strong><a href="tel:1850335999">1850 335 999</a></strong>.</p>')
	); 
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'contact_us_text_control',
		array(
			'label'    => __( 'The text to display in the Contact Us section.', 'heronswood' ), 
			'type' => 'textarea',
			'section'  => 'front_page_options',
			'settings' => 'contact_us_text',
		) 
	));
	$wp_customize->add_setting( 'find_us_text',
		array('default' => '<p>Click the location icon to find us on Googlemaps. Our full address is<br>Heronswood Medical Centre,<br>Cork Road,<br>Carrigaline,<br>Co. Cork<br>P43 VF30.</p>')
	); 
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'find_us_text_control',
		array(
			'label'    => __( 'The text to display in the Find Us section.', 'heronswood' ), 
			'type' => 'textarea',
			'section'  => 'front_page_options',
			'settings' => 'find_us_text',
		) 
	));
	$wp_customize->add_section('google_options', 
		array(
			'title'       => __( 'Google Maps & Analytics', 'heronswood' ),
			'capability'  => 'edit_theme_options',
			'description' => __('Add your Google Maps and Analytics code here.', 'heronswood'), 
		) 
	);
	$wp_customize->add_setting( 'google_maps_link',
		array('default' => '//maps.google.com/maps?q=Herons+Wood+Medical+Centre+-+Dr+Miriam+Hally+Carrigaline')
	); 
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'google_maps_control',
		array(
			'label'    => __( 'The Google Maps link.', 'heronswood' ), 
			'type' => 'textarea',
			'section'  => 'google_options',
			'settings' => 'google_maps_link',
		) 
	));
	$wp_customize->add_setting( 'google_analytics',
		array('default' => "<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-104191260-1', 'auto');ga('send', 'pageview');</script>")
	); 
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'google_analytics_control',
		array(
			'label'    => __( 'The Google Analytics code.', 'heronswood' ),
			'type' => 'textarea',
			'section'  => 'google_options',
			'settings' => 'google_analytics',
		) 
	));
}

?>