<?php

global $wp_customize;

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S LATEST ITEMS SECTION
========================================================*/
$wp_customize->add_section(
    'latest_items_sec',
    array(
        'title'    => __("Latest Item Section", "imac-france"),
        'description' => esc_html__("This section on the front page display the latest items (product/post) on the website. If wooCommerce is installed, it will display products. if not, it will display blog post. Customize this section of the front page to your liking. ", "imac-france"),
        'priority' => 30,
        'panel' => 'frontpage_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR LATEST ITEMS SECTION
==========================================*/
// setting and control To disable Latest Items Section
$wp_customize->add_setting(
    'toggle_latest_items_sec',
    array(
        'default' => 'true',
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_latest_items_sec',
    array(
        'label' => __('Latest Items Section', 'imac-france'),
        'description' => esc_html__('Toggle the display of the Latest Items on the front page', 'imac-france'),
        'section' => 'latest_items_sec',
        'settings'   => 'toggle_latest_items_sec',
        'capability' => 'edit_theme_options',
    )
));
