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
$margin_title           = get_sub_field('margin_title');
$padding_title          = get_sub_field('padding_title');
$title_subtitle_width   = get_sub_field('title_subtitle_width');
$title_subtitle_offset  = get_sub_field('title_subtitle_offset');

$background             = get_sub_field('background');
$background_color       = get_sub_field('background_color');
$background_image       = get_sub_field('background_image');
$background_align       = get_sub_field('image_align');
$background_size        = get_sub_field('image_size');
$background_repeat      = get_sub_field('image_repeat');
$background_attachment  = get_sub_field('background_attachment');

$container              = get_sub_field('container');
$margin_container       = get_sub_field('margin_container');
$padding_container      = get_sub_field('padding_container');

$buttons_align_vert_mid = get_sub_field('buttons_align_vert_mid');

$buttons_width          = get_sub_field('buttons_width');
$buttons_offset         = get_sub_field('buttons_offset');
$buttons_align          = get_sub_field('buttons_align');

$margin_buttons         = get_sub_field('margin_buttons');
$padding_buttons        = get_sub_field('padding_buttons');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The call to action block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="call-to-action" style="'.set_background_style($background, $background_color, $background_image, $background_align, $background_size, $background_repeat, $background_attachment).' margin: '.$margin_container.'; padding: '.$padding_container.';">';
    echo '<div class="container-fluid same-col-height '.$container.'">';

        echo '<div class="row on-top-overlay">';

            /*
            |----------------------------------------------------------------
            |   Title/Divider/Subtitle.
            |----------------------------------------------------------------
            */
            echo '<div class="'.set_col_size($title_subtitle_width).' '.set_offset_size($title_subtitle_offset).' col-sm-12 col-xs-12 col">';
                echo '<div style="margin: '.$margin_title.'; padding: '.$padding_title.'; display: table; width: 100%">';
                    echo '<div class="middle-wrap">';
                        get_template_part('includes/acf/parts/assets/title-divider-subtitle');
                    echo '</div>';
                echo '</div>';
            echo '</div>';

            /*
            |----------------------------------------------------------------
            |   Buttons.
            |----------------------------------------------------------------
            */
            echo '<div class="'.set_col_size($buttons_width).' '.set_offset_size($buttons_offset).' col-sm-12 col-xs-12 buttons-row '.($buttons_align_vert_mid ? 'col' : '').'">';
                echo '<div class="inner-col" style="'.($buttons_align_vert_mid ? 'display: table;' : '').' margin: '.$margin_buttons.'; padding: '.$padding_buttons.';">';

                    /*
                    |----------------------------------------------------------------
                    |   if '$buttons_align_vert_mid' is set echo the middle-wrap div.
                    |----------------------------------------------------------------
                    */
                    if($buttons_align_vert_mid){
                        echo '<div class="middle-wrap">';
                    }

                        /*
                        |----------------------------------------------------------------
                        |   Buttons.
                        |----------------------------------------------------------------
                        */
                        if(get_sub_field('buttons')){
                            echo '<div class="buttons" style="text-align: '.$buttons_align.'">';

                            while(has_sub_field('buttons')){
                                /*
                                |----------------------------------------------------------------
                                |   Get all the button fields.
                                |----------------------------------------------------------------
                                */
                                $btn_choice     = get_sub_field('button_choice');
                                $btn_link       = get_sub_field('button_link');
                                $btn_new_tab    = get_sub_field('button_new_tab');
                                $download       = get_sub_field('download');
                                $btn_txt        = get_sub_field('button_text');

                                /*
                                |----------------------------------------------------------------
                                |   If '$btn-link' isn't empty, display it.
                                |----------------------------------------------------------------
                                */
                                if(!empty($btn_link)){
                                    echo '<a class="button '.$btn_choice.'" href="'.$btn_link.'" target="'.($btn_new_tab ? '_blank' : '_self').'" '.($download ? 'download' : '').'>'.$btn_txt.'</a>';
                                }
                            }

                            echo '</div>'; // Buttons closing tag
                        }

                    /*
                    |----------------------------------------------------------------
                    |   if '$buttons_align_vert_mid' is set close the middle-wrap div.
                    |----------------------------------------------------------------
                    */
                    if($buttons_align_vert_mid){
                        echo '</div>'; // Middle Wrap closing tag
                    }

                echo '</div>'; // Inner Col closing tag
            echo '</div>';

        echo '</div>'; // Row closing tag

        /*
        |----------------------------------------------------------------
        |   If image overlay set active show the overlay.
        |----------------------------------------------------------------
        */
        get_template_part('includes/acf/parts/assets/image-overlay');

    echo '</div>'; // Container closing tag
echo '</div>'; // Call To Action closing tag