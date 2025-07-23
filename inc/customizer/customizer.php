<?php

// Load Clarusmod Customizer
include_once trailingslashit( get_template_directory() ) . 'inc/clarusmod/clarusmod.php';
include_once trailingslashit( dirname( __FILE__ ) ) . 'customizer-functions.php';

// Initialize Customizer settings
$panels_path = trailingslashit( dirname(__FILE__) ) . 'panels/panels.php';
$defaults = imac_customizer_defaults();
$pure_commerce_settings = new Initialize_Clarusmod_Customizer_Settings( $panels_path, $defaults );


include_once trailingslashit( dirname( __FILE__ ) ) . 'class-imac-theme-mods.php';