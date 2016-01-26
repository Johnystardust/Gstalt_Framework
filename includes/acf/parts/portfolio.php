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

$divider            = get_sub_field('divider');
$divider_color      = get_sub_field('divider_color');

$title_align        = get_sub_field('title_align');

$buttons            = get_sub_field('buttons');

$max_posts          = get_sub_field('max_items');
$max_posts_row      = get_sub_field('max_items_row');
$category           = get_sub_field('category');

$margin             = get_sub_field('margin');
$padding            = get_sub_field('padding');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The portfolio block
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="portfolio" class="container-fluid container-capped" style="margin: '.$margin.'; padding: '.$padding.';">';
    /*
    |----------------------------------------------------------------
    |   If the '$title' isn't empty display it.
    |----------------------------------------------------------------
    */
    if(!empty($title)){
        // Display the title
        echo '<h1 class="title no-margin" style="color: '.$title_color.'; text-align: '.$title_align.';">'.$title.'</h3>';

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
        |   If the '$subtitle' isn't empty display it.
        |----------------------------------------------------------------
        */
        if(!empty($subtitle)){
            // Display the subtitle
            echo '<h3 class="subtitle no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.'; text-align: '.$title_align.';">'.$subtitle.'</h5>';
        }
    }

    /*
    |----------------------------------------------------------------
    |   Determine the class for the max posts in a row.
    |----------------------------------------------------------------
    */
    if($max_posts_row == 1){
        $col_class = 'col-md-12';
    }
    if($max_posts_row == 2){
        $col_class = 'col-md-6 col-sm-6';
    }
    if($max_posts_row == 3){
        $col_class = 'col-md-4 col-sm-6';
    }
    if($max_posts_row == 4){
        $col_class = 'col-md-3 col-sm-6';
    }

    /*
    |----------------------------------------------------------------
    |   Portfolio posts
    |----------------------------------------------------------------
    */
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
                echo '<div class="portfolio-item '.$col_class.' no-padding">';
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


echo '</div>'; // container closing tag