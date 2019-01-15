<?php
/**
 *  The theme main directories path
 */

define( 'SAKKU_THEME_INC_DIR', get_template_directory() . '/inc/' );
define( 'SAKKU_THEME_STYLES_URL', get_template_directory_uri() . '/styles/' );
define( 'SAKKU_THEME_JS_URL', get_template_directory_uri() . '/scripts/' );
define( 'SAKKU_THEME_IMG_URL', get_template_directory_uri() . '/images/' );
define( 'SAKKU_THEME_I18N_URL', get_template_directory_uri() . '/languages/' );

/**
 * Theme Functions
 */
require_once( SAKKU_THEME_INC_DIR . 'functions.php' );
