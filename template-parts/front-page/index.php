<?php
/*
    Template part : Front Page
    Description : This Template Part Is Made Specifically For The Front Page.
    It Also Consists Of Other Template Parts That Brings About The Design And Looks Of The FrontPage.

    Template Parts :    1) hero Header template part
                        2) blog section template part

*/

global $imac_theme_mods;

?>

<section class="wrapper col-12">
    <?php
        if ($imac_theme_mods['toggle_hero_header_sec'] == true) {
            get_template_part('template-parts/front-page/hero-header', get_post_format());
        }

        if ($imac_theme_mods['toggle_slider_video_sec'] == true) {
            get_template_part('template-parts/front-page/slider-video', get_post_format());
        }

        if ($imac_theme_mods['toggle_web_portals_sec'] == true) {
            get_template_part('template-parts/front-page/web-portals', get_post_format());
        }

        get_template_part('template-parts/front-page/map', get_post_format());

        if ($imac_theme_mods['toggle_partners_sec'] == true) {
            get_template_part('template-parts/front-page/partners', get_post_format());
        }

        get_template_part('template-parts/front-page/showcase-section', get_post_format());

    ?>
</section>