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
$file           = get_sub_field('file');
$button_new_tab = get_sub_field('button_new_tab');
$download       = get_sub_field('download');
$button_choice  = get_sub_field('button_choice');
$button_text    = get_sub_field('button_text');

/*
|----------------------------------------------------------------
|   If the '$buttons' isn't empty display it.
|----------------------------------------------------------------
*/


echo '<div class="col-md-2 col-sm-12 col-xs-12">';
        echo '<div class="middle-wrap">';

            echo '<a href="'.$file.'" class="'.$button_choice.'" '.($button_new_tab ? 'target="_blank"' : 'target="_self"').' '.($download ? 'download' : '').'>'.$button_text.'</a>';

        echo '</div>'; // Middle Wrap closing tag
echo '</div>';
