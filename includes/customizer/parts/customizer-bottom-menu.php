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
    'bottom_menu_section',
    array(
        'title'         => 'Bottom Menu Options',
        'description'   => 'Change the bottom menu appearance.',
        'priority'      => 120
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
            'section'       => 'bottom_menu_section',
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
            'section'       => 'bottom_menu_section',
            'description'   => 'Set the transparent logo image.',
            'settings'      => 'transparent_menu_logo',
        )
    )
);