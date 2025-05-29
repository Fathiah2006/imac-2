<?php

// Save the meta box data
function imac_save_web_portal_meta_boxes($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    // Add custom meta boxes
    if (isset($_POST['web_portal_url'])) {
        update_post_meta($post_id, 'web_portal_url', esc_url($_POST['web_portal_url']));
    }
}
add_action('save_post', 'imac_save_web_portal_meta_boxes');

// Add custom meta boxes
function add_web_portal_meta_boxes() {
    add_meta_box(
        'web_portal_url',
        __('Web Portal URL', 'imac'),
        'render_web_portal_url_meta_box',
        'web_portals',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'add_web_portal_meta_boxes');

function render_web_portal_url_meta_box($post) {
    // Retrieve current value
    $tagline = get_post_meta($post->ID, 'web_portal_url', true);
    ?>

    <p>
        <input type="text" id="web_portal_url" name="web_portal_url" value="<?php echo esc_attr($tagline); ?>" style="width:100%;">
    </p>

    <?php
}