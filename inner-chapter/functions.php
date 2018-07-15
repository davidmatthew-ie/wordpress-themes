<?php
/**
 * Theme functions and definitions
 * @package Inner_Chapter
 */

if (!function_exists('inner_chapter_setup')) :
	function inner_chapter_setup() {
		load_theme_textdomain( 'inner_chapter', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme')
    	));
	}
endif;
add_action( 'after_setup_theme', 'inner_chapter_setup' );

function inner_chapter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'inner_chapter_content_width', 640 );
}
add_action( 'after_setup_theme', 'inner_chapter_content_width', 0 );

function inner_chapter_globals() {
	$GLOBALS['cat_name'];
}
add_action( 'after_setup_theme', 'inner_chapter_globals' );

function inner_chapter_widgets_init() {
	register_sidebar(array(
		'name'          => esc_html__( 'Sidebar', 'inner_chapter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'inner_chapter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action( 'widgets_init', 'inner_chapter_widgets_init' );

require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
if (defined( 'JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}

function load_css() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/lib/css/bootstrap.min.css', array(), null);
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/lib/css/font-awesome.min.css', array(), null);
	wp_enqueue_style('fonts', '//fonts.googleapis.com/css?family=Bellefair|Open+Sans', array(), null);
	wp_enqueue_style('inner_chapter-style', get_stylesheet_uri(), array(), null);
}
add_action( 'wp_enqueue_scripts', 'load_css' );

function load_js() {
	wp_deregister_script('jquery');
  wp_register_script( 'jquery', includes_url('/js/jquery/jquery.js'), false, null, true);
  wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/lib/js/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_script('home-animation', get_template_directory_uri() . '/js/custom.js', array(), null, true);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'load_js' );

add_filter('show_admin_bar', '__return_false');

