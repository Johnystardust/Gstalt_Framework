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
$cards              = get_sub_field('cards_with_icon');

$margin             = get_sub_field('margin');
$padding            = get_sub_field('padding');
$background_color   = get_sub_field('background_color');

$border             = get_sub_field('border');
$border_color       = get_sub_field('border_color');
$border_size        = get_sub_field('border_size');
$border_style       = get_sub_field('border_style');

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
|   The Cards with icon block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="cards-with-icon" class="container-fluid container-capped" style="background-color: '.$background_color.'; '.$border_type.'; margin: '.$margin.'; padding: '.$padding.';">';

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
            $title_align            = $card['title_align'];
            $divider                = $card['divider'];

            $btn_link               = $card['button_link'];
            $btn_color              = $card['button_color'];
            $btn_txt                = $card['button_text'];
            $btn_txt_color          = $card['button_text_color'];
            $btn_align              = $card['button_align'];

            $content                = $card['content'];
            $content_color          = $card['content_color'];
            $content_align          = $card['content_align'];

            $icon                   = $card['icon'];
            $icon_color             = $card['icon_color'];
            $icon_background_color  = $card['icon_background_color'];

            /*
            |----------------------------------------------------------------
            |   Card.
            |----------------------------------------------------------------
            */
            echo '<div class="card-with-icon col-md-3 col-sm-6 no-padding">';
                echo '<div class=card-with-icon-inner>';

                    /*
                    |----------------------------------------------------------------
                    |   If the '$icon' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($icon)){
                        echo '<div class="icon" style="background-color: '.$icon_background_color.';">';
                            echo '<i class="icon '.$icon.'" style="color: '.$icon_color.';"></i>';
                        echo '</div>';
                    }

                    /*
                    |----------------------------------------------------------------
                    |   If the '$title' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($title)){
                        // Display the title
                        echo '<h3 class="title no-margin" style="color: '.$title_color.'; text-align: '.$title_align.';">'.$title.'</h3>';

                        /*
                        |----------------------------------------------------------------
                        |   If the '$subtitle' isn't empty display it.
                        |----------------------------------------------------------------
                        */
                        if(!empty($subtitle)){
                            // Display the subtitle
                            echo '<h5 class=" subtitle no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.'; text-align: '.$title_align.';">'.$subtitle.'</h5>';
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

                        echo '<hr class="divider" style="'.$divider_align.'" />';
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
                    |   If the '$btn_link' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($btn_link)){
                        echo '<div class="buttons" style="text-align: '.$btn_align.';">';
                            echo '<a class="button" href="'.$btn_link.'" style="background-color: '.$btn_color.'; color: '.$btn_txt_color.'">'.$btn_txt.'</a>';
                        echo '</div>';
                    }

                echo '</div>'; // card-with-icon-inner closing tag
            echo '</div>'; // card-with-icon closing tag
        }
    echo '</div>'; // row closing tag
echo '</div>'; // container closing tag
