<?php

global $wp_customize;

/**===================================
 * CREATE SECTION FOR FOOTER CREDITS
=====================================*/
$wp_customize->add_section(
    'footer_credits',
    array(
        'title'    => __( 'Footer Credits', 'pure-commerce' ),
        'description' => esc_html__(''),
        'priority' => 10,
        'panel' => 'footer_panel_id',
    )
);

/**===================================
 * SETTINGS AND CONTROLS FOR NAVIGATION MENU
=====================================*/
// setting and control To disable Copyrights
$wp_customize->add_setting(
    'toggle_footer_copyright',
    array(
        'default' => $this->defaults['toggle_footer_copyright'],
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_footer_copyright',
    array(
        'label' => __( 'Copyright Info', 'pure-commerce' ),
        'description' => esc_html__( 'Toggle the display of the Copyright Info', 'pure-commerce' ),
        'section' => 'footer_credits',
        'settings'   => 'toggle_footer_copyright',
    )
));

// setting and control To disable Author Information
$wp_customize->add_setting(
    'toggle_footer_dev_credits',
    array(
        'default' => $this->defaults['toggle_footer_dev_credits'],
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_footer_dev_credits',
    array(
        'label' => __( 'Design/Development Credits', 'pure-commerce' ),
        'description' => esc_html__('Toggle the display of the Design/Development Credits', 'pure-commerce'),
        'section' => 'footer_credits',
        'settings'   => 'toggle_footer_dev_credits',
    )
));

// setting and control To disable Platform Information
$wp_customize->add_setting(
    'toggle_footer_platform_info',
    array(
        'default' => $this->defaults['toggle_footer_platform_info'],
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_footer_platform_info',
    array(
        'label' => __( 'Platform Information', 'pure-commerce' ),
        'description' => esc_html__('Toggle the display of the Platform Information', 'pure-commerce'),
        'section' => 'footer_credits',
        'settings'   => 'toggle_footer_platform_info',
    )
));
