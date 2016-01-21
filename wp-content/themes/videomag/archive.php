
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
            /* $content_layout = vm_get_post_meta('_vm_contentlayout_option');

              if ($content_layout == '1c') {
              $content_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
              } else if ($content_layout == '3cl' || $content_layout == '3cr' ||
              $content_layout == '3cm') {
              $content_class = 'col-lg-6 col-md-12 col-sm-12 col-xs-12 equalcol conentsection';
              } else if ($content_layout == '2cl' || $content_layout == '2cr') {
              $content_class = 'col-lg-9 col-md-12 col-sm-12 col-xs-12 equalcol conentsection';
              } else {
              $content_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
              } */
            $content_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
            ?>

            <?php /* if ($content_layout == '2cl' || $content_layout == '3cm'): ?>
              <?php get_sidebar('content-one'); ?>
              <?php endif; ?>

              <?php if ($content_layout == '3cl'): ?>
              <?php get_sidebar('content-one'); ?>
              <?php get_sidebar('content-two'); ?>
              <?php endif; */ ?>

            <div class="<?php echo $content_class; ?>">
                <div class="sections">
                    <h2 class="heading"><?php echo __('Archive', THEME_TEXT_DOMAIN); ?></h2>
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
                                            <a href="<?php the_permalink() ?>" class="btn btn-primary btn-xs backcolor"><?php echo __('Read More', THEME_TEXT_DOMAIN); ?></a>
                                        </div>
                                    </div>
                                    <!-- Video Box End --> 
                                    <div class="clearfix"></div>
                                </div>

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

            <?php /* if ($content_layout == '2cr' || $content_layout == '3cm'): ?>
              <?php get_sidebar('content-two'); ?>
              <?php endif; ?>

              <?php if ($content_layout == '3cr'): ?>

              <?php get_sidebar('content-one'); ?>
              <?php get_sidebar('content-two'); ?>
              <?php endif; */ ?>

        </div>
    </div>
</div>
<!-- Contents End -->

<?php get_footer(); ?>