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
$background             = get_sub_field('background');
$image_overlay_active   = get_sub_field('image_overlay_active');
$image_overlay          = get_sub_field('image_overlay');
$image_overlay_opacity  = get_sub_field('image_overlay_opacity') / 100;

/*
|----------------------------------------------------------------
|   If image overlay set active show the overlay.
|----------------------------------------------------------------
*/
if($background == 'image' || $background == 'both'){
    if($image_overlay_active == true){
        echo '<div class="image-overlay" style="background: '.$image_overlay.'; opacity: '.$image_overlay_opacity.'"></div>';
    }
}

