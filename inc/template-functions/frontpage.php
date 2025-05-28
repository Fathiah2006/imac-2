<?php
/**
 * Functions for rendering specific items on the front page or category pages.
 *
 * @package pure-commerce
 */


/**
 * Displays products or posts in a category with a specified limit.
 *
 * @param WP_Term $category The category object.
 * @param bool $is_woo_commerce Whether WooCommerce is active (defaults to false).
 */
function display_category_items($category, $is_woo_commerce = false)
{
    $args = [
        'posts_per_page' => 5,
        'orderby' => 'date',
        'tax_query' => $is_woo_commerce ? [
            [
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => $category->slug,
            ],
        ] : [],
        'cat' => !$is_woo_commerce ? $category->term_id : '',
        'post_type' => $is_woo_commerce ? 'product' : 'post',
    ];

    $query = new WP_Query($args);
    if ($query->have_posts()) {
        echo '<div class="' . sanitize_title($category->name) . ' category-items feed-group grid" role="list">';
        while ($query->have_posts()) {
            $query->the_post();
            if ($is_woo_commerce) {
                // Output product card here
                wc_get_template_part('content', 'product');
            } else {
                // Output post card here
                echo get_blog_card();
            }
        }
        echo '</div>';
    }
    wp_reset_postdata();
}


/**
 * Displays the latest posts or products (based on WooCommerce status).
 *
 * @param bool $is_woo_commerce Whether WooCommerce is active (defaults to false).
 */
function display_latest_items($is_woo_commerce = false) {
    $args = array(
        'posts_per_page' => 5,
        'post_type' => $is_woo_commerce ? 'product' : 'post',
        'order' => 'DESC',
        'orderby' => 'date',
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="latest-items feed-group grid" role="list">';
        while ($query->have_posts()) {
            $query->the_post();
            if ($is_woo_commerce) {
                // Output WooCommerce product card
                // wc_get_template_part('content', 'product');
            } else {
                // Output blog post card
                echo get_blog_card();
            }
        }
        echo '</div>';
    }
    wp_reset_postdata();
}

/**
 * Displays popular posts or products (based on WooCommerce status).
 *
 * @param bool $is_woo_commerce Whether WooCommerce is active (defaults to false).
 */
function display_popular_items($is_woo_commerce = false) {
    $args = array(
        'posts_per_page' => 5,
        'post_type' => $is_woo_commerce ? 'product' : 'post',
        'order' => 'DESC',
        // 'orderby' => 'comment_count', // Order by most commented (for posts)
        'meta_key' => $is_woo_commerce ? 'total_sales' : '',
        'orderby' => $is_woo_commerce ? 'meta_value_num' : 'date',
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="popular-items feed-group grid">';
        while ($query->have_posts()) {
            $query->the_post();
            if ($is_woo_commerce) {
                // Output WooCommerce product card
                // wc_get_template_part('content', 'product');
            } else {
                // Output blog post card
                echo get_blog_card();
            }
        }
        echo '</div>';
    }
    wp_reset_postdata();
}
