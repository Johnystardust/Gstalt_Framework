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
$show_title             = get_sub_field('show_title');
$title                  = get_sub_field('title');
$title_color            = get_sub_field('title_color');
$title_uppercase        = get_sub_field('title_uppercase');

$divider                = get_sub_field('divider');
$divider_color          = get_sub_field('divider_color');

$show_subtitle          = get_sub_field('show_subtitle');
$subtitle               = get_sub_field('subtitle');
$subtitle_color         = get_sub_field('subtitle_color');
$subtitle_style         = get_sub_field('subtitle_style');

$title_align            = get_sub_field('title_align');

$margin                 = get_sub_field('margin');
$padding                = get_sub_field('padding');

$background             = get_sub_field('background');
$background_color       = get_sub_field('background_color');
$background_image       = get_sub_field('background_image');
$background_align       = get_sub_field('image_align');
$background_size        = get_sub_field('image_size');
$image_overlay_active   = get_sub_field('image_overlay_active');
$image_overlay          = get_sub_field('image_overlay');
$image_overlay_opacity  = get_sub_field('image_overlay_opacity') / 100;

$slide_time             = get_sub_field('slide_time');
$animate_time           = get_sub_field('animate_time');
$max_items_in_view      = get_sub_field('max_carousel_items_in_view');

$unique_identifier     = rand(0,2000);

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Carousel block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="carousel-'.$unique_identifier.'" class="carousel container-fluid container-capped" style="margin: '.$margin.'; padding: '.$padding.'; background: '.$background_color.' url('.$background_image.') '.$background_align.'; background-size: '.$background_size.';" data-slide-time="'.$slide_time.'" data-animate-time="'.$animate_time.'" data-max-view="'.$max_items_in_view.'">';

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

        item_width = wrapper.width() / max_view;
        ul_width = item_width * (slide_count + 1);



//        if(wrapper.hasClass('logo-carousel')){
//            if(wrapper.width() < 649){
//                item_width = wrapper.width() / 3;
//            }
//            else if(wrapper.width() < 1024){
//                item_width = wrapper.width() / 4;
//            }
//            else if(wrapper.width() > 1024){
//                item_width = wrapper.width() / 5;
//            }
//
//            ul_width = item_width * (slide_count + 1);
//        }
//
//        if(wrapper.hasClass('normal-carousel')){
//            item_width = wrapper.width();
//
//            ul_width = item_width * (slide_count + 1);
//        }

        /*
         |----------------------------------------------------------------
         |   Resize function.
         |----------------------------------------------------------------
         */
        $(window).resize(function(){
            item_width = wrapper.width() / max_view;
            ul_width = item_width * (slide_count + 1);

//            if(wrapper.hasClass('logo-carousel')){
//                if(wrapper.width() < 649){
//                    item_width = wrapper.width() / 3;
//                }
//                else if(wrapper.width() < 1024){
//                    item_width = wrapper.width() / 4;
//                }
//                else if(wrapper.width() > 1024){
//                    item_width = wrapper.width() / 5;
//                }
//
//                ul_width = item_width * (slide_count + 1);
//            }
//
//            if(wrapper.hasClass('normal-carousel')){
//                item_width = wrapper.width();
//
//                ul_width = item_width * (slide_count + 1);
//            }

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

            var carousel_height = ul.height();
            wrapper.height(carousel_height);
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
    |----------------------------------------------------------------
    |   Title/Subtitle.
    |----------------------------------------------------------------
    */
    if($show_title || $show_subtitle) {
        echo '<div class="row title-subtitle">';
        /*
        |----------------------------------------------------------------
        |   If the '$title' isn't empty display it.
        |----------------------------------------------------------------
        */
        if ($show_title) {
            // Display the title
            echo '<h1 class="title no-margin" style="color: '.$title_color.'; text-align: '.$title_align.'; '.text_transform($title_uppercase).'; ">'.$title.'</h1>';

            /*
            |----------------------------------------------------------------
            |   If the '$divider' is set true display it.
            |----------------------------------------------------------------
            */
            if ($divider == true) {
                echo '<div class="divider">';
                    echo '<hr style="'.align_left_right_center($title_align).'; border-color: '.$divider_color.';" />';
                echo '</div>';
            }

            /*
            |----------------------------------------------------------------
            |   If the '$subtitle' isn't empty display it.
            |----------------------------------------------------------------
            */
            if ($show_subtitle) {
                // Display the subtitle
                echo '<h3 class="subtitle no-margin" style="font-style: ' . $subtitle_style . '; color: ' . $subtitle_color . '; text-align: ' . $title_align . ';">' . $subtitle . '</h3>';
            }
        }
        echo '</div>';
    }

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
                |   If row layout is Logo Carousel
                |----------------------------------------------------------------
                */
                case 'logo_carousel':
                    get_template_part('includes/acf/parts/carousel-logo');
                    break;

                /*
                |----------------------------------------------------------------
                |   If row layout is Testimonial Carousel
                |----------------------------------------------------------------
                */
                case 'testimonial_carousel':
                    get_template_part('includes/acf/parts/carousel-testimonial');
                    break;

                /*
                |----------------------------------------------------------------
                |   If row layout is Post Carousel
                |----------------------------------------------------------------
                */
                case 'post_carousel':
                    get_template_part('includes/acf/parts/carousel-post');
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