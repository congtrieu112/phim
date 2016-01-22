<?php
/**
 * Video Magazine theme functions and definitions
 */
/**
 * Theme Constants
 */
define('HOME_URI', home_url());
define('THEME_URI', get_stylesheet_directory_uri());
define('THEME_IMAGES', THEME_URI . '/images');
define('THEME_CSS', THEME_URI . '/css');
define('THEME_JS', THEME_URI . '/js');
define('THEME_INC', get_template_directory() . '/inc');
define('THEME_TEXT_DOMAIN', 'vm_softcircles_domain');

/**
 * Redux Framework
 */
if (!isset($vm_options) && file_exists(( THEME_INC . '/redux-config.php'))) {
    require_once(THEME_INC . '/redux-config.php');
}

/**
 * Required Files
 */
if (!class_exists('Wp_Query_Columns') && file_exists(( THEME_INC . '/wp_query_columns.php'))) {
    require_once(THEME_INC . '/wp_query_columns.php');
}
require_once (THEME_INC . '/pagination.php');
require_once (THEME_INC . '/breadcrumbs.php');
require_once (THEME_INC . '/post-type-video.php');
require_once (THEME_INC . '/nav.php');

/**
 * Include the TGM_Plugin.
 */
require_once (THEME_INC . '/tgm-plugin.php');
/**
 * Shortcodes
 */
require_once ( THEME_INC . '/shortcodes.php' );

/**
 * Custom Widgets
 */
require_once ( THEME_INC . '/widgets/widgets.php' );


/**
 * Metaboxes
 */
require_once ( THEME_INC . '/metaboxes/video_field.php' );
require_once ( THEME_INC . '/metaboxes/header_layout.php' );
require_once ( THEME_INC . '/metaboxes/content_layout.php' );
require_once ( THEME_INC . '/metaboxes/footer_layout.php' );

/**
 * Content Width
 */
if (!isset($content_width)) {
    $content_width = 600;
}

$vm_video_not_found_error = false;

/**
 * Custom background
 */
$defaults = array(
    'default-color' => 'white',
    'wp-head-callback' => '_custom_background_cb'
);
add_theme_support('custom-background', $defaults);
/**
 * Filter widget texts for shortcodes to work
 */
add_filter('widget_text', 'do_shortcode');

/* THEME OPTIONS
  --------------------------------------------------------- */
if (!function_exists('vm_get_option')) {

    function vm_get_option($option) {

        global $vm_options;

        return (is_array($vm_options) && array_key_exists($option, $vm_options)) ? $vm_options[$option] : NULL;
    }

}

/**
 * Get media options
 */
if (!function_exists('vm_get_media')) {

    function vm_get_media($option = 'vm-media-logo') {

        global $vm_options;

        return $vm_options[$option]['url'];
    }

}

/**
 * Get post meta
 */
if (!function_exists('vm_get_post_meta')) {

    function vm_get_post_meta($key) {

        global $post;
        if ($post) {
            return get_post_meta($post->ID, $key, true);
        } else {
            return NULL;
        }
    }

}

/**
 * Theme Setup
 */
