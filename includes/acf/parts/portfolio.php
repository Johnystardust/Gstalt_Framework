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
$container                  = get_sub_field('container');
$container_margin           = get_sub_field('container_margin');
$container_padding          = get_sub_field('container_padding');
$background                 = get_sub_field('background');
$background_color           = get_sub_field('background_color');
$background_image           = get_sub_field('background_image');
$background_image_align     = get_sub_field('background_image_align');
$background_image_size      = get_sub_field('background_image_size');
$background_image_repeat    = get_sub_field('background_image_repeat');

$show_titles                = get_sub_field('show_titles');
$show_categories            = get_sub_field('show_categories');
$show_featured_image        = get_sub_field('show_featured_image');
$portfolio_block_margin     = get_sub_field('portfolio_block_margin');
$portfolio_block_padding    = get_sub_field('portfolio_block_padding');
$portfolio_item_margin      = get_sub_field('portfolio_item_margin');
$portfolio_item_padding     = get_sub_field('portfolio_item_padding');
$max_items                  = get_sub_field('max_items');
$max_items_row              = get_sub_field('max_items_row');
$categories                 = get_sub_field('categories');

$text_block_width           = get_sub_field('text_block_width');
$text_block_offset          = get_sub_field('text_block_offset');
$text_block_margin          = get_sub_field('text_block_margin');
$text_block_padding         = get_sub_field('text_block_padding');
$content                    = get_sub_field('content');
$content_color              = get_sub_field('content_color');
$content_align              = get_sub_field('content_align');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The portfolio block
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="portfolio" style="'.set_background_style($background, $background_color, $background_image, $background_image_align, $background_image_size, $background_image_repeat).' margin: '.$container_margin.'; padding: '.$container_padding.';">';
    echo '<div class="container-fluid '.$container.'">';

        echo '<div class="row">';

            /*
            |----------------------------------------------------------------
            |   Portfolio Text.
            |----------------------------------------------------------------
            */
            echo '<div class="portfolio-text '.set_col_size($text_block_width).' '.set_offset_size($text_block_offset).'" style="margin: '.$text_block_margin.'; padding: '.$text_block_padding.';">';
                /*
                |----------------------------------------------------------------
                |   Title/Divider/Subtitle.
                |----------------------------------------------------------------
                */
                get_template_part('includes/acf/parts/assets/title-divider-subtitle');

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
                |   Buttons.
                |----------------------------------------------------------------
                */
                get_template_part('includes/acf/parts/assets/buttons');
            echo '</div>'; // Portfolio Text closing tag

            /*
            |----------------------------------------------------------------
            |   Portfolio Items.
            |----------------------------------------------------------------
            */
            echo '<div class="portfolio-items col-md-12 no-padding" style="margin: '.$portfolio_block_margin.'; padding: '.$portfolio_block_padding.';">';
                /*
                |----------------------------------------------------------------
                |   Get all the included category id's.
                |----------------------------------------------------------------
                */
                $included_categories = array();

                foreach($categories as $category){
                    $cat_id = get_cat_ID($category['category']);
                    array_push($included_categories, $cat_id);
                }

                /*
                |----------------------------------------------------------------
                |   WP_Query.
                |----------------------------------------------------------------
                */
                $args = array(
                    'post_type'         => 'portfolio',
                    'cat'               => $included_categories,
                    'posts_per_page'    => $max_items,
                );

                $the_query = new WP_Query($args);

                /*
                |----------------------------------------------------------------
                |   If there are posts display them.
                |----------------------------------------------------------------
                */
                if($the_query->have_posts()) {
                    while ($the_query->have_posts()): $the_query->the_post();
                        echo '<div class="portfolio-item '.$max_items_row.'" style="margin: '.$portfolio_item_margin.'; padding: '.$portfolio_item_padding.';">';
                            echo '<a href="'.get_permalink().'">';

                                /*
                                |----------------------------------------------------------------
                                |   If show featured image is set.
                                |----------------------------------------------------------------
                                */
                                if($show_featured_image){
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail();
                                    }
                                }

                                /*
                                |----------------------------------------------------------------
                                |   If show title is set.
                                |----------------------------------------------------------------
                                */
                                if($show_titles){
                                    echo '<h3>'.get_the_title().'</h3>';
                                }

                                /*
                                |----------------------------------------------------------------
                                |   If show categories is set.
                                |----------------------------------------------------------------
                                */
                                if($show_categories){
                                    the_category();
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
                |   Reset the post data.
                |----------------------------------------------------------------
                */
                wp_reset_postdata();

            echo '</div>'; // Portfolio Items closing tag

        echo '</div>'; // Row closing tag

        /*
        |----------------------------------------------------------------
        |   The Image overlay.
        |----------------------------------------------------------------
        */
        get_template_part('includes/acf/parts/assets/image-overlay');

    echo '</div>'; // Container closing tag
echo '</div>'; // Portfolio closing tag
