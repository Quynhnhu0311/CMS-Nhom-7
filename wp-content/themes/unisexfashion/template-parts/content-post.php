<?php global $product; ?>
<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="blog__item">
        <div class="blog__item__pic set-bg">
            <a href="<?php the_permalink(); ?>">
                <?php echo get_the_post_thumbnail( $post, 'large' ); ?>
            </a>
        </div>
        <div class="blog__item__text">
            <span><img src="img/icon/calendar.png" alt=""> 16 February 2020</span>
            <h5><?php echo get_the_title(); ?></h5>
            <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
    </div>
</div>