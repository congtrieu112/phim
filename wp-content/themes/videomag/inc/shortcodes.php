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
                <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
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

    
    
              <div class="navigationstrip stickynav">
        <div class="custom-container">
            <div class="row">
                <!-- Navigation Start -->
                <div class="col-lg-12 col-md-14 col-sm-12 col-xs-12">
                    <div class="navigation">
                        <!-- navbar Start -->
                        
<div id="mega_main_menu" class="mega_main mega_main_menu header-menu primary_style-flat icons-left first-lvl-align-left first-lvl-separator-none language_direction-ltr direction-horizontal responsive-enable mobile_minimized-enable fullwidth-enable dropdowns_animation-anim_4 version-2-0-1 no-logo no-search no-woo_cart no-buddypress" style="z-index: 4990;">
	<div class="menu_holder">
	<div class="mmm_fullwidth_container" style="width:1027px;left: -71.875px;right:auto;"></div><!-- class="fullwidth_container" -->
		<div class="menu_inner">
			<span class="nav_logo">
				<a class="mobile_toggle">
					<span class="mobile_button">
						Menu &nbsp;
						<span class="symbol_menu">≡</span>
						<span class="symbol_cross">╳</span>
					</span><!-- class="mobile_button" -->
				</a>
			</span><!-- /class="nav_logo" -->
				<ul id="mega_main_menu_ul" class="mega_main_menu_ul">
<li id="menu-item-595" class="menu-item menu-item-type-custom menu-item-object-custom active active menu-item-home menu-item-595 widgets_dropdown default_style drop_to_right submenu_default_width columns3">
	<a href="<?php print home_url(); ?>" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			HOME
			</span>
		</span>
	</a>
	<!-- /.mega_dropdown -->
</li>
<li id="menu-item-774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774 widgets_dropdown default_style drop_to_right submenu_default_width columns5">
	<a href="<?php print home_url(); ?>/videos/jav-censored/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			JAV CENSORED HD
			</span>
		</span>
	</a>
	<ul class="mega_dropdown">
	<div id="nav_menu-7" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-list-container"><ul id="menu-videos-list" class="menu">
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/abuse-censored/">Abuse</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/asshole-censored/">Asshole</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/bath-censored/">Bath</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/beautifull-girls-censored/">Beautifull Girls</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/big-tits-censored/">Big Tits <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/breast-milk-censored/">Breast Milk</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/bride-young-wife-censored/">Bride-Young Wife</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/classic-censored/">Classic</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/confinement-censored/">Confinement</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/cosplay-censored/">Cosplay</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/couple-censored/">Couple</a></li>
</ul></div></div>
	<div id="nav_menu-8" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/cuckold-censored/">Cuckold</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/abuse-censored/">Dead Drunk</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/dead-drunk-censored/">Doctor</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/drug-censored/">Drug</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/entertainer-censored/">Entertainer</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/father-in-law-censored/">Father-in-law</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/gangbang-censored/">Gangbang <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/gay-censored/">Gay</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/gym-censored/">Gym</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/hardcore-censored/">Hardcore <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/hostess-censored/">Hostess</a></li>
</ul></div></div>
	<div id="nav_menu-9" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/incest-censored/">Incest</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/instructor-censored/">Instructor</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/kimono-censored/">Kimono <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/lesbian-censored/">Lesbian</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/married-woman-censored/">Married Woman</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/massage-censored/">Massage</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/molester-censored/">Molester</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/mother-in-law-censored/">Mother-in-law</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/mormal-censored/">Normal</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/murse-censored/">Nurse</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/Office-censored/">Office <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
