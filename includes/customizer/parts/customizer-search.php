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