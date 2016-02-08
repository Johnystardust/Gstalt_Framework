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
$title_size             = get_sub_field('title_size');
$title_color            = get_sub_field('title_color');
$title_uppercase        = get_sub_field('title_uppercase');

$divider                = get_sub_field('divider');
$divider_color          = get_sub_field('divider_color');

$show_subtitle          = get_sub_field('show_subtitle');
$subtitle               = get_sub_field('subtitle');
$subtitle_size          = get_sub_field('subtitle_size');
$subtitle_color         = get_sub_field('subtitle_color');
$subtitle_style         = get_sub_field('subtitle_style');

$title_align            = get_sub_field('title_align');

/*
|----------------------------------------------------------------
|   If the '$title' isn't empty display it.
|----------------------------------------------------------------
*/
if($show_title){
    // Display the title
    echo '<h1 class="title no-margin" style="color: '.$title_color.'; text-align: '.$title_align.'; font-size: '.$title_size.'px; '.text_transform($title_uppercase).'; ">'.$title.'</h1>';

    /*
    |----------------------------------------------------------------
    |   If the '$divider' is set true display it.
    |----------------------------------------------------------------
    */
    if($divider == true){
        echo '<div class="divider">';
            echo '<hr style="'.align_left_right_center($title_align).' border-color: '.$divider_color.';" />';
        echo '</div>';
    }
}

/*
|----------------------------------------------------------------
|   If the '$subtitle' isn't empty display it.
|----------------------------------------------------------------
*/
if($show_subtitle){
    // Display the subtitle
    echo '<h3 class="subtitle no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.'; text-align: '.$title_align.'; font-size: '.$subtitle_size.'px; ">'.$subtitle.'</h3>';
}