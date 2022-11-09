<?php
/*
    Template Name: Shop
*/
?>
<?php get_header(); ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shop</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop__sidebar">
                    <div class="shop__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="shop__sidebar__accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <ul class="nice-scroll">
                                                <!-- Lấy ra danh mục sản phẩm -->
                                                <?php
                                                    $args = array(
                                                        'type'      => 'product',
                                                        'child_of'  => 0,
                                                        'parent'    => 0, //Chỉ nhận cha
                                                        'hide_emty' => 0, //Những danh mục không có sản phẩm cũng sẽ hiển thị
                                                        'taxonomy'  => 'product_cat', // Đường link trên thanh địa chỉ
                                                        'number'    => 5 //Giới hạn 5 item xuất hiện
                                                    );
                                                    $categories = get_categories( $args );
                                                    foreach($categories as $category) { ?>
                                                        <li><a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <?php $cat = get_term_by('id', 17, 'product_cat') ?>
                                    <a data-toggle="collapse" data-target="#collapseTwo" href="<?php get_term_link($cat->slug, 'product_cat'); ?>">
                                        <?php echo $cat->name; ?>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__brand">
                                            <ul>
                                                <!-- Lấy ra danh mục sản phẩm -->
                                                <?php
                                                    $args = array(
                                                        'type'      => 'product',
                                                        'child_of'  => 0,
                                                        'parent'    => 0, //Chỉ nhận cha
                                                        'hide_emty' => 0, //Những danh mục không có sản phẩm cũng sẽ hiển thị
                                                        'taxonomy'  => 'product_cat', // Đường link trên thanh địa chỉ
                                                        'number'    => 5, //Giới hạn 5 item xuất hiện
                                                        'parent'    => $cat->term_id
                                                    );
                                                    $categories = get_categories( $args );
                                                    foreach($categories as $category) { ?>
                                                        <li><a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <?php $cat = get_term_by('id', 28, 'product_cat') ?>
                                    <a data-toggle="collapse" data-target="#collapseTwo" href="<?php get_term_link($cat->slug, 'product_cat'); ?>">
                                        <?php echo $cat->name; ?>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__brand">
                                            <ul>
                                                <!-- Lấy ra danh mục sản phẩm -->
                                                <?php
                                                    $args = array(
                                                        'type'      => 'product',
                                                        'child_of'  => 0,
                                                        'parent'    => 0, //Chỉ nhận cha
                                                        'hide_emty' => 0, //Những danh mục không có sản phẩm cũng sẽ hiển thị
                                                        'taxonomy'  => 'product_cat', // Đường link trên thanh địa chỉ
                                                        'number'    => 5, //Giới hạn 5 item xuất hiện
                                                        'parent'    => $cat->term_id
                                                    );
                                                    $categories = get_categories( $args );
                                                    foreach($categories as $category) { ?>
                                                        <li><a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <?php $cat = get_term_by('id', 18, 'product_cat') ?>
                                    <a data-toggle="collapse" data-target="#collapseTwo" href="<?php get_term_link($cat->slug, 'product_cat'); ?>">
                                        <?php echo $cat->name; ?>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__brand">
                                            <ul>
                                                <!-- Lấy ra danh mục sản phẩm -->
                                                <?php
                                                    $args = array(
                                                        'type'      => 'product',
                                                        'child_of'  => 0,
                                                        'parent'    => 0, //Chỉ nhận cha
                                                        'hide_emty' => 0, //Những danh mục không có sản phẩm cũng sẽ hiển thị
                                                        'taxonomy'  => 'product_cat', // Đường link trên thanh địa chỉ
                                                        'number'    => 5, //Giới hạn 5 item xuất hiện
                                                        'parent'    => $cat->term_id
                                                    );
                                                    $categories = get_categories( $args );
                                                    foreach($categories as $category) { ?>
                                                        <li><a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                </div>
                                <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__tags">
                                            <a href="#">Product</a>
                                            <a href="#">Bags</a>
                                            <a href="#">Shoes</a>
                                            <a href="#">Fashio</a>
                                            <a href="#">Clothing</a>
                                            <a href="#">Hats</a>
                                            <a href="#">Accessories</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop__product__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__left">
                                <p>Showing 1–12 of 126 results</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__right">
                                <p>Sort by Price:</p>
                                <select>
                                    <option value="">Low To High</option>
                                    <option value="">$0 - $55</option>
                                    <option value="">$55 - $100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    $args = array(
                        'post_type'         => 'product',
                        'orderby'           => 'rand',
                        'posts_per_page'    => 6,
                    );
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php if($getposts->have_posts()) : ?>
                <div class="row">
                    <?php global $wp_query; $wp_query->in_the_loop = true ?>
                    <?php
                        while($getposts->have_posts()) : $getposts->the_post();
                            global $product;
                            get_template_part('template-parts/content');
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
                <?php
                    $argg = array(
                        'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link( 999999999))),
                        'format'       => '?paged=%#%',
                        'total'        => $getposts->max_num_pages,
                        'current'      => max(1, get_query_var('paged')),
                        'show_all'     => true,
                        'end_size'     => 2,
                        'prev_text'    => '<<',
                        'next_text'    => '>>',
                        'mid_size'     => 1,
                        'prev_next'    => true,
                        'add_args'     => false,
                        'add_fragment' => '',
                        'type'         => 'list'
                    );
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__pagination">
                            <?php echo paginate_links($argg); ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->


<?php get_footer(); ?>