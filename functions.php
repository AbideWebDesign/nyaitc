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
 * Removes default posts type
 */
 
// Remove side menu
add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
	
	remove_menu_page( 'edit.php' );

}

// Remove +New post in top Admin Menu Bar
add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );

function remove_default_post_type_menu_bar( $wp_admin_bar ) {
	
	$wp_admin_bar->remove_node( 'new-post' );

}

// Remove Quick Draft Dashboard Widget
add_action( 'wp_dashboard_setup', 'remove_draft_widget', 999 );

function remove_draft_widget(){
	
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );

}

/**
 * Map Functions
 */

function get_map_icon_html( $icon ) {
	
	if ( $icon ) {
						
		$html = "class='map-icon' data-toggle='modal' data-target='#map-modal' data-description='<h3>" . get_field($icon . '_title') . "</h3>" . get_field($icon . '_icon_description') . "' data-image='" . get_field($icon . '_icon_image') . "'";
		
		return $html;
	
	} else {
		
		return '';
		
	}
	
}