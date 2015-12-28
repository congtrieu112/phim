
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sections">
                    <h2 class="heading"><?php single_cat_title();  ?></h2>
                    <div class="clearfix"></div>
                    <div class="row">

                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>

                                <?php $video_duration = get_post_meta(get_the_ID(), '_vm_video_duration', true); ?>
                        
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                    <!-- Video Box Start -->
                                    <div <?php post_class('videobox2'); ?>>
                                        <figure> 
                                            <!-- Video Thumbnail Start --> 
                                            <a href="<?php the_permalink(); ?>">
                                                <img src="<?php echo vm_get_video_post_thumbnail(get_the_ID()); ?>" class="img-responsive hovereffect" alt="<?php the_title(); ?>" />
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
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else: ?>
                        <div class="col-lg-12 col-md-14 col-sm-14 col-xs-16">
                            <p><?php echo __('Sorry! There are no posts.', 'vm_softcircles_domain'); ?></p>
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