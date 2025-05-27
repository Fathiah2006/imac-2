<?php

global $wp_customize;

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S HERO HEADER SECTION
========================================================*/
$wp_customize->add_section(
    'hero_header_Sec',
    array(
        'title'    => __("Hero Header Section", "pure-commerce"),
        'description' => esc_html__("Customize the stunning hero header that captures attention on your front page. This section empowers you to control the hero header's visibility, background image, main title, subtext, and button settings. Create an impactful first impression with your website's hero section.", "pure-commerce"),
        'priority' => 10,
        'panel' => 'frontpage_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR HERO HEADER SECTION
==========================================*/
// setting and control To disable Hero Header Section
$wp_customize->add_setting(
    'toggle_hero_header_sec',
    array(
        'default' => $this->defaults['toggle_hero_header_sec'],
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_hero_header_sec',
    array(
        'label' => __('Hero Header', 'pure-commerce'),
        'description' => esc_html__('Toggle the display of the Hero Header on the front page', 'pure-commerce'),
        'section' => 'hero_header_Sec',
        'settings'   => 'toggle_hero_header_sec',
        'capability' => 'edit_theme_options',
    )
));


// setting for image in Hero Header section
$wp_customize->add_setting(
    'hero_header_sec_img',
    array(
        'default' => $this->defaults['hero_header_sec_img'],
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'hero_header_sec_img',
    array(
        'label' => __('Hero Header Background Image', 'pure-commerce'),
        'description' => esc_html__('Choose the background image for your hero header.', 'pure-commerce'),
        'section' => 'hero_header_Sec',
        'settings' => 'hero_header_sec_img',
        'button_labels' => array( // Optional.
            'select' => __('Select Image'),
            'change' => __('Change Image'),
            'remove' => __('Remove'),
            'default' => __('Default'),
            'frame_title' => __('Select Image'),
            'frame_button' => __('Choose Image'),
        )
    )
));


// setting and control To Change Hero Header TitLE
$wp_customize->add_setting(
    'hero_header_sec_title', //give it an ID
    array(
        'capability' => 'edit_theme_options',
        'default' => $this->defaults['hero_header_sec_title'],
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'hero_header_sec_title',
    array(
        'label' => __("Title", 'pure-commerce'),
        'description' => __('Customize the main title or headline for your Hero Header.', 'pure-commerce'),
        'settings' => 'hero_header_sec_title',
        'section' => 'hero_header_Sec',
        'type' => 'text',
    )
);


// setting and control To Change Hero Header Subtext
$wp_customize->add_setting(
    'hero_header_sec_subtext',
    array(
        'default' => $this->defaults['hero_header_sec_subtext'],
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'hero_header_sec_subtext',
    array(
        'label' => __("Hero Header Subtext", 'pure-commerce'),
        'description' => __('Add a brief description or subtext for your Hero Header.', 'pure-commerce'),
        'settings' => 'hero_header_sec_subtext',
        'section' => 'hero_header_Sec',
        'type' => 'text',
    )
);


// Setting and Control to change Disable or Enable Hero Header section's Button
$wp_customize->add_setting(
    'toggle_hero_header_sec_btn',
    array(
        'default' => $this->defaults['toggle_hero_header_sec_btn'],
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_hero_header_sec_btn',
    array(
        'label' => "Hero Header Button",
        'description' => __('Disable or Enable a button on the Hero Header', 'pure-commerce'),
        'section' => 'hero_header_Sec',
        'settings' => 'toggle_hero_header_sec_btn',
    )
));


// Setting and Control to add Url for the Hero Header Section Button
$wp_customize->add_setting(
    'hero_header_sec_btn_url', //give it an ID
    array(
        'default' => $this->defaults['hero_header_sec_btn_url'],
        'sanitize_callback' => 'clarusmod_url_sanitization',
    )
);
$wp_customize->add_control(new Clarusmod_Url_Custom_Control(
    $wp_customize,
    'hero_header_sec_btn_url',
    array(
        'label' => __("Hero Header Button Url", 'pure-commerce'),
        'description' => __('Enter The URL for the Button on the Hero Header.'),
        'section' => 'hero_header_Sec',
        'settings' => 'hero_header_sec_btn_url',
    )
));


// setting and control To Change the Button Text
$wp_customize->add_setting(
    'hero_header_sec_btn_text', //give it an ID
    array(
        'default' => $this->defaults['hero_header_sec_btn_text'],
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'hero_header_sec_btn_text',
    array(
        'label' => __("Button Text", 'pure-commerce'),
        'description' => __('Customize the text displayed on the Hero Header button', 'pure-commerce'),
        'settings' => 'hero_header_sec_btn_text',
        'section' => 'hero_header_Sec',
        'type' => 'text',
    )
);