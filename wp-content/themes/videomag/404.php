

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

            <div <?php post_class('col-lg-12 col-md-12 col-sm-12 col-xs-12 conentsection'); ?>>

                <div class="searchbox">
                    <form action="<?php echo site_url(); ?>" id="searchform" method="get">
                        <ul>
                            <li><input type="text" placeholder="Search" id="s" name="s" /></li>
                            <li class="pull-right"><input type="submit" value="GO" id="searchsubmit" /></li>
                        </ul>
                    </form>
                </div>

                <h2 class="heading"><?php echo __('This is somewhat embarrassing, isn&#39;t it?', THEME_TEXT_DOMAIN); ?></h2>
                <p><?php echo __('It looks like nothing was found at this location. Maybe try a search?', THEME_TEXT_DOMAIN); ?></p>

                <!-- Contents Section End -->
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
</div>
<!-- Contents End -->

<?php get_footer(); ?>