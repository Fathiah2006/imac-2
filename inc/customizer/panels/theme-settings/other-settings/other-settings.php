<?php

global $wp_customize;

/**=====================================
 * OTHER SETTINGS PANEL
=======================================*/

$other_settings_panel = new Clarusmod_Customize_Panel($wp_customize, 'other_settings_panel_id', array(
    'title'    => __('Other Settings', 'pure-commerce'),
    'description' => esc_html__('Other settings for your site.', 'pure-commerce'),
    'priority' => 200,
    'panel' => 'theme_settings_panel_id',
));
$wp_customize->add_panel($other_settings_panel);




/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// Button Style Section with its settings and controls.
include_once dirname(__FILE__) . '/button-style.php';

// Image Placeholder Section with its settings and controls.
include_once dirname(__FILE__) . '/image-placeholder.php';

// Background Image Section.
include_once dirname(__FILE__) . '/bg-image.php';
