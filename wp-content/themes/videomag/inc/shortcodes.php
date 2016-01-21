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
	<a href="http://dongdam.info" class="item_link  disable_icon" tabindex="0">
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
	<a href="http://dongdam.info/videos/jav-censored/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			JAV CENSORED HD
			</span>
		</span>
	</a>
	<ul class="mega_dropdown">
	<div id="nav_menu-7" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-list-container"><ul id="menu-videos-list" class="menu">
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/abuse-censored/">Abuse</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/asshole-censored/">Asshole</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/bath-censored/">Bath</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/beautifull-girls-censored/">Beautifull Girls</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/big-tits-censored/">Big Tits <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/breast-milk-censored/">Breast Milk</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/bride-young-wife-censored/">Bride-Young Wife</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/classic-censored/">Classic</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/confinement-censored/">Confinement</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/cosplay-censored/">Cosplay</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/couple-censored/">Couple</a></li>
</ul></div></div>
	<div id="nav_menu-8" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/cuckold-censored/">Cuckold</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/abuse-censored/">Dead Drunk</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/dead-drunk-censored/">Doctor</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/drug-censored/">Drug</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/entertainer-censored/">Entertainer</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/father-in-law-censored/">Father-in-law</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/gangbang-censored/">Gangbang <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/gay-censored/">Gay</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/gym-censored/">Gym</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/hardcore-censored/">Hardcore <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/hostess-censored/">Hostess</a></li>
</ul></div></div>
	<div id="nav_menu-9" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/incest-censored/">Incest</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/instructor-censored/">Instructor</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/kimono-censored/">Kimono <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/lesbian-censored/">Lesbian</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/married-woman-censored/">Married Woman</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/massage-censored/">Massage</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/molester-censored/">Molester</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/mother-in-law-censored/">Mother-in-law</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/mormal-censored/">Normal</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/murse-censored/">Nurse</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/Office-censored/">Office <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
</ul></div></div>
<div id="nav_menu-10" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/old-man-censored/">Old Man</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/old-woman-censored/">Old Woman</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/outdoors-censored/">Outdoors</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/peeping-censored/">Peeping</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/Planning-censored/">planning</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/pregnant-woman-censored/">Pregnant Woman</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/rape-censored/">Rape <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/school-girl-censored/">School Girl <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/sex-in-car-censored/">Sex In Car</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/shower-censored/">Shower</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/slave-censored/">Slave</a></li>
</ul></div></div>
<div id="nav_menu-11" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/sm-censored/">SM <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/sport-censored/">Sport</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/stepdad-censored/">StepDad</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/stepmom-censored/">StepMom</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/swimsuit-censored/">Swimsuit</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/teen-girl-censored/">Teen Girl <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/toy-censored/">Toy</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/waitress-censored/">Waitress</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/widow-censored/">Widow</a></li>
</ul></div></div>
<div id="vm_videocategory_grid-1" class="widget widget_vm_videocategory_grid">
        <div class="clearfix"></div>
        </div>
	</ul><!-- /.mega_dropdown -->
</li>
<li id="menu-item-775" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774 widgets_dropdown default_style drop_to_right submenu_default_width columns5">
	<a href="http://dongdam.info/videos/jav-uncensored/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			JAV UNCENSORED HD
			</span>
		</span>
	</a>
	<ul class="mega_dropdown">
	<div id="nav_menu-12" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-list-container"><ul id="menu-videos-list" class="menu">
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/abuse-uncensored/">Abuse</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/asshole-uncensored/">Asshole</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/bath-uncensored/">Bath</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/beautifull-girls-uncensored/">Beautifull Girls</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/big-tits-uncensored/">Big Tits</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/breast-milk-uncensored/">Breast Milk</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/bride-young-wife-uncensored/">Bride-Young Wife</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/classic-uncensored/">Classic</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/confinement-uncensored/">Confinement</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/cosplay-uncensored/">Cosplay <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/couple-uncensored/">Couple</a></li>
</ul></div></div>
	<div id="nav_menu-8" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/cuckold-uncensored/">Cuckold</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/abuse-uncensored/">Dead Drunk</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/dead-drunk-uncensored/">Doctor</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/drug-uncensored/">Drug</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/entertainer-uncensored/">Entertainer</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/father-in-law-uncensored/">Father-in-law</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/gangbang-uncensored/">Gangbang <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/gay-uncensored/">Gay</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/gym-uncensored/">Gym</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/hardcore-uncensored/">Hardcore <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/hostess-uncensored/">Hostess</a></li>
