<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|	Custom mailing list widget.
|-----------------------------------------------------------------------------------------------------------------------
*/
class tvds_mailing_list_widget extends WP_Widget {
    /*
    |----------------------------------------------------------------
    |   Construct function.
    |----------------------------------------------------------------
    */
    function __construct(){
        parent::__construct(
            // Base ID of the widget
            'tvds_mailing_list_widget',

            // Title that appears in the UI
            __('Nieuwsbrief', 'gstalt-framework'),

            // Widget Description
            array('description' => __('Opgeven voor nieuwsbrief in widget.', 'gstalt-framework'))
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

