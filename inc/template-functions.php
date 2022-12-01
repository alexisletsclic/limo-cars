<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Limocars_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function limo_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'limo_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function limo_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'limo_pingback_header' );

/**
 * Register Option page
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
}
/**
 * Custom post types
 */
function limo_cpts(){
	/**
	 * Vehicles pages.
	 */

	$labels = [
		"name" => __( "Véhicules", "limo" ),
		"singular_name" => __( "Véhicules", "limo" ),
		"menu_name" => __( "Véhicules", "limo" ),
		"all_items" => __( "Tout Véhicules", "limo" ),
		"add_new" => __( "Ajouter nouveau", "limo" ),
		"add_new_item" => __( "Ajouter nouveau véhicules", "limo" ),
		"edit_item" => __( "Éditer véhicules", "limo" ),
		"new_item" => __( "Nouveau véhicules", "limo" ),
		"view_item" => __( "Voir véhicules", "limo" ),
		"view_items" => __( "Voir véhicules", "limo" ),
		"search_items" => __( "Chercher véhicules", "limo" ),
		"not_found" => __( "Véhicules pas trouvé", "limo" ),
		"not_found_in_trash" => __( "Véhicules introuvable dans la poubelle", "limo" ),
		'parent_item_colon' => ''
	];

	$args = [
		"label" => __( "Véhicules", "limo" ),
		"labels" => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show in rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'vehicules' ),
		'capability_type'    => 'page',
		//'has_archive'        => true,
		//'hierarchical'       => true,
		'menu_icon'          => 'dashicons-car',
		'menu_position'      => 7,
		'supports'           => ['title', 'page-attributes']
	];

	register_post_type( "vehicules", $args );

	/**
	 * Services pages
	 */
	$labels = [
		"name" => __( "Services", "limo" ),
		"singular_name" => __( "Services", "limo" ),
		"menu_name" => __( "Services", "limo" ),
		"all_items" => __( "Tout Services", "limo" ),
		"add_new" => __( "Ajouter nouveau", "limo" ),
		"add_new_item" => __( "Ajouter nouveau Services", "limo" ),
		"edit_item" => __( "Éditer Services", "limo" ),
		"new_item" => __( "Nouveau Services", "limo" ),
		"view_item" => __( "Voir Services", "limo" ),
		"view_items" => __( "Voir Services", "limo" ),
		"search_items" => __( "Chercher Services", "limo" ),
		"not_found" => __( "Services pas trouvé", "limo" ),
		"not_found_in_trash" => __( "Services introuvable dans la poubelle", "limo" ),
		'parent_item_colon' => ''
	];

	$args = [
		"label" => __( "Services", "limo" ),
		"labels" => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show in rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'services' ),
		'capability_type'    => 'page',
		//'has_archive'        => true,
		//'hierarchical'       => true,
		'menu_icon'          => 'dashicons-excerpt-view',
		'menu_position'      => 8,
		'supports'           => ['title', 'page-attributes']
	];

	register_post_type( "services", $args );

}
add_action('init', 'limo_cpts', 0);

/**
 * Language selector  function
 */
function language_selector_flags(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    $current_lang = apply_filters( 'wpml_current_language', NULL );
    unset($languages[$current_lang]);
    $arr = [];
    $arr['current'] = apply_filters( 'wpml_current_language', NULL );
    $arr['list'] = $languages;
    return $arr;
}