if (!function_exists('vm_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function vm_setup() {


        /*
         * Make Video Magazine available for translation.
         *
         * Translations can be added to the /languages/ directory.
         * If you're building a theme based on Video Magazine, use a find and
         * replace to change 'VideoMagazine' to the name of your theme in all
         * template files.
         */
        load_theme_textdomain(THEME_TEXT_DOMAIN, THEME_INC . '/languages');

        /**
         * Enable support for Post Thumbnails on posts and pages.
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(150, 150, true);
        add_image_size('small-thumb', 50, 50, true);
        add_image_size('large-thumb', 600, 338, true);

        /**
         * Add default posts and comments RSS feed links to head
         */
        add_theme_support('automatic-feed-links');

        /**
         * Adding custom header theme support
         */
        add_theme_support("custom-header");

        /**
         * Register custom post type
         */
        add_action('init', 'vm_video_post');

        /**
         * Setup menus
         */
        register_nav_menus(array(
            'category-menu' => __('Category Menu', THEME_TEXT_DOMAIN),
            'header-menu' => __('Header Menu', THEME_TEXT_DOMAIN),
        ));

        /**
         * Register Sidebars/Widget Areas
         */
        add_action('widgets_init', 'vm_init_widgets');
    }

endif;
add_action('after_setup_theme', 'vm_setup');

/**
 * Load Scripts and Styles
 */
function vm_softcircles_scripts() {

    wp_register_style('vm-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('vm-bootstrap-style');
    wp_enqueue_style('vm-style', get_stylesheet_uri() );
    wp_register_style('vm-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('vm-font-awesome');
    wp_enqueue_script("jquery");
    wp_enqueue_script('vm-jquery-ui', 'http://code.jquery.com/ui/1.9.2/jquery-ui.js', array(), '192', true);
    wp_enqueue_script('vm-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '303', true);
    wp_enqueue_script('vm-responsive-carousel', get_template_directory_uri() . '/js/responsiveCarousel.js', array(), '262', true);
    wp_enqueue_script('vm-respond', get_template_directory_uri() . '/js/respond.min.js', array(), '20120206', true);
    wp_enqueue_script('vm-main-script', get_template_directory_uri() . '/js/functions.js', array(), true);
    wp_enqueue_script('vm-sharing-buttons', THEME_JS . '/share-buttons.js', array(), true);
    wp_enqueue_script('script-name', get_template_directory_uri() . '/js/proccess.js', array(), '262', true);

   // wp_register_script( 'script-name', THEME_JS . '/proccess.js', array( 'jquery' ), '1.1', true );

if(is_singular( 'video' ) ){
        wp_enqueue_script('script-name-light', get_template_directory_uri() . '/js/jquery.allofthelights.js', array(), '262', true);
}
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    if (vm_get_option('vm-rtl-option')) {
        wp_enqueue_style('vm-rtl-style', THEME_CSS . '/rtl.css');
    }
}

add_action('wp_enqueue_scripts', 'vm_softcircles_scripts');






/*
 *  Element hook wp_default_styles
 *  Change all ver style 
 */

function my_wp_default_styles($styles)
{
	//use release date for version
	$styles->default_version = time();
}
add_action("wp_default_styles", "my_wp_default_styles");

/*
Plugin name: Strip WP Version in Stylesheets/Scripts
*/

//add_filter( 'script_loader_src', 'remove_src_version' );
//add_filter( ' style_loader_src', 'remove_src_version' );

function remove_src_version ( $src ) {
  return explode("?", $src)[0];
}



/*
 *  Random string with the length
 * 
 */


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

/*
 * Editor Styles
 */

function vm_add_editor_styles() {
    add_editor_style(THEME_CSS . '/custom-editor-style.css');
}

add_action('init', 'vm_add_editor_styles');

/**
 * Generates header class based on header layout elected on edit/new post/page
 */
function get_header_style() {

    $header_layout = vm_get_post_meta('_vm_headerlayout_option');

    if ($header_layout == 'default_dark' || $header_layout == 'slides_dark') {
        echo ' class="style2"';
    } else {
        echo ' class="style1"';
    }
}

/**
 * Generates footer class based on footer layout selected on edit/new post/page
 */
function get_footer_style() {

    $footer_layout = vm_get_post_meta('_vm_footerlayout_option');

    if ($footer_layout == 'default_lighter' || $footer_layout == 'widgets_light') {
        echo ' class="style2"';
    } else if ($footer_layout == 'default_dark' || $footer_layout == 'widgets_dark') {
        echo ' class="style1"';
    } else {
        echo ' class="style3"';
    }
}

/**
 * 
 * @global type $post
 * @return boolean
 * 
 * Check if we need to display header-slides in header widget area.
 */
function get_header_slides() {

    $header_layout = vm_get_post_meta('_vm_headerlayout_option');

    if ($header_layout == 'slides_light' || $header_layout == 'slides_dark') {
        return true;
    }

    return false;
}

/**
 * 
 * @global type $post
 * @return boolean
 * 
 * Check if we need to display footer-slides sidebar.
 */
function get_footer_slides() {

    $footer_layout = vm_get_post_meta('_vm_footerlayout_option');

    if ($footer_layout != 'widgets_light' && $footer_layout != 'widgets_dark') {
        return true;
    }

    return false;
}

function get_nav_shortcode($nav_type = 'top') {

    global $post;
    $shortcode = '';
    $header_layout = vm_get_post_meta('_vm_headerlayout_option');

    if ($header_layout == 'flipped' && $nav_type == 'top') {
        $shortcode = '[vm_categorynav_bar sticky="none"]';
    } else if ($header_layout == 'flipped' && $nav_type == 'category') {
        $shortcode = '[vm_topnav_bar]';
    } else if ($header_layout != 'flipped' && $nav_type == 'top') {
        $shortcode = '[vm_topnav_bar]';
    } else {
        $shortcode = '[vm_categorynav_bar]';
    }

    echo do_shortcode($shortcode);
}

/**
 * CUSTOM POST TYPES
 */
function vm_taxonomies() {
    register_taxonomy(
            'video_categories', 'Video', array(
        'hierarchical' => true,
        'label' => __('Categories', THEME_TEXT_DOMAIN),
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'videos',
            'with_front' => false
        ),
            )
    );
}

add_action('init', 'vm_taxonomies');

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
if (!function_exists('vm_wp_title')):

    function vm_wp_title($title, $sep) {
        if (is_feed()) {
            return $title;
        }

        global $page, $paged;

        // Add the blog name
        $title .= bloginfo('name', 'display');

        // Add the blog description for the home/front page.
        $site_description = bloginfo('description', 'display');
        if ($site_description && ( is_home() || is_front_page() )) {
            $title .= " $sep $site_description";
        }

        // Add a page number if necessary:
        if (( $paged >= 2 || $page >= 2 ) && !is_404()) {
            $title .= " $sep " . sprintf(__('Page %s', THEME_TEXT_DOMAIN), max($paged, $page));
        }

        return $title;
    }

    add_filter('wp_title', 'vm_wp_title', 10, 2);

endif;


if (!function_exists('vm_comment')) :

    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function vm_comment($comment, $args, $depth) {

        $GLOBALS['comment'] = $comment;

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) :
            ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?> class="media">
                <div class="comment-body">
                    <?php _e('Pingback:', THEME_TEXT_DOMAIN); ?> <?php comment_author_link(); ?> <?php edit_comment_link(__('Edit', THEME_TEXT_DOMAIN), '<span class="btn btn-primary btn-xs backcolor edit-link">', '</span>'); ?>
                </div>

            <?php else : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent' ); ?>>
                <div class="media" id="div-comment-<?php comment_ID(); ?>" class="comment-body">
                    <div class="pull-left">
                        <div class="media-object">
                            <?php echo get_avatar($comment, 50); ?>
                            <?php edit_comment_link(__('Edit', THEME_TEXT_DOMAIN), '<span class="edit-link">', '</span>'); ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="media-body">
                        <?php printf(__('%s', THEME_TEXT_DOMAIN), sprintf('<h4 class="media-heading">%s</h4>', get_comment_author_link())); ?>
                        <time>
                            <?php
                            $d = "F j, Y";
                            $comment_date = get_comment_date($d);
                            echo $comment_date;
                            ?>
                        </time>
                        <?php comment_text(); ?>
                        <div class="clearfix"></div>
                        <?php
                        comment_reply_link(array_merge($args, array(
                            'add_below' => 'div-comment',
                            'depth' => $depth,
                            'max_depth' => $args['max_depth'],
                            'before' => '<span class="btn btn-primary btn-xs backcolor reply-link">',
                            'after' => '</span>',
                        )));
                        ?>
                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', THEME_TEXT_DOMAIN); ?></p>
                        <?php endif; ?>
                    </div>
                </div><!-- .comment-body -->

            <?php
            endif;
        }

    endif; // ends check for vm_comment()


    if (!function_exists('vm_get_id_by_slug')) {

        function vm_get_id_by_slug($post_slug, $post_type) {

            $args = array(
                'name' => $post_slug,
                'post_type' => $post_type,
                'post_status' => 'publish',
                'numberposts' => 1
            );
            $post = get_posts($args);
            if ($post) {
                return $post[0]->ID;
            } else {
                return null;
            }
        }

    }


    /**
     *  Get categories
     */
    if (!function_exists('vm_get_categories')) :

        function vm_get_categories($taxonomy_type = "category") {

            $args = array(
                'type' => 'post',
                'child_of' => 0,
                'parent' => '',
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => 1,
                'hierarchical' => 1,
                'exclude' => '',
                'include' => '',
                'number' => '',
                'taxonomy' => $taxonomy_type,
                'pad_counts' => false
            );

            return get_categories($args);
        }

    endif;

    /**
     * Save post metadata when a video post is saved.
     *
     * @param int $post_id The ID of the post.
     */
    function save_video_meta($post_id) {

        $slug = 'video';

        // If this isn't a 'video' post, don't update it.
        if (!isset($_POST['post_type']) || $slug != $_POST['post_type']) {
            return;
        }

        // Update the post's metadata.
        if (isset($_POST['vm_videofield_option'])) {
            // get video data
            $video_data = vm_get_videothumbnail($_POST['vm_videofield_option']);
            if (empty($video_data)) {

                update_post_meta($post_id, '_vm_video_thumbnail', NULL);
                update_post_meta($post_id, '_vm_video_duration', NULL);

                $post = get_post($post_id);
                if ('trash' !== $post->post_status) {
                    $post->post_status = 'draft'; // use any post status
                    remove_action('save_post', 'save_video_meta');
                    wp_update_post($post);
                    add_action('save_post', 'save_video_meta');
                }
            } else {
                // update post meta
                update_post_meta($post_id, '_vm_video_thumbnail', sanitize_text_field($video_data['thumbnail']));
                update_post_meta($post_id, '_vm_video_duration', sanitize_text_field($video_data['duration']));
            }
        }
    }

//    add_action('save_post', 'save_video_meta');

    function vm_video_not_found_error() {

        global $post;
        if (is_object($post)) {
            $post_type = $post->post_type;
            $post_status = $post->post_status;
            $video_url = get_post_meta($post->ID, '_vm_videofield_option');
            $video_thumbnail = get_post_meta($post->ID, '_vm_video_thumbnail');

            if ($post_type == 'video' && $post_status == 'draft' && !empty($video_url) && !empty($video_thumbnail)):
                ?>
                <div id="message" class="error below-h2"><p><?php echo __('Warning - Video was not published and saved as draft because of provided video source can\'t be reached at this time. Please verify Youtube API key.', THEME_TEXT_DOMAIN); ?></p></div>
                <?php
            endif;
        }
    }

    add_action('admin_notices', 'vm_video_not_found_error');

    /**
     * Get menu object to display menu name
     */
    function vm_get_theme_menu($theme_location) {
        if (!$theme_location)
            return false;

        $theme_locations = get_nav_menu_locations();
        if (!isset($theme_locations[$theme_location]))
            return false;

        $menu_obj = get_term($theme_locations[$theme_location], 'nav_menu');
        if (!$menu_obj)
            $menu_obj = false;

        return $menu_obj->name;
    }
    
    
    function vm_get_video_post_thumbnail($post_id) {
        
        if(has_post_thumbnail($post_id)) {
            return wp_get_attachment_url(get_post_thumbnail_id($post_id));
        } else {
            return get_post_meta($post_id, '_vm_video_thumbnail', true);
        }
        
    }
    
    function picasa_web($link) {

  $url = urldecode($link);
  $js = "";
  if (stristr($url, '#'))
    list($url, $id) = explode('#', $url);
  $data = file_get_contents($url);
  if ($id)
    $gach = explode($id, $data);
  $gach = explode('{"url":"', ($id) ? $gach[7] : $data);
  $v360p = urldecode(reset(explode('"', $gach[2])));
  $v720p = urldecode(reset(explode('"', $gach[3])));
  $v1080p = urldecode(reset(explode('"', $gach[4])));
  if (strpos($v1080p, 'redirector.googlevideo.com')) {
    $js .= '{file: "' . $v1080p . '",type:"mp4",label: "1080p"},
                {file: "' . $v720p . '",type:"mp4",label: "720p"},
                {file: "' . $v360p . '",type:"mp4",label: "360p",default: "true"}';
  }
  elseif (strpos($v720p, 'redirector.googlevideo.com')) {
    $js .= '{file: "' . $v720p . '",type:"mp4",label: "720p"},
                {file: "' . $v360p . '",type:"mp4",label: "360p",default: "true"}';
  }
  else {
    $js .= '{file: "' . $v360p . '",type:"mp4"}';
  }


  return $js;
}
function drive_get_quaty($url) {
    $get = file_get_contents($url);
    $cat = explode(',["fmt_stream_map","', $get);
    $cat = explode('"]', $cat[1]);
    $cat = explode(',', $cat[0]);
    foreach ($cat as $link) {
        $cat = explode('|', $link);
        $links = str_replace(array('\u003d', '\u0026'), array('=', '&'), $cat[1]);
        if ($cat[0] == 37) {
            $f1080p = $links;
        }
        if ($cat[0] == 22) {
            $f720p = $links;
        }
        if ($cat[0] == 59) {
            $f480p = $links;
        }
        if ($cat[0] == 43) {
            $f360p = $links;
        }
    }
    $res = array();
    if (isset($f1080p)) {
        $res[] .= ($f360p) ? '360' : '';
        $res[] .= ($f480p) ? '480' : '';
        $res[] .= ($f720p) ? '720' : '';
        $res[] .= ($f1080p) ? '1080' : '';
    } elseif (isset($f720p)) {
        $res[] .= ($f360p) ? '360' : '';
        $res[] .= ($f480p) ? '480' : '';
        $res[] .= ($f720p) ? '720' : '';
    } elseif (isset($f480p)) {
        $res[] .= ($f360p) ? '360' : '';
        $res[] .= ($f480p) ? '480' : '';
    } else {
        $res[] .= ($f360p) ? '360' : '';
    }
    return $res;
}

function drive_direct($url) {


  $get = file_get_contents($url);
  $cat = explode(',["fmt_stream_map","', $get);
  $cat = explode('"]', $cat[1]);
  $cat = explode(',', $cat[0]);
  foreach ($cat as $link) {
    $cat = explode('|', $link);
    $links = str_replace(array('\u003d', '\u0026'), array('=', '&'), $cat[1]);
    if ($cat[0] == 37) {
      $f1080p = $links;
    }
    if ($cat[0] == 22) {
      $f720p = $links;
    }
    if ($cat[0] == 59) {
      $f480p = $links;
    }
    if ($cat[0] == 43) {
      $f360p = $links;
    }
  }
  if (isset($f1080p)) {
    $res .= ($f480p) ? '{file: "' . $f480p . '",type:"mp4",label: "480p"},' : '';
    $res .= ($f360p) ? '{file: "' . $f360p . '",type:"mp4",label: "360p"},' : '';
    $res .= ($f360p) ? '{file: "' . $f720p . '",type:"mp4",label: "720p"},' : '';
    $res .= ($f1080p) ? '{file: "' . $f1080p . '",type:"mp4",label: "1080p"}' : '';
  }
  elseif (isset($f720p)) {
    $res .= ($f480p) ? '{file: "' . $f480p . '",type:"mp4",label: "480p"},' : '';
    $res .= ($f360p) ? '{file: "' . $f360p . '",type:"mp4",label: "360p"},' : '';
    $res .= ($f360p) ? '{file: "' . $f720p . '",type:"mp4",label: "720p"}'  : '';
  }
  elseif (isset($f480p)) {
    $res .= ($f480p) ? '{file: "' . $f480p . '",type:"mp4",label: "480p"},' : '';
    $res .= ($f360p) ? '{file: "' . $f360p . '",type:"mp4",label: "360p"}'  : '';
  }
  else {
    $res .= ($f360p) ? '{file: "' . $f360p . '",type:"mp4",label: "360p"}'  : '';
  }
  return $res;
}

function get_face_video($link) {
  $url = plugins_url('jw-player-plugin-for-wordpress');
  $html = ",skin: '" . $url . "/skins/vBlue.xml',";
  $links = $link;
  if (strpos($link, 'facebook'))
    $link = explode('/', $link);
  $l = 0;
  foreach ($link as $item) {
    if ($item > 0) {
      $l = $item;
    }
  }
  if ($l == 0) {
    preg_match_all('/v=(.*?)&/i', $links, $match);
    $l = $match[1][0];
  }
  if ($l == "") {
    $l = explode('v=', $links);
    $l = $l[1];
  }
  if ($l == "") {
    $l = explode('/', $links);
    $l = end($l);
  }
  $embed = 'https://www.facebook.com/video/embed?video_id=' . $l;
  $get = $this->curl($embed);

  $data = explode('[["params","', $get);
  $data = explode('"],["', $data[1]);
  $data = str_replace(
      array('\u00257B', '\u002522', '\u00253A', '\u00252C', '\u00255B', '\u00255C\u00252F', '\u00252F', '\u00253F', '\u00253D', '\u002526'), array('{', '"', ':', ',', '[', '\/', '/', '?', '=', '&'), $data[0]
  );

  $HD = explode('[{"hd_src":"', $data);
  $HD = explode('","', $HD[1]);
  $HD = str_replace('\/', '/', $HD[0]);
  $SD = explode('"sd_src":"', $data);
  $SD = explode('","', $SD[1]);
  $SD = str_replace('\/', '/', $SD[0]);

  if ($HD) {
    $js .= ($SD) ? '{file: "' . $SD . '",type:"mp4",label: "360p",default: "true"},' : '';
    $js .= ($HD) ? '{file: "' . $HD . '",type:"mp4",label: "720p"}' : '';
  }
  else {
    $js .= ($SD) ? '{file: "' . $SD . '",type:"mp4"}' : '';
  }

  return $js;
}

function curl($url) {
  $ch = @curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "Accept-Language: en-us,en;q=0.5";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
  $page = curl_exec($ch);
  curl_close($ch);
  return $page;
}

/*
 * Get all id with block id
 * @param int $block_id 
 * @return array id .
 */
function get_home_top($block_id,$field_name,$field_limit,$sub_field) {
  $block = get_post($block_id);
  $arrid = array();
  $max_items = (int)get_field($field_limit, $block->ID);
  $count = 0;
  if (have_rows($field_name, $block->ID)) {
    while ($count < $max_items && have_rows($field_name, $block->ID)) {
      the_row();
      $count++;
      $video_id = get_sub_field($sub_field);
      if ($video_id) {
        $arrid[] = $video_id;
      }
    }
  }
  return $arrid;
}

/*
 * Get size custom image
 * @param int $w
 * @param int $h
 * @param int $url
 */

function get_bfithumb($w, $h, $url) {
  include_once 'includes/bfithumb.php';
  $params = array('width' => $w, 'height' => $h, 'crop' => true);
  $image = bfi_thumb($url, $params);
  return $image;
}


/*
 * Get limit string
 * @param string $string
 * @param int $limitword
 * @param int $kytu
 */

function custom_excerpt($string = "", $limitword = "", $kytu = "")
{
    $string = strip_tags($string);
    $string = preg_replace('/\n/', ' ', trim($string));
    $array = explode(' ', $string, $limitword);
    $string = "";
    for ($i = 0; $i <= (count($array) - 2); $i++):
        $string .= $array[$i] . " ";
    endfor;
    return $string . $kytu;
}


/*
 * Get limit string
 * @param string $str
 * @param int $limit
 */

function catchuoi($str, $limit) {
  if (strlen($str) <= $limit) {
    return $str;
  }
  elseif (strpos($str, " ", $limit) == null) {
    return $str;
  }
  else {
    $strs = strpos($str, " ", $limit);
    $str = substr($str, 0, $strs) . "...";
    return $str;
  }
}




function cURLcheckBasicFunctions()
{
  if( !function_exists("curl_init") &&
      !function_exists("curl_setopt") &&
      !function_exists("curl_exec") &&
      !function_exists("curl_close") ) return false;
  else return true;
}

/*
 * Returns string status information.
 * Can be changed to int or bool return types.
 */
function cURLdownload($url, $file)
{
  if( !cURLcheckBasicFunctions() ) return "UNAVAILABLE: cURL Basic Functions";
  $ch = curl_init();
  if($ch)
  {

    $fp = fopen($file, "w");
    if($fp)
    {
      if( !curl_setopt($ch, CURLOPT_URL, $url) )
      {
        fclose($fp); // to match fopen()
        curl_close($ch); // to match curl_init()
        return "FAIL: curl_setopt(CURLOPT_URL)";
      }
      if ((!ini_get('open_basedir') && !ini_get('safe_mode')) || $redirects < 1) {
        curl_setopt($ch, CURLOPT_USERAGENT, '"Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.11) Gecko/20071204 Ubuntu/7.10 (gutsy) Firefox/2.0.0.11');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //curl_setopt($ch, CURLOPT_REFERER, 'http://domain.com/');
        if( !curl_setopt($ch, CURLOPT_HEADER, $curlopt_header)) return "FAIL: curl_setopt(CURLOPT_HEADER)";
        if( !curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $redirects > 0)) return "FAIL: curl_setopt(CURLOPT_FOLLOWLOCATION)";
        if( !curl_setopt($ch, CURLOPT_FILE, $fp) ) return "FAIL: curl_setopt(CURLOPT_FILE)";
        if( !curl_setopt($ch, CURLOPT_MAXREDIRS, $redirects) ) return "FAIL: curl_setopt(CURLOPT_MAXREDIRS)";

        return curl_exec($ch);
    } else {
        curl_setopt($ch, CURLOPT_USERAGENT, '"Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.11) Gecko/20071204 Ubuntu/7.10 (gutsy) Firefox/2.0.0.11');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //curl_setopt($ch, CURLOPT_REFERER, 'http://domain.com/');
        if( !curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false)) return "FAIL: curl_setopt(CURLOPT_FOLLOWLOCATION)";
        if( !curl_setopt($ch, CURLOPT_FILE, $fp) ) return "FAIL: curl_setopt(CURLOPT_FILE)";
        if( !curl_setopt($ch, CURLOPT_HEADER, true)) return "FAIL: curl_setopt(CURLOPT_HEADER)";
        if( !curl_setopt($ch, CURLOPT_RETURNTRANSFER, true)) return "FAIL: curl_setopt(CURLOPT_RETURNTRANSFER)";
        if( !curl_setopt($ch, CURLOPT_FORBID_REUSE, false)) return "FAIL: curl_setopt(CURLOPT_FORBID_REUSE)";
        curl_setopt($ch, CURLOPT_USERAGENT, '"Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.11) Gecko/20071204 Ubuntu/7.10 (gutsy) Firefox/2.0.0.11');
    }
      // if( !curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true) ) return "FAIL: curl_setopt(CURLOPT_FOLLOWLOCATION)";
      // if( !curl_setopt($ch, CURLOPT_FILE, $fp) ) return "FAIL: curl_setopt(CURLOPT_FILE)";
      // if( !curl_setopt($ch, CURLOPT_HEADER, 0) ) return "FAIL: curl_setopt(CURLOPT_HEADER)";
      if( !curl_exec($ch) ) return "FAIL: curl_exec()";
      curl_close($ch);
      fclose($fp);
      return "SUCCESS: $file [$url]";
    }
    else return "FAIL: fopen()";
  }
  else return "FAIL: curl_init()";
}


