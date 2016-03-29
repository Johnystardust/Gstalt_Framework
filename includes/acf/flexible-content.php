<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

if(get_field('page_content')):

    while(has_sub_field('page_content')):

        switch(get_row_layout()):

            case 'call_to_action':
                get_template_part('includes/acf/parts/call-to-action');
                break;

            case 'cards':
                get_template_part('includes/acf/parts/cards');
                break;

            case 'carousel':
                get_template_part('includes/acf/parts/carousel');
                break;

            case 'column':
                get_template_part('includes/acf/parts/column');
                break;

            case 'contact_form':
                get_template_part('includes/acf/parts/contact-form');
                break;

            case 'faq':
                get_template_part('includes/acf/parts/faq');
                break;

            case 'opening_times':
                get_template_part('includes/acf/parts/opening-times');
                break;

            case 'portfolio':
                get_template_part('includes/acf/parts/portfolio');
                break;

            case 'slider':
                get_template_part('includes/acf/parts/slider');
                break;

            case 'text_with_image':
                get_template_part('includes/acf/parts/text-with-image');
                break;

            case 'video':
                get_template_part('includes/acf/parts/video');
                break;

        endswitch;

    endwhile;

endif;