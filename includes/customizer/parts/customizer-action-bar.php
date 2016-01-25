<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Action Bar.
|-----------------------------------------------------------------------------------------------------------------------
*/

/*
|----------------------------------------------------------------
|   Section.
|----------------------------------------------------------------
*/

// Action Bar
$wp_customize->add_section(
    'action_bar_section',
    array(
        'title'         => 'Action Bar',
        'description'   => 'The action bar',
        'priority'      => 160
    )
);

/*
|----------------------------------------------------------------
|   Settings.
|----------------------------------------------------------------
*/

// Title 1
$wp_customize->add_setting(
    'action_title_1',
    array(
        'default' => ''
    )
);

// Link 1
$wp_customize->add_setting(
    'action_link_1',
    array(
        'default' => ''
    )
);

// Blank 1
$wp_customize->add_setting(
    'action_blank_1',
    array(
        'default' => ''
    )
);

// Title 2
$wp_customize->add_setting(
    'action_title_2',
    array(
        'default' => ''
    )
);

// Link 2
$wp_customize->add_setting(
    'action_link_2',
    array(
        'default' => ''
    )
);

// Blank 2
$wp_customize->add_setting(
    'action_blank_2',
    array(
        'default' => ''
    )
);

// Title 3
$wp_customize->add_setting(
    'action_title_3',
    array(
        'default' => ''
    )
);

// Link 3
$wp_customize->add_setting(
    'action_link_3',
    array(
        'default' => ''
    )
);

// Blank 3
$wp_customize->add_setting(
    'action_blank_3',
    array(
        'default' => ''
    )
);

// Title 4
$wp_customize->add_setting(
    'action_title_4',
    array(
        'default' => ''
    )
);

// Link 4
$wp_customize->add_setting(
    'action_link_4',
    array(
        'default' => ''
    )
);

// Blank 4
$wp_customize->add_setting(
    'action_blank_4',
    array(
        'default' => ''
    )
);

// Background color
$wp_customize->add_setting(
    'action_bar_background_color',
    array(
        'default' => ''
    )
);

// Background image
$wp_customize->add_setting(
    'action_bar_background_image'
);

// Image align
$wp_customize->add_setting(
    'action_bar_background_align',
    array(
        'default' => ''
    )
);

// Image size
$wp_customize->add_setting(
    'action_bar_background_size',
    array(
        'default' => ''
    )
);

// Image repeat
$wp_customize->add_setting(
    'action_bar_background_repeat',
    array(
        'default' => ''
    )
);

// Text color
$wp_customize->add_setting(
    'action_button_text_color',
    array(
        'default' => '#000000'
    )
);

// Text hover color
$wp_customize->add_setting(
    'action_button_text_hover_color',
    array(
        'default' => '#000000'
    )
);

// Text uppercase
$wp_customize->add_setting(
    'action_button_text_uppercase',
    array(
        'default' => false
    )
);

// Button background color
$wp_customize->add_setting(
    'action_button_background_color',
    array(
        'default' => '#000000'
    )
);

// Button background hover color
$wp_customize->add_setting(
    'action_button_background_hover_color',
    array(
        'default' => '#000000'
    )
);

// Button border color
$wp_customize->add_setting(
    'action_button_border_color',
    array(
        'default' => '#000000'
    )
);

// Button border hover color
$wp_customize->add_setting(
    'action_button_border_hover_color',
    array(
        'default' => '#000000'
    )
);

// Button border width
$wp_customize->add_setting(
    'action_button_border_width',
    array(
        'default' => '0'
    )
);

// Margin
$wp_customize->add_setting(
    'action_bar_margin',
    array(
        'default' => ''
    )
);

// Padding
$wp_customize->add_setting(
    'action_bar_padding',
    array(
        'default' => ''
    )
);

/*
|----------------------------------------------------------------
|   Control.
|----------------------------------------------------------------
*/

// Title 1
$wp_customize->add_control(
    'action_title_1',
    array(
        'label'     => 'Title 1',
        'section'   => 'action_bar_section',
        'type'      => 'text'
    )
);

// Link 1
$wp_customize->add_control(
    'action_link_1',
    array(
        'label'     => 'Link 1',
        'section'   => 'action_bar_section',
        'type'      => 'text'
    )
);

// Link 1
$wp_customize->add_control(
    'action_blank_1',
    array(
        'label'     => 'Open blank page 1',
        'section'   => 'action_bar_section',
        'type'      => 'checkbox'
    )
);

// Title 2
$wp_customize->add_control(
    'action_title_2',
    array(
        'label'     => 'Title 2',
        'section'   => 'action_bar_section',
        'type'      => 'text'
    )
);

// Link 2
$wp_customize->add_control(
    'action_link_2',
    array(
        'label'     => 'Link 2',
        'section'   => 'action_bar_section',
        'type'      => 'text'
    )
);

// Link 2
$wp_customize->add_control(
    'action_blank_2',
    array(
        'label'     => 'Open blank page 2',
        'section'   => 'action_bar_section',
        'type'      => 'checkbox'
    )
);

