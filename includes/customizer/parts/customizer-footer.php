<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Footer.
|-----------------------------------------------------------------------------------------------------------------------
*/

/*
|----------------------------------------------------------------
|   Section.
|----------------------------------------------------------------
*/
$wp_customize->add_section(
    'footer_section',
    array(
        'title'         => 'Footer',
        'description'   => 'Change the footer appearance.',
        'priority'      => 130
    )
);

/*
|----------------------------------------------------------------
|   Settings.
|----------------------------------------------------------------
*/

// Padding
$wp_customize->add_setting(
    'footer_top_padding',
    array(
        'default' => '0 0 0 0'
    )
);

// Margin
$wp_customize->add_setting(
    'footer_top_margin',
    array(
        'default' => '0 0 0 0'
    )
);

// Top Background color
$wp_customize->add_setting(
    'top_background_color',
    array(
        'default' => '#000000'
    )
);

// Top Text color
$wp_customize->add_setting(
    'top_text_color',
    array(
        'default' => '#ffffff'
    )
);

// Top Title color
$wp_customize->add_setting(
    'top_title_color',
    array(
        'default' => '#ffffff'
    )
);

// Top Hover color
$wp_customize->add_setting(
    'top_hover_color',
    array(
        'default' => '#ffffff'
    )
);

// Footer Fixed
$wp_customize->add_setting(
    'footer_fixed',
    array(
        'default' => ''
    )
);

/*
|----------------------------------------------------------------
|   Control.
|----------------------------------------------------------------
*/

// Padding
$wp_customize->add_control(
    'footer_top_padding',
    array(
        'label'         => 'Footer padding',
        'section'       => 'footer_section',
        'description'   => 'Padding in px, top/right/bottom/left',
        'type'          => 'text'
    )
);

// Margin
$wp_customize->add_control(
    'footer_top_margin',
    array(
        'label'         => 'Footer margin',
        'section'       => 'footer_section',
        'description'   => 'Margin in px, top/right/bottom/left',
        'type'          => 'text'
    )
);

// Background color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'top_background_color',
        array(
            'label'     => 'Footer top background color',
            'section'   => 'footer_section',
            'settings'  => 'top_background_color',
        )
    )
);

// Top Text color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'top_text_color',
        array(
            'label'     => 'Footer top text color',
            'section'   => 'footer_section',
            'settings'  => 'top_text_color'
        )
    )
);

// Top title color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'top_title_color',
        array(
            'label'     => 'Footer top title color',
            'section'   => 'footer_section',
            'settings'  => 'top_title_color'
        )
    )
);

// Top Hover color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'top_hover_color',
        array(
            'label'     => 'Footer top hover color',
            'section'   => 'footer_section',
            'settings'  => 'top_hover_color'
        )
    )
);

// Footer fixed
$wp_customize->add_control(
    'footer_fixed',
    array(
        'label'         => 'Footer fixed',
        'section'       => 'footer_section',
        'description'   => 'Activeer fixed footer',
        'type'          => 'checkbox'
    )
);