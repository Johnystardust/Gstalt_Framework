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
class tvds_maps_widget extends WP_Widget {
    /*
    |----------------------------------------------------------------
    |   Construct function.
    |----------------------------------------------------------------
    */
    function __construct(){
        parent::__construct(
            // Base ID of your widget
            'tvds_maps_widget',

            // Widget name will appear in UI
            __('Google Maps', 'gstalt-framework'),

            // Widget description
            array('description' => __('Google Maps in widget.', 'gstalt-framework'))
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
        $zoom           = get_field('zoom', 'widget_' . $args['widget_id']);
        $center         = get_field('center', 'widget_' . $args['widget_id']);
        $allow_scroll   = get_field('allow_scroll', 'widget_' . $args['widget_id']);
        $allow_ui       = get_field('allow_ui', 'widget_' . $args['widget_id']);
        $height         = get_field('height', 'widget_' . $args['widget_id']);
        $width          = get_field('width', 'widget_' . $args['widget_id']);
        $markers        = get_field('markers', 'widget_' . $args['widget_id']);

        /*
        |----------------------------------------------------------------
        |   Google maps.
        |----------------------------------------------------------------
        */
        ?>

        <div id="maps-widget">
            <script>
                function initialize() {
                    var mapCanvas = document.getElementById('map-canvas');

                    var myLatLng = new google.maps.LatLng(<?php echo $center; ?>);

                    var mapOptions = {
                        center:             myLatLng,
                        zoom:               <?php echo $zoom; ?>,
                        scrollwheel:        <?php echo ($allow_scroll ? 'true' : 'false'); ?>,
                        mapTypeId:          google.maps.MapTypeId.ROADMAP,
                        disableDefaultUI:   <?php echo ($allow_ui ? 'true' : 'false'); ?>
                    };

                    var map = new google.maps.Map(mapCanvas, mapOptions);

                    <?php
                    /*
                    |----------------------------------------------------------------
                    |   Markers.
                    |----------------------------------------------------------------
                    */
                    foreach($markers as $marker){
                        /*
                        |----------------------------------------------------------------
                        |   Get the fields and put them in variables for easy usage.
                        |----------------------------------------------------------------
                        */
                        $title  = $marker['title'];
                        $center = $marker['center'];
                        $image  = $marker['image'];

                        ?>
                        var markerLatLng = new google.maps.LatLng(<?php echo $center; ?>);

                        var marker = new google.maps.Marker({
                            position:   markerLatLng,
                            map:        map,


                            // If there is an image display it
                            <?php
                            if($title){
                                ?>
                                title: '<?php echo $title; ?>',
                                <?php
                            }

                            // If there is an image display it
                            if($image){
                                ?>
                                icon: '<?php echo $image; ?>'
                                <?php
                            }
                            ?>
                        });
                        <?php
                    }
                    ?>

                }
                google.maps.event.addDomListener(window, 'load', initialize);
            </script>

            <div id="map-canvas" style="height: <?php echo $height; ?>; width: <?php echo $width; ?>;"></div>

        </div>

        <?php
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

