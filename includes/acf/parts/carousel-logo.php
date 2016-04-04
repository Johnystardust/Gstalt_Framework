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
        |   If there are row's on carousel
        |----------------------------------------------------------------
        */
        if(have_rows('carousel')){
            /*
            |----------------------------------------------------------------
            |   while there are row's on slider, loop
            |----------------------------------------------------------------
            */
            while(have_rows('carousel')) : the_row();
                /*
                |----------------------------------------------------------------
                |   Get the carousel fields and put them in variables for easy usage.
                |----------------------------------------------------------------
                */
                $image          = get_sub_field('image');
                $link           = get_sub_field('link');
                $open_in_tab    = get_sub_field('open_link_new');

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

                        echo '<li class="carousel-item" style="margin: '.$carousel_item_margin.'; padding: '.$carousel_item_padding.';">';
                            echo '<img src="'.$image.'">';
                        echo '</li>';

                    if(!empty($link)){ echo '</a>';}
                }

            endwhile;
        }

    echo '</ul>'; // Carousel Container closing div
echo '</div>'; // Carousel Wrapper closing div