<?php

if (!function_exists('pc_customizer_defaults')) {
    /**
     * Default Values for customizer theme mods
     */
    function pc_customizer_defaults () {
        $default_values = array(
            'placeholder_img'               => get_imac_assets('img') . 'placeholder.jpg',
            'background_color'              => get_theme_support('custom-background', 'default-color'),
            'short_site_title'              => '',
            'your_theme_logo'               => '',
            'pure_commerce_theme_color'     => '#0069c5',
            'button_style'                  => 'normal',

            'header_text_color'             => '',
            'header_bg_color'               => '',
            'header_bg_image'               => '',
            'nav_text_transform'            => 'capitalize',
            'title_text_transform'          => 'capitalize',

            'footer_text_color'             => '',
            'footer_bg_color'               => '',
            'footer_bg_image'               => '',
            'toggle_footer_copyright'       => true,
            'toggle_footer_dev_credits'     => true,
            'toggle_footer_platform_info'   => true,

            'toggle_slider_video_sec'       => true,
            'fp_slider_img1'                => get_imac_assets( 'img' ) . 'placeholder.jpg',
            'fp_slider_img2'                => get_imac_assets( 'img' ) . 'placeholder.jpg',
            'fp_slider_img3'                => get_imac_assets( 'img' ) . 'placeholder.jpg',
            'fp_slider_img4'                => get_imac_assets( 'img' ) . 'placeholder.jpg',
            'fp_video_showcase'             => "https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4",

            'toggle_hero_header_sec'        => false,
            'hero_header_sec_img'           => get_imac_assets('img') . 'gadget.jpg',
            'hero_header_sec_title'         => __('Stay ahead of the curve with our forward thinking.', 'imac'),
            'hero_header_sec_subtext'       => __('We take extreme pride at being the very best at what we do.', 'imac'),
            'toggle_hero_header_sec_btn'    => true,
            'hero_header_sec_btn_url'       => '#',
            'hero_header_sec_btn_text'      => __('Get in touch', 'imac'),
            'toggle_cat_items_sec'          => true,
            'toggle_popular_items_sec'      => true,
            'toggle_latest_items_sec'       => true,

            'toggle_frontpage_sidebar'      => true,

            
            'toggle_single_sidebar'         => true,
            'toggle_single_featured_img'    => true,
            'toggle_single_excerpt'         => true,
            'toggle_excerpt_italics'        => false,
            'toggle_share_btns'             => true,
            'toggle_facebook_btn'           => true,
            'toggle_x_btn'                  => true,
            'toggle_whatsapp_btn'           => true,
            'toggle_telegram_btn'           => false,
            'toggle_pinterest_btn'          => false,
            'toggle_linkedin_btn'           => false,
        );

        return apply_filters('pc_customizer_default_values', $default_values);
    }
}


if (!function_exists('get_excluded_page_ids')) {
    /**
     * Get IDs of pages to exclude, including WooCommerce pages if active.
     *
     * @return array IDs of excluded pages.
     */
    function get_excluded_page_ids() {
        // Slugs of pages to exclude
        $excluded_slugs = ['home', 'blog', 'cart', 'checkout', 'my-account', 'shop'];

        // $excluded_ids = get_posts([
        //     'post_type'   => 'page',
        //     'post_status' => 'publish',
        //     'fields'      => 'ids',
        //     'name__in'    => $excluded_slugs, // Match pages by slug
        // ]);

        // Get IDs of excluded pages
        $excluded_ids = [];
        foreach ($excluded_slugs as $slug) {
            $page = get_page_by_path($slug, OBJECT, 'page'); // Fetch page by slug
            if ($page) {
                $excluded_ids[] = $page->ID; // Add valid page ID
            }
        }

        $blog_page = intval( get_option('page_for_posts') );
        
        if ( $blog_page && !in_array( $blog_page, $excluded_ids ) ) {
            $excluded_ids[] = $blog_page; // Add the ID directly
        }

        /**
         * Include WooCommerce-specific page IDs if WooCommerce is active
         * 
         * This will ensure WooCommerce-specific pages are excluded dynamically without relying on static slugs.
         */
        if ( function_exists( 'wc_get_page_id' ) ) {
            $wc_page_ids = [
                wc_get_page_id('cart'),
                wc_get_page_id('checkout'),
                wc_get_page_id('myaccount'),
                wc_get_page_id('shop'),
            ];

            $wc_page_ids = array_filter($wc_page_ids, function($id) {
                return $id && $id > 0; // Filter out invalid IDs
            });

            foreach ( $wc_page_ids as $page_id) {
                if (!in_array($page_id, $excluded_ids)) {
                    $excluded_ids[] = $page_id; // Add the ID directly
                }
            }
        }

        return $excluded_ids;
    }
}

if (!function_exists('pc_get_customizer_pages')) {
    /**
     * Get published pages, excluding specific ones by slug.
     *
     * @return array List of WP_Post objects.
     */
    function pc_get_customizer_pages() {

        // Get IDs of excluded pages
        $excluded_ids = get_excluded_page_ids();

        // Fetch all pages excluding these IDs
        $args = array(
            'sort_order'    => 'asc',
            'sort_column'   => 'post_title',
            'hierarchical'  => 1,
            'number'        => -1,
            'post_type'     => 'page',
            'post_status'   => 'publish',
            'exclude'       => $excluded_ids, // Exclude The Blog Page
        );
        
        $the_pages = get_pages($args);

        return $the_pages;
    }
}


if (!function_exists('pc_get_customizer_pages_ids')) {
    /**
     * Get the IDs of all published pages excluding specified ones.
     *
     * @return array List of page IDs.
     */
    function pc_get_customizer_pages_ids() {
        // Get all the IDs of Published Pages
        $pages = pc_get_customizer_pages();

        // Extract IDs using wp_list_pluck
        return wp_list_pluck($pages, 'ID');
    }
}