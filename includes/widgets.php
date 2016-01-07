<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Widgets.
|-----------------------------------------------------------------------------------------------------------------------
*/
function tvds_add_widgets_init(){
    /*
    |----------------------------------------------------------------
    |   Footer widget.
    |----------------------------------------------------------------
    */
    register_sidebar(array(
        'name' 			=> __( 'Footer', 'gstalt-framework' ),
        'id' 			=> 'footer',
        'description' 	=> __( 'Footer ruimte', 'gstalt-framework' ),
        'before_widget' => '<div id="%1$s" class="col-md-3 no-padding footer-widget %2$s"><div class="widget-inner">',
        'after_widget' 	=> '</div></div>',
        'before_title' 	=> '<h3 class="widget-title">',
        'after_title' 	=> '</h3>',
    ));
}
add_action( 'widgets_init', 'tvds_add_widgets_init' );