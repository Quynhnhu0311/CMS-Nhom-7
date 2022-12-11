<?php get_header(); ?>
<div class="news">
    <div class="container">
        <div class="items-news">
            <?php $getposts = new WP_query($args); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true ?>
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <div class="item-news" data-aos="zoom-out">
                <div class="content-news">
                    <div class="title-news">
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                    </div>
                    <p><span class="author">Tác giả :<?php the_author();?></span><span>     Thời gian :<?php the_time('j/M/y g:i A') ?></span></p>
                    <div class="img-news">
                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>
                    </div>
                    <div class="description-news">
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <?php endif ?>
    </div>
</div>
<?php get_footer(); ?>