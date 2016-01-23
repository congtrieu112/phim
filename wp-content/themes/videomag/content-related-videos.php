<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
global $category_array;

$args = array(
    'post_type' => 'video',
    'video_categories' => implode(',', $category_array),
    'post__not_in' => array($post->ID),
    'posts_per_page' => 6,
);
$vm_query = new WP_Query($args);
$character = vm_get_option('opt-limit-related-video');
$limt_character = end(explode("|", $character));

?>

<?php if ($vm_query->have_posts()): ?>
    <!-- Contents Section Started -->
    <div class="sections">
        <h2 class="heading"><?php echo __('Related Videos', 'vm_softcircles_domain'); ?></h2>
        <div class="clearfix"></div>
        <div class="row">
            <?php while ($vm_query->have_posts()): $vm_query->the_post(); ?>

                                <?php $video_duration = (get_field('time_video', $post->ID)) ? get_field('time_video', $post->ID) : '0 : 00'; ?>

                <div <?php post_class('col-lg-4 col-md-6 col-sm-6 col-xs-12'); ?>> 
                    <!-- Video Box Start -->
                    <div class="videobox2">
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                            <!--image size-->
                            <!--210 x 118-->
                            <!--size medium 420 x 236-->
                            <?php $image = (wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0] : get_template_directory_uri() . '/images/images/img21.jpg'; ?>
                            <a href="<?php echo get_the_permalink() ?>">
                                <?php if ($censored = (get_field('censored', $post->ID))) : ?>
                                    <div class="discount-tag"></div>
                                <?php endif; ?>
                                <img alt="<?php echo get_the_title(); ?>" class="img-responsive hovereffect" src="<?php echo get_bfithumb(420, 236, $image); ?>" />
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
                        <h4><a href="<?php echo get_the_permalink() ?>"><?php echo catchuoi (get_the_title(),$limt_character); ?></a></h4>
                        <!-- Video Title End --> 
                    </div>
                    <!-- Video Box End --> 
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!-- Contents Section End -->
<?php endif; ?>