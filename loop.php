<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="entry post post-<?php echo get_the_ID(); ?> type-post status-publish format-standard has-post-thumbnail hentry">
    <?php $idVideo = get_post_meta( get_the_ID(), 'awe_id_video', true ); ?>

    <?php if( !empty( $idVideo ) ): ?>
        <div class="entry-video">
            <iframe src="https://www.youtube.com/embed/<?php echo $idVideo ?>" width="889" height="500" title="<?php the_title() ?>"></iframe>
        </div>
    <?php else: ?>
        <div class="entry-thumbnail">

            <?php if(has_post_thumbnail()): ?>
                <a href="<?php the_permalink() ?>">
                    <div class="image " style="background-image: url(<?php the_post_thumbnail_url() ?>); height: 620px;" data-width="827" data-height="620"></div>
                </a>
            <?php endif;?>

        </div>
    <?php endif ?>

    <div class="entry-data">
        <div class="entry-header">
            <div class="entry-extra">
                <span class="date">
                    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark">
                        <time class="entry-date"><?php the_time('F j, Y'); ?></time>
                    </a>
                </span>
                <span class="comments">
                    <a href="<?php the_permalink() ?>#comments">
                        <span class="count"><?php echo get_comments_number(get_the_ID()); ?></span>
                        <span class="label"><?php _e('comments', 'bookawesome') ?></span>
                    </a>
                </span>
            </div>
            <h2 class="entry-title">
                <a href="<?php the_permalink()?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>

            <div class="entry-meta">
                <span class="author vcard">
                    <span class="label"><?php _e('Posted by:', 'bookawesome') ?></span>
                    <a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="View all posts by admin" rel="author"><b><?php the_author()?></b></a>
                </span>
                <span class="categories-links">
                    <span class="label"> <?php _e('In', 'bookawesome') ?></span>
                    <?php $idCategories = wp_get_post_categories( get_the_ID() ); ?>
                    <?php
                        $numberItems = count($idCategories);
                        $i = 0;
                        foreach ( $idCategories as $id ):
                            $cat = get_category($id); ?>
                        <?php if(++$i !== $numberItems): ?>
                            <a class="<?php echo strtolower($cat->name) .'-'. date("Y") ?>" href="<?php echo get_category_link($cat->term_id) ?>" rel="category tag"><?php echo $cat->name .' '. date("Y")?></a>
                            <span class="delimiter">,</span>
                        <?php else: ?>
                            <a class="<?php echo strtolower($cat->name) .'-'. date("Y") ?>" href="<?php echo get_category_link($cat->term_id) ?>" rel="category tag"><?php echo $cat->name .' '. date("Y")?></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </span>
            </div>
        </div>
        <div class="entry-content">
            <p>
                <?php the_excerpt() ; ?>
                <a href="<?php the_permalink() ?>" class="more-link"><?php _e('Read more', 'bookawesome')?></a>
            </p>
        </div>
    </div>
</div>
<?php endwhile; endif; ?>

