<?php

/**
 * Contains all the functions related to sidebar and widget.
 *
 */
function vm_init_widgets() {


    // header slides layout sidebar
    register_sidebar(
            array(
                'name' => 'Header Slides Layout Sidebar',
                'id' => 'header-slides',
                'description' => 'Displays slides when any of slides layout of header is active.',
                'class' => 'headervideos hidden-xs',
                'before_widget' => '<div class="widget %1s %2s">',
                'after_widget' => "</div>",
                'before_title' => '<h2 class="heading">',
                'after_title' => "</h2>",
            )
    );
    
    // homepage featured sidebar
    register_sidebar(
            array(
                'name' => 'Header',
                'id' => 'homepage-featured',
                'description' => 'Displays widgets on homepage featured.',
                'class' => '',
                'before_widget' => '',
                'after_widget' => "",
                'before_title' => '',
                'after_title' => "",
            )
    );
    
    // content second sidebar
    register_sidebar(
            array(
                'name' => 'Dark Sidebar',
                'id' => 'content-one',
                'description' => 'Displays widgets in content area.',
                'class' => '',
                'before_widget' => '<div class="widget %1s %2s">',
                'after_widget' => "</div><div class=\"clearfix\"></div>",
                'before_title' => '<h2 class="heading">',
                'after_title' => "</h2>",
            )
    );

    // content second sidebar
    register_sidebar(
            array(
                'name' => 'Gray Sidebar',
                'id' => 'content-two',
                'description' => 'Displays widgets in content area.',
                'class' => '',
                'before_widget' => '<div class="widget %1s %2s">',
                'after_widget' => "</div><div class=\"clearfix\"></div>",
                'before_title' => '<h2 class="heading">',
                'after_title' => "</h2>",
            )
    );
    
    // footer slides layout sidebar
    register_sidebar(
            array(
                'name' => 'Footer Videos',
                'id' => 'footer-slides',
                'description' => 'Displays slides when any of default layout of footer is active.',
                'class' => '',
                'before_widget' => '<div class="widget %1s %2s">',
                'after_widget' => "</div><div class=\"clearfix\"></div>",
                'before_title' => '<h2 class="heading">',
                'after_title' => "</h2>",
            )
    );

    // footer widgets layout sidebar
    register_sidebar(
            array(
                'name' => 'Footer Widgets Layout Sidebar',
                'id' => 'footer-widgets-layout',
                'description' => 'Displays widgets when any of widgets layout of footer is active.',
                'class' => '',
                'before_widget' => '<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 %1s %2s"><div class="widget">',
                'after_widget' => "</div></div>",
                'before_title' => '<h4 class="heading">',
                'after_title' => "</h4>",
            )
    );

    // footer second sidebar
    register_sidebar(
            array(
                'name' => 'Footer Widgets',
                'id' => 'footer-second',
                'description' => 'Displays widgets on bottom of footer area.',
                'class' => '',
                'before_widget' => '<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"><div class="widget %1s %2s">',
                'after_widget' => "<div class=\"clearfix\"></div></div></div>",
                'before_title' => '<h2 class="heading">',
                'after_title' => "</h2>",
            )
    );


    register_widget('Vm_Videocategory_Posts');
    register_widget('Vm_Featured_Videos');
    register_widget('Vm_Tabbed_Videos');
    register_widget('Vm_Recent_Blog_Posts');
    register_widget('Vm_Featured_Videos_Carousel');
    register_widget('Vm_Postcategory_Grid');
    register_widget('Vm_Posts_Carousel');
    register_widget('Vm_Videocategory_Grid');
    register_widget('Vm_Twitter_Blog_Videos');
}

// Creating the Vm_Videocategory_Posts
class Vm_Videocategory_Posts extends WP_Widget {

    function __construct() {
        parent::__construct(
                'vm_videocategory_posts', __('Videos From Category (VM)', THEME_TEXT_DOMAIN), array('description' => __(
                    'This widget will display latest videos from a category.', THEME_TEXT_DOMAIN
            ),
                )
        );
    }

    public function widget($args, $instance) {

        extract($args);

        $vm_videocategory = $instance['vm_videocategory'];
        $vm_max_posts = $instance['vm_max_posts'];

        echo $before_widget;

        $type = 'video';
        $args = array(
            'post_type' => $type,
            'video_categories' => $vm_videocategory,
            'post_status' => 'publish',
            'posts_per_page' => $vm_max_posts,
        );
        if ($vm_videocategory === 'all') {
            unset($args['video_categories']);
        }

        $my_query = null;
        $my_query = new WP_Query($args);

        if ($my_query->have_posts()) :
            while ($my_query->have_posts()) : $my_query->the_post();

                if ($vm_max_posts == 2) {
                    $class = "col-lg-6 col-md-6 col-sm-6 col-xs-6";
                } else if ($vm_max_posts == 4) {
                    $class = "col-lg-3 col-md-4 col-sm-4 col-xs-6";
                } else if ($vm_max_posts == 6) {
                    $class = "col-lg-2 col-md-4 col-sm-4 col-xs-6";
                }
                ?>
                <div class="<?php echo $class; ?>">
                    <!-- Video Box Start -->
                    <div class="videobox">
                        <figure>
                            <!-- Video Thumbnail Start --> 
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo vm_get_video_post_thumbnail(get_the_ID()); ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive hovereffect" />
                            </a>
                            <!-- Video Thumbnail End -->
                            <!-- Video Title + Info Start -->
                            <figcaption>
                                <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                                <div class="clearfix"></div>
                            </figcaption>
                            <!-- Video Title + Info End -->
                        </figure>
                    </div>
                    <!-- Video Box End -->
                </div>

                <?php
            endwhile;
        endif;

        wp_reset_query();

        echo $after_widget;
    }

    public function form($instance) {

        if ($instance) {
            $vm_videocategory = esc_attr($instance['vm_videocategory']);
            $vm_max_posts = esc_attr($instance['vm_max_posts']);
        } else {
            $vm_videocategory = 0;
            $vm_max_posts = 6;
        }

        $get_terms_args = array(
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
            'taxonomy' => 'video_categories',
            'pad_counts' => false
        );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('vm_videocategory'); ?>"><?php _e('Category', THEME_TEXT_DOMAIN); ?></label>
            <select id="<?php echo $this->get_field_id('vm_videocategory'); ?>" name="<?php echo $this->get_field_name('vm_videocategory', THEME_TEXT_DOMAIN); ?>" class="widefat">
                <option value="all"><?php echo __('All', THEME_TEXT_DOMAIN); ?></option>
                <?php foreach (get_categories($get_terms_args) as $term) { ?>
                    <option <?php selected($vm_videocategory, $term->slug); ?> value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                <?php } ?>      
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_max_posts'); ?>"><?php _e('No. of Posts', THEME_TEXT_DOMAIN); ?></label>
            <select id="<?php echo $this->get_field_id('vm_max_posts'); ?>" 
                    name="<?php echo $this->get_field_name('vm_max_posts'); ?>" class="widefat">
                        <?php for ($i = 2; $i <= 6; $i+=2): ?>
                    <option <?php selected($vm_max_posts, $i); ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {

        $instance = $old_instance;

        $instance['vm_videocategory'] = isset($new_instance['vm_videocategory']) ? strip_tags($new_instance['vm_videocategory']) : NULL;
        $instance['vm_max_posts'] = isset($new_instance['vm_max_posts']) ? strip_tags($new_instance['vm_max_posts']) : NULL;
        return $instance;
    }

}

// end of Vm_Videocategory_Posts
// Creating the Vm_Featured_Videos widget
class Vm_Featured_Videos extends WP_Widget {

