<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|----------------------------------------------------------------
|   Get the slide fields and put them in variables for easy usage.
|----------------------------------------------------------------
*/
$margin                 = get_sub_field('margin');
$padding                = get_sub_field('padding');
$block_width            = get_sub_field('block_width');

/*
|----------------------------------------------------------------
|   Slider Text Content.
|----------------------------------------------------------------
*/
echo '<div class="'.set_col_size($block_width).' block-text" style="margin: '.$margin.'; padding: '.$padding.';">';
    echo '<div class="slide-content-inner">';

        /*
        |----------------------------------------------------------------
        |   Title/Divider/Subtitle.
        |----------------------------------------------------------------
        */
        get_template_part('includes/acf/parts/assets/title-divider-subtitle');

        /*
        |----------------------------------------------------------------
        |   Buttons.
        |----------------------------------------------------------------
        */
        get_template_part('includes/acf/parts/assets/buttons');

    echo '</div>'; // Slide Content Inner closing tag
echo '</div>'; // Col Size closing tag