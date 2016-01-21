
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
            <!-- Bread Crumb End -->
            <!-- Content Column Start -->
            <?php
            $content_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
            ?>

            <div class="<?php echo $content_class; ?>">
                <div class="sections">
                    <h2 class="heading"><?php echo __('Videos Archive', 'vm_softcircles_domain'); ?></h2>
                    <div class="clearfix"></div>
                    <div class="row">

                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>

                                <?php $video_duration = get_post_meta(get_the_ID(), '_vm_video_duration', true); ?>

                                <!-- Video Detail Started -->
                                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                    <!-- Video Box Start -->
                                    <div class="videobox2">
                                        <figure> 
                                            <!-- Video Thumbnail Start --> 
                                            <a href="<?php the_permalink(); ?>">
                                                <img src="<?php echo vm_get_video_post_thumbnail(get_the_ID()); ?>" class="img-responsive hovereffect" alt="<?php echo get_the_title(); ?>" />
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
                                </div>
                                <!-- Video Detail End -->
                            <?php endwhile; ?>
                        <?php else: ?>
                            <div class="col-lg-12 col-md-14 col-sm-14 col-xs-16">
                                <p><?php echo __('Sorry! There are no posts.', 'vm_softcircles_domain'); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Contents Section End -->
                <div class="clearfix"></div>

                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if (comments_open() || '0' != get_comments_number()) {
                    comments_template();
                }
                ?>

            </div>

        </div>
    </div>
</div>
<!-- Contents End -->

<?php get_footer(); ?>