</ul></div></div>
<div id="nav_menu-10" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/old-man-censored/">Old Man</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/old-woman-censored/">Old Woman</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/outdoors-censored/">Outdoors</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/peeping-censored/">Peeping</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/Planning-censored/">planning</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/pregnant-woman-censored/">Pregnant Woman</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/rape-censored/">Rape <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/school-girl-censored/">School Girl <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/sex-in-car-censored/">Sex In Car</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/shower-censored/">Shower</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/slave-censored/">Slave</a></li>
</ul></div></div>
<div id="nav_menu-11" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/sm-censored/">SM <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/sport-censored/">Sport</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/stepdad-censored/">StepDad</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/stepmom-censored/">StepMom</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/swimsuit-censored/">Swimsuit</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/teen-girl-censored/">Teen Girl <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/toy-censored/">Toy</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/waitress-censored/">Waitress</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/widow-censored/">Widow</a></li>
</ul></div></div>
<div id="vm_videocategory_grid-1" class="widget widget_vm_videocategory_grid">
        <div class="clearfix"></div>
        </div>
	</ul><!-- /.mega_dropdown -->
</li>
<li id="menu-item-775" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774 widgets_dropdown default_style drop_to_right submenu_default_width columns5">
	<a href="<?php print home_url(); ?>/videos/jav-uncensored/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			JAV UNCENSORED HD
			</span>
		</span>
	</a>
	<ul class="mega_dropdown">
	<div id="nav_menu-12" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-list-container"><ul id="menu-videos-list" class="menu">
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/abuse-uncensored/">Abuse</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/asshole-uncensored/">Asshole</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/bath-uncensored/">Bath</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/beautifull-girls-uncensored/">Beautifull Girls</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/big-tits-uncensored/">Big Tits</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/breast-milk-uncensored/">Breast Milk</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/bride-young-wife-uncensored/">Bride-Young Wife</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/classic-uncensored/">Classic</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/confinement-uncensored/">Confinement</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/cosplay-uncensored/">Cosplay <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/couple-uncensored/">Couple</a></li>
</ul></div></div>
	<div id="nav_menu-8" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/cuckold-uncensored/">Cuckold</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/abuse-uncensored/">Dead Drunk</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/dead-drunk-uncensored/">Doctor</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/drug-uncensored/">Drug</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/entertainer-uncensored/">Entertainer</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/father-in-law-uncensored/">Father-in-law</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/gangbang-uncensored/">Gangbang <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/gay-uncensored/">Gay</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/gym-uncensored/">Gym</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/hardcore-uncensored/">Hardcore <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/hostess-uncensored/">Hostess</a></li>
</ul></div></div>
	<div id="nav_menu-9" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/incest-uncensored/">Incest</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/instructor-uncensored/">Instructor</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/kimono-uncensored/">Kimono</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/lesbian-uncensored/">Lesbian</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/married-woman-uncensored/">Married Woman</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/massage-uncensored/">Massage</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/molester-uncensored/">Molester</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/mother-in-law-uncensored/">Mother-in-law</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/mormal-uncensored/">Normal</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/murse-uncensored/">Nurse <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/Office-uncensored/">Office <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
</ul></div></div>
<div id="nav_menu-10" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/old-man-uncensored/">Old Man</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/old-woman-uncensored/">Old Woman</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/outdoors-uncensored/">Outdoors</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/peeping-uncensored/">Peeping</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/Planning-uncensored/">planning</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/pregnant-woman-uncensored/">Pregnant Woman</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/rape-uncensored/">Rape</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/school-girl-uncensored/">School Girl <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/sex-in-car-uncensored/">Sex In Car</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/shower-uncensored/">Shower</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/slave-uncensored/">Slave</a></li>
</ul></div></div>
<div id="nav_menu-11" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/sm-uncensored/">SM <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/sport-uncensored/">Sport</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/stepdad-uncensored/">StepDad</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/stepmom-uncensored/">StepMom</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/swimsuit-uncensored/">Swimsuit <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/teen-girl-uncensored/">Teen Girl <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/toy-uncensored/">Toy</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/waitress-uncensored/">Waitress</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/widow-uncensored/">Widow</a></li>
</ul></div></div>
<div id="vm_videocategory_grid-1" class="widget widget_vm_videocategory_grid">
        <div class="clearfix"></div>
        </div>
	</ul><!-- /.mega_dropdown -->
