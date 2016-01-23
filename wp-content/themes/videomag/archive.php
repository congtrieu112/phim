
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
            <?php
            /* $content_layout = vm_get_post_meta('_vm_contentlayout_option');

              if ($content_layout == '1c') {
              $content_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
              } else if ($content_layout == '3cl' || $content_layout == '3cr' ||
              $content_layout == '3cm') {
              $content_class = 'col-lg-6 col-md-12 col-sm-12 col-xs-12 equalcol conentsection';
              } else if ($content_layout == '2cl' || $content_layout == '2cr') {
              $content_class = 'col-lg-9 col-md-12 col-sm-12 col-xs-12 equalcol conentsection';
              } else {
              $content_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
              } */
            $content_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
            ?>

            <?php /* if ($content_layout == '2cl' || $content_layout == '3cm'): ?>
              <?php get_sidebar('content-one'); ?>
              <?php endif; ?>

              <?php if ($content_layout == '3cl'): ?>
              <?php get_sidebar('content-one'); ?>
              <?php get_sidebar('content-two'); ?>
              <?php endif; */ ?>

            <div class="<?php echo $content_class; ?>">
                <div class="sections">
                    <h2 class="heading"><?php echo __('Tag : ', THEME_TEXT_DOMAIN). get_query_var('tag'); ?> </h2>
                    <div class="clearfix"></div>
                    <div class="row">
                        <?php
                        global $wpdb;
                        $results = $wpdb->get_results( "SELECT DISTINCT $wpdb->term_relationships.object_id  FROM $wpdb->terms,$wpdb->term_relationships WHERE $wpdb->terms.term_id = $wpdb->term_relationships.term_taxonomy_id AND $wpdb->terms.name = '".get_query_var('tag')."' ", ARRAY_A );
                        
                        $array = ($results) ? array_values($results) : "";
                        $array = ($array) ? array_values($array) : "";
                        if($array) :
                        for($i=0;$i<count($array);$i++){
                            $arrays[] = $array[$i]['object_id'];
                        }
                        $character = vm_get_option('opt-limit-tag');
                        $paging = current(explode("|", $character));
                        $limt_character = end(explode("|", $character));
                        $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                        $args = array(
                                'post_type' => 'video',
                                'paged' => $paged,
                                'post__in' => $arrays,
                                'posts_per_page' => $paging,

                            );
                            $query = new WP_Query($args);
                            $total = $query->max_num_pages;
                            

                        ?>
                        <?php if ( $query->have_posts() ) : ?>
                            <?php while ($query->have_posts()) : $query->the_post(); ?>

                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6"> 
                                    <div <?php post_class('blogposttwo'); ?>>
                                        <figure> 
                                            <!-- Video Thumbnail Start --> 
                                            <a href="<?php echo get_the_permalink() ?>">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?> 
                                                <img src="<?php echo get_bfithumb(652, 366, $thumbnail[0]) ; ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive hovereffect" />
                                                <?php endif; ?>
                                            </a> 
                                        </figure>
                                        <div class="text">
                                            <h4><a href="<?php the_permalink() ?>"><?php print catchuoi(get_the_title(), $limt_character); ?></a></h4>
                                            <ul>
                                                <li><i class="fa fa-calendar"></i><?php the_time('d-m-Y'); ?></li>
                                                <li>
                                                    <i class="fa fa-align-justify"></i>
                                                    <?php the_category(', '); ?>
                                                </li>
                                            </ul>
                                            <a href="<?php the_permalink() ?>" class="btn btn-primary btn-xs backcolor"><?php echo __('Read More', THEME_TEXT_DOMAIN); ?></a>
                                        </div>
                                    </div>
                                    <!-- Video Box End --> 
                                    <div class="clearfix"></div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif;
                        else: ?>
                            <div class="col-lg-12 col-md-14 col-sm-14 col-xs-16">
                              <p><?php echo __('Sorry! There are no posts.', THEME_TEXT_DOMAIN); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Contents Section End -->
                <div class="clearfix"></div>
                <ul class="pagination">
                    
                    <?php

                       $next = $paged+1;
                        $pre =$paged-1;
                        $link = get_home_url() .'/tag/'.  get_query_var('tag');
                        if($total>1){

                       if($paged>1){
                            echo '<li><a href=" '.  $link .'/?page='.$pre.'"><i class="fa fa-angle-left"></i></a></li>';
                        }
                         
                       for($i = 1;$i<=$total;$i++){
                           if($i==$paged){
                                echo '<li class="active" ><a  href="javascript:void()">'.$i.'</a></li>' ;
                            }else{
                                echo '<li><a  href=" '.$link.'/?page='.$i.'">'.$i.'</a></li>';
                            }
                        }
                        if($paged<$total){
                            echo '<li><a href="'.$link.'/?page='.$next.'"><i class="fa fa-angle-right"></i></a></li>';
                        }
                    }
                    ?>

                </ul>

            </div>

            <?php /* if ($content_layout == '2cr' || $content_layout == '3cm'): ?>
              <?php get_sidebar('content-two'); ?>
              <?php endif; ?>

              <?php if ($content_layout == '3cr'): ?>

              <?php get_sidebar('content-one'); ?>
              <?php get_sidebar('content-two'); ?>
              <?php endif; */ ?>

        </div>
    </div>
</div>
<!-- Contents End -->

<?php get_footer(); ?>