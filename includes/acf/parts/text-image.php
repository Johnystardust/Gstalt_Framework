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
$margin             = get_sub_field('margin');
$padding            = get_sub_field('padding');

$background_color   = get_sub_field('background_color');
$background_image   = get_sub_field('background_image');
$background_align   = get_sub_field('image_align');
$background_size    = get_sub_field('image_size');

$border             = get_sub_field('border');
$border_color       = get_sub_field('border_color');
$border_size        = get_sub_field('border_size');
$border_style       = get_sub_field('border_style');

/*
|----------------------------------------------------------------
|   Border type
|----------------------------------------------------------------
*/
if($border == 'all'){
    $border_type = 'border: '.$border_size.'px '.$border_style.' '.$border_color.';';
}
elseif($border == 'top'){
    $border_type = 'border-top: '.$border_size.'px '.$border_style.' '.$border_color.';';
}
elseif($border == 'bottom'){
    $border_type = 'border-bottom: '.$border_size.'px '.$border_style.' '.$border_color.';';
}
elseif($border == 'topbottom'){
    $border_type = 'border-top: '.$border_size.'px '.$border_style.' '.$border_color.'; border-bottom: '.$border_size.' '.$border_style.' '.$border_color.';';
}
elseif($border == 'left'){
    $border_type = 'border-left: '.$border_size.'px '.$border_style.' '.$border_color.';';
}
elseif($border == 'right'){
    $border_type = 'border-right: '.$border_size.'px '.$border_style.' '.$border_color.';';
}
elseif($border == 'leftright'){
    $border_type = 'border-left: '.$border_size.'px '.$border_style.' '.$border_color.'; border-right: '.$border_size.' '.$border_style.' '.$border_color.';';
}
elseif($border == 'none') {
    $border_type = '';
}

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   Text with image block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="text-with-image" class="container-fluid no-padding same-col-height" style="background: '.$background_color.' url('.$background_image.') '.$image_align.'; background-size: '.$background_size.'; margin: '.$margin.'; padding: '.$padding.'; '.$border_type.'">';
    /*
    |----------------------------------------------------------------
    |   If the field is filled, get the row layout.
    |----------------------------------------------------------------
    */
    if(get_sub_field('content')){
        while(has_sub_field('content')){
            switch(get_row_layout()){
                /*
                |----------------------------------------------------------------
                |   If row layout is text block.
                |----------------------------------------------------------------
                */
                case 'text_block':
                    /*
                    |----------------------------------------------------------------
                    |   Get all the fields an put them in variables for easy usage.
                    |----------------------------------------------------------------
                    */
                    $title              = get_sub_field('title');
                    $title_color        = get_sub_field('title_color');

                    $subtitle           = get_sub_field('subtitle');
                    $subtitle_color     = get_sub_field('subtitle_color');
                    $subtitle_style     = get_sub_field('subtitle_style');

                    $divider            = get_sub_field('divider');
                    $divider_color      = get_sub_field('divider_color');

                    $title_align        = get_sub_field('title_align');

                    $content            = get_sub_field('content');
                    $content_color      = get_sub_field('content_color');
                    $content_align      = get_sub_field('content_align');

                    $buttons            = get_sub_field('buttons');

                    $block_width        = get_sub_field('block_width');
                    $margin             = get_sub_field('margin');
                    $padding            = get_sub_field('padding');

                    $overlay_active     = get_sub_field('overlay_active');
                    $overlay_color      = get_sub_field('overlay_color');
                    $overlay_opacity    = get_sub_field('overlay_opacity') / 100;

                    /*
                    |----------------------------------------------------------------
                    |   Determine block width.
                    |----------------------------------------------------------------
                    */
                    if($block_width == '25'){
                        $col_size = 'col-md-3';
                    }
                    elseif($block_width == '33'){
                        $col_size = 'col-md-4';
                    }
                    elseif($block_width == '50'){
                        $col_size = 'col-md-6';
                    }
                    elseif($block_width == '66'){
                        $col_size = 'col-md-8';
                    }
                    elseif($block_width == '75'){
                        $col_size = 'col-md-9';
                    }
                    elseif($block_width == '100'){
                        $col_size = 'col-md-12';
                    }

                    /*
                    |----------------------------------------------------------------
                    |   Text Block.
                    |----------------------------------------------------------------
                    */
                    echo '<div class="text '.$col_size.' col container-capped" style="margin: '.$margin.'; padding: '.$padding.';">';
                        echo '<div class="text-content">';
                            echo '<div class="middle-wrap">';
                                /*
                                |----------------------------------------------------------------
                                |   If the '$title' isn't empty display it.
                                |----------------------------------------------------------------
                                */
                                if(!empty($title)){
                                    // Display the title
                                    echo '<h1 class="title no-margin" style="color: '.$title_color.'; text-align: '.$title_align.';">'.$title.'</h3>';

                                    /*
                                    |----------------------------------------------------------------
                                    |   If the '$subtitle' isn't empty display it.
                                    |----------------------------------------------------------------
                                    */
                                    if(!empty($subtitle)){
                                        // Display the subtitle
                                        echo '<h3 class="subtitle no-margin" style="font-style: '.$subtitle_style.'; color: '.$subtitle_color.'; text-align: '.$title_align.';">'.$subtitle.'</h5>';
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
                                        echo '<hr style="'.$divider_align.' border-color: '.$divider_color.';" />';
                                    echo '</div>';
                                }

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
                                |   If the '$buttons' isn't empty display it.
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
                                            /*
                                            |----------------------------------------------------------------
                                            |   Get all the button fields.
                                            |----------------------------------------------------------------
                                            */
                                            $btn_choice     = $button['button_choice'];
                                            $btn_link       = $button['button_link'];
                                            $btn_new_tab    = $button['button_new_tab'];
                                            $btn_txt        = $button['button_text'];

                                            /*
                                            |----------------------------------------------------------------
                                            |   If '$btn-link' isn't empty, display it.
                                            |----------------------------------------------------------------
                                            */
                                            if(!empty($btn_link)){
                                                echo '<a class="button '.$btn_choice.'" href="'.$btn_link.'" target="'.($btn_new_tab ? '_blank' : '_self').'">'.$btn_txt.'</a>';
                                            }
                                        }
                                    echo '</div>'; // Buttons closing tag
                                }

                            echo '</div>'; // Middle Wrap closing tag
                        echo '</div>'; // Text Content closing tag


                        if($overlay_active){
                            echo '<div class="overlay" style="background-color: '.$overlay_color.'; opacity: '.$overlay_opacity.';"></div>';
                        }

                    echo '</div>'; // Text closing tag

                break;
                /*
                |----------------------------------------------------------------
                |   If row layout is text block.
                |----------------------------------------------------------------
                */
                case 'image':
                    /*
                    |----------------------------------------------------------------
                    |   Get all the fields an put them in variables for easy usage.
                    |----------------------------------------------------------------
                    */
                    $image              = get_sub_field('image');
                    $image_size         = get_sub_field('image_size');
                    $max_image_width    = get_sub_field('max_image_width');
                    $image_align        = get_sub_field('image_align');
                    $vertical_center    = get_sub_field('vertical_center');

                    $block_width        = get_sub_field('block_width');
                    $margin             = get_sub_field('margin');
                    $padding            = get_sub_field('padding');

                    $overlay_active     = get_sub_field('overlay_active');
                    $overlay_color      = get_sub_field('overlay_color');
                    $overlay_opacity    = get_sub_field('overlay_opacity') / 100;

                    /*
                    |----------------------------------------------------------------
                    |   Image size.
                    |----------------------------------------------------------------
                    */
                    if($image_size == 'auto'){
                        $image_width = 'auto';
                        $image_class = '';
                    }
                    elseif($image_size == '100%'){
                        $image_width = '100%';
                        $image_class = '';
                    }
                    elseif($image_size == 'fill'){
                        $image_width = '100%';
                        $image_class = 'fill';
                    }
                    else {
                        $image_width = '';
                        $image_class = '';
                    }

                    /*
                    |----------------------------------------------------------------
                    |   Image align.
                    |----------------------------------------------------------------
                    */
                    if($image_align == 'left'){
                        $image_alignment = 'float: left;';
                    }
                    elseif($image_align == 'right'){
                        $image_alignment = 'float: right;';
                    }
                    elseif($image_align == 'center'){
                        $image_alignment = 'margin: 0 auto;';
                    }
                    else {
                        $image_alignment = '';
                    }

                    /*
                    |----------------------------------------------------------------
                    |   Determine block width.
                    |----------------------------------------------------------------
                    */
                    if($block_width == '25'){
                        $col_size = 'col-md-3';
                    }
                    elseif($block_width == '33'){
                        $col_size = 'col-md-4';
                    }
                    elseif($block_width == '50'){
                        $col_size = 'col-md-6';
                    }
                    elseif($block_width == '66'){
                        $col_size = 'col-md-8';
                    }
                    elseif($block_width == '75'){
                        $col_size = 'col-md-9';
                    }
                    elseif($block_width == '100'){
                        $col_size = 'col-md-12';
                    }

                    /*
                    |----------------------------------------------------------------
                    |   Image Block.
                    |----------------------------------------------------------------
                    */
                    echo '<div class="image '.$col_size.' col '.$image_class.' no-padding" style="margin: '.$margin.'; padding: '.$padding.';">';
                        /*
                        |----------------------------------------------------------------
                        |   If vertical center is true set img in middle wrap.
                        |----------------------------------------------------------------
                        */
                        if($vertical_center){
                            echo '<div class="image-content">';
                                echo '<div class="middle-wrap">';
                                    echo '<img style="'.$image_alignment.'; max-width: '.$max_image_width.'px;" src="'.$image.'" width="'.$image_width.'" />';
                                echo '</div>';
                            echo '</div>';
                        }
                        else {
                            echo '<img style="'.$image_alignment.'; max-width: '.$max_image_width.'px;" src="'.$image.'" width="'.$image_width.'" />';
                        }

                        if($overlay_active){
                            echo '<div class="overlay" style="background-color: '.$overlay_color.'; opacity: '.$overlay_opacity.';"></div>';
                        }
                    echo '</div>'; // Image closing tag

                break;
            }
        }
    }

echo '</div>'; // Container closing tag

