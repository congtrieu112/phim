<?php

class BZ_Flickr_Photos {
    /*     * *******************************
      ## Construct Function
      ## Set Plugin Path and URL
      ## Add shortcode Function
      ## Add shortcode support for widget
     * ******************************** */

    Public function __construct() {
        add_shortcode('bz_flickrphotos', array($this, 'do_bz_flickrphotos'));
        add_filter('widget_text', 'do_shortcode');
    }

    /*     * **********************************************************
      ## Shortcode with specific parameter
      ## Call Get Image function to return Images form Flickr
     * ********************************************************** */

    function do_bz_flickrphotos($atts) {
        return $this->get_images($atts);
    }

    /*     * *************************************
      ## Get images from flickr feed
      ## Display as specific parameter
      ## Add prettyPhoto Comfortablity
      ## Return HTML to Write it into the ID
     * ************************************ */

    function get_images($atts) {

        extract(shortcode_atts(array(
            'max_photos' => '12',
            'flickr_userid' => 'kozumel',
            'photo_size' => 's',
            'before_photos' => '<div class="flickrgallery"><ul>',
            'after_photos' => '</div></ul>',
            'before_photo' => '<li>',
            'after_photo' => '</li>',
            'photo_class' => 'img',
            'show_link' => false,
            'link_class' => '',
                        ), $atts));

        $html = '';

        $flickr_get_photos_url = 'https://api.flickr.com/services/rest/?method=flickr.people.getPhotos&api_key=662bd7d40dcd4345a4fcf55867b190de&user_id=%user_id&per_page=%per_page&format=json&nojsoncallback=1';
        $flickr_photo_url = 'http://farm%farm.staticflickr.com/%server/%id_%secret_%size.jpg';

        $response = wp_remote_get(strtr($flickr_get_photos_url, array('%user_id' => $flickr_userid, '%per_page' => $max_photos)));

        if (!is_wp_error($response) && isset($response['response']['code']) && 200 === ( (int) $response['response']['code'])) {
            $json = json_decode($response['body']);
        } else {
            $json = "Sorry! Flickr is not reachable at this time.";
        } 

        if (!is_null($json)) {

            if (isset($before_photos)) {
                $html .= $before_photos;
            }

            foreach ($json->photos->photo as $photo) {

                $photo_src = strtr($flickr_photo_url, array('%farm' => $photo->farm, '%server' => $photo->server, '%id' => $photo->id, '%secret' => $photo->secret, '%size' => $photo_size));

                if (isset($before_photo)) {
                    $html .= $before_photo;
                }

                if (isset($show_link) && (bool) $show_link) {
                    $html .= '<a href="' . $photo_src . '" target="_blank"';
                    if (isset($link_class) && !empty($link_class)) {
                        $html .= ' class="' . $link_class . '"';
                    }
                    $html .= '>';
                }

                $html .= '<img src="';
                $html .= $photo_src;
                $html .= '"';

                if (isset($photo_class) && !empty($photo_class)) {
                    $html .= ' class="' . $photo_class . '"';
                }

                $html .= ' />';

                if (isset($show_link) && (bool) $show_link) {
                    $html .= '</a>';
                }

                if (isset($after_photo)) {
                    $html .= $after_photo;
                }
            }

            if (isset($after_photos)) {
                $html .= $after_photos;
            }
        } else {
            $html = '<p>' . $json . '</p>';
        }

        return $html;
    }

}

$bz_flickrphotos = new BZ_Flickr_Photos();
