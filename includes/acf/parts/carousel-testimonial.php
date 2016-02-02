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
echo '<div class="carousel-wrapper testimonial-carousel">';
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
        $image                  = $carousel_item['image'];
        $image_size             = $carousel_item['image_size'];
        $max_image_width        = $carousel_item['max_image_width'];
        $border                 = $carousel_item['border'];
        $border_color           = $carousel_item['border_color'];
        $border_size            = $carousel_item['border_size'];
        $border_radius          = $carousel_item['border_radius'];
        $image_align            = $carousel_item['image_align'];

        $title                  = $carousel_item['title'];
        $title_color            = $carousel_item['title_color'];
        $title_uppercase        = $carousel_item['title_uppercase'];
        $subtitle               = $carousel_item['subtitle'];
        $subtitle_color         = $carousel_item['subtitle_color'];
        $subtitle_style         = $carousel_item['subtitle_style'];
        $title_align            = $carousel_item['title_align'];
        $divider                = $carousel_item['divider'];

        $buttons                = $carousel_item['buttons'];

        $content                = $carousel_item['content'];
        $content_color          = $carousel_item['content_color'];
        $content_align          = $carousel_item['content_align'];

        /*
        |----------------------------------------------------------------
        |   Carousel item.
        |----------------------------------------------------------------
        */
        echo '<li class="carousel-item">';

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
        |   Border type
        |----------------------------------------------------------------
        */
        if($border == 'all'){
            $border_type = 'border: '.$border_size.'px solid '.$border_color.';';
        }
        elseif($border == 'top'){
            $border_type = 'border-top: '.$border_size.'px solid '.$border_color.';';
        }
        elseif($border == 'bottom'){
            $border_type = 'border-bottom: '.$border_size.'px solid '.$border_color.';';
        }
        elseif($border == 'topbottom'){
            $border_type = 'border-top: '.$border_size.'px solid '.$border_color.'; border-bottom: '.$border_size.' solid '.$border_color.';';
        }
        elseif($border == 'left'){
            $border_type = 'border-left: '.$border_size.'px solid '.$border_color.';';
        }
        elseif($border == 'right'){
            $border_type = 'border-right: '.$border_size.'px solid '.$border_color.';';
        }
        elseif($border == 'leftright'){
            $border_type = 'border-left: '.$border_size.'px solid '.$border_color.'; border-right: '.$border_size.' solid '.$border_color.';';
        }
        elseif($border == 'none'){
            $border_type = '';
        }

        /*
        |----------------------------------------------------------------
        |   Image align.
        |----------------------------------------------------------------
        */
        if($image_align == 'left'){
            $image_alignment = 'float: left;';
        }
        elseif($image_align == 'right'){
            $image_alignment = 'float: right;';
        }
        elseif($image_align == 'center'){
            $image_alignment = 'margin: 0 auto;';
        }
        else {
            $image_alignment = '';
        }

        /*
        |----------------------------------------------------------------
        |   If the '$image' isn't empty display it.
        |----------------------------------------------------------------
        */
        if(!empty($image)){
            echo '<div class="image">';
                echo '<img style="'.$image_alignment.'; max-width: '.$max_image_width.'px; '.$border_type.' border-radius: '.$border_radius.'px;" src="'.$image.'" width="'.$image_width.'" />';
            echo '</div>'; // Image closing tag
        }

        /*
        |----------------------------------------------------------------
        |   If the '$title' isn't empty display it.
        |----------------------------------------------------------------
        */
        if(!empty($title)){
            // See if title needs to be uppercase
            $title_uppercase ? $text_transform = 'uppercase' : $text_transform = 'none';

            // Display the title
            echo '<h3 class="title no-margin" style="color: '.$title_color.'; text-transform: '.$text_transform.'; text-align: '.$title_align.';">'.$title.'</h3>';

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
            echo '<hr style="'.$divider_align.' border-color: '.$divider_color.';" />';
            echo '</div>';
        }

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

        echo '</li>'; // Carousel Item closing tag

    }

    echo '</ul>';
echo '</div>'; // Carousel Wrapper closing div
