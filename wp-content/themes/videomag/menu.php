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