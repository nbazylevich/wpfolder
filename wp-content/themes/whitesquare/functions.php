<?php

add_action('wp_enqueue_scripts','whitesquare_scripts');
function whitesquare_scripts(){
    wp_enqueue_style('style2', get_template_directory_uri() . '/css/style2.css' );
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/bootstrap/dist/css/bootstrap.min.css' );

    wp_enqueue_script('angular.min', get_template_directory_uri() . '/angular.min.js' );
    wp_enqueue_script('jquery-2.1.1', get_template_directory_uri() . '/jquery-2.1.1.js' );
    wp_enqueue_script('mainCtrl', get_template_directory_uri() . '/mainCtrl.js' );
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/bootstrap/dist/js/bootstrap.min.js' );
}
