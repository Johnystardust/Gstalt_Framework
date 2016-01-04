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
$title              = get_sub_field('title');
$title_color        = get_sub_field('title_color');
$subtitle           = get_sub_field('subtitle');
$subtitle_color     = get_sub_field('subtitle_color');
$subtitle_style     = get_sub_field('subtitle_style');
$content            = get_sub_field('content');
$content_color      = get_sub_field('content_color');
$text_align         = get_sub_field('text_align');

$btn_link           = get_sub_field('button_link');
$btn_color          = get_sub_field('button_color');
$btn_txt            = get_sub_field('button_text');
$btn_txt_color      = get_sub_field('button_text_color');
$btn_align          = get_sub_field('button_align');

$image              = get_sub_field('image');
$image_align        = get_sub_field('image_align');

$order              = get_sub_field('order');
$block_width        = get_sub_field('block_width');
$background_color   = get_sub_field('background_color');

/*
|----------------------------------------------------------------
|   Alignment options.
|----------------------------------------------------------------
*/
// Blocks order
if($order == 'text'){
    $txt_order = 'left: 0;';
    $img_order = 'pull-right';
}
elseif($order == 'image'){
    $txt_order = 'right: 0;';
    $img_order = 'pull-left';
}

// Image align
if($image_align == 'left'){
    $image_alignment = 'float: left;';
}
elseif($image_align == 'right'){
    $image_alignment = 'float: right;';
}
elseif($image_align == 'center'){
    $image_alignment = 'margin: 0 auto;';
}

// Block width
if($block_width == 25){
    $text_block = 'col-md-3';
    $image_block = 'col-md-9';
}
elseif($block_width == 33){
    $text_block = 'col-md-4';
    $image_block = 'col-md-8';
}
elseif($block_width == 50){
    $text_block = 'col-md-6';
    $image_block = 'col-md-6';
}
elseif($block_width == 66){
    $text_block = 'col-md-8';
    $image_block = 'col-md-4';
}
elseif($block_width == 75){
    $text_block = 'col-md-9';
    $image_block = 'col-md-3';
}

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   Text with image block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="text-with-image" class="container-fluid no-padding" style="background-color: '.$background_color.';">';

    echo '<div class="'.$text_block.' no-padding text" style="'.$txt_order.'">';
        echo '<div class="text-content" style="text-align: '.$text_align.';">';
            echo '<div class="middle-wrap">';
                // Display the title
                echo '<h1 class="no-margin" style="color: '.$title_color.'">'.$title.'</h1>';

                /*
                |----------------------------------------------------------------
                |   If the '$subtitle' isn't empty display it.
                |----------------------------------------------------------------
                */
                if(!empty($subtitle)){
                    // Display the subtitle
                    echo '<h5 class="no-margin" style="color: '.$subtitle_color.'; font-style: '.$subtitle_style.';">'.$subtitle.'</h5>';
                }

                // Display the content
                echo '<div style="color: '.$content_color.';">'.$content.'</div>';

                /*
                |----------------------------------------------------------------
                |   If the '$button_link' isn't empty display it.
                |----------------------------------------------------------------
                */
                if(!empty($btn_link)){
                    echo '<div class="buttons" style="text-align: '.$btn_align.';">';
                        echo '<a class="button" href="'.$btn_link.'" style="background-color: '.$btn_color.'; color: '.$btn_txt_color.'">'.$btn_txt.'</a>';
                    echo '</div>';
                }

            echo '</div>';
        echo '</div>';
    echo '</div>';

    echo '<div class="'.$image_block.' no-padding image '.$img_order.'">';
        echo '<img style="'.$image_alignment.';" src="'.$image.'" />';
    echo '</div>';

echo '</div>';