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
$image_content          = get_sub_field('image_content');
$image_size             = get_sub_field('image_size');
$max_image_width        = get_sub_field('max_image_width');
$image_align            = get_sub_field('image_align');
$bottom_value           = get_sub_field('bottom_value');

$hide_content_on_mobile = get_sub_field('hide_on_mobile');

$margin                 = get_sub_field('margin');
$padding                = get_sub_field('padding');
$block_width            = get_sub_field('block_width');

/*
|----------------------------------------------------------------
|   Image size.
|----------------------------------------------------------------
*/
if($image_size == 'auto'){
    $image_width = 'auto';
}
elseif($image_size == '100%'){
    $image_width = '100%';
}
else {
    $image_width = '';
}

/*
|----------------------------------------------------------------
|   Image Align.
|----------------------------------------------------------------
*/
echo $image_align;
if($image_align == 'right'){
    $image_alignment = 'right: 0;';
}
elseif($image_align == 'left'){
    $image_alignment = 'left: 0;';
}
else {
    $image_alignment = '';
}


/*
|----------------------------------------------------------------
|   Slider Image Content.
|----------------------------------------------------------------
*/
echo '<div class="'.set_col_size($block_width).' '.set_col_size_offset($block_width).' block-image '.($hide_content_on_mobile ? 'hide-mobile' : '').'" style="margin: '.$margin.'; padding: '.$padding.'; '.$image_alignment.'">';
    echo '<div class="slide-content-inner">';

        echo '<div class="content-image">';
            echo '<img style="bottom: '.$bottom_value.'px; max-width: '.$max_image_width.'px;" src="'.$image_content.'" width="'.$image_width.'" />';
        echo '</div>';

    echo '</div>'; // Slide Content Inner closing tag
echo '</div>'; // Col Size closing tag