<?php get_header();?>

    <div id="main" class="site-main">
        <div class="container active-sidebar right ">

            <div id="primary" class="content-area">
                <div id="content" class="site-content" role="main">

                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                        <div class="entry single-post post-<?php echo get_the_ID() ?> post type-post status-publish format-standard has-post-thumbnail hentry">

                            <?php $idVideo = get_post_meta( get_the_ID(), 'awe_id_video', true ); ?>
                            <?php if ( !empty( $idVideo ) ): ?>
                                <div class="entry-video">
                                    <iframe src="https://www.youtube.com/embed/<?php echo $idVideo ?>" width="889" height="500" title="<?php the_title() ?>"></iframe>
                                </div>
                            <?php else: ?>
                                <div class="entry-thumbnail">

                                    <?php if(has_post_thumbnail()): ?>
                                        <a href="<?php the_permalink() ?>">
                                            <div class="image " style="background-image: url(<?php the_post_thumbnail_url() ?>); height: 548px;" data-width="827" data-height="548"></div>
                                        </a>
                                    <?php endif;?>

                                </div>
                            <?php endif; ?>

                            <div class="entry-data">
                                <div class="entry-header">
                                    <div class="entry-extra">
                                        <span class="date">
                                            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark">
                                                <time class="entry-date"><?php the_time('F j, Y'); ?></time>
                                            </a>
                                        </span>
                                        <span class="comments">
                                            <a href="#comments">
                                                <span class="count"><?php echo get_comments_number(get_the_ID()); ?></span>
                                                <span class="label"><?php _e('comments', 'bookawesome') ?></span>
                                            </a>
                                        </span>
                                    </div>
                                    <h2 class="entry-title"><?php the_title(); ?></h2>
                                    <div class="entry-meta">
                                        <span class="author vcard">
                                            <span class="label"><?php _e('Posted by:', 'bookawesome') ?></span>
                                            <a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="View all posts by admin" rel="author">
                                                <b><?php the_author()?></b>
                                            </a>
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
                                    <?php the_content() ?>
                                </div>
                                <?php
                                    $tags = get_the_tags(get_the_ID());
                                    $i = 0;
                                    $countTag = count($tags);
                                ?>
                                <?php if ( !empty( $tags ) ): ?>
                                    <div class="entry-footer">
                                        <span class="tags-links">
                                            <span class="label"><b><?php _e('Tags', 'bookawesome') ?></b></span>

                                            <?php foreach ($tags as $tag): ?>
                                                <?php if(++$i !== $countTag): ?>
                                                    <a href="<?php echo get_tag_link( $tag->term_id ) ?>" rel="tag"><?php echo $tag->name ?></a>
                                                    <span class="delimiter">,</span>
                                                <?php else: ?>
                                                    <a href="<?php echo get_tag_link( $tag->term_id ) ?>" rel="tag"><?php echo $tag->name ?></a>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>


                    <?php endif; ?>

                    <?php if (comments_open() && !post_password_required()) {comments_template('', true);}?>

                </div>

            </div>


            <!--sidebar-->
            <div id="tertiary" class="sidebar-container" role="complementary">
                <div class="sidebar-inner">
                    <div class="widget-area clearfix">
                        <?php dynamic_sidebar('blog-sidebar-area'); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>


<?php get_footer();?>