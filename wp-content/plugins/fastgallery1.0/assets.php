<?php
/*
File: inc/assets.php
Description: Assets inclusion
Plugin: FAST GALLERY
Author: Ad-theme.com
*/
//********************************************************************************//
// CSS
//********************************************************************************//
// Frontend
add_action( 'wp_enqueue_scripts', 'fastgallery_frontend_styles' );
function fastgallery_frontend_styles() {
	// Main
	wp_register_style( 'fastgallery-main-style',  AD_FG_URL . 'css/style.css' );
    wp_enqueue_style( 'fastgallery-main-style' );
	// PHOTOBOX
	wp_register_style( 'photobox',  AD_FG_URL . 'css/photobox.css' );
    wp_enqueue_style( 'photobox' );	
	wp_register_style( 'photoboxie',  AD_FG_URL . 'css/photobox.ie.css' );
    wp_enqueue_style( 'photoboxie' );	
	wp_register_style( 'photobox-style',  AD_FG_URL . 'css/photobox-style.css' );
    wp_enqueue_style( 'photobox-style' );	
	// PRETTYPHOTO
	wp_register_style( 'prettyPhoto',  AD_FG_URL . 'css/prettyPhoto.css' );
    wp_enqueue_style( 'prettyPhoto' );
	// MAGNIFIC POPUP
	wp_register_style( 'magnific-popup',  AD_FG_URL . 'css/magnific-popup.css' );
    wp_enqueue_style( 'magnific-popup' );	
	wp_register_style( 'fonts',  AD_FG_URL . 'css/fonts.css' );
    wp_enqueue_style( 'fonts' );			
}
// Backend
add_action( 'admin_enqueue_scripts', 'fastgallery_backend_styles' );
function fastgallery_backend_styles() {	
	// Main
	wp_register_style( 'fastgallery-backend-style',  AD_FG_URL . 'css/backend.css' );
    wp_enqueue_style( 'fastgallery-backend-style' );
}
//********************************************************************************//
// JS
//********************************************************************************//
// Frontend
add_action('wp_enqueue_scripts', 'fastgallery_frontend_scripts');
function fastgallery_frontend_scripts() {	
	// Load WP jQuery if not included
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-masonry');
	// Load main js script
	wp_enqueue_script('fastgallery-frontend-script', AD_FG_URL . 'js/frontend.js', array('jquery'), '', true);
	// PHOTOBOX
	wp_enqueue_script('photobox-js', AD_FG_URL . 'js/photobox.js', array('jquery'), '', true);
	// PRETTYPHOTO
	wp_enqueue_script('prettyPhoto-js', AD_FG_URL . 'js/jquery.prettyPhoto.js', array('jquery'), '', true);
	// MAGNIFIC POPUP
	wp_enqueue_script('magnific-popup-js', AD_FG_URL . 'js/jquery.magnific-popup.js', array('jquery'), '', true);	
}
// Backend
add_action('admin_enqueue_scripts', 'fastgallery_shortcodes_backend_scripts');
function fastgallery_shortcodes_backend_scripts() {	
	wp_enqueue_script('jquery');
	wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'wp-color-picker-script', AD_FG_URL . 'js/colorpicker.js', array( 'wp-color-picker' ), false, true );
}
if (!function_exists('adtheme_theme_setup')):
    function adtheme_theme_setup() {
		add_image_size( 'fastgallery_custom_size_default', 260, 260, true );
		add_image_size( 'sgallery', 800, 600, true );
		add_image_size( 'post-cat', 1000, 800, true );
	}	
endif;
add_action('after_setup_theme', 'adtheme_theme_setup');