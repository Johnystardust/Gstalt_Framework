<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/25/2015
 * Time:        10:17 AM
 *
 * @package Media Critics
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Custom Post Types.
|-----------------------------------------------------------------------------------------------------------------------
*/
add_action( 'init', 'create_work_post_type' );
function create_work_post_type() {
    $labels = array(
        'name'               => 'Portfolio',
        'singular_name'      => 'Portfolio',
        'add_new'            => 'Nieuw portfolio item',
        'add_new_item'       => 'Nieuw portfolio item',
        'edit_item'          => 'Bewerk portfolio item',
        'new_item'           => 'Nieuw portfolio item',
        'all_items'          => 'Alle portfolio item&#39;s',
        'view_item'          => 'Bekijk portfolio item',
        'search_items'       => 'Zoek portfolio item',
        'not_found'          => 'Geen portfolio items gevonden',
        'not_found_in_trash' => 'Geen portfolio item gevonden in prullenbak',
        'parent_item_colon'  => '',
        'menu_name'          => 'Portfolio'
    );
    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'menu_position'         => 20,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-portfolio',
        'taxonomies'            => array('category')
    );
    register_post_type( 'portfolio', $args);
}

