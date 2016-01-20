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
$title_align        = get_sub_field('title_align');
$divider            = get_sub_field('divider');

$content            = get_sub_field('content');
$content_color      = get_sub_field('content_color');
$content_align      = get_sub_field('content_align');

$btn_link           = get_sub_field('button_link');
$btn_color          = get_sub_field('button_color');
$btn_txt            = get_sub_field('button_text');
$btn_txt_color      = get_sub_field('button_text_color');
$btn_align          = get_sub_field('button_align');

$image              = get_sub_field('image');
$image_width        = get_sub_field('image_width');
$image_align        = get_sub_field('image_align');

$order              = get_sub_field('order');
$block_width        = get_sub_field('block_width');
$background_color   = get_sub_field('background_color');

$margin             = get_sub_field('margin');
$padding            = get_sub_field('padding');

$border             = get_sub_field('border');
$border_color       = get_sub_field('border_color');
$border_size        = get_sub_field('border_size');
$border_style       = get_sub_field('border_style');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   Alignment options.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/

/*
|----------------------------------------------------------------
|   Blocks order
|----------------------------------------------------------------
*/
if($order == 'text'){
    $txt_order = 'left: 0;';
    $img_order = 'pull-right';
}
elseif($order == 'image'){
    $txt_order = 'right: 0;';
    $img_order = 'pull-left';
}

/*
|----------------------------------------------------------------
|   Image align
|----------------------------------------------------------------
*/
if($image_align == 'left'){
    $image_alignment = 'float: left;';
}
elseif($image_align == 'right'){
    $image_alignment = 'float: right;';
}
elseif($image_align == 'center'){
    $image_alignment = 'margin: 0 auto;';
}

/*
|----------------------------------------------------------------
|   Block width
|----------------------------------------------------------------
*/
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
    $text_block = 'col-md-8 col-sm-12 col-xs-12';
    $image_block = 'col-md-4 col-sm-12 col-xs-12';
}
elseif($block_width == 75){
    $text_block = 'col-md-9';
    $image_block = 'col-md-3';
}

/*
|----------------------------------------------------------------
|   Border type
|----------------------------------------------------------------
*/
if($border == 'all'){
    $border_type = 'border: '.$border_size.'px '.$border_style.' '.$border_color.';';
}
elseif($border == 'top'){
    $border_type = 'border-top: '.$border_size.'px '.$border_style.' '.$border_color.';';
}
elseif($border == 'bottom'){
    $border_type = 'border-bottom: '.$border_size.'px '.$border_style.' '.$border_color.';';
}
elseif($border == 'topbottom'){
    $border_type = 'border-top: '.$border_size.'px '.$border_style.' '.$border_color.'; border-bottom: '.$border_size.' '.$border_style.' '.$border_color.';';
}
elseif($border == 'left'){
    $border_type = 'border-left: '.$border_size.'px '.$border_style.' '.$border_color.';';
}
elseif($border == 'right'){
    $border_type = 'border-right: '.$border_size.'px '.$border_style.' '.$border_color.';';
}
elseif($border == 'leftright'){
    $border_type = 'border-left: '.$border_size.'px '.$border_style.' '.$border_color.'; border-right: '.$border_size.' '.$border_style.' '.$border_color.';';
}
elseif($border == 'none'){
    $border_type = '';
}

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   Text with image block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="text-with-image" class="container-fluid no-padding" style="background-color: '.$background_color.'; '.$border_type.'; margin: '.$margin.'; padding: '.$padding.';">';

    echo '<div class="'.$image_block.' no-padding image '.$img_order.'">';
        echo '<img style="'.$image_alignment.';" src="'.$image.'" width="'.$image_width.'" />';
    echo '</div>'; // image closing tag

    echo '<div class="'.$text_block.' no-padding text" style="'.$txt_order.'">';
        echo '<div class="text-content">';
            echo '<div class="middle-wrap">';
                /*
                |----------------------------------------------------------------
                |   If the '$title' isn't empty display it.
                |----------------------------------------------------------------
                */
                if(!empty($title)){
                    // Display the title
                    echo '<h1 class="title no-margin" style="color: '.$title_color.'; text-align: '.$title_align.';">'.$title.'</h3>';

                    /*
                    |----------------------------------------------------------------
                    |   If the '$subtitle' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($subtitle)){
                        // Display the subtitle
                        echo '<h3 class="subtitle no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.'; text-align: '.$title_align.';">'.$subtitle.'</h5>';
                    }
                }

                /*
                |----------------------------------------------------------------
                |   If the '$divider' is set true display it.
                |----------------------------------------------------------------
                */
                if($divider == true){
                    /*
                    |----------------------------------------------------------------
                    |   Align the divider with the '$title_align'.
                    |----------------------------------------------------------------
                    */
                    if($title_align == 'center'){
                        $divider_align = 'margin-left: auto; margin-right: auto;';
                    }
                    elseif($title_align == 'left'){
                        $divider_align = 'float: left;';
                    }
                    elseif($title_align == 'right'){
                        $divider_align = 'float: right;';
                    }

                    echo '<div class="divider">';
                        echo '<hr style="'.$divider_align.'" />';
                    echo '</div>';
                }

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
                |   If the '$button_link' isn't empty display it.
                |----------------------------------------------------------------
                */
                if(!empty($btn_link)){
                    echo '<div class="buttons" style="text-align: '.$btn_align.';">';
                        echo '<a class="button" href="'.$btn_link.'" style="background-color: '.$btn_color.'; color: '.$btn_txt_color.'">'.$btn_txt.'</a>';
                    echo '</div>';
                }

            echo '</div>'; // middle wrap closing tag
        echo '</div>'; // text content closing tag
    echo '</div>'; // text closing tag

echo '</div>'; // container closing tag