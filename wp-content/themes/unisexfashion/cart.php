<?php
/*
    Template Name: Detail Cart
*/
?>

<?php get_header(); ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shopping Cart</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
                            <?php do_action( 'woocommerce_before_cart_table' ); ?>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php do_action( 'woocommerce_before_cart_contents' ); ?>
                                    <?php
                                        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                                            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                                            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                                            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                                    ?>
                                    <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <?php
                                                    $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                                                    if ( ! $product_permalink ) {
                                                        echo $thumbnail; // PHPCS: XSS ok.
                                                    } else {
                                                        echo $thumbnail; // PHPCS: XSS ok.
                                                    }
                                                ?>
                                            </div>
                                            <div class="product__cart__item__text" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
                                                <h6>
                                                    <?php
                                                        if ( ! $product_permalink ) {
                                                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                                                        } else {
                                                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) );
                                                        }

                                                        do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                                                        // Meta data.
                                                        echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                                                        // Backorder notification.
                                                        if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
                                                        }
                                                    ?>
                                                </h6>
                                                <h5>
                                                    <?php
                                                        echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                                    ?>
                                                </h5>
                                            </div>
                                        </td>
                                        <td class="quantity__item" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                                            <div class="quantity">
                                                <div class="pro-qty-2">
                                                    <!-- <input type="text" value="1"> -->
                                                    <?php
                                                        if ( $_product->is_sold_individually() ) {
                                                            $product_quantity = sprintf( '<input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                                        } else {
                                                            $product_quantity = woocommerce_quantity_input(
                                                                array(
                                                                    'input_name'   => "cart[{$cart_item_key}][qty]",
                                                                    'input_value'  => $cart_item['quantity'],
                                                                    'max_value'    => $_product->get_max_purchase_quantity(),
                                                                    'min_value'    => '0',
                                                                    'product_name' => $_product->get_name(),
                                                                ),
                                                                $_product,
                                                                false
                                                            );
                                                        }

                                                        echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                                                    ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__price" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
                                            <?php
                                                echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                            ?>
                                        </td>
                                        <td class="cart__close">
                                            <?php
                                                echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                                    'woocommerce_cart_item_remove_link',
                                                    sprintf(
                                                        '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa fa-close"></i></a>',
                                                        esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                                        esc_html__( 'Remove this item', 'woocommerce' ),
                                                        esc_attr( $product_id ),
                                                        esc_attr( $_product->get_sku() )
                                                    ),
                                                    $cart_item_key
                                                );
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form class="checkout_coupon woocommerce-form-coupon" method="post">
                            <input type="text" name="coupon_code" placeholder="Coupon code" id="coupon_code" value="">
                            <button type="submit" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">
                        <?php do_action( 'woocommerce_before_cart_totals' ); ?>
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>"><?php wc_cart_totals_subtotal_html(); ?></span></li>
                            <li>
                                <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
                                    <tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                                        <th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
                                        <td data-title="<?php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); ?>"><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </li>
                            <li>Total <span><?php wc_cart_totals_order_total_html(); ?></span></li>
                        </ul>
                        <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="primary-btn">Proceed to checkout</a>
                        <?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Shopping Cart Section End -->

<?php get_footer(); ?>