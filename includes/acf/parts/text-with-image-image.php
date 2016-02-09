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
$image              = get_sub_field('image');
$image_size         = get_sub_field('image_size');
$max_image_width    = get_sub_field('max_image_width');
$image_align        = get_sub_field('image_align');
$vertical_center    = get_sub_field('vertical_center');

$block_width        = get_sub_field('block_width');
$margin             = get_sub_field('margin');
$padding            = get_sub_field('padding');

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
|   Image Block.
|----------------------------------------------------------------
*/
echo '<div class="image '.set_col_size($block_width).' col '.$image_class.' no-padding" style="margin: '.$margin.'; padding: '.$padding.';">';
    /*
    |----------------------------------------------------------------
    |   If vertical center is true set img in middle wrap.
    |----------------------------------------------------------------
    */
    if($vertical_center){
        echo '<div class="image-content on-top-overlay">';
            echo '<div class="middle-wrap">';
                echo '<img style="'.align_left_right_center($image_align).'; max-width: '.$max_image_width.'px;" src="'.$image.'" width="'.$image_width.'" />';
            echo '</div>';
        echo '</div>';
    }
    else {
        echo '<img class="on-top-overlay" style="'.align_left_right_center($image_align).'; max-width: '.$max_image_width.'px;" src="'.$image.'" width="'.$image_width.'" />';
    }

    /*
    |----------------------------------------------------------------
    |   If image overlay set active show the overlay.
    |----------------------------------------------------------------
    */
    get_template_part('includes/acf/parts/assets/image-overlay');

echo '</div>'; // Image closing tag