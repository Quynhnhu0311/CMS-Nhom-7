<?php get_header(); ?>
<?php if(is_category()) : ?>
    <div class="place">
        <div class="container">
            <div class="container-place" data-aos="zoom-out-down">
                <div class="icon-place text-center">
                    <img src="<?php bloginfo('template_directory') ?>/public/images/icon-places.png" alt="">
                </div>
                <div class="title-place text-center">
                    <h2><?php echo $title_place; ?></h2>
                    <div class="line-bottom-place"></div>
                </div>
                <div class="cate text-center">
                    <?php
                        $args = array(
                            'type' => 'posts',
                            'child_of' => 0,
                            'parent' => 0,
                            'hide_empty' => 0,
                            'taxonomy' => 'category',
                            'number' => 10,
                        );
                        $categories = get_categories($args);
                        foreach($categories as $cate) {
                            $category_link = get_category_link($cate->cat_ID); ?>
                            <span><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cate->name ?></a></span>
                            <span>|</span>
                        <?php } ?>
                </div>
            </div>
            <div class="place-page">
                <div class="container-items-place">
                    <div class="item-img-place" data-aos="zoom-out-right">
                        <div class="tape-place">
                            <img src="<?php bloginfo('template_directory') ?>/public/images/tape-place.png" alt="">
                        </div>
                        <div class="img-place">
                            <img src=<?php echo $img_place['url']; ?> alt="">
                        </div>  
                    </div>
                    <div class="items-place" data-aos="zoom-out-left">
                        <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post();?>
                        <div class="item-place">
                            <div class="item-bg-place">
                                <div class="img-item-place">
                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>
                                </div>
                                <div class="content-item-place">
                                    <div class="title-item-place">
                                        <h2><u><?php the_title(); ?></u></h2>
                                    </div>
                                    <div class="des-item-place">
                                        <p><?php the_excerpt(); ?></p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>
<?php get_footer(); ?>