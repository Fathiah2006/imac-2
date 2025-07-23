<?php

if ( ! class_exists( 'PC_Theme_Mods' ) ) {
    class PC_Theme_Mods {
        
        /**
         * Member Variable to store the instance
         *
         * @var object instance
         */
		private static $instance;
        private static $theme_mods = null;
        private $defaults;

        
		/**
         * Singleton Pattern: Return the single instance of the class.
         *
         * @return PC_Theme_Mods
         */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}
    
        /**
         * Constructor
         */
        public function __construct() {
            $this->defaults = imac_customizer_defaults();

            add_action( 'after_setup_theme', array( $this, 'refresh_theme_mods' ) );
        }

        // Refresh the theme mods cache
        public function refresh_theme_mods() {
            self::$theme_mods = $this->get_all_theme_mods();
        }

        /**
         * Get all theme mods.
         * Returns cached value if already fetched.
         *
         * @return array
         */
        public function get_all_theme_mods() {
            
            // Fetch and Combine all settings
            $theme_mods = array_merge(
                $this->get_general_mods(),
                $this->get_header_nav_mods(),
                $this->get_footer_mods(),
                $this->get_front_page_mods(),
                $this->get_blog_page_mods(),
                $this->get_single_page_mods()
            );

            // Cache the combined mods for future use. Allow further modification via a filter
            return apply_filters( 'pure_commerce_theme_mods', $theme_mods );
        }


        /**
         * General Theme Mods (e.g., logo, background, colors)
         *
         * @return array
         */
        public function get_general_mods() {
            return array(
                'placeholder_img'           => get_theme_mod('placeholder_img'),
                'background_color'          => get_theme_mod('background_color', get_theme_support('custom-background', 'default-color')),
                'short_site_title'          => get_theme_mod('short_site_title', ''),
                'your_theme_logo'           => get_theme_mod('your_theme_logo'),
                'pure_commerce_theme_color' => get_theme_mod('pure_commerce_theme_color', '#0069c5'),
                'button_style'              => get_theme_mod('button_style', 'normal'),
            );
        }

        /**
         * Header and Navigation Mods
         *
         * @return array
         */
        public function get_header_nav_mods() {
            return array(
                'header_text_color'     => get_theme_mod('header_text_color', ''),
                'header_bg_color'       => get_theme_mod('header_bg_color', ''),
                'header_bg_image'       => get_theme_mod('header_bg_image'),
                'nav_text_transform'    => get_theme_mod('nav_text_transform', 'capitalize'),
                'title_text_transform'  => get_theme_mod('title_text_transform', 'capitalize'),
            );
        }

        /**
         * Footer Mods
         *
         * @return array
         */
        public function get_footer_mods() {
            return array(
                'footer_text_color'             => get_theme_mod('footer_text_color', ''),
                'footer_bg_color'               => get_theme_mod('footer_bg_color', ''),
                'footer_bg_image'               => get_theme_mod('footer_bg_image'),
                'toggle_footer_copyright'       => get_theme_mod('toggle_footer_copyright', true),
                'toggle_footer_dev_credits'     => get_theme_mod('toggle_footer_dev_credits', true),
                'toggle_footer_platform_info'   => get_theme_mod('toggle_footer_platform_info', true),
            );
        }

        /**
         * Front Page Mods
         *
         * @return array
         */
        public function get_front_page_mods() {
            $defaults = $this->defaults;
            return array(
                'toggle_hero_header_sec'        => get_theme_mod( 'toggle_hero_header_sec', $defaults['toggle_hero_header_sec'] ),
                'hero_header_sec_img'           => get_theme_mod( 'hero_header_sec_img', $defaults['hero_header_sec_img'] ),
                'hero_header_sec_title'         => get_theme_mod( 'hero_header_sec_title', $defaults['hero_header_sec_title'] ),
                'hero_header_sec_subtext'       => get_theme_mod( 'hero_header_sec_subtext', $defaults['hero_header_sec_subtext'] ),
                'toggle_hero_header_sec_btn'    => get_theme_mod( 'toggle_hero_header_sec_btn', $defaults['toggle_hero_header_sec_btn']),
                'hero_header_sec_btn_url'       => get_theme_mod( 'hero_header_sec_btn_url', $defaults['hero_header_sec_btn_url']),
                'hero_header_sec_btn_text'      => get_theme_mod( 'hero_header_sec_btn_text', $defaults['hero_header_sec_btn_text']),
                
                'toggle_slider_video_sec'       => get_theme_mod( 'toggle_slider_video_sec', $defaults['toggle_slider_video_sec'] ),
                'fp_slider_img1'                => get_theme_mod( 'fp_slider_img1', $defaults['fp_slider_img1'] ),
                'fp_slider_img2'                => get_theme_mod( 'fp_slider_img2', $defaults['fp_slider_img2'] ),
                'fp_slider_img3'                => get_theme_mod( 'fp_slider_img3', $defaults['fp_slider_img3'] ),
                'fp_slider_img4'                => get_theme_mod( 'fp_slider_img4', $defaults['fp_slider_img4'] ),
                'fp_video_showcase'             => wp_get_attachment_url( get_theme_mod('fp_video_showcase') ),

                'toggle_web_portals_sec'        => get_theme_mod( 'toggle_web_portals_sec', $defaults['toggle_web_portals_sec']),

                'toggle_partners_sec'           => get_theme_mod( 'toggle_partners_sec', $defaults['toggle_partners_sec'] ),

                'toggle_cat_items_sec'          => get_theme_mod( 'toggle_cat_items_sec', $defaults['toggle_cat_items_sec']) ,
                'toggle_popular_items_sec'      => get_theme_mod( 'toggle_popular_items_sec', $defaults['toggle_popular_items_sec']) ,
                'toggle_latest_items_sec'       => get_theme_mod( 'toggle_latest_items_sec', $defaults['toggle_latest_items_sec']) ,

                'toggle_frontpage_sidebar'      => get_theme_mod('toggle_frontpage_sidebar', $defaults['toggle_frontpage_sidebar']),
            );
        }

        /**
         * Blog Page Mods
         *
         * @return array
         */
        public function get_blog_page_mods() {
            return array(
                'toggle_blog_sidebar'       => get_theme_mod('toggle_blog_sidebar', true),
                'toggle_blog_page_title'    => get_theme_mod('toggle_blog_page_title', true),
                'blog_page_title'           => get_theme_mod('blog_page_title', 'Blog Posts'),
            );
        }

        /**
         * Single Page Mods
         *
         * @return array
         */
        public function get_single_page_mods() {
            return array(
                'toggle_single_sidebar'         => get_theme_mod('toggle_single_sidebar', true),
                'toggle_single_featured_img'    => get_theme_mod('toggle_single_featured_img', true),
                'toggle_single_excerpt'         => get_theme_mod('toggle_single_excerpt', true),
                'toggle_excerpt_italics'        => get_theme_mod('toggle_excerpt_italics', false),
                'toggle_share_btns'             => get_theme_mod('toggle_share_btns', true),
                'toggle_facebook_btn'           => get_theme_mod('toggle_facebook_btn', true),
                'toggle_x_btn'                  => get_theme_mod('toggle_x_btn', true),
                'toggle_whatsapp_btn'           => get_theme_mod('toggle_whatsapp_btn', true),
                'toggle_telegram_btn'           => get_theme_mod('toggle_telegram_btn', false),
                'toggle_pinterest_btn'          => get_theme_mod('toggle_pinterest_btn', false),
                'toggle_linkedin_btn'           => get_theme_mod('toggle_linkedin_btn', false),
            );
        }

        /**
         * Current wp page mods
         */
        public function get_current_page_mods( $post = '' ) {
            $pub_page_ids = imac_get_customizer_pages_ids();

            // Ensure $post is properly initialized
            if ( !isset( $post ) || !is_a( $post, 'WP_Post' ) ) {
                return array(); // Return empty array if $post is not set or is not a valid WP_Post object
            }

            // Check if $post is a page
            if ( !is_null( $post ) && $post->post_type === 'page' ) {
                
                // get the current page ID from wp global $post object
                $current_page_id = $post->ID;

                $imac_page_mods = array(
                    // default mods for pages
                    'pages_hero_header_img'         => get_theme_mod( 'pages_hero_header_img', get_imac_assets( 'img' ) . 'pages-img.jpg'),
                    'toggle_pages_featured_img'     => get_theme_mod( 'toggle_pages_featured_img', false ),
                );

                // Check if current page ID exist in $pub_page_ids array
                if ( in_array( $current_page_id, $pub_page_ids ) ) {
                    // get theme mods for the current page
                    $imac_page_mods['toggle_sidebar'] = get_theme_mod( 'toggle_sidebar_' . $current_page_id, true );
                } else {
                    // Set default values
                    $imac_page_mods['toggle_sidebar'] = true;
                }

                return apply_filters( 'imac_page_theme_mods', $imac_page_mods );
            }
        }
    }
}

/**
 * Kicking this off by object
 */
function imac_get_theme_mods() {
    return PC_Theme_Mods::get_instance()->get_all_theme_mods();
}

function imac_get_current_page_mods( $post ) {
    return PC_Theme_Mods::get_instance()->get_current_page_mods( $post );
}

global $imac_theme_mods;
$imac_theme_mods = imac_get_theme_mods();


global $current_page_theme_mods, $post;
$current_page_theme_mods = imac_get_current_page_mods( $post );