    function __construct() {
        parent::__construct(
                'vm_featured_videos', __('Featured Videos (VM)', THEME_TEXT_DOMAIN), array('description' => __(
                    'This widget will display 4 videos selected as featured.', THEME_TEXT_DOMAIN
            ),
                )
        );
    }

    public function widget($args, $instance) {

        extract($args);

        $vm_featured_videos = array();
        $vm_featured_videos = explode(',', $instance['vm_featured_videos']);

        echo $before_widget;

        if (!empty($vm_featured_videos)) :
            for ($i = 0; $i < 4; $i++) :
                if(!empty($vm_featured_videos[$i])) :
                $args = array(
                    'post_type' => 'video',
                    'name' => trim($vm_featured_videos[$i]),
                    'post_status' => 'publish',
                    'numberposts' => 1,
                );

                $fvideo = get_posts($args);

                $video_duration = get_post_meta($fvideo[0]->ID, '_vm_video_duration', true);
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 .col-xs-6">
                    <!-- Video Box Start -->
                    <div class="videobox">
                        <?php //if (!empty($vm_featured_videos[$i])): ?>
                            <figure>
                                <!-- Video Thumbnail Start --> 
                                <a href="<?php echo $fvideo[0]->guid; ?>">
                                    <img src="<?php echo vm_get_video_post_thumbnail($fvideo[0]->ID); ?>" alt="<?php echo $fvideo[0]->post_title; ?>" class="img-responsive hovereffect" />
                                </a>
                                <!-- Video Thumbnail End -->
                                <!-- Video Title + Info Start -->
                                <figcaption>
                                    <h2><a href="<?php echo $fvideo[0]->guid; ?>"><?php echo $fvideo[0]->post_title; ?></a></h2>
                                    <ul>
                                        <!--<li><i class="fa fa-heart"></i>1056</li>-->
                                        <li><i class="fa fa-comments"></i><?php echo comments_number('0', '1', '%'); ?></li>
                                        <li><i class="fa fa-clock-o"></i><?php echo $video_duration; ?></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </figcaption>
                                <!-- Video Title + Info End -->
                            </figure>
                        <?php //endif; ?>
                    </div>
                    <!-- Video Box End -->
                </div>

                <?php
                endif;
            endfor;
        endif;

        wp_reset_postdata();

        echo $after_widget;
    }

    public function form($instance) {

        if ($instance) {
            $vm_featured_videos = esc_attr($instance['vm_featured_videos']);
        } else {
            $vm_featured_videos = NULL;
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('vm_featured_videos'); ?>"><?php _e('Featured Video Post Slugs', THEME_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('vm_featured_videos'); ?>" 
                   name="<?php echo $this->get_field_name('vm_featured_videos'); ?>" 
                   class="widefat" value="<?php echo $vm_featured_videos; ?>" />
        </p>

        <?php
    }

    public function update($new_instance, $old_instance) {

        $instance = $old_instance;

        $instance['vm_featured_videos'] = isset($new_instance['vm_featured_videos']) ? strip_tags($new_instance['vm_featured_videos']) : NULL;
        return $instance;
    }

}

// end of Vm_Featured_Videos
// Creating the Vm_Tabbed_Videos widget 
class Vm_Tabbed_Videos extends WP_Widget {

    function __construct() {
        parent::__construct(
                'vm_tabbed_videos', __('Featured Tabbed Videos (VM)', THEME_TEXT_DOMAIN), array('description' => __(
                    'This widget will display 4 videos selected as featured as a tabbed slider.', THEME_TEXT_DOMAIN
            ),
                )
        );
    }

    public function widget($args, $instance) {

        extract($args);

        $vm_tabbed_videos = array();
        $vm_tabbed_videos = explode(',', $instance['vm_tabbed_videos']);
        $vm_tabbed_data = array();

        echo $before_widget;

        $loop_length = (count($vm_tabbed_videos) < 4) ? count($vm_tabbed_videos) : 4;

        if (!empty($vm_tabbed_videos)) :
            for ($i = 0; $i < $loop_length; $i++) :

                if (!empty($vm_tabbed_videos[$i])) {
                    $args = array(
                        'post_type' => 'video',
                        'name' => trim($vm_tabbed_videos[$i]),
                        'post_status' => 'publish',
                        'numberposts' => 1,
                    );

                    $fvideo = get_posts($args);
                    if (!empty($fvideo)) {
                        $video_duration = get_post_meta($fvideo[0]->ID, '_vm_video_duration', true);

                        $vm_tabbed_data[] = array(
                            'data' => $fvideo[0],
                            'thumbnail' => vm_get_video_post_thumbnail($fvideo[0]->ID),
                            'duration' => $video_duration,
                        );
                    }
                }

            endfor;
        endif;
        //echo '<pre>'; print_r($vm_tabbed_data); die();
        ?>
        <!-- Video Slider Start -->
        <div class="videoslider backcolor">
            <!-- Video Box Start -->
            <div class="tabbed_content">
                <?php if (!empty($vm_tabbed_data)): ?>
                    <div class='tabs'>
                        <div class='moving_bg'>
                            <span class="pointer"></span>
                        </div>
                        <?php foreach ($vm_tabbed_data as $tvideo): ?>

                            <div class='tab_item'>
                                <h5><?php echo $tvideo['data']->post_title; ?></h5>
                                <span class="hidden-xs"><?php echo date('F d,Y', strtotime($tvideo['data']->post_date)); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class='slide_content'>
                        <div class='tabslider'>
                            <?php foreach ($vm_tabbed_data as $tvideo): ?>
                                <div class="video">
                                    <!-- Video Box Start -->
                                    <div class="videobox">
                                        <figure>
                                            <!-- Video Thumbnail Start --> 
                                            <a href="<?php echo $tvideo['data']->guid; ?>">
                                                <img src="<?php echo $tvideo['thumbnail']; ?>" alt="<?php echo $tvideo['data']->post_title; ?>" class="img-responsive hovereffect" />
                                            </a>
                                            <!-- Video Thumbnail End -->
                                            <a href="#" class="playicon"><i class="fa fa-play-circle-o"></i></a>
                                            <!-- Video Title + Info Start -->
                                            <figcaption>
                                                <h2><a href="<?php echo $tvideo['data']->guid; ?>"><?php echo $tvideo['data']->post_title; ?></a></h2>
                                                <ul>
                                                    <!--<li><i class="fa fa-heart"></i>1056</li>-->
                                                    <li><i class="fa fa-comments"></i><?php echo comments_number('0', '1', '%'); ?></li>
                                                    <li><i class="fa fa-clock-o"></i><?php echo $tvideo['duration']; ?></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </figcaption>
                                            <!-- Video Title + Info End -->
                                        </figure>
                                    </div>
                                    <!-- Video Box End -->
                                </div>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                            <!-- content goes here -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <!-- Video Slider End -->

        <div class="clearfix"></div>


        <?php
        echo $after_widget;
    }

