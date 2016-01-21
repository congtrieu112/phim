<?php
/*
Template Name: Custom page
*/
?>

<?php get_header(); ?>
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sections">
                    <h2 class="heading"><?php single_cat_title();  ?></h2>
                    <div class="clearfix"></div>
                    <div class="row">
                        <?php
                        $key = "";
                        $value = "";
                        $id = "";
                        if (isset($_REQUEST['Country'])) {
                            $value = $_REQUEST['Country'];
                            $key = "country";
                            $id = get_page_by_path($value,OBJECT, 'key')->ID;
                        }
                        if (isset($_REQUEST['Actress'])) {
                            $value = $_REQUEST['Actress'];
                            $key = "actress";
                            $id = get_page_by_path($value,OBJECT, 'key')->ID;
                        }
                        if ($value ) :
                            
                

                            $args = array(
                                'meta_key' => $key,
                                'post_type' => 'video',
                                'meta_query' => array(
                                        array(
                                                'key'     => $key,
                                                'value'   => get_page_by_path($value,OBJECT, 'key')->ID ,
                                                'compare' => 'LIKE',
                                        ),
                                ),
                            );
                            $query = new WP_Query($args);
                        ?>


                        <?php if ( $query->have_posts() && $id) : ?>
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <?php $video_duration = (get_field('time_video', $post->ID)) ? get_field('time_video', $post->ID) : '0 : 00'; ?>
                        
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                    <!-- Video Box Start -->
                                    <div <?php post_class('videobox2'); ?>>
                                        <figure> 
                                            <!-- Video Thumbnail Start --> 
                                            
                                            
                                            <!--image size-->
                                                    <!--326 x 183-->
                                                    <!--size medium 652 x 366-->
                                                   <?php $image = (wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0] : get_template_directory_uri() . '/images/images/img21.jpg'; ?>
                                                    
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if ($censored = (get_field('censored', $post->ID))) : ?>
                                                <div class="discount-tag"></div>
                                            <?php endif; ?>
                                                <img src="<?php echo get_bfithumb(652, 366, $image); ?>" class="img-responsive hovereffect" alt="<?php the_title(); ?>" />
                                            </a> 
                                            <!-- Video Thumbnail End --> 
                                            <!-- Video Info Start -->
                                            <div class="vidopts">
                                                <ul>
                                                    <!--<li><i class="fa fa-heart"></i>1056</li>-->
                                                    <li><i class="fa fa-clock-o"></i><?php echo $video_duration; ?></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <!-- Video Info End --> 
                                        </figure>
                                        <!-- Video Title Start -->
                                        <h4><a href="<?php the_permalink(); ?>"><?php print catchuoi(get_the_title(), 30); ?></a></h4>
                                        <!-- Video Title End --> 
                                    </div>
                                    <!-- Video Box End --> 
                                </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else: ?>
                        <div class="col-lg-12 col-md-14 col-sm-14 col-xs-16">
                            <p><?php echo __('Sorry! There are no posts.', 'vm_softcircles_domain'); ?></p>
                        </div>
                        <?php endif; endif;?>
                    </div>
                </div>
                <!-- Contents Section End -->
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
</div>
<!-- Contents End -->

<?php get_footer(); ?>

