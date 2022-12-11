<?php
/*
    Template Name: Detail Product
*/
?>
<?php get_header(); ?>

<!-- Shop Details Section Begin -->
<section class="shop-details">
    <?php if(have_posts()) : ?>
        <?php 
            while(have_posts()) : the_post();
        ?>
        <?php do_action( 'woocommerce_before_single_product' ); ?>
            <div class="product__details__pic">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__details__breadcrumb">
                                <a href="./index.html">Home</a>
                                <a href="./shop.html">Shop</a>
                                <span>Product Details</span>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                    
                        <?php
                            if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
                                return;
                            }

                            global $product;    

                            $columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
                            $post_thumbnail_id = $product->get_image_id();
                            $wrapper_classes   = apply_filters(
                                'woocommerce_single_product_image_gallery_classes',
                                array(
                                    'woocommerce-product-gallery',
                                    'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
                                    'woocommerce-product-gallery--columns-' . absint( $columns ),
                                    'images',
                                )
                            );
                        ?>
                        <div class="col-lg-3 col-md-3">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-1" role="tab">
                                        <div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>">
                                            <?php
                                                echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );
                                                do_action( 'woocommerce_product_thumbnails' );
                                            ?>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-9">
                            <div class="tab-content">
                                <div>
                                    <?php 
                                        if ( $post_thumbnail_id ) {
                                            $html = wc_get_gallery_image_html( $post_thumbnail_id, true ); 
                                        }
                                        else {
                                            $html  = '<div class="woocommerce-product-gallery__image--placeholder">';
                                            $html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
                                            $html .= '</div>';
                                        }
                                        echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__details__content">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="product__details__text">
                                <h4><?php the_title(); ?></h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span> - 5 Reviews</span>
                                </div>
                                <p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>
                                <div class="product__details__cart__option">
                                    <?php echo woocommerce_template_single_add_to_cart(); ?>
                                </div>
                                <div class="product__details__last__option">
                                    <h5><span>Guaranteed Safe Checkout</span></h5>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/shop-details/details-payment.png" alt="">
                                    <ul>
                                        <li><span>Categories:</span> Clothes</li>
                                        <li><span>Tag:</span> Clothes, Skin, Body</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    ?>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__details__tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-5" role="tab">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Comment</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                        <div class="product__details__tab__content">
                                            <div class="product__details__tab__content__item">
                                                <h5>Products Infomation</h5>
                                                <p><?php the_content();?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-6" role="tabpanel">
                                        <div class="product__details__tab__content">
                                            <div class="product__details__tab__content__item">
                                                <?php comments_template(); ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php do_action( 'woocommerce_after_single_product' ); ?>
    <?php endif; ?>
</section>
<!-- Shop Details Section End -->



<!-- Related Section Begin -->
<section class="related spad">
    <div class="container">
        <div class="row">
            <?php
                echo woocommerce_output_related_products();
            ?>
        </div>
    </div>
</section>
<!-- Related Section End -->


<?php get_footer(); ?>