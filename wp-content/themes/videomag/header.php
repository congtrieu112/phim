<?php
/**
 * The header for Video Magazine.
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>

        <title><?php wp_title('|', true); ?></title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link  rel="icon" href="<?php echo vm_get_media('vm-media-favicon'); ?>" type="image/x-icon" />
        <link  rel="shortcut icon" href="<?php echo vm_get_media('vm-media-favicon'); ?>" type="image/x-icon" />

        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
            <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="http://content.jwplatform.com/libraries/h2dPfFWZ.js"></script>
    <script type="text/javascript">jwplayer.key = 'H9xTsh9D62dkv+MYY96fdzM8RhYZCIlEKrYe+OxlxbM='</script>
    <script type=text/javascript>
        var SINGLE_VIDEO = <?php print (is_singular( 'video' )) ? 1 : 0; ?>
    </script>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <!-- facebook share button start -->
        <div id="fb-root"></div>
        <!-- facebook share button end -->

        <!-- Wrapper Start -->
        <div class="wrapper">
            <!-- Header Start -->
            <header<?php get_header_style(); ?>>
                <!-- Header Top Strip Start -->
                <?php echo do_shortcode(get_nav_shortcode()); ?>
                <!-- Header Top Strip End -->

                <?php if (get_header_slides()): ?>
                    <?php get_sidebar('header-slides'); ?>
                <?php endif; ?>

                <!-- Logo + Search + Advertisment Start -->
                <div class="logobar">
                    <div class="custom-container">
                        <div class="row">
                            <!-- Logo Start -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="logo">
                                    <a href="<?php echo site_url(); ?>"><img src="<?php echo vm_get_media(); ?>" alt="KING69.NET" /></a>
                                </div>
                            </div>
                            <!-- Logo End -->
                            <!-- Search Start -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="searchbox">
                                    <form action="<?php echo site_url(); ?>" id="searchform" method="get">
                                        <ul>
                                            <li><input type="text" placeholder="Search" id="s" name="s" /></li>
                                            <li class="pull-right"><input type="submit" value="GO" id="searchsubmit" /></li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!-- Search End -->
                            <!-- Advertisment Start -->
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <figure class="header-adv">
                                    <?php echo vm_get_option('vm-ads-header'); ?>
                                </figure>
                            </div>
                            <!-- Advertisment End -->
                        </div>
                    </div>
                </div>
                <!-- Logo + Search + Advertisment End -->
                <?php echo get_nav_shortcode('category'); ?>
            </header>
            <!-- Header End -->
            