function dowload_file($file){
  
  if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
  
}





function drive_direct_dowload($linkf,$quaty = 360) {


  $get = file_get_contents($linkf);
  $cat = explode(',["fmt_stream_map","', $get);
  $cat = explode('"]', $cat[1]);
  $cat = explode(',', $cat[0]);
  foreach ($cat as $link) {
    $cat = explode('|', $link);
    $links = str_replace(array('\u003d', '\u0026'), array('=', '&'), $cat[1]);
    if ($cat[0] == 37) {
      $f1080p = $links;
    }
    if ($cat[0] == 22) {
      $f720p = $links;
    }
    if ($cat[0] == 59) {
      $f480p = $links;
    }
    if ($cat[0] == 43) {
      $f360p = $links;
    }
  }
  if (isset($f1080p) && $quaty == 1080) {
    $res =  $f1080p ;
  }
  elseif (isset($f720p) && $quaty == 720) {
    $res =  $f720p ;
  }
  elseif (isset($f480p) && $quaty == 480) {
    $res = $f480p;
  }
  else {
    $res =  $f360p ;
  }
  return $res;
}

/*
 * Emplement hook wp_ajax_NameAction()
 */
add_action("wp_ajax_load_more", "load_more");
add_action("wp_ajax_nopriv_load_more", "load_more");