// Title 3
$wp_customize->add_control(
    'action_title_3',
    array(
        'label'     => 'Title 3',
        'section'   => 'action_bar_section',
        'type'      => 'text'
    )
);

// Link 3
$wp_customize->add_control(
    'action_link_3',
    array(
        'label'     => 'Link 3',
        'section'   => 'action_bar_section',
        'type'      => 'text'
    )
);

// Link 3
$wp_customize->add_control(
    'action_blank_3',
    array(
        'label'     => 'Open blank page 3',
        'section'   => 'action_bar_section',
        'type'      => 'checkbox'
    )
);

// Title 4
$wp_customize->add_control(
    'action_title_4',
    array(
        'label'     => 'Title 4',
        'section'   => 'action_bar_section',
        'type'      => 'text'
    )
);

// Link 4
$wp_customize->add_control(
    'action_link_4',
    array(
        'label'     => 'Link 4',
        'section'   => 'action_bar_section',
        'type'      => 'text'
    )
);

// Link 4
$wp_customize->add_control(
    'action_blank_4',
    array(
        'label'     => 'Open blank page 4',
        'section'   => 'action_bar_section',
        'type'      => 'checkbox'
    )
);

// Background color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'action_bar_background_color',
        array(
            'label'     => 'Action bar background color',
            'section'   => 'action_bar_section',
            'settings'  => 'action_bar_background_color'
        )
    )
);

// Background image
$wp_customize->add_control(
    new WP_Customize_Upload_Control(
        $wp_customize,
        'action_bar_background_image',
        array(
            'label'      => 'Action bar background image',
            'section'    => 'action_bar_section',
            'settings'   => 'action_bar_background_image',
        )
    )
);

// Image align
$wp_customize->add_control(
    'action_bar_background_align',
    array(
        'label'         => 'Action bar background align',
        'section'       => 'action_bar_section',
        'type'          => 'select',
        'choices'       => array(
            'left top'      => 'Links boven',
            'left center'   => 'Links midden',
            'left bottom'   => 'Links beneden',
            'right top'     => 'Rechts boven',
            'right center'  => 'Rechts midden',
            'right bottom'  => 'Rechts beneden',
            'center top'    => 'Midden boven',
            'center center' => 'Midden midden',
            'center bottom' => 'Midden beneden',
        )
    )
);


// Image size
$wp_customize->add_control(
    'action_bar_background_size',
    array(
        'label'         => 'Action bar background size',
        'section'       => 'action_bar_section',
        'type'          => 'select',
        'choices'       => array(
            'initial'       => 'Initial',
            'auto'          => 'Auto',
            'cover'         => 'Cover',
            'contain'       => 'Contain',
        )
    )
);

// Image repeat
$wp_customize->add_control(
    'action_bar_background_repeat',
    array(
        'label'         => 'Action bar background repeat',
        'section'       => 'action_bar_section',
        'type'          => 'select',
        'choices'       => array(
            'no-repeat'     => 'No repeat',
            'repeat'        => 'Repeat',
            'repeat-x'      => 'Repeat X',
            'repeat-y'      => 'Repeat Y',
        )
    )
);


// Text color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'action_button_text_color',
        array(
            'label'     => 'Action bar text color',
            'section'   => 'action_bar_section',
            'settings'  => 'action_button_text_color'
        )
    )
);

// Text hover color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'action_button_text_hover_color',
        array(
            'label'     => 'Action bar text hover color',
            'section'   => 'action_bar_section',
            'settings'  => 'action_button_text_hover_color'
        )
    )
);

// Text uppercase
$wp_customize->add_control(
    'action_button_text_uppercase',
    array(
        'label'     => 'Text uppercase',
        'section'   => 'action_bar_section',
        'type'      => 'checkbox'
    )
);

// Button background color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'action_button_background_color',
        array(
            'label'     => 'Button background color',
            'section'   => 'action_bar_section',
            'settings'  => 'action_button_background_color'
        )
    )
);

// Button background hover color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'action_button_background_hover_color',
        array(
            'label'     => 'Button background hover color',
            'section'   => 'action_bar_section',
            'settings'  => 'action_button_background_hover_color'
        )
    )
);

// Button border color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'action_button_border_color',
        array(
            'label'     => 'Button border color',
            'section'   => 'action_bar_section',
            'settings'  => 'action_button_border_color'
        )
    )
);

// Button border hover color
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'action_button_border_hover_color',
        array(
            'label'     => 'Button border hover color',
            'section'   => 'action_bar_section',
            'settings'  => 'action_button_border_hover_color'
        )
    )
);

// Button border width
$wp_customize->add_control(
    'action_button_border_width',
    array(
        'label'         => 'Button border width',
        'section'       => 'action_bar_section',
        'type'          => 'number'
    )
);

// Margin
$wp_customize->add_control(
    'action_bar_margin',
    array(
        'label'         => 'Action bar margin',
        'section'       => 'action_bar_section',
        'type'          => 'text'
    )
);

// Padding
$wp_customize->add_control(
    'action_bar_padding',
    array(
        'label'         => 'Action bar padding',
        'section'       => 'action_bar_section',
        'type'          => 'text'
    )
);