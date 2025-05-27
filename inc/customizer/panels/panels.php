<?php

/**=====================================
 * pure commerce THEME SETTINGS PANEL
=======================================*/
global $wp_customize;

$theme_settings_panel = new Clarusmod_Customize_Panel($wp_customize, 'theme_settings_panel_id', array(
    'title' => __( 'Pure Commerce Theme Settings', 'pure-commerce' ),
    'priority' => 10,
));
$wp_customize->add_panel($theme_settings_panel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// Colors Panel
include_once dirname(__FILE__) . '/theme-settings/colors/colors.php';

// Header Panel
include_once dirname(__FILE__) . '/theme-settings/header/header.php';

// Footer Panel
include_once dirname(__FILE__) . '/theme-settings/footer/footer.php';

// Frontpage Panel
include_once dirname(__FILE__) . '/theme-settings/front-page/front-page.php';

// Single page Panel
include_once dirname(__FILE__) . '/theme-settings/single-page/index.php';

// Wp pages Panel
include_once dirname(__FILE__) . '/theme-settings/pages/index.php';

// Other settings panel
include_once dirname(__FILE__) . '/theme-settings/other-settings/other-settings.php';