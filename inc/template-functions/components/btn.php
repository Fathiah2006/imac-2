<?php

// Function to render a button
function imac_render_btn($btn_txt = 'Button', $url = '#', $class = '') {
    global $pc_theme_mods;
    $class = $pc_theme_mods['button_style'] . ' ' . $class;
    echo '<a href="' . esc_url($url) . '">
            <span class="btn ' . esc_attr($class) . '">' . esc_html($btn_txt) . '</span>
        </a>';
}