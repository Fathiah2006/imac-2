<?php

global $wp_customize;

/**======================================================
 * CREATE SECTION FOR ADDITIONAL SETTINGS ON THE FRONTPAGE
========================================================*/
$wp_customize->add_section(
    'other_settings',
    array(
        'title'    => __('Other Settings', 'pure-commerce'),
        'description' => esc_html__('Other settings for the front page'),
        'priority' => 200,
        'panel' => 'frontpage_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR SERVICES SECTION
==========================================*/
// setting and control for Transforming All Titles on frontpage to Uppercase or lowercase
$wp_customize->add_setting(
    'title_text_transform',
    array(
        'default' => 'capitalize',
    )
);
$wp_customize->add_control(
    'title_text_transform',
    array(
        'label' => __('Transform Title', 'pure-commerce'),
        'description' => esc_html__('Make The title to be in either all caps or all small letters'),
        'type' => 'radio',
        'section'  => 'other_settings',
        'settings'   => 'title_text_transform', //pick the setting it applies to
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        'choices' => array(
            'capitalize' => __('Capitalize', 'pure-commerce'),
            'uppercase' => __('Uppercase', 'pure-commerce'),
            'lowercase' => __('Lowercase', 'pure-commerce'),
        ),
    )
);
