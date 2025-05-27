<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE SHARE BUTTON
========================================================*/
// Share Buttons section
$wp_customize->add_section(
    'share_btns',
    array(
        'title'    => __('Share Buttons', 'pure-commerce'),
        'panel' => 'single_blog_panel_id',
        'description' => __('Enable Social Media share buttons. This will allow users to share a blog post.', 'pure-commerce'),
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR SHARE BUTTON
==========================================*/
// Setting and Control To disable Share Button
$wp_customize->add_setting(
    'toggle_share_btns',
    array(
        'default' => $this->defaults['toggle_share_btns'],
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_share_btns',
    array(
        'label' => __('Share Button', 'pure-commerce'),
        'description' => esc_html__('Use this toggle to Disable or Enable Social Media Share Buttons for a blog post.', 'pure-commerce'),
        'section'  => 'share_btns',
        'settings'   => 'toggle_share_btns',
    )
));


// setting & control for facebook button
$wp_customize->add_setting(
    'toggle_facebook_btn',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_facebook_btn',
    array(
        'label' => __('Facebook Button', 'pure-commerce'),
        'description' => __('toggle On/Off Facebook Share Buttons.', 'pure-commerce'),
        'section'  => 'share_btns',
        'settings'   => 'toggle_facebook_btn',
    )
));


// setting & control for X button
$wp_customize->add_setting(
    'toggle_x_btn',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_x_btn',
    array(
        'label' => __('X (Twitter) Button', 'pure-commerce'),
        'description' => __('toggle On/Off X Share Buttons.', 'pure-commerce'),
        'section'  => 'share_btns',
        'settings'   => 'toggle_x_btn',
    )
));


// setting & control for Whatsapp button
$wp_customize->add_setting(
    'toggle_whatsapp_btn',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_whatsapp_btn',
    array(
        'label' => __('Whatsapp Button', 'pure-commerce'),
        'description' => __('toggle On/Off Whatsapp Share Buttons.', 'pure-commerce'),
        'section'  => 'share_btns',
        'settings'   => 'toggle_whatsapp_btn',
    )
));

// setting & control for telegram button
$wp_customize->add_setting(
    'toggle_telegram_btn',
    array(
        'default' => false,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_telegram_btn',
    array(
        'label' => __('Telegram Button', 'pure-commerce'),
        'description' => __('toggle On/Off Telegram Share Buttons.', 'pure-commerce'),
        'section'  => 'share_btns',
        'settings'   => 'toggle_telegram_btn',
    )
));


// setting & control for pinterest button
$wp_customize->add_setting(
    'toggle_pinterest_btn',
    array(
        'default' => false,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_pinterest_btn',
    array(
        'label' => __('Pinterest Button', 'pure-commerce'),
        'description' => __('toggle On/Off Pinterest Share Buttons.', 'pure-commerce'),
        'section'  => 'share_btns',
        'settings'   => 'toggle_pinterest_btn',
    )
));


// setting & control for linkedin button
$wp_customize->add_setting(
    'toggle_linkedin_btn',
    array(
        'default' => false,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_linkedin_btn',
    array(
        'label' => __('Linkedin Button', 'pure-commerce'),
        'description' => __('toggle On/Off Linkedin Share Buttons.', 'pure-commerce'),
        'section'  => 'share_btns',
        'settings'   => 'toggle_linkedin_btn',
    )
));