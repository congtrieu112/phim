<?php
/**
 * The template for displaying comments.
 */
if (post_password_required())
    return;
?>

<div class="sections">

    <?php if (have_comments()) : ?>
        <h2 class="heading">
            <?php comments_number('Comments (0)', 'Comments (1)', 'Comments (%)'); ?>
        </h2>
        <div class="clearfix"></div>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through  ?>
            <nav id="comment-nav-above" class="comment-navigation" role="navigation">
                <!--<h1 class="screen-reader-text">--><?php //_e('Comment navigation', 'pixelobject'); ?><!--</h1>-->
                <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'pixelobject')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'pixelobject')); ?></div>
            </nav><!-- #comment-nav-above -->
        <?php endif; // check for comment navigation  ?>

        <ul id="comments">
            <?php
            /* Loop through and list the comments.
             */
            wp_list_comments(array('callback' => 'vm_comment'));
            ?>
        </ul><!-- .comment-list -->

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through  ?>
            <nav id="comment-nav-below" class="comment-navigation" role="navigation">
                <!--<h1 class="screen-reader-text">--><?php //_e('Comment navigation', 'pixelobject'); ?><!--</h1>-->
                <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'pixelobject')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'pixelobject')); ?></div>
            </nav><!-- #comment-nav-below -->
        <?php endif; // check for comment navigation  ?>

    <?php endif; // have_comments()  ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && '0' != get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
        ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'vm_softcircles_domain'); ?></p>
    <?php endif; ?>
</div><!-- #comments -->
<!-- Contents Section End -->
<div class="clearfix"></div>
<!-- Contents Section Started -->
<?php if ('open' == $post->comment_status) : ?>

    <div id="sections">
        <h2 class="heading"><?php echo __('Leave Reply', 'vm_softcircles_domain'); ?></h2>
        <div class="clearfix"></div>
        <div id="leavereply">
            <?php
            $commenter = wp_get_current_commenter();
            $req = get_option('require_name_email');
            $aria_req = ( $req ? " aria-required='true'" : '' );

            $comments_args = array(
                'id_submit' => 'blog-form',
                // change the title of send button 
                'label_submit' => 'Submit',
                // change the title of the reply section
                'title_reply' => ' ',
                'comment_notes_before' => '',
                // remove "Text or HTML to be displayed after the set of comment fields"
                'comment_notes_after' => '',
                // redefine your own textarea (the comment body)
                'comment_field' => '<div class="fullsec">' .
                '<div class="form-group">' .
                '<label>Your Comments</label>' .
                '<textarea class="form-control" name="comment" rows="3" placeholder="Your Comments"></textarea>' .
                '</div>' .
                '</div>',
                'fields' => apply_filters('comment_form_default_fields', array(
                    'author' =>
                    '<div class="fullsec">' .
                    '<div class="form-group">' .
                    '<label>Your Name</label>' .
                    '<input type="text" name="author" class="form-control" value="' . esc_attr($commenter['comment_author']) . '" placeholder="'
                    . __('Your name', 'vm_softcircles_domain') . ' "' . $aria_req . '>' .
                    '</div></div>',
                    'email' =>
                    '<div class="halfsec pull-left">' .
                    '<div class="form-group">' .
                    '<label>Email Address</label>' .
                    '<input id="email" name="email" class="form-control" type="email" placeholder="' . __('Email Address', 'vm_softcircles_domain') . '" value="' . esc_attr($commenter['comment_author_email']) .
                    '"' . $aria_req . ' /></div></div>',
                    'url' =>
                    '<div class="halfsec">' .
                    '<div class="form-group">' .
                    '<label>Website</label>' .
                    '<input id="url" name="url" type="url" class="form-control" placeholder="' .
                    __('Website', 'vm_softcircles_domain') . '" value="' . esc_attr($commenter['comment_author_url']) .
                    '" /></div></div>'
                        )
                ),
            );

            comment_form($comments_args);
            ?>
        </div>
    </div>
<?php endif; // if you delete this the sky will fall on your head ?>


