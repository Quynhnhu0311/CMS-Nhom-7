<?php get_header(); ?>

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg"
            data-setbg="<?php echo get_template_directory_uri() ?>/assets/images/hero/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2030</h2>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                            <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg"
            data-setbg="<?php echo get_template_directory_uri() ?>/assets/images/hero/hero-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2030</h2>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                            <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-4">
                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/banner-1.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Clothing Collections 2030</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/banner-2.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Accessories</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/banner-3.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Shoes Spring 2030</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li data-filter=".new-arrivals">Featured Products</li>
                </ul>
            </div>
        </div>
        <div class="row product__filter">
            <?php 
                $tax_query[] = array(
                    'taxonomy'  => 'product_visibility',
                    'field'    => 'name',
                    'terms'     => 'featured',
                    'operator'  => 'IN',
                );
            ?>
            <?php
                $args = array(
                    'post_type'           => 'product',
                    'posts_per_page'      => 8,
                    'ignore_sticky_posts' => 1,
                    'tax_query'           => $tax_query
                );
            ?>
            <?php $getposts = new WP_query( $args ); ?>
            <?php 
                global $wp_query; 
                $wp_query->in_the_loop = true; 
            ?>
            <?php if($getposts->have_posts()) : ?>
            <?php while($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php get_template_part('template-parts/content-featured'); ?>
            <?php 
                endwhile; 
                wp_reset_postdata();
            ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Categories Section Begin -->
<section class="categories spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="categories__text">
                    <h2>Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories__hot__deal">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/product-sale.png" alt="">
                    <div class="hot__deal__sticker">
                        <span>Sale Of</span>
                        <h5>$29.99</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="categories__deal__countdown">
                    <span>Deal Of The Week</span>
                    <h2>Multi-pocket Chest Bag Black</h2>
                    <div class="categories__deal__countdown__timer" id="countdown">
                        <div class="cd-item">
                            <span>3</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>1</span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span>50</span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span>18</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Instagram Section Begin -->
<section class="instagram spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="instagram__pic">
                    <div class="instagram__pic__item set-bg"
                        data-setbg="<?php echo get_template_directory_uri() ?>/assets/images/instagram/instagram-1.jpg">
                    </div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="<?php echo get_template_directory_uri() ?>/assets/images/instagram/instagram-2.jpg">
                    </div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="<?php echo get_template_directory_uri() ?>/assets/images/instagram/instagram-3.jpg">
                    </div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="<?php echo get_template_directory_uri() ?>/assets/images/instagram/instagram-4.jpg">
                    </div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="<?php echo get_template_directory_uri() ?>/assets/images/instagram/instagram-5.jpg">
                    </div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="<?php echo get_template_directory_uri() ?>/assets/images/instagram/instagram-6.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="instagram__text">
                    <h2>Instagram</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna aliqua.</p>
                    <h3>#Male_Fashion</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Latest News</span>
                    <h2>Fashion New Trends</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg"
                        data-setbg="<?php echo get_template_directory_uri() ?>/assets/images/blog/blog-1.jpg">
                    </div>
                    <div class="blog__item__text">
                        <span><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/calendar.png"
                                alt=""> 16 February 2020</span>
                        <h5>What Curling Irons Are The Best Ones</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg"
                        data-setbg="<?php echo get_template_directory_uri() ?>/assets/images/blog/blog-2.jpg">
                    </div>
                    <div class="blog__item__text">
                        <span><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/calendar.png"
                                alt=""> 21 February 2020</span>
                        <h5>Eternity Bands Do Last Forever</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg"
                        data-setbg="<?php echo get_template_directory_uri() ?>/assets/images/blog/blog-3.jpg">
                    </div>
                    <div class="blog__item__text">
                        <span><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/calendar.png"
                                alt=""> 28 February 2020</span>
                        <h5>The Health Benefits Of Sunglasses</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Blog Section End -->
<?php get_footer(); ?>