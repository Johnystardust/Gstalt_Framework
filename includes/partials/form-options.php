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
$form_styles = get_field('form_style', 'option');

/*
|----------------------------------------------------------------
|   Loop over all the Form styles.
|----------------------------------------------------------------
*/
foreach($form_styles as $form_style){
    /*
    |----------------------------------------------------------------
    |   Get the fields.
    |----------------------------------------------------------------
    */
    $form_style_name            = $form_style['form_style_name'];

    $form_margin                = $form_style['form_margin'];
    $form_padding               = $form_style['form_padding'];

    $form_background_color      = $form_style['form_background_color'];
    $form_border                = $form_style['form_border'];
    $form_border_color          = $form_style['form_border_color'];
    $form_border_size           = $form_style['form_border_width'];
    $form_border_style          = $form_style['form_border_style'];
    
    $input_background_color     = $form_style['input_background_color'];
    $input_border_radius        = $form_style['input_border_radius'];

    $input_text_color           = $form_style['input_text_color'];
    $placeholder_text_color     = $form_style['placeholder_text_color'];

    $input_border               = $form_style['input_border'];
    $input_border_color         = $form_style['input_border_color'];
    $input_border_focus_color   = $form_style['input_border_focus_color'];
    $input_border_size          = $form_style['input_border_size'];
    $input_border_style         = $form_style['input_border_style'];

    /*
    |----------------------------------------------------------------
    |   Render for each style.
    |----------------------------------------------------------------
    */
    /* The From element */
    echo '.'.$form_style_name.' form {';
        echo 'background-color: '.$form_background_color.';';
        echo border_style($form_border, $form_border_size, $form_border_style, $form_border_color);
        echo 'margin: '.$form_margin.';';
        echo 'padding: '.$form_padding.';';
    echo '}';

    /* The From Control element */
    echo '.'.$form_style_name.' form .form-control {';
        echo ($input_background_color ? 'background-color: '.$input_background_color.';' : 'background-color: transparent;');
        echo 'border-radius: '.$input_border_radius.'px;';
        echo 'border: none;';
        echo border_style($input_border, $input_border_size, $input_border_style, $input_border_color);
        echo 'color: '.$input_text_color.';';
    echo '}';

    /* The placeholder style */
    echo '.'.$form_style_name.' form .form-control::webkit-input-placeholder {';
        echo 'color: '.$placeholder_text_color.';';
    echo '}';

    /* The Form Control element :focus */
    echo '.'.$form_style_name.' form .form-control:focus {';
        echo 'border-color: '.$input_border_focus_color.'!important;';
        echo 'box-shadow: none;';
    echo '}';
}

?>
/* Center the element */
.contact-form form .form-group .center {
    margin-left: auto;
    margin-right: auto;
    display: block;
}

/* The From element    */
.contact-form-dark form {

    padding: 30px;
    margin-top: 30px;
}

</style>
