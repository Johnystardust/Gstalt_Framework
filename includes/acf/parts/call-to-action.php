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
$title              = get_sub_field('title');
$title_color        = get_sub_field('title_color');
$subtitle           = get_sub_field('subtitle');
$subtitle_color     = get_sub_field('subtitle_color');
$subtitle_style     = get_sub_field('subtitle_style');

$buttons            = get_sub_field('buttons');

$background_color   = get_sub_field('background_color');
$height             = get_sub_field('height');

/*
|----------------------------------------------------------------
|   Alignment options.
|----------------------------------------------------------------
*/
$align = get_sub_field('align');

if($align == 'left'){
    $txt_align = 'left';
    $btn_align = 'right';
}
elseif($align == 'right'){
    $txt_align = 'right';
    $btn_align = 'left';
}


/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The call to action block.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="call-to-action" class="container-fluid container-capped same-col-height" style="background-color: '.$background_color.'; height: '.$height.'px;">';
    /*
    |----------------------------------------------------------------
    |   If the '$title' isn't empty display it.
    |----------------------------------------------------------------
    */
    if(!empty($title)){
        echo '<div class="col-md-10 col-sm-12 col-xs-12 col no-padding" style="float: '.$txt_align.';">';
            echo '<div class="text">';
                echo '<div class="middle-wrap">';
                    // Display the title
                    echo '<h3 class="no-margin" style="color: '.$title_color.';">'.$title.'</h3>';

                    /*
                    |----------------------------------------------------------------
                    |   If the '$subtitle' isn't empty display it.
                    |----------------------------------------------------------------
                    */
                    if(!empty($subtitle)){
                        // Display the subtitle
                        echo '<h5 class="no-margin" style="color: '.$subtitle_color.'; font-style: '.$subtitle_style.';">'.$subtitle.'</h5>';
                    }
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }

    /*
    |----------------------------------------------------------------
    |   If the '$buttons' isn't empty display it.
    |----------------------------------------------------------------
    */
    if(!empty($buttons)){
        echo '<div class="col-md-2 col-sm-12 col-xs-12 col no-padding" style="float: '.$btn_align.';">';
            echo '<div class="buttons" style="text-align: '.$title_align.'">';
                echo '<div class="middle-wrap">';

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
                echo '</div>'; // Middle Wrap closing tag
            echo '</div>'; // Buttons closing tag
        echo '</div>';
    }

echo '</div>';