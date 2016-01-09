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
          <li><a href="index.html">Home</a></li>
          <li class="active">Videos - List</li>
        </ol>
      </div>
      <!-- Bread Crumb End -->

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-6">
          <h1 class="heading">Sliders</h1>
          <?php $block_home_1 = implode(',', get_hom_top(870)); ?>
          <?php echo do_shortcode('[su_slider source="video: ' . $block_home_1 . '" link="post"]'); ?>              


        </div>
        <div class="col-md-6">
          <!-- Contents Section Started -->
          <div class="sections">
            <h2 class="heading">Funny</h2>
            <div class="clearfix"></div>
            <div class="row">

              <?php
              $block_home_2 = get_hom_top(871);
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
                    <h4><a class="title-text" href="<?php print get_permalink($post2->ID); ?>"><?php print catchuoi($post2->post_title, 15); ?></a></h4>
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
          $args = array(
            'type' => 'video',
            'child_of' => 0,
            'parent' => '',
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => 1,
            'hierarchical' => 1,
            'exclude' => '',
            'include' => '',
            'number' => '',
            'taxonomy' => 'video_categories',
            'pad_counts' => false
          );

//    print '<pre>'; print_r(get_categories($args)); print '</pre>';
          $cats = get_categories($args);
          for ($cat = 0; $cat < count($cats); $cat++):
            ?>
            <?php if ($cat == 0) : ?>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">All video</a></li>

  <?php endif; ?>

              <li role="presentation"><a href="#<?php print $cats[$cat]->slug; ?>" aria-controls="<?php print $cats[$cat]->slug; ?>" role="tab" data-toggle="tab" ><?php print $cats[$cat]->name; ?></a></li>
              <?php if ($cat == count($cats) - 1) : ?>
              </ul>
              <?php endif; ?>
            <?php endfor; ?>
          <?php for ($cat = 0; $cat < count($cats); $cat++): ?>
            <?php if ($cat == 0) : ?>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                  <div class="">
    <?php
    $arr = array(
      'post_type' => 'video',
              'posts_per_page'=>-1,
        'numberposts'=>-1
    );
    $query = new WP_Query($arr);
    if ($query->have_posts()):
      while ($query->have_posts()): $query->the_post();

        $image = (wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0] : get_template_directory_uri() . '/images/images/img21.jpg';
        $time = (get_field('time_video', $post->ID)) ? get_field('time_video', $post->ID) : '0 : 00';
        ?>

                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                          <!-- Video Box Start -->
                          <div class="videobox2">
                            <figure>
                              <!-- Video Thumbnail Start --> 
                              <a href="<?php print get_permalink($post->ID); ?>">
                                <img src="<?php print $image; ?>" alt="<?php print the_title(); ?>" class="img-responsive hovereffect">
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
                            <h4><a href="<?php print get_permalink($post->ID); ?>"><?php print catchuoi($post->post_title, 15); ?></a></h4>
                            <!-- Video Title -->
                          </div>
                          <!-- Video Box End -->
                        </div>

        <?php
      endwhile;
    endif;
    ?>



                  </div>

                </div>
  <?php endif; ?>
              <div role="tabpanel" class="tab-pane " id="<?php print $cats[$cat]->slug; ?>">
                <div class="">
  <?php
  $array = array(
    'post_type' => 'video',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
//                    'post__not_in'=>$idtop,
    'tax_query' => array(
      array(
        'taxonomy' => 'video_categories',
        'field' => 'id',
        'terms' => $cats[$cat]->term_id
      ),
      
    ),
            'posts_per_page'=>-1,
        'numberposts'=>-1
  );
  $query = new WP_Query($array);
  if ($query->have_posts()):
    while ($query->have_posts()): $query->the_post();
      $image = (wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0] : get_template_directory_uri() . '/images/images/img21.jpg';
      $time = (get_field('time_video', $post->ID)) ? get_field('time_video', $post->ID) : '0 : 00';
      ?>

                      <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <!-- Video Box Start -->
                        <div class="videobox2">
                          <figure>
                            <!-- Video Thumbnail Start --> 
                            <a href="<?php print get_permalink($post->ID); ?>">
                              <img src="<?php print $image; ?>" alt="<?php print the_title(); ?>" class="img-responsive hovereffect">
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
                          <h4><a href="<?php print get_permalink($post->ID); ?>"><?php print catchuoi($post->post_title, 15); ?></a></h4>
                          <!-- Video Title -->
                        </div>
                        <!-- Video Box End -->
                      </div>
      <?php
    endwhile;
  endif;
  ?>


                </div>

              </div>


                  <?php if ($cat == count($cats) - 1) : ?> 
              </div>
  <?php endif; ?>
<?php endfor; ?>
        </div>



      </div>
      
     <?php
     $link_adv_2 = (!empty(get_field('adv',885)) &&  get_field('adv',885) ) ? get_field('adv',885) : "";
     $img_adv_2 = (!empty(wp_get_attachment_image_src(get_post_thumbnail_id(885), 'full')[0]) && wp_get_attachment_image_src(get_post_thumbnail_id(885), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id(885), 'full')[0] : get_template_directory_uri() . '/images/images/adv.gif'; 
      echo ($link_adv_2) ?  do_shortcode('[su_frame link='.$link_adv_2.']<img src="'.$img_adv_2.'" alt="" class="img-responsive" />[/su_frame]') : "";
     ?>
      <div class="sections">
        <h2 class="heading">Funny</h2>
        <div class="clearfix"></div>
        <div class="row">
          <?php
          $block_home_adv = get_hom_top(874);
          if($block_home_adv) : 
          for ($block_adv = 0; $block_adv < count($block_home_adv); $block_adv++) :
                $post_adv = get_post($block_home_adv["$block_adv"]);
                $image = (wp_get_attachment_image_src(get_post_thumbnail_id($post_adv->ID), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id($post_adv->ID), 'full')[0] : get_template_directory_uri() . '/images/images/img21.jpg';
                $time = (get_field('time_video', $post_adv->ID)) ? get_field('time_video', $post_adv->ID) : '0 : 00';
                $link_adv = get_field('adv',$post_adv->ID);
                ?>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <!-- Video Box Start -->
            <div class="videobox2">
                    <figure>
                      <!-- Video Thumbnail Start --> 
                      <a href="<?php print $link_adv; ?>">
                        <img src="<?php print get_bfithumb(640, 360, $image) ?>" alt="<?php print $post_adv->post_title ?>" class="img-responsive hovereffect">
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
                    <h4><a class="title-text" href="<?php print $link_adv; ?>"><?php print catchuoi($post_adv->post_title, 15); ?></a></h4>
                    <!-- Video Title -->
                  </div>
            <!-- Video Box End -->
          </div>
          <?php 
          endfor;
          endif;
          ?>

         

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contents End -->
<?php get_footer(); ?>