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
$block_width                    = get_sub_field('block_width');
$block_offset                   = get_sub_field('block_offset');
$vertical_center                = get_sub_field('vertical_center');

$margin                         = get_sub_field('margin');
$padding                        = get_sub_field('padding');

$contact_form_short_code        = get_sub_field('contact_form_7_id');
$contact_form_style             = get_sub_field('contact_form_style');
$contact_form_align             = get_sub_field('contact_form_align');
$contact_form_max_width         = get_sub_field('contact_form_max_width');

$contact_form_textarea_resize = get_sub_field('contact_form_textarea_resize');

?>
<style>
    .contact-form textarea {
        resize: <?php echo $contact_form_textarea_resize; ?>;
    }
</style>
<?php

/*
|----------------------------------------------------------------
|   Column Item.
|----------------------------------------------------------------
*/
echo '<div class="column-item '.set_col_size($block_width).' '.set_offset_size($block_offset).' '.($even_col_height ? 'col' : '').'" style="margin: '.$margin.'; padding: '.$padding.';">';
    echo '<div class="column-content contact-form-content '.$contact_form_style.' on-top-overlay" style="display: '.($vertical_center ? 'table' : '').'">';

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
            |   Contact Form.
            |----------------------------------------------------------------
            */
            echo '<div class="contact-form" style="'.align_left_right_center($contact_form_align).' max-width: '.$contact_form_max_width.'px;">';
                echo do_shortcode($contact_form_short_code);
            echo '</div>'; // Col Size closing tag


        echo ($vertical_center ? '</div>' : '');
    echo '</div>'; // Column Content closing tag

    /*
    |----------------------------------------------------------------
    |   The Image overlay.
    |----------------------------------------------------------------
    */
    get_template_part('includes/acf/parts/assets/image-overlay');

echo '</div>'; // Column Item closing tag

