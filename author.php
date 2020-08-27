<?php get_header(); ?>
    <div id="main" class="site-main">
        <div class="container active-sidebar right ">

            <div id="primary" class="content-area">
                <div id="content" class="site-content post " role="main">

                    <?php get_template_part( 'loop' ); ?>

                </div>
                <!-- #content -->

                <!--navigation-->
                <?php
                    global $awesomeTheme, $wp_query;
                    $awesomeTheme->includeFunction()->awePagination($wp_query->max_num_pages);
                ?>

            </div><!-- #primary -->

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

<?php get_footer(); ?>