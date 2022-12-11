<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> <!-- Thêm class name cho body VD: body_class( 'class-name' ) -->
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <!-- <a href="my-account ">Sign in</a> -->
                            </div>
                            <div class="header__top__hover">
                                <?php do_action( 'woocommerce_before_account_navigation' ); ?>
                                <span>Account <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
                                    <li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
                                        <a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">
                                            <?php echo esc_html( $label ); ?>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php do_action( 'woocommerce_after_account_navigation' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <?php header_menu('header-menu'); ?>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-3">
                    <div class="header__nav__option" style="display: flex;">
                        <a href="cart ">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/cart.png" alt=""> <span>0</span>
                        </a>
                        <div class="price">$0.00</div>
                        <div class="d-flex justify-end align-items-center" style="margin-left: 60px;">
                            <?php get_search_form( ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->