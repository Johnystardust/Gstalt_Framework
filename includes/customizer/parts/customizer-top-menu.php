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
    'top_menu_section',
    array(
        'title'         => 'Top Menu Options',
        'description'   => 'Change the top menu appearance.',
        'priority'      => 120
    )
);

/*
|----------------------------------------------------------------
|   Menu Background Color.
|----------------------------------------------------------------
*/
$wp_customize->add_setting(
    'top_menu_background_color',
    array(
        'default' => '#ffffff'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'top_menu_background_color',
        array(
            'label'         => 'Menu background color',
            'section'       => 'top_menu_section',
            'description'   => 'Change the menu background color.',
            'settings'      => 'top_menu_background_color'
        )
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
        'label'         => 'Contact information',
        'section'       => 'top_menu_section',
        'description'   => 'The contact information that is to be displayed.',
        'type'          => 'text'
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
        'section'       => 'top_menu_section',
        'description'   => 'When active the contact information is displayed.',
        'type'          => 'checkbox'
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
        'section'       => 'top_menu_section',
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
        'section'       => 'top_menu_section',
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
        'section'       => 'top_menu_section',
        'description'   => 'When active it hides the top menu on mobile devices.',
        'type'          => 'checkbox'
    )
);