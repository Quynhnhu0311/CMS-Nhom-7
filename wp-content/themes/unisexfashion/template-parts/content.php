<?php global $product; ?>
<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="product__item">
        <div class="product__item__pic set-bg">
            <a href="<?php the_permalink(); ?>">
                <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array( 'class' =>'thumnail') ); ?>
            </a>
            <ul class="product__hover">
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/heart.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/compare.png" alt=""> <span>Compare</span>
                    </a>
                </li>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/search.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <div class="product__item__text">
            <a href="<?php the_permalink(); ?>"></a>
            <h6><?php the_title(); ?></h6>
            <a href="?add-to-cart=<?php echo $product->get_id();?>" class="add-cart">+ Add To Cart</a>
            <div class="rating">
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <h5><?php echo $product->get_price_html(); ?></h5>
        </div>
    </div>
</div>