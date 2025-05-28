<?php




function get_product_card($card_style = '') {
    global $product;
    
    // Check if the product is a valid WooCommerce product and ensure its visibility before proceeding.
    if (! is_a($product, WC_Product::class) || ! $product->is_visible()) {
        return;
    }
    
    // Get the permalink and title once
    $product_url = the_permalink();
    $product_title = the_title();
    $post_type = get_post_type();

    // Output the card HTML
    ?>

    <article <?php wc_product_class('card product-card', $product); ?> data-aos="fade-up" data-aos-easing="ease-in-out-quart" role="listitem">

        <div class="fit-img card-img product-image">
            <a href="<?php echo esc_url($product_url); ?>" aria-label="<?php echo esc_attr($product_title); ?>" title="<?php echo esc_attr($product_title); ?>">
                <?php echo woocommerce_get_product_thumbnail(); ?>
            </a>
        </div>

        <div class="card-body">
            <h2 class="card-title product-title">
                <a href="<?php echo esc_url($product_url); ?>" aria-label="<?php echo esc_attr($product_title); ?>" title="<?php echo esc_attr($product_title); ?>" rel="bookmark">
                    <?php echo esc_html($product_title); ?>
                </a>
            </h2>

            <div class="product-price">
                <?php woocommerce_template_loop_price(); ?>
            </div>
            
            <?php woocommerce_show_product_loop_sale_flash(); ?>
            
            <?php woocommerce_template_loop_add_to_cart(); ?>
        </div>
    </article>

<?php }