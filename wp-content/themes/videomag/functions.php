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
    wp_enqueue_style('vm-style', get_stylesheet_uri());
    wp_register_style('vm-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('vm-font-awesome');
    wp_enqueue_script("jquery");
    wp_enqueue_script('vm-jquery-ui', 'http://code.jquery.com/ui/1.9.2/jquery-ui.js', array(), '192', true);
    wp_enqueue_script('vm-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '303', true);
    wp_enqueue_script('vm-responsive-carousel', get_template_directory_uri() . '/js/responsiveCarousel.js', array(), '262', true);
    wp_enqueue_script('vm-respond', get_template_directory_uri() . '/js/respond.min.js', array(), '20120206', true);
    wp_enqueue_script('vm-main-script', get_template_directory_uri() . '/js/functions.js', array(), true);
    wp_enqueue_script('vm-sharing-buttons', THEME_JS . '/share-buttons.js', array(), true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    if (vm_get_option('vm-rtl-option')) {
        wp_enqueue_style('vm-rtl-style', THEME_CSS . '/rtl.css');
    }
}

add_action('wp_enqueue_scripts', 'vm_softcircles_scripts');

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
        if (isset($_REQUEST['vm_videofield_option'])) {
            // get video data
            $video_data = vm_get_videothumbnail($_REQUEST['vm_videofield_option']);
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

    add_action('save_post', 'save_video_meta');

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