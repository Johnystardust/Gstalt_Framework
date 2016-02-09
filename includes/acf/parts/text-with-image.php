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
$margin             = get_sub_field('margin');
$padding            = get_sub_field('padding');

$background         = get_sub_field('background');
$background_color   = get_sub_field('background_color');
$background_image   = get_sub_field('background_image');
$background_align   = get_sub_field('image_align');
$background_size    = get_sub_field('image_size');
$background_repeat  = get_sub_field('image_repeat');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   Text with image block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="text-with-image" class="container-fluid no-padding same-col-height" style="'.set_background_style($background, $background_color, $background_image, $background_align, $background_size, $background_repeat).' margin: '.$margin.'; padding: '.$padding.';">';
    /*
    |----------------------------------------------------------------
    |   If the field is filled, get the row layout.
    |----------------------------------------------------------------
    */
    if(get_sub_field('content')){
        while (has_sub_field('content')){
            switch (get_row_layout()){
                /*
                |----------------------------------------------------------------
                |   If row layout is text block.
                |----------------------------------------------------------------
                */
                case 'text_block':
                    get_template_part('includes/acf/parts/text-with-image-text');
                    break;

                /*
                |----------------------------------------------------------------
                |   If row layout is text block.
                |----------------------------------------------------------------
                */
                case 'image':
                    get_template_part('includes/acf/parts/text-with-image-image');
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

echo '</div>'; // Container closing tag