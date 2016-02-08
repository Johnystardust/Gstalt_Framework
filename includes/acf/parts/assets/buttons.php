<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 2/4/2016
 * Time: 4:38 PM
 */
$buttons_align = get_sub_field('buttons_align');

/*
|----------------------------------------------------------------
|   Buttons.
|----------------------------------------------------------------
*/
if(get_sub_field('buttons')){
    echo '<div class="buttons" style="text-align: '.$buttons_align.'">';

        while(has_sub_field('buttons')){
            /*
            |----------------------------------------------------------------
            |   Get all the button fields.
            |----------------------------------------------------------------
            */
            $btn_choice     = get_sub_field('button_choice');
            $btn_link       = get_sub_field('button_link');
            $btn_new_tab    = get_sub_field('button_new_tab');
            $btn_txt        = get_sub_field('button_text');

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
}