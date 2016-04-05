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
$container                      = get_sub_field('container');
$container_margin               = get_sub_field('margin_container');
$container_padding              = get_sub_field('padding_container');
$background                     = get_sub_field('background');
$background_color               = get_sub_field('background_color');
$background_image               = get_sub_field('background_image');
$background_align               = get_sub_field('image_align');
$background_size                = get_sub_field('image_size');
$background_repeat              = get_sub_field('image_repeat');
$background_attachment          = get_sub_field('background_attachment');

$show_text_block                = get_sub_field('show_text_block');
$text_block_width               = get_sub_field('text_block_width');
$text_block_offset              = get_sub_field('text_block_offset');
$text_block_margin              = get_sub_field('text_block_margin');
$text_block_padding             = get_sub_field('text_block_padding');
$show_title                     = get_sub_field('show_title');
$show_subtitle                  = get_sub_field('show_subtitle');
$show_text_content              = get_sub_field('show_text_content');
$content                        = get_sub_field('content');
$content_color                  = get_sub_field('content_color');
$content_align                  = get_sub_field('content_align');
$show_buttons                   = get_sub_field('show_buttons');

$carousel_block_width           = get_sub_field('carousel_block_width');
$carousel_block_offset          = get_sub_field('carousel_block_offset');
$carousel_block_margin          = get_sub_field('carousel_block_margin');
$carousel_block_padding         = get_sub_field('carousel_block_padding');
$carousel_wrapper_margin        = get_sub_field('carousel_wrapper_margin');
$carousel_wrapper_padding       = get_sub_field('carousel_wrapper_padding');
$carousel_item_padding          = get_sub_field('carousel_item_padding');
$carousel_item_margin           = get_sub_field('carousel_item_margin');
$slide_time                     = get_sub_field('slide_time');
$animate_time                   = get_sub_field('animate_time');
$max_items_in_view              = get_sub_field('max_carousel_items_in_view');

$carousel_nav                   = get_sub_field('carousel_nav');
$carousel_nav_color             = get_sub_field('carousel_nav_color');
$carousel_nav_hover_color       = get_sub_field('carousel_nav_hover_color');
$carousel_nav_top               = get_sub_field('carousel_nav_top');
$carousel_nav_vertical_center   = get_sub_field('carousel_nav_vertical_center');

