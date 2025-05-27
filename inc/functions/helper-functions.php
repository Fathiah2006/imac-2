<?php

/**
 * pure_commerce Helper functions
 *
 * @author Emmanuel Olowu
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package pure-commerce
 */


/**
 * Generate HTML attributes for an element.
 *
 * @param string $context   Context to build a filter name.
 * @param array $attributes Optional. Attributes to merge with defaults.
 * @param array $args       Optional. Optional custom data to pass to filter.
 * @return string The final HTML attribute string.
 */
function pc_set_html_attrs($context, $attributes = array(), $args = array()) {
            
    $attributes = pc_parse_attr( $context, $attributes, $args );

    // Initialize an empty string to hold attribute output
    $attr_string = '';
            
    // Cycle through attributes, build tag attribute string.
	foreach ( $attributes as $key => $value ) {
        if (is_array($value)) {
            $value = implode(' ', $value); // Flatten arrays to space-separated values
        }

		if ( ! $value ) {
			continue;
		}

		if ( true === $value ) {
			$attr_string .= esc_html( $key ) . ' ';
		} else {
			$attr_string .= sprintf( '%s="%s" ', esc_html( $key ), esc_attr( $value ) );
		}
	}
            
    // Apply a filter for the specific context to allow customization
    $attr_string = apply_filters( "pc_attr_{$context}_output",  $attr_string, $attributes, $context, $args );

    return trim( $attr_string );
}


/**
 * Merge array of attributes with defaults, and apply contextual filter on array.
 * 
 * The contextual filter is of the form `pc_attr_{context}`.
 * 
 * @since 1.0.0
 * 
 * @param string $context    The context, to build filter name.
 * @param array  $attributes Optional. Extra attributes to merge with defaults.
 * @param array  $args       Optional. Custom data to pass to filter.
 * @return array Merged and filtered attributes.
 */
function pc_parse_attr( $context, $attributes = array(), $args = array() ) {

	$defaults = array(
		'class' => sanitize_html_class( $context ),
	);

	$attributes = wp_parse_args( $attributes, $defaults );

	// Contextual filter.
	return apply_filters( "pc_attr_{$context}", $attributes, $context, $args );
}

/**
 * FETCH POST THUMBNAIL
 */
function theme_post_thumb( $class = '' ) {
    
    global $pc_theme_mods;
    $id = get_post_thumbnail_id(); // gets the id of the current post_thumbnail (in the loop)
    $alt = get_the_title($id); // gets the post thumbnail title
    $user_img_placeholder = $pc_theme_mods['placeholder_img'];
    $default_img_placeholder = get_template_directory_uri() . '/assets/img/placeholder.jpg';

    if ( has_post_thumbnail() ) {
        the_post_thumbnail('small-thumbnail', array('class' => 'lazyload ' . $class));
    }
    else { 
        $src = $user_img_placeholder ? $user_img_placeholder : $default_img_placeholder;
        echo '<img class="lazyload" src="' . $src . '" data-src="' . $src . '" alt="' . $alt . '" />';
    }
}


/**
 * COPYRIGHT DATE IN FOOTER
 */
function pure_commerce_copyright() {
    global $wpdb;
    $copyright_dates = $wpdb->get_results("
		SELECT
		YEAR(min(post_date_gmt)) AS firstdate,
		YEAR(max(post_date_gmt)) AS lastdate
		FROM
		$wpdb->posts
		WHERE
		post_status = 'publish'
		");
    $output = '';

    if ( $copyright_dates ) {
        $copyright = "&copy; " . $copyright_dates[0]->firstdate;
        if ($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
            $copyright .= '-' . $copyright_dates[0]->lastdate;
        }
        $output = '<p>' . $copyright . ' ' . get_bloginfo ('name' ) . ' | All Rights Reserved. </p>';
    }
    return $output;
}

/**
 * Format URL To Make Sure It Has "https://"
 */
function pure_commerce_format_url( $url ) {
    // Check if the URL starts with "http://" or "https://"
    if (! empty($url) && ! preg_match('/^https?:\/\//i', $url)) :
        $url = 'https://' . $url;
    endif;

    return esc_url($url);
}

/**
 * DISPLAY A LINK TO THEME AUTHOR'S PAGE
 */
function pure_commerce_author_url( $url, $name ) {
    $url = pure_commerce_format_url( $url );

    return '<div class="theme-author-link">' .
        sprintf(
            esc_html__('Designed by: %s', 'pure-commerce'),
            '<a href="' . esc_url( $url ) . '" target="_blank" rel="noopener noreferrer" title="' . esc_attr__( $name, 'pure-commerce' ) . '">' . esc_html__( $name, 'pure-commerce' ) . '</a>'
        ) . '</div>';
}

/**
 * display wordpress link
 */
function the_wp_link() {
    return '<div class="wp-link">' .
        sprintf(
            esc_html__('Proudly Powered by: %s', 'pure-commerce'),
            '<a href="' . esc_url( 'http://wordpress.org/' ) . '" target="_blank" rel="noopener noreferrer" title="' . esc_attr__('WordPress', 'pure-commerce') . '">' . esc_html__( 'WordPress', 'pure-commerce' ) . '</a>'
        ) . '</div>';
}

/**
 * Theme's assets url
 */
function get_imac_assets( $type = '' ) {
    $assetsPath = !empty( $type ) ? 'assets/' . $type : 'assets';
    $url = trailingslashit( get_template_directory_uri() ) . $assetsPath;

    return trailingslashit( $url );
}


/**
 * create and set frontpage and blog page.
 */
function create_and_set_pages() {
    // Check if the front page and blog page are already set
    $front_page_id = get_option( 'page_on_front' );
    $blog_page_id = get_option( 'page_for_posts' );

    // Create front page if it doesn't exist
    if ( !$front_page_id ) {
        $front_page = array(
            'post_title'    => 'Home',
            'post_content'  => 'This is your front page content. You can edit it in the page editor.',
            'post_status'   => 'publish',
            'post_type'     => 'page',
        );
        $front_page_id = wp_insert_post( $front_page );
        update_post_meta( $front_page_id, '_wp_page_template', 'front-page.php' );
    }

    // Create blog page if it doesn't exist
    if ( !$blog_page_id ) {
        $blog_page = array(
            'post_title'    => 'Blog',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
        );
        $blog_page_id = wp_insert_post( $blog_page );
    }

    // Set the front page and blog page
    update_option( 'page_on_front', $front_page_id );
    update_option( 'page_for_posts', $blog_page_id );
    update_option( 'show_on_front', 'page' );
}


if (!function_exists('pc_curl_get_file_contents')) {
    function pc_curl_get_file_contents($URL) {
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $URL);
        $contents = curl_exec($c);
        curl_close($c);
    
        if ($contents) return $contents;
        else return FALSE;
    }
}