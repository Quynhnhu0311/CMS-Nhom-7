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
include('includes/quickview.php');

//HOOK ACTION - FILTER
add_action('wp_enqueue_scripts', 'glw_enqueue');
add_action('init', 'glw_theme_setup');

//ADD TO CART BUTTON TO PER PRODUCT
// add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 10 );

// add_filter('woocommerce_product_single_add_to_cart_text', 'sm_woo_custom_cart_button_text');
// add_filter('woocommerce_product_add_to_cart_text', 'sm_woo_custom_cart_button_text');
// function sm_woo_custom_cart_button_text(){
// 	return __('Mua Ngay', 'woocommerce');
// }
