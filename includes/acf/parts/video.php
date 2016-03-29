<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|----------------------------------------------------------------
|   Get the fields and put them in variables for easy usage.
|----------------------------------------------------------------
*/
$container                  = get_sub_field('container');
$container_margin           = get_sub_field('container_margin');
$container_padding          = get_sub_field('container_padding');
$background                 = get_sub_field('background');
$background_color           = get_sub_field('background_color');
$background_image           = get_sub_field('background_image');
$background_image_align     = get_sub_field('background_image_align');
$background_image_size      = get_sub_field('background_image_size');
$background_image_repeat    = get_sub_field('background_image_repeat');

$text_block_width           = get_sub_field('text_block_width');
$text_block_offset          = get_sub_field('text_block_offset');
$text_block_position        = get_sub_field('text_block_position');
$text_block_vertical_center = get_sub_field('text_block_vertical_center');
$text_block_margin          = get_sub_field('text_block_margin');
$text_block_padding         = get_sub_field('text_block_padding');
$content                    = get_sub_field('content');
$content_color              = get_sub_field('content_color');
$content_align              = get_sub_field('content_align');

$video_block_width          = get_sub_field('video_block_width');
$video_block_offset         = get_sub_field('video_block_offset');
$video_block_position       = get_sub_field('video_block_position');
$video_block_margin         = get_sub_field('video_block_margin');
$video_block_padding        = get_sub_field('video_block_padding');
$video_block_max_height     = get_sub_field('video_block_max_height');
$video_mp4                  = get_sub_field('video_mp4');
$video_webm                 = get_sub_field('video_webm');
$video_ogg                  = get_sub_field('video_oog');
$poster_image               = get_sub_field('poster_image');
$autoplay                   = get_sub_field('autoplay');
$loop                       = get_sub_field('loop');
$muted                      = get_sub_field('muted');
$controls                   = get_sub_field('controls');
$preload                    = get_sub_field('preload');
$video_width                = get_sub_field('video_width');
$video_height               = get_sub_field('video_height');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The video block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="video" style="margin: '.$container_margin.'; padding: '.$container_padding.'; '.set_background_style($background, $background_color, $background_image, $background_image_align, $background_image_size, $background_image_repeat).'">';
    echo '<div class="container-fluid '.$container.'">';
        echo '<div class="row">';

            /*
            |----------------------------------------------------------------
            |   Text Block.
            |----------------------------------------------------------------
            */
            echo '<div class="text-block '.$text_block_position.' '.set_col_size($text_block_width).' '.set_offset_size($text_block_offset).'" style="margin: '.$text_block_margin.'; padding: '.$text_block_padding.';">';
                /*
                |----------------------------------------------------------------
                |   If 'vertical center' is true set in middle wrap.
                |----------------------------------------------------------------
                */
                echo ($text_block_vertical_center ? '<div class="middle-wrap-wrapper"><div class="middle-wrap">' : '');

                    /*
                    |----------------------------------------------------------------
                    |   Title/Divider/Subtitle.
                    |----------------------------------------------------------------
                    */
                    get_template_part('includes/acf/parts/assets/title-divider-subtitle');

                    /*
                    |----------------------------------------------------------------
                    |   If the '$content' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($content)){
                        echo '<div class="content-wrapper" style="color: '.$content_color.'; text-align: '.$content_align.';">'.$content.'</div>';
                    }

                    /*
                    |----------------------------------------------------------------
                    |   Buttons.
                    |----------------------------------------------------------------
                    */
                    get_template_part('includes/acf/parts/assets/buttons');

                echo ($text_block_vertical_center ? '</div></div>' : ''); // Middle Wrap closing tag
            echo '</div>'; // Text Block closing tag

            /*
            |----------------------------------------------------------------
            |   Video.
            |----------------------------------------------------------------
            */
            echo '<div class="video-block '.$video_block_position.' '.set_col_size($video_block_width).' '.set_offset_size($video_block_offset).'" style="margin: '.$video_block_margin.'; padding: '.$video_block_padding.'; max-height: '.$video_block_max_height.'px;">';

                echo '<video '.($autoplay ? 'autoplay' : '').' '.($loop ? 'loop' : '').' '.($muted ? 'muted' : '').' '.($controls ? 'controls' : '').' width="'.$video_width.'" height="'.$video_height.'" preload="'.$preload.'" poster="'.$poster_image.'">';
                    /*
                    |----------------------------------------------------------------
                    |   If there is a 'video_mp4' file, display it.
                    |----------------------------------------------------------------
                    */
                    if($video_mp4){
                        echo '<source src="'.$video_mp4.'" type="video/mp4">';
                    }
                    /*
                    |----------------------------------------------------------------
                    |   If there is a 'video_webm' file, display it.
                    |----------------------------------------------------------------
                    */
                    if($video_webm){
                        echo '<source src="'.$video_webm.'" type="video/webm">';
                    }
                    /*
                    |----------------------------------------------------------------
                    |   If there is a 'video_ogg' file, display it.
                    |----------------------------------------------------------------
                    */
                    if($video_ogg){
                        echo '<source src="'.$video_ogg.'" type="video/ogg">';
                    }
                echo '</video>';
            echo '</div>'; // Video closing tag

        echo '</div>'; // Row closing tag

        /*
        |----------------------------------------------------------------
        |   The Image overlay.
        |----------------------------------------------------------------
        */
        get_template_part('includes/acf/parts/assets/image-overlay');

    echo '</div>'; // Container closing tag
echo '</div>'; // Video closing tag


