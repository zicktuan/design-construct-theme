<?php if(!is_home() && !is_front_page()): ?>
    <div id="main" class="site-main">
        <div class="container active-sidebar right ">

            <div id="primary" class="content-area">
                <div id="content" class="site-content post " role="main">

                    <?php the_content()?>

                </div>
                <!-- #content -->

            </div>
            <!-- #primary -->

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
<?php else: ?>
    <?php the_content()?>
<?php endif ?>
