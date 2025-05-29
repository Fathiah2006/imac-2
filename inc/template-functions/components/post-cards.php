<?php




/**
 * Function to generate the card structure for each post type (e.g., service, portfolio, or default post).
 *
 * @author Emmanuel Olowu
 * @package pure-commerce
 */
// POST CARD FOR EACH DEFAULT POST TYPE
function get_blog_card($card_style = '')
{
    // Get the permalink and title once
    $post_url = get_permalink();
    $post_title = get_the_title();
    $post_type = get_post_type();

    // Determine the post type label (if searching)
    if (is_search()) {
        $post_type_label = '';
        $post_type_label = get_post_type() === 'post' ? 'Blog' : get_post_type();

        // Only display the post type if it's set
        if ($post_type_label) {
            $post_type_label_html = '<span class="post-type">' . esc_html($post_type_label) . '</span>';
        }
    }

    // Output the card HTML
?>

    <article class="card blog-card <?php echo $card_style ?>" data-aos="fade-up" data-aos-easing="ease-in-out-quart" role="listitem">
        <?php if (isset($post_type_label_html)) echo $post_type_label_html; ?>

        <div class="fit-img card-img">
            <a href="<?php echo esc_url($post_url); ?>" aria-label="<?php echo esc_attr($post_title); ?>" title="<?php echo esc_attr($post_title); ?>">
                <?php theme_post_thumb(); ?>
            </a>
        </div>

        <div class="layer">
            <div class="card-body">
                <h3 class="card-title">
                    <a href="<?php echo esc_url($post_url); ?>" aria-label="<?php echo esc_attr($post_title); ?>" title="<?php echo esc_attr($post_title); ?>" rel="bookmark">
                        <?php echo esc_html($post_title); ?>
                    </a>
                </h3>
            </div>
        </div>
    </article>
<?php }


function get_web_portal_card() {
    // Get the permalink and title once
    $post_url = get_permalink();
    $post_title = get_the_title();

    ?>
    <article class="card portal-card">
        <div class="card-img fit-img">
            <a href="<?php echo esc_url($post_url); ?>" aria-label="<?php echo esc_attr($post_title); ?>" title="<?php echo esc_attr($post_title); ?>">
                <?php theme_post_thumb(); ?>
            </a>
        </div>
    </article>
    <?php
}

function get_fp_partner_card() {
    // Get the permalink and title once
    $post_url = get_permalink();
    $post_title = get_the_title();
    
    ?>
    <div class="partner-card splide__slide">
        <div class="splide__img fit-img">
            <?php theme_post_thumb(); ?>
        </div>
    </div>
    <?php
}