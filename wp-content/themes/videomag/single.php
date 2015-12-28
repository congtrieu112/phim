
<?php get_header(); ?>
<!-- Contents Start -->
<div class="contents">
    <div class="custom-container">

        <?php if (is_front_page()): ?>
            <?php get_sidebar('homepage-featured'); ?>
        <?php endif; ?>

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
            $content_layout = vm_get_post_meta('_vm_contentlayout_option');

            if ($content_layout == '1c') {
                $content_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12 equalcol conentsection';
            } else if ($content_layout == '3cl' || $content_layout == '3cr' ||
                    $content_layout == '3cm') {
                $content_class = 'col-lg-6 col-md-12 col-sm-12 col-xs-12 equalcol conentsection';
            } else if ($content_layout == '2cl' || $content_layout == '2cr') {
                $content_class = 'col-lg-9 col-md-12 col-sm-12 col-xs-12 equalcol conentsection';
            } else {
                $content_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
            }
            ?>

            <?php if ($content_layout == '2cl' || $content_layout == '3cm'): ?>
                <?php get_sidebar('content-one'); ?>
            <?php endif; ?>

            <?php if ($content_layout == '3cl'): ?>
                <?php get_sidebar('content-one'); ?>
                <?php get_sidebar('content-two'); ?>
            <?php endif; ?>

            <div class="<?php echo $content_class; ?>">
                <div class="blogdetail sections">
                    <?php if (has_post_thumbnail()): ?>
                        <figure>
                            <?php the_post_thumbnail('single-post-thumbnail', array('class' => 'img-responsive hovereffect')); ?>
                        </figure>
                        <div class="clearfix"></div>
                    <?php endif; ?>


                    <div class="row">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>

                                <div <?php post_class('col-lg-3 col-md-4 col-sm-4 col-xs-12'); ?>>
                                    <div class="avatar">
                                        <figure>
                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_avatar(get_the_author_meta('ID'), 63, '', get_the_author_meta('user_nicename')); ?></a>
                                        </figure>
                                        <h5>
                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                <?php echo __('By ', 'vm_softcircles_domain'); ?>
                                                <?php echo get_the_author_meta('user_nicename'); ?>
                                            </a>
                                        </h5>
                                        <p><?php echo get_the_author_meta('user_bio'); ?></p>
                                    </div>
                                </div>

                                <div <?php post_class('col-lg-9 col-md-8 col-sm-8 col-xs-12'); ?>>
                                    <div class="blogtext">
                                        <h2 class="heading"><?php the_title(); ?></h2>
                                        <div class="clearfix"></div>
                                        <div class="blogmetas">
                                            <ul>
                                                <li><i class="fa fa-calendar"></i><?php the_time('d-m-Y'); ?></li>
                                                <li>
                                                    <i class="fa fa-align-justify"></i>
                                                    <?php the_category(', '); ?>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <?php the_content(); ?>
                                        <?php wp_link_pages(); ?>
                                    </div>
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
                <?php get_template_part('content', 'related-posts'); ?>
                <?php
                // If comments are open or we have at least one comment, load up the comment template
                wp_reset_query();
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
                ?>
            </div>

            <?php if ($content_layout == '2cr' || $content_layout == '3cm'): ?>
                <?php get_sidebar('content-two'); ?>
            <?php endif; ?>

            <?php if ($content_layout == '3cr'): ?>

                <?php get_sidebar('content-one'); ?>
                <?php get_sidebar('content-two'); ?>
            <?php endif; ?>

        </div>
    </div>
</div>
<!-- Contents End -->

<?php get_footer(); ?>