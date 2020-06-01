<?php

/*-----------------------------------------------------------------------------------*/
/* PARENT STYLE */
/*-----------------------------------------------------------------------------------*/  

if (!function_exists('polar_lite_enqueue_parent_theme_style')) {
	
	function polar_lite_enqueue_parent_theme_style() {
	
		wp_enqueue_style( 'polar-lite-parent-style', get_stylesheet_directory_uri() . '/style.css' );
	
	}
	 
	add_action( 'wp_enqueue_scripts', 'polar_lite_enqueue_parent_theme_style' );
	
}

/*-----------------------------------------------------------------------------------*/
/* CUSTOMIZE OVERRIDE */
/*-----------------------------------------------------------------------------------*/  

if (!function_exists('polar_lite_customize_register')) {

	function polar_lite_customize_register($wp_customize) {
		
		$wp_customize->remove_control( 'suevafree_body_layout' );

	}
	
	add_action('customize_register','polar_lite_customize_register', 11);
	
}

/*-----------------------------------------------------------------------------------*/
/* BODY CLASS */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('polar_lite_body_class')) {
	
	function polar_lite_body_class($classes) {
	
		$unset_key = array_search('minimal_layout', $classes);
		if ( false !== $unset_key ) {
			unset( $classes[$unset_key] );
		}
	
		return $classes;
		
	}
	
	add_filter('body_class', 'polar_lite_body_class', 11);
	
}

?>