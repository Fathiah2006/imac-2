<?php

// Save the meta box data
function imac_save_partner_meta_boxes($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    // Add custom meta boxes
}
add_action('save_post', 'imac_save_partner_meta_boxes');

// Add custom meta boxes
function add_partner_meta_boxes() {
    
}
add_action('add_meta_boxes', 'add_partner_meta_boxes');
