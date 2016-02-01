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

$slide_time             = get_sub_field('slide_time');

$unique_identifier     = rand(0,200);
/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Carousel block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="carousel-'.$unique_identifier.'" class="carousel container-fluid container-capped" style="margin: '.$margin.'; padding: '.$padding.'; background: '.$background_color.' url('.$background_image.') '.$background_align.'; background-size: '.$background_size.';" data-slide-time="'.$slide_time.'">';

?>

<script type="text/javascript">
    $(document).ready(function(){
        /*
         |-------------------------------------------------------------------------------------------------------------------
         |  Carousel Function
         |
         |  This is the function for the carousel
         |-------------------------------------------------------------------------------------------------------------------
         */

        /*
         |----------------------------------------------------------------
         |   Get some variables we can work with.
         |----------------------------------------------------------------
         */
        var unique_identifier = <?php echo $unique_identifier; ?>;

        var carousel    = $('#carousel-'+unique_identifier+'');
        var wrapper     = carousel.find('.carousel-wrapper');
        var ul          = carousel.find('.carousel-container');

        var slide_count = ul.children().length;
        var slide_time  = carousel.attr('data-slide-time');

        var item_width;
        var ul_width;

        if(wrapper.hasClass('logo-carousel')){
            if(wrapper.width() < 649){
                item_width = wrapper.width() / 3;
            }
            else if(wrapper.width() < 1024){
                item_width = wrapper.width() / 4;
            }
            else if(wrapper.width() > 1024){
                item_width = wrapper.width() / 5;
            }

            ul_width = item_width * (slide_count + 1);
        }

        if(wrapper.hasClass('normal-carousel')){
            item_width = wrapper.width();

            ul_width = item_width * (slide_count + 1);
        }

        /*
         |----------------------------------------------------------------
         |   Resize function.
         |----------------------------------------------------------------
         */
        $(window).resize(function(){
            if(wrapper.hasClass('logo-carousel')){
                if(wrapper.width() < 649){
                    item_width = wrapper.width() / 3;
                }
                else if(wrapper.width() < 1024){
                    item_width = wrapper.width() / 4;
                }
                else if(wrapper.width() > 1024){
                    item_width = wrapper.width() / 5;
                }

                ul_width = item_width * (slide_count + 1);
            }

            if(wrapper.hasClass('normal-carousel')){
                item_width = wrapper.width();

                ul_width = item_width * (slide_count + 1);
            }

            setCSS();
        });

        /*
         |----------------------------------------------------------------
         |   Set CSS Function.
         |----------------------------------------------------------------
         */
        function setCSS(){
            // Set the ul width
            ul.css('width', ul_width);

            // Set the item_width
            ul.find('.carousel-item').each(function(){
                $(this).css('width', item_width);
            });

            // Move the last item to the front
            ul.find('li:first').before(ul.find('li:last'));

            ul.css('left', -item_width);
        }
        setCSS();

        /*
         |----------------------------------------------------------------
         |  Timer Function
         |----------------------------------------------------------------
         */
        var timer;

        function slide_timer(){
            slide();
        }
        timer = setInterval(slide_timer, slide_time);

        /*
         |----------------------------------------------------------------
         |   The Slide Function
         |----------------------------------------------------------------
         */
        function slide(){
            var left_indent = -(item_width * 2);

            ul.animate({
                'left': left_indent
            },{
                queue: false,
                duration: 300,
                complete: function(){
                    ul.find('li:last').after(ul.find('li:first'));

                    ul.css({'left': -item_width});
                }
            });
        }

    });
</script>

<?php

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
            echo '<h1 class="title no-margin" style="color: '.$title_color.'; text-align: '.$title_align.'; text-transform: '.$text_transform.'; ">'.$title.'</h1>';

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
                echo '<h3 class="subtitle no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.'; text-align: '.$title_align.';">'.$subtitle.'</h3>';
            }
        }
    echo '</div>';

    /*
    |----------------------------------------------------------------
    |   If the field is filled, get the row layout.
    |----------------------------------------------------------------
    */
    if(get_sub_field('carousel_style')){
        while(has_sub_field('carousel_style')){
            switch(get_row_layout()){
                /*
                |----------------------------------------------------------------
                |   If row layout is Logo slider
                |----------------------------------------------------------------
                */
                case 'logo_carousel':
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

                    break;

                case 'carousel':
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
                    echo '<div class="carousel-wrapper normal-carousel">';
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
                                            echo '<img style="'.$image_alignment.'; max-width: '.$max_image_width.'px; '.$border_type.' border-radius: '.$border_radius.'px;" src="'.$image.'" width="'.$max_image_width.'" />';
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
                    
                    break;
            }
        }
    }

    /*
    |----------------------------------------------------------------
    |   If image overlay set active show the overlay.
    |----------------------------------------------------------------
    */
    if($image_overlay_active == true){
        echo '<div class="image-overlay" style="background: '.$image_overlay.'; opacity: '.$image_overlay_opacity.'"></div>';
    }

echo '</div>'; // Carousel closing div