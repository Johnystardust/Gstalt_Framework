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
$carousel                   = get_sub_field('carousel');

/*
|----------------------------------------------------------------
|   Carousel Wrapper.
|----------------------------------------------------------------
*/
echo '<div class="carousel-wrapper testimonial-carousel" style="margin: '.$carousel_wrapper_margin.'; padding: '.$carousel_wrapper_padding.'">';
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
                $image                  = get_sub_field('image');
                $image_size             = get_sub_field('image_size');
                $max_image_width        = get_sub_field('max_image_width');
                $border                 = get_sub_field('border');
                $border_color           = get_sub_field('border_color');
                $border_size            = get_sub_field('border_size');
                $border_style           = get_sub_field('border_style');
                $border_radius          = get_sub_field('border_radius');
                $image_align            = get_sub_field('image_align');

                $title                  = get_sub_field('title');
                $title_color            = get_sub_field('title_color');
                $title_uppercase        = get_sub_field('title_uppercase');
                $subtitle               = get_sub_field('subtitle');
                $subtitle_color         = get_sub_field('subtitle_color');
                $subtitle_style         = get_sub_field('subtitle_style');
                $title_align            = get_sub_field('title_align');
                $divider                = get_sub_field('divider');
                $divider_color          = get_sub_field('divider_color');

                $buttons                = get_sub_field('buttons');

                $content                = get_sub_field('content');
                $content_color          = get_sub_field('content_color');
                $content_align          = get_sub_field('content_align');
                $content_max_width      = get_sub_field('content_max_width');

                /*
            |----------------------------------------------------------------
            |   Carousel item.
            |----------------------------------------------------------------
            */
                echo '<li class="carousel-item" style="margin: '.$carousel_item_margin.'; padding: '.$carousel_item_padding.';">';
                    echo '<div class="carousel-item-inner">';
                        /*
                        |----------------------------------------------------------------
                        |   Image size.
                        |----------------------------------------------------------------
                        */
                        if($image_size == 'auto'){
                            $image_width = 'auto';
                            $image_class = '';
                        }
                        elseif($image_size == '100%'){
                            $image_width = '100%';
                            $image_class = '';
                        }
                        elseif($image_size == 'fill'){
                            $image_width = '100%';
                            $image_class = 'fill';
                        }
                        else {
                            $image_width = '';
                            $image_class = '';
                        }

                        /*
                        |----------------------------------------------------------------
                        |   If the '$image' isn't empty display it.
                        |----------------------------------------------------------------
                        */
                        if(!empty($image)){
                            echo '<div class="image">';
                            echo '<img style="'.align_left_right_center($image_align).'; '.border_style($border, $border_size, $border_style, $border_color).' max-width: '.$max_image_width.'px; border-radius: '.$border_radius.'px;" src="'.$image.'" width="'.$image_width.'" />';
                            echo '</div>'; // Image closing tag
                        }

                        /*
                        |----------------------------------------------------------------
                        |   If the '$title' isn't empty display it.
                        |----------------------------------------------------------------
                        */
                        if(!empty($title)){
                            // Display the title
                            echo '<h3 class="title no-margin" style="color: '.$title_color.'; '.text_transform($title_uppercase).'; text-align: '.$title_align.';">'.$title.'</h3>';

                            /*
                            |----------------------------------------------------------------
                            |   If the '$subtitle' isn't empty display it.
                            |----------------------------------------------------------------
                            */
                            if(!empty($subtitle)){
                                // Display the subtitle
                                echo '<h5 class="subtitle no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.'; text-align: '.$title_align.';">'.$subtitle.'</h5>';
                            }
                        }

                        /*
                        |----------------------------------------------------------------
                        |   If the '$divider' is set true display it.
                        |----------------------------------------------------------------
                        */
                        if($divider == true){
                            echo '<div class="divider">';
                            echo '<hr style="'.align_left_right_center($title_align).' border-color: '.$divider_color.';" />';
                            echo '</div>';
                        }

                        /*
                        |----------------------------------------------------------------
                        |   If the '$content' isn't empty display it.
                        |----------------------------------------------------------------
                        */
                        if(!empty($content)){
                            echo '<div class="content-wrapper" style="color: '.$content_color.'; text-align: '.$content_align.'; max-width: '.$content_max_width.'px; '.($content_align == 'center' ? 'margin: 0 auto;' : '').'">'.$content.'</div>';
                        }

                        /*
                        |----------------------------------------------------------------
                        |   Buttons.
                        |----------------------------------------------------------------
                        */
                        get_template_part('includes/acf/parts/assets/buttons');

                    echo '</div>'; // Carousel Item Inner closing tag
                echo '</li>'; // Carousel Item closing tag
            endwhile;
        }


    echo '</ul>';
echo '</div>'; // Carousel Wrapper closing div
