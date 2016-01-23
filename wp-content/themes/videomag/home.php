<?php
/**
 * Template Name: Home page
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
        <div class="row">
            <!-- Bread Crumb Start -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="http://king69.net">Home</a></li>
                    <li class="active">KING69.NET -  Daily Free Porn Videos - Free Watch JAV online.</li>
                </ol>
            </div>
            <!-- Bread Crumb End -->

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-6">
                    <h1 class="heading">HOT VIDEOS 2016</h1>
                    <?php $block_home_1 = implode(',', get_home_top(870, 'block_homes', 'limit_home', 'block_home')); ?>
                    <?php //echo do_shortcode('[su_slider source="video: ' . $block_home_1 . '" link="post"]'); ?> 
                    <?php $block_slide = get_home_top(870, 'block_homes', 'limit_home', 'block_home'); ?>
                    <!--slide-->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php for ($slide = 0; $slide < count($block_slide); $slide++) { ?>
                                <li data-target="#myCarousel" data-slide-to="<?php print $slide; ?>" <?php print ($slide == 0) ? 'class="active"' : ''; ?>></li>
                            <?php } ?>

                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php
                            for ($slide = 0; $slide < count($block_slide); $slide++) {
                                $image = (wp_get_attachment_image_src(get_post_thumbnail_id($block_slide[$slide]), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id($block_slide[$slide]), 'full')[0] : get_template_directory_uri() . '/images/images/img21.jpg';
                                ?>
                                <div class="item <?php print ($slide == 0) ? "active" : ''; ?>">
                                    <a href="<?php the_permalink($block_slide[$slide]); ?>">
                                        <?php if ($censored = (get_field('censored', $block_slide[$slide]))) : ?>
                                            <div class="discount-tag"></div>
                                        <?php endif; ?>
                                        <!--660x326-->
                                        <!--medium size 1320 x 652 -->
                                        <img src="<?php print get_bfithumb(1320, 652, $image); ?>" alt="Chania">
                                    </a>
                                </div>
                            <?php } ?>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <!--end slide-->

                </div>
                <div class="col-md-6">
                    <!-- Contents Section Started -->
                    <div class="sections">
                        <h2 class="heading"><?php _e(' Funny', 'videomagazine'); ?></h2>
                        <div class="clearfix"></div>
                        <div class="row" id="top-home">

                            <?php
                            $block_home_2 = get_home_top(871, 'block_homes', 'limit_home', 'block_home');
                            $character = vm_get_option('opt-limit-block-top-home-right');
                            $paging = current(explode("|", $character));
                            $limt_character = end(explode("|", $character));
                            for ($block2 = 0; $block2 < count($block_home_2); $block2++) :
                                $post2 = get_post($block_home_2["$block2"]);
                                $image = (wp_get_attachment_image_src(get_post_thumbnail_id($post2->ID), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id($post2->ID), 'full')[0] : get_template_directory_uri() . '/images/images/img21.jpg';
                                $time = (get_field('time_video', $post2->ID)) ? get_field('time_video', $post2->ID) : '0 : 00';
                                ?>


                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <!-- Video Box Start -->
                                    <div class="videobox2">
                                        <figure>
                                            <!-- Video Thumbnail Start --> 
                                            <a href="<?php print get_permalink($post2->ID); ?>">
                                                <?php if ($censored = (get_field('censored', $post2->ID))) : ?>
                                                    <div class="discount-tag"></div>
                                                <?php endif; ?>
                                                <img src="<?php print get_bfithumb(640, 360, $image) ?>" alt="<?php print $post2->post_title ?>" class="img-responsive hovereffect">
                                            </a>
                                            <div class="vidopts">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i><?php print $time; ?></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <!-- Video Thumbnail End -->
                                        </figure>
                                        <!-- Video Title -->
                                        <h4><a class="title-text" href="<?php print get_permalink($post2->ID); ?>"><?php print catchuoi($post2->post_title, $limt_character); ?></a></h4>
                                        <!-- Video Title -->
                                    </div>
                                    <!-- Video Box End -->
                                </div>
                                <?php
                            endfor;
                            ?>



                        </div>
                    </div>
                    <!-- Contents Section End -->



                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 

                <div>
                    <?php
                    $cats = get_home_top(908, 'home_cat', 'cat_limit', 'cat_homes');
                    $cats = array_shift($cats);

                    for ($cat = 0; $cat < count($cats); $cat++):
                        $cat_info = get_term($cats[$cat], 'video_categories');
                        ?>
                        <?php if ($cat == 0) : ?>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php _e(' All video', 'videomagazine'); ?> </a>
                                </li>

                            <?php endif; ?>

                            <li role="presentation"><a href="#<?php print $cat_info->slug; ?>" aria-controls="<?php print $cat_info->slug; ?>" role="tab" data-toggle="tab" ><?php print $cat_info->name; ?></a></li>
                            <?php if ($cat == count($cats) - 1) : ?>
                            </ul>
                        <?php endif; ?>
                    <?php endfor; ?>
                    <?php for ($cat = 0; $cat < count($cats); $cat++): ?>
                        <?php 
                        $cat_info = get_term($cats[$cat], 'video_categories');
                        $character = vm_get_option('opt-limit-home');
                        $paging = current(explode("|", $character));
                        $limt_character = end(explode("|", $character));
                        
                        ?>
                        <?php if ($cat == 0) : ?>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div id="load-more-0">
                                        <?php
                                        $arr = array(
                                            'post_type' => 'video',
                                            'posts_per_page' => $paging,
                                        );
//                                        die(1233);
                                        $query = new WP_Query($arr);
                                        if ($query->have_posts()):
                                            while ($query->have_posts()): $query->the_post();

                                                $image = (wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0] : get_template_directory_uri() . '/images/images/img21.jpg';
                                                $time = (get_field('time_video', $post->ID)) ? get_field('time_video', $post->ID) : '0 : 00';
                                                ?>

                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                    <!-- Video Box Start -->
                                                    <div class="videobox2">
                                                        <figure>
                                                            <!-- Video Thumbnail Start --> 
                                                            <a href="<?php print get_permalink(get_the_ID()); ?>">
                                                                <?php if ($censored = (get_field('censored', $post->ID))) : ?>
                                                                    <div class="discount-tag"></div>
                                                                <?php endif; ?>
                                                                <!--image size-->
                                                                <!--207 x 138-->
                                                                <!--size medium 414 x 276-->

                                                                <img src="<?php print get_bfithumb(414, 276, $image); ?>" alt="<?php print the_title(); ?>" class="img-responsive hovereffect">
                                                            </a>
                                                            <div class="vidopts">
                                                                <ul>
                                                                    <li><i class="fa fa-clock-o"></i><?php print $time; ?></li>
                                                                </ul>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <!-- Video Thumbnail End -->
                                                        </figure>
                                                        <!-- Video Title -->
                                                        <h4><a href="<?php print get_permalink($post->ID); ?>"><?php print catchuoi($post->post_title, $limt_character); ?></a></h4>
                                                        <!-- Video Title -->
                                                    </div>
                                                    <!-- Video Box End -->
                                                </div>

                                                <?php
                                            endwhile;
                                        endif;
                                        ?>



                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="process col-md-12"> <img src="<?php print get_template_directory_uri(); ?>/images/images/loading.gif"/> </div>
                                    <span class="su-lightbox col-md-12"  >
                                        <a onclick="load_more();" id="number-0" href="<?php print admin_url('admin-ajax.php'); ?>" data-nonce="<?php print wp_create_nonce("my_user_vote_nonce"); ?>" data-page="1" data-id="" class="load-more su-button su-button-style-default" style="width:50%;text-align: center; color:#FFFFFF;background-color:#2D89EF;border-color:#246ebf;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px" target="_self">
                                            <span style="color:#FFFFFF;padding:0px 16px;font-size:13px;line-height:26px;border-color:#6cacf4;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;text-shadow:none;-moz-text-shadow:none;-webkit-text-shadow:none">
                                                <?php _e(' Click More Video ', 'videomagazine'); ?> 
                                            </span>
                                        </a>

                                    </span>
                                </div>
                            <?php endif; ?>
                            <div role="tabpanel" class="tab-pane " id="<?php print $cat_info->slug; ?>">
                                <div id="load-more-<?php print $cat_info->term_id; ?>">
                                    <?php
                                    $array = array(
                                        'post_type' => 'video',
                                        'post_status' => 'publish',
                                        'orderby' => 'date',
                                        'order' => 'DESC',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'video_categories',
                                                'field' => 'id',
                                                'terms' => $cat_info->term_id
                                            ),
                                        ),
                                        'posts_per_page' => $paging,
                                    );
                                    $query = new WP_Query($array);
                                    if ($query->have_posts()):
                                        while ($query->have_posts()): $query->the_post();
                                            $image = (wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0] : get_template_directory_uri() . '/images/images/img21.jpg';
                                            $time = (get_field('time_video', $post->ID)) ? get_field('time_video', $post->ID) : '0 : 00';
                                            ?>

                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                <!-- Video Box Start -->
                                                <div class="videobox2">
                                                    <figure>
                                                        <!-- Video Thumbnail Start --> 
                                                        <a href="<?php print get_permalink(get_the_ID()); ?>">
                                                            <?php if ($censored = (get_field('censored', $post->ID))) : ?>
                                                                <div class="discount-tag"></div>
                                                            <?php endif; ?>
                                                            <!--image size-->
                                                            <!--207 x 138-->
                                                            <!--size medium 414 x 276-->

                                                            <img src="<?php print get_bfithumb(414, 276, $image); ?>" alt="<?php print the_title(); ?>" class="img-responsive hovereffect">
                                                        </a>
                                                        <div class="vidopts">
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i><?php print $time; ?></li>
                                                            </ul>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <!-- Video Thumbnail End -->
                                                    </figure>
                                                    <!-- Video Title -->
                                                    <h4><a href="<?php print get_permalink(get_the_ID()); ?>"><?php print catchuoi(get_the_title(), $limt_character); ?></a></h4>
                                                    <!-- Video Title -->
                                                </div>
                                                <!-- Video Box End -->
                                            </div>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>


                                </div>
                                <div class="clearfix"></div>
                                <div class="process col-md-12"> <img src="<?php print get_template_directory_uri(); ?>/images/images/loading.gif"/> </div>
                                <span class="su-lightbox col-md-12" >
                                    <a onclick="load_more();" id="number-<?php print $cat_info->term_id; ?>" href="<?php print admin_url('admin-ajax.php'); ?>" data-nonce="<?php print wp_create_nonce("my_user_vote_nonce"); ?>" data-page="1" data-id="<?php print $cat_info->term_id; ?>" class="load-more su-button su-button-style-default" style="width:50%;text-align: center; color:#FFFFFF;background-color:#2D89EF;border-color:#246ebf;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px" target="_self">
                                        <span style="color:#FFFFFF;padding:0px 16px;font-size:13px;line-height:26px;border-color:#6cacf4;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;text-shadow:none;-moz-text-shadow:none;-webkit-text-shadow:none">
                                            <?php _e(' Click More Video ', 'videomagazine'); ?> 
                                        </span>
                                    </a>

                                </span>
                            </div>


                            <?php if ($cat == count($cats) - 1) : ?> 
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>



            </div>

            <?php
            $link_adv_2 = (!empty(get_field('adv', 885)) && get_field('adv', 885) ) ? get_field('adv', 885) : "";
            $img_adv_2 = (!empty(wp_get_attachment_image_src(get_post_thumbnail_id(885), 'full')[0]) && wp_get_attachment_image_src(get_post_thumbnail_id(885), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id(885), 'full')[0] : get_template_directory_uri() . '/images/images/adv.gif';
            echo ($link_adv_2) ? do_shortcode('[su_frame link=' . $link_adv_2 . ']<img src="' . $img_adv_2 . '" alt="" class="img-responsive" />[/su_frame]') : "";
            ?>
            <div class="sections">
                <h2 class="heading">TOP 6 VIDEOS</h2>
                <div class="clearfix"></div>
                <div class="row">
                    <?php
                    $block_home_adv = get_home_top(874, 'block_homes', 'limit_home', 'block_home');
                    if ($block_home_adv) :
                        for ($block_adv = 0; $block_adv < count($block_home_adv); $block_adv++) :
                            $post_adv = get_post($block_home_adv["$block_adv"]);
                            $image = (wp_get_attachment_image_src(get_post_thumbnail_id($post_adv->ID), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id($post_adv->ID), 'full')[0] : get_template_directory_uri() . '/images/images/img21.jpg';
                            $time = (get_field('time_video', $post_adv->ID)) ? get_field('time_video', $post_adv->ID) : '0 : 00';
                            $link_adv = get_field('adv', $post_adv->ID);
                            ?>

                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <!-- Video Box Start -->
                                <div class="videobox2">
                                     <?php  print $link_adv; ?>
                                            
                                </div>
                                <!-- Video Box End -->
                            </div>
                            <?php
                        endfor;
                    endif;
                    ?>



                </div>
                <div class="advs">
                    <script> var _gunggo={settings:{siteID:"S0009448",pop:{type:"tab"}}}; _gunggo.settings.pop.freqcap={frequency:2,duration:1};  </script> <script src="//cdn.directrev.com/js/gp.min.js?s=S0009448"></script> <!-- END S0009448 TAG --> <!-- BEGIN share3x.net 300x250 BANNER --> <script>var _drev={site:"S0009449",type:1}</script> <script src="http://xch.directrev.com/js/gb.min.js?s=S0009449"></script>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contents End -->
<?php get_footer(); ?>