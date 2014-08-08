<?php

function bf_setup() {

	// Post Format support. You can also use the legacy "gallery" or "asides" (note the plural) categories.
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'bf' ),
	) );


	// Your changeable header business starts here
	if ( ! defined( 'HEADER_TEXTCOLOR' ) )
		define( 'HEADER_TEXTCOLOR', 'fff' );

	// No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
	if ( ! defined( 'HEADER_IMAGE' ) )
		define( 'HEADER_IMAGE', '%s/../bluefreedom/images/headers/default.jpg' );

	// The height and width of your custom header. You can hook into the theme's own filters to change these values.
	// Add a filter to bf_header_image_width and bf_header_image_height to change these values.
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'bf_header_image_width', 1024 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'bf_header_image_height', 200 ) );

	// We'll be using post thumbnails for custom header images on posts and pages.
	// We want them to be 940 pixels wide by 198 pixels tall.
	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
	set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );

	// Don't support text inside the header image.
	if ( ! defined( 'NO_HEADER_TEXT' ) )
		define( 'NO_HEADER_TEXT', false );

	// Add a way for the custom header to be styled in the admin panel that controls
	// custom headers. See bf_admin_header_style(), below.
	add_custom_image_header( '', 'bf_admin_header_style' );

	// ... and thus ends the changeable header business.

	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
	register_default_headers( array(
		'default' => array(
			'url' => '%s/../bluefreedom-1024/images/headers/default.jpg',
			'thumbnail_url' => '%s/../bluefreedom-1024/images/headers/default-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Default', 'bf' )
		)
		
	) );
}



?>

