<?php

/**
 * Shortcodes for Video Magazine
 */
function vm_do_topnav_bar($atts) {

    ob_start();
    ?>
    <!-- Header Top Strip Start -->
    <div class="topstrip">
        <div class="custom-container">
            <div class="row">
                <!-- Top Categories Start -->
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                    <div class="topcategories">
                        <!-- navbar Start -->
                        <div class="navbar yamm navbar-default">
                            <div class="navbar-header">
                                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-2" class="navbar-toggle">
                                    <i class="fa fa-bars"></i> <?php echo vm_get_theme_menu('category-menu'); ?>
                                </button>
                            </div>
                            <!-- Collect the nav links for toggling -->
                            <?php
                            // Loading WordPress Custom Menu
                            if (has_nav_menu('category-menu')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'category-menu',
                                    'container_class' => 'navbar-collapse collapse',
                                    'container_id' => 'navbar-collapse-2',
                                    'menu_class' => 'nav navbar-nav',
                                    'walker' => new vm_bootstrap_walker_menu()
                                ));
                            }
                            ?>
                        </div>  <!-- navbar -->
                        <div class="clearfix"></div>
                    </div>  <!-- topcategories -->
                </div>  <!-- col -->
                <!-- Top Categories End -->
                <!-- Social Network Start -->
                <?php include THEME_INC . '/html/social-links.php'; ?>
            </div>  
        </div>  
    </div>
    <!-- Header Top Strip End -->
    <?php
    wp_reset_postdata();
    $output = ob_get_clean();
    return $output;
}

add_shortcode('vm_topnav_bar', 'vm_do_topnav_bar');

function vm_do_categorynav_bar($atts) {

    ob_start();
    ?>

    <?php //include THEME_INC . '/html/category-nav.php'; ?>
    <!-- Navigation Strip Start -->
    <div class="navigationstrip <?php echo empty($atts) ? 'stickynav' : ''; ?>">
        <div class="custom-container">
            <div class="row">
                <!-- Navigation Start -->
                <div class="col-lg-12 col-md-14 col-sm-12 col-xs-12">
                    <div class="navigation">
                        <!-- navbar Start -->
                        <?php
                        // Loading WordPress Custom Menu
                        if (has_nav_menu('header-menu')) {
                            wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'container_class' => 'navbar-collapse collapse',
                                'container_id' => 'navbar-collapse-1',
                                'menu_class' => 'nav navbar-nav',
                                'walker' => new vm_bootstrap_walker_menu(),
                            ));
                        }
                        ?>
                        <!-- navbar Start -->
                    </div>
                </div>
                <!-- Navigation Start -->
            </div>
        </div>
    </div>
    <!-- Navigation Strip Start -->

    <?php
    wp_reset_postdata();
    $output = ob_get_clean();
    return $output;
}

add_shortcode('vm_categorynav_bar', 'vm_do_categorynav_bar');
