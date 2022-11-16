<?php

if(!function_exists('glw_theme_setup')){
    function glw_theme_setup(){
        //Menu
        register_nav_menu( 'glw_primary_menu', __('Primary Menu', 'glw') );
    }
}