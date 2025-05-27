<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE EXCERPT
========================================================*/
// Excerpt section
$wp_customize->add_section(
    'single_page_excerpt',
    array(
        'title'    => __('Excerpt', 'pure-commerce'),
        'description' => __('Disable and Customize the looks of the excerpt on a single Blog page.', 'pure-commerce'),
        'panel' => 'single_blog_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR FEATURED IMAGE
==========================================*/
// Setting and control To disable excerpt
$wp_customize->add_setting(
    'toggle_single_excerpt',
    array(
        'default' => $this->defaults['toggle_single_excerpt'],
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_single_excerpt',
    array(
        'label' => __('Excerpt', 'pure-commerce'),
        'description' => esc_html__('Use this toggle to Disable or Enable the Excerpt on single blog page if you do not want it visible to users.', 'pure-commerce'),
        'section'  => 'single_page_excerpt',
        'settings'   => 'toggle_single_excerpt',
    )
));


// setting and control To Transform excerpt to italics
$wp_customize->add_setting(
    'toggle_excerpt_italics',
    array(
        'default' => $this->defaults['toggle_excerpt_italics'],
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_excerpt_italics',
    array(
        'label' => __('Excerpt Italics', 'pure-commerce'),
        'description' => __('Make The Excerpt to be written in Italics', 'pure-commerce'),
        'section'  => 'single_page_excerpt',
        'settings'   => 'toggle_excerpt_italics',
    )
));