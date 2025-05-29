<?php


function no_web_portal_post()
{
    $web_portals_query = new WP_Query(array(
        'post_type' => 'web_portals',
        'posts_per_page' => -1,
    )); ?>

    <section class="content-none flex flex-center">
        <div class="card portal-card none-card" data-aos="zoom-in" data-aos-easing="ease-in-out-quart">
            <?php if (current_user_can('administrator')) :
                if ($web_portals_query->have_posts()) : ?>
                    <label>NO SELECTED WEB PORTALS</label>
                    <span> Oops! Seems you haven't selected any of your web portals to display here yet. Please Use the button below to go to the customizer and select any web portals you want displayed here</span>
                    <?php imac_render_btn('Go To Customizer', wp_customize_url(), ''); ?>
                <?php else : ?>
                    <label>NO WEB PORTALS</label>
                    <span> Oops! Seems you do not have any web portal yet. Please go to the dashboard to add a new web portal</span>
                    <?php imac_render_btn('Add New Web Portal', admin_url('post-new.php?post_type=web_portals'), ''); ?>
                <?php endif;
            else : ?>
                <label>NO WEB PORTALS</label>
                <span> Sorry we can't show you our web portals right now, but be rest assured you can always check back to view our web portals once they are up.</span>
            <?php endif; ?>
        </div>
    </section>
<?php
}
