<?php

/**
 * Pure Commerce functions and definitions
 *
 * @author Emmanuel Olowu 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package imac-france
 * @since 1.0.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'IMAC_FRANCE_THEME_VERSION', '1.0.0' );
define( 'IMAC_FRANCE_TXT_DOMAIN', 'imac-france' );
define( 'IMAC_FRANCE_THEME_SETTINGS', 'imac-france-settings' );
define( 'IMAC_FRANCE_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'IMAC_FRANCE_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

// Add Pure Commerce Theme Supports
require_once IMAC_FRANCE_THEME_DIR . 'inc/functions/theme-setup.php';

// Helper Functions
require_once IMAC_FRANCE_THEME_DIR . 'inc/functions/helper-functions.php';

// Generate Boxicons in JSON
require_once IMAC_FRANCE_THEME_DIR . 'inc/functions/generate-json-icons.php';

// Utils Functions
require_once IMAC_FRANCE_THEME_DIR . 'inc/functions/utils.php';

// Theme's Dynamic Internal CSS.
require_once IMAC_FRANCE_THEME_DIR . 'inc/functions/internal-css.php';

// Enqueue Theme's CSS and JavaScripts.
require_once IMAC_FRANCE_THEME_DIR . 'inc/functions/enqueues.php';

// LazyLoad Images.
require_once IMAC_FRANCE_THEME_DIR . 'inc/functions/lazyload.php';

// Load Clarusmod Customizer
include_once IMAC_FRANCE_THEME_DIR . 'inc/customizer/customizer.php';

// CUSTOM WP NAV
require_once IMAC_FRANCE_THEME_DIR . 'inc/functions/custom-walker-nav.php';

// WIDGET AREAS.
require_once IMAC_FRANCE_THEME_DIR . 'inc/functions/widgets.php';

// TEMPLATE FUNCTIONS
// require_once IMAC_FRANCE_THEME_DIR . 'inc/template-functions/index.php';