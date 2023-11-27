# WordPress Remote Post API Plugin

This WordPress plugin, named "Remote Post API," creates a custom API endpoint to remotely post data.

## Installation

1. **Download the plugin zip file.**
2. **Upload the zip file via the WordPress admin dashboard or extract it into your WordPress plugins directory.

## Plugin Details

- **Plugin Name:** Remote Post API
- **Description:** Creates a custom API endpoint to remotely post data.
- **Version:** 1.0
- **Author:** Akashdeep Singh

## Custom API Endpoint

The plugin registers a custom API endpoint at `/wp-json/remote/v1/post/` with the following details:

- **Endpoint URL:** `/wp-json/remote/v1/post/`
- **HTTP Method:** POST
- **Callback Function:** `handle_remote_post`

## Usage

1. **Make a POST Request:**
   - To remotely post data, make a POST request to the custom API endpoint `/wp-json/remote/v1/post/`.
   - Include the following parameters in the request body:
     - `title`: The title of the post.
     - `content`: The content of the post.

2. **Response:**
   - If the post is created successfully, the API will respond with a JSON object containing:
     - `success`: `true`
     - `message`: 'Post created successfully'
     - `post_id`: The ID of the created post.
   - If there is an error, the API will respond with a JSON object containing:
     - `success`: `false`
     - `message`: The error message.

## Note

- Ensure that the plugin is activated before making API requests.
- Use proper authentication mechanisms to secure the API endpoint based on your requirements.

Feel free to use and customize this plugin for remote posting functionality in your WordPress site.
