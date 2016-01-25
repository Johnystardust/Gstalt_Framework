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

$go_up_height                       = get_field('height', 'option');
$go_up_width                        = get_field('width', 'option');

$go_up_right                        = get_field('right', 'option');
$go_up_bottom                       = get_field('bottom', 'option');

$go_up_background_color             = get_field('background_color', 'option');
$go_up_background_hover_color       = get_field('background_hover_color', 'option');

$go_up_border_radius                = get_field('border_radius', 'option');

$go_up_icon                         = get_field('icon', 'option');
$go_up_icon_color                   = get_field('icon_color', 'option');
$go_up_icon_hover_color             = get_field('icon_hover_color', 'option');

$go_up_hide_on_desktop              = get_field('hide_on_desktop', 'option');
$go_up_hide_on_mobile               = get_field('hide_on_mobile', 'option');

if($go_up_hide_on_mobile){
    $hide_class = 'hide-mobile';
}

?>

<style type="text/css">
    #go-up:hover {
        background: <?php echo $go_up_background_hover_color; ?> !important;
    }

    #go-up:hover i {
        color: <?php echo $go_up_icon_hover_color; ?> !important;
    }
</style>

<?php

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Go Up.
|-----------------------------------------------------------------------------------------------------------------------
*/

echo '<div id="go-up" class="'.$hide_class.'" style="right: '.$go_up_right.'px; bottom: '.$go_up_bottom.'px; width: '.$go_up_width.'px; height: '.$go_up_height.'px; background: '.$go_up_background_color.'; border-radius: '.$go_up_border_radius.'px;">';
    echo '<i class="icon '.$go_up_icon.'" style="color: '.$go_up_icon_color.';"></i>';
echo '</div>';