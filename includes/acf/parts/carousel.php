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
$title                  = get_sub_field('title');
$title_color            = get_sub_field('title_color');
$title_uppercase        = get_sub_field('title_uppercase');

$subtitle               = get_sub_field('subtitle');
$subtitle_color         = get_sub_field('subtitle_color');
$subtitle_style         = get_sub_field('subtitle_style');

$divider                = get_sub_field('divider');
$divider_color          = get_sub_field('divider_color');

$title_align            = get_sub_field('title_align');

$margin                 = get_sub_field('margin');
$padding                = get_sub_field('padding');

$background_color       = get_sub_field('background_color');
$background_image       = get_sub_field('background_image');
$background_align       = get_sub_field('image_align');
$background_size        = get_sub_field('image_size');

$image_overlay_active   = get_sub_field('image_overlay_active');
$image_overlay          = get_sub_field('image_overlay');
$image_overlay_opacity  = get_sub_field('image_overlay_opacity') / 100;

$carousel               = get_sub_field('carousel');
$slide_time             = get_sub_field('slide_time');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Carousel block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="carousel" class="container-fluid container-capped" style="margin: '.$margin.'; padding: '.$padding.'; background: '.$background_color.' url('.$background_image.') '.$background_align.'; background-size: '.$background_size.';" data-slide-time="'.$slide_time.'">';

    /*
    |----------------------------------------------------------------
    |   Title/Subtitle.
    |----------------------------------------------------------------
    */
    echo '<div class="row title-subtitle">';
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
            echo '<h1 class="title no-margin" style="color: '.$title_color.'; text-align: '.$title_align.'; text-transform: '.$text_transform.'; ">'.$title.'</h3>';

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
                echo '<h3 class="subtitle no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.'; text-align: '.$title_align.';">'.$subtitle.'</h5>';
            }
        }
    echo '</div>';

    /*
    |----------------------------------------------------------------
    |   Carousel Wrapper.
    |----------------------------------------------------------------
    */
    echo '<div class="carousel-wrapper">';
        echo '<ul class="carousel-container">';
            /*
            |----------------------------------------------------------------
            |   Use foreach to loop over al the slides.
            |----------------------------------------------------------------
            */
            foreach($carousel as $carousel_item){
                /*
                |----------------------------------------------------------------
                |   Get the slide fields and put them in variables for easy usage.
                |----------------------------------------------------------------
                */
                $image          = $carousel_item['image'];
                $link           = $carousel_item['link'];
                $open_in_tab    = $carousel_item['open_link_new'];

                /*
                |----------------------------------------------------------------
                |   Carousel item.
                |----------------------------------------------------------------
                */

                /*
                |----------------------------------------------------------------
                |   If '$image' isn't empty display the carousel item.
                |----------------------------------------------------------------
                */
                if(!empty($image)){

                    /*
                    |----------------------------------------------------------------
                    |   If '$link' isn't empty display the carousel item with link.
                    |----------------------------------------------------------------
                    */
                    if(!empty($link)){ echo '<a href="'.$link.'">';}

                        echo '<li class="carousel-item">';
                            echo '<img src="'.$image.'">';
                        echo '</li>';

                    if(!empty($link)){ echo '</a>';}
                }
            }

        echo '</ul>';
    echo '</div>'; // Carousel Wrapper closing div

    /*
    |----------------------------------------------------------------
    |   If image overlay set active show the overlay.
    |----------------------------------------------------------------
    */
    if($image_overlay_active == true){
        echo '<div class="image-overlay" style="background: '.$image_overlay.'; opacity: '.$image_overlay_opacity.'"></div>';
    }

echo '</div>'; // Carousel closing div