<?php

if ( ! function_exists( 'nyag_setup' ) ) {

	function abide_setup() {
		
		add_theme_support( 'title-tag' );
	
	}
	
}
add_filter( 'wp_is_application_passwords_available', '__return_false' );

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

/*
 * Admin bar customizations
 */
add_action( 'wp_before_admin_bar_render', 'admin_bar_render' );

function admin_bar_render() {
	
    global $wp_admin_bar;
	$wp_admin_bar->remove_menu('customize');
    $wp_admin_bar->remove_node('wp-logo');
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('new-post');
    $wp_admin_bar->remove_menu('search');
    $wp_admin_bar->remove_menu('themes');
    $wp_admin_bar->remove_menu('widgets');
    $wp_admin_bar->remove_node('updates');
    $wp_admin_bar->remove_menu('searchwp');
    $wp_admin_bar->remove_menu('delete-cache');
	$wp_admin_bar->remove_menu('litespeed-menu');
	
}

/*
 * Remove unused dashboard widgets
 */
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

function remove_dashboard_widgets() {
	
	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); 
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	remove_meta_box('dashboard_site_health', 'dashboard', 'normal');

}

/*
 * Remove unused user roles
 */
remove_role( 'contributor' );
remove_role( 'author' );
remove_role( 'editor' );
remove_role( 'member' );
remove_role( 'wpseo_editor' );
remove_role( 'wpseo_manager' );

/*
 * Remove Welcome panel
 */
remove_action( 'welcome_panel', 'wp_welcome_panel' );

/*
 * Remove site health
 */
add_action( 'admin_menu', 'remove_site_health_menu' );

function remove_site_health_menu() {

	remove_submenu_page( 'tools.php', 'site-health.php' );

}

/**
 * Change Login Logo URL
 */
add_filter( 'login_headerurl', 'login_logo_url' );

function login_logo_url() {
	
	return home_url();

}

/*
 * Add custom favicon to admin pages
 */
add_action( 'login_head', 'add_login_favicon' );
add_action( 'admin_head', 'add_login_favicon' );
add_action( 'wp_head', 'add_login_favicon' );

function add_login_favicon() {
	
	$favicon_url = get_stylesheet_directory_uri() . '/favicon.png';

	echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
	
}

/*
 * Add custom admin styles
 */
add_action('wp_head', 'admin_bar_style_override');
add_action('admin_head', 'admin_bar_style_override');

function admin_bar_style_override() {
	
	if ( is_user_logged_in() ) {
		
		?>
		
		<style>
			#wp-link .link-button { 
				padding: 3px 0 0; 
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
			}
			#wp-link .link-button label {
				max-width: 70%;
				padding-left: 4px;
			}
			.has-text-field #wp-link .query-results {
				top: 230px;
			}
			.yoast-notification, #edittag h2, .term-description-wrap, .term-parent-wrap, .term-name-wrap .description, .term-slug-wrap .description, .post-attributes-help-text, .menu-order-label-wrapper, #menu_order, #directory-categorydiv, .ac-message, #ac-pro-version, #direct-feedback, .installer-plugin-update-tr, .plugins .dashicons, .shortpixel-notice, #emr-news, .wrap.emr_upload_form .option-flex-wrapper, .emr_upload_form #message, .user-syntax-highlighting-wrap {
				display: none !important;
			}
			form#your-profile > h3, form#your-profile .user-profile-picture, form#your-profile .user-description-wrap, form#your-profile .user-display-name-wrap, form#your-profile .user-nickname-wrap, form#your-profile .show-admin-bar, .user-comment-shortcuts-wrap, form#your-profile .yoast-settings, form#your-profile .user-rich-editing-wrap, form#your-profile .user-admin-color-wrap, form#your-profile .user-url-wrap, form#your-profile .user-facebook-wrap, form#your-profile .user-instagram-wrap, form#your-profile .user-linkedin-wrap, form#your-profile .user-myspace-wrap, form#your-profile .user-pinterest-wrap, form#your-profile .user-soundcloud-wrap, form#your-profile .user-tumblr-wrap, form#your-profile .user-twitter-wrap, form#your-profile .user-youtube-wrap, form#your-profile .user-wikipedia-wrap  {
				display: none;
			}
			#your-profile h2 {
				display: none;
			}
			#edittag {
				max-width: 90% !important;
			}
			.acf-actions {
				text-align: left;
			}
	<?php
		
	}
	
	echo "</style>";
	
}

add_action('login_head', 'custom_login_css');

function custom_login_css() {
    echo '<style type="text/css"> 
    	body {
	    	background-color: white;
	    	
	    }
	    .login h1 a {
		    background-image: url(/wp-content/uploads/2021/12/logo.png);
		    height: 104px;
		    width: 282px;
		    background-size: 282px;
		}   
	    .login .message {
		    margin-top: 1em;
		    background-color: #EFEFEF;
		    border-left-color: #C42B38;
		}
		.login form {
			border-color: #dee2e6;
			background-color: #EFEFEF;	
		}
		#user_login, #user_login:focus {
			border-color: #dee2e6;	
			box-shadow: none;
		}	
		#login #nav {
			display: none;
		}
		.login label {
			color: #212529;
			font-weight: 700;
			font-size: .875rem;
			margin-bottom: .5em;	
		}
		.wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large {
			background-color: #C42B38;
			width: 100%;
			border-color: #C42B38;
			font-size: 1.25rem;
			line-height: 1.5;
			border-radius: .3rem;
			padding: .475rem 1.2rem;
		}
		.login #nav {
			text-align: center;
		}
		.login input[type=password] {
			border-color: #ccc;
		}
		.login #nav a {
			font-size: 16px;
			color: #C42B38;
			
		}
		.login #login_error {
			border-top: 1px solid #dee2e6;
			border-right: 1px solid #dee2e6;
			border-bottom: 1px solid #dee2e6;
		}
		</style>';
}

add_filter( 'retrieve_password_message', 'retrieve_password_message', 10, 4 );

function retrieve_password_message( $message, $key, $user_login, $user_data ) {

    // Start with the default content.
    $site_name = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES );
    $message = __( 'Someone has requested a password reset for the following account:' ) . "\r\n\r\n";
    /* translators: %s: site name */
    $message .= sprintf( __( 'Site Name: %s' ), $site_name ) . "\r\n\r\n";
    /* translators: %s: user login */
    $message .= sprintf( __( 'Username: %s' ), $user_login ) . "\r\n\r\n";
    $message .= __( 'If this was a mistake, just ignore this email and nothing will happen.' ) . "\r\n\r\n";
    $message .= __( 'To reset your password, visit the following address:' ) . "\r\n\r\n";
    $message .= '<' . network_site_url( "wp-login.php?action=rp&key=$key&login=" . rawurlencode( $user_login ), 'login' ) . ">\r\n";

    return $message;

}

add_action( 'wp_logout', 'redirect_after_logout' );

function redirect_after_logout() {
    
    wp_redirect( home_url() );
	
	exit();
	
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