<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */
?>
<style type="text/css">
<?php
/*
|----------------------------------------------------------------
|   Get the button options.
|----------------------------------------------------------------
*/
$button_options = get_field('buttons', 'option');

/*
|----------------------------------------------------------------
|   Loop over all the buttons.
|----------------------------------------------------------------
*/
foreach($button_options as $option){
    /*
    |----------------------------------------------------------------
    |   Get the fields.
    |----------------------------------------------------------------
    */
    $btn_name                   = $option['button_name'];
    $btn_color                  = $option['button_color'];
    $btn_hover_color            = $option['button_hover_color'];
    $button_text_color          = $option['button_text_color'];
    $button_text_hover_color    = $option['button_text_hover_color'];
    $button_border_color        = $option['button_border_color'];
    $button_border_hover_color  = $option['button_border_hover_color'];
    $button_border_width        = $option['button_border_width'];
    $button_border_radius       = $option['button_border_radius'];
    $button_padding             = $option['button_padding'];

    /*
    |----------------------------------------------------------------
    |   Render the styles for each button.
    |----------------------------------------------------------------
    */
    echo '.'.$btn_name.' {';
        echo 'background-color: '.$btn_color.';';
        echo 'color: '.$button_text_color.';';
        if($button_border_width || $button_border_color){
            echo 'border: '.$button_border_width.'px solid '.$button_border_color.';';
        }
        else {
            echo 'border: none;';
        }
        echo 'border-radius: '.$button_border_radius.'px;';
        echo 'padding: '.$button_padding.';';
    echo '}';

    echo '.'.$btn_name.':hover {';
        echo 'background-color: '.$btn_hover_color.' !important;';
        echo 'color: '.$button_text_hover_color.' !important;';
        if($button_border_width || $button_border_color){
            echo 'border: '.$button_border_width.'px solid '.$button_border_hover_color.' !important;';
        }
        else {
            echo 'border: none;';
        }
    echo '}';

}
?>
</style>