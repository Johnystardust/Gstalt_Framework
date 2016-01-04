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
$title              = get_sub_field('title');
$title_color        = get_sub_field('title_color');
$subtitle           = get_sub_field('subtitle');
$subtitle_color     = get_sub_field('subtitle_color');
$subtitle_style     = get_sub_field('subtitle_style');
$text_align         = get_sub_field('text_align');

$btn_link           = get_sub_field('button_link');
$btn_color          = get_sub_field('button_color');
$btn_txt            = get_sub_field('button_text');
$btn_txt_color      = get_sub_field('button_text_color');
$btn_align          = get_sub_field('button_align');

$max_posts          = get_sub_field('max_items');
$max_posts_row      = get_sub_field('max_items_row');
$category           = get_sub_field('category');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The portfolio block
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="portfolio" class="container-fluid container-capped">';
    /*
    |----------------------------------------------------------------
    |   If the '$title' isn't empty display it.
    |----------------------------------------------------------------
    */
    if(!empty($title)){
        echo '<div class="title-subtitle" style="text-align: '.$text_align.';">';
            echo '<h1 class="no-margin" style="color: '.$title_color.';">'.$title.'</h1>';
            /*
            |----------------------------------------------------------------
            |   If the '$subtitle' isn't empty display it.
            |----------------------------------------------------------------
            */
            if(!empty($subtitle)){
                echo '<h4 class="no-margin" style="color: '.$subtitle_color.'; font-style: '.$subtitle_style.';">'.$subtitle.'</h4>';
            }
        echo '</div>';
    }

    echo '<div class="row no-margin">';
        /*
        |----------------------------------------------------------------
        |   WP_Query.
        |----------------------------------------------------------------
        */
        $args = array(
            'category' => '',
            'posts_per_page' => $max_posts,
        );

        $the_query = new WP_Query($args);

        /*
        |----------------------------------------------------------------
        |   If there are posts display them.
        |----------------------------------------------------------------
        */
        if($the_query->have_posts()) {
            while ($the_query->have_posts()): $the_query->the_post();
                echo '<div class="portfolio-item col-md-4 col-sm-6 col-xs-12 no-padding">';
                    echo '<a href="'.get_permalink().'">';
                        /*
                        |----------------------------------------------------------------
                        |   If there is a post thumbnail.
                        |----------------------------------------------------------------
                        */
                        if(has_post_thumbnail()){
                            the_post_thumbnail();
                        }
                    echo '</a>';
                echo '</div>';
            endwhile;
        }

        /*
        |----------------------------------------------------------------
        |   If there aren't any posts display a warning.
        |----------------------------------------------------------------
        */
        else {
            echo 'There are no posts to display';
        }

        /*
        |----------------------------------------------------------------
        |   Reset the postdata.
        |----------------------------------------------------------------
        */
        wp_reset_postdata();

    echo '</div>'; // row closing tag


    /*
    |----------------------------------------------------------------
    |   If the '$btn_link' isn't empty display it.
    |----------------------------------------------------------------
    */
    if(!empty($btn_link)){
        echo '<div class="buttons" style="text-align: '.$btn_align.';">';
            echo '<a class="button" href="'.$btn_link.'" style="background-color: '.$btn_color.'; color: '.$btn_txt_color.';">$btn_txt</a>';
        echo '</div>';
    }


echo '</div>'; // container closing tag