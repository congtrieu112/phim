<?php

/**
 * Custom post type
 */
if (!function_exists('vm_video_post')) :

    function vm_video_post()
    {

        $labels = array(
            'name' => __('Videos', THEME_TEXT_DOMAIN, THEME_TEXT_DOMAIN),
            'singular_name' => __('Video', THEME_TEXT_DOMAIN),
            'add_new' => __('Add New', THEME_TEXT_DOMAIN),
            'add_new_item' => __('Add New Video', THEME_TEXT_DOMAIN),
            'edit_item' => __('Edit Video', THEME_TEXT_DOMAIN),
            'new_item' => __('New Video', THEME_TEXT_DOMAIN),
            'all_items' => __('All Videos', THEME_TEXT_DOMAIN),
            'view_item' => __('View Video', THEME_TEXT_DOMAIN),
            'search_items' => __('Search Video', THEME_TEXT_DOMAIN),
            'not_found' => __('No videos found', THEME_TEXT_DOMAIN),
            'not_found_in_trash' => __('No videos found in the Trash', THEME_TEXT_DOMAIN),
            'parent_item_colon' => '',
            'menu_name' => 'Videos'
        );
        $supports = array('title', 'editor', 'thumbnail', 'excerpt', 'comments',
            'custom-fields', 'post-formats',
        );
        $args = array(
            'labels' => $labels,
            'description' => 'Videos and video specific information',
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-video-alt',
            'supports' => $supports,
            'taxonomies' => array('video_categories', 'post_tag'),
            'has_archive' => true,
        );

        register_post_type('video', $args);
    }

endif;

/**
 * Get video post type categories
 */
if (!function_exists('vm_get_video_categories')):

    function vm_get_video_categories($post)
    {

        $categories = array();
        $cateogires_object = wp_get_post_terms(get_the_ID(), 'video_categories');

        foreach ($cateogires_object as $cobject) {
            $categories[] = "<a href='".get_category_link($cobject->term_id)."'>".$cobject->name."</a>";
        }

        echo implode(', ', $categories);
    }

endif;

/**
 * Get video thumbnails and video duration from related api
 */
if (!function_exists('vm_get_videothumbnail')):

    /**
     *
     * @param string $url url of video
     * @return array $video_data contains video thumbnail and duration
     */
    function vm_get_videothumbnail($url)
    {


        $youtube_url = 'https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=%video&key=' . vm_get_option('vm-youtube-api-key');
        $vimeo_url = 'http://vimeo.com/api/v2/video%video.json';
        $dailymotion_url = 'https://api.dailymotion.com/video/%video/?fields=thumbnail_720_url,duration';

        $video_data = array();

        $host = parse_url($url, PHP_URL_HOST);

        if (preg_match('/youtube/', $host)) {

            $query_string = parse_url($url, PHP_URL_QUERY);
            parse_str($query_string, $query_params);

            if (isset($query_params['v']) && !empty($query_params)) {

                $response = wp_remote_get(strtr($youtube_url, array('%video' => $query_params['v'])));

                if (!is_wp_error($response) && isset($response['response']['code']) && 200 === ((int)$response['response']['code'])) {

                    $videoDetails = json_decode($response['body']);
                    $start = new DateTime('@0'); // Unix epoch
                    $start->add(new DateInterval($videoDetails->items[0]->contentDetails->duration));

                    $duration = $start->format('H:i:s');

                    $video_object = json_decode($response['body']);

                    if (!empty($video_object) && !is_null($video_object) && is_object($video_object)) {
                        $video_data['thumbnail'] = 'http://i1.ytimg.com/vi/' . $video_object->items[0]->id . '/hqdefault.jpg';
                        $video_data['duration'] = $duration;
                    }
                } else {

                    return NULL;


                }

            }

        } else if (preg_match('/vimeo/', $host)) {

            $video = parse_url($url, PHP_URL_PATH);
            $response = wp_remote_get(strtr($vimeo_url, array('%video' => $video)));

            if (!is_wp_error($response) && isset($response['response']['code']) && 200 === ((int)$response['response']['code'])) {
                $video_object = json_decode($response['body']);

                if (!empty($video_object) && !is_null($video_object) && is_object($video_object[0])) {
                    $video_data['thumbnail'] = $video_object[0]->thumbnail_large;
                    $video_data['duration'] = gmdate("i:s", $video_object[0]->duration);
                }
            }
        } else if (preg_match('/dailymotion/', $host)) {

            $parts = explode('/', parse_url($url, PHP_URL_PATH));
            $response = wp_remote_get(strtr($dailymotion_url, array('%video' => $parts[2])));

            if (!is_wp_error($response) && isset($response['response']['code']) && 200 === ((int)$response['response']['code'])) {
                $video_object = json_decode($response['body']);

                if (!empty($video_object) && !is_null($video_object) && is_object($video_object)) {
                    $video_data['thumbnail'] = $video_object->thumbnail_720_url;
                    $video_data['duration'] = gmdate("i:s", $video_object->duration);
                }
            }
        }

        return $video_data;
    }

endif;


/**
 * Get video player
 */
if (!function_exists('vm_get_video_player')):

    /**
     *
     * @param string $url url of video
     * @return string player code
     */
    function vm_get_video_player($url)
    {

        $youtube_player = '<iframe class="video-light" id="ytplayer" type="text/html" width="750" height="447" '
            . 'src="http://www.youtube.com/embed/%video" frameborder="0" scrolling="no"></iframe>';
        $vimeo_player = '<iframe class="video-light"  src="http://player.vimeo.com/video%video" frameborder="0" '
            . 'webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        $dailymotion_player = '<iframe  class="video-light" src="http://www.dailymotion.com/embed/video/%video" '
            . 'width="750" height="447" frameborder="0"></iframe>';

        $host = parse_url($url, PHP_URL_HOST);

        if (preg_match('/youtube/', $host)) {

            $query_string = parse_url($url, PHP_URL_QUERY);
            parse_str($query_string, $query_params);

            return strtr($youtube_player, array('%video' => $query_params['v']));
        } else if (preg_match('/vimeo/', $host)) {

            $video = parse_url($url, PHP_URL_PATH);
            return strtr($vimeo_player, array('%video' => $video));
        } else if (preg_match('/dailymotion/', $host)) {

            $parts = explode('/', parse_url($url, PHP_URL_PATH));
            return strtr($dailymotion_player, array('%video' => $parts[2]));
        }
    }


endif;
