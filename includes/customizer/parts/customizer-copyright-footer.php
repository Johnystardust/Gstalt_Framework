<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Copyright footer.
|-----------------------------------------------------------------------------------------------------------------------
*/

/*
|----------------------------------------------------------------
|   Section.
|----------------------------------------------------------------
*/

// Copyright Footer
$wp_customize->add_section(
    'copyright_section',
    array(
        'title'         => 'Copyright footer',
        'description'   => 'Change the copyright footer appearance.',
        'priority'      => 140
    )
);

/*
|----------------------------------------------------------------
|   Settings.
|----------------------------------------------------------------
*/

// Copyright text
$wp_customize->add_setting(
    'copyright_text',
    array(
        'default' => 'Pas copyright text aan in de customizer.'
    )
);

// Padding
$wp_customize->add_setting(
    'footer_bottom_padding',
    array(
        'default' => '0 0 0 0'
    )
);

// Margin
$wp_customize->add_setting(
    'footer_bottom_margin',
    array(
        'default' => '0 0 0 0'
    )
);

// Bottom Background color
$wp_customize->add_setting(
    'bottom_background_color',
    array(
        'default' => '#000000'
    )
);

// Bottom Text color
$wp_customize->add_setting(
    'bottom_text_color',
    array(
        'default' => '#ffffff'
    )
);

// Bottom Hover color
$wp_customize->add_setting(
    'bottom_hover_color',
    array(
        'default' => '#000000'
    )
);

/*
|----------------------------------------------------------------
|   Control.
|----------------------------------------------------------------
*/

// Copyright text
$wp_customize->add_control(
    'copyright_text',
    array(
        'label'     => 'Copyright text',
        'section'   => 'copyright_section',
        'type'      => 'text'
    )
);

// Padding
$wp_customize->add_control(
    'footer_bottom_padding',
    array(
        'label'         => 'Footer bottom padding',
        'section'       => 'copyright_section',
        'description'   => 'Padding in px, top/right/bottom/left',
        'type'          => 'text'
    )
);

// Margin
$wp_customize->add_control(
    'footer_bottom_margin',
    array(
        'label'         => 'Footer bottom margin',
        'section'       => 'copyright_section',
        'description'   => 'Margin in px, top/right/bottom/left',
        'type'          => 'text'
    )
);

// Bottom Background color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'bottom_background_color',
        array(
            'label'     => 'Footer bottom background color',
            'section'   => 'copyright_section',
            'settings'  => 'bottom_background_color'
        )
    )
);

// Bottom Text color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'bottom_text_color',
        array(
            'label'     => 'Footer bottom text color',
            'section'   => 'copyright_section',
            'settings'  => 'bottom_text_color'
        )
    )
);

// Bottom Hover color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'bottom_hover_color',
        array(
            'label'     => 'Footer bottom hover color',
            'section'   => 'copyright_section',
            'settings'  => 'bottom_hover_color'
        )
    )
);