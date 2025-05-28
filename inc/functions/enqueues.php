<?php

/**
 * Enqueue Pure Commerce Theme's Styles and Scripts
 * 
 * @author Emmanuel Olowu <http://eshomonu.com>
 */

if ( ! defined('ABSPATH') ) {
    exit; // Exit if accessed directly.
}

if ( !is_admin() ) {
    // Add async or defer attributes to script enqueues
    function add_async_defer_attribute( $tag, $handle )
    {
        // if script handle contains 'async' or 'defer
        if (strpos( $handle, 'async' ) !== false ) {
            $tag = str_replace( '<script ', '<script async ', $tag );
        } else if ( strpos( $handle, 'defer' ) !== false ) {
            $tag = str_replace( '<script ', '<script defer ', $tag );
        }
        return $tag;
    }

    add_filter( 'script_loader_tag', 'add_async_defer_attribute', 10, 2 );

    // Function to allow preloading of Styles
    function preload_style( $tag, $handle )
    {
        if ( strpos( $handle, 'preload' ) !== false ) {
            $preload_tag = str_replace( 'rel="stylesheet"', 'rel="preload"', $tag );
            return $preload_tag . $tag;
        }
        return $tag;
    }
    add_filter( 'style_loader_tag', 'preload_style', 10, 2 );
}

// Enqueue Pure Commerce Styles and Scripts
function pure_commerce_scripts() {
    global $pc_theme_mods;

    // Box Icons.
    wp_enqueue_style( 'preload-box-icons', get_imac_assets( 'library/boxicons/css' ) . 'boxicons.min.css' );

    // aos library
    wp_enqueue_style( 'aos', get_imac_assets( 'library/aos' ) . 'aos.css' );
    wp_enqueue_script( 'aosJS', get_imac_assets( 'library/aos' ) . 'aos.js', '', '1.0', true );

    // Main stylesheet
    wp_enqueue_style( 'main', get_imac_assets( 'css' ) . 'main.css' );
    wp_enqueue_style( 'esho', get_imac_assets( 'css/esho' ) . 'esho.css' );
    
    // Header stylesheet
    wp_enqueue_style( 'header', get_imac_assets( 'css' ) . 'header.css' );
    wp_enqueue_script( 'header-js', get_imac_assets( 'js' ) . 'header.js', '', '1.0', true ); // Header Script

    if ( is_front_page() ) {
        wp_enqueue_style( 'frontpage',     get_imac_assets( 'css' ) . 'frontpage.css' );
        if ( $pc_theme_mods['toggle_hero_header_sec'] == true ) {
            wp_enqueue_style( 'hero-header',     get_imac_assets( 'css' ) . 'hero-header.css' );
        }

        if ( $pc_theme_mods['toggle_slider_video_sec'] == true ) {
            wp_enqueue_style( 'slider-video',     get_imac_assets( 'css' ) . 'slider-video.css' );

            wp_enqueue_style( 'splideCSS', get_imac_assets( 'library/splide/dist/css' ) . 'splide.min.css' );
            wp_enqueue_script( 'splideJS', get_imac_assets( 'library/splide/dist/js' ) . 'splide.min.js', '', '4.1.3', true );
            wp_enqueue_script( 'init-splide', get_imac_assets( 'library/splide' ) . 'init-splide.js', '', '4.1.3', true );
        }
    }

    if ( is_single() || is_page() ) {
        // enqueue stylesheet for single post.
        wp_enqueue_style( 'single-css', get_imac_assets( 'css' ) . 'single.css' );
    }

    if ( is_page() ) {
        wp_enqueue_style( 'hero-header',     get_imac_assets( 'css' ) . 'hero-header.css' );
        wp_enqueue_style( 'pages',     get_imac_assets( 'css' ) . 'pages.css' );
    }

    if (is_home( 'blog' )) {
        wp_enqueue_style('blog', get_imac_assets( 'css' ) . 'blog.css');
    }

    if ( is_404() ) {
        // enqueue stylesheet for 404 page.
        wp_enqueue_style( '404-css', get_imac_assets( 'css' ) . '404.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'pure_commerce_scripts' );

