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
            $slider_content         = $slide['slider_content'];

            $background_color       = $slide['background_color'];
            $background             = $slide['image'];
            $background_pos         = $slide['image_align'];
            $background_size        = $slide['image_size'];

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
                    |   Get the count of content blocks.
                    |----------------------------------------------------------------
                    */
                    $count = (count($slider_content));

                    if($count == 1){
                        $col_size = 'col-md-12';
                    }
                    elseif($count == 2){
                        $col_size = 'col-md-6';
                    }

                    /*
                    |----------------------------------------------------------------
                    |   Use foreach to loop over al the slides.
                    |----------------------------------------------------------------
                    */
                    foreach($slider_content as $slide_content){
                        /*
                        |----------------------------------------------------------------
                        |   Get the fields and put them in variables for easy usage.
                        |----------------------------------------------------------------
                        */
                        $title                  = $slide_content['title'];
                        $title_size             = $slide_content['title_size'];
                        $title_color            = $slide_content['title_color'];
                        $subtitle               = $slide_content['sub_title'];
                        $subtitle_size          = $slide_content['subtitle_size'];
                        $subtitle_color         = $slide_content['subtitle_color'];
                        $subtitle_style         = $slide_content['subtitle_style'];
                        $title_align            = $slide_content['title_align'];
                        $divider                = $slide_content['divider'];

                        $buttons                = $slide_content['buttons'];

                        $image_content          = $slide_content['image_content'];
                        $image_content_align    = $slide_content['image_content_align'];
                        $image_content_size     = $slide_content['image_content_size'];

                        $show_content_on_mobile = $slide_content['show_on_mobile'];

                        $margin                 = $slide_content['margin'];
                        $padding                = $slide_content['padding'];

                        /*
                        |----------------------------------------------------------------
                        |   Slider Content.
                        |----------------------------------------------------------------
                        */
                        echo '<div class="'.$col_size.'">';
                            echo '<div class="slide-content-inner" style="margin: '.$margin.'; padding: '.$padding.';">';

                                /*
                                |----------------------------------------------------------------
                                |   If the '$title' isn't empty display it.
                                |----------------------------------------------------------------
                                */
                                if(!empty($title)){
                                    // Display the title
                                    echo '<h1 class="title no-margin" style="color: '.$title_color.'; text-align: '.$title_align.'; font-size: '.$title_size.'px;">'.$title.'</h3>';

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
                                    |   If the '$subtitle' isn't empty display it.
                                    |----------------------------------------------------------------
                                    */
                                    if(!empty($subtitle)){
                                        // Display the subtitle
                                        echo '<h3 class="subtitle no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.'; text-align: '.$title_align.'; font-size: '.$subtitle_size.'px;">'.$subtitle.'</h5>';
                                    }
                                }

                                echo '<div class="buttons">';
                                    /*
                                    |----------------------------------------------------------------
                                    |   Use foreach to loop over al the buttons.
                                    |----------------------------------------------------------------
                                    */
                                    foreach($buttons as $button){
                                        $btn_link       = $button['button_link'];
                                        $btn_color      = $button['button_color'];
                                        $btn_txt        = $button['button_text'];
                                        $btn_txt_color  = $button['button_text_color'];

                                        /*
                                        |----------------------------------------------------------------
                                        |   If the '$btn_link' isn't empty display it.
                                        |----------------------------------------------------------------
                                        */
                                        if(!empty($btn_link)){
                                                echo '<a class="button" href="'.$btn_link.'" style="background-color: '.$btn_color.'; color: '.$btn_txt_color.'">'.$btn_txt.'</a>';
                                        }
                                    }
                                echo '</div>'; // Buttons closing tag

                            echo '</div>'; // Slide Content Inner closing tag
                        echo '</div>'; // $col_size closing tag
                    }

                echo '</div/>'; // Slide content closing tag

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
echo '</div>'; // Container closing tag