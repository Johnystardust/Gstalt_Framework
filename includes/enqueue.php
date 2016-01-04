<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Add the scripts.
|-----------------------------------------------------------------------------------------------------------------------
*/
add_action('wp_enqueue_scripts', 'add_my_custom_scripts');
function add_my_custom_scripts(){
    // de-register stock jquery
    wp_deregister_script( 'jquery' );

    // register scripts
    wp_register_script('my_jquery', get_stylesheet_directory_uri().'/assets/jquery/jquery-1.11.3.min.js');
    wp_register_script('bootstrap_js', get_stylesheet_directory_uri().'/assets/bootstrap/js/bootstrap.min.js');

    // enqueue scripts
    wp_enqueue_script('my_jquery');
    wp_enqueue_script('bootstrap_js');
}

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Add the stylesheets.
|-----------------------------------------------------------------------------------------------------------------------
*/
add_action('wp_enqueue_scripts', 'add_my_custom_styles');
function add_my_custom_styles(){
    // register styles
    wp_register_style('bootstrap_css', get_stylesheet_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
    wp_register_style('stylesheet', get_stylesheet_directory_uri().'/assets/stylesheet/style.css');

    // enqueue styles
    wp_enqueue_style('bootstrap_css');
    wp_enqueue_style('stylesheet');
}