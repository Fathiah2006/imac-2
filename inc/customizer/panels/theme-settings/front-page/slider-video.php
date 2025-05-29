<?php

global $wp_customize;

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S SLIDER & VIDEO SECTION
========================================================*/
$wp_customize->add_section(
    'slider_video_sec',
    array(
        'title'    => __("Slide & Video Section", "imac"),
        'description' => esc_html__("Customize the slider and video banner that captures attention on your front page. This section empowers you to create an impactful first impression.", "imac"),
        'priority' => 10,
        'panel' => 'frontpage_panel_id',
    )
);


/**========================================
 * SETTINGS AND CONTROLS FOR SLIDER & VIDEO SECTION
==========================================*/
// setting and control To disable Slider & Video Section
$wp_customize->add_setting(
    'toggle_slider_video_sec',
    array(
        'default' => $this->defaults['toggle_slider_video_sec'],
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_slider_video_sec',
    array(
        'label' => __('Slider & Video', 'imac'),
        'description' => esc_html__('Toggle the display of the Slider & Video on the front page', 'imac'),
        'section' => 'slider_video_sec',
        'settings'   => 'toggle_slider_video_sec',
        'capability' => 'edit_theme_options',
    )
));

// setting for image in Hero Slider section
$wp_customize->add_setting(
    'fp_slider_img1',
    array(
        'default' => $this->defaults['fp_slider_img1'],
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'fp_slider_img1',
    array(
        'label' => __('First Image for the Slider', 'imac'),
        'description' => esc_html__('Choose an image for your slide.', 'imac'),
        'section' => 'slider_video_sec',
        'settings' => 'fp_slider_img1',
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

$wp_customize->add_setting(
    'fp_slider_img2',
    array(
        'default' => $this->defaults['fp_slider_img2'],
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'fp_slider_img2',
    array(
        'label' => __('Second Image for the Slider', 'imac'),
        'description' => esc_html__('Choose an image for your slide.', 'imac'),
        'section' => 'slider_video_sec',
        'settings' => 'fp_slider_img2',
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

$wp_customize->add_setting(
    'fp_slider_img3',
    array(
        'default' => $this->defaults['fp_slider_img3'],
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'fp_slider_img3',
    array(
        'label' => __('Third Image for the Slider', 'imac'),
        'description' => esc_html__('Choose an image for your slide.', 'imac'),
        'section' => 'slider_video_sec',
        'settings' => 'fp_slider_img3',
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

$wp_customize->add_setting(
    'fp_slider_img4',
    array(
        'default' => $this->defaults['fp_slider_img4'],
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'fp_slider_img4',
    array(
        'label' => __('Fourth Image for the Slider', 'imac'),
        'description' => esc_html__('Choose an image for your slide.', 'imac'),
        'section' => 'slider_video_sec',
        'settings' => 'fp_slider_img4',
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


// Settings for Video on the frontpage's Slider & Video Section
$wp_customize->add_setting(
    'fp_video_showcase',
    array(
        'default' => $this->defaults['fp_video_showcase'],
        'transport' => 'refresh',
        'sanitize_callback' => 'absint'
    )
);
$wp_customize->add_control(new WP_Customize_Media_Control(
    $wp_customize,
    'fp_video_showcase',
    array(
        'label' => __( 'Video', 'imac' ),
        'description' => esc_html__('Choose a video for the Slider & Video section.', 'imac'),
        'section' => 'slider_video_sec',
        'settings' => 'fp_video_showcase',
        'mime_type' => 'video',  // Required. Can be image, audio, video, application, text
        'button_labels' => array( // Optional.
            'select' => __( 'Select Video' ),
            'change' => __( 'Change Video' ),
            'remove' => __( 'Remove' ),
            'default' => __( 'Default' ),
            'placeholder' => __( 'No file selected' ),
            'frame_title' => __( 'Select Video' ),
            'frame_button' => __( 'Choose Video' ),
        )
    )
));