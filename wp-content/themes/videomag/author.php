
<?php get_header(); ?>
<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
<!-- Contents Start -->
<div class="contents">
    <div class="custom-container">

        <div class="row">
            <!-- Bread Crumb Start -->
            <?php
            if (function_exists('vm_breadcrumbs')) {
                vm_breadcrumbs();
            }
            ?>
            <!-- Bread Crumb End -->
            <!-- Content Column Start -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <?php $video_categories = vm_get_categories('video_categories'); ?>
                <?php if (!empty($video_categories)) : ?>
                    <?php foreach ($video_categories as $category) : ?>
                        <?php $category_posts = array(); ?>
                        <?php
                        $args = array(
                            'post_type' => 'video',
                            'video_categories' => $category->name,
                            'author__in' => array($curauth->data->ID),
                            'posts_per_page' => 5,
                            'orderby' => 'post_date',
                            'order' => 'DESC',
                            'post_status' => 'publish',
                        );
                        ?>
                        <?php $category_posts = get_posts($args); ?>

                        <?php if (!empty($category_posts)) : ?>
                            <div class="sections">
                                <h2 class="heading"><?php echo $category->name; ?></h2>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <?php foreach ($category_posts as $post): ?>
                                        <?php $video_duration = get_post_meta($post->ID, '_vm_video_duration', true); ?>
                                        <div <?php post_class('col-lg-2 col-md-4 col-sm-4 col-xs-6'); ?>>
                                            <!-- Video Box Start -->
                                            <div class="videobox2">
                                                <figure> 
                                                    <!-- Video Thumbnail Start --> 
                                                    <a href="<?php the_permalink($post->ID); ?>">
                                                        <img src="<?php echo vm_get_video_post_thumbnail(get_the_ID()); ?>" class="img-responsive hovereffect" alt="<?php the_title($post->ID); ?>" />
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
                                                <h4><a href="<?php the_permalink($post->ID); ?>"><?php the_title(); ?></a></h4>
                                                <!-- Video Title End --> 
                                            </div>
                                            <!-- Video Box End --> 
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <!-- Contents Section End -->
                            <div class="clearfix"></div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <div class="col-lg-12 col-md-14 col-sm-14 col-xs-16">
                        <p><?php echo __('Sorry! There are no posts.', 'vm_softcircles_domain'); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>
<!-- Contents End -->

<?php get_footer(); ?>