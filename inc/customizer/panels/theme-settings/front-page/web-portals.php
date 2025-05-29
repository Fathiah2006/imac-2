<?php

global $wp_customize;

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S SLIDER & VIDEO SECTION
========================================================*/
$wp_customize->add_section(
    'web_portals_sec',
    array(
        'title'    => __("Web Portals Section", "imac"),
        'description' => esc_html__("", "imac"),
        'priority' => 10,
        'panel' => 'frontpage_panel_id',
    )
);


/**========================================
 * SETTINGS AND CONTROLS FOR SLIDER & VIDEO SECTION
==========================================*/
// setting and control To disable web portals Section
$wp_customize->add_setting(
    'toggle_web_portals_sec',
    array(
        'default' => $this->defaults['toggle_web_portals_sec'],
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_web_portals_sec',
    array(
        'label' => __('Web Portals', 'imac'),
        'description' => esc_html__('Toggle the display of the Web Portals on the front page', 'imac'),
        'section' => 'web_portals_sec',
        'settings'   => 'toggle_web_portals_sec',
        'capability' => 'edit_theme_options',
    )
));