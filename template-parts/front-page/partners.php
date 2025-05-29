<?php

global $pc_theme_mods;

$partners_ids = array(
    
);

// Custom query to retrieve team members
$partners_query = new WP_Query(array(
    'post_type' => 'partners',
    'posts_per_page' => -1,
));
?>

<section id="partners" class="partners">
    <style>
        .partners-title {
            text-align: center;
        }
        .partners-title h3 {
            font-size: 24px;
            font-weight: 100;
        }
        .partners-title span {
            color: #f1a63b;
            font-weight: 700;
        }
        .partners-list {
            padding: 30px 0;
        }
        .partner-card {
            --size: 180px;
            height: auto;
        }
        .partner-card .splide__img {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        .partner-card .splide__img img {
            max-height: 100px;
            width: auto;
            max-width: var(--size);
            vertical-align: middle;
            display: inline-block;
            margin: 0 auto;
            line-height: normal;
            filter: saturate(0);
        }
    </style>
    
    <div class="parent-container">
        <div class="partners-title">
            <h3><span>Billion</span> Soul ® <span>Key Partners</span></h3>
        </div>

        <?php if ($partners_query->have_posts()) : ?>
        
        <div id="partners-list" class="partners-list splide">
            <div class="splide__track">
                <div class="splide__list">
                    <?php
                        while ($partners_query->have_posts()) :
                            $partners_query->the_post();
                            echo get_fp_partner_card();
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>

        <?php else:
            echo no_web_portal_post();
        endif; ?>
    </div>
</section>