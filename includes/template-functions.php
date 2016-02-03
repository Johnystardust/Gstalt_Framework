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
function determine_col_size($col_size){
    if($col_size == '25'){
        return 'col-md-3';
    }
    elseif($col_size == '33'){
        return 'col-md-4';
    }
    elseif($col_size == '50'){
        return 'col-md-6';
    }
    elseif($col_size == '66'){
        return 'col-md-8';
    }
    elseif($col_size == '75'){
        return 'col-md-9';
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
        return 'margin: 0 auto; float: none;';
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
        return 'text-transform: uppercase';
    }
    else {
        return 'text-transform: none';
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
    else {
        return false;
    }
}