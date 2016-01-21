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
    <meta name=viewport content="width=device-width, initial-scale=1">

    <title>Gstalt Framework</title>

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,100,100italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>

    <?php get_template_part('includes/partials/button-options'); ?>
</head>

<body>

<?php
// Get the menu template
get_template_part('includes/partials/menu');

// Get the go-up template
get_template_part('includes/partials/go-up');

