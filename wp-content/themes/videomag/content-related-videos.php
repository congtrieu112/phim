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
?>

<?php if ($vm_query->have_posts()): ?>
    <!-- Contents Section Started -->
    <div class="sections">
        <h2 class="heading"><?php echo __('Related Videos', 'vm_softcircles_domain'); ?></h2>
        <div class="clearfix"></div>
        <div class="row">
            <?php while ($vm_query->have_posts()): $vm_query->the_post(); ?>

                <?php $video_duration = get_post_meta(get_the_ID(), '_vm_video_duration', true); ?>

                <div <?php post_class('col-lg-4 col-md-6 col-sm-6 col-xs-12'); ?>> 
                    <!-- Video Box Start -->
                    <div class="videobox2">
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                            <a href="<?php echo get_the_permalink() ?>">
                                <img alt="<?php echo get_the_title(); ?>" class="img-responsive hovereffect" src="<?php echo vm_get_video_post_thumbnail(get_the_ID()); ?>" />
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
                        <h4><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h4>
                        <!-- Video Title End --> 
                    </div>
                    <!-- Video Box End --> 
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!-- Contents Section End -->
<?php endif; ?>