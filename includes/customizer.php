<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Customizer.
|-----------------------------------------------------------------------------------------------------------------------
*/

add_action('customize_register', 'tvds_customizer_init');

function tvds_customizer_init($wp_customize){

    /*
    |-----------------------------------------------------------------------------------------------------------------------
    |   Header.
    |-----------------------------------------------------------------------------------------------------------------------
    */

    /*
    |----------------------------------------------------------------
    |   Section.
    |----------------------------------------------------------------
    */
    $wp_customize->add_section(
        'header_section',
        array(
            'title'         => 'Header',
            'description'   => 'Change the header appearance.',
            'priority'      => 120
        )
    );

    /*
    |----------------------------------------------------------------
    |   Settings.
    |----------------------------------------------------------------
    */

    // Show Contact Information
    $wp_customize->add_setting(
        'contact_show',
        array(
            'default' => '1'
        )
    );

    // Hide Contact Information on scroll
    $wp_customize->add_setting(
        'contact_hide_scroll',
        array(
            'default' => '1'
        )
    );

    // Background transparent
    $wp_customize->add_setting(
        'menu_background_transparent',
        array(
            'default' => '0'
        )
    );

    // Text color
    $wp_customize->add_setting(
        'menu_text_color',
        array(
            'default' => '#000000'
        )
    );

    // Transparent text color
    $wp_customize->add_setting(
        'menu_transparent_text_color',
        array(
            'default' => '#000000'
        )
    );

    // Hover color
    $wp_customize->add_setting(
        'menu_hover_color',
        array(
            'default' => '#eeeeee'
        )
    );

    // Font size
    $wp_customize->add_setting(
        'menu_font_size',
        array(
            'default' => '14'
        )
    );

    // Menu text transform
    $wp_customize->add_setting(
        'menu_text_transform',
        array(
            'default' => 'none'
        )
    );

    // Background color
    $wp_customize->add_setting(
        'menu_background_color',
        array(
            'default' => '#ffffff'
        )
    );

    // Logo image
    $wp_customize->add_setting(
        'menu_logo'
    );

    // Transparent Logo image
    $wp_customize->add_setting(
        'transparent_menu_logo'
    );

    // Menu Position
    $wp_customize->add_setting(
        'menu_position',
        array(
            'default' => 'fixed'
        )
    );

    // Border
    $wp_customize->add_setting(
        'menu_border',
        array(
            'default' => 'no_border'
        )
    );

    // Border width
    $wp_customize->add_setting(
        'menu_border_width',
        array(
            'default' => '1'
        )
    );

    // Border Color
    $wp_customize->add_setting(
        'menu_border_color',
        array(
            'default' => '#ffffff'
        )
    );

    /*
    |----------------------------------------------------------------
    |   Control.
    |----------------------------------------------------------------
    */

    // Show Contact Information
    $wp_customize->add_control(
        'contact_show',
        array(
            'label' => 'Show contact information',
            'section' => 'header_section',
            'type' => 'checkbox'
        )
    );

    // Hide Contact Information on scroll
    $wp_customize->add_control(
        'contact_hide_scroll',
        array(
            'label' => 'Hide contact after scroll',
            'section' => 'header_section',
            'type' => 'checkbox'
        )
    );

    // Background transparent
    $wp_customize->add_control(
        'menu_background_transparent',
        array(
            'label' => 'Menu background transparent',
            'section' => 'header_section',
            'type' => 'checkbox'
        )
    );

    // Text color
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'menu_text_color',
            array(
                'label'     => 'Menu text color',
                'section'   => 'header_section',
                'settings'  => 'menu_text_color'
            )
        )
    );

    // Transparent Text color
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'menu_transparent_text_color',
            array(
                'label'     => 'Transparent menu text color',
                'section'   => 'header_section',
                'settings'  => 'menu_transparent_text_color'
            )
        )
    );

    // Hover Color
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'menu_hover_color',
            array(
                'label'     => 'Menu hover color',
                'section'   => 'header_section',
                'settings'  => 'menu_hover_color'
            )
        )
    );

    // Font size
    $wp_customize->add_control(
        'menu_font_size',
        array(
            'label'         => 'Font size',
            'section'       => 'header_section',
            'description'   => 'Font size in px',
            'type'          => 'number'
        )
    );

    // Menu text transform
    $wp_customize->add_control(
        'menu_text_transform',
        array(
            'label'         => 'Header text transform',
            'section'       => 'header_section',
            'type'          => 'select',
            'choices'       => array(
                'none'          => 'Geen',
                'capitalize'    => 'Capitalize',
                'uppercase'     => 'Uppercase'
            )
        )
    );

    // Background color
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'menu_background_color',
            array(
                'label'     => 'Menu background color',
                'section'   => 'header_section',
                'settings'  => 'menu_background_color'
            )
        )
    );

    // Logo image
    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'menu_logo',
            array(
                'label'      => 'Menu logo',
                'section'    => 'header_section',
                'settings'   => 'menu_logo',
            )
        )
    );

    // Transparent Logo image
    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'transparent_menu_logo',
            array(
                'label'      => 'Transparent menu logo',
                'section'    => 'header_section',
                'settings'   => 'transparent_menu_logo',
            )
        )
    );

    // Menu position
    $wp_customize->add_control(
        'menu_position',
        array(
            'label'         => 'Menu position',
            'section'       => 'header_section',
            'type'          => 'select',
            'choices'       => array(
                'fixed'    => 'Fixed',
                'relative' => 'Relative',
                'absolute' => 'Absolute',
            )
        )
    );

    // Border
    $wp_customize->add_control(
        'menu_border',
        array(
            'label'         => 'Menu border',
            'section'       => 'header_section',
            'type'          => 'select',
            'choices'       => array(
                'no_border'     => 'Geen border',
                'border_top'    => 'Border top',
                'border_bottom' => 'Border bottom'
            )
        )
    );

    // Border width
    $wp_customize->add_control(
        'menu_border_width',
        array(
            'label'         => 'Menu border width',
            'section'       => 'header_section',
            'description'   => 'Border width in px',
            'type'          => 'number'
        )
    );

    // Border Color
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'menu_border_color',
            array(
                'label'     => 'Menu border color',
                'section'   => 'header_section',
                'settings'  => 'menu_border_color',
            )
        )
    );

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

    // Contact Telephone
    $wp_customize->add_setting(
        'contact_telephone',
        array(
            'default' => ''
        )
    );

    // Contact Email
    $wp_customize->add_setting(
        'contact_email',
        array(
            'default' => ''
        )
    );

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

    // Contact Telephone
    $wp_customize->add_control(
        'contact_telephone',
        array(
            'label'     => 'Telefoon nummer',
            'section'   => 'contact_section',
            'type'      => 'text'
        )
    );

    // Contact Email
    $wp_customize->add_control(
        'contact_email',
        array(
            'label'     => 'E-mail',
            'section'   => 'contact_section',
            'type'      => 'text'
        )
    );

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










}