</li>
<li id="menu-item-776" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774 widgets_dropdown default_style drop_to_right submenu_default_width columns5">
	<a href="<?php print home_url(); ?>/videos/us-eu-porn/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			PORN US/EU HD
			</span>
		</span>
	</a>
	<ul class="mega_dropdown">
	<div id="nav_menu-16" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-list-container"><ul id="menu-videos-list" class="menu">
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/abuse/">Abuse</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/asshole/">Asshole</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/bath/">Bath</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/beautifull-girls/">Beautifull Girls</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/big-tits/">Big Tits <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/breast-milk/">Breast Milk</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/bride-young-wife/">Bride-Young Wife</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/classic/">Classic</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/confinement/">Confinement</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/cosplay/">Cosplay <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/couple/">Couple</a></li>
</ul></div></div>
	<div id="nav_menu-8" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/cuckold/">Cuckold</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/abuse/">Dead Drunk</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/dead-drunk/">Doctor</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/drug/">Drug</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="<?php print home_url(); ?>/videos/entertainer/">Entertainer</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="<?php print home_url(); ?>/videos/father-in-law/">Father-in-law</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="<?php print home_url(); ?>/videos/gangbang/">Gangbang <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/gay/">Gay</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/gym/">Gym</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/hardcore/">Hardcore <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/hostess/">Hostess</a></li>
</ul></div></div>
	<div id="nav_menu-9" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/incest/">Incest</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/instructor/">Instructor</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/kimono/">Kimono</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/lesbian/">Lesbian</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/married-woman/">Married Woman</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/massage/">Massage</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/molester/">Molester</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/mother-in-law/">Mother-in-law</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/mormal/">Normal</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/murse/">Nurse</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/Office/">office</a></li>
</ul></div></div>
<div id="nav_menu-10" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/old-man/">Old Man</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/old-woman/">Old Woman</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/outdoors/">Outdoors</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/peeping/">Peeping</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/Planning/">planning</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/pregnant-woman/">Pregnant Woman</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/rape/">Rape <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/school-girl/">School Girl</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/sex-in-car/">Sex In Car</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/shower/">Shower</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/slave/">Slave</a></li>
</ul></div></div>
<div id="nav_menu-11" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/sm/">SM</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/sport/">Sport</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/stepdad/">StepDad</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/stepmom/">StepMom</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/swimsuit/">Swimsuit</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/teen-girl/">Teen Girl <img src="<?php print home_url(); ?>/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="<?php print home_url(); ?>/videos/toy/">Toy</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="<?php print home_url(); ?>/videos/waitress/">Waitress</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="<?php print home_url(); ?>/videos/widow/">Widow</a></li>
</ul></div></div>
<div id="vm_videocategory_grid-1" class="widget widget_vm_videocategory_grid">
        <div class="clearfix"></div>
        </div>
	</ul><!-- /.mega_dropdown -->
</li>
<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773 widgets_dropdown default_style drop_to_right submenu_default_width columns3">
	<a href="<?php print home_url(); ?>/videos/amature-videos/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			AMATURE VIDEOS
			</span>
		</span>
	</a>
	<ul class="mega_dropdown"><div id="nav_menu-10" class="widget widget_nav_menu"><div class="widgettitle">CHINA</div><div class="menu-blog-list-container"><ul id="menu-blog-list" class="menu">
