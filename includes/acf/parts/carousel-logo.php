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
$carousel = get_sub_field('carousel');

/*
|----------------------------------------------------------------
|   Carousel Wrapper.
|----------------------------------------------------------------
*/
echo '<div class="carousel-wrapper logo-carousel">';
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
            |
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