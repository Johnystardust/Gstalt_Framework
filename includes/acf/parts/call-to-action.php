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
$margin_title           = get_sub_field('margin_title');
$padding_title          = get_sub_field('padding_title');
$title_subtitle_width   = get_sub_field('title_subtitle_width');

$background             = get_sub_field('background');
$background_color       = get_sub_field('background_color');
$background_image       = get_sub_field('background_image');
$background_align       = get_sub_field('image_align');
$background_size        = get_sub_field('image_size');
$background_repeat      = get_sub_field('image_repeat');

$margin_container       = get_sub_field('margin_container');
$padding_container      = get_sub_field('padding_container');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The call to action block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="call-to-action" class="container-fluid container-capped same-col-height" style="'.set_background_style($background, $background_color, $background_image, $background_align, $background_size, $background_repeat).' margin: '.$margin_container.'; padding: '.$padding_container.'; ">';
    echo '<div class="row on-top-overlay">';

        /*
        |----------------------------------------------------------------
        |   Title/Divider/Subtitle.
        |----------------------------------------------------------------
        */
        echo '<div class="'.set_col_size($title_subtitle_width).' col-sm-12 col-xs-12 col" style="margin: '.$margin_title.'; padding: '.$padding_title.'">';
            get_template_part('includes/acf/parts/assets/title-divider-subtitle');
        echo '</div>';

        /*
        |----------------------------------------------------------------
        |   If the field is filled, get the row layout.
        |----------------------------------------------------------------
        */
        if(get_sub_field('action_type')){
            while(has_sub_field('action_type')){
                switch (get_row_layout()){
                    /*
                    |----------------------------------------------------------------
                    |   If row layout is link.
                    |----------------------------------------------------------------
                    */
                    case 'link':
                        get_template_part('includes/acf/parts/call-to-action-link');
                        break;

                    /*
                    |----------------------------------------------------------------
                    |   If row layout is download.
                    |----------------------------------------------------------------
                    */
                    case 'download':
                        get_template_part('includes/acf/parts/call-to-action-download');
                        break;
                }
            }
        }

    echo '</div>'; // Row closing tag

    /*
    |----------------------------------------------------------------
    |   If image overlay set active show the overlay.
    |----------------------------------------------------------------
    */
get_template_part('includes/acf/parts/assets/image-overlay');

echo '</div>'; // Container closing tag