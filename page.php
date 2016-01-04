<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|----------------------------------------------------------------
|   Get the header.
|----------------------------------------------------------------
*/
get_header();

/*
|----------------------------------------------------------------
|   If have posts get flexible content template part. Else echo
|   a warning.
|----------------------------------------------------------------
*/
if(have_posts()){

    while(have_posts()) : the_post(); ?>

        <?php get_template_part('includes/acf/flexible-content'); ?>

    <?php endwhile;
}
else {
    echo 'Sorry no posts matched your criteria';
}

/*
|----------------------------------------------------------------
|   Reset the postdata.
|----------------------------------------------------------------
*/
wp_reset_postdata();

/*
|----------------------------------------------------------------
|   Get the footer.
|----------------------------------------------------------------
*/
get_footer();