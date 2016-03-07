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
$block_width        = get_sub_field('block_width');
$block_offset       = get_sub_field('block_offset');
$vertical_center    = get_sub_field('vertical_center');

$margin             = get_sub_field('margin');
$padding            = get_sub_field('padding');

$content_color      = get_sub_field('content_color');
$opening_times      = get_field('opening_hours', 'option');

/*
|----------------------------------------------------------------
|   Column Item.
|----------------------------------------------------------------
*/
echo '<div class="column-item '.set_col_size($block_width).' '.set_offset_size($block_offset).' '.($even_col_height ? 'col' : '').'" style="margin: '.$margin.'; padding: '.$padding.';">';
    echo '<div class="column-content opening-times-content on-top-overlay" style="display: '.($vertical_center ? 'table' : '').'">';
        /*
        |----------------------------------------------------------------
        |   If vertical center is true set img in middle wrap.
        |----------------------------------------------------------------
        */
        echo ($vertical_center ? '<div class="middle-wrap">' : '');

            /*
            |----------------------------------------------------------------
            |   Title/Divider/Subtitle.
            |----------------------------------------------------------------
            */
            get_template_part('includes/acf/parts/assets/title-divider-subtitle');

            /*
            |----------------------------------------------------------------
            |   Opening Times.
            |----------------------------------------------------------------
            */
            echo '<table style="color: '.$content_color.'">';
                /*
                |----------------------------------------------------------------
                |   Use foreach to loop over al the opening times.
                |----------------------------------------------------------------
                */
                foreach($opening_times as $opening_time){
                    $day    = $opening_time['day'];
                    $time   = $opening_time['time'];

                    echo '<tr>';
                        echo '<td>'.$day.'</td><td>'.$time.'</td>';
                    echo '</tr>';

                }
            echo '</table>';


        echo ($vertical_center ? '</div>' : '');
    echo '</div>'; // Column Content closing tag

echo '</div>'; // Column Item closing tag
