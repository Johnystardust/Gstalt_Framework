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
$faqs                               = get_sub_field('faq');
$faq_icon                           = get_sub_field('faq_icon');
$faq_icon_color                     = get_sub_field('faq_icon_color');
$faq_icon_hover_color               = get_sub_field('faq_icon_hover_color');
$faq_icon_background_color          = get_sub_field('faq_icon_background_color');
$faq_icon_hover_background_color    = get_sub_field('faq_icon_hover_background_color');
$faq_icon_border_radius             = get_sub_field('faq_icon_border_radius');

$margin                             = get_sub_field('margin');
$padding                            = get_sub_field('padding');
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
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The FAQ block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="faqs" class="container-fluid container-capped" style="margin: '.$margin.'; padding: '.$padding.';">';
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
                echo '<div class="faq-question col-md-12 no-padding">';
                    echo '<h4>';
                        echo '<i class="faq-control icon '.$faq_icon.'" data-number="'.$i.'" data-expanded="false"></i>';
                        echo '<span class="faq-heading">'.$faq_question.'</span>';
                    echo '</h4>';
                echo '</div>';

                /*
                |----------------------------------------------------------------
                |   FAQ answer.
                |----------------------------------------------------------------
                */
                echo '<div class="faq-answer col-md-12 no-padding">';
                    echo $faq_answer;
                echo '</div>';
            echo '</div>';

            // increment the counter
            $i++;
        }
    echo '</div>';
echo '</div>';