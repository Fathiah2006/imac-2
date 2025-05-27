<?php

global $wp_customize;

// Add section and controls to color panel
$wp_customize->add_section(
    'footer_color_sections',
    array(
        'title' => __('Footer Colors', 'pure-commerce'),
        'priority'    => 40,
        'capability'  => 'edit_theme_options',
        'panel' => 'colors_panel_id',
    )
);

/* ++++++++++++++++++++++++++++++
	CUSTOMIZER SETTINGS 
	+++++++++++++++++++++++++++++++++ */
$wp_customize->add_setting(
    'footer_bg_color',
    array(
        'default' => $this->defaults['footer_bg_color'],
    )
);

$wp_customize->add_setting(
    'footer_text_color',
    array(
        'default' => $this->defaults['footer_text_color'],
    )
);

// add a setting for the footer's background Image //
$wp_customize->add_setting( 'footer_bg_image' );


/* ++++++++++++++++++++++++++++++++++++++++
	CUSTOMIZER CONTROLS FOR THE SETTINGS ABOVE 
	+++++++++++++++++++++++++++++++++++++++++ */

// control for footer's background color //
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'footer_bg_color',
        array(
            'label'      => __( 'Footer Background color', 'pure-commerce' ),
            'section'    => 'footer_color_sections',
            'settings'   => 'footer_bg_color',
        )
    )
);

// control for footer's Text color //
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'footer_text_color',
        array(
            'label'      => __( 'Footer Text Color', 'pure-commerce' ),
            'section'    => 'footer_color_sections',
            'settings'   => 'footer_text_color'
        )
    )
);

// Control for footer's background image //
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'footer_bg_image',

        array(
            'label' => __( 'Upload Footer Background Image', 'pure-commerce' ),
            'section' => 'footer_color_sections',
            'settings' => 'footer_bg_image',
        )
    )
);
