
<?php get_header(); ?>
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

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sections">
                    <div class="clearfix"></div>
                    <div class="row">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php $post_type = get_post_type(get_the_ID()); ?>
                                <?php if ($post_type == 'video'): ?>
                                    <?php $video_data = vm_get_videothumbnail(get_post_meta(get_the_ID(), '_vm_videofield_option', true)); ?>
                                <?php endif; ?>

                                <div <?php post_class('col-lg-12 col-md-12 col-sm-12 col-xs-12'); ?>>
                                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                    <ul>
                                        <li><i class="fa fa-calendar"></i><?php the_time('d-m-Y'); ?></li>
                                        <li><i class="fa fa-user"></i><?php the_author(); ?></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>

                            <?php endwhile; ?>
                        <?php else: ?>
                            <div class="col-lg-12 col-md-14 col-sm-14 col-xs-16">
                                <p><?php echo __('Sorry! There are no posts.', THEME_TEXT_DOMAIN); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Contents Section End -->
                <div class="clearfix"></div>

            </div>

        </div>
    </div>
</div>
<!-- Contents End -->

<?php get_footer(); ?>