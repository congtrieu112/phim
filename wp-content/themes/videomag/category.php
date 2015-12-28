
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
                    <h2 class="heading"><?php echo single_cat_title('', false); ?></h2>
                    <div class="clearfix"></div>
                    <div class="row">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>

                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6"> 
                                    <div <?php post_class('blogposttwo'); ?>>
                                        <figure> 
                                            <!-- Video Thumbnail Start --> 
                                            <a href="<?php echo get_the_permalink() ?>">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?> 
                                                    <img src="<?php echo $thumbnail[0]; ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive hovereffect" />
                                                <?php endif; ?>
                                            </a> 
                                        </figure>
                                        <div class="text">
                                            <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                                            <ul>
                                                <li><i class="fa fa-calendar"></i><?php the_time('d-m-Y'); ?></li>
                                                <li>
                                                    <i class="fa fa-align-justify"></i>
                                                    <?php the_category(', '); ?>
                                                </li>
                                            </ul>
                                            <a href="<?php the_permalink() ?>" class="btn btn-primary btn-xs backcolor"><?php echo __('Read More', 'vm_softcircles_domain'); ?></a>
                                        </div>
                                    </div>
                                    <!-- Video Box End --> 
                                    <div class="clearfix"></div>
                                </div>

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

            </div>

        </div>
    </div>
</div>
<!-- Contents End -->

<?php get_footer(); ?>