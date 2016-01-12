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
	<a href="http://dongdam.info/demos/wp/videomagazine/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			Page Styles
			</span>
		</span>
	</a>
	<ul class="mega_dropdown"><div id="nav_menu-4" class="widget widget_nav_menu"><div class="widgettitle">Home Styles</div><div class="menu-home-styles-container"><ul id="menu-home-styles" class="menu"><li id="menu-item-776" class="menu-item menu-item-type-post_type menu-item-object-page active page_item page-item-335 active menu-item-776"><a href="http://dongdam.info/demos/wp/videomagazine/">Home Page 1</a></li>
<li id="menu-item-865" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-865"><a href="http://dongdam.info/demos/wp/videomagazine/home-2/">Home Page 2</a></li>
<li id="menu-item-866" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-866"><a href="http://dongdam.info/demos/wp/videomagazine/home-3/">Home Page 3</a></li>
<li id="menu-item-779" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-779"><a href="http://dongdam.info/demos/wp/videomagazine/home-4/">Home Page 4</a></li>
<li id="menu-item-868" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-868"><a href="http://dongdam.info/demos/wp/videomagazine/home-5-2/">Home Page 5</a></li>
</ul></div></div><div id="nav_menu-5" class="widget widget_nav_menu"><div class="widgettitle">Header Styles</div><div class="menu-header-styles-container"><ul id="menu-header-styles" class="menu"><li id="menu-item-852" class="menu-item menu-item-type-custom menu-item-object-custom active active menu-item-home menu-item-852"><a href="http://dongdam.info/demos/wp/videomagazine/">Header 1</a></li>
<li id="menu-item-781" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-781"><a href="http://dongdam.info/demos/wp/videomagazine/header-2/">Header 2</a></li>
<li id="menu-item-782" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-782"><a href="http://dongdam.info/demos/wp/videomagazine/header-3/">Header 3</a></li>
<li id="menu-item-871" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-871"><a href="http://dongdam.info/demos/wp/videomagazine/header-4/">Header 4</a></li>
<li id="menu-item-784" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-784"><a href="http://dongdam.info/demos/wp/videomagazine/header-5/">Header 5</a></li>
</ul></div></div><div id="nav_menu-6" class="widget widget_nav_menu"><div class="widgettitle">Footer Styles</div><div class="menu-footer-styles-container"><ul id="menu-footer-styles" class="menu"><li id="menu-item-597" class="menu-item menu-item-type-custom menu-item-object-custom active active menu-item-home menu-item-597"><a href="http://dongdam.info/demos/wp/videomagazine/">Footer 1</a></li>
<li id="menu-item-873" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-873"><a href="http://dongdam.info/demos/wp/videomagazine/footer-2/">Footer 2</a></li>
<li id="menu-item-874" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-874"><a href="http://dongdam.info/demos/wp/videomagazine/footer-3/">Footer 3</a></li>
<li id="menu-item-787" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-787"><a href="http://dongdam.info/demos/wp/videomagazine/footer-4/">Footer 4</a></li>
<li id="menu-item-876" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-876"><a href="http://dongdam.info/demos/wp/videomagazine/footer-5/">Footer 5</a></li>
</ul></div></div>
	</ul><!-- /.mega_dropdown -->