</ul></div></div>
	<div id="nav_menu-9" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/incest-uncensored/">Incest</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/instructor-uncensored/">Instructor</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/kimono-uncensored/">Kimono</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/lesbian-uncensored/">Lesbian</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/married-woman-uncensored/">Married Woman</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/massage-uncensored/">Massage</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/molester-uncensored/">Molester</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/mother-in-law-uncensored/">Mother-in-law</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/mormal-uncensored/">Normal</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/murse-uncensored/">Nurse <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/Office-uncensored/">Office <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
</ul></div></div>
<div id="nav_menu-10" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/old-man-uncensored/">Old Man</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/old-woman-uncensored/">Old Woman</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/outdoors-uncensored/">Outdoors</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/peeping-uncensored/">Peeping</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/Planning-uncensored/">planning</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/pregnant-woman-uncensored/">Pregnant Woman</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/rape-uncensored/">Rape</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/school-girl-uncensored/">School Girl <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/sex-in-car-uncensored/">Sex In Car</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/shower-uncensored/">Shower</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/slave-uncensored/">Slave</a></li>
</ul></div></div>
<div id="nav_menu-11" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/sm-uncensored/">SM <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/sport-uncensored/">Sport</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/stepdad-uncensored/">StepDad</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/stepmom-uncensored/">StepMom</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/swimsuit-uncensored/">Swimsuit <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/teen-girl-uncensored/">Teen Girl <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/toy-uncensored/">Toy</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/waitress-uncensored/">Waitress</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/widow-uncensored/">Widow</a></li>
</ul></div></div>
<div id="vm_videocategory_grid-1" class="widget widget_vm_videocategory_grid">
        <div class="clearfix"></div>
        </div>
	</ul><!-- /.mega_dropdown -->
</li>
<li id="menu-item-776" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774 widgets_dropdown default_style drop_to_right submenu_default_width columns5">
	<a href="http://dongdam.info/videos/us-eu-porn/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			PORN US/EU HD
			</span>
		</span>
	</a>
	<ul class="mega_dropdown">
	<div id="nav_menu-16" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-list-container"><ul id="menu-videos-list" class="menu">
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/abuse/">Abuse</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/asshole/">Asshole</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/bath/">Bath</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/beautifull-girls/">Beautifull Girls</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/big-tits/">Big Tits <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/breast-milk/">Breast Milk</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/bride-young-wife/">Bride-Young Wife</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/classic/">Classic</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/confinement/">Confinement</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/cosplay/">Cosplay <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/couple/">Couple</a></li>
</ul></div></div>
	<div id="nav_menu-8" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/cuckold/">Cuckold</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/abuse/">Dead Drunk</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/dead-drunk/">Doctor</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/drug/">Drug</a></li>
<li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/videos/entertainer/">Entertainer</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/videos/father-in-law/">Father-in-law</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/videos/gangbang/">Gangbang <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/gay/">Gay</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/gym/">Gym</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/hardcore/">Hardcore <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/hostess/">Hostess</a></li>
</ul></div></div>
	<div id="nav_menu-9" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/incest/">Incest</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/instructor/">Instructor</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/kimono/">Kimono</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/lesbian/">Lesbian</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/married-woman/">Married Woman</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/massage/">Massage</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/molester/">Molester</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/mother-in-law/">Mother-in-law</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/mormal/">Normal</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/murse/">Nurse</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/Office/">office</a></li>
