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
$slider                 = get_sub_field('slider');
$slider_animation_style = get_sub_field('slider_animation_style');
$slide_time             = get_sub_field('slide_time');
$slider_control         = get_sub_field('slider_control');

$hide_on_mobile         = get_sub_field('hide_on_mobile');

$slide_count            = (count($slider));

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Slider block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="slider" class="container-fluid no-padding '.($hide_on_mobile ? 'hide-mobile' : '').'" data-slide-style="'.$slider_animation_style.'" data-slide-time="'.$slide_time.'">';
    echo '<ul class="slide-container">';
        /*
        |----------------------------------------------------------------
        |   Var for the data slide index.
        |----------------------------------------------------------------
        */
        $i = 0;

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
            echo '<li class="slide" style="background: '.$background_color.' url('.$background.') '.$background_pos.'; background-size: '.$background_size.';" data-slide-index="'.$i.'">';
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
                    elseif($count == 2) {
                        $col_size = 'col-md-6';
                    }
                    else {
                        $col_size = '';
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
                        $title_uppercase        = $slide_content['title_uppercase'];

                        $subtitle               = $slide_content['sub_title'];
                        $subtitle_size          = $slide_content['subtitle_size'];
                        $subtitle_color         = $slide_content['subtitle_color'];
                        $subtitle_style         = $slide_content['subtitle_style'];

                        $title_align            = $slide_content['title_align'];
                        $divider                = $slide_content['divider'];
                        $divider_color          = $slide_content['divider_color'];

                        $buttons                = $slide_content['buttons'];

                        $image_content          = $slide_content['image_content'];
                        $image_content_left     = $slide_content['image_content_left'];
                        $image_content_right    = $slide_content['image_content_right'];
                        $image_content_top      = $slide_content['image_content_top'];
                        $image_content_size     = $slide_content['image_content_size'];

                        $hide_content_on_mobile = $slide_content['hide_on_mobile'];

                        $margin                 = $slide_content['margin'];
                        $padding                = $slide_content['padding'];

                        /*
                        |----------------------------------------------------------------
                        |   Slider Content.
                        |----------------------------------------------------------------
                        */
                        echo '<div class="'.$col_size.' '.($hide_content_on_mobile ? 'hide-mobile' : '').'">';
                            echo '<div class="slide-content-inner" style="margin: '.$margin.'; padding: '.$padding.';">';

                                /*
                                |----------------------------------------------------------------
                                |   If the '$title' isn't empty display it.
                                |----------------------------------------------------------------
                                */
                                if(!empty($title)){
                                    // See if title needs to be uppercase
                                    if($title_uppercase == true){
                                        $text_transform = 'uppercase';
                                    }
                                    else {
                                        $text_transform = 'none';
                                    }

                                    // Display the title
                                    echo '<h1 class="title no-margin" style="color: '.$title_color.'; text-align: '.$title_align.'; font-size: '.$title_size.'px; text-transform: '.$text_transform.'; ">'.$title.'</h3>';

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
                                    |   If the '$subtitle' isn't empty display it.
                                    |----------------------------------------------------------------
                                    */
                                    if(!empty($subtitle)){
                                        // Display the subtitle
                                        echo '<h3 class="subtitle no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.'; text-align: '.$title_align.'; font-size: '.$subtitle_size.'px;">'.$subtitle.'</h5>';
                                    }
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

                                /*
                                |----------------------------------------------------------------
                                |   If the '$image_content' isn't empty display it.
                                |----------------------------------------------------------------
                                */
                                if(!empty($image_content)){
                                    echo '<div class="content-image" style="left: '.$image_content_left.'px; right: '.$image_content_right.'px; top: '.$image_content_top.'px; ">';
                                        echo '<img src="'.$image_content.'" width="'.$image_content_size.'">';
                                    echo '</div>';
                                }


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

            /*
            |----------------------------------------------------------------
            |   Increment the slide index.
            |----------------------------------------------------------------
            */
            $i++;

        }
    echo '</ul>';

    /*
    |----------------------------------------------------------------
    |   Slide Menu.
    |
    |   Only display the slide menu if there is more than 1 slide.
    |----------------------------------------------------------------
    */
    if($i > 1){
        if($slider_control == 'bottom'){
            /*
            |----------------------------------------------------------------
            |   Slide bottom menu.
            |----------------------------------------------------------------
            */

            // Calculate the menu width
            $menu_width = $i * 20;

            echo '<div class="slider-menu">';
                echo '<ul class="bottom-menu" style=" width: '.$menu_width.'px;">';
                    /*
                    |----------------------------------------------------------------
                    |   Foreach slide render a dot.
                    |----------------------------------------------------------------
                    */
                    for ($x = 0; $x <= ($i - 1); $x++) {
                        /*
                        |----------------------------------------------------------------
                        |   If $x == 0 render the active dot.
                        |----------------------------------------------------------------
                        */
                        if($x == 0){
                            echo '<li class="active" data-slide-number="'.$x.'"><i class="icon-circle"></i></li>';
                        }
                        else {
                            echo '<li data-slide-number="'.$x.'"><i class="icon-circle-empty"></i></li>';
                        }
                    }
                echo '</ul>';
            echo '</div>';
        }
        elseif($slider_control == 'leftright'){
            /*
            |----------------------------------------------------------------
            |   Slide left right menu.
            |----------------------------------------------------------------
            */
            echo '<div class="slider-menu">';
                echo '<div class="slide-button slide-next">';
                    echo '<i class="icon icon-right-open"></i>';
                echo '</div>';

                echo '<div class="slide-button slide-prev">';
                    echo '<i class="icon icon-left-open"></i>';
                echo '</div>';
            echo '</div>';
        }
        elseif($slider_control == 'both'){
            /*
            |----------------------------------------------------------------
            |   Slide menu both.
            |----------------------------------------------------------------
            */
            // Calculate the menu width
            $menu_width = $i * 20;

            echo '<div class="slider-menu">';

                /*
                |----------------------------------------------------------------
                |   Slide bottom menu.
                |----------------------------------------------------------------
                */
                echo '<ul class="bottom-menu" style=" width: '.$menu_width.'px;">';
                    /*
                    |----------------------------------------------------------------
                    |   Foreach slide render a dot.
                    |----------------------------------------------------------------
                    */
                    for ($x = 0; $x <= ($i - 1); $x++) {
                        /*
                        |----------------------------------------------------------------
                        |   If $x == 0 render the active dot.
                        |----------------------------------------------------------------
                        */
                        if($x == 0){
                            echo '<li class="active" data-slide-number="'.$x.'"><i class="icon icon-circle"></i></li>';
                        }
                        else {
                            echo '<li data-slide-number="'.$x.'"><i class="icon icon-circle-empty"></i></li>';
                        }
                    }
                echo '</ul>';

                /*
                |----------------------------------------------------------------
                |   Slide left right menu.
                |----------------------------------------------------------------
                */
                echo '<div class="slide-button slide-next">';
                    echo '<i class="icon icon-right-open"></i>';
                echo '</div>';

                echo '<div class="slide-button slide-prev">';
                    echo '<i class="icon icon-left-open"></i>';
                echo '</div>';


            echo '</div>';

        }
    }

echo '</div>'; // Container closing tag