</li>
<li id="menu-item-774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774 widgets_dropdown default_style drop_to_right submenu_default_width columns3">
	<a href="http://dongdam.info/demos/wp/videomagazine/videos/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			Videos
			</span>
		</span>
	</a>
	<ul class="mega_dropdown"><div id="nav_menu-7" class="widget widget_nav_menu"><div class="widgettitle">Videos Grid</div><div class="menu-videos-list-container"><ul id="menu-videos-list" class="menu"><li id="menu-item-877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-877"><a href="http://dongdam.info/demos/wp/videomagazine/video-double-sidebar/">Double Sidebar</a></li>
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="http://dongdam.info/demos/wp/videomagazine/video-single-sidebar/">Single Sidebar</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="http://dongdam.info/demos/wp/videomagazine/video-fullwidth/">Fullwidth</a></li>
</ul></div></div><div id="nav_menu-8" class="widget widget_nav_menu"><div class="widgettitle">Videos – Carousel</div><div class="menu-videos-carousel-container"><ul id="menu-videos-carousel" class="menu"><li id="menu-item-908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908"><a href="http://dongdam.info/demos/wp/videomagazine/video-carousel-double-sidebar/">Double Sidebar</a></li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-822"><a href="http://dongdam.info/demos/wp/videomagazine/video-carousel-single-sidebar/">Single Sidebar</a></li>
<li id="menu-item-821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-821"><a href="http://dongdam.info/demos/wp/videomagazine/video-carousel-fullwidth/">Fullwidth</a></li>
</ul></div></div><div id="nav_menu-9" class="widget widget_nav_menu"><div class="widgettitle">Video Detail</div><div class="menu-videos-detail-container"><ul id="menu-videos-detail" class="menu"><li id="menu-item-854" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-854"><a href="http://dongdam.info/demos/wp/videomagazine/video/chef-series-go-greens/">Double Sidebar</a></li>
<li id="menu-item-599" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-599"><a href="http://dongdam.info/demos/wp/videomagazine/video/500-hrs-ashtanga-vinyasa-yoga-teacher/">Single Sidebar</a></li>
<li id="menu-item-600" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-600"><a href="http://dongdam.info/demos/wp/videomagazine/video/air-ballooning-over-stockholm-without-chinese-narration/">Fullwidth</a></li>
</ul></div></div><div id="vm_videocategory_grid-1" class="widget widget_vm_videocategory_grid">        <!-- Contents Section Started -->
        <div class="sections">
            <h2 class="heading">Hot Videos</h2>
            <div class="clearfix"></div>
            <div class="row">
                
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <!-- Video Box Start -->
                                    <div class="videobox2">
                                        <figure>
                                            <!-- Video Thumbnail Start --> 
                                            <a href="http://dongdam.info/demos/wp/videomagazine/video/faiz-sifir-anahtar-hazir/">
                                                <img src="http://i.vimeocdn.com/video/477539409_640.jpg" alt="Faiz Sıfır Anahtar Hazır" class="img-responsive hovereffect">
                                            </a>
                                            <div class="vidopts">
                                                <ul>
                                                                                                        <li><i class="fa fa-clock-o"></i>00:38</li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <!-- Video Thumbnail End -->
                                        </figure>
                                        <!-- Video Title -->
                                        <h4><a href="http://dongdam.info/demos/wp/videomagazine/video/faiz-sifir-anahtar-hazir/">Faiz Sıfır Anahtar Hazır</a></h4>
                                        <!-- Video Title -->
                                    </div>
                                    <!-- Video Box End -->
                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <!-- Video Box Start -->
                                    <div class="videobox2">
                                        <figure>
                                            <!-- Video Thumbnail Start --> 
                                            <a href="http://dongdam.info/demos/wp/videomagazine/video/spot-ipad-deaf/">
                                                <img src="http://i.vimeocdn.com/video/477544195_640.jpg" alt="Spot ” iPad Deaf “" class="img-responsive hovereffect">
                                            </a>
                                            <div class="vidopts">
                                                <ul>
                                                                                                        <li><i class="fa fa-clock-o"></i>02:13</li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <!-- Video Thumbnail End -->
                                        </figure>
                                        <!-- Video Title -->
                                        <h4><a href="http://dongdam.info/demos/wp/videomagazine/video/spot-ipad-deaf/">Spot ” iPad Deaf “</a></h4>
                                        <!-- Video Title -->
                                    </div>
                                    <!-- Video Box End -->
                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <!-- Video Box Start -->
                                    <div class="videobox2">
                                        <figure>
                                            <!-- Video Thumbnail Start --> 
                                            <a href="http://dongdam.info/demos/wp/videomagazine/video/rock-cycling/">
                                                <img src="http://i.vimeocdn.com/video/477547875_640.jpg" alt="Rock Cycling" class="img-responsive hovereffect">
                                            </a>
                                            <div class="vidopts">
                                                <ul>
                                                                                                        <li><i class="fa fa-clock-o"></i>06:18</li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <!-- Video Thumbnail End -->
                                        </figure>
                                        <!-- Video Title -->
                                        <h4><a href="http://dongdam.info/demos/wp/videomagazine/video/rock-cycling/">Rock Cycling</a></h4>
                                        <!-- Video Title -->
                                    </div>
                                    <!-- Video Box End -->
                                </div>

                                                    </div>
        </div>
        <!-- Contents Section End -->
        <div class="clearfix"></div>
        </div>
	</ul><!-- /.mega_dropdown -->
