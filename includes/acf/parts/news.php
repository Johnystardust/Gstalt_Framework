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
$background_attachment      = get_sub_field('background_attachment');

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

$news_block_margin          = get_sub_field('news_block_margin');
$news_block_padding         = get_sub_field('news_block_padding');
$news_item_margin           = get_sub_field('news_item_margin');
$news_item_padding          = get_sub_field('news_item_padding');
$max_items                  = get_sub_field('max_items');
$max_items_row              = get_sub_field('max_items_row');
$categories                 = get_sub_field('categories');

$show_text_block            = get_sub_field('show_text_block');
$text_block_width           = get_sub_field('text_block_width');
$text_block_offset          = get_sub_field('text_block_offset');
$text_block_margin          = get_sub_field('text_block_margin');
$text_block_padding         = get_sub_field('text_block_padding');
$show_title                 = get_sub_field('show_title');
$show_subtitle              = get_sub_field('show_subtitle');
$show_text_content          = get_sub_field('show_text_content');
$content                    = get_sub_field('content');
$content_color              = get_sub_field('content_color');
$content_align              = get_sub_field('content_align');
$show_buttons               = get_sub_field('show_buttons');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   Styles
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
?>
<style type="text/css">
    #portfolio .item-categories a:hover {
        color: <?php echo $categories_hover_color; ?> !important;
    }

    #portfolio .portfolio-item:hover .item-featured-image .image-overlay {
        opacity: <?php echo $overlay_opacity; ?>;
    }
</style>
<?

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The News block
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="news" style="'.set_background_style($background, $background_color, $background_image, $background_image_align, $background_image_size, $background_image_repeat, $background_attachment).' margin: '.$container_margin.'; padding: '.$container_padding.';">';
    echo '<div class="container-fluid '.$container.'">';

        echo '<div class="row">';

            /*
            |----------------------------------------------------------------
            |   If Show text block is set, display text block.
            |----------------------------------------------------------------
            */
            if($show_text_block){
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
                echo '</div>'; // Portfolio Text closing tag
            }


            /*
            |----------------------------------------------------------------
            |   Portfolio Items.
            |----------------------------------------------------------------
            */
            echo '<div class="news-items col-md-12" style="margin: '.$news_block_margin.'; padding: '.$news_block_padding.';">';
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
                |   Determine row setup.
                |----------------------------------------------------------------
                */
                if($max_items_row == 'col-md-12'){
                    $cols_in_row = 1;
                }
                elseif($max_items_row == 'col-md-6'){
                    $cols_in_row = 2;
                }
                elseif($max_items_row == 'col-md-4'){
                    $cols_in_row = 3;
                }
                elseif($max_items_row == 'col-md-3'){
                    $cols_in_row = 4;
                }
                elseif($max_items_row == 'col-md-2'){
                    $cols_in_row = 6;
                }

                /*
                |----------------------------------------------------------------
                |   WP_Query.
                |----------------------------------------------------------------
                */
                $i = 0;

                $args = array(
                    'post_type'         => 'post',
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

                        /*
                        |----------------------------------------------------------------
                        |   If equals to 0, echo opening row div.
                        |----------------------------------------------------------------
                        */
                        if($i % $cols_in_row == 0){
                            echo '<div class="row">';
                        }

                        /*
                        |----------------------------------------------------------------
                        |   Portfolio Item.
                        |----------------------------------------------------------------
                        */
                        echo '<div class="news-item '.$max_items_row.'" style="margin: '.$news_item_margin.'; padding: '.$news_item_padding.';">';
                            echo '<a href="'.get_permalink().'" class="item-link">';

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


                            echo '</a>';
                        echo '</div>'; // News Item closing tag

                        $i++;

                        /*
                        |----------------------------------------------------------------
                        |   If equals to 0, echo closing row div.
                        |----------------------------------------------------------------
                        */
                        if($i % $cols_in_row == 0){
                            echo '</div>';
                        }
                    endwhile;

                    /*
                    |----------------------------------------------------------------
                    |   If equals to 0, echo closing row div.
                    |----------------------------------------------------------------
                    */
                    if($i % $cols_in_row != 0){
                        echo '</div>';
                    }
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

            echo '</div>'; // News Items closing tag

        echo '</div>'; // Row closing tag

        /*
        |----------------------------------------------------------------
        |   The Image overlay.
        |----------------------------------------------------------------
        */
        get_template_part('includes/acf/parts/assets/image-overlay');

    echo '</div>'; // Container closing tag
echo '</div>'; // News closing tag
