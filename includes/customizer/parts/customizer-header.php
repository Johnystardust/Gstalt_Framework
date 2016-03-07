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