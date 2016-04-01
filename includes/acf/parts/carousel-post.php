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
$post_type                  = get_sub_field('post_type');
$categories                 = get_sub_field('categories');
$max_posts                  = get_sub_field('max_posts');

$show_titles                = get_sub_field('show_titles');
$titles_size                = get_sub_field('titles_size');
$titles_color               = get_sub_field('titles_color');
$titles_margin              = get_sub_field('titles_margin');

$show_categories            = get_sub_field('show_categories');
$categories_size            = get_sub_field('categories_size');
$categories_color           = get_sub_field('categories_color');
$categories_hover_color     = get_sub_field('categories_hover_color');
$categories_margin          = get_sub_field('categories_margin');
$categories_separator       = get_sub_field('categories_separator');

$show_content               = get_sub_field('show_content');
$content_size               = get_sub_field('content_size');
$content_color              = get_sub_field('content_color');
$content_margin             = get_sub_field('content_margin');

$show_featured_image        = get_sub_field('show_featured_image');
$featured_image_style       = get_sub_field('show_featured_image_style_options');
$overlay_color              = get_sub_field('overlay_color');
$overlay_opacity            = get_sub_field('overlay_opacity') / 100;

$buttons                    = get_sub_field('buttons');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   Styles
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/

echo '<style type="text/css">';
    echo '#carousel-'.$unique_identifier.' .item-categories a:hover {';
        echo 'color: '.$categories_hover_color.' !important;';
    echo '}';

    echo '#carousel-'.$unique_identifier.' .carousel-item:hover .item-featured-image .image-overlay {';
        echo 'opacity: '.$overlay_opacity.';';
    echo '}';
echo '</style>';

/*
|----------------------------------------------------------------
|   Carousel Wrapper.
|----------------------------------------------------------------
*/
echo '<div class="carousel-wrapper post-carousel" style="margin: '.$carousel_wrapper_margin.'; padding: '.$carousel_wrapper_padding.';">';
    echo '<ul class="carousel-container">';

        /*
        |----------------------------------------------------------------
        |   WP_Query.
        |----------------------------------------------------------------
        */
        $args = array(
            'post_type'      => $post_type,
            'cat'            => $categories,
            'posts_per_page' => $max_posts
        );

        $the_query = new WP_Query($args);

        if($the_query->have_posts()){
            while($the_query->have_posts()) : $the_query->the_post();

                /*
                |----------------------------------------------------------------
                |   Carousel item.
                |----------------------------------------------------------------
                */
                echo '<li class="carousel-item" style="margin: '.$carousel_item_margin.'; padding: '.$carousel_item_padding.';"><a class="carousel-link" href="'.get_the_permalink().'">';
                    /*
                    |----------------------------------------------------------------
                    |   If show featured image is set.
                    |----------------------------------------------------------------
                    */
                    if($show_featured_image){
                        echo '<div class="item-featured-image">';
                            if(has_post_thumbnail()){
                                the_post_thumbnail();
                            }
                            if($featured_image_style){
                                echo '<div class="image-overlay" style="background: '.$overlay_color.';"></div>';
                            }
                        echo '</div>';
                    }

                    /*
                    |----------------------------------------------------------------
                    |   If show title is set.
                    |----------------------------------------------------------------
                    */
                    if($show_titles){
                        echo '<h3 style="margin: '.$titles_margin.'; font-size: '.$titles_size.'px; color: '.$titles_color.';">'.get_the_title().'</h3>';
                    }

                    /*
                    |----------------------------------------------------------------
                    |   If show categories is set.
                    |----------------------------------------------------------------
                    */
                    if($show_categories){
                        echo '<div class="item-categories" style="margin: '.$categories_margin.'; font-size: '.$categories_size.'px; color: '.$categories_color.';">';
                            the_category( ''.$categories_separator.' ' );
                        echo '</div>';
                    }

                    /*
                    |----------------------------------------------------------------
                    |   If show content is set.
                    |----------------------------------------------------------------
                    */
                    if($show_content){
                        echo '<div class="item-content" style="margin: '.$content_margin.'; font-size: '.$content_size.'px; color: '.$content_color.';">';
                            the_content();
                        echo '</div>';
                    }


                echo '</a></li>'; // Carousel Item closing tag

            endwhile;
        }

        /*
        |----------------------------------------------------------------
        |   Reset the post data.
        |----------------------------------------------------------------
        */
        wp_reset_postdata();

    echo '<ul>'; // Carousel Container closing tag
echo '</div>'; // Carousel Wrapper closing tag

/*
|----------------------------------------------------------------
|   If the '$buttons' isn't empty display it.
|----------------------------------------------------------------
*/
if(!empty($buttons)) {
    echo '<div class="buttons" style="text-align:center">';
    /*
    |----------------------------------------------------------------
    |   Use foreach to loop over al the buttons.
    |----------------------------------------------------------------
    */
    foreach ($buttons as $button) {
        /*
        |----------------------------------------------------------------
        |   Get all the button fields.
        |----------------------------------------------------------------
        */
        $btn_choice = $button['button_choice'];
        $btn_link = $button['button_link'];
        $btn_new_tab = $button['button_new_tab'];
        $btn_txt = $button['button_text'];

        /*
        |----------------------------------------------------------------
        |   If '$btn-link' isn't empty, display it.
        |----------------------------------------------------------------
        */
        if (!empty($btn_link)) {
            echo '<a class="button ' . $btn_choice . '" href="' . $btn_link . '" target="' . ($btn_new_tab ? '_blank' : '_self') . '">' . $btn_txt . '</a>';
        }
    }
    echo '</div>'; // Buttons closing tag
}