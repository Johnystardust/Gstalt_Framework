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
$cards = get_sub_field('cards');

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
|   The Slider block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="cards" class="container-fluid no-padding">';
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
            $title                  = $card['title'];
            $title_color            = $card['title_color'];
            $subtitle               = $card['sub_title'];
            $subtitle_color         = $card['subtitle_color'];
            $subtitle_style         = $card['subtitle_style'];
            $text_align             = $card['text_align'];

            $btn_link               = $card['button_link'];
            $btn_color              = $card['button_color'];
            $btn_txt                = $card['button_text'];
            $btn_txt_color          = $card['button_text_color'];
            $btn_align              = $card['button_align'];

            $content                = $card['content'];
            $content_color          = $card['content_color'];

            $background_color       = $card['background_color'];
            $background             = $card['background_image'];
            $background_pos         = $card['image_align'];
            $background_size        = $card['image_size'];
            $background_repeat      = $card['image_repeat'];

            /*
            |----------------------------------------------------------------
            |   Card.
            |----------------------------------------------------------------
            */
            echo '<div class="card '.$card_width.' no-padding" style="background: '.$background_color.' url('.$background.') '.$background_repeat.'; background-position: '.$background_pos.'; background-size: '.$background_size.'; ">';
                echo '<div class="card-inner">';

                    /*
                    |----------------------------------------------------------------
                    |   If the '$title' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($title)){
                        // Display the title
                        echo '<h3 class="no-margin" style="color: '.$title_color.';">'.$title.'</h3>';
                        echo '<br/>';

                        /*
                        |----------------------------------------------------------------
                        |   If the '$subtitle' isn't empty display it.
                        |----------------------------------------------------------------
                        */
                        if(!empty($subtitle)){
                            // Display the subtitle
                            echo '<h5 class="no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.';">'.$subtitle.'</h5>';
                            echo '<br/>';
                        }
                    }

                    /*
                    |----------------------------------------------------------------
                    |   If the '$content' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($content)){
                        echo '<div class="content-wrapper" style="color: '.$content_color.';">'.$content.'</div>';
                    }

                    /*
                    |----------------------------------------------------------------
                    |   If the '$btn_link' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($btn_link)){
                        echo '<div class="buttons">';
                            echo '<a class="button" href="'.$btn_link.'" style="background-color: '.$btn_color.'; color: '.$btn_txt_color.'">'.$btn_txt.'</a>';
                        echo '</div>';
                    }

                echo '</div>'; // card-inner closing tag
            echo '</div>'; // card closing tag
        }
    echo '</div>'; // row closing tag
echo '</div>'; // container closing tag

