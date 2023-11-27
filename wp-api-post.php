<?php
/*
Plugin Name: Remote Post API
Description: Creates a custom API endpoint to remotely post data.
Version: 1.0
Author: Akashdeep Singh
*/

// Register the custom endpoint
add_action('rest_api_init', 'register_remote_post_endpoint');

function register_remote_post_endpoint() {
    register_rest_route('remote/v1', '/post/', array(
        'methods' => 'POST',
        'callback' => 'handle_remote_post',
    ));
}

// Callback function for the custom endpoint
function handle_remote_post($data) {
    $post_title = sanitize_text_field($data['title']);
    $post_content = sanitize_textarea_field($data['content']);

    // Create a new post
    $new_post = array(
        'post_title' => $post_title,
        'post_content' => $post_content,
        'post_status' => 'publish',
        'post_type' => 'post',
    );

    // Insert the post into the database
    $post_id = wp_insert_post($new_post, true);

    if (is_wp_error($post_id)) {
        return rest_ensure_response(array('success' => false, 'message' => $post_id->get_error_message()));
    } else {
        return rest_ensure_response(array('success' => true, 'message' => 'Post created successfully', 'post_id' => $post_id));
    }
}
