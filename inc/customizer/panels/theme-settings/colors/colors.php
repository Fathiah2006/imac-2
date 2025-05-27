<?php

global $wp_customize;

/**=====================================
 * HEADER PANEL
=======================================*/
$colors_panel = new Clarusmod_Customize_Panel($wp_customize, 'colors_panel_id', array(
    'title' => 'Colors',
    'panel' => 'theme_settings_panel_id',
    'priority' => 10,
));
$wp_customize->add_panel($colors_panel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// base colors Section with its settings and controls.
include_once dirname(__FILE__) . '/base-colors.php';

// header colors Section with its settings and controls.
include_once dirname(__FILE__) . '/header-colors.php';

// footer colors Section with its settings and controls.
include_once dirname(__FILE__) . '/footer-colors.php';
