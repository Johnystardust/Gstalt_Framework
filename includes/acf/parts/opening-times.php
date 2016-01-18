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
$opening_times          = get_field('opening_hours', 'option');
$opening_times_contents = get_sub_field('opening_times_content');

/*
|----------------------------------------------------------------
|   Count the opening times content and make sure they have the
|   correct class to set the width.
|----------------------------------------------------------------
*/
$opening_times_count = count($opening_times_contents);

if($opening_times_count == 1){
    $opening_times_width = 'col-md-12';
}
elseif($opening_times_count == 2){
    $opening_times_width = 'col-md-6';
}

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Opening Time block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="opening-times" class="container-fluid no-padding same-col-height">';
    echo '<div class="row no-margin">';
        /*
        |----------------------------------------------------------------
        |   Use foreach to loop over al the opening times content.
        |----------------------------------------------------------------
        */
        foreach($opening_times_contents as $opening_times_content){
            /*
            |----------------------------------------------------------------
            |   Get the fields and put them in variables for easy usage.
            |----------------------------------------------------------------
            */
            $opening_times_true = $opening_times_content['opening_times_true'];

            $title              = $opening_times_content['title'];
            $title_color        = $opening_times_content['title_color'];
            $title_uppercase    = $opening_times_content['title_uppercase'];

            $subtitle           = $opening_times_content['subtitle'];
            $subtitle_color     = $opening_times_content['subtitle_color'];
            $subtitle_style     = $opening_times_content['subtitle_style'];

            $divider            = $opening_times_content['divider'];
            $title_align        = $opening_times_content['title_align'];

            $content            = $opening_times_content['content'];
            $content_color      = $opening_times_content['content_color'];
            $content_align      = $opening_times_content['content_align'];

            $buttons            = $opening_times_content['buttons'];

            $margin             = $opening_times_content['margin'];
            $padding            = $opening_times_content['padding'];

            $background_color   = $opening_times_content['background_color'];
            $background_image   = $opening_times_content['background_image'];
            $background_repeat  = $opening_times_content['image_repeat'];
            $background_align   = $opening_times_content['image_align'];
            $background_size    = $opening_times_content['image_size'];

            /*
            |----------------------------------------------------------------
            |   Content.
            |----------------------------------------------------------------
            */
            echo '<div class="'.$opening_times_width.' col" style="background-color: '.$background_color.'; background-image: url('.$background_image.'); background-position: '.$background_align.'!important; background-size: '.$background_size.'; background-repeat: '.$background_repeat.'; margin: '.$margin.'; padding: '.$padding.';">';
                echo '<div class="times-content-inner">';

                    /*
                    |----------------------------------------------------------------
                    |   If the '$title' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($title)){
                        // See if title needs to be uppercase
                        if($title_uppercase == true){
                            $text_transform = 'uppercase';
                        }
                        else {
                            $text_transform = 'none';
                        }

                        // Display the title
                        echo '<h1 class="title no-margin" style="color: '.$title_color.'; text-transform: '.$text_transform.'; text-align: '.$title_align.';">'.$title.'</h1>';

                        /*
                        |----------------------------------------------------------------
                        |   If the '$subtitle' isn't empty display it.
                        |----------------------------------------------------------------
                        */
                        if(!empty($subtitle)){
                            // Display the subtitle
                            echo '<h3 class="subtitle no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.'; text-align: '.$title_align.';">'.$subtitle.'</h3>';
                        }
                    }

                    /*
                    |----------------------------------------------------------------
                    |   If the '$divider' is set true display it.
                    |----------------------------------------------------------------
                    */
                    if($divider == true){
                        /*
                        |----------------------------------------------------------------
                        |   Align the divider with the '$title_align'.
                        |----------------------------------------------------------------
                        */
                        if($title_align == 'center'){
                            $divider_align = 'margin-left: auto; margin-right: auto;';
                        }
                        elseif($title_align == 'left'){
                            $divider_align = 'float: left;';
                        }
                        elseif($title_align == 'right'){
                            $divider_align = 'float: right;';
                        }

                        echo '<div class="divider">';
                            echo '<hr style="'.$divider_align.'" />';
                        echo '</div>';
                    }

                    /*
                    |----------------------------------------------------------------
                    |   Content Wrapper.
                    |----------------------------------------------------------------
                    */
                    echo '<div class="content-wrapper" style="color: '.$content_color.'; text-align: '.$content_align.';">';
                        /*
                        |----------------------------------------------------------------
                        |   If the '$content' isn't empty display it.
                        |----------------------------------------------------------------
                        */
                        if(!empty($content)){
                            echo $content;
                        }

                        /*
                        |----------------------------------------------------------------
                        |   If the '$opening_times_true' is true display it.
                        |----------------------------------------------------------------
                        */
                        if($opening_times_true){
                            echo '<table>';
                            /*
                            |----------------------------------------------------------------
                            |   Use foreach to loop over al the opening times.
                            |----------------------------------------------------------------
                            */
                            foreach($opening_times as $opening_time){
                                $day    = $opening_time['day'];
                                $time   = $opening_time['time'];

                                echo '<tr>';
                                    echo '<td colspan="2">'.$day.'</td><td colspan="2">'.$time.'</td>';
                                echo '</tr>';

                            }
                            echo '</table>';
                        }

                    echo '</div>'; // Content Wrapper closing tag

                    /*
                    |----------------------------------------------------------------
                    |   If the '%buttons' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($buttons)){
                        echo '<div class="buttons" style="text-align: '.$title_align.'">';
                        /*
                        |----------------------------------------------------------------
                        |   Use foreach to loop over al the buttons.
                        |----------------------------------------------------------------
                        */
                        foreach($buttons as $button){
                            $btn_link       = $button['button_link'];
                            $btn_color      = $button['button_color'];
                            $btn_txt        = $button['button_text'];
                            $btn_txt_color  = $button['button_text_color'];

                            /*
                            |----------------------------------------------------------------
                            |   If the '$btn_link' isn't empty display it.
                            |----------------------------------------------------------------
                            */
                            if(!empty($btn_link)){
                                echo '<a class="button" href="'.$btn_link.'" style="background-color: '.$btn_color.'; color: '.$btn_txt_color.'">'.$btn_txt.'</a>';
                            }
                        }
                        echo '</div>'; // Buttons closing tag
                    }

                echo '</div>'; // Content inner closing tag
            echo '</div>';

        }

    echo '</div>'; // Row closing tag
echo '</div>'; // Container closing tag