<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|----------------------------------------------------------------
|   Get the fields and put them in variables for easy usage.
|----------------------------------------------------------------
*/
$side_img_1                     = get_theme_mod('side_img_1');
$side_title_1                   = get_theme_mod('side_title_1');
$side_link_1                    = get_theme_mod('side_link_1');
$side_link_new_tab_1            = get_theme_mod('side_link_new_tab_1', '1');

$side_img_2                     = get_theme_mod('side_img_2');
$side_title_2                   = get_theme_mod('side_title_2');
$side_link_2                    = get_theme_mod('side_link_2');
$side_link_new_tab_2            = get_theme_mod('side_link_new_tab_2', '1');

$side_top                       = get_theme_mod('side_top');
$side_show_mobile               = get_theme_mod('side_show_mobile');

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Side Icon
|-----------------------------------------------------------------------------------------------------------------------
*/

/*
|----------------------------------------------------------------
|   If '$side_link_1' or '$side_link_2' is set display it
|----------------------------------------------------------------
*/
if($side_link_1 || $side_link_2){
    echo '<div id="side-icons" class="'.($side_show_mobile ? 'hide-mobile' : '').'" style="top: '.$side_top.'px;">';
    /*
    |----------------------------------------------------------------
    |   If '$side_link_1' is set display it
    |----------------------------------------------------------------
    */
    if($side_link_1){
        echo '<div class="side-icon">';
            echo '<a href="'.$side_link_1.'" target="'.($side_link_new_tab_1 ? '_blank' : '_self').'"><img src="'.$side_img_1.'" /></a>';
        echo '</div>';
    }

    /*
    |----------------------------------------------------------------
    |   If '$side_link_2' is set display it
    |----------------------------------------------------------------
    */
    if($side_link_2){
        echo '<div class="side-icon">';
            echo '<a href="'.$side_link_2.'" target="'.($side_link_new_tab_1 ? '_blank' : '_self').'"><img src="'.$side_img_2.'" /></a>';
        echo '</div>';
    }
    echo '</div>';
}