<li id="menu-item-880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-880"><a href="<?php print home_url(); ?>/videos/teen-girl-china/">Teen Girl</a></li>
<li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-794"><a href="<?php print home_url(); ?>/videos/webcam-showcam-china/">WebCam-ShowCam</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="<?php print home_url(); ?>/videos/handmade-china/">HandMade</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="<?php print home_url(); ?>/videos/other-china/">Other</a></li>
</ul></div></div><div id="nav_menu-11" class="widget widget_nav_menu"><div class="widgettitle">JAPAN</div><div class="menu-blog-carousel-container"><ul id="menu-blog-carousel" class="menu">
<li id="menu-item-880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-880"><a href="<?php print home_url(); ?>/videos/teen-girl-japan/">Teen Girl</a></li>
<li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-794"><a href="<?php print home_url(); ?>/videos/webcam-showcam-japan/">WebCam-ShowCam</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="<?php print home_url(); ?>/videos/handmade-japan/">HandMade</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="<?php print home_url(); ?>/videos/other-japan/">Other</a></li>
</ul></div></div><div id="nav_menu-12" class="widget widget_nav_menu"><div class="widgettitle">THAILAND</div><div class="menu-blog-detail-container"><ul id="menu-blog-detail" class="menu">
<li id="menu-item-880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-880"><a href="<?php print home_url(); ?>/videos/teen-girl-thailand/">Teen Girl</a></li>
<li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-794"><a href="<?php print home_url(); ?>/videos/webcam-showcam-thailand/">WebCam-ShowCam</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="<?php print home_url(); ?>/videos/handmade-thailand/">HandMade</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="<?php print home_url(); ?>/videos/other-thailand/">Other</a></li>
</ul></div></div>
<div id="nav_menu-12" class="widget widget_nav_menu"><div class="widgettitle">VIETNAM</div><div class="menu-blog-detail-container"><ul id="menu-blog-detail" class="menu">
<li id="menu-item-880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-880"><a href="<?php print home_url(); ?>/videos/teen-girl-vietnam/">Teen Girl</a></li>
<li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-794"><a href="<?php print home_url(); ?>/videos/webcam-showcam-vietnam/">WebCam-ShowCam</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="<?php print home_url(); ?>/videos/handmade-vietnam/">HandMade</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="<?php print home_url(); ?>/videos/other-vietnam/">Other</a></li>
</ul></div></div>
<div id="nav_menu-12" class="widget widget_nav_menu"><div class="widgettitle">KOREA</div><div class="menu-blog-detail-container"><ul id="menu-blog-detail" class="menu">
<li id="menu-item-880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-880"><a href="<?php print home_url(); ?>/videos/teen-girl-korea/">Teen Girl</a></li>
<li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-794"><a href="<?php print home_url(); ?>/videos/webcam-showcam-korea/">WebCam-ShowCam</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="<?php print home_url(); ?>/videos/handmade-korea/">HandMade</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="<?php print home_url(); ?>/videos/other-korea/">Other</a></li>
</ul></div></div>
<div id="nav_menu-12" class="widget widget_nav_menu"><div class="widgettitle">OTHER</div><div class="menu-blog-detail-container"><ul id="menu-blog-detail" class="menu">
<li id="menu-item-880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-880"><a href="<?php print home_url(); ?>/videos/teen-girl-other/">Teen Girl</a></li>
<li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-794"><a href="<?php print home_url(); ?>/videos/webcam-showcam-other/">WebCam-ShowCam</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="<?php print home_url(); ?>/videos/handmade-other/">HandMade</a></li>
</ul></div></div><div id="vm_postcategory_grid-1" class="widget widget_vm_postcategory_grid">        <!-- Contents Section Started -->
        <!-- Contents Section End -->
        <div class="clearfix"></div>
        </div>
	</ul><!-- /.mega_dropdown -->
</li>

