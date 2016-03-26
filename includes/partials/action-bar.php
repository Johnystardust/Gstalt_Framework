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

// Custom field
$background_color               = get_theme_mod('action_bar_background_color');
$background_image               = get_theme_mod('action_bar_background_image');
$image_align                    = get_theme_mod('action_bar_background_align');
$image_size                     = get_theme_mod('action_bar_background_size');
$image_repeat                   = get_theme_mod('action_bar_background_repeat');

$button_text_color              = get_theme_mod('action_button_text_color');
$button_hover_text_color        = get_theme_mod('action_button_text_hover_color');
$button_text_uppercase          = get_theme_mod('action_button_text_uppercase');
$button_background_color        = get_theme_mod('action_button_background_color');
$button_hover_background_color  = get_theme_mod('action_button_background_hover_color');
$button_border_color            = get_theme_mod('action_button_border_color');
$button_hover_border_color      = get_theme_mod('action_button_border_hover_color');
$button_border_width            = get_theme_mod('action_button_border_width');

$margin                         = get_theme_mod('action_bar_margin');
$padding                        = get_theme_mod('action_bar_padding');

// Customizer fields
$action_title_1                 = get_theme_mod('action_title_1');
$action_title_2                 = get_theme_mod('action_title_2');
$action_title_3                 = get_theme_mod('action_title_3');
$action_title_4                 = get_theme_mod('action_title_4');

$action_link_1                  = get_theme_mod('action_link_1');
$action_link_2                  = get_theme_mod('action_link_2');
$action_link_3                  = get_theme_mod('action_link_3');
$action_link_4                  = get_theme_mod('action_link_4');

$action_blank_1                 = get_theme_mod('action_blank_1');
$action_blank_2                 = get_theme_mod('action_blank_2');
$action_blank_3                 = get_theme_mod('action_blank_3');
$action_blank_4                 = get_theme_mod('action_blank_4');

/*
|----------------------------------------------------------------
|   Find the number of used fields.
|----------------------------------------------------------------
*/
$count_links = array($action_link_1, $action_link_2, $action_link_3, $action_link_4);
$i = 0;

foreach($count_links as $link){
    if(!empty($link)){
       $i++;
    }
}

/*
|----------------------------------------------------------------
|   Get the required col_width.
|----------------------------------------------------------------
*/
if($i == 1){
    $col_width = 'col-md-12';
}
elseif($i == 2){
    $col_width = 'col-md-6 col-xs-12';
}
elseif($i == 3){
    $col_width = 'col-md-4 col-xs-12';
}
elseif($i == 4){
    $col_width = 'col-md-3 col-sm-6';
}

/*
|----------------------------------------------------------------
|   Uppercase
|----------------------------------------------------------------
*/
if($button_text_uppercase){
    $text_transform = 'uppercase';
}

?>

<style type="text/css">
    .action-link:hover {
        color: <?php echo $button_hover_text_color; ?> !important;
    }

    .action-link .action-button:hover {
        background: <?php echo $button_hover_background_color; ?> !important;
        border-color: <?php echo $button_hover_border_color; ?> !important;
    }
</style>

<?php

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   Action Bar
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
if($i > 0) {
    echo '<div id="action-bar" style="background: ' . $background_color . ' url(' . $background_image . ') ' . $image_repeat . '; background-position: ' . $image_align . '; background-size: ' . $image_size . '; margin: ' . $margin . '; padding: ' . $padding . ';">';
        echo '<div class="container-fluid container-capped">';
            echo '<div class="row">';

            /*
            |----------------------------------------------------------------
            |   If '$action_link' isn't empty display it.
            |----------------------------------------------------------------
            */
            if (!empty($action_link_1)) {
                echo '<div class="action-link ' . $col_width . '">';

                    // Display the button
                    echo '<a href="' . $action_link_1 . '" class="action-link" target="'.($action_blank_1 ? '_blank' : '_self').'" style="color: ' . $button_text_color . '; text-transform: ' . $text_transform . ';">';
                        echo '<div class="action-button" style="background: ' . $button_background_color . '; border: ' . $button_border_color . ' solid ' . $button_border_width . 'px;">' . $action_title_1 . '</div>';
                    echo '</a>';

                echo '</div>'; // Col width closing tag
            }

            /*
            |----------------------------------------------------------------
            |   If '$action_link' isn't empty display it.
            |----------------------------------------------------------------
            */
            if (!empty($action_link_2)) {
                echo '<div class="action-link ' . $col_width . '">';

                    // Display the button
                    echo '<a href="' . $action_link_2 . '" class="action-link" target="'.($action_blank_2 ? '_blank' : '_self').'" style="color: ' . $button_text_color . '; text-transform: ' . $text_transform . ';">';
                        echo '<div class="action-button" style="background: ' . $button_background_color . '; border: ' . $button_border_color . ' solid ' . $button_border_width . 'px;">' . $action_title_2 . '</div>';
                    echo '</a>';

                echo '</div>'; // Col width closing tag
            }

            /*
            |----------------------------------------------------------------
            |   If '$action_link' isn't empty display it.
            |----------------------------------------------------------------
            */
            if (!empty($action_link_3)) {
                echo '<div class="action-link ' . $col_width . '">';

                    // Display the button
                    echo '<a href="' . $action_link_3 . '" class="action-link" target="'.($action_blank_3 ? '_blank' : '_self').'" style="color: ' . $button_text_color . '; text-transform: ' . $text_transform . ';">';
                        echo '<div class="action-button" style="background: ' . $button_background_color . '; border: ' . $button_border_color . ' solid ' . $button_border_width . 'px;">' . $action_title_3 . '</div>';
                    echo '</a>';

                echo '</div>'; // Col width closing tag
            }

            /*
            |----------------------------------------------------------------
            |   If '$action_link' isn't empty display it.
            |----------------------------------------------------------------
            */
            if (!empty($action_link_4)) {
                echo '<div class="action-link ' . $col_width . '">';

                    // Display the button
                    echo '<a href="' . $action_link_4 . '" class="action-link" target="'.($action_blank_4 ? '_blank' : '_self').'" style="color: ' . $button_text_color . '; text-transform: ' . $text_transform . ';">';
                        echo '<div class="action-button" style="background: ' . $button_background_color . '; border: ' . $button_border_color . ' solid ' . $button_border_width . 'px;">' . $action_title_4 . '</div>';
                    echo '</a>';

                echo '</div>'; // Col width closing tag
            }

            echo '</div>'; // Row closing tag
        echo '</div>'; // Container closing tag
    echo '</div>'; // Action Bar closing tag
}