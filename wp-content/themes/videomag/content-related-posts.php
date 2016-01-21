<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$args = array(
    'post_type' => 'post',
    //'category__in' => get_the_category(),
    'post__not_in' => array($post->ID),
    'posts_per_page' => 6,
);
$vm_query = new WP_Query($args);
?>

<?php if ($vm_query->have_posts()): ?>
    <!-- Contents Section Started -->
    <div class="sections">
        <h2 class="heading"><?php echo __('Related Posts', 'vm_softcircles_domain'); ?></h2>
        <div class="clearfix"></div>
        <div class="row">

            <?php while ($vm_query->have_posts()): $vm_query->the_post(); ?>


                <div <?php post_class('col-lg-4 col-md-6 col-sm-6 col-xs-12'); ?>> 
                    <!-- Video Box Start -->
                    <div <?php post_class('blogposttwo'); ?>>
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                            <a href="<?php echo get_the_permalink() ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('single-post-thumbnail', array('class' => 'img-responsive hovereffect')); ?>
                                <?php endif; ?>
                            </a> 
                        </figure>
                        <div class="text">
                            <h4><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h4>
                            <ul>
                                <li><i class="fa fa-calendar"></i><?php echo get_the_time('d-m-Y'); ?></li>
                                <li>
                                    <i class="fa fa-align-justify"></i>
                                    <?php the_category(', '); ?>
                                </li>
                            </ul>
                            <a href="<?php echo get_the_permalink() ?>" class="btn btn-primary btn-xs backcolor">Read More</a>
                        </div>
                    </div>
                    <!-- Video Box End --> 
                    <div class="clearfix"></div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!-- Contents Section End -->
<?php endif; ?>