<?php

if(!function_exists('glw_enqueue')) {
    function glw_enqueue() {
        $ver = time();
        
        //css
        wp_register_style('glw_googlefont', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap');
        wp_register_style('glw_bootstrap', THEME_URI.'/assets/css/bootstrap.min.css');
        wp_register_style('glw_fontawesome', THEME_URI.'/assets/css/font-awesome.min.css');
        wp_register_style('glw_eleganticons', THEME_URI.'/assets/css/elegant-icons.css');
        wp_register_style('glw_magnificpopup', THEME_URI.'/assets/css/magnific-popup.css');
        wp_register_style('glw_niceselect', THEME_URI.'/assets/css/nice-select.css');
        wp_register_style('glw_owlcarousel', THEME_URI.'/assets/css/owl.carousel.min.css');
        wp_register_style('glw_slicknav', THEME_URI.'/assets/css/slicknav.min.css');
        wp_register_style('glw_style', THEME_URI.'/assets/css/style.css');
        wp_register_style('glw_style_wo', THEME_URI.'/assets/css/woocommerce.css');
        wp_register_style('glw_style_woo', THEME_URI.'/assets/css/woocommerce-layout.css');
        wp_register_style('glw_style_wooc', THEME_URI.'/assets/css/woocommerce-smallscreen.css');
        wp_register_style('glw_style_wooc_2', THEME_URI.'/assets/css/woocommerce-layout-rtl.css');
        wp_register_style('glw_style_wooc_3', THEME_URI.'/assets/css/select2.css');


        //enqueue css
        wp_enqueue_style('glw_googlefont');
        wp_enqueue_style('glw_bootstrap');
        wp_enqueue_style('glw_fontawesome');
        wp_enqueue_style('glw_eleganticons');
        wp_enqueue_style('glw_magnificpopup');
        wp_enqueue_style('glw_niceselect');
        wp_enqueue_style('glw_owlcarousel');
        wp_enqueue_style('glw_slicknav');
        wp_enqueue_style('glw_style');
        // wp_enqueue_style('glw_style_wooc');
        wp_enqueue_style('glw_style_woo');
        // wp_enqueue_style('glw_style_wo');
        // wp_enqueue_style('glw_style_wo_1');
        // wp_enqueue_style('glw_style_wooc_2');
        // wp_enqueue_style('glw_style_wooc_3');
        


        //js
        wp_deregister_script('jquery-core');
        wp_register_script('jquery-core', THEME_URI.'/assets/js/jquery-3.3.1.min.js', array(), $ver, 'in_footer');
        wp_register_script('glw_bootstrapjs', THEME_URI.'/assets/js/bootstrap.min.js', array(), $ver, 'in_footer');
        wp_register_script('glw_niceselectjs', THEME_URI.'/assets/js/jquery.nice-select.min.js', array(), $ver, 'in_footer');
        wp_register_script('glw_nicescrolljs', THEME_URI.'/assets/js/jquery.nicescroll.min.js', array(), $ver, 'in_footer');
        wp_register_script('glw_magnificpopupjs', THEME_URI.'/assets/js/jquery.magnific-popup.min.js', array(), $ver, 'in_footer');
        wp_register_script('glw_countdownjs', THEME_URI.'/assets/js/jquery.countdown.min.js', array(), $ver, 'in_footer');
        wp_register_script('glw_slicknavjs', THEME_URI.'/assets/js/jquery.slicknav.js', array(), $ver, 'in_footer');
        wp_register_script('glw_mixitupjs', THEME_URI.'/assets/js/mixitup.min.js', array(), $ver, 'in_footer');
        wp_register_script('glw_owlcarouseljs', THEME_URI.'/assets/js/owl.carousel.min.js', array(), $ver, 'in_footer');
        wp_register_script('glw_mainjs', THEME_URI.'/assets/js/main.js', array(), $ver, 'in_footer');

        //enqueue js
        wp_enqueue_script('jquery-core');
        wp_enqueue_script('glw_bootstrapjs');
        wp_enqueue_script('glw_niceselectjs');
        wp_enqueue_script('glw_nicescrolljs');
        wp_enqueue_script('glw_magnificpopupjs');
        wp_enqueue_script('glw_countdownjs');
        wp_enqueue_script('glw_slicknavjs');
        wp_enqueue_script('glw_mixitupjs');
        wp_enqueue_script('glw_owlcarouseljs');
        wp_enqueue_script('glw_mainjs');
    }
}