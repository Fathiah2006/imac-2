<?php
/**======================================================
 * CREATE SECTION TO MODIFY THE FEATURED IMAGE
========================================================*/
// Featured Image section
$wp_customize->add_section(
    'single_page_featured_img',
    array(
        'title'    => __('Featured Image', 'pure-commerce'),
        'panel' => 'single_blog_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR FEATURED IMAGE
==========================================*/
// Setting and Control To disable featured image
$wp_customize->add_setting(
    'toggle_single_featured_img',
    array(
        'default' => $this->defaults['toggle_single_featured_img'],
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_single_featured_img',
    array(
        'label' => __('Featured Image', 'pure-commerce'),
        'description' => esc_html__('Use this toggle to Disable or Enable the Featured Image of single blog page.', 'pure-commerce'),
        'section'  => 'single_page_featured_img',
        'settings'   => 'toggle_single_featured_img',
    )
));