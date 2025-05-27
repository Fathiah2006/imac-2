<?php

global $wp_customize;

/**=====================================
 * HEADER PANEL
=======================================*/
$headerPanel = new Clarusmod_Customize_Panel($wp_customize, 'header_panel_id', array(
    'title' => 'Header',
    'priority' => 20,
    'panel' => 'theme_settings_panel_id',
));
$wp_customize->add_panel($headerPanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// site identity Section with its settings and controls.
include_once dirname(__FILE__) . '/site-identity.php';

// Navigation Menu Section with its settings and controls.
include_once dirname(__FILE__) . '/nav-menu.php';
