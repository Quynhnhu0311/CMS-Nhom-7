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
define('THEME_URI', get_stylesheet_directory_uri());
define('THEME_PATH', get_theme_file_path( ));
define('THEME_URI_TEMPLATE', get_template_directory_uri( ));

//Includes
require_once 'includes/enqueue.php';
include('includes/setup.php');
// include('includes/class-glw-custom-nav-walker.php');
include('includes/quickview.php');

//HOOK ACTION - FILTER
add_action('wp_enqueue_scripts', 'glw_enqueue');
add_action('init', 'glw_theme_setup');

function initTheme() {
    register_nav_menu('header-menu', __('header menu'));
}
add_action('init', 'initTheme');
//Add Menu Header
if(!function_exists('header_menu')){
    function header_menu($menu_header) {
        $menu_header = array(
            'theme_location' => $menu_header,
            'container' => 'false',
            'menu_id' => 'header_menu',
            'menu_class' => $menu_header
        );
        wp_nav_menu($menu_header);
    }
}
