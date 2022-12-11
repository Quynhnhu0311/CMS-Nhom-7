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
// include('includes/class-glw-custom-nav-walker.php');
include('includes/class-wc-checkout.php');
include('includes/quickview.php');
include('includes/widget.php');

function initTheme(){
    add_filter('use_block_editor_for_post', '__return_false');
    register_nav_menu('header-menu', __('header menu'));
}
//HOOK ACTION - FILTER
add_action('wp_enqueue_scripts', 'glw_enqueue');

add_action('init', 'glw_theme_setup');

add_action( 'widgets_init', 'create_widgets_init' );

add_action('init', 'initTheme');

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


add_action( 'comment_form_logged_in_after', 'ci_comment_rating_rating_field' );
add_action( 'comment_form_after_fields', 'ci_comment_rating_rating_field' );

function ci_comment_rating_rating_field () {
    echo '<label for="rating">Rating<span class="required">*</span></label>
            <fieldset class="comments-rating">
            <span class="rating-container">
        ';
		
	for ( $i = 5; $i >= 1; $i-- ){
        echo '<input type="radio" id="rating-'.$i.'" name="rating" value="'.$i.'" />
            <label for="rating-'.$i.'">'.$i.'</label>';
    }
    echo '<input type="radio" id="rating-0" class="star-cb-clear" name="rating" value="0" /><label for="rating-0">0</label>
        </span>
        </fieldset>';
			
		
}

add_comment_meta($comment_id, $meta_key, $meta_value, $unique = false);

add_action( 'comment_post', 'save_comment_meta_data' );
function save_comment_meta_data( $comment_id ) {
	if ( ( isset( $_POST['phone'] ) ) && ( $_POST['phone'] != '') )
//loại bỏ html tag trong nội dung POST
	$phone = wp_filter_nohtml_kses($_POST['phone']);
	add_comment_meta( $comment_id, 'phone', $phone );
 
	if ( ( isset( $_POST['title'] ) ) && ( $_POST['title'] != '') )
	$title = wp_filter_nohtml_kses($_POST['title']);
	add_comment_meta( $comment_id, 'title', $title );
 
	if ( ( isset( $_POST['rating'] ) ) && ( $_POST['rating'] != '') )
	$rating = wp_filter_nohtml_kses($_POST['rating']);
	add_comment_meta( $comment_id, 'rating', $rating );
}

add_filter( 'comment_text', 'ci_comment_rating_display_rating');
function ci_comment_rating_display_rating( $comment_text ){

	if ( $rating = get_comment_meta( get_comment_ID(), 'rating', true ) ) {
		$stars = '<p class="stars">';
		for ( $i = 1; $i <= $rating; $i++ ) {
			$stars .= '<span class="dashicons dashicons-star-filled"></span>';
		}
		$stars .= '</p>';
		$comment_text = $comment_text . $stars;
		return $comment_text;
	} else {
		return $comment_text;
	}
}

add_filter( 'woocommerce_valid_order_statuses_for_order_again', 'devwk_order_again_statuses' );
  
function devwk_order_again_statuses( $statuses ) {
    $statuses[] = 'processing';
    return $statuses;
}

add_filter( 'woocommerce_my_account_my_orders_actions', 'devwk_add_edit_order_my_account_orders_actions', 50, 2 );
  
function devwk_add_edit_order_my_account_orders_actions( $actions, $order ) {
    if ( $order->has_status( 'processing' ) ) {
        $actions['edit-order'] = array(
            'url'  => wp_nonce_url( add_query_arg( array( 'order_again' => $order->get_id(), 'edit_order' => $order->get_id() ) ), 'woocommerce-order_again' ),
            'name' => __( 'Cancle Order', 'woocommerce' )
        );
    }
    return $actions;
}

add_action( 'woocommerce_cart_loaded_from_session', 'devwk_detect_edit_order' );
             
function devwk_detect_edit_order( $cart ) {
    if ( isset( $_GET['edit_order'], $_GET['_wpnonce'] ) && is_user_logged_in() && wp_verify_nonce( wp_unslash( $_GET['_wpnonce'] ), 'woocommerce-order_again' ) ) WC()->session->set( 'edit_order', absint( $_GET['edit_order'] ) );
}


add_action( 'woocommerce_checkout_update_order_meta', 'devwk_save_edit_order' );
   
function devwk_save_edit_order( $order_id ) {
    $edited = WC()->session->get( 'edit_order' );
        
        // cancel previous order
        $oldorder = new WC_Order( $edited );
        $neworder_edit = get_edit_post_link( $order_id );
        $oldorder->update_status( 'cancelled', 'Đơn đặt hàng bị hủy sau khi chỉnh sửa. Số đơn đặt hàng mới:<a href="' . $neworder_edit . '">' . $order_id . '</a> -' );
        WC()->session->set( 'edit_order', null );
}