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
$cards                  = get_sub_field('cards');

$background             = get_sub_field('background');
$background_color       = get_sub_field('background_color');
$background_image       = get_sub_field('background_image');
$background_align       = get_sub_field('image_align');
$background_size        = get_sub_field('image_size');

$image_overlay_active   = get_sub_field('image_overlay_active');
$image_overlay          = get_sub_field('image_overlay');
$image_overlay_opacity  = get_sub_field('image_overlay_opacity') / 100;

$margin_container       = get_sub_field('margin_container');
$padding_container      = get_sub_field('padding_container');

/*
|----------------------------------------------------------------
|   Count the cards and make sure they have the correct class
|   to set the width.
|----------------------------------------------------------------
*/
$cards_count = count($cards);

if($cards_count == 1){
    $card_width = 'col-md-12';
}
elseif($cards_count == 2){
    $card_width = 'col-md-6';
}
elseif($cards_count == 3){
    $card_width = 'col-md-4';
}
elseif($cards_count == 4){
    $card_width = 'col-md-3';
}

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Cards block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="cards" class="container-fluid no-padding same-col-height" style="'.set_background_style($background, $background_color, $background_image, $background_align, $background_size, $background_repeat).' margin: '.$margin_container.'; padding: '.$padding_container.';">';

    echo '<div class="row no-margin">';
        /*
        |----------------------------------------------------------------
        |   Use foreach to loop over al the cards.
        |----------------------------------------------------------------
        */
        foreach($cards as $card){
            /*
            |----------------------------------------------------------------
            |   Get the card fields and put them in variables for easy usage.
            |----------------------------------------------------------------
            */
            $show_title             = $card['show_title'];
            $title                  = $card['title'];
            $title_color            = $card['title_color'];
            $title_uppercase        = $card['title_uppercase'];

            $divider                = $card['divider'];
            $divider_color          = $card['divider_color'];

            $show_subtitle          = $card['show_subtitle'];
            $subtitle               = $card['sub_title'];
            $subtitle_color         = $card['subtitle_color'];
            $subtitle_style         = $card['subtitle_style'];

            $title_align            = $card['title_align'];

            $buttons                = $card['buttons'];

            $content                = $card['content'];
            $content_color          = $card['content_color'];
            $content_align          = $card['content_align'];

            $background_card_color  = $card['background_color'];
            $background             = $card['background_image'];
            $background_pos         = $card['image_align'];
            $background_size        = $card['image_size'];
            $background_repeat      = $card['image_repeat'];

            /*
            |----------------------------------------------------------------
            |   Card.
            |----------------------------------------------------------------
            */
            echo '<div class="card col '.$card_width.' no-padding" style="background: '.$background_card_color.' url('.$background.') '.$background_repeat.'; background-position: '.$background_pos.'; background-size: '.$background_size.'; ">';
                echo '<div class="card-inner">';

                    /*
                    |----------------------------------------------------------------
                    |   If the '$title' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($title)){
                        // See if title needs to be uppercase
                        $title_uppercase ? $text_transform = 'uppercase' : $text_transform = 'none';

                        // Display the title
                        echo '<h3 class="title no-margin" style="color: '.$title_color.'; text-transform: '.$text_transform.'; text-align: '.$title_align.';">'.$title.'</h3>';

                        /*
                        |----------------------------------------------------------------
                        |   If the '$subtitle' isn't empty display it.
                        |----------------------------------------------------------------
                        */
                        if(!empty($subtitle)){
                            // Display the subtitle
                            echo '<h5 class="subtitle no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.'; text-align: '.$title_align.';">'.$subtitle.'</h5>';
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
                            echo '<hr style="'.$divider_align.'; border-color: '.$divider_color.';" />';
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
                    |   If the '$buttons' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($buttons)){
                        echo '<div class="buttons" style="text-align: '.$title_align.'">';
                        /*
                        |----------------------------------------------------------------
                        |   Use foreach to loop over al the buttons.
                        |----------------------------------------------------------------
                        */
                        foreach($buttons as $button){
                            /*
                            |----------------------------------------------------------------
                            |   Get all the button fields.
                            |----------------------------------------------------------------
                            */
                            $btn_choice     = $button['button_choice'];
                            $btn_link       = $button['button_link'];
                            $btn_new_tab    = $button['button_new_tab'];
                            $btn_txt        = $button['button_text'];

                            /*
                            |----------------------------------------------------------------
                            |   If '$btn-link' isn't empty, display it.
                            |----------------------------------------------------------------
                            */
                            if(!empty($btn_link)){
                                echo '<a class="button '.$btn_choice.'" href="'.$btn_link.'" target="'.($btn_new_tab ? '_blank' : '_self').'">'.$btn_txt.'</a>';
                            }
                        }
                        echo '</div>'; // Buttons closing tag
                    }

                echo '</div>'; // card-inner closing tag
            echo '</div>'; // card closing tag
        }
    echo '</div>'; // row closing tag
echo '</div>'; // container closing tag

