<?php if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) return; ?>
<div id="comments" class="comments-area">
    <?php if ( have_comments() ) :
        global $comments_by_type;
        $comments_by_type = &separate_comments( $comments );

        if ( ! empty( $comments_by_type['comment'] ) ) : ?>
            <h3 class="comments-title"><?php comments_number(); ?></h3>
            <?php if ( get_comment_pages_count() > 1 ) : ?>
                <nav id="comments-nav-above" class="comments-navigation" role="navigation">
                    <div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
                </nav>
            <?php endif; ?>
            <ol class="comment-list">
                <?php
                    wp_list_comments([
                        'type'              => 'comment',
                        'callback'          => 'format_comment',
                    ]);
                ?>
            </ol>
            <?php if ( get_comment_pages_count() > 1 ) : ?>
                <nav id="comments-nav-below" class="comments-navigation" role="navigation">
                    <div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
                </nav>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif;
        $comments_args = array(
            // Change the title of send button
            'label_submit' => __('Submit', 'bookawesome'),
            'class_submit' => __('submit', 'bookawesome'),
            'logged_in_as' => '',
            'class_form'           => 'comment-form',
            // Change the title of the reply section
            'title_reply' => __('Leave a Reply', 'bookawesome'),
            'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
            'title_reply_after' => '</h3>',
            'fields' => apply_filters('comment_form_default_fields', array(
                'cookies' => ''
            )),
            'submit_field'         => '<div class="form-submit">%1$s %2$s</div>',
            'comment_field' => '
                <div class="comment-fields">
                    <div class="author-email">
                        <input id="author" name="author" type="text" size="30" placeholder="name">
                        <input id="email" name="email" type="text" size="30" placeholder="email">
                    </div>
                </div>
                
                <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="comment"></textarea>',
            );
        ?>
        <?php comment_form($comments_args);?>
</div>

<?php

    function format_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        ?>

    <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
            <div class="comment-author">
                <img alt="" src="<?php echo esc_url( get_avatar_url( $comment->user_id, ['size' => '60'] ) ); ?>" srcset="<?php echo esc_url( get_avatar_url( $comment->user_id, ['size' => '60'] ) ); ?>" class="avatar avatar-60 photo" height="60" width="60">
            </div>
            <div class="comment-data">
                <cite class="fn"><?php echo $comment->comment_author ?></cite><br>
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php _e('Your comment is awaiting moderation.') ?></em><br />
                <?php endif; ?>
                <div class="comment-meta commentmetadata">
                    <a href="<?php echo htmlspecialchars ( get_comment_link( $comment->comment_ID ) ) ?>">
                        <?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?>
                    </a>
                </div>
                <p><?php comment_text(); ?></p>

                <div class="reply">
                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
            </div>
        </div>


    <?php } ?>