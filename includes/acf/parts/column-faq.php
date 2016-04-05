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
$block_width                        = get_sub_field('block_width');
$block_offset                       = get_sub_field('block_offset');
$vertical_center                    = get_sub_field('vertical_center');

$margin                             = get_sub_field('margin');
$padding                            = get_sub_field('padding');

$faqs                               = get_sub_field('faq');

$faq_question_size                  = get_sub_field('faq_question_size');
$faq_question_color                 = get_sub_field('faq_question_color');
$faq_answer_size                    = get_sub_field('faq_answer_size');
$faq_answer_color                   = get_sub_field('faq_answer_color');

$faq_icon                           = get_sub_field('faq_icon');
$faq_icon_color                     = get_sub_field('faq_icon_color');
$faq_icon_hover_color               = get_sub_field('faq_icon_hover_color');
$faq_icon_background_color          = get_sub_field('faq_icon_background_color');
$faq_icon_hover_background_color    = get_sub_field('faq_icon_hover_background_color');
$faq_icon_border_radius             = get_sub_field('faq_icon_border_radius');
?>

    <style type="text/css">
        .faq-control {
            color: <?php echo $faq_icon_color; ?>;
            background: <?php echo $faq_icon_background_color; ?>;
            border-radius: <?php echo $faq_icon_border_radius; ?>px;
        }

        .faq-control:hover {
            color: <?php echo $faq_icon_hover_color; ?> !important;
            background: <?php echo $faq_icon_hover_background_color; ?> !important;
        }

        .active .faq-control {
            color: <?php echo $faq_icon_hover_color; ?> !important;
            background: <?php echo $faq_icon_hover_background_color; ?> !important;
        }
    </style>

<?php

/*
|----------------------------------------------------------------
|   Column Item.
|----------------------------------------------------------------
*/
echo '<div class="column-item '.set_col_size($block_width).' '.set_offset_size($block_offset).' '.($even_col_height ? 'col' : '').'" style="margin: '.$margin.'; padding: '.$padding.';">';
    echo '<div class="column-content faq-content on-top-overlay" style="display: '.($vertical_center ? 'table' : '').'">';

        if(have_rows('faq')){

            $i = 0;

            while(have_rows('faq')) : the_row();
                /*
                |----------------------------------------------------------------
                |   FAQ.
                |----------------------------------------------------------------
                */
                echo '<div class="faq" data-number="'.$i.'">';
                    /*
                    |----------------------------------------------------------------
                    |   FAQ question.
                    |----------------------------------------------------------------
                    */
                    echo '<div class="faq-question col-md-12 no-padding">';
                        echo '<h4>';
                            echo '<i class="faq-control icon '.$faq_icon.'" data-number="'.$i.'" data-expanded="false"></i>';
                            echo '<span class="faq-heading" style="font-size: '.$faq_question_size.'px; color: '.$faq_question_color.';">'.get_sub_field('faq_question').'</span>';
                        echo '</h4>';
                    echo '</div>';

                    /*
                    |----------------------------------------------------------------
                    |   FAQ answer.
                    |----------------------------------------------------------------
                    */
                    echo '<div class="faq-answer no-padding" style="font-size: '.$faq_answer_size.'px; color: '.$faq_answer_color.';">';
                        echo get_sub_field('faq_answer');
                    echo '</div>';
                echo '</div>';

                // increment the counter
                $i++;

            endwhile;
        }

    echo '</div>'; // FAQ Content closing tag
echo '</div>'; // Column Item closing tag