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
$card_width = get_sub_field('card_width');

if($card_width == 8){
    $max_cards_row = 12;
}
elseif($card_width == 16){
    $max_cards_row = 6;
}
elseif($card_width == 25){
    $max_cards_row = 4;
}
elseif($card_width == 33){
    $max_cards_row = 3;
}
elseif($card_width == 50){
    $max_cards_row = 2;
}
elseif($card_width == 100){
    $max_cards_row = 1;
}

$i = 0;

/*
|----------------------------------------------------------------
|   Loop over all the cards.
|----------------------------------------------------------------
*/
if(get_sub_field('cards_with_icon')){
    while(has_sub_field('cards_with_icon')) {
        /*
        |----------------------------------------------------------------
        |   Get the card fields and put them in variables for easy usage.
        |----------------------------------------------------------------
        */
        $icon = get_sub_field('icon');
        $icon_color = get_sub_field('icon_color');
        $icon_background_color = get_sub_field('icon_background_color');

        $content = get_sub_field('content');
        $content_color = get_sub_field('content_color');
        $content_align = get_sub_field('content_align');

        /*
        |----------------------------------------------------------------
        |   Place opening row div.
        |----------------------------------------------------------------
        */
        if ($i % $max_cards_row == 0) {
            echo '<div class="row">';
        }

        /*
        |----------------------------------------------------------------
        |   Card With Icon block.
        |----------------------------------------------------------------
        */
        echo '<div class="card-with-icon ' . set_col_size($card_width) . ' col-xs-12">';
        echo '<div class=card-with-icon-inner>';

        /*
        |----------------------------------------------------------------
        |   If the '$icon' isn't empty display it.
        |----------------------------------------------------------------
        */
        if (!empty($icon)) {
            echo '<div class="icon" style="background-color: ' . $icon_background_color . ';">';
            echo '<i class="icon ' . $icon . '" style="color: ' . $icon_color . ';"></i>';
            echo '</div>';
        }

        /*
        |----------------------------------------------------------------
        |   Title/Divider/Subtitle.
        |----------------------------------------------------------------
        */
        get_template_part('includes/acf/parts/assets/title-divider-subtitle');

        /*
        |----------------------------------------------------------------
        |   If the '$content' isn't empty display it.
        |----------------------------------------------------------------
        */
        if (!empty($content)) {
            echo '<div class="content-wrapper" style="color: ' . $content_color . '; text-align: ' . $content_align . ';">' . $content . '</div>';
        }

        /*
        |----------------------------------------------------------------
        |   Buttons.
        |----------------------------------------------------------------
        */
        get_template_part('includes/acf/parts/assets/buttons');

        echo '</div>'; // Card With Icon Inner closing tag
        echo '</div>'; // Card With Icon closing tag

        $i++;

        /*
        |----------------------------------------------------------------
        |   Place closing row div.
        |----------------------------------------------------------------
        */
        if ($i % $max_cards_row == 0) {
            echo '</div>';
        }

    }

    if($i % $max_cards_row != 0){
        echo '</div>';
    }
}