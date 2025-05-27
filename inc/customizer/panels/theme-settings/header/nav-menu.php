<?php

global $wp_customize;

/**===================================
 * CREATE SECTION FOR NAVIGATION MENU
=====================================*/
$wp_customize->add_section(
    'nav_menu',
    array(
        'title'    => __('Navigation Menu', 'pure-commerce'),
        'description' => esc_html__(''),
        'priority' => 10,
        'panel' => 'header_panel_id',
    )
);

/**===================================
 * SETTINGS AND CONTROLS FOR NAVIGATION MENU
=====================================*/
// setting and control to transform nav-menu Items to either Uppercase or lowercase
$wp_customize->add_setting(
    'nav_text_transform',
    array(
        'default' => $this->defaults['nav_text_transform'],
    )
);
$wp_customize->add_control(
    'nav_text_transform',
    array(
        'label' => __('Transform Header Menu', 'pure-commerce'),
        'description' => esc_html__('Make all items in Navigation menu to be either Uppercase or Lowercase'),
        'type' => 'radio',
        'section'  => 'nav_menu',
        'settings'   => 'nav_text_transform', //pick the setting it applies to
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        'choices' => array(
            'capitalize' => __('Capitalize'),
            'uppercase' => __('Uppercase'),
            'lowercase' => __('Lowercase'),
        ),
    )
);
