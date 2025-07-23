<?php

global $imac_theme_mods;

$web_portals_ids = array(
    
);

// Custom query to retrieve team members
$web_portals_query = new WP_Query(array(
    'post_type' => 'web_portals',
    'posts_per_page' => -1,
));
?>

<section id="web-portals" class="web-portals">
    <style>
        #web-portals {
            position: relative;
            padding: 20px 0;
        }
        .web-portals-title {
            position: relative;
            gap: 25px;
            align-items: center;
            text-transform: capitalize;
            letter-spacing: 1px;
            font-size: 25px;
            font-family: 'Lato';
        }
        .web-portals-title::after {
            content: "";
            flex: 1;
            position: relative;
            border: 1px solid #CCC;
        }
        .web-portals-title h3 {
            font-weight: 100;
            margin: 0;
        }
        .web-portals-title span {
            font-weight: 800;
        }
        .web-portals-list {
            position: relative;
            gap: 15px 20px;
            padding: 20px 0 35px;
            border-bottom: 2px solid #CCC;
            justify-content: normal;
        }
        .portal-card {
            --card-size: 100px;
            width: var(--card-size);
            height: var(--card-size);
            overflow: hidden;
        }
        .portal-card .card-img {
            height: 100%;
            width: 100%;
        }
    </style>
    
    <div class="parent-container">
        <div class="web-portals-title flex">
            <h3>A Family of <span> Global Web Portals </span></h3>
        </div>

        <?php if ($web_portals_query->have_posts()) : ?>
        
        <div class="web-portals-list flex">
            <?php
                while ($web_portals_query->have_posts()) :
                    $web_portals_query->the_post();
                    echo get_web_portal_card();
                endwhile;
                wp_reset_postdata();
            ?>
        </div>

        <?php else:
            echo no_web_portal_post();
        endif; ?>
    </div>
</section>