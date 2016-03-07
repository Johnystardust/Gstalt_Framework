<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Search options.
|-----------------------------------------------------------------------------------------------------------------------
*/

/*
|----------------------------------------------------------------
|   Section.
|----------------------------------------------------------------
*/

// Copyright Footer
$wp_customize->add_section(
    'search_section',
    array(
        'title'         => 'Search options',
        'description'   => 'Change the search options.',
        'priority'      => 180
    )
);

/*
|----------------------------------------------------------------
|   Show Search Or Hide.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'search_show',
    array(
        'default' => '0'
    )
);

$wp_customize->add_control(
    'search_show',
    array(
        'label'         => 'Show search bar',
        'section'       => 'search_section',
        'description'   => 'When active the search bar is displayed.',
        'type'          => 'checkbox'
    )
);

/*
|----------------------------------------------------------------
|   Search Background Color.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'search_background_color',
    array(
        'default' => '#ffffff'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'search_background_color',
        array(
            'label'         => 'Search bar background color',
            'section'       => 'search_section',
            'description'   => 'Change the search bar background color.',
            'settings'      => 'search_background_color'
        )
    )
);

/*
|----------------------------------------------------------------
|   Placeholder text.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'placeholder_text',
    array(
        'default' => ''
    )
);

$wp_customize->add_control(
    'placeholder_text',
    array(
        'label'         => 'Placeholder text',
        'section'       => 'search_section',
        'description'   => 'The placeholder text that is to be displayed.',
        'type'          => 'text'
    )
);
