<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Header.
|-----------------------------------------------------------------------------------------------------------------------
*/

/*
|----------------------------------------------------------------
|   Section.
|----------------------------------------------------------------
*/
$wp_customize->add_section(
    'header_section',
    array(
        'title'         => 'Header',
        'description'   => 'Change the header appearance.',
        'priority'      => 120
    )
);

/*
|----------------------------------------------------------------
|   Settings.
|----------------------------------------------------------------
*/

// Show Contact Information
$wp_customize->add_setting(
    'contact_show',
    array(
        'default' => '1'
    )
);

// Show Social Icons
$wp_customize->add_setting(
    'social_show',
    array(
        'default' => '1'
    )
);

// Hide Contact Information on scroll
$wp_customize->add_setting(
    'contact_hide_scroll',
    array(
        'default' => '1'
    )
);

// Hide Contact on mobile
$wp_customize->add_setting(
    'contact_hide_mobile',
    array(
        'default' => '1'
    )
);

// Background transparent
$wp_customize->add_setting(
    'menu_background_transparent',
    array(
        'default' => '0'
    )
);

// Text color
$wp_customize->add_setting(
    'menu_text_color',
    array(
        'default' => '#000000'
    )
);

// Transparent text color
$wp_customize->add_setting(
    'menu_transparent_text_color',
    array(
        'default' => '#000000'
    )
);

// Hover color
$wp_customize->add_setting(
    'menu_hover_color',
    array(
        'default' => '#eeeeee'
    )
);

// Mobile menu text color
$wp_customize->add_setting(
    'mobile_menu_text_color',
    array(
        'default' => '#ffffff'
    )
);

// Mobile menu background color
$wp_customize->add_setting(
    'mobile_menu_background_color',
    array(
        'default' => '#000000'
    )
);

// Mobile menu background hover color
$wp_customize->add_setting(
    'mobile_menu_background_hover_color',
    array(
        'default' => '#000000'
    )
);

// Mobile menu top border color
$wp_customize->add_setting(
    'mobile_menu_top_border_color',
    array(
        'default' => '#000000'
    )
);

//  Mobile menu top border width
$wp_customize->add_setting(
    'mobile_menu_top_border_width',
    array(
        'default' => ''
    )
);

// Mobile menu bottom border color
$wp_customize->add_setting(
    'mobile_menu_bottom_border_color',
    array(
        'default' => '#000000'
    )
);

//  Mobile menu bottom border width
$wp_customize->add_setting(
    'mobile_menu_bottom_border_width',
    array(
        'default' => ''
    )
);

// Font size
$wp_customize->add_setting(
    'menu_font_size',
    array(
        'default' => '14'
    )
);

// Menu text transform
$wp_customize->add_setting(
    'menu_text_transform',
    array(
        'default' => 'none'
    )
);

// Background color
$wp_customize->add_setting(
    'menu_background_color',
    array(
        'default' => '#ffffff'
    )
);

// Contact information
$wp_customize->add_setting(
    'contact_information',
    array(
        'default' => ''
    )
);

// Logo image
$wp_customize->add_setting(
    'menu_logo'
);

// Transparent Logo image
$wp_customize->add_setting(
    'transparent_menu_logo'
);

// Menu Position
$wp_customize->add_setting(
    'menu_position',
    array(
        'default' => 'fixed'
    )
);

// Border
$wp_customize->add_setting(
    'menu_border',
    array(
        'default' => 'no_border'
    )
);

// Border width
$wp_customize->add_setting(
    'menu_border_width',
    array(
        'default' => '1'
    )
);

// Border Color
$wp_customize->add_setting(
    'menu_border_color',
    array(
        'default' => '#ffffff'
    )
);

/*
|----------------------------------------------------------------
|   Control.
|----------------------------------------------------------------
*/

// Show Contact Information
$wp_customize->add_control(
    'contact_show',
    array(
        'label'         => 'Show contact information',
        'section'       => 'header_section',
        'type'          => 'checkbox'
    )
);

// Show Social Icons
$wp_customize->add_control(
    'social_show',
    array(
        'label'         => 'Show social icons',
        'section'       => 'header_section',
        'type'          => 'checkbox'
    )
);

// Hide Contact Information on scroll
$wp_customize->add_control(
    'contact_hide_scroll',
    array(
        'label'         => 'Hide contact after scroll',
        'section'       => 'header_section',
        'type'          => 'checkbox'
    )
);

// Hide Contact on mobile
$wp_customize->add_control(
    'contact_hide_mobile',
    array(
        'label'         => 'Hide contact on mobile',
        'section'       => 'header_section',
        'type'          => 'checkbox'
    )
);

// Background transparent
$wp_customize->add_control(
    'menu_background_transparent',
    array(
        'label'         => 'Menu background transparent',
        'section'       => 'header_section',
        'type'          => 'checkbox'
    )
);

