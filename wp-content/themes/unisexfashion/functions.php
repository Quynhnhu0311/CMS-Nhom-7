<?php 
/**
 * Unisex Fashion functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Unisex_Fashion
 * @since Unisex Fashion 1.0
 */

 //SET UP - DEFINE
define('THEME_URI', get_theme_file_uri( ));
define('THEME_PATH', get_theme_file_path( ));
define('THEME_URI_TEMPLATE', get_template_directory_uri( ));

//INCLUDES
include('includes/enqueue.php');
include('includes/setup.php');
include('includes/class-glw-custom-nav-walker.php');
include('includes/class-wc-checkout.php');
include('includes/quickview.php');

//HOOK ACTION - FILTER
add_action('wp_enqueue_scripts', 'glw_enqueue');
add_action('init', 'glw_theme_setup');
