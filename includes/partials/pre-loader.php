<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|----------------------------------------------------------------
|   Get the fields and put them in variables for easy usage.
|----------------------------------------------------------------
*/
$preloader_activate         = get_field('preloader_activate', 'option');
$preloader_background_color = get_field('preloader_background_color', 'option');
$preloader_gif              = get_field('preloader_gif', 'option');
$preloader_gif_max_width    = get_field('preloader_gif_max_width', 'option');

/*
|----------------------------------------------------------------
|   Preloader.
|----------------------------------------------------------------
*/
if($preloader_activate){
    echo '<div id="preloader" style="background-color: '.$preloader_background_color.';">';
        echo '<div class="middle-wrap">';
            echo '<img src="'.$preloader_gif.'" style="max-width: '.$preloader_gif_max_width.'px;"/>';
        echo '</div>'; // Middle Wrap closing tag
    echo '</div>'; // Preloader closing tag
}
