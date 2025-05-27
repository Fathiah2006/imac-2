<?php

global $wp_customize;

/**=====================================
 * FRONTPAGE PANEL
=======================================*/
$front_page_panel = new Clarusmod_Customize_Panel($wp_customize, 'frontpage_panel_id', array(
    'title' => 'Front Page',
    'description' => esc_html__('Customize how the Front Page Feels And Look'),
    'priority' => 30,
    'panel' => 'theme_settings_panel_id',
));
$wp_customize->add_panel($front_page_panel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// Hero Header Section with its settings and controls.
include_once dirname(__FILE__) . '/hero-header.php';


// Category Items Section with its settings and controls.
include_once dirname(__FILE__) . '/category-items.php';


// latest Items Section with its settings and controls.
include_once dirname(__FILE__) . '/latest-items.php';


// popular Items Section with its settings and controls.
include_once dirname(__FILE__) . '/popular-items.php';


// Sidebar settings and controls.
include_once dirname(__FILE__) . '/front-page-sidebar.php';

// "Other settings" Section with its settings and controls.
include_once dirname(__FILE__) . '/other-settings.php';
