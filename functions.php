<?php

if ( ! function_exists( 'nyag_setup' ) ) {

	function abide_setup() {
		
		add_theme_support( 'title-tag' );
	
	}
	
}

/**
 * Enqueue Styles
 */

add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles', PHP_INT_MAX);

function enqueue_theme_styles() {
	    
    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
    
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
    
	wp_enqueue_style( 'map-style', get_stylesheet_directory_uri() . '/style.css', wp_get_theme()->get('Version') );

}

/**
 * Enqueue Scripts
 */
 
add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts' );

function enqueue_theme_scripts() {
		
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'oregon-map', get_stylesheet_directory_uri() . '/js/map.js', array( 'jquery', 'bootstrap' ), null, true );
	
	wp_deregister_script( 'jquery' );
	
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', false, null );
	
	wp_enqueue_script( 'jquery' );
	
}

/**
 * Map Functions
 */
function get_map_icon_html( $icon_group, $icon_image ) {
	
	
		
}