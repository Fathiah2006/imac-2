<?php

// Register Custom Post Type for Web Portals
if (!function_exists('custom_post_type_web_portals')) {
    function custom_post_type_web_portals() {
        $labels = array(
            'name'               => __( 'Web Portals', 'imac'),
            'singular_name'      => __( 'Web Portal', 'imac'),
            'menu_name'          => __( 'Web Portals', 'imac'),
            'all_items'          => __( 'All Web Portals', 'imac'),
            'add_new'            => __('Add New Web Portal', 'imac'),
            'add_new_item'       => __( 'Add New Web Portals', 'imac'),
            'edit_item'          => __( 'Edit Web Portal', 'imac'),
            'new_item'           => __( 'New Web Portal', 'imac'),
            'view_item'          => __( 'View Web Portal', 'imac'),
            'search_items'       => __( 'Search Web Portals', 'imac'),
            'not_found'          => __( 'No Web Portals found', 'imac'),
            'not_found_in_trash' => __( 'No Web Portals found in Trash', 'imac'),
            'parent_item_colon'  => __( 'Parent Web Portal:', 'imac'),
        );
    
        $args = array(
            'label'               => __( 'web_portals', 'imac' ),
            'description'         => __( 'Web Portals organized by the company or brand', 'imac' ),
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
            'rewrite'             => array( 'slug' => 'web-portals' ),
            'supports'            => array( 'title', 'thumbnail' ),
            'hierarchical'        => false,
            'menu_position'       => 6,
            'show_in_rest' => true,
        );
    
        register_post_type('web_portals', $args);

        // Add custom meta boxes for web-portals post type
        if ( file_exists( dirname(__FILE__) . '/meta-boxes.php' ) ) {
            require dirname(__FILE__) . '/meta-boxes.php';
        }

        // Rename the Default Title Field
        function rename_web_portal_title_input($input) {
            global $post_type;

            if ('web_portals' == $post_type) {
                return __('Web Portal Name', 'imac'); // Change label to "Member Name"
            }

            return $input;
        }
        add_filter('enter_title_here', 'rename_web_portal_title_input');
    }
    
    add_action( 'init', 'custom_post_type_web_portals', 0 );
}

include_once IMAC_THEME_DIR . 'inc/custom-post-types/web-portal/no-web-portal.php';