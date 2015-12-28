
<?php get_header(); ?>

<!-- Video Player Section Start -->
<div class="videoplayersec">
    <div class="vidcontainer">
        <div class="row">
            <!-- Video Player Start -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 playershadow">
                <div class="playeriframe">
                    <?php echo vm_get_video_player(vm_get_post_meta('_vm_videofield_option')); ?>
                </div>
            </div>
            <!-- Video Player End --> 
            <!-- Video Stats and Sharing Start -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 videoinfo">
                <div class="row"> 
                    <!-- Uploader Start -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 uploader">
                        <figure> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_avatar(get_the_author_meta('ID'), 66, '', get_the_author_meta('user_nicename')); ?></a> </figure>
                        <div class="aboutuploader">
                            <h5>
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                    <?php echo __('By ', THEME_TEXT_DOMAIN); ?>
                                    <?php echo get_the_author_meta('user_nicename'); ?>
                                </a>
                            </h5>
                            <time datetime="<?php echo the_time('d M Y'); ?>"><?php echo __('Uploaded : ', THEME_TEXT_DOMAIN); ?><?php echo the_time('d M Y'); ?></time>
                            <br />
                            <a class="btn btn-primary btn-xs backcolor" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Watch All Videos</a> </div>
                    </div>
                    <!-- Uploader End --> 
                    <!-- Video Stats Start -->
                    <?php /* <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats">
                      <hr class="visible-xs" />
                      <ul>
                      <li class="likes">
                      <h5>Likes</h5>
                      <h2>250</h2>
                      </li>
                      <li class="views">
                      <h5>Views</h5>
                      <h2>70K</h2>
                      </li>
                      </ul>
                      </div> */ ?>
                    <!-- Video Stats End --> 
                    <!-- Video Share Start -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 videoshare">
                        <ul>
                            <li>
                                <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-type="button_count"></div>
                            </li>
                            <li>
                                <a href="https://twitter.com/share/?url=<?php the_permalink(); ?>" class="twitter-share-button" data-via="bilalmallik">Tweet</a>
                            </li>
                            <li>
                                <div class="g-plus" data-action="share" data-href="<?php the_permalink(); ?>" data-annotation="bubble"></div>
                            </li>
                        </ul>
                    </div>
                    <!-- Video Share End --> 
                </div>
            </div>
            <!-- Video Stats and Sharing End --> 
            <!-- Like This Video Start -->
            <?php /* <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 likeit">
              <hr />
              <a class="btn btn-primary backcolor" href="#">Like This Video</a>
              </div> */ ?>
            <!-- Like This Video Enb --> 
        </div>
    </div>
</div>
<!-- Video Player Section End -->
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
            $content_layout = vm_get_post_meta('_vm_contentlayout_option');

            if ($content_layout == '1c') {
                $content_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
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

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php //echo '<pre>'; print_r(the_taxonomies()); die(); ?>

                        <?php $categories = get_the_terms(get_the_ID(), 'video_categories'); ?>
                        <?php $category_links = array(); ?>
                        <?php $category_array = array(); ?>

                        <?php if (!empty($categories)) : ?>
                            <?php foreach ($categories as $category): ?>
                                <?php $category_links[] = '<a href="' . get_term_link($category->term_id, $category->taxonomy) . '" title="' . esc_attr(sprintf(__("View all posts in %s", THEME_TEXT_DOMAIN), $category->name)) . '">' . $category->name . '</a>'; ?>
                                <?php $category_array[] = $category->slug; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <!-- Video Detail Started -->
                        <div <?php post_class('blogdetail videodetail sections'); ?>>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="blogtext">
                                        <h2 class="heading"><?php echo get_the_title(); ?></h2>
                                        <div class="clearfix"></div>
                                        <div class="blogmetas">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-align-justify"></i>
                                                    <?php vm_get_video_categories(get_the_ID()); ?>
                                                </li>
                                                <li>
                                                    <i class="fa fa-tags"></i>
                                                    <?php the_tags(', '); ?>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Video Detail End -->
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-lg-12 col-md-14 col-sm-14 col-xs-16">
                        <p><?php echo __('Sorry! There are no posts.', THEME_TEXT_DOMAIN); ?></p>
                    </div>
                <?php endif; ?>

                <!-- Contents Section End -->
                <div class="clearfix"></div>

                <?php get_template_part('content', 'related-videos'); ?>
                <?php
                // If comments are open or we have at least one comment, load up the comment template
                wp_reset_query();
                if (comments_open() || get_comments_number()) {
                    comments_template('', true);
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