    public function form($instance) {

        if ($instance) {
            $vm_tabbed_videos = esc_attr($instance['vm_tabbed_videos']);
        } else {
            $vm_tabbed_videos = NULL;
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('vm_tabbed_videos'); ?>"><?php _e('Video Post Slugs', THEME_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('vm_tabbed_videos'); ?>" 
                   name="<?php echo $this->get_field_name('vm_tabbed_videos'); ?>" 
                   class="widefat" value="<?php echo $vm_tabbed_videos; ?>" />
        </p>

        <?php
    }

    public function update($new_instance, $old_instance) {

        $instance = $old_instance;

        $instance['vm_tabbed_videos'] = isset($new_instance['vm_tabbed_videos']) ? strip_tags($new_instance['vm_tabbed_videos']) : NULL;
        return $instance;
    }

}

// end of Vm_Tabbed_Videos
// Creating the Vm_Recent_Blog_Posts widget 
class Vm_Recent_Blog_Posts extends WP_Widget {

    function __construct() {
        parent::__construct(
                'vm_recent_blog_posts', __('Recent Blog Posts (VM)', THEME_TEXT_DOMAIN), array('description' => __(
                    'This widget will display latest blog posts.', THEME_TEXT_DOMAIN
            ),
                )
        );
    }

    public function widget($args, $instance) {

        extract($args);

        $vm_recent_blog_posts_category = $instance['vm_recent_blog_posts_category'];
        $vm_recent_blog_posts_title = $instance['vm_recent_blog_posts_title'];

        echo $before_widget;

        $type = 'post';
        $args = array(
            'post_type' => $type,
            'category_name' => $vm_recent_blog_posts_category,
            'post_status' => 'publish',
            'posts_per_page' => 4,
        );
        
        if ($vm_recent_blog_posts_category === 'all') {
            unset($args['category_name']);
        }

        $vm_query = new WP_Query($args);
        ?>
        <!-- Contents Section Started -->
        <div class="sections">
            <h2 class="heading"><?php echo $vm_recent_blog_posts_title; ?></h2>
            <div class="clearfix"></div>
            <div class="row">
                <?php
                if ($vm_query->have_posts()) :
                    $i = 0;
                    while ($vm_query->have_posts()) : $vm_query->the_post();
                        ?>
                        <?php if ($i == 0 || $i == 2): ?>
                            <?php $i++; ?>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <?php endif; ?>

                            <?php if ($i == 1): ?>
                                <?php $i++; ?>
                                <div <?php post_class('blogpost'); ?>>
                                    <figure>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('single-post-thumbnail', array('class' => 'img-responsive hovereffect')); ?>
                                            <?php endif; ?>
                                        </a>
                                        <figcaption>
                                            <ul>
                                                <li><i class="fa fa-calendar"></i><?php echo the_time('d-m-Y'); ?></li>
                                                <li>
                                                    <i class="fa fa-align-justify"></i>
                                                    <?php the_category(); ?>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="text">
                                        <h4 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-xs backcolor">Read More</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            <?php else: ?>
                                <?php if ($i == 3): ?>
                                    <?php $i++; ?>
                                    <ul class="bloglist">
                                    <?php endif; ?>
                                    <li <?php post_class(); ?>>
                                        <div class="media">
                                            <a href="<?php the_permalink(); ?>" class="pull-left">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail'); ?> 
                                                    <img src="<?php echo $thumbnail[0]; ?>" alt="<?php echo get_the_title(); ?>" class="media-object img-responsive hovereffect" />
                                                <?php endif; ?>
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                <ul>
                                                    <li><i class="fa fa-calendar"></i><?php the_time('d-m-Y'); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                <?php endif; ?>
                                <?php if ($i == 2): ?>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
        <!-- Contents Section End -->

        <?php
        echo $after_widget;
    }

    public function form($instance) {

        if ($instance) {
            $vm_recent_blog_posts_title = esc_attr($instance['vm_recent_blog_posts_title']);
            $vm_recent_blog_posts_category = esc_attr($instance['vm_recent_blog_posts_category']);
        } else {
            $vm_recent_blog_posts_title = NULL;
            $vm_recent_blog_posts_category = 0;
        }

        $get_terms_args = array(
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
            'taxonomy' => 'category',
            'pad_counts' => false
        );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('vm_recent_blog_posts_title'); ?>"><?php _e('Title', THEME_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('vm_recent_blog_posts_title'); ?>" 
                   name="<?php echo $this->get_field_name('vm_recent_blog_posts_title'); ?>" 
                   class="widefat" value="<?php echo $vm_recent_blog_posts_title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_recent_blog_posts_category'); ?>"><?php _e('Category', THEME_TEXT_DOMAIN); ?></label>
            <select id="<?php echo $this->get_field_id('vm_recent_blog_posts_category'); ?>" name="<?php echo $this->get_field_name('vm_recent_blog_posts_category'); ?>" class="widefat">
                <option value="all"><?php echo __('All', THEME_TEXT_DOMAIN); ?></option>
                <?php foreach (get_categories($get_terms_args) as $term) { ?>
                    <option <?php selected($vm_recent_blog_posts_category, $term->slug); ?> value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                <?php } ?>      
            </select>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {

        $instance = $old_instance;

        $instance['vm_recent_blog_posts_title'] = isset($new_instance['vm_recent_blog_posts_title']) ? strip_tags($new_instance['vm_recent_blog_posts_title']) : NULL;
        $instance['vm_recent_blog_posts_category'] = isset($new_instance['vm_recent_blog_posts_category']) ? strip_tags($new_instance['vm_recent_blog_posts_category']) : NULL;
        return $instance;
    }

}

// end of Vm_Recent_Blog_Posts
// Creating the Vm_Featured_Videos_Carousel widget 
class Vm_Featured_Videos_Carousel extends WP_Widget {

    function __construct() {
        parent::__construct(
                'vm_featured_videos_carousel', __('Featured Videos Carousel (VM)', THEME_TEXT_DOMAIN), array('description' => __(
                    'This widget will display 3 videos as carousel in a column.', THEME_TEXT_DOMAIN
            ),
                )
        );
    }

