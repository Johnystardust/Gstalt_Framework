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
if(get_sub_field('cards')){
    while(has_sub_field('cards')){

        /*
        |----------------------------------------------------------------
        |   Get the card fields and put them in variables for easy usage.
        |----------------------------------------------------------------
        */
        $background             = get_sub_field('background');
        $background_color       = get_sub_field('background_color');
        $background_image       = get_sub_field('background_image');
        $background_align       = get_sub_field('image_align');
        $background_size        = get_sub_field('image_size');
        $background_repeat      = get_sub_field('image_repeat');

        $image_overlay_active   = get_sub_field('image_overlay_active');
        $image_overlay          = get_sub_field('image_overlay');
        $image_overlay_opacity  = get_sub_field('image_overlay_opacity') / 100;

        $content                = get_sub_field('content');
        $content_color          = get_sub_field('content_color');
        $content_align          = get_sub_field('content_align');

        /*
        |----------------------------------------------------------------
        |   Card block.
        |----------------------------------------------------------------
        */
        echo '<div class="card col-md-4 col no-padding" style="'.set_background_style($background, $background_color, $background_image, $background_align, $background_size, $background_repeat).'">';
            echo '<div class="card-inner">';

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

            echo '</div>'; // Card Inner closing tag
        echo '</div>'; // Card closing tag




    }
}