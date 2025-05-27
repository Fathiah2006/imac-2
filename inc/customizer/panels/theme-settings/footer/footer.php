<?php

global $wp_customize;

/**=====================================
 * FOOTER PANEL
=======================================*/
$footerPanel = new Clarusmod_Customize_Panel($wp_customize, 'footer_panel_id', array(
    'title' => 'Footer',
    'priority' => 80,
    'panel' => 'theme_settings_panel_id',
));
$wp_customize->add_panel($footerPanel);

/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// site identity Section with its settings and controls.
include_once dirname(__FILE__) . '/credits.php';