$unique_identifier              = rand(0,2000);

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Carousel block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="carousel-'.$unique_identifier.'" class="carousel" style="margin: '.$container_margin.'; padding: '.$container_padding.'; '.set_background_style($background, $background_color, $background_image, $background_align, $background_size, $background_repeat, $background_attachment).'" data-slide-time="'.$slide_time.'" data-animate-time="'.$animate_time.'" data-max-view="'.$max_items_in_view.'">';
    echo '<div class="container-fluid '.$container.'">';
        /*
        |-------------------------------------------------------------------------------------------------------------------------------------------------
        |   Script for the animation and styling.
        |-------------------------------------------------------------------------------------------------------------------------------------------------
        */
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

                var carousel        = $('#carousel-'+unique_identifier+'');
                var wrapper         = carousel.find('.carousel-wrapper');
                var ul              = carousel.find('.carousel-container');

                var slide_count     = ul.children().length;
                var slide_time      = carousel.attr('data-slide-time');
                var animate_time    = carousel.attr('data-animate-time');
                var max_view        = carousel.attr('data-max-view');

                var item_width;
                var ul_width;

                /*
                |----------------------------------------------------------------
                |   Set the item width.
                |----------------------------------------------------------------
                */
                if(wrapper.hasClass('logo-carousel')){
                    if(wrapper.width() < 320){
                        item_width = wrapper.width() / 1;
                    }
                    else if(wrapper.width() < 480){
                        item_width = wrapper.width() / 2;
                    }
                    else if(wrapper.width() < 786){
                        item_width = wrapper.width() / 3;
                    }
                    else if(wrapper.width() > 786 && wrapper.width() < 992){
                        item_width = wrapper.width() / 4;
                    }
                    else if(wrapper.width() > 992){
                        item_width = wrapper.width() / max_view;
                    }
                    ul_width = item_width * (slide_count + 1);
                }

                if(wrapper.hasClass('testimonial-carousel')){
                    if(wrapper.width() < 992){
                        item_width = wrapper.width() / 1;
                    }
                    else if(wrapper.width() > 992){
                        item_width = wrapper.width() / max_view;
                    }

                    ul_width = item_width * (slide_count + 1);
                }

                if(wrapper.hasClass('post-carousel')){
                    if(wrapper.width() < 320){
                        item_width = wrapper.width() / 1;
                    }
                    else if(wrapper.width() < 786){
                        item_width = wrapper.width() / 2;
                    }
                    else if(wrapper.width() > 786 && wrapper.width() < 992){
                        item_width = wrapper.width() / 3;
                    }
                    else if(wrapper.width() > 992){
                        item_width = wrapper.width() / max_view;
                    }
                    ul_width = item_width * (slide_count + 1);
                }

                /*
                |----------------------------------------------------------------
                |   Resize Function.
                |----------------------------------------------------------------
                */
                $(window).resize(function(){
                    setItemWidth();
                    setCSS();
                });

                /*
                |----------------------------------------------------------------
                |   Set Item Width Function.
                |----------------------------------------------------------------
                */
                function setItemWidth(){
                    if(wrapper.hasClass('logo-carousel')){
                        if(wrapper.width() < 320){
                            item_width = wrapper.width() / 1;
                        }
                        else if(wrapper.width() < 480){
                            item_width = wrapper.width() / 2;
                        }
                        else if(wrapper.width() < 786){
                            item_width = wrapper.width() / 3;
                        }
                        else if(wrapper.width() > 786 && wrapper.width() < 992){
                            item_width = wrapper.width() / 4;
                        }
                        else if(wrapper.width() > 992){
                            item_width = wrapper.width() / max_view;
                        }
                        ul_width = item_width * (slide_count + 1);
                    }

                    if(wrapper.hasClass('testimonial-carousel')){
                        if(wrapper.width() < 992){
                            item_width = wrapper.width() / 1;
                        }
                        else if(wrapper.width() > 992){
                            item_width = wrapper.width() / max_view;
                        }

                        ul_width = item_width * (slide_count + 1);
                    }

                    if(wrapper.hasClass('post-carousel')){
                        if(wrapper.width() < 480){
                            item_width = wrapper.width() / 1;
                        }
                        else if(wrapper.width() < 786){
                            item_width = wrapper.width() / 2;
                        }
                        else if(wrapper.width() > 786 && wrapper.width() < 992){
                            item_width = wrapper.width() / 3;
                        }
                        else if(wrapper.width() > 992){
                            item_width = wrapper.width() / max_view;
                        }
                        ul_width = item_width * (slide_count + 1);
                    }
                }
                setItemWidth();

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
        //            ul.find('li:first').before(ul.find('li:last'));

                    ul.css('left', -item_width);

                    var carousel_height = ul.height();
