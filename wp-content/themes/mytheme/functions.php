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
