<?php


$eachPagesPanel = new Clarusmod_Customize_Panel( $wp_customize, 'each_pages', array(
    'title' => __( 'Each Pages', 'imac' ),
    'description' => esc_html__( 'You can customize each pages to your liking in the section. Make changes to each page you have on your site. You will be able to use different Hero image for a specific page, you\'ll also be able to disable sidebar on specific pages irrespective of the setting on other pages ', 'imac' ),
    'panel' => 'pages_panel_id',
));
$wp_customize->add_panel( $eachPagesPanel );


$pub_pages = imac_get_customizer_pages();

foreach ($pub_pages as $page) {
    $wp_customize->add_section(
        'pages_' . $page->post_name,
        array(
            'title'    => __($page->post_title . ' Page', 'imac'),
            'panel' => 'each_pages',
        )
    );

    // Setting and Control To Disable or Enable Sidebar on wordpress pages
    $wp_customize->add_setting(
        'toggle_sidebar_' . $page->ID,
        array(
            'default' => true,
        )
    );
    $wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
        $wp_customize,
        'toggle_sidebar_' . $page->ID,
        array(
            'label' => __( 'Sidebar', 'imac' ),
            'description' => esc_html__( 'Use this toggle to Disable or Enable the Sidebar on this page.', 'imac' ),
            'section'  => 'pages_' . $page->post_name,
            'settings'   => 'toggle_sidebar_' . $page->ID,
        )
    ));
}