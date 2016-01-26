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

// Styles & images
$background_color                   = get_theme_mod('menu_background_color', '#ffffff');
$menu_submenu_background_color      = get_theme_mod('menu_submenu_background_color');
$background_transparent             = get_theme_mod('menu_background_transparent');

$border                             = get_theme_mod('menu_border');
$border_color                       = get_theme_mod('menu_border_color');
$border_width                       = get_theme_mod('menu_border_width');

$text_color                         = get_theme_mod('menu_text_color');
$transparent_text_color             = get_theme_mod('menu_transparent_text_color');
$hover_color                        = get_theme_mod('menu_hover_color');
$menu_submenu_text_color            = get_theme_mod('menu_submenu_text_color');

$mobile_menu_text_color             = get_theme_mod('mobile_menu_text_color');
$mobile_menu_background_color       = get_theme_mod('mobile_menu_background_color');
$mobile_menu_background_hover_color = get_theme_mod('mobile_menu_background_hover_color');
$mobile_menu_top_border_color       = get_theme_mod('mobile_menu_top_border_color');
$mobile_menu_top_border_width       = get_theme_mod('mobile_menu_top_border_width');
$mobile_menu_bottom_border_color    = get_theme_mod('mobile_menu_bottom_border_color');
$mobile_menu_bottom_border_width    = get_theme_mod('mobile_menu_bottom_border_width');

$font_size                          = get_theme_mod('menu_font_size');
$menu_submenu_font_size             = get_theme_mod('menu_submenu_font_size');
$menu_text_transform                = get_theme_mod('menu_text_transform');
$menu_submenu_text_transform        = get_theme_mod('menu_submenu_text_transform');

$menu_logo                          = get_theme_mod('menu_logo');
$transparent_menu_logo              = get_theme_mod('transparent_menu_logo');

$menu_position                      = get_theme_mod('menu_position', 'fixed');

$contact_show                       = get_theme_mod('contact_show');
$social_show                        = get_theme_mod('social_show');
$contact_hide_scroll                = get_theme_mod('contact_hide_scroll');
$contact_hide_mobile                = get_theme_mod('contact_hide_mobile');

// Contact information
$contact_information                = get_theme_mod('contact_information');

$social_facebook                    = get_theme_mod('social_facebook');
$social_google                      = get_theme_mod('social_google');
$social_pinterest                   = get_theme_mod('social_pinterest');
$social_twitter                     = get_theme_mod('social_twitter');
$social_linkedin                    = get_theme_mod('social_linkedin');
$social_instagram                   = get_theme_mod('social_instagram');
$social_youtube                     = get_theme_mod('social_youtube');

/*
|----------------------------------------------------------------
|   Menu border options.
|----------------------------------------------------------------
*/
// Menu border
if($border == 'border_bottom'){
    $border_style = 'border-bottom: '.$border_width.'px solid '.$border_color.';';
}
elseif($border == 'border_top'){
    $border_style = 'border-top: '.$border_width.'px solid '.$border_color.';';
}
elseif($border == 'no_border'){
    $border_style = '';
}
else {
    $border_style = '';
}

// Mobile menu border
if(!empty($mobile_menu_top_border_width) && empty($mobile_menu_bottom_border_width)){
    $mobile_menu_border_style = 'border-top: '.$mobile_menu_top_border_width.'px solid '.$mobile_menu_top_border_color.';';
}
elseif(!empty($mobile_menu_bottom_border_width) && empty($mobile_menu_top_border_width)){
    $mobile_menu_border_style = 'border-top: '.$mobile_menu_bottom_border_width.'px solid '.$mobile_menu_bottom_border_color.';';
}
elseif(!empty($mobile_menu_top_border_width) && !empty($mobile_menu_bottom_border_width)){
    $mobile_menu_border_style = 'border-top: '.$mobile_menu_top_border_width.'px solid '.$mobile_menu_top_border_color.'; border-bottom: '.$mobile_menu_bottom_border_width.'px solid '.$mobile_menu_bottom_border_color.';';
}
else {
    $mobile_menu_border_style = '';
}
?>

