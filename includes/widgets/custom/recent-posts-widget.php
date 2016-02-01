<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|	Custom recent posts widget
|-----------------------------------------------------------------------------------------------------------------------
*/
class tvds_recent_post_widget extends WP_Widget {
    /*
    |----------------------------------------------------------------
    |   Construct function.
    |----------------------------------------------------------------
    */
    function __construct(){
        parent::__construct(
            // The Base ID of the widget
            'tvds_recent_post_widget',

            // Name that appears in the UI
            __('Recente posts op categorie.', 'gstalt-framework'),

            // Widget Description
            array('description' => __('Laat de laatste posts zien en selecteer op categorie.'))
        );
    }

    /*
    |----------------------------------------------------------------
    |   Widget function.
    |
    |	Creating widget front-end, this is where the action happens
    |----------------------------------------------------------------
    */
    public function widget($args, $instance){
        $title = apply_filters('widget_title', $instance['title']);

        /*
        |----------------------------------------------------------------
        |   The 'before_widget' argument is defined in the theme.
        |----------------------------------------------------------------
        */
        echo $args['before_widget'];

        /*
        |----------------------------------------------------------------
        |   If the '$title' isn't empty, display it between the arguments.
        |----------------------------------------------------------------
        */
        if(!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];

        /*
        |----------------------------------------------------------------
        |   Get all the fields an put them in variables for easy usage.
        |----------------------------------------------------------------
        */
        $categories = get_field('category', 'widget_' . $args['widget_id']);
        $max_posts  = get_field('max_posts', 'widget_' . $args['widget_id']);

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
        $query_args = array(
            'post-type'         => 'post',
            'cat'               => $included_categories,
            'posts_per_page'    => $max_posts
        );

        $the_query = new WP_Query($query_args);

        if($the_query->have_posts()) {
            while ($the_query->have_posts()) : $the_query->the_post();

                echo '<a class="recent-post-item" href="'.get_permalink().'">';
                    /*
                    |----------------------------------------------------------------
                    |  Image.
                    |----------------------------------------------------------------
                    */
                    echo '<div class="image col-md-3 no-padding">';
                        echo '<div class="middle-wrap">';
                            if(has_post_thumbnail()){
                                the_post_thumbnail('thumbnail');
                            }
                        echo '</div>';
                    echo '</div>';


                    /*
                    |----------------------------------------------------------------
                    |  Title/date/author.
                    |----------------------------------------------------------------
                    */
                    echo '<div class="text col-md-9 no-padding">';
                        echo '<h4 class="no-margin">'.get_the_title().'</h4>';
                        echo '<h5 class="no-margin">'.get_the_date().'</h5>';
                        echo '<h5 class="no-margin">'.get_the_author().'</h5>';

                    echo '</div>';

                    /*
                    |----------------------------------------------------------------
                    |   Apply filter to set a max lenght for the_content() string.
                    |----------------------------------------------------------------
                    */
                    $content = apply_filters( 'the_content', get_the_content() );
                    $content = str_replace( ']]>', ']]&gt;', $content );
                    $content = substr($content, 0, 100);
                    $content .= '...';

                    /*
                    |----------------------------------------------------------------
                    |  Content.
                    |----------------------------------------------------------------
                    */
                    echo '<div class="content col-md-12 no-padding">';
                        echo $content;
                    echo '</div>';

                echo '</a>';

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


        /*
        |----------------------------------------------------------------
        |   The 'after_widget' argument is defined in the theme.
        |----------------------------------------------------------------
        */
        echo $args['after_widget'];
    }

    /*
    |----------------------------------------------------------------
    |   Form function.
    |
    |	Creating widget front-end, this is where the action happens
    |----------------------------------------------------------------
    */
    public function form($instance){
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'wpb_widget_domain');
        }
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title'); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>"/>
        </p>
    <?php
    }

    /*
    |----------------------------------------------------------------
    |   Update function.
    |
    |	Updating widget replacing old instances with new
    |----------------------------------------------------------------
    */
    public function update($new_instance, $old_instance){
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }


}