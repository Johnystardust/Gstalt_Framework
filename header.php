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
    'link_before'     => '<span class="txt">',
    'link_after'      => '</span><span class="bg"></span>',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
);

wp_nav_menu($args);


?>