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
                $background             = get_sub_field('background');
                $background_color       = get_sub_field('background_color');
                $background_image       = get_sub_field('background_image');
                $background_align       = get_sub_field('image_align');
                $background_size        = get_sub_field('image_size');
                $background_repeat      = get_sub_field('image_repeat');

                $image_overlay_active   = get_sub_field('image_overlay_active');
                $image_overlay          = get_sub_field('image_overlay');
                $image_overlay_opacity  = get_sub_field('image_overlay_opacity') / 100;

                /*
                |----------------------------------------------------------------
                |   Slide.
                |----------------------------------------------------------------
                */
                echo '<li class="slide" style="'.set_background_style($background, $background_color, $background_image, $background_align, $background_size, $background_repeat).'" data-slide-index="'.$i.'">';
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
                                switch (get_row_layout()){
                                    /*
                                    |----------------------------------------------------------------
                                    |   If row layout is 'text'.
                                    |----------------------------------------------------------------
                                    */
                                    case 'text':
                                        get_template_part('includes/acf/parts/slider-text');
                                        break;

                                    /*
                                    |----------------------------------------------------------------
                                    |   If row layout is 'image'.
                                    |----------------------------------------------------------------
                                    */
                                    case 'image':
                                        get_template_part('includes/acf/parts/slider-image');
                                        break;
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