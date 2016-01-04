<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|----------------------------------------------------------------
|   Enable the featured images.
|----------------------------------------------------------------
*/
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Remove the main WYSIWYG editor.
|-----------------------------------------------------------------------------------------------------------------------
*/
function tvds_remove_support_init(){
    remove_post_type_support( 'page', 'editor');
}
add_action('init', 'tvds_remove_support_init', 100);

/*
|----------------------------------------------------------------
|   Include the enqueue.
|----------------------------------------------------------------
*/
include_once('includes/enqueue.php');