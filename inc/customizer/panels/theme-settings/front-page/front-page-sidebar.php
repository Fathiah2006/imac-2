<?php

global $wp_customize;

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S SIDEBAR
========================================================*/
$wp_customize->add_section(
    'front_page_sidebar',
    array(
        'title'    => __( 'Sidebar Settings', 'pure-commerce') ,
        'description' => esc_html__('customizer the sidebar on the Front page. Visit the front page / Home  to see your changes reflect there.', 'pure-commerce'),
        'priority' => 100,
        'panel' => 'frontpage_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR FRONT PAGE SIDEBAR
==========================================*/
// Setting and Control To Disable or Enable Sidebar on the Blog page
$wp_customize->add_setting(
    'toggle_frontpage_sidebar',
    array(
        'default' => $this->defaults['toggle_frontpage_sidebar'],
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_frontpage_sidebar',
    array(
        'label' => __( 'Sidebar', 'pure-commerce' ),
        'description' => esc_html__( 'Use this toggle to Disable or Enable the Sidebar on the blog page.', 'pure-commerce' ),
        'section'  => 'front_page_sidebar',
        'settings'   => 'toggle_frontpage_sidebar',
    )
));

