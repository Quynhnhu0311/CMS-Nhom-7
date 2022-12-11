<?php
/*
    Template Name: Blog
*/
?>
<?php get_header(); ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-blog set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/assets/images/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our Blog</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <?php
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => 6,
        );
    ?>
    <?php $getposts = new WP_query($args); ?>
    <?php if($getposts->have_posts()) : ?>
    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row widget">
                <div class="col-lg-9" style="display: flex; flex-wrap: wrap; height: fit-content;">
                <?php global $wp_query; $wp_query->in_the_loop = true ?>
                <?php 
                    while($getposts->have_posts()) : 
                        $getposts->the_post();
                        global $product;
                        get_template_part('template-parts/content-post');
                    endwhile;
                    wp_reset_postdata();
                ?>
                </div>
                <div class="col-lg-3">
                <aside id="home-r" style="width:30%, float:left;">
                    <?php dynamic_sidebar('sidebar-right'); ?>
                </aside>
                </div>
            </div>
        </div>
    </section>
    <?php endif;?>
    <!-- Blog Section End -->

<?php get_footer(); ?>