<li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-886 multicolumn_dropdown default_style drop_to_right submenu_default_width columns5">
	<a href="<?php print home_url(); ?>/videos/studio/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			JAV CENSORED STUDIO-MAKER
			</span>
		</span>
	</a>
	<ul class="mega_dropdown">
	<li id="menu-item-887" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-887 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/attackers/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				ATTACKERS
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-888" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-888 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/bi/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				BI
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-889" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-889 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/buoy-and-earl-produce/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				BUOY AND EARL
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-890" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-890 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/crystal-eizou/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				CRYSTAL EIZOU
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-891" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-891 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/e-body/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				E-BODY
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-892" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-892 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/ei-ten/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				EI TEN
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-893" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-893 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/fetish-box-mousou-zoku/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				FETISH B/M
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-894" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-894 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/hot-entertainment/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				HOT ET
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-895" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-895 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/idea-pocket/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				IDEA POCKET
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-896" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-896 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/kira-kira/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				KIRA ★ KIRA
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-897" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-897 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/ms-video-group/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				M’S VG
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-898" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-898 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/maza/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				MAZA
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-899" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-899 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/miru/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				MIRU
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-900" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-900 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/moodyz/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				MOODYZ
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-901" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-901 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/non/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				NON
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-902" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-902 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/opera/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				OPERA
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-903" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-903 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/oppai/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				OPPAI
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-904" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-904 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/prestige/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				PRESTIGE
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-905" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-905 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/radix/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				RADIX
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-906" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-906 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/ran-maru/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				RAN MARU
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/redcat/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				REDCAT
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/rookie/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				ROOKIE
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/s-cute/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				S-CUTE
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/sadistic-village/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				SAD. VILLAGE
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/siro/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				SIRO
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/sod-create/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				SOD CREATE
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/tma/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				TMA
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/venus/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				VENUS
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/waap-entertainment/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				WAAP ET
				</span>
			</span>
		</a>
	</li>
	</ul><!-- /.mega_dropdown -->
</li>
<li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-886 multicolumn_dropdown default_style drop_to_right submenu_default_width columns5">
	<a href="<?php print home_url(); ?>/videos/audio/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			JAV UNCENSORED STUDIO-MAKER
			</span>
		</span>
	</a>
	<ul class="mega_dropdown">
	<li id="menu-item-887" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-887 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/1000giri/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				1000GIRI
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-888" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-888 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/10musume/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				10MUSUME
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-889" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-889 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/1pondo/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				1PONDO
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-890" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-890 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/av9898/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				AV9898
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-891" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-891 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/c0930/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				C0930
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-892" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-892 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/caribbeancom/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				CARIBBEANCOM
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-893" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-893 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/g-queen/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				G-QUEEN
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-894" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-894 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/gachinco/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				GACHINCO
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-895" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-895 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/h0930/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				H0930
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-896" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-896 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/h4610/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				H4610
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-897" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-897 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/heyzo/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				HEYZO
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-898" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-898 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/mesubuta/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				MESUBUTA
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-899" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-899 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/muramura/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				MURAMURA
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-900" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-900 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/pacopacomama/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				PACOPACOMAMA
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-901" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-901 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/red-hot-collection/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				R.H COLLECTION
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-902" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-902 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/sky-high-entertainment/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				SKY HIGH ET
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-903" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-903 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/tokyo-hot/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				TOKYO HOT
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-904" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-904 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="<?php print home_url(); ?>/videos/javhd-com/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				JAVHD.COM
				</span>
			</span>
		</a>
	</li>
	</ul><!-- /.mega_dropdown -->
</li>
<li id="menu-item-772" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-772 widgets_dropdown default_style drop_to_right submenu_default_width columns2">
	<a href="<?php print home_url(); ?>/gallery" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			TOP IDOL JAV 2016
			</span>
		</span>
	</a>
</li>
<li id="menu-item-775" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-775 widgets_dropdown default_style drop_to_right submenu_default_width columns1">
	<a href="<?php print home_url(); ?>/contact-us/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			CONTACT US
			</span>
		</span>
	</a>
</li>

</ul>
		</div><!-- /class="menu_inner" -->
	</div><!-- /class="menu_holder" -->
</div><!-- /id="mega_main_menu" -->                        <!-- navbar Start -->
                    </div>
                </div>
                <!-- Navigation Start -->
            </div>
        </div>
    </div>

    <?php
    wp_reset_postdata();
    $output = ob_get_clean();
    return $output;
}

add_shortcode('vm_categorynav_bar', 'vm_do_categorynav_bar');
