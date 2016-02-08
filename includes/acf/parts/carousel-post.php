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
$post_type          = get_sub_field('post_type');
$categories         = get_sub_field('categories');
$max_posts          = get_sub_field('max_posts');
$buttons            = get_sub_field('buttons');
$text_color         = get_sub_field('text_color');
$text_hover_color   = get_sub_field('text_hover_color');
?>

<style>
    .carousel-link {
        color: <?php echo $text_color; ?>;
    }

    .carousel-link:hover {
        color: <?php echo $text_hover_color; ?>;
    }
</style>

<?php
/*
|----------------------------------------------------------------
|   Carousel Wrapper.
|----------------------------------------------------------------
*/
echo '<div class="carousel-wrapper post-carousel">';
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
                echo '<li class="carousel-item"><a class="carousel-link" href="'.get_the_permalink().'">';


                    echo '<div class="image">';
                        if(has_post_thumbnail()){
                            the_post_thumbnail();
                        }
                    echo '</div>'; // Image closing tag

                    echo '<h3>'.get_the_title().'</h3>';


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