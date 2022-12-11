<form class="search" role="search" method="get" action="<?php esc_url( home_url( '/' ) ); ?>">
    <input 
        type="text" 
        name="s" 
        placeholder="<?php _e('Search Anything...','glw'); ?>"
        value="<?php the_search_query( ); ?>"
        id="<?php esc_attr( uniqid('search-form-') ); ?>" 
    />
    <button id="close" type="submit">
        <i class="zmdi zmdi-search"></i>
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/search.png" alt="">
    </button>
</form>