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
$background             = get_sub_field('background');
$background_color       = get_sub_field('background_color');
$background_image       = get_sub_field('background_image');
$background_align       = get_sub_field('image_align');
$background_size        = get_sub_field('image_size');
$background_repeat      = get_sub_field('image_repeat');

$margin_container       = get_sub_field('margin_container');
$padding_container      = get_sub_field('padding_container');

/*
|----------------------------------------------------------------
|   Determine if the container needs to have padding class.
|----------------------------------------------------------------
*/
if(get_sub_field('card_type')){
    while (has_sub_field('card_type')){
        switch(get_row_layout()){
            case 'cards_normal':
                $card_type = 'no-padding';
                break;
            case 'cards_with_icon':
                $card_type = 'container-capped';
                break;
        }

    }
}

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Cards block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="cards" style="'.set_background_style($background, $background_color, $background_image, $background_align, $background_size, $background_repeat).' margin: '.$margin_container.'; padding: '.$padding_container.';">';
    echo '<div class="container-fluid '.$card_type.' same-col-height">';

        /*
        |----------------------------------------------------------------
        |   If the field is filled, get the row layout.
        |----------------------------------------------------------------
        */
        if(get_sub_field('card_type')){
            while(has_sub_field('card_type')){
                switch(get_row_layout()){
                    /*
                    |----------------------------------------------------------------
                    |   If row layout is cards normal.
                    |----------------------------------------------------------------
                    */
                    case 'cards_normal':
                        get_template_part('includes/acf/parts/cards-normal');
                        break;

                    /*
                    |----------------------------------------------------------------
                    |   If row layout is cards with icon.
                    |----------------------------------------------------------------
                    */
                    case 'cards_with_icon':
                        get_template_part('includes/acf/parts/cards-with-icon');
                        break;
                }
            }
        }

        /*
        |----------------------------------------------------------------
        |   If image overlay set active show the overlay.
        |----------------------------------------------------------------
        */
        get_template_part('includes/acf/parts/assets/image-overlay');

    echo '</div>'; // container closing tag
echo '</div>'; // Cards closing tag

