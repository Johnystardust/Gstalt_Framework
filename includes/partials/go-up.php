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

$go_up_margin           = get_field('margin', 'option');
$go_up_background_color = get_field('margin', 'option');
$go_up_border_radius    = get_field('border_radius', 'option');
$go_up_icon             = get_field('icon', 'option');

$go_up_hide_on_desktop  = get_field('hide_on_desktop', 'option');
$go_up_hide_on_mobile   = get_field('hide_on_mobile', 'option');

if($go_up_hide_on_mobile){
    $class = 'hide-mobile';
}

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Customizer.
|-----------------------------------------------------------------------------------------------------------------------
*/

echo '<div id="go-up '.$class.'">';
echo '</div>';