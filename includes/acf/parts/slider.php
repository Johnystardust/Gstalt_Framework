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
$slider_animation_style = get_sub_field('slider_animation_style');
$slide_time             = get_sub_field('slide_time');
$slider_control         = get_sub_field('slider_control');

$hide_on_mobile         = get_sub_field('hide_on_mobile');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Slider block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="slider" class="container-fluid no-padding '.($hide_on_mobile ? 'hide-mobile' : '').'" data-slide-style="'.$slider_animation_style.'" data-slide-time="'.$slide_time.'">';
    echo '<ul class="slide-container">';

        /*
        |----------------------------------------------------------------
        |   If there are row's on slider
        |----------------------------------------------------------------
        */
        if(have_rows('slider')){

            /*
            |----------------------------------------------------------------
            |   Var for the data slide index.
            |----------------------------------------------------------------
            */
            $i = 0;

            /*
            |----------------------------------------------------------------
            |   while there are row's on slider, loop
            |----------------------------------------------------------------
            */
            while(have_rows('slider')) : the_row();
                /*
                |----------------------------------------------------------------
                |   Get the slide fields and put them in variables for easy usage.
                |----------------------------------------------------------------
                */
                $background_color       = get_sub_field('background_color');
                $background             = get_sub_field('image');
                $background_pos         = get_sub_field('image_align');
                $background_size        = get_sub_field('image_size');

                $image_overlay_active   = get_sub_field('image_overlay_active');
                $image_overlay          = get_sub_field('image_overlay');
                $image_overlay_opacity  = get_sub_field('image_overlay_opacity') / 100;

                /*
                |----------------------------------------------------------------
                |   Count the layouts in the flexible content field.
                |----------------------------------------------------------------
                */
                $content                = get_sub_field('content');
                $count                  = count($content);

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
                |   Slide.
                |----------------------------------------------------------------
                */
                echo '<li class="slide" style="background: '.$background_color.' url('.$background.') '.$background_pos.'; background-size: '.$background_size.';" data-slide-index="'.$i.'">';
                    echo '<div class="slide-content">';
                        /*
                        |----------------------------------------------------------------
                        |   If there are row's on content.
                        |----------------------------------------------------------------
                        */
                        if(have_rows('content')){
                            /*
                            |----------------------------------------------------------------
                            |   While there are row's on content.
                            |----------------------------------------------------------------
                            */
                            while(have_rows('content')) : the_row();
                                /*
                                |----------------------------------------------------------------
                                |   If row layout is 'text'.
                                |----------------------------------------------------------------
                                */
                                if(get_row_layout('text')){
                                    /*
                                    |----------------------------------------------------------------
                                    |   Get the slide fields and put them in variables for easy usage.
                                    |----------------------------------------------------------------
                                    */
                                    $title                  = get_sub_field('title');
                                    $title_size             = get_sub_field('title_size');
                                    $title_color            = get_sub_field('title_color');
                                    $title_uppercase        = get_sub_field('title_uppercase');

                                    $subtitle               = get_sub_field('sub_title');
                                    $subtitle_size          = get_sub_field('subtitle_size');
                                    $subtitle_color         = get_sub_field('subtitle_color');
                                    $subtitle_style         = get_sub_field('subtitle_style');

                                    $title_align            = get_sub_field('title_align');
                                    $divider                = get_sub_field('divider');
                                    $divider_color          = get_sub_field('divider_color');

                                    $buttons                = get_sub_field('buttons');

                                    $margin                 = get_sub_field('margin');
                                    $padding                = get_sub_field('padding');

                                    /*
                                    |----------------------------------------------------------------
                                    |   Slider Text Content.
                                    |----------------------------------------------------------------
                                    */
                                    echo '<div class="'.$col_size.'" style="margin: '.$margin.'; padding: '.$padding.';">';
                                        echo '<div class="slide-content-inner">';

                                            /*
                                            |----------------------------------------------------------------
                                            |   If the '$title' isn't empty display it.
                                            |----------------------------------------------------------------
                                            */
                                            if(!empty($title)){
                                                // Display the title
                                                echo '<h1 class="title no-margin" style="'.text_transform($title_uppercase).' color: '.$title_color.'; text-align: '.$title_align.'; font-size: '.$title_size.'px; ">'.$title.'</h1>';

                                                /*
                                                |----------------------------------------------------------------
                                                |   If the '$divider' is set true display it.
                                                |----------------------------------------------------------------
                                                */
                                                if($divider == true){

                                                    echo '<div class="divider">';
                                                        echo '<hr style="'.align_left_right_center($title_align).'; border-color: '.$divider_color.';" />';
                                                    echo '</div>';
                                                }

                                                /*
                                                |----------------------------------------------------------------
                                                |   If the '$subtitle' isn't empty display it.
                                                |----------------------------------------------------------------
                                                */
                                                if(!empty($subtitle)){
                                                    // Display the subtitle
                                                    echo '<h3 class="subtitle no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.'; text-align: '.$title_align.'; font-size: '.$subtitle_size.'px;">'.$subtitle.'</h3>';
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

                                        echo '</div>'; // Slide Content Inner closing tag
                                    echo '</div>'; // Col Size closing tag
                                }

                                /*
                                |----------------------------------------------------------------
                                |   If row layout is 'image'.
                                |----------------------------------------------------------------
                                */
                                if(get_row_layout('image')){

                                    /*
                                    |----------------------------------------------------------------
                                    |   Get the slide fields and put them in variables for easy usage.
                                    |----------------------------------------------------------------
                                    */
                                    $image_content          = get_sub_field('image_content');
                                    $image_content_left     = get_sub_field('image_content_left');
                                    $image_content_right    = get_sub_field('image_content_right');
                                    $image_content_top      = get_sub_field('image_content_top');
                                    $image_content_size     = get_sub_field('image_content_size');

                                    $hide_content_on_mobile = get_sub_field('hide_on_mobile');

                                    $margin                 = get_sub_field('margin');
                                    $padding                = get_sub_field('padding');

                                    /*
                                    |----------------------------------------------------------------
                                    |   Slider Image Content.
                                    |----------------------------------------------------------------
                                    */
                                    echo '<div class="'.$col_size.' '.($hide_content_on_mobile ? 'hide-mobile' : '').'" style="margin: '.$margin.'; padding: '.$padding.';">';
                                        echo '<div class="slide-content-inner">';

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
                                    echo '</div>'; // Col Size closing tag
                                }

                            endwhile;
                        }

                    echo '</div>'; // Slide Content closing tag

                    /*
                    |----------------------------------------------------------------
                    |   If image overlay set active show the overlay.
                    |----------------------------------------------------------------
                    */
                    if($image_overlay_active == true){
                        echo '<div class="image-overlay" style="background: '.$image_overlay.'; opacity: '.$image_overlay_opacity.'"></div>';
                    }

                echo '</li>'; // Slide closing tag

                /*
                |----------------------------------------------------------------
                |   Increment the slide index.
                |----------------------------------------------------------------
                */
                $i++;

            endwhile;
        }

    echo '</ul>'; // Slide container closing tag

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