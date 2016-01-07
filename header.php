<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Gstalt Framework</title>

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,100,100italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>
</head>

<body>

<?php
/*
|----------------------------------------------------------------
|   Get the fields and put them in variables for easy usage.
|----------------------------------------------------------------
*/
$background_color   = get_theme_mod('header_background_color', '#ffffff');

$border             = get_theme_mod('header_border');
$border_color       = get_theme_mod('header_border_color');
$border_width       = get_theme_mod('header_border_width');

$text_color         = get_theme_mod('header_text_color');
$hover_color        = get_theme_mod('header_hover_color');

$font_size          = get_theme_mod('header_font_size');

$header_logo        = get_theme_mod('header_logo');

$menu_position      = get_theme_mod('menu_position', 'fixed');

/*
|----------------------------------------------------------------
|   Header border options.
|----------------------------------------------------------------
*/
if($border == 'border_bottom'){
    $border_style = 'border-bottom: '.$border_width.'px solid '.$border_color.';';
}
elseif($border == 'border_top'){
    $border_style = 'border-top: '.$border_width.'px solid '.$border_color.';';
}
elseif($border == 'no_border'){
    $border_style = '';
}
?>

<style type="text/css">
    .main-menu a:hover {
        color: <?php echo $hover_color; ?> !important;
    }
</style>

<?php
/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Header.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<header id="header" class="container-fluid container-capped" style="background-color: '.$background_color.'; position: '.$menu_position.'; font-size: '.$font_size.'px; color: '.$text_color.'; '.$border_style.'">';
    /*
    |----------------------------------------------------------------
    |   Header logo.
    |----------------------------------------------------------------
    */
    echo '<div class="header-logo">';
        echo '<img src="'.$header_logo.'" />';
    echo '</div>'; // Header-logo closing div

    /*
    |----------------------------------------------------------------
    |   Header main-menu.
    |----------------------------------------------------------------
    */
    echo '<div class="main-menu">';
        $args = array(
            'theme_location'  => 'main-menu',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        );

        wp_nav_menu($args);

    echo '</div>'; // Main menu closing div
echo '</header>';
