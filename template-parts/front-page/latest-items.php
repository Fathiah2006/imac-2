<?php

/**
 * Template part for displaying latest items (product/post).
 * 
 * This template displays the latest products if WooCommerce is installed.
 * If WooCommerce is not installed, it displays the latest posts.
 * 
 *  @package pure-commerce
 */

$item_type = function_exists('wc_get_products') ? "products" : "posts";
?>

<section class="<?php echo 'latest-' . $item_type; ?>">
    <?php if (function_exists('wc_get_products')) : ?>
        <div class="section-title">
            <h2 class="title">Latest Products</h2>
        </div>

        <?php display_latest_items(true); ?>

        <a class="view-more" href="<?php echo esc_url(home_url('/shop')); ?>">View More</a>

    <?php else : ?>
        <div class="section-title">
            <h2 class="title">Latest Blog Posts</h2>
        </div>

        <?php display_latest_items(); ?>

        <a class="view-more" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">View More</a>
    <?php endif; ?>
</section>