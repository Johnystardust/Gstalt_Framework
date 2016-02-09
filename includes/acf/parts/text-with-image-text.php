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
$content            = get_sub_field('content');
$content_color      = get_sub_field('content_color');
$content_align      = get_sub_field('content_align');

$block_width        = get_sub_field('block_width');
$margin             = get_sub_field('margin');
$padding            = get_sub_field('padding');

/*
|----------------------------------------------------------------
|   Text Block.
|----------------------------------------------------------------
*/
echo '<div class="text '.set_col_size($block_width).' col container-capped" style="margin: '.$margin.'; padding: '.$padding.';">';
    echo '<div class="text-content on-top-overlay">';
        echo '<div class="middle-wrap">';

            /*
            |----------------------------------------------------------------
            |   Title/Divider/Subtitle.
            |----------------------------------------------------------------
            */
            get_template_part('includes/acf/parts/assets/title-divider-subtitle');

            /*
            |----------------------------------------------------------------
            |   If the '$content' isn't empty display it.
            |----------------------------------------------------------------
            */
            if(!empty($content)){
                echo '<div class="content-wrapper" style="color: '.$content_color.'; text-align: '.$content_align.';">'.$content.'</div>';
            }

            /*
            |----------------------------------------------------------------
            |   Buttons.
            |----------------------------------------------------------------
            */
            get_template_part('includes/acf/parts/assets/buttons');

        echo '</div>'; // Middle Wrap closing tag
    echo '</div>'; // Text Content closing tag


    /*
    |----------------------------------------------------------------
    |   If image overlay set active show the overlay.
    |----------------------------------------------------------------
    */
    get_template_part('includes/acf/parts/assets/image-overlay');

echo '</div>'; // Text closing tag