// Text color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'menu_text_color',
        array(
            'label'     => 'Menu text color',
            'section'   => 'header_section',
            'settings'  => 'menu_text_color'
        )
    )
);

// Transparent Text color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'menu_transparent_text_color',
        array(
            'label'     => 'Transparent menu text color',
            'section'   => 'header_section',
            'settings'  => 'menu_transparent_text_color'
        )
    )
);

// Hover Color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'menu_hover_color',
        array(
            'label'     => 'Menu hover color',
            'section'   => 'header_section',
            'settings'  => 'menu_hover_color'
        )
    )
);

// Mobile menu text color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'mobile_menu_text_color',
        array(
            'label'     => 'Mobile menu text color',
            'section'   => 'header_section',
            'settings'  => 'mobile_menu_text_color'
        )
    )
);

// Mobile menu background color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'mobile_menu_background_color',
        array(
            'label'     => 'Mobile menu background color',
            'section'   => 'header_section',
            'settings'  => 'mobile_menu_background_color'
        )
    )
);

// Mobile menu background hover color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'mobile_menu_background_hover_color',
        array(
            'label'     => 'Mobile menu background hover color',
            'section'   => 'header_section',
            'settings'  => 'mobile_menu_background_hover_color'
        )
    )
);

// Mobile menu top border color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'mobile_menu_top_border_color',
        array(
            'label'     => 'Mobile menu top border color',
            'section'   => 'header_section',
            'settings'  => 'mobile_menu_top_border_color'
        )
    )
);

//  Mobile menu top border width
$wp_customize->add_control(
    'mobile_menu_top_border_width',
    array(
        'label'         => 'Mobile menu top border width',
        'section'       => 'header_section',
        'description'   => 'Mobile menu item top border width',
        'type'          => 'number'
    )
);

// Mobile menu bottom border color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'mobile_menu_bottom_border_color',
        array(
            'label'     => 'Mobile menu bottom border color',
            'section'   => 'header_section',
            'settings'  => 'mobile_menu_bottom_border_color'
        )
    )
);

//  Mobile menu bottom border width
$wp_customize->add_control(
    'mobile_menu_bottom_border_width',
    array(
        'label'         => 'Mobile menu bottom border width',
        'section'       => 'header_section',
        'description'   => 'Mobile menu item bottom border width',
        'type'          => 'number'
    )
);

// Font size
$wp_customize->add_control(
    'menu_font_size',
    array(
        'label'         => 'Font size',
        'section'       => 'header_section',
        'description'   => 'Font size in px',
        'type'          => 'number'
    )
);

// Menu text transform
$wp_customize->add_control(
    'menu_text_transform',
    array(
        'label'         => 'Header text transform',
        'section'       => 'header_section',
        'type'          => 'select',
        'choices'       => array(
            'none'          => 'Geen',
            'capitalize'    => 'Capitalize',
            'uppercase'     => 'Uppercase'
        )
    )
);

// Background color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'menu_background_color',
        array(
            'label'     => 'Menu background color',
            'section'   => 'header_section',
            'settings'  => 'menu_background_color'
        )
    )
);

// Contact information
$wp_customize->add_control(
    'contact_information',
    array(
        'label'         => 'Menu tekst links',
        'section'       => 'header_section',
        'type'          => 'text'
    )
);

// Logo image
$wp_customize->add_control(
    new WP_Customize_Upload_Control(
        $wp_customize,
        'menu_logo',
        array(
            'label'      => 'Menu logo',
            'section'    => 'header_section',
            'settings'   => 'menu_logo',
        )
    )
);

// Transparent Logo image
$wp_customize->add_control(
    new WP_Customize_Upload_Control(
        $wp_customize,
        'transparent_menu_logo',
        array(
            'label'      => 'Transparent menu logo',
            'section'    => 'header_section',
            'settings'   => 'transparent_menu_logo',
        )
    )
);

// Menu position
$wp_customize->add_control(
    'menu_position',
    array(
        'label'         => 'Menu position',
        'section'       => 'header_section',
        'type'          => 'select',
        'choices'       => array(
            'fixed'         => 'Fixed',
            'relative'      => 'Relative',
            'absolute'      => 'Absolute',
        )
    )
);

// Border
$wp_customize->add_control(
    'menu_border',
    array(
        'label'         => 'Menu border',
        'section'       => 'header_section',
        'type'          => 'select',
        'choices'       => array(
            'no_border'     => 'Geen border',
            'border_top'    => 'Border top',
            'border_bottom' => 'Border bottom'
        )
    )
);

// Border width
$wp_customize->add_control(
    'menu_border_width',
    array(
        'label'         => 'Menu border width',
        'section'       => 'header_section',
        'description'   => 'Border width in px',
        'type'          => 'number'
    )
);

// Border Color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'menu_border_color',
        array(
            'label'     => 'Menu border color',
            'section'   => 'header_section',
            'settings'  => 'menu_border_color',
        )
    )
);