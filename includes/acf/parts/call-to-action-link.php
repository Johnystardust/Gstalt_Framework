<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|----------------------------------------------------------------
|   Get all the fields an put them in variables for easy usage.
|----------------------------------------------------------------
*/
$buttons_align_vert_mid = get_sub_field('buttons_align_vert_mid');

$buttons_width          = get_sub_field('buttons_width');
$margin_buttons         = get_sub_field('margin_buttons');
$padding_buttons        = get_sub_field('padding_buttons');

/*
|----------------------------------------------------------------
|   If the '$buttons' isn't empty display it.
|----------------------------------------------------------------
*/
if(!empty($buttons)){
    echo '<div class="'.set_col_size($buttons_width).' col-sm-12 col-xs-12 buttons-row '.($buttons_align_vert_mid ? 'col' : '').'" style="'.($buttons_align_vert_mid ? 'display: table;' : '').' margin: '.$margin_buttons.'; padding: '.$padding_buttons.';">';

        /*
        |----------------------------------------------------------------
        |   if '$buttons_align_vert_mid' is set echo the middle-wrap div.
        |----------------------------------------------------------------
        */
        if($buttons_align_vert_mid){
            echo '<div class="middle-wrap">';
        }

        /*
        |----------------------------------------------------------------
        |   Buttons.
        |----------------------------------------------------------------
        */
        get_template_part('includes/acf/parts/assets/buttons');

        /*
        |----------------------------------------------------------------
        |   if '$buttons_align_vert_mid' is set close the middle-wrap div.
        |----------------------------------------------------------------
        */
        if($buttons_align_vert_mid){
            echo '</div>'; // Middle Wrap closing tag
        }

    echo '</div>';
}