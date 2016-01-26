<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|----------------------------------------------------------------
|   Section.
|----------------------------------------------------------------
*/
$wp_customize->add_section(
    'header_section',
    array(
        'title'         => 'Menu Appearance',
        'description'   => 'Change the header appearance.',
        'priority'      => 120
    )
);

/*
|----------------------------------------------------------------
|   Menu Background Color.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_background_color',
    array(
        'default' => '#ffffff'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'menu_background_color',
        array(
            'label'         => 'Menu background color',
            'section'       => 'header_section',
            'description'   => 'Change the menu background color.',
            'settings'      => 'menu_background_color'
        )
    )
);

/*
|----------------------------------------------------------------
|   Sub Menu Background Color.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_submenu_background_color',
    array(
        'default' => '#ffffff'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'menu_submenu_background_color',
        array(
            'label'         => 'Sub-menu background color',
            'section'       => 'header_section',
            'description'   => 'Change the background color of the sub-menu.',
            'settings'      => 'menu_submenu_background_color'
        )
    )
);

/*
|----------------------------------------------------------------
|   Text Color.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_text_color',
    array(
        'default' => '#000000'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'menu_text_color',
        array(
            'label'         => 'Menu text color',
            'section'       => 'header_section',
            'description'   => 'Change the text color for the menu items.',
            'settings'      => 'menu_text_color'
        )
    )
);

/*
|----------------------------------------------------------------
|   Menu text transform.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_text_transform',
    array(
        'default' => 'none'
    )
);

$wp_customize->add_control(
    'menu_text_transform',
    array(
        'label'         => 'Header text transform',
        'section'       => 'header_section',
        'description'   => 'Select if the menu items need to have text transformation.',
        'type'          => 'select',
        'choices'       => array(
            'none'          => 'Geen',
            'capitalize'    => 'Capitalize',
            'uppercase'     => 'Uppercase'
        )
    )
);

/*
|----------------------------------------------------------------
|   Menu Font Size.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_font_size',
    array(
        'default' => '14'
    )
);

$wp_customize->add_control(
    'menu_font_size',
    array(
        'label'         => 'Font size',
        'section'       => 'header_section',
        'description'   => 'Change the font size for the menu items.',
        'type'          => 'number'
    )
);

/*
|----------------------------------------------------------------
|   Sub-menu Text Color.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_submenu_text_color',
    array(
        'default' => '#ffffff'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'menu_submenu_text_color',
        array(
            'label'     => 'Submenu text color',
            'section'   => 'header_section',
            'description'   => 'Change the text color for the sub-menu items.',
            'settings'  => 'menu_submenu_text_color'
        )
    )
);

/*
|----------------------------------------------------------------
|   Sub-menu text transform.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_submenu_text_transform',
    array(
        'default' => 'none'
    )
);

$wp_customize->add_control(
    'menu_submenu_text_transform',
    array(
        'label'         => 'Header text transform',
        'section'       => 'header_section',
        'description'   => 'Select if the menu items need to have text transformation.',
        'type'          => 'select',
        'choices'       => array(
            'none'          => 'Geen',
            'capitalize'    => 'Capitalize',
            'uppercase'     => 'Uppercase'
        )
    )
);

/*
|----------------------------------------------------------------
|   Menu Font Size.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_submenu_font_size',
    array(
        'default' => '14'
    )
);

$wp_customize->add_control(
    'menu_submenu_font_size',
    array(
        'label'         => 'Font size',
        'section'       => 'header_section',
        'description'   => 'Change the font size for the sub-menu items.',
        'type'          => 'number'
    )
);

/*
|----------------------------------------------------------------
|   Menu Hover Color Text Color.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_hover_color',
    array(
        'default' => '#eeeeee'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'menu_hover_color',
        array(
            'label'         => 'Menu hover color',
            'section'       => 'header_section',
            'description'   => 'Change the hover text color for the menu items.',
            'settings'      => 'menu_hover_color'
        )
    )
);

/*
|----------------------------------------------------------------
|   Border.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_border',
    array(
        'default' => 'no_border'
    )
);

$wp_customize->add_control(
    'menu_border',
    array(
        'label'         => 'Menu border',
        'section'       => 'header_section',
        'description'   => 'Select if there needs to be a border on the menu.',
        'type'          => 'select',
        'choices'       => array(
            'no_border'     => 'Geen border',
            'border_top'    => 'Border top',
            'border_bottom' => 'Border bottom'
        )
    )
);

/*
|----------------------------------------------------------------
|   Menu Border Width.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_border_width',
    array(
        'default' => '1'
    )
);

$wp_customize->add_control(
    'menu_border_width',
    array(
        'label'         => 'Menu border width',
        'section'       => 'header_section',
        'description'   => 'The width for the menu border.',
        'type'          => 'number'
    )
);

/*
|----------------------------------------------------------------
|   Menu Border Color.
|----------------------------------------------------------------
*/
// Border Color
$wp_customize->add_setting(
    'menu_border_color',
    array(
        'default' => '#ffffff'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'menu_border_color',
        array(
            'label'         => 'Menu border color',
            'section'       => 'header_section',
            'description'   => 'The color for the menu border.',
            'settings'      => 'menu_border_color',
        )
    )
);

