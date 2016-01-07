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
    |   Sections.
    |-----------------------------------------------------------------------------------------------------------------------
    */

    // Footer
    $wp_customize->add_section(
        'footer_section',
        array(
            'title'         => 'Footer',
            'description'   => 'Change the footer appearance.',
            'priority'      => 120
        )
    );

    // Copyright Footer
    $wp_customize->add_section(
        'copyright_section',
        array(
            'title'         => 'Copyright footer',
            'description'   => 'Change the copyright footer appearance.',
            'priority'      => 130
        )
    );

    /*
    |-----------------------------------------------------------------------------------------------------------------------
    |   Settings.
    |-----------------------------------------------------------------------------------------------------------------------
    */

    /*
    |----------------------------------------------------------------
    |   Footer
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
    |   Copyright footer
    |----------------------------------------------------------------
    */
    // Copyright text
    $wp_customize->add_setting(
        'copyright_text',
        array(
            'default' => 'Pas copyright text aan in de customizer.'
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
    |-----------------------------------------------------------------------------------------------------------------------
    |   Control.
    |-----------------------------------------------------------------------------------------------------------------------
    */

    /*
    |----------------------------------------------------------------
    |   Footer top.
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
    |----------------------------------------------------------------
    |   Copyright Footer.
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

    // Social Facebook
    $wp_customize->add_control(
        'social_facebook',
        array(
            'label'     => 'Social Facebook',
            'section'   => 'copyright_section',
            'type'      => 'text'
        )
    );

    // Social Google
    $wp_customize->add_control(
        'social_google',
        array(
            'label'     => 'Social Google',
            'section'   => 'copyright_section',
            'type'      => 'text'
        )
    );

    // Social Pinterest
    $wp_customize->add_control(
        'social_pinterest',
        array(
            'label'     => 'Social Pinterest',
            'section'   => 'copyright_section',
            'type'      => 'text'
        )
    );

    // Social Twitter
    $wp_customize->add_control(
        'social_twitter',
        array(
            'label'     => 'Social Twitter',
            'section'   => 'copyright_section',
            'type'      => 'text'
        )
    );

    // Social LinkedIn
    $wp_customize->add_control(
        'social_linkedin',
        array(
            'label'     => 'Social LinkedIn',
            'section'   => 'copyright_section',
            'type'      => 'text'
        )
    );

    // Social Instagram
    $wp_customize->add_control(
        'social_instagram',
        array(
            'label'     => 'Social Instagram',
            'section'   => 'copyright_section',
            'type'      => 'text'
        )
    );

    // Social Youtube
    $wp_customize->add_control(
        'social_youtube',
        array(
            'label'     => 'Social YouTube',
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
}