</li>
<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773 widgets_dropdown default_style drop_to_right submenu_default_width columns3">
	<a href="http://dongdam.info/demos/wp/videomagazine/blog/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			Blog
			</span>
		</span>
	</a>
	<ul class="mega_dropdown"><div id="nav_menu-10" class="widget widget_nav_menu"><div class="widgettitle">Blog Grid</div><div class="menu-blog-list-container"><ul id="menu-blog-list" class="menu"><li id="menu-item-880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-880"><a href="http://dongdam.info/demos/wp/videomagazine/blog/blog-double-sidebar/">Double Sidebar</a></li>
<li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-794"><a href="http://dongdam.info/demos/wp/videomagazine/blog/blog-single-sidebar/">Single Sidebar</a></li>
<li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a href="http://dongdam.info/demos/wp/videomagazine/blog/blog-fullwidth/">Fullwidth</a></li>
</ul></div></div><div id="nav_menu-11" class="widget widget_nav_menu"><div class="widgettitle">Blog – Carousel</div><div class="menu-blog-carousel-container"><ul id="menu-blog-carousel" class="menu"><li id="menu-item-883" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-883"><a href="http://dongdam.info/demos/wp/videomagazine/blog/blog-carousel-double-sidebar/">Double Sidebar</a></li>
<li id="menu-item-797" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-797"><a href="http://dongdam.info/demos/wp/videomagazine/blog/blog-carousel-single-sidebar/">Single Sidebar</a></li>
<li id="menu-item-796" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-796"><a href="http://dongdam.info/demos/wp/videomagazine/blog/blog-carousel-fullwidth/">Fullwidth</a></li>
</ul></div></div><div id="nav_menu-12" class="widget widget_nav_menu"><div class="widgettitle">Blog Detail</div><div class="menu-blog-detail-container"><ul id="menu-blog-detail" class="menu"><li id="menu-item-601" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-601"><a href="http://dongdam.info/demos/wp/videomagazine/waters-years">Double Sidebar</a></li>
<li id="menu-item-858" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-858"><a href="http://dongdam.info/demos/wp/videomagazine/firmament-fly">Single Sidebar</a></li>
<li id="menu-item-859" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-859"><a href="http://dongdam.info/demos/wp/videomagazine/gathering-creepeth">Fullwidth</a></li>
</ul></div></div><div id="vm_postcategory_grid-1" class="widget widget_vm_postcategory_grid">        <!-- Contents Section Started -->
        <div class="sections">
            <h2 class="heading">Recent Posts</h2>
            <div class="clearfix"></div>
            <div class="row">
                
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <!-- Video Box Start -->
                                    <div class="post-240 post type-post status-publish format-standard has-post-thumbnail hentry category-awards tag-arts-2 tag-music-2 blogposttwo">
                                        <figure>
                                            <!-- Video Thumbnail Start --> 
                                            <a href="http://dongdam.info/demos/wp/videomagazine/waters-years/">
                                                                                                    <img width="1280" height="853" src="http://dongdam.info/demos/wp/videomagazine/wp-content/uploads/2014/06/picjumbo.com_IMG_95421.jpg" class="img-responsive hovereffect wp-post-image" alt="Elit quis vel aliquet">                                                                                            </a>
                                            <!-- Video Thumbnail End -->
                                        </figure>
                                        <div class="text">
                                            <h4><a href="http://dongdam.info/demos/wp/videomagazine/waters-years/">Waters Years</a></h4>
                                                                                            <ul>
                                                    <li>
                                                        <i class="fa fa-calendar"></i>
                                                        04-05-2014                                                    </li>
                                                    <li>
                                                        <i class="fa fa-align-justify"></i>
                                                        <ul class="post-categories">
	<li><a href="http://dongdam.info/demos/wp/videomagazine/category/awards/" rel="category tag">Awards</a></li></ul>                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                                                                                                        <a href="http://dongdam.info/demos/wp/videomagazine/waters-years/" class="btn btn-primary btn-xs backcolor">Read More</a>
                                                                                    </div>
                                        <!-- Video Title -->
                                        <!-- Video Title -->
                                    </div>
                                    <!-- Blog Post Two End -->
                                    <div class="clearfix"></div>
                                </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <!-- Video Box Start -->
                                    <div class="post-243 post type-post status-publish format-standard has-post-thumbnail hentry category-awards tag-data tag-news-2 blogposttwo">
                                        <figure>
                                            <!-- Video Thumbnail Start --> 
                                            <a href="http://dongdam.info/demos/wp/videomagazine/fourth-winged/">
                                                                                                    <img width="1280" height="853" src="http://dongdam.info/demos/wp/videomagazine/wp-content/uploads/2014/06/picjumbo.com_IMG_93861.jpg" class="img-responsive hovereffect wp-post-image" alt="Pellentesque pulvinar">                                                                                            </a>
                                            <!-- Video Thumbnail End -->
                                        </figure>
                                        <div class="text">
                                            <h4><a href="http://dongdam.info/demos/wp/videomagazine/fourth-winged/">Fourth Winged</a></h4>
                                                                                            <ul>
                                                    <li>
                                                        <i class="fa fa-calendar"></i>
                                                        01-05-2014                                                    </li>
                                                    <li>
                                                        <i class="fa fa-align-justify"></i>
                                                        <ul class="post-categories">
	<li><a href="http://dongdam.info/demos/wp/videomagazine/category/awards/" rel="category tag">Awards</a></li></ul>                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                                                                                                        <a href="http://dongdam.info/demos/wp/videomagazine/fourth-winged/" class="btn btn-primary btn-xs backcolor">Read More</a>
                                                                                    </div>
                                        <!-- Video Title -->
                                        <!-- Video Title -->
                                    </div>
                                    <!-- Blog Post Two End -->
                                    <div class="clearfix"></div>
                                </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <!-- Video Box Start -->
                                    <div class="post-235 post type-post status-publish format-standard has-post-thumbnail hentry category-awards tag-music-2 tag-video blogposttwo">
                                        <figure>
                                            <!-- Video Thumbnail Start --> 
                                            <a href="http://dongdam.info/demos/wp/videomagazine/gathering-creepeth/">
                                                                                                    <img width="1280" height="853" src="http://dongdam.info/demos/wp/videomagazine/wp-content/uploads/2014/06/picjumbo.com_IMG_87461.jpg" class="img-responsive hovereffect wp-post-image" alt="Tempor tincidunt magnis">                                                                                            </a>
                                            <!-- Video Thumbnail End -->
                                        </figure>
                                        <div class="text">
                                            <h4><a href="http://dongdam.info/demos/wp/videomagazine/gathering-creepeth/">Gathering Creepeth</a></h4>
                                                                                            <ul>
                                                    <li>
                                                        <i class="fa fa-calendar"></i>
                                                        27-10-2013                                                    </li>
                                                    <li>
                                                        <i class="fa fa-align-justify"></i>
                                                        <ul class="post-categories">
	<li><a href="http://dongdam.info/demos/wp/videomagazine/category/awards/" rel="category tag">Awards</a></li></ul>                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                                                                                                        <a href="http://dongdam.info/demos/wp/videomagazine/gathering-creepeth/" class="btn btn-primary btn-xs backcolor">Read More</a>
                                                                                    </div>
                                        <!-- Video Title -->
                                        <!-- Video Title -->
                                    </div>
                                    <!-- Blog Post Two End -->
                                    <div class="clearfix"></div>
                                </div>
                                                                                
                                    </div>
        </div>
        <!-- Contents Section End -->
        <div class="clearfix"></div>
        </div>
	</ul><!-- /.mega_dropdown -->
