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
class tvds_opening_times_widget extends WP_Widget
{

    /*
    |----------------------------------------------------------------
    |   Construct function.
    |----------------------------------------------------------------
    */
    function __construct() {
        parent::__construct(
            // Base ID of your widget
            'tvds_opening_times_widget',

            // Widget name will appear in UI
            __('Openingstijden', 'gstalt-framework'),

            // Widget description
            array('description' => __('Openingstijden in een widget.', 'gstalt-framework'),)
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
        |   Get all the Opening Times.
        |----------------------------------------------------------------
        */
        $opening_times = get_field('opening_hours', 'option');

        if(!empty($opening_times)){
            echo '<table>';

                foreach($opening_times as $opening_time){
                    $day  = $opening_time['day'];
                    $time = $opening_time['time'];

                    echo '<tr>';
                        echo '<td>'.$day.'</td><td>'.$time.'</td>';
                    echo '</tr>';
                }

            echo '</table>';
        }

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
    public function form($instance)
    {
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
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}