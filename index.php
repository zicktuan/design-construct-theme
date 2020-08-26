<?php get_header(); ?>

    <div id="main" class="site-main">
        <div class="container active-sidebar right ">

            <div id="primary" class="content-area">
                <div id="content" class="site-content post " role="main">

                    <?php get_template_part( 'loop' ); ?>

                </div>
                <!-- #content -->

                <!--navigation-->
                <nav class="navigation paging-navigation">
                    <div class="pagination loop-pagination">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="http://azexo.com/madison/restaurant/blog/page/2/">2</a>
                        <a class="next page-numbers" href="http://azexo.com/madison/restaurant/blog/page/2/"><span>Next</span><i class="next"></i></a>            </div><!-- .pagination -->
                </nav>
                <!-- .navigation -->
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
        </div>

    </div>
<?php get_footer(); ?>