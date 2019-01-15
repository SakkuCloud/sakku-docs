<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * After theme setup settings
 */
function sakku_theme_setup() {
	global $content_width;

	/* Set the $content_width for things such as video embeds. */
	if ( ! isset( $content_width ) ) {
		$content_width = 1170;
	}

	/* Add theme support for automatic feed links. */
	add_theme_support( 'automatic-feed-links' );

	/* Generate title tag */
	add_theme_support( 'title-tag' );

	/* Add nav menus  */
	add_action( 'init', 'sakku_register_menus' );

}

add_action( 'after_setup_theme', 'sakku_theme_setup' );

/**
 * Register the navigation menua
 */
function sakku_register_menus() {
	register_nav_menu( 'main-nav', 'منوی اصلی' );
}

/**
 * Needed scripts & styles
 */
function sakku_scripts_styles() {


	// Needed scripts
	wp_enqueue_script( 'sakku-custom-js', SAKKU_THEME_JS_URL . 'custom.js',
		array( 'jquery' ), date( "h:i:s" ), true );
	wp_enqueue_script( 'sakku-jquery.treemenu.min.js', SAKKU_THEME_JS_URL . 'jquery.treemenu.min.js',
		array( 'jquery' ), true );


	// Needed css files
	$rand = rand( 1, 999999 );
	wp_enqueue_style( 'sakku-style', get_stylesheet_uri(), '', $rand );
	wp_enqueue_style( 'sakku-fontiran', SAKKU_THEME_STYLES_URL . 'fontiran.css' );
	wp_enqueue_style( 'sakku-jquery.treemenu', SAKKU_THEME_STYLES_URL . 'jquery.treemenu.css' );


}

add_action( 'wp_enqueue_scripts', 'sakku_scripts_styles' );

/**
 * Add SVG to upload
 */
function sakku_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'sakku_mime_types');

/**
 * New Excerpt
 */
function sakku_new_excerpt_more() {
	return '';
}
add_filter('excerpt_more', 'sakku_new_excerpt_more');