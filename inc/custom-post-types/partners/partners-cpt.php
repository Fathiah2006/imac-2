<?php

// Register Custom Post Type for Partners
if (!function_exists('custom_post_type_partners')) {
    function custom_post_type_partners() {
        $labels = array(
            'name'               => __( 'Partners', 'imac'),
            'singular_name'      => __( 'Partner', 'imac'),
            'menu_name'          => __( 'Partners', 'imac'),
            'all_items'          => __( 'All Partners', 'imac'),
            'add_new'            => __('Add New Partner', 'imac'),
            'add_new_item'       => __( 'Add New Partners', 'imac'),
            'edit_item'          => __( 'Edit Partner', 'imac'),
            'new_item'           => __( 'New Partner', 'imac'),
            'view_item'          => __( 'View Partner', 'imac'),
            'search_items'       => __( 'Search Partners', 'imac'),
            'not_found'          => __( 'No Partners found', 'imac'),
            'not_found_in_trash' => __( 'No Partners found in Trash', 'imac'),
            'parent_item_colon'  => __( 'Parent Partner:', 'imac'),
        );
    
        $args = array(
            'label'               => __( 'partners', 'imac' ),
            'description'         => __( 'Partners organized by the company or brand', 'imac' ),
            'labels'              => $labels,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'query_var'           => true,
            'capability_type'     => 'post',
            'menu_icon'           => 'dashicons-calendar',
            'rewrite'             => array( 'slug' => 'partners' ),
            'supports'            => array( 'title', 'thumbnail' ),
            'hierarchical'        => false,
            'menu_position'       => 6,
            'show_in_rest' => true,
        );
    
        register_post_type('partners', $args);

        // Add custom meta boxes for partners post type
        if ( file_exists( dirname(__FILE__) . '/meta-boxes.php' ) ) {
            require dirname(__FILE__) . '/meta-boxes.php';
        }

        // Rename the Default Title Field
        function rename_partner_title_input($input) {
            global $post_type;

            if ('partners' == $post_type) {
                return __('Partner Name', 'imac'); // Change label to "Member Name"
            }

            return $input;
        }
        add_filter('enter_title_here', 'rename_partner_title_input');
    }
    
    add_action( 'init', 'custom_post_type_partners', 0 );
}

include_once IMAC_THEME_DIR . 'inc/custom-post-types/web-portal/no-web-portal.php';