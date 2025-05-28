<?php

/**
 * Template part for displaying popular items (product/post).
 * 
 * This template displays the popular products if WooCommerce is installed.
 * If WooCommerce is not installed, it displays the popular posts.
 * 
 *  @package pure-commerce
 */

$item_type = function_exists('wc_get_products') ? "products" : "posts";
?>

<section class="<?php echo 'popular-' . $item_type; ?>">
    <?php if (function_exists('wc_get_products')) : ?>
        <div class="section-title">
            <h2 class="title">Popular Products</h2>
        </div>

        <?php display_popular_items(true); ?>

        <a class="view-more" href="<?php echo esc_url(home_url('/shop')); ?>">View More</a>

    <?php else : ?>
        <div class="section-title">
            <h2 class="title">Popular Blog Posts</h2>
        </div>

        <?php display_popular_items(); ?>

        <a class="view-more" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">View More</a>
    <?php endif; ?>
</section>