    public function widget($args, $instance) {

        extract($args);

        $slides_counter = 0;
        $post_type = 'video';
        $posts = array();
        $vm_featured_videos_carousel_title = $instance['vm_featured_videos_carousel_title'];
        $vm_featured_videos_carousel_posts = explode(',', $instance['vm_featured_videos_carousel_posts']);

        if (!empty($vm_featured_videos_carousel_posts)) {
            foreach ($vm_featured_videos_carousel_posts as $fvc) {
                $post_id = vm_get_id_by_slug($fvc, $post_type);
                if (!empty($post_id)) {
                    $posts[] = $post_id;
                }
            }
        }

        echo $before_widget;

        echo $before_title . $vm_featured_videos_carousel_title . $after_title;

        if (!empty($posts)) :
            $carousel_counter = uniqid();
            ?>
            <div class="carousels">
                <div id="carouselvideo<?php echo $carousel_counter;?>" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php
                        $args = array(
                            'post_type' => $post_type,
                            'post_status' => 'publish',
                            'post__in' => $posts,
                        );

                        $vm_query = new WP_Query($args);
                        $active = true;

                        foreach (new WP_Query_Columns($vm_query, 3) as $column_count) :
                            $slides_counter++;
                            ?>
                            <div class="item <?php echo $active ? 'active' : ''; ?>">
                                <?php $active = false; ?>
                                <?php
                                while ($column_count--):
                                    $vm_query->the_post();

                                    $video_duration = get_post_meta(get_the_ID(), '_vm_video_duration', true);
                                    ?>
                                    <!-- Video Box Start -->
                                    <div class="videobox2">
                                        <figure>
                                            <!-- Video Thumbnail Start --> 
                                            <a href="<?php the_permalink(); ?>">
                                                <img src="<?php echo vm_get_video_post_thumbnail(get_the_ID()); ?>" alt="<?php the_title(); ?>" class="img-responsive hovereffect" />
                                            </a>
                                            <!-- Video Thumbnail End -->
                                            <!-- Video Info Start -->
                                            <div class="vidopts">
                                                <ul>
                                                    <!--<li><i class="fa fa-heart"></i>1056</li>-->
                                                    <li><i class="fa fa-clock-o"></i><?php echo $video_duration; ?></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <!-- Video Info End -->
                                        </figure>
                                        <!-- Video Title Start -->
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <!-- Video Title End -->
                                    </div>
                                    <!-- Video Box End -->
                                <?php endwhile; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="carouselpagination"> 
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <?php for ($i = 0; $i < $slides_counter; $i++): ?>
                                    <li data-target="#carouselvideo<?php echo $carousel_counter;?>" data-slide-to="<?php echo $i; ?>" <?php
                                    if ($i == 0) {
                                        echo 'class="active"';
                                    }
                                    ?>></li>
                                    <?php endfor; ?>
                            </ol>
                        </div>
                </div>
                <!-- Video Box End -->
            </div>
            <?php
        endif;

        echo $after_widget;
        wp_reset_postdata();
    }

