<?php

global $pc_theme_mods;
$main_width = ($pc_theme_mods['toggle_frontpage_sidebar'] == true) ? 'col-9' : 'col-12';
?>

<section id="showcase" class="showcase">
    <div class="parent-container flex layout">
        <div class="main <?php echo $main_width; ?>">
            <?php

            if ( $pc_theme_mods['toggle_cat_items_sec'] == true ) {
                get_template_part('template-parts/front-page/items-per-cat', get_post_format());
            }
            
            if ( $pc_theme_mods['toggle_latest_items_sec'] == true ) {
                get_template_part('template-parts/front-page/latest-items', get_post_format());
            }

            if ( $pc_theme_mods['toggle_popular_items_sec'] == true ) {
                get_template_part('template-parts/front-page/popular-items', get_post_format());
            }
            
            ?>

        </div>

        <?php if ($pc_theme_mods['toggle_frontpage_sidebar']) { ?>
            <div class="side col-3">
                <?php get_sidebar(); ?>
            </div>
        <?php } ?>

    </div>
</section>