function load_more() {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = check_input_field($_POST[$key]);
    }
    
    
//    print json_encode($_POST);
//    exit;

//    if (!wp_verify_nonce($_POST['nonce_field'], "my_user_vote_nonce")) {
//        exit("No naughty business please");
//    }
    
    $array = array();
    if ($_POST['team_id']) {
        $array = array(
            'post_type' => 'video',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'video_categories',
                    'field' => 'id',
                    'terms' => $_POST['team_id']
                ),
            ),
            'paged' => $_POST['page'],
            'posts_per_page' => 40,
        );
    } else {
        $array = array(
            'post_type' => 'video',
            'posts_per_page' => 40,
            'paged' => $_POST['page'],
        );
    }


    $query = new WP_Query($array);
    $total = $query->max_num_pages;
    if($_POST['page'] > $total){
        exit();
    }
    if ($query->have_posts()):
        while ($query->have_posts()): $query->the_post();
            $image = (wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0] : get_template_directory_uri() . '/images/images/img21.jpg';
            $time = (get_field('time_video', $post->ID)) ? get_field('time_video', $post->ID) : '0 : 00';
            ?>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <!-- Video Box Start -->
                    <div class="videobox2">
                        <figure>
                            <!-- Video Thumbnail Start --> 
                            <a href="<?php print get_permalink(get_the_ID()); ?>">
                                <!--image size-->
                                <!--207 x 138-->
                                <!--size medium 414 x 276-->

                                <img src="<?php print get_bfithumb(414, 276, $image); ?>" alt="<?php print the_title(); ?>" class="img-responsive hovereffect">
                            </a>
                            <div class="vidopts">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i><?php print $time; ?></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <!-- Video Thumbnail End -->
                        </figure>
                        <!-- Video Title -->
                        <h4><a href="<?php print get_permalink(get_the_ID()); ?>"><?php print catchuoi(get_the_title(), 15); ?></a></h4>
                        <!-- Video Title -->
                    </div>
                    <!-- Video Box End -->
                </div>
            <?php
        endwhile;
    endif;
    exit;
}

