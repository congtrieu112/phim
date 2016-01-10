
<?php get_header(); ?>

<!-- Video Player Section Start -->
<div class="videoplayersec">
  <div class="vidcontainer">
    <div class="row">
      <!-- Video Player Start -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 playershadow">
        <div class="playeriframe"> 
          <?php if (!get_field('link_video', $post->ID)) { ?>
            <?php echo vm_get_video_player(vm_get_post_meta('_vm_videofield_option')); ?>
          <?php }
          else {
            ?>
            <div id="show-video"></div>
            <?php
            $paged = get_query_var('page', 1);
            $episode = 0;
            if ($paged) {
              $episode = $paged - 1;
            }

            $link_drive = get_field('link_video', $post->ID);
            $link_drive = explode("\r\n", $link_drive);


            if (count($link_drive) > 0) {
              $link_drives = strip_tags($link_drive[$episode]);
            }
            $file = drive_direct($link_drives);
            $soure = 'sources: [';
            $image .= ', image: "';
            $image .=  (wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]) ? wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0].'"' : get_template_directory_uri() . '/images/images/img21.jpg"';
            $endsoure = ']';
            $code = "<script type='text/javascript'>";
            $code .= "jwplayer('show-video').setup({";
            $code .= $soure . $file  . $endsoure.$image;
            $code .= " })";
            $code .= "</script>";
            print $code;
            ?>
          <?php } ?>
        </div>

      </div>
      <?php
      if (count($link_drive) > 2) {
        $i = 0;
        $link = get_permalink($post->ID);
        print '<div class="widget tag_cloud-1 widget_tag_cloud">';
        print '<div class="tagcloud">';

        foreach ($link_drive as $item) {
          $i++;
          if ($i == $paged) {
            print ' <a href="javascript:void(0)" class="tag-link-6 active" title="5 topics" style="font-size: 17.6pt;">Episode ' . $i . '</a>';
          }
          elseif ($paged == 0 && $i == 1) {
            print ' <a href="javascript:void(0)" class="tag-link-6 active" title="5 topics" style="font-size: 17.6pt;">Episode ' . $i . '</a>';
          }
          else {
            print ' <a href="' . $link . $i . '" class="tag-link-6" title="5 topics" style="font-size: 17.6pt;">Episode ' . $i . '</a>';
          }
        }
        print '</div>';
        print '</div>';
      }
      ?>


      <!-- Video Player End --> 
      <!-- Video Stats and Sharing Start -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 videoinfo">
        <div class="row"> 
          <!-- Uploader Start -->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 uploader">
            <figure> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_avatar(get_the_author_meta('ID'), 66, '', get_the_author_meta('user_nicename')); ?></a> </figure>
            <div class="aboutuploader">
              <h5>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                  <?php echo __('By ', THEME_TEXT_DOMAIN); ?>
                  <?php echo get_the_author_meta('user_nicename'); ?>
                </a>
              </h5>
              <time datetime="<?php echo the_time('d M Y'); ?>"><?php echo __('Uploaded : ', THEME_TEXT_DOMAIN); ?><?php echo the_time('d M Y'); ?></time>
              <br />
              <a class="btn btn-primary btn-xs backcolor" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Watch All Videos</a> </div>
          </div>
          <!-- Uploader End --> 
          <!-- Video Stats Start -->
          <?php /* <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats">
            <hr class="visible-xs" />
            <ul>
            <li class="likes">
            <h5>Likes</h5>
            <h2>250</h2>
            </li>
            <li class="views">
            <h5>Views</h5>
            <h2>70K</h2>
            </li>
            </ul>
            </div> */ ?>
          <!-- Video Stats End --> 
          <!-- Video Share Start -->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 videoshare">
            <ul>
              <li>
                <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-type="button_count"></div>
              </li>
              <li>
                <a href="https://twitter.com/share/?url=<?php the_permalink(); ?>" class="twitter-share-button" data-via="bilalmallik">Tweet</a>
              </li>
              <li>
                <div class="g-plus" data-action="share" data-href="<?php the_permalink(); ?>" data-annotation="bubble"></div>
              </li>
            </ul>
          </div>
          <!-- Video Share End --> 
        </div>
      </div>
      <!-- Video Stats and Sharing End --> 
      <!-- Like This Video Start -->
      <?php /* <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 likeit">
        <hr />
        <a class="btn btn-primary backcolor" href="#">Like This Video</a>
        </div> */ ?>
      <!-- Like This Video Enb --> 
    </div>
  </div>
