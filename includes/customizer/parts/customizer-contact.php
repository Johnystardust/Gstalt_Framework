<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Contact information.
|-----------------------------------------------------------------------------------------------------------------------
*/

/*
|----------------------------------------------------------------
|   Section.
|----------------------------------------------------------------
*/

// Copyright Footer
$wp_customize->add_section(
    'contact_section',
    array(
        'title'         => 'Contact information',
        'description'   => 'Change the contact information.',
        'priority'      => 150
    )
);

/*
|----------------------------------------------------------------
|   Settings.
|----------------------------------------------------------------
*/

// Social Facebook
$wp_customize->add_setting(
    'social_facebook',
    array(
        'default' => ''
    )
);

// Social Google
$wp_customize->add_setting(
    'social_google',
    array(
        'default' => ''
    )
);

// Social Pinterest
$wp_customize->add_setting(
    'social_pinterest',
    array(
        'default' => ''
    )
);

// Social Twitter
$wp_customize->add_setting(
    'social_twitter',
    array(
        'default' => ''
    )
);

// Social LinkedIn
$wp_customize->add_setting(
    'social_linkedin',
    array(
        'default' => ''
    )
);

// Social Instagram
$wp_customize->add_setting(
    'social_instagram',
    array(
        'default' => ''
    )
);

// Social Youtube
$wp_customize->add_setting(
    'social_youtube',
    array(
        'default' => ''
    )
);

/*
|----------------------------------------------------------------
|   Control.
|----------------------------------------------------------------
*/

// Social Facebook
$wp_customize->add_control(
    'social_facebook',
    array(
        'label'     => 'Social Facebook',
        'section'   => 'contact_section',
        'type'      => 'text'
    )
);

// Social Google
$wp_customize->add_control(
    'social_google',
    array(
        'label'     => 'Social Google',
        'section'   => 'contact_section',
        'type'      => 'text'
    )
);

// Social Pinterest
$wp_customize->add_control(
    'social_pinterest',
    array(
        'label'     => 'Social Pinterest',
        'section'   => 'contact_section',
        'type'      => 'text'
    )
);

// Social Twitter
$wp_customize->add_control(
    'social_twitter',
    array(
        'label'     => 'Social Twitter',
        'section'   => 'contact_section',
        'type'      => 'text'
    )
);

// Social LinkedIn
$wp_customize->add_control(
    'social_linkedin',
    array(
        'label'     => 'Social LinkedIn',
        'section'   => 'contact_section',
        'type'      => 'text'
    )
);

// Social Instagram
$wp_customize->add_control(
    'social_instagram',
    array(
        'label'     => 'Social Instagram',
        'section'   => 'contact_section',
        'type'      => 'text'
    )
);

// Social Youtube
$wp_customize->add_control(
    'social_youtube',
    array(
        'label'     => 'Social YouTube',
        'section'   => 'contact_section',
        'type'      => 'text'
    )
);