</ul></div></div>
<div id="nav_menu-10" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/old-man/">Old Man</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/old-woman/">Old Woman</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/outdoors/">Outdoors</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/peeping/">Peeping</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/Planning/">planning</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/pregnant-woman/">Pregnant Woman</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/rape/">Rape <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/school-girl/">School Girl</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/sex-in-car/">Sex In Car</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/shower/">Shower</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/slave/">Slave</a></li>
</ul></div></div>
<div id="nav_menu-11" class="widget widget_nav_menu"><div class="widgettitle">Categories</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu">
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/sm/">SM</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/sport/">Sport</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/stepdad/">StepDad</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/stepmom/">StepMom</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/swimsuit/">Swimsuit</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/teen-girl/">Teen Girl <img src="http://dongdam.info/wp-content/uploads/2016/01/icon-hot-big.gif" /></a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/videos/toy/">Toy</a></li>
<li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/videos/waitress/">Waitress</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/videos/widow/">Widow</a></li>
</ul></div></div>
<div id="vm_videocategory_grid-1" class="widget widget_vm_videocategory_grid">
        <div class="clearfix"></div>
        </div>
	</ul><!-- /.mega_dropdown -->
</li>
<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773 widgets_dropdown default_style drop_to_right submenu_default_width columns3">
	<a href="http://dongdam.info/videos/amature-videos/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			AMATURE VIDEOS
			</span>
		</span>
	</a>
	<ul class="mega_dropdown"><div id="nav_menu-10" class="widget widget_nav_menu"><div class="widgettitle">CHINA</div><div class="menu-blog-list-container"><ul id="menu-blog-list" class="menu">
<li id="menu-item-880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-880"><a href="http://dongdam.info/videos/teen-girl-china/">Teen Girl</a></li>
<li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-794"><a href="http://dongdam.info/videos/webcam-showcam-china/">WebCam-ShowCam</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="http://dongdam.info/videos/handmade-china/">HandMade</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="http://dongdam.info/videos/other-china/">Other</a></li>
</ul></div></div><div id="nav_menu-11" class="widget widget_nav_menu"><div class="widgettitle">JAPAN</div><div class="menu-blog-carousel-container"><ul id="menu-blog-carousel" class="menu">
<li id="menu-item-880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-880"><a href="http://dongdam.info/videos/teen-girl-japan/">Teen Girl</a></li>
<li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-794"><a href="http://dongdam.info/videos/webcam-showcam-japan/">WebCam-ShowCam</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="http://dongdam.info/videos/handmade-japan/">HandMade</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="http://dongdam.info/videos/other-japan/">Other</a></li>
</ul></div></div><div id="nav_menu-12" class="widget widget_nav_menu"><div class="widgettitle">THAILAND</div><div class="menu-blog-detail-container"><ul id="menu-blog-detail" class="menu">
<li id="menu-item-880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-880"><a href="http://dongdam.info/videos/teen-girl-thailand/">Teen Girl</a></li>
<li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-794"><a href="http://dongdam.info/videos/webcam-showcam-thailand/">WebCam-ShowCam</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="http://dongdam.info/videos/handmade-thailand/">HandMade</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="http://dongdam.info/videos/other-thailand/">Other</a></li>
</ul></div></div>
<div id="nav_menu-12" class="widget widget_nav_menu"><div class="widgettitle">VIETNAM</div><div class="menu-blog-detail-container"><ul id="menu-blog-detail" class="menu">
<li id="menu-item-880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-880"><a href="http://dongdam.info/videos/teen-girl-vietnam/">Teen Girl</a></li>
<li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-794"><a href="http://dongdam.info/videos/webcam-showcam-vietnam/">WebCam-ShowCam</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="http://dongdam.info/videos/handmade-vietnam/">HandMade</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="http://dongdam.info/videos/other-vietnam/">Other</a></li>
</ul></div></div>
<div id="nav_menu-12" class="widget widget_nav_menu"><div class="widgettitle">KOREA</div><div class="menu-blog-detail-container"><ul id="menu-blog-detail" class="menu">
<li id="menu-item-880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-880"><a href="http://dongdam.info/videos/teen-girl-korea/">Teen Girl</a></li>
<li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-794"><a href="http://dongdam.info/videos/webcam-showcam-korea/">WebCam-ShowCam</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="http://dongdam.info/videos/handmade-korea/">HandMade</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="http://dongdam.info/videos/other-korea/">Other</a></li>
</ul></div></div>
<div id="nav_menu-12" class="widget widget_nav_menu"><div class="widgettitle">OTHER</div><div class="menu-blog-detail-container"><ul id="menu-blog-detail" class="menu">
<li id="menu-item-880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-880"><a href="http://dongdam.info/videos/teen-girl-other/">Teen Girl</a></li>
<li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-794"><a href="http://dongdam.info/videos/webcam-showcam-other/">WebCam-ShowCam</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="http://dongdam.info/videos/handmade-other/">HandMade</a></li>
</ul></div></div><div id="vm_postcategory_grid-1" class="widget widget_vm_postcategory_grid">        <!-- Contents Section Started -->
        <!-- Contents Section End -->
        <div class="clearfix"></div>
        </div>
	</ul><!-- /.mega_dropdown -->
