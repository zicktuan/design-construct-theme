<?php get_header();?>
<?php //get_template_part('nav', 'below-single');?>


    <div id="main" class="site-main">
        <div class="container active-sidebar right ">

            <div id="primary" class="content-area">
                <div id="content" class="site-content post " role="main">

                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                        <div class="entry single-post post-<?php echo get_the_ID() ?> post type-post status-publish format-standard has-post-thumbnail hentry">
                            <div class="entry-thumbnail">

                                <?php if(has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink() ?>">
                                        <div class="image " style="background-image: url(<?php the_post_thumbnail_url() ?>); height: 548px;" data-width="827" data-height="548"></div>
                                    </a>
                                <?php endif;?>

                            </div>
                            <div class="entry-data">
                                <div class="entry-header">
                                    <div class="entry-extra">
                                        <span class="date">
                                            <a href="http://azexo.com/madison/restaurant/omnis-iste-natus-sit-accusantiu/" title="Permalink to Omnis iste natus sit accusantiu." rel="bookmark">
                                                <time class="entry-date"><?php the_time('F j, Y'); ?></time>
                                            </a>
                                        </span>
                                        <span class="comments">
                                            <a href="http://azexo.com/madison/restaurant/omnis-iste-natus-sit-accusantiu/#respond">
                                                <span class="count"><?php echo get_comments_number(get_the_ID()); ?></span>
                                                <span class="label"><?php _e('comments', 'bookawesome') ?></span>
                                            </a>
                                        </span>
                                    </div>
                                    <h2 class="entry-title"><?php the_title(); ?></h2>
                                    <div class="entry-meta">
                                        <span class="author vcard">
                                            <span class="label"><?php _e('Posted by:', 'bookawesome') ?></span>
                                            <a class="url fn n" href="http://azexo.com/madison/restaurant/author/admin/" title="View all posts by admin" rel="author"><b><?php the_author()?></b></a>
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
                                            <span class="label"><?php _e('Tags', 'bookawesome') ?></span>

                                            <?php foreach ($tags as $tag): ?>
                                                <?php if(++$i !== $countTag): ?>
                                                    <a href="<?php get_tag_link( $tag->term_id ) ?>" rel="tag"><?php echo $tag->name ?></a>
                                                    <span class="delimiter">,</span>
                                                <?php else: ?>
                                                    <a href="<?php get_tag_link( $tag->term_id ) ?>" rel="tag"><?php echo $tag->name ?></a>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>

                    <?php else: ?>

                        <!-- article -->
                        <article>

                            <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

                        </article>
                        <!-- /article -->

                    <?php endif; ?>

                </div>
                <?php if (comments_open() && !post_password_required()) {comments_template('', true);}?>
            </div>

            <!-- #primary -->

            <!--sidebar-->
            <div id="tertiary" class="sidebar-container" role="complementary">
                <div class="sidebar-inner">
                    <div class="widget-area clearfix">
                        <div id="categories-2" class="widget widget_categories"><div class="widget-title"><h3>Categories</h3></div>		<ul>
                                <li class="cat-item cat-item-8"><a href="http://azexo.com/madison/restaurant/category/december-2016/">December 2016</a>
                                </li>
                                <li class="cat-item cat-item-7"><a href="http://azexo.com/madison/restaurant/category/january-2014/">January 2014</a>
                                </li>
                                <li class="cat-item cat-item-6"><a href="http://azexo.com/madison/restaurant/category/november-2013/">November 2013</a>
                                </li>
                                <li class="cat-item cat-item-5"><a href="http://azexo.com/madison/restaurant/category/october-2013/">October 2013</a>
                                </li>
                                <li class="cat-item cat-item-4"><a href="http://azexo.com/madison/restaurant/category/september-2012/">September 2012</a>
                                </li>
                                <li class="cat-item cat-item-1"><a href="http://azexo.com/madison/restaurant/category/uncategorized/">Uncategorized</a>
                                </li>
                            </ul>
                        </div><div id="tag_cloud-2" class="widget widget_tag_cloud"><div class="widget-title"><h3>Tags</h3></div><div class="tagcloud"><a href="http://azexo.com/madison/restaurant/tag/bootstrap/" class="tag-link-15 tag-link-position-1" title="5 topics" style="font-size: 8pt;">Bootstrap</a>
                                <a href="http://azexo.com/madison/restaurant/tag/cheap/" class="tag-link-14 tag-link-position-2" title="5 topics" style="font-size: 8pt;">Cheap</a>
                                <a href="http://azexo.com/madison/restaurant/tag/clean/" class="tag-link-13 tag-link-position-3" title="5 topics" style="font-size: 8pt;">Clean</a>
                                <a href="http://azexo.com/madison/restaurant/tag/corporate/" class="tag-link-12 tag-link-position-4" title="5 topics" style="font-size: 8pt;">Corporate</a>
                                <a href="http://azexo.com/madison/restaurant/tag/corporate-design/" class="tag-link-11 tag-link-position-5" title="5 topics" style="font-size: 8pt;">Corporate Design</a>
                                <a href="http://azexo.com/madison/restaurant/tag/design/" class="tag-link-10 tag-link-position-6" title="5 topics" style="font-size: 8pt;">Design</a>
                                <a href="http://azexo.com/madison/restaurant/tag/inspiration/" class="tag-link-9 tag-link-position-7" title="5 topics" style="font-size: 8pt;">Inspiration</a></div>
                        </div>                </div><!-- .widget-area -->
                </div><!-- .sidebar-inner -->
            </div><!-- #tertiary -->
<!--            --><?php //get_sidebar();?>
        </div>

    </div>


<?php get_footer();?>