//                    wrapper.height(carousel_height);
                    wrapper.css('height', carousel_height);
                }
                setTimeout(setCSS(), 1000);


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
                |  Slide Next Function
                |----------------------------------------------------------------
                */
                carousel.find('.next').click(function(){
                    //Restart the timer
                    clearInterval(timer);
                    timer = setInterval(slide_timer, slide_time);

                    slide();

                    return false;
                });

                /*
                |----------------------------------------------------------------
                |  Slide Next Function
                |----------------------------------------------------------------
                */
                carousel.find('.prev').click(function(){
                    // Restart the timer
                    clearInterval(timer);
                    timer = setInterval(slide_timer, slide_time);

                    var left_indent = (item_width);

                    ul.animate({
                        'left': 0
                    },{
                        queue: false,
                        duration: animate_time,
                        complete: function(){
                            ul.find('li:first').before(ul.find('li:last'));

                            ul.css({'left': -item_width});
                        }
                    });

                    return false;
                });

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
                        duration: animate_time,
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
        |-------------------------------------------------------------------------------------------------------------------------------------------------
        |   Style for the nav hover.
        |-------------------------------------------------------------------------------------------------------------------------------------------------
        */
        ?>
        <style>
            .carousel-<?php echo $unique_identifier; ?>-nav a:hover {
                color: <?php echo $carousel_nav_hover_color; ?> !important;
            }
        </style>

        <?php
        /*
        |----------------------------------------------------------------
        |   If Show text block is set, display text block.
        |----------------------------------------------------------------
        */
        if($show_text_block){
            /*
            |----------------------------------------------------------------
            |   Carousel Text.
            |----------------------------------------------------------------
            */
            echo '<div class="carousel-text on-top-overlay '.set_col_size($text_block_width).' '.set_offset_size($text_block_offset).'" style="margin: '.$text_block_margin.'; padding: '.$text_block_padding.';">';
                /*
                |----------------------------------------------------------------
                |   Title/Divider/Subtitle.
                |----------------------------------------------------------------
                */
                if($show_title || $show_subtitle){
                    get_template_part('includes/acf/parts/assets/title-divider-subtitle');
                }

                /*
                |----------------------------------------------------------------
                |   If the '$content' isn't empty display it.
                |----------------------------------------------------------------
                */
                if($show_text_content){
                    echo '<div class="content-wrapper" style="color: '.$content_color.'; text-align: '.$content_align.';">'.$content.'</div>';
                }

                /*
                |----------------------------------------------------------------
                |   Buttons.
                |----------------------------------------------------------------
                */
                if($show_buttons){
                    get_template_part('includes/acf/parts/assets/buttons');
                }
            echo '</div>'; // Carousel Text closing tag
        }

        /*
        |----------------------------------------------------------------
        |   If the field is filled, get the row layout.
        |
        |   Loop over all the flexible fields, choose and include
        |   the correct layout.
        |
        |   We use 'include(locate_template())' over 'get_template_part()'
        |   so we can use the '$carousel_item_margin',
        |   '$carousel_item_padding', '$carousel_wrapper_margin',
        |   '$carousel_wrapper_padding' and '$unique_identifier'
        |   variables inside the included parts.
        |----------------------------------------------------------------
        */
        if(get_sub_field('carousel_style')){
            while(has_sub_field('carousel_style')){

                echo '<div class="carousel-block '.set_col_size($carousel_block_width).' '.set_offset_size($carousel_block_offset).'" style="margin: '.$carousel_block_margin.'; padding: '.$carousel_block_padding.'">';

                    switch(get_row_layout()){
                        /*
                        |----------------------------------------------------------------
                        |   If row layout is Logo Carousel
                        |----------------------------------------------------------------
                        */
                        case 'logo_carousel':
                            include(locate_template('includes/acf/parts/carousel-logo.php'));
                            break;

                        /*
                        |----------------------------------------------------------------
                        |   If row layout is Testimonial Carousel
                        |----------------------------------------------------------------
                        */
                        case 'testimonial_carousel':
                            include(locate_template('includes/acf/parts/carousel-testimonial.php'));
                            break;

                        /*
                        |----------------------------------------------------------------
                        |   If row layout is Post Carousel
                        |----------------------------------------------------------------
                        */
                        case 'post_carousel':
                            include(locate_template('includes/acf/parts/carousel-post.php'));
                            break;
                    }
                echo '</div>'; // Carousel Block closing tag
            }
        }

        /*
        |----------------------------------------------------------------
        |   Carousel Nav.
        |----------------------------------------------------------------
        */
        if($carousel_nav){
            echo '<div class="carousel-nav carousel-'.$unique_identifier.'-nav '.($carousel_nav_vertical_center ? 'carousel-nav-vertical-center' : '').'" style="top: '.$carousel_nav_top.'px;">';
                /*
                |----------------------------------------------------------------
                |   If vertical center is true.
                |----------------------------------------------------------------
                */
                if($carousel_nav_vertical_center){
                    echo '<div class="middle-wrap-wrapper">';
                        echo '<div class="middle-wrap">';
                }
                            echo '<a class="prev" href="#" style="color: '.$carousel_nav_color.';"><i class="icon-left-open"></i></a>';
                            echo '<a class="next" href="#" style="color: '.$carousel_nav_color.';"><i class="icon-right-open"></i></a>';
                /*
                |----------------------------------------------------------------
                |   If vertical center is true.
                |----------------------------------------------------------------
                */
                if($carousel_nav_vertical_center){
                        echo '</div>'; // Middle Wrap closing tag
                    echo '</div>'; // Middle Wrap Wrapper closing tag
                }
            echo '</div>'; // Carousel Nav closing tag
        }

        /*
        |----------------------------------------------------------------
        |   If image overlay set active show the overlay.
        |----------------------------------------------------------------
        */
        get_template_part('includes/acf/parts/assets/image-overlay');

    echo '</div>'; // Container closing div
echo '</div>'; // Carousel closing div