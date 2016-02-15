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
$block_width        = get_sub_field('block_width');
$block_offset       = get_sub_field('block_offset');
$vertical_center    = get_sub_field('vertical_center');

$margin             = get_sub_field('margin');
$padding            = get_sub_field('padding');

$content            = get_sub_field('content');
$content_color      = get_sub_field('content_color');
$content_align      = get_sub_field('content_align');

/*
|----------------------------------------------------------------
|   Column Item.
|----------------------------------------------------------------
*/
echo '<div class="column-item '.set_col_size($block_width).' '.set_offset_size($block_offset).' '.($even_col_height ? 'col' : '').'" style="margin: '.$margin.'; padding: '.$padding.';">';
    echo '<div class="column-content text-content on-top-overlay">';

        /*
        |----------------------------------------------------------------
        |   If vertical center is true set img in middle wrap.
        |----------------------------------------------------------------
        */
        echo ($vertical_center ? '<div class="middle-wrap">' : '');

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

        echo ($vertical_center ? '</div>' : '');

    echo '</div>'; // Text Content closing tag

    /*
    |----------------------------------------------------------------
    |   If image overlay set active show the overlay.
    |----------------------------------------------------------------
    */
    get_template_part('includes/acf/parts/assets/image-overlay');


echo '</div>'; // Column Item closing tag
