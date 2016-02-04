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
$buttons = get_sub_field('buttons');

/*
|----------------------------------------------------------------
|   If the '$buttons' isn't empty display it.
|----------------------------------------------------------------
*/
if(!empty($buttons)){
    echo '<div class="col-md-2 col-sm-12 col-xs-12">';
        echo '<div class="buttons" style="text-align: '.$title_align.'">';
            echo '<div class="middle-wrap">';
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
            echo '</div>'; // Middle Wrap closing tag
        echo '</div>'; // Buttons closing tag
    echo '</div>';
}