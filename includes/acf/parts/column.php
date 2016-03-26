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
$background                 = get_sub_field('background');
$background_color           = get_sub_field('background_color');
$background_image           = get_sub_field('background_image');
$background_image_align     = get_sub_field('background_image_align');
$background_image_size      = get_sub_field('background_image_size');
$background_image_repeat    = get_sub_field('background_image_repeat');

$margin                     = get_sub_field('margin');
$padding                    = get_sub_field('padding');

$container                  = get_sub_field('container');
$even_col_height            = get_sub_field('even_col_height');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   Block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="column" style="'.set_background_style($background, $background_color, $background_image, $background_image_align, $background_image_size, $background_image_repeat).' margin: '.$margin.'; padding: '.$padding.';">';
    echo '<div class="container-fluid '.$container.' '.($even_col_height ? 'same-col-height' : '').'">';
        echo '<div class="row">';
            /*
            |----------------------------------------------------------------
            |   Loop over all the flexible fields and choose and include
            |   the correct layout.
            |
            |   We use 'include(locate_template())' over 'get_template_part()'
            |   so we can use the '$even_col_height' variable inside the
            |   included parts.
            |----------------------------------------------------------------
            */
            if(get_sub_field('column_content')){
                while(has_sub_field('column_content')){
                    switch(get_row_layout()){
                        /*
                        |----------------------------------------------------------------
                        |   If the row layout is text.
                        |----------------------------------------------------------------
                        */
                        case 'text':
                            include(locate_template('includes/acf/parts/column-text.php'));
                            break;

                        /*
                        |----------------------------------------------------------------
                        |   If the row layout is image.
                        |----------------------------------------------------------------
                        */
                        case 'image':
                            include(locate_template('includes/acf/parts/column-image.php'));
                            break;

                        /*
                        |----------------------------------------------------------------
                        |   If the row layout is image.
                        |----------------------------------------------------------------
                        */
                        case 'opening_times':
                            include(locate_template('includes/acf/parts/column-opening-times.php'));
                            break;

                        /*
                        |----------------------------------------------------------------
                        |   If the row layout is image.
                        |----------------------------------------------------------------
                        */
                        case 'contact_form':
                            include(locate_template('includes/acf/parts/column-contact-form.php'));
                            break;

                    }
                }
            }

        echo '</div>'; // Row closing tag

        /*
        |----------------------------------------------------------------
        |   The Image overlay.
        |----------------------------------------------------------------
        */
        get_template_part('includes/acf/parts/assets/image-overlay');

    echo '</div>'; // Container closing tag
echo '</div>'; // Column closing tag
