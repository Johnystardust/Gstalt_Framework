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
    'mobile_menu_section',
    array(
        'title'         => 'Mobile Menu Options',
        'description'   => 'Change the mobile menu appearance.',
        'priority'      => 125
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
            'section'       => 'mobile_menu_section',
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
            'section'       => 'mobile_menu_section',
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
            'section'       => 'mobile_menu_section',
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
        'section'       => 'mobile_menu_section',
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
            'section'       => 'mobile_menu_section',
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
        'section'       => 'mobile_menu_section',
        'description'   => 'Change the bottom border width between the mobile menu items.',
        'type'          => 'number'
    )
);