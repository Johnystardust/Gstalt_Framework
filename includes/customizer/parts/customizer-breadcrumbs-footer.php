<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Breadcrumbs Footer.
|-----------------------------------------------------------------------------------------------------------------------
*/
/*
|----------------------------------------------------------------
|   Section.
|----------------------------------------------------------------
*/
$wp_customize->add_section(
    'breadcrumbs_footer_section',
    array(
        'title'         => 'Yoast Breadcrumbs Footer',
        'description'   => 'Change the breadcrumbs footer appearance.',
        'priority'      => 130
    )
);

/*
|----------------------------------------------------------------
|   Settings.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'footer_breadcrumbs_enable',
    array(
        'default' => '0'
    )
);

// Padding
$wp_customize->add_setting(
    'footer_breadcrumbs_padding',
    array(
        'default' => '0 0 0 0'
    )
);

// Margin
$wp_customize->add_setting(
    'footer_breadcrumbs_margin',
    array(
        'default' => '0 0 0 0'
    )
);

// Top Background color
$wp_customize->add_setting(
    'footer_breadcrumbs_background_color',
    array(
        'default' => '#000000'
    )
);

// Top Text color
$wp_customize->add_setting(
    'footer_breadcrumbs_text_color',
    array(
        'default' => '#ffffff'
    )
);

// Top Hover color
$wp_customize->add_setting(
    'footer_breadcrumbs_hover_color',
    array(
        'default' => '#ffffff'
    )
);

// Font size
$wp_customize->add_setting(
    'footer_breadcrumbs_font_size',
    array(
        'default' => ''
    )
);

/*
|----------------------------------------------------------------
|   Control.
|----------------------------------------------------------------
*/
$wp_customize->add_control(
    'footer_breadcrumbs_enable',
    array(
        'label'         => 'Enable breadcrumbs',
        'section'       => 'breadcrumbs_footer_section',
        'description'   => 'Geef de breadcrumbs in de footer weer.',
        'type'          => 'checkbox'
    )
);

// Padding
$wp_customize->add_control(
    'footer_breadcrumbs_padding',
    array(
        'label'         => 'Footer padding',
        'section'       => 'breadcrumbs_footer_section',
        'description'   => 'Padding in px, top/right/bottom/left',
        'type'          => 'text'
    )
);

// Margin
$wp_customize->add_control(
    'footer_breadcrumbs_margin',
    array(
        'label'         => 'Footer margin',
        'section'       => 'breadcrumbs_footer_section',
        'description'   => 'Margin in px, top/right/bottom/left',
        'type'          => 'text'
    )
);

// Background color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'footer_breadcrumbs_background_color',
        array(
            'label'     => 'Footer top background color',
            'section'   => 'breadcrumbs_footer_section',
            'settings'  => 'footer_breadcrumbs_background_color',
        )
    )
);

// Top Text color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'footer_breadcrumbs_text_color',
        array(
            'label'     => 'Footer top text color',
            'section'   => 'breadcrumbs_footer_section',
            'settings'  => 'footer_breadcrumbs_text_color'
        )
    )
);

// Top Hover color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'footer_breadcrumbs_hover_color',
        array(
            'label'     => 'Footer top hover color',
            'section'   => 'breadcrumbs_footer_section',
            'settings'  => 'footer_breadcrumbs_hover_color'
        )
    )
);

// Font size
$wp_customize->add_control(
    'footer_breadcrumbs_font_size',
    array(
        'label'         => 'Footer breadcrumbs font size',
        'section'       => 'breadcrumbs_footer_section',
        'description'   => 'Font size in px.',
        'type'          => 'text'
    )
);
