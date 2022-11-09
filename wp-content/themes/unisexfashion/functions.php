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

// function html5wp_pagination()
// {
//     global $wp_query;
//     $big = 999999999;
//     $pages = paginate_links(array(
//         'base' => str_replace($big, '%#%', get_pagenum_link($big)),
//         'format' => '?paged=%#%',
//         'current' => max(1, get_query_var('paged')),
//         'total' => $wp_query->max_num_pages,
//         'type'  => 'product',
//     ));
//     if( is_array( $pages ) ) {
//         $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
//         echo '<div class="text-center"><ul class="pagination bounceInUp animated wow" data-wow-delay=".8s">';
//         foreach ( $pages as $page ) {
//                 echo "<li>$page</li>";
//         }
//        echo '</ul></div>';
//         }
// }