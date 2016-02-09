<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Determine col size.
|-----------------------------------------------------------------------------------------------------------------------
*/
function set_col_size($col_size){
    if($col_size == '8'){
        return 'col-md-1';
    }
    elseif($col_size == '16'){
        return 'col-md-2';
    }
    elseif($col_size == '25'){
        return 'col-md-3';
    }
    elseif($col_size == '33'){
        return 'col-md-4';
    }
    elseif($col_size == '41'){
        return 'col-md-5';
    }
    elseif($col_size == '50'){
        return 'col-md-6';
    }
    elseif($col_size == '58'){
        return 'col-md-7';
    }
    elseif($col_size == '66'){
        return 'col-md-8';
    }
    elseif($col_size == '75'){
        return 'col-md-9';
    }
    elseif($col_size == '83'){
        return 'col-md-10';
    }
    elseif($col_size == '91'){
        return 'col-md-11';
    }
    elseif($col_size == '100'){
        return 'col-md-12';
    }
    else {
        return false;
    }
}

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Determine col size offset.
|-----------------------------------------------------------------------------------------------------------------------
*/
function set_col_size_offset($col_size){
    if($col_size == '25'){
        return 'col-md-offset-9';
    }
    elseif($col_size == '33'){
        return 'col-md-offset-8';
    }
    elseif($col_size == '50'){
        return 'col-md-offset-6';
    }
    elseif($col_size == '66'){
        return 'col-md-offset-3';
    }
    elseif($col_size == '75'){
        return 'col-md-offset-3';
    }
    elseif($col_size == '100'){
        return 'col-md-offset-12';
    }
    else {
        return false;
    }
}

function set_offset_size($offset_size){
    if($offset_size == '8'){
        return 'col-md-offset-1';
    }
    elseif($offset_size == '16'){
        return 'col-md-offset-2';
    }
    elseif($offset_size == '25'){
        return 'col-md-offset-3';
    }
    elseif($offset_size == '33'){
        return 'col-md-offset-4';
    }
    elseif($offset_size == '41'){
        return 'col-md-offset-5';
    }
    elseif($offset_size == '50'){
        return 'col-md-offset-6';
    }
    elseif($offset_size == '58'){
        return 'col-md-offset-7';
    }
    elseif($offset_size == '66'){
        return 'col-md-offset-8';
    }
    elseif($offset_size == '75'){
        return 'col-md-offset-9';
    }
    elseif($offset_size == '83'){
        return 'col-md-offset-10';
    }
    elseif($offset_size == '91'){
        return 'col-md-offset-11';
    }
    elseif($offset_size == '100'){
        return 'col-md-offset-12';
    }
    elseif($offset_size == 'none') {
        return false;
    }
    else {
        return false;
    }
}

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Align left/right/center.
|-----------------------------------------------------------------------------------------------------------------------
*/
function align_left_right_center($align){
    if($align == 'left'){
        return 'float: left;';
    }
    elseif($align == 'right'){
        return 'float: right;';
    }
    elseif($align == 'center'){
        return 'margin-left: auto; margin-right: auto; float: none;';
    }
    else {
        return false;
    }
}

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Text transform.
|-----------------------------------------------------------------------------------------------------------------------
*/
function text_transform($text_transform){
    if($text_transform == true){
        return 'text-transform: uppercase;';
    }
    else {
        return 'text-transform: none;';
    }
}

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Border style.
|-----------------------------------------------------------------------------------------------------------------------
*/
function border_style($border, $border_size, $border_style, $border_color){
    if($border == 'all'){
        return 'border: '.$border_size.'px '.$border_style.' '.$border_color.';';
    }
    elseif($border == 'top'){
        return 'border-top: '.$border_size.'px '.$border_style.' '.$border_color.';';
    }
    elseif($border == 'bottom'){
        return 'border-bottom: '.$border_size.'px '.$border_style.' '.$border_color.';';
    }
    elseif($border == 'topbottom'){
        return 'border-top: '.$border_size.'px '.$border_style.' '.$border_color.'; border-bottom: '.$border_size.' '.$border_style.' '.$border_color.';';
    }
    elseif($border == 'left'){
        return 'border-left: '.$border_size.'px '.$border_style.' '.$border_color.';';
    }
    elseif($border == 'right'){
        return 'border-right: '.$border_size.'px '.$border_style.' '.$border_color.';';
    }
    elseif($border == 'leftright'){
        return 'border-left: '.$border_size.'px '.$border_style.' '.$border_color.'; border-right: '.$border_size.' '.$border_style.' '.$border_color.';';
    }
    elseif($border == 'none'){
        return 'border: none;';
    }
    else {
        return false;
    }
}

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Set background style.
|-----------------------------------------------------------------------------------------------------------------------
*/
function set_background_style($background, $background_color, $background_image, $background_position, $background_size, $background_repeat){
    if($background == 'color'){
        return 'background-color: '.$background_color.';';
    }
    elseif($background == 'image'){
        return 'background: url('.$background_image.'); background-position: '.$background_position.'; background-size: '.$background_size.'; background-repeat: '.$background_repeat.';';
    }
    elseif($background == 'both'){
        return 'background: '.$background_color.' url('.$background_image.'); background-position: '.$background_position.'; background-size: '.$background_size.'; background-repeat: '.$background_repeat.';';
    }
    else {
        return false;
    }
}


