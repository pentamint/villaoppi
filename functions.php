<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 12;
  return $cols;
}

// enqueue css and js files
function add_theme_scripts () {
	wp_enqueue_style( 'normalize' , get_stylesheet_directory_uri() . '/css/normalize.min.css' , array() , '8.0.0' , 'all' );
  wp_enqueue_script('pm-breadcrumbs', get_stylesheet_directory_uri().'/js/pm-breadcrumbs.js', array('jquery'),filemtime(get_stylesheet_directory() . '/js/pm-breadcrumbs.js' ));
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