</li>

<li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-886 multicolumn_dropdown default_style drop_to_right submenu_default_width columns5">
	<a href="http://dongdam.info/videos/studio/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			JAV CENSORED STUDIO-MAKER
			</span>
		</span>
	</a>
	<ul class="mega_dropdown">
	<li id="menu-item-887" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-887 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/attackers/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				ATTACKERS
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-888" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-888 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/bi/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				BI
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-889" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-889 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/buoy-and-earl-produce/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				BUOY AND EARL
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-890" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-890 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/crystal-eizou/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				CRYSTAL EIZOU
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-891" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-891 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/e-body/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				E-BODY
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-892" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-892 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/ei-ten/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				EI TEN
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-893" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-893 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/fetish-box-mousou-zoku/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				FETISH B/M
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-894" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-894 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/hot-entertainment/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				HOT ET
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-895" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-895 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/idea-pocket/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				IDEA POCKET
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-896" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-896 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/kira-kira/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				KIRA ★ KIRA
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-897" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-897 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/ms-video-group/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				M’S VG
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-898" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-898 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/maza/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				MAZA
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-899" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-899 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/miru/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				MIRU
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-900" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-900 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/moodyz/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				MOODYZ
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-901" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-901 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/non/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				NON
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-902" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-902 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/opera/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				OPERA
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-903" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-903 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/oppai/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				OPPAI
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-904" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-904 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/prestige/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				PRESTIGE
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-905" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-905 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/radix/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				RADIX
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-906" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-906 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/ran-maru/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				RAN MARU
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/redcat/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				REDCAT
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/rookie/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				ROOKIE
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/s-cute/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				S-CUTE
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/sadistic-village/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				SAD. VILLAGE
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/siro/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				SIRO
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/sod-create/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				SOD CREATE
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/tma/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				TMA
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/venus/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				VENUS
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/waap-entertainment/" class="item_link  disable_icon" tabindex="0">
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
	<a href="http://dongdam.info/videos/audio/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			JAV UNCENSORED STUDIO-MAKER
			</span>
		</span>
	</a>
	<ul class="mega_dropdown">
	<li id="menu-item-887" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-887 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/1000giri/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				1000GIRI
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-888" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-888 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/10musume/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				10MUSUME
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-889" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-889 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/1pondo/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				1PONDO
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-890" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-890 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/av9898/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				AV9898
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-891" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-891 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/c0930/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				C0930
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-892" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-892 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/caribbeancom/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				CARIBBEANCOM
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-893" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-893 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/g-queen/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				G-QUEEN
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-894" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-894 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/gachinco/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				GACHINCO
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-895" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-895 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/h0930/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				H0930
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-896" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-896 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/h4610/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				H4610
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-897" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-897 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/heyzo/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				HEYZO
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-898" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-898 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/mesubuta/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				MESUBUTA
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-899" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-899 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/muramura/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				MURAMURA
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-900" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-900 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/pacopacomama/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				PACOPACOMAMA
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-901" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-901 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/red-hot-collection/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				R.H COLLECTION
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-902" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-902 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/sky-high-entertainment/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				SKY HIGH ET
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-903" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-903 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/tokyo-hot/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				TOKYO HOT
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-904" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-904 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/videos/javhd-com/" class="item_link  disable_icon" tabindex="0">
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
	<a href="http://dongdam.info/gallery" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			TOP IDOL JAV 2016
			</span>
		</span>
	</a>
</li>
<li id="menu-item-775" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-775 widgets_dropdown default_style drop_to_right submenu_default_width columns1">
	<a href="http://dongdam.info/contact-us/" class="item_link  disable_icon" tabindex="0">
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
