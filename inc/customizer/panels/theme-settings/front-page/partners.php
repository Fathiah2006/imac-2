<?php

global $wp_customize;

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S SLIDER & VIDEO SECTION
========================================================*/
$wp_customize->add_section(
    'partners_sec',
    array(
        'title'    => __("Partners Section", "imac"),
        'description' => esc_html__("Customize the partners section on the frontpage that show users other brands you partner with.", "imac"),
        'priority' => 10,
        'panel' => 'frontpage_panel_id',
    )
);


/**========================================
 * SETTINGS AND CONTROLS FOR SLIDER & VIDEO SECTION
==========================================*/
// setting and control To disable Partners Section
$wp_customize->add_setting(
    'toggle_partners_sec',
    array(
        'default' => $this->defaults['toggle_partners_sec'],
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_partners_sec',
    array(
        'label' => __('Partners Section', 'imac'),
        'description' => esc_html__('Toggle the display of the Partners Section on the front page', 'imac'),
        'section' => 'partners_sec',
        'settings'   => 'toggle_partners_sec',
        'capability' => 'edit_theme_options',
    )
));
