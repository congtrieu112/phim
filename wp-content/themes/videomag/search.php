
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

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sections">
                    <div class="clearfix"></div>
                    <div class="row">
                        <?php
                        global $wpdb;

                        // First, escape the link for use in a LIKE statement.
                        $link = $wpdb->esc_like( get_query_var('s') );

                        // Add wildcards, since we are searching within comment text.
                        $link = '%' . $link . '%';

                        // Create a SQL statement with placeholders for the string input.
                        $sql = 	"
                                SELECT *
                                FROM $wpdb->posts 
                                WHERE (post_title LIKE %s ) AND (post_type = 'video')";

                        // Prepare the SQL statement so the string input gets escaped for security.
                        $sql = $wpdb->prepare( $sql, $link, $link );
                        
                        $query = $wpdb->get_results( $sql ) ;
                        ?>
                        <?php if ($query) : ?>
                       <?php while (list ($key, $val) = each ($query) ) :
                           $post = get_post($val->ID);

                           ?>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6"> 
                                    <div <?php post_class('blogposttwo'); ?>>
                                        <figure> 
                                            <!-- Video Thumbnail Start --> 
                                            <a href="<?php echo get_the_permalink() ?>">
                                             <?php if ($censored = (get_field('censored', $post->ID))) : ?>
                                                <div class="discount-tag"></div>
                                            <?php endif; ?>
                                                    <!--image size-->
                                                    <!--326 x 183-->
                                                    <!--size medium 652 x 366-->
                                                   <?php $image = (wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0] : get_template_directory_uri() . '/images/images/img21.jpg'; ?>
                                                    <img src="<?php echo get_bfithumb(652, 366, $image); ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive hovereffect" />
                                            
                                            </a> 
                                        </figure>
                                        <div class="text">
                                            <h4><a href="<?php the_permalink() ?>"><?php $title = catchuoi( get_the_title() , 40);  print str_ireplace(get_query_var('s'), '<font color="red">'.get_query_var('s').'</font>',$title) ;?></a></h4>
                                            <ul>
                                                <li><i class="fa fa-calendar"></i><?php the_time('d-m-Y'); ?></li>
                                                <li>
                                                    <i class="fa fa-align-justify"></i>
                                                    <?php the_category(', '); ?>
                                                </li>
                                            </ul>
                                            <a href="<?php the_permalink() ?>" class="btn btn-primary btn-xs backcolor"><?php echo __('Read More', 'vm_softcircles_domain'); ?></a>
                                        </div>
                                    </div>
                                    <!-- Video Box End --> 
                                    <div class="clearfix"></div>
                                </div>  
                        <?php endwhile; wp_reset_postdata(); ?>
                                
                        <?php else: ?>
                            <div class="col-lg-12 col-md-14 col-sm-14 col-xs-16">
                                <p><?php echo __('Sorry! There are no posts.', THEME_TEXT_DOMAIN); ?></p>
                            </div>
                        <?php endif; ?>
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