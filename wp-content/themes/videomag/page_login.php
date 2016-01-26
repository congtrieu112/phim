<?php
/**
 * Template Name: Login page
 *
 * @package WordPress
 * @subpackage videomag
 * @since videomag 1.0
 */
?>


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
                $content_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12 conentsection';
            } else if ($content_layout == '3cl' || $content_layout == '3cr' ||
                    $content_layout == '3cm') {
                $content_class = 'col-lg-6 col-md-12 col-sm-12 col-xs-12 equalcol conentsection';
            } else if ($content_layout == '2cl' || $content_layout == '2cr') {
                $content_class = 'col-lg-9 col-md-12 col-sm-12 col-xs-12 equalcol conentsection';
            } else {
                $content_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12 conentsection';
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
                <?php if(!is_home() && !is_front_page()): ?>
                    <h1 class="heading"><?php the_title(); ?></h1>
                <?php endif; ?>
      
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <?php
//                        the_content();
                        print do_shortcode('[wppb-login redirect_url="'.$_SERVER[HTTP_REFERER].'"]');
                        ?>

                    <?php endwhile; ?>
                <?php else: ?>
                    <p><?php echo __('Sorry! There are no posts.', 'vm_softcircles_domain'); ?></p>
                <?php endif; ?>
                <!-- Contents Section End -->
                <div class="clearfix"></div>
                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    wp_reset_query();
                    if (comments_open() || get_comments_number()) {
                        comments_template();
                    }
                ?>
                <div class="clearfix"></div>
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