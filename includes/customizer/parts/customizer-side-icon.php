<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Side Icon.
|-----------------------------------------------------------------------------------------------------------------------
*/

/*
|----------------------------------------------------------------
|   Section.
|----------------------------------------------------------------
*/
$wp_customize->add_section(
    'side_icon_section',
    array(
        'title'         => 'Side Icon',
        'description'   => 'Change the side icon.',
        'priority'      => 170
    )
);

/*
|----------------------------------------------------------------
|   Settings.
|----------------------------------------------------------------
*/

// Side Img 1
$wp_customize->add_setting(
    'side_img_1',
    array(
        'default' => ''
    )
);

// Side Link 1
$wp_customize->add_setting(
    'side_link_1',
    array(
        'default' => ''
    )
);

// Side Link Open In Tab 1
$wp_customize->add_setting(
    'side_link_new_tab_1',
    array(
        'default' => '1'
    )
);

// Side Img 2
$wp_customize->add_setting(
    'side_img_2',
    array(
        'default' => ''
    )
);

// Side Link 2
$wp_customize->add_setting(
    'side_link_2',
    array(
        'default' => ''
    )
);

// Side Link Open In Tab 2
$wp_customize->add_setting(
    'side_link_new_tab_2',
    array(
        'default' => '1'
    )
);

// Side Icon top
$wp_customize->add_setting(
    'side_top',
    array(
        'default' => ''
    )
);

// Side Show Mobile
$wp_customize->add_setting(
    'side_show_mobile',
    array(
        'default' => ''
    )
);

/*
|----------------------------------------------------------------
|   Control.
|----------------------------------------------------------------
*/

// Side Img 1
$wp_customize->add_control(
    new WP_Customize_Upload_Control(
        $wp_customize,
        'side_img_1',
        array(
            'label'      => 'Img link 1',
            'section'    => 'side_icon_section',
            'settings'   => 'side_img_1',
        )
    )
);

// Side Link 1
$wp_customize->add_control(
    'side_link_1',
    array(
        'label'         => 'Url link 1',
        'section'       => 'side_icon_section',
        'type'          => 'text'
    )
);

// Side Link Open In Tab 1
$wp_customize->add_control(
    'side_link_new_tab_1',
    array(
        'label'         => 'Link 1 open in new tab',
        'section'       => 'side_icon_section',
        'type'          => 'checkbox'
    )
);

// Side Img 2
$wp_customize->add_control(
    new WP_Customize_Upload_Control(
        $wp_customize,
        'side_img_2',
        array(
            'label'      => 'Img link 2',
            'section'    => 'side_icon_section',
            'settings'   => 'side_img_2',
        )
    )
);

// Side Link 2
$wp_customize->add_control(
    'side_link_2',
    array(
        'label'         => 'Url link 2',
        'section'       => 'side_icon_section',
        'type'          => 'text'
    )
);

// Side Link Open In Tab 2
$wp_customize->add_control(
    'side_link_new_tab_2',
    array(
        'label'         => 'Link 2 open in new tab',
        'section'       => 'side_icon_section',
        'type'          => 'checkbox'
    )
);

// Side Top
$wp_customize->add_control(
    'side_top',
    array(
        'label'         => 'Title top',
        'section'       => 'side_icon_section',
        'type'          => 'number'
    )
);

// Side Show Mobile
$wp_customize->add_control(
    'side_show_mobile',
    array(
        'label'         => 'Links weergeven op mobiel',
        'section'       => 'side_icon_section',
        'type'          => 'checkbox'
    )
);