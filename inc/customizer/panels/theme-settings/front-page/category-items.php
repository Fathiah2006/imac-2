<?php

global $wp_customize;

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S CATEGORY ITEMS SECTION
========================================================*/
$wp_customize->add_section(
    'cat_items_sec',
    array(
        'title'    => __("Category Item Section", "imac-france"),
        'description' => esc_html__("This section on the front page display 5 items (product/post) per category. If wooCommerce is installed, it will display products. if not, it will display blog post. Customize this section of the front page to your liking. ", "imac-france"),
        'priority' => 20,
        'panel' => 'frontpage_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR CATEGORY ITEMS SECTION
==========================================*/
// setting and control To disable Category Items Section
$wp_customize->add_setting(
    'toggle_cat_items_sec',
    array(
        'default' => 'true',
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_cat_items_sec',
    array(
        'label' => __('Category Items Section', 'imac-france'),
        'description' => esc_html__('Toggle the display of the Category Items on the front page', 'imac-france'),
        'section' => 'cat_items_sec',
        'settings'   => 'toggle_cat_items_sec',
        'capability' => 'edit_theme_options',
    )
));

