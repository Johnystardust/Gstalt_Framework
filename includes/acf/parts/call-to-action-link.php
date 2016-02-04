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
$buttons                = get_sub_field('buttons');
$buttons_align          = get_sub_field('buttons_align');
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
        echo '<div class="buttons" style="text-align: '.$buttons_align.'">';
                /*
                |----------------------------------------------------------------
                |   Use foreach to loop over al the buttons.
                |----------------------------------------------------------------
                */
                foreach($buttons as $button){
                    /*
                    |----------------------------------------------------------------
                    |   Get all the button fields.
                    |----------------------------------------------------------------
                    */
                    $btn_choice     = $button['button_choice'];
                    $btn_link       = $button['button_link'];
                    $btn_new_tab    = $button['button_new_tab'];
                    $btn_txt        = $button['button_text'];

                    /*
                    |----------------------------------------------------------------
                    |   If '$btn-link' isn't empty, display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($btn_link)){
                        echo '<a class="button '.$btn_choice.'" href="'.$btn_link.'" target="'.($btn_new_tab ? '_blank' : '_self').'">'.$btn_txt.'</a>';
                    }
                }
        echo '</div>'; // Buttons closing tag

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