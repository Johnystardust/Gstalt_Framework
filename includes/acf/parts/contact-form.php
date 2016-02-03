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

$title_align            = get_sub_field('title_align');

$margin                 = get_sub_field('margin');
$padding                = get_sub_field('padding');

$background             = get_sub_field('background');
$background_color       = get_sub_field('background_color');
$background_image       = get_sub_field('background_image');
$background_align       = get_sub_field('image_align');
$background_size        = get_sub_field('image_size');
$image_overlay_active   = get_sub_field('image_overlay_active');
$image_overlay          = get_sub_field('image_overlay');
$image_overlay_opacity  = get_sub_field('image_overlay_opacity') / 100;

$contact_form_shortcode = get_sub_field('contact_form_7_id');
$contact_form_align     = get_sub_field('contact_form_align');
$contact_form_width     = get_sub_field('contact_form_width');
$contact_form_max_width = get_sub_field('contact_form_max_width');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Contact Form Block
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="contact-form" class="container-fluid container-capped" style="margin: '.$margin.'; padding: '.$padding.'; background: '.$background_color.' url('.$background_image.') '.$background_align.'; background-size: '.$background_size.';">';
    /*
    |----------------------------------------------------------------
    |   Title/Subtitle.
    |----------------------------------------------------------------
    */
    if($show_title || $show_subtitle){
        echo '<div class="row title-subtitle">';
            /*
            |----------------------------------------------------------------
            |   If the '$title' isn't empty display it.
            |----------------------------------------------------------------
            */
            if($show_title){
                // Display the title
                echo '<h1 class="title no-margin" style="color: '.$title_color.'; text-align: '.$title_align.'; '.text_transform($title_uppercase).'; ">'.$title.'</h1>';

                /*
                |----------------------------------------------------------------
                |   If the '$divider' is set true display it.
                |----------------------------------------------------------------
                */
                if($divider == true){
                    echo '<div class="divider">';
                        echo '<hr style="'.align_left_right_center($title_align).'; border-color: '.$divider_color.';" />';
                    echo '</div>';
                }

                /*
                |----------------------------------------------------------------
                |   If the '$subtitle' isn't empty display it.
                |----------------------------------------------------------------
                */
                if($show_subtitle){
                    // Display the subtitle
                    echo '<h3 class="subtitle no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.'; text-align: '.$title_align.';">'.$subtitle.'</h3>';
                }
            }
        echo '</div>'; // Title/Subtitle closing tag
    }

    /*
    |----------------------------------------------------------------
    |   Contact Form.
    |----------------------------------------------------------------
    */
    echo '<div class="row contact-form">';
        echo '<div class="'.determine_col_size($contact_form_width).'" style="'.align_left_right_center($contact_form_align).'">';
            echo do_shortcode($contact_form_shortcode);
        echo '</div>'; // Col Size closing tag
    echo '</div>'; // Contact Form closing tag

echo '</div>'; // Container closing tag
