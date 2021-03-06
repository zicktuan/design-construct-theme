<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Design-Construct</title>
        <link rel="dns-prefetch" href="http://maps.googleapis.com/">
        <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/azexo.com\/madison\/restaurant\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.2"}};
            !function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
        </script>
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <style id="azexo-style-inline-css" type="text/css">
            #header{margin: 0 auto;}
        </style>
<!--        <script type="text/javascript" charset="UTF-8" src="--><?php //echo get_template_directory_uri() ?><!--/assets/js/AuthenticationService.Authenticate"></script>-->
        <?php wp_head() ?>
    </head>
    <?php $typePost = get_post_type(); ?>
    <?php if( "post" == $typePost ): ?>
        <body class="post-template-default single single-post postid-28 single-format-standard" >
    <?php else: ?>
    <body class="home page-template page-template-page-templates page-template-without-container page-template-page-templateswithout-container-php page page-id-11 fixed-menu">
    <?php endif; ?>
        <div id="preloader" style="display: none;">
            <div id="status" style="display: none;"></div>
        </div>
        <?php
            global $myplugin;
            $optionTheme  = $myplugin->themeSettings->getSettings();
        ?>
        <div id="page" class="hfeed site" style="visibility: visible;">
            <header id="masthead" class="site-header clearfix">

                <div class="header-main clearfix">
                    <div class="header-parts container">
                        <a class="site-title" href="<?php echo home_url(); ?>" rel="home">
                            <img src="<?php echo !empty($optionTheme['awe_header_logo']) ? esc_url($optionTheme['awe_header_logo']) : '' ?>" alt="logo">
                        </a>
                        <div class="mobile-menu-button">
                            <span><i class="fa fa-bars"></i></span>
                        </div>
                        <nav class="site-navigation mobile-menu">
                            <?php
                                wp_nav_menu(
                                    [
                                        'theme_location' => 'awe-header-menu',
                                        'walker'         => new CustomPrimaryMenuWalker(),
                                        'container'      => 'div',
                                        'container_class' => 'menu-primary-container',
                                        'menu_class' => 'nav-menu',
                                        'menu_id'     => 'primary-menu',
                                    ]
                                );
                            ?>
                        </nav>
                        <nav class="site-navigation primary-navigation">
                            <?php
                                wp_nav_menu(
                                    [
                                        'theme_location' => 'awe-header-menu',
                                        'walker'         => new CustomPrimaryMenuWalker(),
                                        'container' => 'div',
                                        'container_class' => 'menu-primary-container',
                                        'menu_class'     => 'nav-menu',
                                        'menu_id'     => 'primary-menu',
                                    ]
                                );
                            ?>
                        </nav>
                    </div>
                </div>

                <div id="middle" class="sidebar-container" role="complementary">
                    <div class="sidebar-inner">

                        <div class="widget-area clearfix">

                            <?php if("post" == $typePost): ?>
                                <div id="azh_widget-2" class="widget widget_azh_widget">
                                    <div class="inner-hero bg-image overlay"
                                         data-group="middle-post"
                                         data-stellar-background-ratio="0.3"
                                         data-image-src="<?php echo !empty($optionTheme['blog_bg']) ? esc_url($optionTheme['blog_bg']) : ''; ?>"
                                         style="background: url(<?php echo !empty($optionTheme['blog_bg']) ? esc_url($optionTheme['blog_bg']) : ''; ?>) 0% 0px / cover no-repeat;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <h2 class="page-title font-white">
                                                        <?php echo !empty($optionTheme['blog_header_title_bg']) ? $optionTheme['blog_header_title_bg'] : ''; ?>
                                                    </h2>
                                                    <p class="lead">
                                                        <?php echo !empty($optionTheme['blog_header_sub_title_bg']) ? $optionTheme['blog_header_sub_title_bg'] : ''; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div id="azh_widget-4" class="widget widget_azh_widget">
                                    <div class="hero bg-image overlay"
                                         data-stellar-background-ratio="0.2"
                                         data-image-src="<?php echo !empty($optionTheme['awe_header_bg']) ? esc_url($optionTheme['awe_header_bg']) : ''; ?>"
                                         data-section="Image-middle-home"
                                    >
                                        <div class="container valign">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2 text-center">
                                                    <h1 class="font-white font-cursive wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                                                        <?php echo !empty($optionTheme['awe_header_title_bg']) ? trim($optionTheme['awe_header_title_bg']) : '' ?>
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>

                        </div>
                    </div>
                </div>
        </header>