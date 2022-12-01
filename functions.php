<?php
/**
 * Limocars Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Limocars_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function limo_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Limocars Theme, use a find and replace
		* to change 'limo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'limo', get_template_directory() . '/languages' );	

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-header' => esc_html__( 'Primary', 'limo' ),
			'menu-footer' => esc_html__( 'Footer', 'limo' ),
			'menu-privacy' => esc_html__( 'Privacy', 'limo' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'limo_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function limo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'limo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'limo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Select language', 'limo' ),
			'id'            => 'select-lang',
			'description'   => esc_html__( 'Add widgets here.', 'limo' )			
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Event', 'limo' ),
			'id'            => 'add-event',
			'description'   => esc_html__( 'Add widgets here.', 'limo' ),
			'before_widget' => '<div id="%1$s" class="widget-event %2$s">',
			'after_widget'  => '</div>'					
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Form in footer', 'limo' ),
			'id'            => 'footer-form',
			'description'   => esc_html__( 'Add widgets here.', 'limo' ),
			'before_widget' => '<div class="subscribe-form">',
			'after_widget'  => '</div>'
		)
	);
}
add_action( 'widgets_init', 'limo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function limo_scripts() {
	wp_enqueue_style( 'limo-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'limo-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'limo-bootstrap-reboot-style', get_template_directory_uri() . '/css/bootstrap-reboot.min.css' );
	wp_enqueue_style( 'limo-bootstrap-utilities-style', get_template_directory_uri() . '/css/bootstrap-utilities.min.css' );
	wp_enqueue_style( 'limo-slick-style', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'limo-slick-theme-style', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'limo-main-style', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'advanced', get_template_directory_uri() . '/css/advanced.css' );

	wp_enqueue_script( 'limo-bootstrap-bundle-script', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '5.1.3', true );
	wp_enqueue_script( 'limo-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.1.3', true );
	wp_enqueue_script( 'limo-slick-script', get_template_directory_uri() . '/js/slick.min.js',array('jquery'),null,false );
	wp_enqueue_script( 'limo-main-script', get_template_directory_uri() . '/js/main.js',array('jquery'),null,false);
	wp_enqueue_script( 'advanced', get_template_directory_uri() . '/js/advanced.js',array('jquery'),null,false);
}
add_action( 'wp_enqueue_scripts', 'limo_scripts' );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
require_once get_template_directory() . '/func-advanced.php';


