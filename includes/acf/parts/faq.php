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
$faqs                   = get_sub_field('faq');
$faq_icon_image         = get_sub_field('faq_icon_image');
$faq_icon_color         = get_sub_field('faq_icon_color');
$faq_icon_hover_color   = get_sub_field('faq_icon_hover_color');
$faq_icon_border_radius = get_sub_field('faq_icon_border_radius');

?>

<style type="text/css">
    .faq-control {
        background: <?php echo $faq_icon_color; ?> url("<?php echo $faq_icon_image; ?>");
        border-radius: <?php echo $faq_icon_border_radius; ?>px;
    }

    .faq-control:hover {
        background: <?php echo $faq_icon_hover_color; ?> url("<?php echo $faq_icon_image; ?>");
        background-position: center 1px !important;
    }

    .active .faq-control {
        background: <?php echo $faq_icon_hover_color; ?> url("<?php echo $faq_icon_image; ?>");
        background-position: center 1px !important;
    }
</style>

<?php

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The FAQ block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="faqs" class="container-fluid container-capped">';
    echo '<div class="row no-margin">';

        $i = 1;
        /*
        |----------------------------------------------------------------
        |   Use foreach to loop over al the faqs.
        |----------------------------------------------------------------
        */
        foreach($faqs as $faq){
            /*
            |----------------------------------------------------------------
            |   Get the faq fields and put them in variables for easy usage.
            |----------------------------------------------------------------
            */
            $faq_question   = $faq['faq_question'];
            $faq_answer     = $faq['faq_answer'];

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
                echo '<div class="faq-question col-md-12">';
                    echo '<h4>';
                        echo '<span class="faq-control" data-number="'.$i.'"></span>';
                        echo '<span class="faq-heading">'.$faq_question.'</span>';
                    echo '</h4>';
                echo '</div>';

                /*
                |----------------------------------------------------------------
                |   FAQ answer.
                |----------------------------------------------------------------
                */
                echo '<div class="faq-answer col-md-12">';
                    echo $faq_answer;
                echo '</div>';
            echo '</div>';

            // increment the counter
            $i++;
        }
    echo '</div>';
echo '</div>';