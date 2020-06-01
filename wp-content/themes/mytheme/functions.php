<?php
/**
 * This is file doc comment.
 *
 * @package mytheme
 */

/**
 * This is function description for themeslug_enqueue_style().
 *
 * @package mytheme
 */
function themeslug_enqueue_style() {
	wp_enqueue_style( 'main_style', get_stylesheet_uri(), array(), '1.1', 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'blog-home', get_template_directory_uri() . '/css/blog-home.css', array(), '1.1', 'all' ); }

/**
 * This is function description for themeslug_enqueue_script().
 *
 * @package theme
 */
function themeslug_enqueue_script() {
	wp_enqueue_script( 'jquery.min.js', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), '1.1', true );
	wp_enqueue_script( 'bootstrap.bundle.min.js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.1', true );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );


/**
 * This is function description for register_dynamic_menu().
 *
 * @package mytheme
 */
function register_dynamic_menu() {
		register_nav_menus(
			array(
				'primary-menu' => __( 'Primary Menu' ),
				'footer-menu'  => __( 'Footer Menu' ),
				'sidebar-menu' => __( 'Sidebar Menu' ),
			)
		);
}
	// Executing register with add_action hook.

add_action( 'init', 'register_dynamic_menu' );
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
}

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for previous versions.
 * Use feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4. *
 * Hooks into the after_setup_theme action.
 */
$args = array(
	'default-color' => '000000',
	'default-image' => '',
);
add_theme_support( 'custom-background', $args );


/**
 * This is function description for register_dynamic_menu().
 *
 * @package mytheme
 */
$args = array(
	'width'         => 980,
	'height'        => 60,
	'default-image' => '',
);
add_theme_support( 'custom-header', $args );

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

add_theme_support( 'title-tag' );

add_theme_support('post-formats', array (
	'aside',
	'image',
	'video',
	'quote',
	'link',
	'gallery',
	'status',
	'audio',
	'chat',
) );