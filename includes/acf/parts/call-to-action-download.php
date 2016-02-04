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
$file                   = get_sub_field('file');
$button_new_tab         = get_sub_field('button_new_tab');
$download               = get_sub_field('download');
$button_choice          = get_sub_field('button_choice');
$button_text            = get_sub_field('button_text');
$button_align           = get_sub_field('button_align');
$button_align_vert_mid  = get_sub_field('button_align_vert_mid');

$margin_button          = get_sub_field('margin_button');
$padding_button         = get_sub_field('padding_button');
$button_width           = get_sub_field('button_width');

/*
|----------------------------------------------------------------
|   Download block.
|----------------------------------------------------------------
*/
echo '<div class="'.set_col_size($button_width).' col-sm-12 col-xs-12 buttons-row '.($button_align_vert_mid ? 'col' : '').'" style="margin: '.$margin_button.'; padding: '.$padding_button.'; '.($button_align_vert_mid ? 'display: table;' : '').'">';

    /*
    |----------------------------------------------------------------
    |   if '$buttons_align_vert_mid' is set echo the middle-wrap div.
    |----------------------------------------------------------------
    */
    if($button_align_vert_mid){
        echo '<div class="middle-wrap">';
    }

    /*
    |----------------------------------------------------------------
    |   Download link.
    |----------------------------------------------------------------
    */
    echo '<div class="buttons" style="text-align: '.$button_align.'">';
        echo '<a href="'.$file.'" class="'.$button_choice.'" '.($button_new_tab ? 'target="_blank"' : 'target="_self"').' '.($download ? 'download' : '').'>'.$button_text.'</a>';
    echo '</div>'; // Buttons closing tag

    /*
    |----------------------------------------------------------------
    |   if '$buttons_align_vert_mid' is set close the middle-wrap div.
    |----------------------------------------------------------------
    */
    if($button_align_vert_mid){
        echo '</div>'; // Middle Wrap closing tag
    }
echo '</div>';
