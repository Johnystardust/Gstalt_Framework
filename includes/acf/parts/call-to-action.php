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
$show_title             = get_sub_field('show_title');
$title                  = get_sub_field('title');
$title_color            = get_sub_field('title_color');
$title_uppercase        = get_sub_field('title_uppercase');

$divider                = get_sub_field('divider');
$divider_color          = get_sub_field('divider_color');

$show_subtitle          = get_sub_field('show_subtitle');
$subtitle               = get_sub_field('subtitle');
$subtitle_color         = get_sub_field('subtitle_color');
$subtitle_style         = get_sub_field('subtitle_style');

$background             = get_sub_field('background');
$background_color       = get_sub_field('background_color');
$background_image       = get_sub_field('background_image');
$background_align       = get_sub_field('image_align');
$background_size        = get_sub_field('image_size');
$image_overlay_active   = get_sub_field('image_overlay_active');
$image_overlay          = get_sub_field('image_overlay');
$image_overlay_opacity  = get_sub_field('image_overlay_opacity') / 100;

$height                 = get_sub_field('height');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The call to action block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="call-to-action" class="container-fluid container-capped same-col-height" style="'.set_background_style($background, $background_color, $background_image, $background_align, $background_size).' margin: '.$margin.'; padding: '.$padding.'; height: '.$height.';">';
    echo '<div class="row">';

        /*
        |----------------------------------------------------------------
        |   Title/Subtitle.
        |----------------------------------------------------------------
        */
        if($show_title || $show_subtitle) {
            echo '<div class="col-md-10 col-sm-12 col-xs-12">';
                /*
                |----------------------------------------------------------------
                |   If the '$title' isn't empty display it.
                |----------------------------------------------------------------
                */
                if ($show_title) {
                    // Display the title
                    echo '<h3 class="title no-margin" style="color: '.$title_color.'; text-align: '.$title_align.'; '.text_transform($title_uppercase).'; ">'.$title.'</h3>';

                    /*
                    |----------------------------------------------------------------
                    |   If the '$divider' is set true display it.
                    |----------------------------------------------------------------
                    */
                    if ($divider == true) {
                        echo '<div class="divider">';
                            echo '<hr style="border-color: '.$divider_color.';" />';
                        echo '</div>';
                    }
                }
                /*
                |----------------------------------------------------------------
                |   If the '$subtitle' isn't empty display it.
                |----------------------------------------------------------------
                */
                if ($show_subtitle) {
                    // Display the subtitle
                    echo '<h4 class="subtitle no-margin" style="font-style: ' . $subtitle_style . '; color: ' . $subtitle_color . '; text-align: ' . $title_align . ';">' . $subtitle . '</h4>';
                }
            echo '</div>';
        }

        /*
        |----------------------------------------------------------------
        |   If the field is filled, get the row layout.
        |----------------------------------------------------------------
        */
        if(get_sub_field('action_type')) {
            while (has_sub_field('action_type')) {
                switch (get_row_layout()) {
                    case 'link':
                        get_template_part('includes/acf/parts/call-to-action-link');
                        break;

                    case 'download':
                        get_template_part('includes/acf/parts/call-to-action-download');
                }
            }
        }

    echo '</div>'; // Row closing tag
echo '</div>'; // Container closing tag