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
if(get_sub_field('cards_with_icon')){
    while(has_sub_field('cards_with_icon')){
        /*
        |----------------------------------------------------------------
        |   Get the card fields and put them in variables for easy usage.
        |----------------------------------------------------------------
        */
        $icon                   = get_sub_field('icon');
        $icon_color             = get_sub_field('icon_color');
        $icon_background_color  = get_sub_field('icon_background_color');
        
        $content                = get_sub_field('content');
        $content_color          = get_sub_field('content_color');
        $content_align          = get_sub_field('content_align');

        /*
        |----------------------------------------------------------------
        |   Card With Icon block.
        |----------------------------------------------------------------
        */
        echo '<div class="card-with-icon col-md-4 col-sm-6 no-padding">';
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
                |   Title/Divider/Subtitle.
                |----------------------------------------------------------------
                */
                get_template_part('includes/acf/parts/assets/title-divider-subtitle');

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
                |   Buttons.
                |----------------------------------------------------------------
                */
                get_template_part('includes/acf/parts/assets/buttons');

            echo '</div>'; // Card With Icon Inner closing tag
        echo '</div>'; // Card With Icon closing tag
    }
}