</li>
<li id="menu-item-772" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-772 widgets_dropdown default_style drop_to_right submenu_default_width columns2">
	<a href="http://dongdam.info/demos/wp/videomagazine/gallery/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			Gallery
			</span>
		</span>
	</a>
	<ul class="mega_dropdown"><div id="nav_menu-13" class="widget widget_nav_menu"><div class="widgettitle">Gallery Styles</div><div class="menu-gallery-styles-container"><ul id="menu-gallery-styles" class="menu"><li id="menu-item-832" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-832"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/style-1/">Gallery – Style 1</a></li>
<li id="menu-item-833" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-833"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/style-2/">Gallery – Style 2</a></li>
<li id="menu-item-834" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-834"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/style-3/">Gallery – Style 3</a></li>
<li id="menu-item-835" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-835"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/style-4/">Gallery – Style 4</a></li>
<li id="menu-item-837" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-837"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/style-5/">Gallery – Style 5</a></li>
<li id="menu-item-838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-838"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/style-6/">Gallery – Style 6</a></li>
<li id="menu-item-839" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-839"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/style-7/">Gallery – Style 7</a></li>
<li id="menu-item-840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-840"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/style-8/">Gallery – Style 8</a></li>
<li id="menu-item-929" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-929"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/style-9/">Gallery – Style 9</a></li>
<li id="menu-item-836" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-836"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/style-10/">Gallery – Style 10</a></li>
</ul></div></div><div id="nav_menu-14" class="widget widget_nav_menu"><div class="widgettitle">Gallery Columns</div><div class="menu-gallery-columns-container"><ul id="menu-gallery-columns" class="menu"><li id="menu-item-919" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-919"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/column-1/">Gallery – Column 1</a></li>
<li id="menu-item-830" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-830"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/column-2/">Gallery – Column 2</a></li>
<li id="menu-item-829" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-829"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/column-3/">Gallery – Column 3</a></li>
<li id="menu-item-916" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-916"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/column-4/">Gallery – Column 4</a></li>
<li id="menu-item-827" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-827"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/column-5/">Gallery – Column 5</a></li>
<li id="menu-item-826" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-826"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/column-6/">Gallery – Column 6</a></li>
<li id="menu-item-825" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-825"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/column-7/">Gallery – Column 7</a></li>
<li id="menu-item-824" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-824"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/column-8/">Gallery – Column 8</a></li>
<li id="menu-item-823" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-823"><a href="http://dongdam.info/demos/wp/videomagazine/gallery/column-9/">Gallery – Column 9</a></li>
</ul></div></div>
	</ul><!-- /.mega_dropdown -->
