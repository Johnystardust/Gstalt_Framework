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
$slider             = get_sub_field('slider');
$show_on_desktop    = get_sub_field('show_on_desktop');
$show_on_mobile     = get_sub_field('show_on_mobile');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Slider block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="slider" class="container-fluid no-padding">';
    echo '<ul class="slide-container">';
        /*
        |----------------------------------------------------------------
        |   Use foreach to loop over al the slides.
        |----------------------------------------------------------------
        */
        foreach($slider as $slide){
            /*
            |----------------------------------------------------------------
            |   Get the slide fields and put them in variables for easy usage.
            |----------------------------------------------------------------
            */
            $background_color       = $slide['background_color'];
            $background             = $slide['image'];
            $background_pos         = $slide['image_align'];
            $background_size        = $slide['image_size'];

            $title                  = $slide['title'];
            $title_color            = $slide['title_color'];
            $subtitle               = $slide['sub_title'];
            $subtitle_color         = $slide['subtitle_color'];
            $subtitle_style         = $slide['subtitle_style'];
            $text_align             = $slide['text_align'];

            $btn_link               = $slide['button_link'];
            $btn_color              = $slide['button_color'];
            $btn_txt                = $slide['button_text'];
            $btn_txt_color          = $slide['button_text_color'];

            $image_overlay_active   = $slide['image_overlay_active'];
            $image_overlay          = $slide['image_overlay'];
            $image_overlay_opacity  = $slide['image_overlay_opacity'] / 100;

            /*
            |----------------------------------------------------------------
            |   Slide.
            |----------------------------------------------------------------
            */
            echo '<li class="slide" style="background: '.$background_color.' url('.$background.') '.$background_pos.'; background-size: '.$background_size.';">';
                echo '<div class="slide-content" style="text-align: '.$text_align.'">';

                    /*
                    |----------------------------------------------------------------
                    |   If the '$title' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($title)){
                        // Display the title
                        echo '<h1 class="no-margin" style="color: '.$title_color.';">'.$title.'</h1>';
                        echo '<br/>';

                        /*
                        |----------------------------------------------------------------
                        |   If the '$subtitle' isn't empty display it.
                        |----------------------------------------------------------------
                        */
                        if(!empty($subtitle)){
                            // Display the subtitle
                            echo '<h4 class="no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.';">'.$subtitle.'</h4>';
                            echo '<br/>';
                        }
                    }

                    /*
                    |----------------------------------------------------------------
                    |   If the '$button_link' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($btn_txt)){
                        echo '<div class="buttons">';
                            echo '<a class="button" href="'.$btn_link.'" style="background-color: '.$btn_color.'; color: '.$btn_txt_color.'">'.$btn_txt.'</a>';
                        echo '</div>';
                    }

                echo '</div>'; // slide-content closing tag

                /*
                |----------------------------------------------------------------
                |   If image overlay set active show the overlay.
                |----------------------------------------------------------------
                */
                if($image_overlay_active == true){
                    echo '<div class="image-overlay" style="background: '.$image_overlay.'; opacity: '.$image_overlay_opacity.'"></div>';
                }

            echo '</li>';
        }
    echo '</ul>';
echo '</div>'; // container closing tag