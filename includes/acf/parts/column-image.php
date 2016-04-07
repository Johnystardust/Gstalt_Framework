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
$hide_on_mobile             = get_sub_field('hide_on_mobile');
$hide_on_desktop            = get_sub_field('hide_on_desktop');

$block_width                = get_sub_field('block_width');
$block_offset               = get_sub_field('block_offset');
$vertical_center            = get_sub_field('vertical_center');

$margin                     = get_sub_field('margin');
$padding                    = get_sub_field('padding');

$image_style                = get_sub_field('image_style');

$image                      = get_sub_field('image');

$image_size                 = get_sub_field('image_size');
$max_image_width            = get_sub_field('max_image_width');
$image_align                = get_sub_field('image_align');

$background_image_align     = get_sub_field('background_image_align');
$background_image_size      = get_sub_field('background_image_size');
$background_image_repeat    = get_sub_field('background_image_repeat');
$background_attachment      = get_sub_field('background_attachment');
$min_height                 = get_sub_field('min_height');

/*
|----------------------------------------------------------------
|   Image size.
|----------------------------------------------------------------
*/
if($image_size == 'auto'){
    $image_width = 'auto';
    $image_class = '';
}
elseif($image_size == '100%'){
    $image_width = '100%';
    $image_class = '';
}
elseif($image_size == 'fill'){
    $image_width = '100%';
    $image_class = 'fill';
}
else {
    $image_width = '';
    $image_class = '';
}

/*
|----------------------------------------------------------------
|   Column Item.
|----------------------------------------------------------------
*/
echo '<div class="column-item '.set_col_size($block_width).' '.set_offset_size($block_offset).' '.($even_col_height ? 'col' : '').' '.$image_class.' '.($hide_on_mobile ? 'hide-mobile' : '').' '.($hide_on_desktop ? 'hide-desktop' : '').'"
    style="'.($image_style == 'background_image' ? set_background_style('image', '', $image, $background_image_align, $background_image_size, $background_image_repeat, $background_attachment).' min-height: '.$min_height.'px;' : '').'margin: '.$margin.'; padding: '.$padding.';">';

    if($image_style == 'image'){
        echo '<div class="column-content image-content on-top-overlay" style="display: '.($vertical_center ? 'table' : '').'">';

            /*
            |----------------------------------------------------------------
            |   If vertical center is true set img in middle wrap.
            |----------------------------------------------------------------
            */
            echo ($vertical_center ? '<div class="middle-wrap">' : '');
                echo '<img style="'.align_left_right_center($image_align).'; max-width: '.$max_image_width.'px;" src="'.$image.'" width="'.$image_width.'" />';
            echo ($vertical_center ? '</div>' : '');

        echo '</div>'; // Image Content closing tag
    }
echo '</div>'; // Column Item closing tag