</li>
<li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-886 multicolumn_dropdown default_style drop_to_right submenu_default_width columns5">
	<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			Shortcodes
			</span>
		</span>
	</a>
	<ul class="mega_dropdown">
	<li id="menu-item-887" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-887 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/audio/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Audio
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-888" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-888 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/blockquote/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Blockquote
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-889" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-889 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/box/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Box
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-890" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-890 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/buttons/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Buttons
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-891" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-891 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/divider/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Divider
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-892" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-892 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/dropcap/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Dropcap
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-893" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-893 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/google-map/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Google Map
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-894" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-894 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/heading/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Heading
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-895" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-895 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/highlight/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Highlight
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-896" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-896 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/image/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Image
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-897" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-897 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/label/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Label
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-898" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-898 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/lightbox/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Lightbox
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-899" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-899 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/lists/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Lists
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-900" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-900 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/note/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Note
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-901" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-901 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/pullquote/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Pullquote
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-902" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-902 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/service/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Service
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-903" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-903 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/sliders/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Sliders
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-904" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-904 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/spoiler/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Spoiler
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-905" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-905 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/tables/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Tables
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-906" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-906 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/tabs/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Tabs
				</span>
			</span>
		</a>
	</li>
	<li id="menu-item-907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:20%;">
		<a href="http://dongdam.info/demos/wp/videomagazine/shortcodes/tooltip/" class="item_link  disable_icon" tabindex="0">
			<i class=""></i> 
			<span class="link_content">
				<span class="link_text">
				Tooltip
				</span>
			</span>
		</a>
	</li>
	</ul><!-- /.mega_dropdown -->