/*
|----------------------------------------------------------------
|   Mobile Menu Background Color.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'mobile_menu_background_color',
    array(
        'default' => '#000000'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'mobile_menu_background_color',
        array(
            'label'         => 'Mobile menu background color',
            'section'       => 'header_section',
            'description'   => 'Change the background color of the menu when it is in mobile position.',
            'settings'      => 'mobile_menu_background_color'
        )
    )
);

/*
|----------------------------------------------------------------
|   Mobile Menu Background Hover Color.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'mobile_menu_background_hover_color',
    array(
        'default' => '#000000'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'mobile_menu_background_hover_color',
        array(
            'label'         => 'Mobile menu background hover color',
            'section'       => 'header_section',
            'description'   => 'Change the background hover color for the mobile menu, the sub-menu items get the same color for the hover.',
            'settings'      => 'mobile_menu_background_hover_color'
        )
    )
);

/*
|----------------------------------------------------------------
|   Mobile Menu Text Color.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'mobile_menu_text_color',
    array(
        'default' => '#ffffff'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'mobile_menu_text_color',
        array(
            'label'         => 'Mobile menu text color',
            'section'       => 'header_section',
            'description'   => 'Change the text color of the mobile menu.',
            'settings'      => 'mobile_menu_text_color'
        )
    )
);

/*
|----------------------------------------------------------------
|   Mobile Menu Top Border Color.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'mobile_menu_top_border_color',
    array(
        'default' => '#000000'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'mobile_menu_top_border_color',
        array(
            'label'         => 'Mobile menu top border color',
            'section'       => 'header_section',
            'description'   => 'Change the top border color between the mobile menu items.',
            'settings'      => 'mobile_menu_top_border_color'
        )
    )
);

/*
|----------------------------------------------------------------
|   Mobile Menu Top Border Width.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'mobile_menu_top_border_width',
    array(
        'default' => ''
    )
);

$wp_customize->add_control(
    'mobile_menu_top_border_width',
    array(
        'label'         => 'Mobile menu top border width',
        'section'       => 'header_section',
        'description'   => 'Change the top border width between the mobile menu items.',
        'type'          => 'number'
    )
);

/*
|----------------------------------------------------------------
|   Mobile Menu Bottom Border Color.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'mobile_menu_bottom_border_color',
    array(
        'default' => '#000000'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'mobile_menu_bottom_border_color',
        array(
            'label'         => 'Mobile menu bottom border color',
            'section'       => 'header_section',
            'description'   => 'Change the bottom border color between the mobile menu items.',
            'settings'      => 'mobile_menu_bottom_border_color'
        )
    )
);

/*
|----------------------------------------------------------------
|   Mobile Menu Bottom Border Width.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'mobile_menu_bottom_border_width',
    array(
        'default' => ''
    )
);

$wp_customize->add_control(
    'mobile_menu_bottom_border_width',
    array(
        'label'         => 'Mobile menu bottom border width',
        'section'       => 'header_section',
        'description'   => 'Change the bottom border width between the mobile menu items.',
        'type'          => 'number'
    )
);

/*
|----------------------------------------------------------------
|   Show Contact Or Hide.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'contact_show',
    array(
        'default' => '1'
    )
);

$wp_customize->add_control(
    'contact_show',
    array(
        'label'         => 'Show contact information',
        'section'       => 'header_section',
        'description'   => 'When active the contact information is displayed.',
        'type'          => 'checkbox'
    )
);

/*
|----------------------------------------------------------------
|   Contact Information.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'contact_information',
    array(
        'default' => ''
    )
);

$wp_customize->add_control(
    'contact_information',
    array(
        'label'         => 'Menu tekst links',
        'section'       => 'header_section',
        'description'   => 'The contact information that is to be displayed.',
        'type'          => 'text'
    )
);

/*
|----------------------------------------------------------------
|   Show Social Icons Or Hide.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'social_show',
    array(
        'default' => '1'
    )
);

$wp_customize->add_control(
    'social_show',
    array(
        'label'         => 'Show social icons',
        'section'       => 'header_section',
        'description'   => 'When active the social icons are displayed.',
        'type'          => 'checkbox'
    )
);

/*
|----------------------------------------------------------------
|   Hide Contact Infromation on scroll.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'contact_hide_scroll',
    array(
        'default' => '1'
    )
);

$wp_customize->add_control(
    'contact_hide_scroll',
    array(
        'label'         => 'Hide top menu after scroll',
        'section'       => 'header_section',
        'description'   => 'Hide the top menu after scroll.',
        'type'          => 'checkbox'
    )
);

/*
|----------------------------------------------------------------
|   Hide Contact On Mobile.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'contact_hide_mobile',
    array(
        'default' => '1'
    )
);

$wp_customize->add_control(
    'contact_hide_mobile',
    array(
        'label'         => 'Hide top menu on mobile',
        'section'       => 'header_section',
        'description'   => 'When active it hides the top menu on mobile devices.',
        'type'          => 'checkbox'
    )
);

/*
|----------------------------------------------------------------
|   Background Transparent.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_background_transparent',
    array(
        'default' => '0'
    )
);

$wp_customize->add_control(
    'menu_background_transparent',
    array(
        'label'         => 'Menu background transparent',
        'section'       => 'header_section',
        'description'   => 'When active the background is transparent on start.',
        'type'          => 'checkbox'
    )
);

/*
|----------------------------------------------------------------
|   Transparent Text Color.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_transparent_text_color',
    array(
        'default' => '#000000'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'menu_transparent_text_color',
        array(
            'label'         => 'Transparent menu text color',
            'section'       => 'header_section',
            'description'   => 'Set the color for the menu text when menu is transparent.',
            'settings'      => 'menu_transparent_text_color'
        )
    )
);

/*
|----------------------------------------------------------------
|   Logo Image.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_logo'
);

$wp_customize->add_control(
    new WP_Customize_Upload_Control(
        $wp_customize,
        'menu_logo',
        array(
            'label'         => 'Menu logo',
            'section'       => 'header_section',
            'description'   => 'Set the main logo image.',
            'settings'      => 'menu_logo',
        )
    )
);

/*
|----------------------------------------------------------------
|   Transparent Logo Image.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'transparent_menu_logo'
);

$wp_customize->add_control(
    new WP_Customize_Upload_Control(
        $wp_customize,
        'transparent_menu_logo',
        array(
            'label'         => 'Transparent menu logo',
            'section'       => 'header_section',
            'description'   => 'Set the transparent logo image.',
            'settings'      => 'transparent_menu_logo',
        )
    )
);

/*
|----------------------------------------------------------------
|   Menu Position.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'menu_position',
    array(
        'default' => 'fixed'
    )
);

$wp_customize->add_control(
    'menu_position',
    array(
        'label'         => 'Menu position',
        'section'       => 'header_section',
        'description'   => 'Set the menu position.',
        'type'          => 'select',
        'choices'       => array(
            'fixed'         => 'Fixed',
            'relative'      => 'Relative',
            'absolute'      => 'Absolute',
        )
    )
);