    public function form($instance) {

        if ($instance) {
            $vm_featured_videos_carousel_title = esc_attr($instance['vm_featured_videos_carousel_title']);
            $vm_featured_videos_carousel_posts = esc_attr($instance['vm_featured_videos_carousel_posts']);
        } else {
            $vm_featured_videos_carousel_title = NULL;
            $vm_featured_videos_carousel_posts = NULL;
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('vm_featured_videos_carousel_title'); ?>"><?php _e('Title', THEME_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('vm_featured_videos_carousel_title'); ?>" 
                   name="<?php echo $this->get_field_name('vm_featured_videos_carousel_title'); ?>" 
                   class="widefat" value="<?php echo $vm_featured_videos_carousel_title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_featured_videos_carousel_posts'); ?>"><?php _e('Featured Video Post Slugs', THEME_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('vm_featured_videos_carousel_posts'); ?>" 
                   name="<?php echo $this->get_field_name('vm_featured_videos_carousel_posts'); ?>" 
                   class="widefat" value="<?php echo $vm_featured_videos_carousel_posts; ?>" />
        </p>

        <?php
    }

    public function update($new_instance, $old_instance) {

        $instance = $old_instance;

        $instance['vm_featured_videos_carousel_title'] = isset($new_instance['vm_featured_videos_carousel_title']) ? strip_tags($new_instance['vm_featured_videos_carousel_title']) : NULL;
        $instance['vm_featured_videos_carousel_posts'] = isset($new_instance['vm_featured_videos_carousel_posts']) ? strip_tags($new_instance['vm_featured_videos_carousel_posts']) : NULL;
        return $instance;
    }

}

// end of Vm_Featured_Videos_Carousel
// Creating the Vm_Postcategory_Grid widget 
class Vm_Postcategory_Grid extends WP_Widget {

    function __construct() {
        parent::__construct(
                'vm_postcategory_grid', __('Posts Grid (VM)', THEME_TEXT_DOMAIN), array('description' => __(
                    'This widget will display latest posts from selected category in a grid.', THEME_TEXT_DOMAIN
            ),
                )
        );
    }

    public function widget($args, $instance) {

        extract($args);

        $vm_postcategory_title = $instance['vm_postcategory_title'];
        $vm_postcategory_category = $instance['vm_postcategory_category'];
        $vm_postcategory_columns = $instance['vm_postcategory_columns'];
        $vm_postcategory_maxposts = $instance['vm_postcategory_maxposts'];
        $vm_postcategory_carousel = $instance['vm_postcategory_carousel'];
        $vm_postcategory_details = $instance['vm_postcategory_details'];
        $vm_postcategory_readmore = $instance['vm_postcategory_readmore'];

        if ($vm_postcategory_columns == 1) {
            $class = "col-lg-12 col-md-12 col-sm-12 col-xs-12";
        } else if ($vm_postcategory_columns == 2) {
            $class = "col-lg-6 col-md-6 col-sm-6 col-xs-12";
        } else if ($vm_postcategory_columns == 3) {
            $class = "col-lg-4 col-md-6 col-sm-6 col-xs-12";
        }

        $crs_wrapper_class = "crsl-items";

        if ($vm_postcategory_carousel) {
            $row_class = 'media-carousal';
            $class = 'crsl-item';

            if ($vm_postcategory_columns == 1) {
                $crs_wrapper_class = "crsl-items1";
            } else if ($vm_postcategory_columns == 2) {
                $crs_wrapper_class = "crsl-items2";
            } else if ($vm_postcategory_columns == 3) {
                $crs_wrapper_class = "crsl-items3";
            }
        } else {
            $row_class = 'row';
        }

        echo $before_widget;

        $type = 'post';
        $args = array(
            'post_type' => $type,
            'category_name' => $vm_postcategory_category,
            'post_status' => 'publish',
            'posts_per_page' => $vm_postcategory_maxposts,
        );

        if ($vm_postcategory_category === 'all') {
            unset($args['category_name']);
        }

        $vm_query = new WP_Query($args);
        ?>
        <!-- Contents Section Started -->
        <div class="sections">
            <h2 class="heading"><?php echo $vm_postcategory_title; ?></h2>
            <div class="clearfix"></div>
            <div class="<?php echo $row_class; ?>">
                <?php if ($vm_postcategory_carousel): ?>
                    <?php $navid = uniqid(); ?>
                    <div id="nav-0<?php echo $navid; ?>" class="crsl-nav">
                        <a href="#" class="previous"><i class="fa fa-arrow-circle-o-left"></i></a>
                        <a href="#" class="next"><i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                    <div class="<?php echo $crs_wrapper_class; ?>" data-navigation="nav-0<?php echo $navid; ?>">
                        <div class="crsl-wrap">
                        <?php endif; ?>

                        <?php
                        if ($vm_query->have_posts()) :
                            while ($vm_query->have_posts()) : $vm_query->the_post();
                                ?>
                                <div class="<?php echo $class; ?>">
                                    <!-- Video Box Start -->
                                    <div <?php post_class('blogposttwo'); ?>>
                                        <figure>
                                            <!-- Video Thumbnail Start --> 
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail('vm-thumb', array('class' => 'img-responsive hovereffect')); ?>
                                                <?php endif; ?>
                                            </a>
                                            <!-- Video Thumbnail End -->
                                        </figure>
                                        <div class="text">
                                            <h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
                                            <?php if ($vm_postcategory_details): ?>
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-calendar"></i>
                                                        <?php the_time('d-m-Y'); ?>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-align-justify"></i>
                                                        <?php the_category(); ?>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            <?php endif; ?>
                                            <?php if ($vm_postcategory_readmore): ?>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-xs backcolor">Read More</a>
                                            <?php endif; ?>
                                        </div>
                                        <!-- Video Title -->
                                        <!-- Video Title -->
                                    </div>
                                    <!-- Blog Post Two End -->
                                    <div class="clearfix"></div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                        <?php if ($vm_postcategory_carousel): ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <!-- Contents Section End -->
        <div class="clearfix"></div>
        <?php
        echo $after_widget;
    }

    public function form($instance) {

        if ($instance) {
            $vm_postcategory_title = esc_attr($instance['vm_postcategory_title']);
            $vm_postcategory_category = esc_attr($instance['vm_postcategory_category']);
            $vm_postcategory_columns = esc_attr($instance['vm_postcategory_columns']);
            $vm_postcategory_maxposts = esc_attr($instance['vm_postcategory_maxposts']);
            $vm_postcategory_carousel = esc_attr($instance['vm_postcategory_carousel']);
            $vm_postcategory_details = esc_attr($instance['vm_postcategory_details']);
            $vm_postcategory_readmore = esc_attr($instance['vm_postcategory_readmore']);
        } else {
            $vm_postcategory_title = NULL;
            $vm_postcategory_category = NULL;
            $vm_postcategory_columns = 3;
            $vm_postcategory_maxposts = 6;
            $vm_postcategory_carousel = 0;
            $vm_postcategory_details = 0;
            $vm_postcategory_readmore = 0;
        }

        $get_terms_args = array(
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
            'taxonomy' => 'category',
            'pad_counts' => false
        );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('vm_postcategory_title'); ?>"><?php _e('Title', THEME_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('vm_postcategory_title'); ?>" 
                   name="<?php echo $this->get_field_name('vm_postcategory_title'); ?>" 
                   class="widefat" value="<?php echo $vm_postcategory_title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_postcategory_category'); ?>"><?php _e('Video Category', THEME_TEXT_DOMAIN); ?></label>
            <select id="<?php echo $this->get_field_id('vm_postcategory_category'); ?>" name="<?php echo $this->get_field_name('vm_postcategory_category'); ?>" class="widefat">
                <option value="all"><?php echo __('All', THEME_TEXT_DOMAIN); ?></option>
                <?php foreach (get_categories($get_terms_args) as $term) { ?>
                    <option <?php selected($vm_postcategory_category, $term->slug); ?> value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                <?php } ?>      
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_postcategory_columns'); ?>"><?php _e('Grid Columns', THEME_TEXT_DOMAIN); ?></label>
            <select id="<?php echo $this->get_field_id('vm_postcategory_columns'); ?>" 
                    name="<?php echo $this->get_field_name('vm_postcategory_columns'); ?>" class="widefat">
                        <?php for ($i = 1; $i <= 3; $i++): ?>
                    <option <?php selected($vm_postcategory_columns, $i); ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_postcategory_maxposts'); ?>"><?php _e('No. of Posts', THEME_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('vm_postcategory_maxposts'); ?>" 
                   name="<?php echo $this->get_field_name('vm_postcategory_maxposts'); ?>" 
                   class="widefat" value="<?php echo $vm_postcategory_maxposts; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_postcategory_carousel'); ?>"><?php _e('Carousel', THEME_TEXT_DOMAIN); ?></label>
            <input type="checkbox" id="<?php echo $this->get_field_id('vm_postcategory_carousel'); ?>" 
                   name="<?php echo $this->get_field_name('vm_postcategory_carousel'); ?>" 
                   class="widefat" value="1" <?php checked($vm_postcategory_carousel, 1); ?> />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_postcategory_details'); ?>"><?php _e('Post Details', THEME_TEXT_DOMAIN); ?></label>
            <input type="checkbox" id="<?php echo $this->get_field_id('vm_postcategory_details'); ?>" 
                   name="<?php echo $this->get_field_name('vm_postcategory_details'); ?>" 
                   class="widefat" value="1" <?php checked($vm_postcategory_details, 1); ?> />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_postcategory_readmore'); ?>"><?php _e('Read More Button', THEME_TEXT_DOMAIN); ?></label>
            <input type="checkbox" id="<?php echo $this->get_field_id('vm_postcategory_readmore'); ?>" 
                   name="<?php echo $this->get_field_name('vm_postcategory_readmore'); ?>" 
                   class="widefat" value="1" <?php checked($vm_postcategory_readmore, 1); ?> />
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {

        $instance = $old_instance;

        $instance['vm_postcategory_title'] = isset($new_instance['vm_postcategory_title']) ? strip_tags($new_instance['vm_postcategory_title']) : NULL;
        $instance['vm_postcategory_details'] = isset($new_instance['vm_postcategory_details']) ? strip_tags($new_instance['vm_postcategory_details']) : NULL;
        $instance['vm_postcategory_category'] = isset($new_instance['vm_postcategory_category']) ? strip_tags($new_instance['vm_postcategory_category']) : NULL;
        $instance['vm_postcategory_columns'] = isset($new_instance['vm_postcategory_columns']) ? strip_tags($new_instance['vm_postcategory_columns']) : NULL;
        $instance['vm_postcategory_maxposts'] = isset($new_instance['vm_postcategory_maxposts']) ? strip_tags($new_instance['vm_postcategory_maxposts']) : NULL;
        $instance['vm_postcategory_carousel'] = isset($new_instance['vm_postcategory_carousel']) ? strip_tags($new_instance['vm_postcategory_carousel']) : NULL;
        $instance['vm_postcategory_readmore'] = isset($new_instance['vm_postcategory_readmore']) ? strip_tags($new_instance['vm_postcategory_readmore']) : NULL;
        return $instance;
    }

}

// end of Vm_Postcategory_Grid
// Creating the Vm_Posts_Carousel widget 
class Vm_Posts_Carousel extends WP_Widget {

    function __construct() {
        parent::__construct(
                'vm_posts_carousel', __('Posts Carousel (VM)', THEME_TEXT_DOMAIN), array('description' => __(
                    'This widget will display 3 posts as carousel in a column.', THEME_TEXT_DOMAIN
            ),
                )
        );
    }

    public function widget($args, $instance) {

        extract($args);

        $slides_counter = 0;
        $post_type = 'post';
        $posts = array();
        $vm_posts_carousel_title = $instance['vm_posts_carousel_title'];
        $vm_posts_carousel_posts = explode(',', $instance['vm_posts_carousel_posts']);

        if (!empty($vm_posts_carousel_posts)) {
            foreach ($vm_posts_carousel_posts as $fvc) {
                $post_id = vm_get_id_by_slug($fvc, $post_type);
                if (!empty($post_id)) {
                    $posts[] = $post_id;
                }
            }
        }

        echo $before_widget;

        echo $before_title . $vm_posts_carousel_title . $after_title;

        if (!empty($posts)) :
            $carousel_counter = uniqid();
            ?>
            <div class="carousels">
                <div id="carousel-blog<?php echo $carousel_counter; ?>" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php
                        $args = array(
                            'post_type' => $post_type,
                            'post_status' => 'publish',
                            'post__in' => $posts,
                        );

                        $vm_query = new WP_Query($args);
                        $active = true;

                        foreach (new WP_Query_Columns($vm_query, 3) as $column_count) :
                            $slides_counter++;
                            ?>
                            <div class="item <?php echo $active ? 'active' : ''; ?>">
                                <ul class="bloglist">
                                    <?php $active = false; ?>
                                    <?php
                                    while ($column_count--):
                                        $vm_query->the_post();
                                        ?>
                                        <!-- Video Box Start -->
                                        <li>
                                            <figure>
                                                <!-- Video Thumbnail Start --> 
                                                <?php if (has_post_thumbnail()): ?>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail'); ?> 
                                                        <img src="<?php echo $thumbnail[0]; ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive hovereffect" />
                                                    </a>
                                                <?php endif; ?>
                                            </figure>
                                            <div class="text">
                                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                <ul>
                                                    <li><i class="fa fa-calendar"></i><?php the_time('d-m-Y'); ?></li>
                                                    <li> <i class="fa fa-align-justify"></i><?php the_category(', '); ?></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Video Box End -->
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <div class="carouselpagination"> 
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php for ($i = 0; $i < $slides_counter; $i++): ?>
                                <li data-target="#carousel-blog<?php echo $carousel_counter; ?>" data-slide-to="<?php echo $i; ?>" class<?php
                                if ($i == 0) {
                                    echo '="active"';
                                }
                                ?>></li>
                                <?php endfor; ?>
                        </ol>
                    </div>
                </div>
                <!-- Video Box End -->
            </div>
            <?php
        endif;

        echo $after_widget;
    }

    public function form($instance) {

        if ($instance) {
            $vm_posts_carousel_title = esc_attr($instance['vm_posts_carousel_title']);
            $vm_posts_carousel_posts = esc_attr($instance['vm_posts_carousel_posts']);
        } else {
            $vm_posts_carousel_title = NULL;
            $vm_posts_carousel_posts = NULL;
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('vm_posts_carousel_title'); ?>"><?php _e('Title', THEME_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('vm_posts_carousel_title'); ?>" 
                   name="<?php echo $this->get_field_name('vm_posts_carousel_title'); ?>" 
                   class="widefat" value="<?php echo $vm_posts_carousel_title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_posts_carousel_posts'); ?>"><?php _e('Featured Video Post Slugs', THEME_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('vm_posts_carousel_posts'); ?>" 
                   name="<?php echo $this->get_field_name('vm_posts_carousel_posts'); ?>" 
                   class="widefat" value="<?php echo $vm_posts_carousel_posts; ?>" />
        </p>

        <?php
    }

    public function update($new_instance, $old_instance) {

        $instance = $old_instance;

        $instance['vm_posts_carousel_title'] = isset($new_instance['vm_posts_carousel_title']) ? strip_tags($new_instance['vm_posts_carousel_title']) : NULL;
        $instance['vm_posts_carousel_posts'] = isset($new_instance['vm_posts_carousel_posts']) ? strip_tags($new_instance['vm_posts_carousel_posts']) : NULL;
        return $instance;
    }

}

// end of Vm_Posts_Carousel
// Creating Vm_Videocategory_Grid the widget 
class Vm_Videocategory_Grid extends WP_Widget {

    function __construct() {
        parent::__construct(
                'vm_videocategory_grid', __('Videos Grid (VM)', THEME_TEXT_DOMAIN), array('description' => __(
                    'This widget will display latest posts from selected video category in a grid.', THEME_TEXT_DOMAIN
            ),
                )
        );
    }

    public function widget($args, $instance) {

        extract($args);

        $vm_videocategory_title = $instance['vm_videocategory_title'];
        $vm_videocategory_category = $instance['vm_videocategory_category'];
        $vm_videocategory_columns = $instance['vm_videocategory_columns'];
        $vm_videocategory_maxposts = $instance['vm_videocategory_maxposts'];
        $vm_videocategory_carousel = $instance['vm_videocategory_carousel'];
        $vm_videocategory_duration = $instance['vm_videocategory_duration'];
        $vm_videocategory_loveit = NULL; //$instance['vm_videocategory_loveit'];

        if ($vm_videocategory_columns == 1) {
            $class = "col-lg-12 col-md-12 col-sm-12 col-xs-12";
        } else if ($vm_videocategory_columns == 2) {
            $class = "col-lg-6 col-md-6 col-sm-6 col-xs-12";
        } else if ($vm_videocategory_columns == 3) {
            $class = "col-lg-4 col-md-6 col-sm-6 col-xs-12";
        }

        $crs_wrapper_class = 'crsl-items';

        if ($vm_videocategory_carousel) {
            $row_class = 'media-carousal';
            $class = 'crsl-item';

            if ($vm_videocategory_columns == 1) {
                $crs_wrapper_class = "crsl-items1";
            } else if ($vm_videocategory_columns == 2) {
                $crs_wrapper_class = "crsl-items2";
            } else if ($vm_videocategory_columns == 3) {
                $crs_wrapper_class = "crsl-items3";
            }
        } else {
            $row_class = 'row';
        }

        echo $before_widget;

        $type = 'video';
        $args = array(
            'post_type' => $type,
            'video_categories' => $vm_videocategory_category,
            'post_status' => 'publish',
            'posts_per_page' => $vm_videocategory_maxposts,
        );

        if ($vm_videocategory_category === 'all') {
            unset($args['video_categories']);
        }

        $vm_query = new WP_Query($args);
        ?>
        <!-- Contents Section Started -->
        <div class="sections">
            <h2 class="heading"><?php echo $vm_videocategory_title; ?></h2>
            <div class="clearfix"></div>
            <div class="<?php echo $row_class; ?>">
                <?php if ($vm_videocategory_carousel): ?>
                    <?php $navid = uniqid(); ?>
                    <div id="nav-<?php echo $navid; ?>" class="crsl-nav">
                        <a href="#" class="previous"><i class="fa fa-arrow-circle-o-left"></i></a>
                        <a href="#" class="next"><i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                    <div class="<?php echo $crs_wrapper_class; ?>" data-navigation="nav-<?php echo $navid; ?>">
                        <div class="crsl-wrap">
                <?php endif; ?>

                        <?php
                        if ($vm_query->have_posts()) :
                            while ($vm_query->have_posts()) : $vm_query->the_post();

                                $video_duration = get_post_meta(get_the_ID(), '_vm_video_duration', true);
                                ?>
                                <div class="<?php echo $class; ?>">
                                    <!-- Video Box Start -->
                                    <div class="videobox2">
                                        <figure>
                                            <!-- Video Thumbnail Start --> 
                                            <a href="<?php the_permalink(); ?>">
                                                <img src="<?php echo vm_get_video_post_thumbnail(get_the_ID()); ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive hovereffect" />
                                            </a>
                                            <div class="vidopts">
                                                <ul>
                                                    <?php if (!empty($vm_videocategory_loveit)) : ?>
                                                    <li><i class="fa fa-heart"></i><?php echo $vm_videocategory_loveit; ?></li>
                                                    <?php endif; ?>
                                                    <li><i class="fa fa-clock-o"></i><?php echo $video_duration; ?></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <!-- Video Thumbnail End -->
                                        </figure>
                                        <!-- Video Title -->
                                        <h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
                                        <!-- Video Title -->
                                    </div>
                                    <!-- Video Box End -->
                                </div>

                <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
                        <?php if ($vm_videocategory_carousel): ?>
                        </div>
                    </div>
        <?php endif; ?>
            </div>
        </div>
        <!-- Contents Section End -->
        <div class="clearfix"></div>
        <?php
        echo $after_widget;
    }

    public function form($instance) {

        if ($instance) {
            $vm_videocategory_title = esc_attr($instance['vm_videocategory_title']);
            $vm_videocategory_category = esc_attr($instance['vm_videocategory_category']);
            $vm_videocategory_columns = esc_attr($instance['vm_videocategory_columns']);
            $vm_videocategory_maxposts = esc_attr($instance['vm_videocategory_maxposts']);
            $vm_videocategory_carousel = esc_attr($instance['vm_videocategory_carousel']);
            $vm_videocategory_duration = esc_attr($instance['vm_videocategory_duration']);
            //$vm_videocategory_loveit = esc_attr($instance['vm_videocategory_loveit']);
        } else {
            $vm_videocategory_title = NULL;
            $vm_videocategory_category = NULL;
            $vm_videocategory_columns = 3;
            $vm_videocategory_maxposts = 6;
            $vm_videocategory_carousel = 0;
            $vm_videocategory_duration = 0;
            //$vm_videocategory_loveit = 0;
        }

        $get_terms_args = array(
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
            'taxonomy' => 'video_categories',
            'pad_counts' => false
        );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('vm_videocategory_title'); ?>"><?php _e('Title', THEME_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('vm_videocategory_title'); ?>" 
                   name="<?php echo $this->get_field_name('vm_videocategory_title'); ?>" 
                   class="widefat" value="<?php echo $vm_videocategory_title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_videocategory_category'); ?>"><?php _e('Video Category', THEME_TEXT_DOMAIN); ?></label>
            <select id="<?php echo $this->get_field_id('vm_videocategory_category'); ?>" name="<?php echo $this->get_field_name('vm_videocategory_category'); ?>" class="widefat">
                <option value="all"><?php echo __('All', THEME_TEXT_DOMAIN); ?></option>
                <?php foreach (get_categories($get_terms_args) as $term) { ?>
                    <option <?php selected($vm_videocategory_category, $term->slug); ?> value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                <?php } ?>      
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_videocategory_columns'); ?>"><?php _e('Grid Columns', THEME_TEXT_DOMAIN); ?></label>
            <select id="<?php echo $this->get_field_id('vm_videocategory_columns'); ?>" 
                    name="<?php echo $this->get_field_name('vm_videocategory_columns'); ?>" class="widefat">
                        <?php for ($i = 1; $i <= 3; $i++): ?>
                    <option <?php selected($vm_videocategory_columns, $i); ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_videocategory_maxposts'); ?>"><?php _e('No. of Posts', THEME_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('vm_videocategory_maxposts'); ?>" 
                   name="<?php echo $this->get_field_name('vm_videocategory_maxposts'); ?>" 
                   class="widefat" value="<?php echo $vm_videocategory_maxposts; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_videocategory_carousel'); ?>"><?php _e('Carousel', THEME_TEXT_DOMAIN); ?></label>
            <input type="checkbox" id="<?php echo $this->get_field_id('vm_videocategory_carousel'); ?>" 
                   name="<?php echo $this->get_field_name('vm_videocategory_carousel'); ?>" 
                   class="widefat" value="1" <?php checked($vm_videocategory_carousel, 1); ?> />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_videocategory_duration'); ?>"><?php _e('Video Duration', THEME_TEXT_DOMAIN); ?></label>
            <input type="checkbox" id="<?php echo $this->get_field_id('vm_videocategory_duration'); ?>" 
                   name="<?php echo $this->get_field_name('vm_videocategory_duration'); ?>" 
                   class="widefat" value="1" <?php checked($vm_videocategory_duration, 1); ?> />
        </p>
        <?php /* <p>
          <label for="<?php echo $this->get_field_id('vm_videocategory_loveit'); ?>"><?php _e('Loveit Button', THEME_TEXT_DOMAIN); ?></label>
          <input type="checkbox" id="<?php echo $this->get_field_id('vm_videocategory_loveit'); ?>"
          name="<?php echo $this->get_field_name('vm_videocategory_loveit'); ?>"
          class="widefat" value="1" <?php checked($vm_videocategory_loveit, 1); ?> />
          </p> */ ?>
        <?php
    }

    public function update($new_instance, $old_instance) {

        $instance = $old_instance;

        $instance['vm_videocategory_title'] = isset($new_instance['vm_videocategory_title']) ? strip_tags($new_instance['vm_videocategory_title']) : NULL;
        $instance['vm_videocategory_category'] = isset($new_instance['vm_videocategory_category']) ? strip_tags($new_instance['vm_videocategory_category']) : NULL;
        $instance['vm_videocategory_columns'] = isset($new_instance['vm_videocategory_columns']) ? strip_tags($new_instance['vm_videocategory_columns']) : NULL;
        $instance['vm_videocategory_maxposts'] = isset($new_instance['vm_videocategory_maxposts']) ? strip_tags($new_instance['vm_videocategory_maxposts']) : NULL;
        $instance['vm_videocategory_carousel'] = isset($new_instance['vm_videocategory_carousel']) ? strip_tags($new_instance['vm_videocategory_carousel']) : NULL;
        $instance['vm_videocategory_duration'] = isset($new_instance['vm_videocategory_duration']) ? strip_tags($new_instance['vm_videocategory_duration']) : NULL;
        //$instance['vm_videocategory_loveit'] = isset($new_instance['vm_videocategory_loveit']) ? strip_tags($new_instance['vm_videocategory_loveit']) : NULL;
        return $instance;
    }

}

// end of Vm_Videocategory_Grid
// Creating the Vm_Twitter_Blog_Videos widget 
class Vm_Twitter_Blog_Videos extends WP_Widget {

    function __construct() {
        parent::__construct(
                'vm_twitter_blog_videos', __('Twitter, Blog &amp; Video Posts (VM)', THEME_TEXT_DOMAIN), array('description' => __(
                    'This widget will display latest tweets from twitter, recent blog posts and recent video posts.', THEME_TEXT_DOMAIN
            ),
                )
        );
    }

    public function widget($args, $instance) {

        extract($args);

        $vm_twitter_blog_videos_blog_maxposts = $instance['vm_twitter_blog_videos_blog_maxposts'];
        $vm_twitter_blog_videos_videos_maxposts = $instance['vm_twitter_blog_videos_videos_maxposts'];
        $vm_twitter_blog_videos_twitter_code = $instance['vm_twitter_blog_videos_twitter_code'];

        echo $before_widget;
        ?>
        <!-- Contents Section Started -->
        <div class="interactivetabs">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="intertabs-<?php echo uniqid(); ?>">
                <?php $twitterid = uniqid(); ?>
                <li class="active"><a href="#twittertab-<?php echo $twitterid; ?>" data-toggle="tab"><i class="fa fa-twitter"></i><?php echo __('Twitter', THEME_TEXT_DOMAIN); ?></a></li>
                <li><a href="#blogtab-<?php echo $twitterid + 1; ?>" data-toggle="tab"><i class="fa fa-comments"></i><?php echo __('Blog', THEME_TEXT_DOMAIN); ?></a></li>
                <li><a href="#abouttab-<?php echo $twitterid + 5; ?>" data-toggle="tab"><i class="fa fa-video-camera"></i><?php echo __('Videos', THEME_TEXT_DOMAIN); ?></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Twitter Tab Start -->
                <div class="tab-pane fade in active" id="twittertab-<?php echo $twitterid ?>">
                    <?php echo $vm_twitter_blog_videos_twitter_code; ?>
                </div>
                <!-- Twitter Tab End -->
                <?php
                $type = 'post';
                $args = array(
                    'post_type' => $type,
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => $vm_twitter_blog_videos_blog_maxposts,
                );

                $vm_blog_query = new WP_Query($args);
                ?>
                <!-- Blog Tab Start -->
                <div class="tab-pane fade widget_recent-posts" id="blogtab-<?php echo $twitterid + 1;?>">
                    <?php if ($vm_blog_query->have_posts()) : ?>
                        <ul class="recentposts">
                            <?php while ($vm_blog_query->have_posts()) : $vm_blog_query->the_post(); ?>
                                <li>
                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    <p class="date"><?php the_time('d F Y'); ?></p>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php else: ?>
                        <p><?php echo __('Sorry! There are no posts.', THEME_TEXT_DOMAIN); ?></p>
                    <?php endif; ?>
                </div>
                <!-- Blog Tab End -->
                <?php
                $type = 'video';
                $args = array(
                    'post_type' => $type,
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => $vm_twitter_blog_videos_videos_maxposts,
                );

                $vm_videos_query = new WP_Query($args);
                //echo '<pre>'; print_r($vm_videos_query); die();
                ?>
                <!-- Video List Tab Start -->
                <div class="tab-pane fade" id="abouttab-<?php echo $twitterid + 5; ?>">
                    <div class="videolistsmall">
                        <?php if ($vm_videos_query->have_posts()) : ?>
                            <ul class="bloglist">
                                <?php while ($vm_videos_query->have_posts()) : $vm_videos_query->the_post(); ?>
                                    <?php $video_duration = get_post_meta(get_the_ID(), '_vm_video_duration', true); ?>
                                    <li>
                                        <div class="media">
                                            <a href="<?php the_permalink(); ?>" class="pull-left">
                                                <img class="media-object img-responsive hovereffect" src="<?php echo vm_get_video_post_thumbnail(get_the_ID()); ?>" alt="<?php the_title(); ?>" />
                                            </a>
                                            <div class="media-body">
                                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i><?php echo $video_duration; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </ul>
                        <?php else: ?>
                            <p><?php echo __('Sorry! There are no posts.', THEME_TEXT_DOMAIN); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Video List Tab End -->
            </div>
        </div>
        <!-- Contents Section End -->

        <?php
        echo $after_widget;
    }

    public function form($instance) {

        if ($instance) {
            $vm_twitter_blog_videos_blog_maxposts = esc_attr($instance['vm_twitter_blog_videos_blog_maxposts']);
            $vm_twitter_blog_videos_videos_maxposts = esc_attr($instance['vm_twitter_blog_videos_videos_maxposts']);
            $vm_twitter_blog_videos_twitter_code = esc_attr($instance['vm_twitter_blog_videos_twitter_code']);
        } else {
            $vm_twitter_blog_videos_blog_maxposts = 4;
            $vm_twitter_blog_videos_videos_maxposts = 3;
            $vm_twitter_blog_videos_twitter_code = NULL;
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('vm_twitter_blog_videos_blog_maxposts'); ?>"><?php _e('Blog Max. Posts', THEME_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('vm_twitter_blog_videos_blog_maxposts'); ?>" 
                   name="<?php echo $this->get_field_name('vm_twitter_blog_videos_blog_maxposts'); ?>" 
                   class="widefat" value="<?php echo $vm_twitter_blog_videos_blog_maxposts; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_twitter_blog_videos_videos_maxposts'); ?>"><?php _e('Videos Max. Posts', THEME_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('vm_twitter_blog_videos_videos_maxposts'); ?>" 
                   name="<?php echo $this->get_field_name('vm_twitter_blog_videos_videos_maxposts'); ?>" 
                   class="widefat" value="<?php echo $vm_twitter_blog_videos_videos_maxposts; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vm_twitter_blog_videos_twitter_code'); ?>"><?php _e('Twitter Widget Code', THEME_TEXT_DOMAIN); ?></label>
            <textarea id="<?php echo $this->get_field_id('vm_twitter_blog_videos_twitter_code'); ?>" 
                      name="<?php echo $this->get_field_name('vm_twitter_blog_videos_twitter_code'); ?>" 
                      class="widefat" rows="10"><?php echo $vm_twitter_blog_videos_twitter_code; ?></textarea>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {

        $instance = $old_instance;

        $instance['vm_twitter_blog_videos_blog_maxposts'] = isset($new_instance['vm_twitter_blog_videos_blog_maxposts']) ? strip_tags($new_instance['vm_twitter_blog_videos_blog_maxposts']) : NULL;
        $instance['vm_twitter_blog_videos_videos_maxposts'] = isset($new_instance['vm_twitter_blog_videos_videos_maxposts']) ? strip_tags($new_instance['vm_twitter_blog_videos_videos_maxposts']) : NULL;
        // we need to store javascript and html tags in twitter code
        $instance['vm_twitter_blog_videos_twitter_code'] = isset($new_instance['vm_twitter_blog_videos_twitter_code']) ? $new_instance['vm_twitter_blog_videos_twitter_code'] : NULL;
        return $instance;
    }

}

// end of Vm_Twitter_Blog_Videos