</li>
<li id="menu-item-775" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-775 widgets_dropdown default_style drop_to_right submenu_default_width columns1">
	<a href="http://dongdam.info/demos/wp/videomagazine/contact-us/" class="item_link  disable_icon" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
			Contact Us
			</span>
		</span>
	</a>
	<ul class="mega_dropdown"><div id="text-5" class="widget widget_text">			<div class="textwidget"><div class="su-row">
<div class="su-column su-column-size-1-1"><div class="su-column-inner su-clearfix">
<a href="http://dongdam.info/demos/wp/videomagazine/contact-us/">
<strong>
<i class="fa fa-envelope"></i>
View contact us page or write your message here
</strong>
</a>
<hr>
</div></div>
</div>

<div class="su-row">
<div class="su-column su-column-size-2-3"><div class="su-column-inner su-clearfix">
<div class="wpcf7" id="wpcf7-f666-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form name="" action="/demos/wp/videomagazine/#wpcf7-f666-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="666">
<input type="hidden" name="_wpcf7_version" value="4.1.1">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f666-o1">
<input type="hidden" name="_wpnonce" value="03b0e1362e">
</div>
<div class="contact-forms">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 .col-xs-12">
                                                                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name"></span>
                                                                                </div>
<div class="col-lg-6 col-md-6 col-sm-12 .col-xs-12">
  <span class="wpcf7-form-control-wrap e-mail"><input type="text" name="e-mail" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Email Address"></span>
                                                                                </div>
<div class="col-lg-12 col-md-12 col-sm-12 .col-xs-12">
                                                                                <span class="wpcf7-form-control-wrap subject"><input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Subject"></span>
                                                                                </div>
<div class="col-lg-12 col-md-12 col-sm-12 .col-xs-12">
                                                                                    <span class="wpcf7-form-control-wrap placeholder"><textarea name="placeholder" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false">Your Message</textarea></span>
                                                                                </div>
<div class="col-lg-12 col-md-12 col-sm-12 .col-xs-12">
<input type="submit" value="Submit Message" class="wpcf7-form-control wpcf7-submit btn btn-primary backcolor"><img class="ajax-loader" src="http://dongdam.info/demos/wp/videomagazine/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;"><p></p>
<p>Make sure you put a valid email.</p>
<p></p></div>
<p></p></div>
<p></p></div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
</div></div>
<div class="su-column su-column-size-1-3"><div class="su-column-inner su-clearfix">
<div class="su-gmap su-responsive-media-yes"><iframe width="600" height="500" src="http://maps.google.com/maps?q=London%2C+United+Kingdom&amp;output=embed"></iframe></div>
</div></div>
</div></div>
		</div>
	</ul><!-- /.mega_dropdown -->
</li></ul>
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
