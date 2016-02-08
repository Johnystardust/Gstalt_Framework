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
$contact_form_style     = get_sub_field('contact_form_style');
$contact_form_align     = get_sub_field('contact_form_align');
$contact_form_width     = get_sub_field('contact_form_width');
$contact_form_max_width = get_sub_field('contact_form_max_width');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Contact Form Block
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="contact-form" class="container-fluid container-capped" style="'.set_background_style($background, $background_color, $background_image, $background_align, $background_size, $background_repeat).' margin: '.$margin.'; padding: '.$padding.';">';

    echo '<div class="row contact-form '.$contact_form_style.' on-top-overlay">';
        /*
        |----------------------------------------------------------------
        |   Title/Divider/Subtitle.
        |----------------------------------------------------------------
        */
        get_template_part('includes/acf/parts/assets/title-divider-subtitle');

        /*
        |----------------------------------------------------------------
        |   Contact Form.
        |----------------------------------------------------------------
        */
        echo '<div class="'.set_col_size($contact_form_width).'" style="'.align_left_right_center($contact_form_align).'">';
            echo do_shortcode($contact_form_shortcode);
        echo '</div>'; // Col Size closing tag
    echo '</div>'; // Contact Form closing tag

    /*
    |----------------------------------------------------------------
    |   If image overlay set active show the overlay.
    |----------------------------------------------------------------
    */
    if($background == 'image' || $background == 'both'){
        if($image_overlay_active == true){
            echo '<div class="image-overlay" style="background: '.$image_overlay.'; opacity: '.$image_overlay_opacity.'"></div>';
        }
    }

echo '</div>'; // Container closing tag
