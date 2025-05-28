<?php

/**
 * Template part for displaying five items (product/post) per category.
 * 
 * This template displays five products per category if WooCommerce is installed.
 * If WooCommerce is not installed, it displays five posts per category. 
 * 
 *  @package pure-commerce
 */

?>




<section class="items-per-cat">
    <?php if (function_exists('wc_get_products')) :
        // WooCommerce is installed and active
        $categories = get_terms(array(
            'taxonomy' => 'product_cat',
            'orderby' => 'name',
        ));

        foreach ($categories as $category) : ?>

            <section class="<?php echo sanitize_title($category->name); ?> category-product">
                <div class="section-title">
                    <h2 class="title"> <?php echo $category->name; ?> </h2>
                </div>

                <?php display_category_items($category, true); ?>

                <a class="view-more" href="<?php echo get_term_link($category); ?>"> View More </a>
            </section>
        <?php endforeach;

    else :
        // WooCommerce not active, fetch posts
        $categories = get_categories();
        foreach ($categories as $category) : ?>

            <section class="<?php echo sanitize_title($category->name); ?> category-post">
                <div class="section-title">
                    <h2 class="title"> <?php echo $category->name; ?> </h2>
                </div>

                <?php display_category_items($category); ?>

                <a class="view-more" href="<?php echo get_category_link($category->term_id); ?>"> View More </a>
            </section>

        <?php endforeach; ?>
    <?php endif; ?>

</section>