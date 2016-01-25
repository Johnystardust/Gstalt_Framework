<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

if(get_field('page_content')):

    while(has_sub_field('page_content')):

        switch(get_row_layout()):
            case 'carousel':
                get_template_part('includes/acf/parts/carousel');
                break;

            case 'call_to_action':
                get_template_part('includes/acf/parts/call-to-action');
                break;

            case 'cards':
                get_template_part('includes/acf/parts/cards');
                break;

            case 'cards_with_icon':
                get_template_part('includes/acf/parts/cards-with-icon');
                break;

            case 'opening_times':
                get_template_part('includes/acf/parts/opening-times');
                break;

            case 'slider':
                get_template_part('includes/acf/parts/slider');
                break;

            case 'text_with_image':
                get_template_part('includes/acf/parts/text-image');
                break;


            // blocks not done
            case 'portfolio':
                get_template_part('includes/acf/parts/portfolio');
                break;

            case 'faq':
                get_template_part('includes/acf/parts/faq');
                break;
        endswitch;

    endwhile;

endif;