<style type="text/css">
    #header {
        <?php echo $border_style; ?>;
    }

    .menu-transparent {
        border: none !important;
    }

    .menu-top .social-icons, .menu-top {
        color: <?php echo $text_color; ?>;
    }

    .main-menu a {
        text-transform: <?php echo $menu_text_transform; ?>;
        color: <?php echo $text_color; ?>;
        font-size: <?php echo $font_size; ?>px;
    }

    .main-menu a:hover, .social-icon:hover {
        color: <?php echo $hover_color; ?> !important;
    }

    .menu-transparent .main-menu a, .menu-transparent .mobile-menu i, .menu-transparent .mobile-menu a, .menu-transparent .social-icons,  .menu-transparent .menu-top {
        color: <?php echo $transparent_text_color; ?>;
    }

    .mobile-menu a {
        text-transform: <?php echo $menu_text_transform; ?>;
        color: <?php echo $mobile_menu_text_color; ?>;
        background: <?php echo $mobile_menu_background_color; ?>;
        <?php echo $mobile_menu_border_style; ?>;
    }

    .mobile-menu a:hover {
        background: <?php echo $mobile_menu_background_hover_color; ?> !important;
        color: <?php echo $hover_color; ?> !important;
    }

    .mobile-menu a:hover i {
        color: <?php echo $mobile_menu_text_color; ?>;
    }

    .mobile-menu a i:hover {
        color: <?php echo $hover_color; ?> !important;
    }

    .sub-menu {
        background-color: <?php echo $menu_submenu_background_color; ?>;
    }

    .sub-menu a {
        color: <?php echo $menu_submenu_text_color; ?>;
        font-size: <?php echo $menu_submenu_font_size; ?>px;
    }

    .sub-menu li a {
        background-color: <?php echo $menu_submenu_background_color; ?>;
        text-transform: <?php echo $menu_submenu_text_transform; ?>;
    }
</style>

<?php
/*
|-------------------------------------------------------------------------------------------------------------------------------------------------
|   The Header.
|-------------------------------------------------------------------------------------------------------------------------------------------------
*/
echo '<header id="header" class="container-fluid container-capped '.($contact_hide_scroll ? 'hide-contact' : '').' '.($background_transparent ? 'transparent' : '').'" style="background: '.$background_color.'; position: '.$menu_position.';">';
    /*
    |----------------------------------------------------------------
    |   If '$contact_show' or '$social_show' is set display it
    |----------------------------------------------------------------
    */
    if($contact_show || $social_show){
        /*
        |----------------------------------------------------------------
        |   Menu contact information.
        |----------------------------------------------------------------
        */
        echo '<div class="menu-top '.($contact_hide_mobile ? 'hide-mobile' : '').'">';
            /*
            |----------------------------------------------------------------
            |   If '$contact_show' is set display it
            |----------------------------------------------------------------
            */
            if($contact_show){
                echo '<div class="mail-number">';
                    /*
                    |----------------------------------------------------------------
                    |   If '$contact_telephone' isn't empty display it
                    |----------------------------------------------------------------
                    */
                    if(!empty($contact_information)){
                        echo '<span>'.$contact_information.'</span>';
                    }
                echo '</div>';
            }

            /*
            |----------------------------------------------------------------
            |   If '$social_show' is set display it
            |----------------------------------------------------------------
            */
            if($social_show){
                echo '<div class="social-icons hide-mobile">';
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
                echo '</div>';
            }

        echo '</div>'; // Menu top closing tag
    }

    /*
    |----------------------------------------------------------------
    |   Menu bottom.
    |----------------------------------------------------------------
    */
    echo '<div class="menu-bottom">';
        /*
        |----------------------------------------------------------------
        |   Header logo.
        |----------------------------------------------------------------
        */
        echo '<div class="menu-logo">';
            echo '<a href="'.get_home_url().'">';
                echo '<img class="logo" src="'.$menu_logo.'" />';
                echo '<img class="logo-transparent" src="'.$transparent_menu_logo.'" />';
            echo '</a>';
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

        /*
        |----------------------------------------------------------------
        |   Mobile Menu.
        |----------------------------------------------------------------
        */
        echo '<div class="mobile-menu">';
            echo '<div class="menu-icon-wrapper">';
                echo '<div class="menu-icon">';
                    echo '<span></span>';
                    echo '<span></span>';
                    echo '<span></span>';
                echo '</div>';
            echo '</div>';

            echo '<div class="mobile-hoofdmenu-wrapper">';
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
                    'items_wrap'      => '<ul id="mobile-hoofmenu" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                );

                wp_nav_menu($args);
            echo '</div>'; // Mobile Hoofdmenu Wrapper closing tag

        echo '</div>'; // Mobile Menu closing tag

    echo '</div>'; // Menu bottom closing tag
echo '</header>';