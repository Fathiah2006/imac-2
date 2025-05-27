<?php

/**=====================================
 * PAGE PANEL
=======================================*/
$singlePagePanel = new Clarusmod_Customize_Panel($wp_customize, 'pages_panel_id', array(
    'title' => 'Pages',
    'description' => esc_html__('Customize how pages on your site looks like. This includes contact page, about page, e.t.c', 'pure-commerce'),
    'priority' => 60,
    'panel' => 'theme_settings_panel_id',
));
$wp_customize->add_panel($singlePagePanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// Settings and control for default wordpress pages
include_once dirname(__FILE__) . '/default-pages.php';

// Settings and control for each wordpress pages
include_once dirname(__FILE__) . '/each-pages.php';