/*
 * Check input field 
 * 
 */

function check_input_field($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


/*
 * Emplement hook rewrite_rules_array()
 */

add_filter('rewrite_rules_array', 'mmp_rewrite_rules');
function mmp_rewrite_rules($rules)
{
    $newRules = array();

    $newRules['contry/(.+)/?$'] = 'index.php?page_id=915&&k=$matches[]'; 



    return array_merge($newRules, $rules);
}



// register two taxonomies to go with the post type
function wpmudev_register_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'List key',
		'singular_name'     => 'List key',
		'search_items'      => 'Search List key',
		'all_items'         => 'All List key',
		'edit_item'         => 'Edit List key',
		'update_item'       => 'Update List key',
		'add_new_item'      => 'Add New List key',
		'new_item_name'     => 'New List key',
		'menu_name'         => 'List key'
	);
	// register taxonomy
	register_taxonomy( 'listkey', 'key', array(
		'hierarchical' => true,
		'labels' => $labels,
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'wpmudev_register_taxonomy' );



// Shorten any text you want

function ShortTitle($text, $chars_limit = 30) {

// Change to the number of characters you want to display



    $chars_text = strlen($text);

    $text = $text . " ";

    $text = substr($text, 0, $chars_limit);

    $text = substr($text, 0, strrpos($text, ' '));

// If the text has more characters that your limit,
//add ... so the user knows the text is actually longer

    if ($chars_text > $chars_limit) {

        $text = $text . "...";
    }

    return $text;
}







function custom_posts_per_page($query_string) {
global $posts_per;
        $posts_per_category  = 28;
	$query = new WP_Query();
	$query->parse_query($query_string);
	
	if ($query->is_category || is_page_template( 'query_key.php' )) {
		$num = $posts_per_category;
	
        }

        
	if (isset($num)) {
	
	
		if (preg_match("/posts_per_page=/", $query_string)) {
			
			$query_string = preg_replace("/posts_per_page=[0-9]*/", "posts_per_page=$num", $query_string);
		} else {
			if ($query_string != '') {
				$query_string .= '&';
			}
		$query_string .= "posts_per_page=$num";
		}
		
	}
	
return $query_string;
}
add_filter('query_string', 'custom_posts_per_page');
