<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

include_once('custom/opening-times-widget.php');
include_once('custom/maps-widget.php');
include_once('custom/recent-posts-widget.php');

/*
|----------------------------------------------------------------
|   Load widget function.
|
|	Register and load the widgets
|----------------------------------------------------------------
*/
function tvds_load_widget() {
    register_widget('tvds_opening_times_widget');
    register_widget('tvds_maps_widget');
    register_widget('tvds_recent_post_widget');
}
add_action( 'widgets_init', 'tvds_load_widget' );

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Widgets.
|-----------------------------------------------------------------------------------------------------------------------
*/
function tvds_add_widgets_init(){
    /*
    |----------------------------------------------------------------
    |   Footer widget col 1.
    |----------------------------------------------------------------
    */
    register_sidebar(array(
        'name' 			=> __( 'Footer Col 1', 'gstalt-framework' ),
        'id' 			=> 'footer-col-1',
        'description' 	=> __( 'Footer ruimte', 'gstalt-framework' ),
        'before_widget' => '<div id="%1$s" class="col-md-12 no-padding footer-widget %2$s"><div class="widget-inner">',
        'after_widget' 	=> '</div></div>',
        'before_title' 	=> '<h4 class="widget-title">',
        'after_title' 	=> '</h4>',
    ));

    /*
    |----------------------------------------------------------------
    |   Footer widget col 2.
    |----------------------------------------------------------------
    */
    register_sidebar(array(
        'name' 			=> __( 'Footer Col 2', 'gstalt-framework' ),
        'id' 			=> 'footer-col-2',
        'description' 	=> __( 'Footer ruimte', 'gstalt-framework' ),
        'before_widget' => '<div id="%1$s" class="col-md-12 no-padding footer-widget %2$s"><div class="widget-inner">',
        'after_widget' 	=> '</div></div>',
        'before_title' 	=> '<h4 class="widget-title">',
        'after_title' 	=> '</h4>',
    ));

    /*
    |----------------------------------------------------------------
    |   Footer widget col 3.
    |----------------------------------------------------------------
    */
    register_sidebar(array(
        'name' 			=> __( 'Footer Col 3', 'gstalt-framework' ),
        'id' 			=> 'footer-col-3',
        'description' 	=> __( 'Footer ruimte', 'gstalt-framework' ),
        'before_widget' => '<div id="%1$s" class="col-md-12 no-padding footer-widget %2$s"><div class="widget-inner">',
        'after_widget' 	=> '</div></div>',
        'before_title' 	=> '<h4 class="widget-title">',
        'after_title' 	=> '</h4>',
    ));

    /*
    |----------------------------------------------------------------
    |   Footer widget col 4.
    |----------------------------------------------------------------
    */
    register_sidebar(array(
        'name' 			=> __( 'Footer Col 4', 'gstalt-framework' ),
        'id' 			=> 'footer-col-4',
        'description' 	=> __( 'Footer ruimte', 'gstalt-framework' ),
        'before_widget' => '<div id="%1$s" class="col-md-12 no-padding footer-widget %2$s"><div class="widget-inner">',
        'after_widget' 	=> '</div></div>',
        'before_title' 	=> '<h4 class="widget-title">',
        'after_title' 	=> '</h4>',
    ));
}
add_action( 'widgets_init', 'tvds_add_widgets_init' );