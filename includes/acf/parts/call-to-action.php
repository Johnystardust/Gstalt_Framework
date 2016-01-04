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

$btn_link           = get_sub_field('button_link');
$btn_color          = get_sub_field('button_color');
$btn_txt            = get_sub_field('button_text');
$btn_txt_color      = get_sub_field('button_text_color');

$background_color   = get_sub_field('background_color');
$height             = get_sub_field('height');

/*
|----------------------------------------------------------------
|   Alignment options.
|----------------------------------------------------------------
*/
$align = get_sub_field('align');

if($align == 'left'){
    $txt_align = 'left';
    $btn_align = 'right';
}
elseif($align == 'right'){
    $txt_align = 'right';
    $btn_align = 'left';
}


/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The call to action block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="call-to-action" class="container-fluid no-padding" style="background-color: '.$background_color.'; height: '.$height.'px;">';
    /*
    |----------------------------------------------------------------
    |   If the '$title' isn't empty display it.
    |----------------------------------------------------------------
    */
    if(!empty($title)){
        echo '<div class="col-md-10 col" style="float: '.$txt_align.';">';
            echo '<div class="text">';
                echo '<div class="middle-wrap">';
                    // Display the title
                    echo '<h3 class="no-margin" style="color: '.$title_color.';">'.$title.'</h3>';

                    /*
                    |----------------------------------------------------------------
                    |   If the '$subtitle' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($subtitle)){
                        // Display the subtitle
                        echo '<h5 class="no-margin" style="color: '.$subtitle_color.'; font-style: '.$subtitle_style.';">'.$subtitle.'</h5>';
                    }
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }

    /*
    |----------------------------------------------------------------
    |   If the '$button_link' isn't empty display it.
    |----------------------------------------------------------------
    */
    if(!empty($btn_link)){
        echo '<div class="col-md-2 col" style="float: '.$btn_align.';">';
            echo '<div class="buttons">';
                echo '<div class="middle-wrap">';
                    // Display the button
                    echo '<a class="button" href="'.$btn_link.'" style="background-color: '.$btn_color.'; color: '.$btn_txt_color.'">'.$btn_txt.'</a>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
echo '</div>';