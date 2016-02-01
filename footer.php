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
$top_background_color       = get_theme_mod('top_background_color');
$bottom_background_color    = get_theme_mod('bottom_background_color');

$top_text_color             = get_theme_mod('top_text_color');
$top_hover_color            = get_theme_mod('top_hover_color');
$top_title_color            = get_theme_mod('top_title_color');

$bottom_text_color          = get_theme_mod('bottom_text_color');
$bottom_hover_color         = get_theme_mod('bottom_hover_color');

$top_padding                = get_theme_mod('footer_top_padding');
$top_margin                 = get_theme_mod('footer_top_margin');
$footer_fixed               = get_theme_mod('footer_fixed');

$bottom_padding             = get_theme_mod('footer_bottom_padding');
$bottom_margin              = get_theme_mod('footer_bottom-margin');

$copyright                  = get_theme_mod('copyright_text', 'Pas copyright text aan in de customizer.');

$social_facebook            = get_theme_mod('social_facebook');
$social_google              = get_theme_mod('social_google');
$social_pinterest           = get_theme_mod('social_pinterest');
$social_twitter             = get_theme_mod('social_twitter');
$social_linkedin            = get_theme_mod('social_linkedin');
$social_instagram           = get_theme_mod('social_instagram');
$social_youtube             = get_theme_mod('social_youtube');

/*
|----------------------------------------------------------------
|   Footer Fixed.
|----------------------------------------------------------------
*/
if($footer_fixed){
    $fixed_class = 'fixed';
}


?>

<style type="text/css">
    .widget-title {
        color: <?php echo $top_title_color; ?> !important;
    }

    .footer-top a:hover {
        color: <?php echo $top_hover_color; ?> !important;
    }

    .footer-top .recent-post-item:hover .content p {
        color: <?php echo $top_text_color; ?> !important;
    }

    .footer-bottom a:hover {
        color: <?php echo $bottom_hover_color; ?> !important;
    }
</style>

<?php

get_template_part('includes/partials/action-bar');

/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Footer.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<div id="footer" style="background-color: '.$top_background_color.';">';
    /*
    |----------------------------------------------------------------
    |   Footer top.
    |----------------------------------------------------------------
    */
    echo '<div class="footer-top" style="color: '.$top_text_color.'; padding: '.$top_padding.'; margin: '.$top_margin.';">';
        echo '<div class="container-fluid container-capped">';
            echo '<div class="row">';
                dynamic_sidebar('footer');
            echo '</div>'; // Row closing tag
        echo '</div>'; // Container closing tag
    echo '</div>'; // Footer top closing tag

    /*
    |----------------------------------------------------------------
    |   Footer bottom.
    |----------------------------------------------------------------
    */
    echo '<div class="footer-bottom" style="background-color: '.$bottom_background_color.'; color: '.$bottom_text_color.'; padding: '.$bottom_padding.'; margin: '.$bottom_margin.';">';
        echo '<div class="container-fluid container-capped">';
            echo '<div class="footer-bottom-inner">';

                echo '<div class="copyright">';
                    echo $copyright;
                echo '</div>'; // Copyright closing tag

                echo '<div class="social-icons" style="color '.$bottom_text_color.';">';
                    /*
                    |----------------------------------------------------------------
                    |   If the social links are not empty display it.
                    |----------------------------------------------------------------
                    */

                    // Social YouTube
                    if(!empty($social_youtube)){
                        echo '<a class="social-icon" href="'.$social_youtube.'"><i class="icon icon-youtube"></i></a>';
                    }

                    // Social Instagram
                    if(!empty($social_instagram)){
                        echo '<a class="social-icon" href="'.$social_instagram.'"><i class="icon icon-instagram"></i></a>';
                    }

                    // Social LinkedIn
                    if(!empty($social_linkedin)){
                        echo '<a class="social-icon" href="'.$social_linkedin.'"><i class="icon icon-linkedin"></i></a>';
                    }

                    // Social Twitter
                    if(!empty($social_twitter)){
                        echo '<a class="social-icon" href="'.$social_twitter.'"><i class="icon icon-twitter"></i></a>';
                    }

                    // Social Pinterest
                    if(!empty($social_pinterest)){
                        echo '<a class="social-icon" href="'.$social_pinterest.'"><i class="icon icon-pinterest"></i></a>';
                    }

                    // Social Google
                    if(!empty($social_google)){
                        echo '<a class="social-icon" href="'.$social_google.'"><i class="icon icon-google"></i></a>';
                    }

                    // Social Facebook
                    if(!empty($social_facebook)){
                        echo '<a class="social-icon" href="'.$social_facebook.'"><i class="icon icon-facebook"></i></a>';
                    }
                echo '</div>'; // Social icons closing tag

            echo '</div>'; // Footer bottom inner closing tag

        echo '</div>'; // Container closing tag
    echo '</div>'; // Footer bottom closing tag

echo '</div>'; // #footer closing tag

?>
</body>
</html>