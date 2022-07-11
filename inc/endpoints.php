<?php

function get_all_media_posts($request)
{

    $data = [];
    $category = $request->get_param('category');
    // Get custom post type 'media_posts' posts with the custom taxonomy 'media_type'
    if ($category) {
        $args = array(
            'post_type' => 'media_posts',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'media_type',
                    'field' => 'slug',
                    'terms' => $category,
                ),
            ),
        );
    } else {
        $args = array(
            'post_type' => 'media_posts',
            'posts_per_page' => -1,
        );
    }
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $data[] = array(
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'content' => get_the_content(),
                'thumbnail' => get_the_post_thumbnail_url(),
                'link' => get_permalink(),
                'date' => get_the_date(),
                'category' => get_the_terms($post->ID, 'media_type')[0],

            );
        }
    }


    $result = new WP_REST_Response($data, 200);
    $result->set_headers(array('Cache-Control' => 'public, max-age=3600'));
    return $result;
}

add_action('rest_api_init', function () {
    register_rest_route('wp/v2/api', '/media-posts', [
        'methods' => 'GET',
        'callback' => 'get_all_media_posts',
        'permission_callback' => '__return_true',
        'args' => [
            'category' => [
                'required' => false,
                'type' => 'string',
                'description' => 'Category slug',
            ],
        ],

    ]);
});