</div>
<!-- Video Player Section End -->
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
      $content_layout = vm_get_post_meta('_vm_contentlayout_option');

      if ($content_layout == '1c') {
        $content_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
      }
      else if ($content_layout == '3cl' || $content_layout == '3cr' ||
          $content_layout == '3cm') {
        $content_class = 'col-lg-6 col-md-12 col-sm-12 col-xs-12 equalcol conentsection';
      }
      else if ($content_layout == '2cl' || $content_layout == '2cr') {
        $content_class = 'col-lg-9 col-md-12 col-sm-12 col-xs-12 equalcol conentsection';
      }
      else {
        $content_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
      }
      ?>

      <?php if ($content_layout == '2cl' || $content_layout == '3cm'): ?>
        <?php get_sidebar('content-one'); ?>
      <?php endif; ?>

      <?php if ($content_layout == '3cl'): ?>
        <?php get_sidebar('content-one'); ?>
        <?php get_sidebar('content-two'); ?>
      <?php endif; ?>

      <div class="<?php echo $content_class; ?>">

        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php //echo '<pre>'; print_r(the_taxonomies()); die(); ?>

            <?php $categories = get_the_terms(get_the_ID(), 'video_categories'); ?>
            <?php $category_links = array(); ?>
            <?php $category_array = array(); ?>

            <?php if (!empty($categories)) : ?>
              <?php foreach ($categories as $category): ?>
                <?php $category_links[] = '<a href="' . get_term_link($category->term_id, $category->taxonomy) . '" title="' . esc_attr(sprintf(__("View all posts in %s", THEME_TEXT_DOMAIN), $category->name)) . '">' . $category->name . '</a>'; ?>
                <?php $category_array[] = $category->slug; ?>
              <?php endforeach; ?>
            <?php endif; ?>

            <!-- Video Detail Started -->
            <div <?php post_class('blogdetail videodetail sections'); ?>>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="blogtext">
                    <h2 class="heading"><?php echo get_the_title(); ?></h2>
                    <div class="clearfix"></div>
                    <div class="blogmetas">

                      <ul>
                        <li>
                          <i class="fa fa-align-justify"></i>
                          <?php vm_get_video_categories(get_the_ID()); ?>
                        </li>
                        <li>
                          <i class="fa fa-globe"></i>
                          <?php vm_get_video_categories(get_the_ID()); ?>
                        </li>
                        <li>
                          <i class="fa fa-play-circle"></i>
                          <?php vm_get_video_categories(get_the_ID()); ?>
                        </li>
                        <li>
                          <i class="fa fa-user"></i>
                          <?php vm_get_video_categories(get_the_ID()); ?>
                        </li>
                        
                        <li>
                          <i class="fa fa-video-camera"></i>
                          <?php vm_get_video_categories(get_the_ID()); ?>
                        </li>
                        
                        
                        

                        <li>
                          <i class="fa fa-tags"></i>
                          <?php the_tags(', '); ?>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Video Detail End -->
          <?php endwhile; ?>
        <?php else: ?>
          <div class="col-lg-12 col-md-14 col-sm-14 col-xs-16">
            <p><?php echo __('Sorry! There are no posts.', THEME_TEXT_DOMAIN); ?></p>
          </div>
        <?php endif; ?>


        <!-- Contents Section End -->

        <div class="clearfix"></div>
        <?php
        $link_rapidgator = get_field('rapidgator_dowload', $post->ID);
        $link_datafile = get_field('datafile_dowload', $post->ID);
        $link_uploaded = get_field('field_56912de4f0a32', $post->ID);

        $button_rapidgator = '<a target="_blank" href="' . $link_rapidgator . '" class="su-button su-button-style-3d" style="color:#FFFFFF;background-color:#D10909;border-color:#a70707;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px" ><span style="color:#FFFFFF;padding:6px 18px;font-size:14px;line-height:21px;border-color:#df5353;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;text-shadow:none;-moz-text-shadow:none;-webkit-text-shadow:none"><i class="fa fa-check-circle" style="font-size:14px;color:#FFFFFF"></i> Download</span></a>';
        $button_datafile = '<a target="_blank" href="' . $link_datafile . '" class="su-button su-button-style-3d" style="color:#FFFFFF;background-color:#D10909;border-color:#a70707;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px" ><span style="color:#FFFFFF;padding:6px 18px;font-size:14px;line-height:21px;border-color:#df5353;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;text-shadow:none;-moz-text-shadow:none;-webkit-text-shadow:none"><i class="fa fa-check-circle" style="font-size:14px;color:#FFFFFF"></i> Download</span></a>';
        $button_uploaded = '<a target="_blank" href="' . $link_uploaded . '" class="su-button su-button-style-3d" style="color:#FFFFFF;background-color:#D10909;border-color:#a70707;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px" ><span style="color:#FFFFFF;padding:6px 18px;font-size:14px;line-height:21px;border-color:#df5353;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;text-shadow:none;-moz-text-shadow:none;-webkit-text-shadow:none"><i class="fa fa-check-circle" style="font-size:14px;color:#FFFFFF"></i> Download</span></a>';
        $link_drive_dowload = ( $link_drives ) ? drive_direct_dowload($link_drives) :  "";

        $link_360 = '<a target="_blank" href="' . get_home_url() . '/dowload/?id=' . $post->ID . '&&tap=' . $episode . '&&quaty=360" class="su-button su-button-style-3d" style="color:#FFFFFF;background-color:#D10909;border-color:#a70707;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px" ><span style="color:#FFFFFF;padding:6px 18px;font-size:14px;line-height:21px;border-color:#df5353;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;text-shadow:none;-moz-text-shadow:none;-webkit-text-shadow:none"><i class="fa fa-check-circle" style="font-size:14px;color:#FFFFFF"></i> 360</span></a>';
        $link_720 = '<a target="_blank" href="' . get_home_url() . '/dowload/?id=' . $post->ID . '&&tap=' . $episode . '&&quaty=720" class="su-button su-button-style-3d" style="color:#FFFFFF;background-color:#D10909;border-color:#a70707;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px" ><span style="color:#FFFFFF;padding:6px 18px;font-size:14px;line-height:21px;border-color:#df5353;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;text-shadow:none;-moz-text-shadow:none;-webkit-text-shadow:none"><i class="fa fa-check-circle" style="font-size:14px;color:#FFFFFF"></i> 720</span></a>';
        $link_1080 = '<a target="_blank" href="' . get_home_url() . '/dowload/?id=' . $post->ID . '&&tap=' . $episode . '&&quaty=1080" class="su-button su-button-style-3d" style="color:#FFFFFF;background-color:#D10909;border-color:#a70707;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px" ><span style="color:#FFFFFF;padding:6px 18px;font-size:14px;line-height:21px;border-color:#df5353;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;text-shadow:none;-moz-text-shadow:none;-webkit-text-shadow:none"><i class="fa fa-check-circle" style="font-size:14px;color:#FFFFFF"></i> 1080</span></a>';
        ?>
        <?php if ($link_rapidgator || $link_datafile || $link_uploaded || $link_drive_dowload) : ?>
          <div class="session row">

            <h2 class="heading"><?php print __('Dowload Videos', THEME_TEXT_DOMAIN) ?></h2>
            <div class="clearfix"></div>
  <?php if ($link_drive_dowload) : ?>
              <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><?php echo __('Google drive', THEME_TEXT_DOMAIN); ?></strong> :  <?php print $link_360; ?> , <?php print $link_720; ?> , <?php print $link_1080; ?>
              </div>
  <?php endif; ?>  
  <?php if ($link_rapidgator) : ?>
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong> <?php echo __('Rapidgator', THEME_TEXT_DOMAIN); ?></strong> : <?php print $button_rapidgator; ?>
              </div>
  <?php endif; ?>  

  <?php if ($link_datafile) : ?>
              <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><?php echo __('Datafile', THEME_TEXT_DOMAIN); ?></strong> : <?php print $button_datafile; ?>
              </div>
  <?php endif; ?> 
  <?php if ($link_uploaded) : ?>
              <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><?php echo __('Uploaded', THEME_TEXT_DOMAIN); ?></strong> : <?php print $button_uploaded; ?>
              </div>
  <?php endif; ?>  





          </div>
<?php endif; ?>
<?php // print do_shortcode('[su_box title="Box" style="noise" box_color="#D10909"]Nec urna. Elit quis vel aliquet! Nunc, pellentesque pulvinar, tempor tincidunt magnis! Augue augue ut, lacus ut montes et mus? Nec placerat mattis lacus, pulvinar. Augue rhoncus arcu ultricies dis, hac nascetur rhoncus pid massa. Aenean?[/su_box]');  ?>

        <?php get_template_part('content', 'related-videos'); ?>
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        wp_reset_query();
        if (comments_open() || get_comments_number()) {
          comments_template('', true);
        }
        ?>

      </div>

        <?php if ($content_layout == '2cr' || $content_layout == '3cm'): ?>
  <?php get_sidebar('content-two'); ?>
<?php endif; ?>

      <?php if ($content_layout == '3cr'): ?>

        <?php get_sidebar('content-one'); ?>
        <?php get_sidebar('content-two'); ?>
      <?php endif; ?>

    </div>
  </div>
</div>
<!-- Contents End -->

<?php get_footer(); ?>