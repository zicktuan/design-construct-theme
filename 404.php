<?php //get_header(); ?>
<!-- <div id="main">
	<article>
		<h2 class="title-404">
			4<span>0</span>4
		</h2>
		<h1>Sorry! The page you were looking for could not be found </h1>
		<p class="w3lstext">You have been tricked into click on a link that can not be found. Please check the url or go to <a href="#">main page</a> and see if you can locate what you are looking for </p>
	</article>
	
	<nav>
		<div class="list-group">
    		<?php //dynamic_sidebar('blog-sidebar-area'); ?>
		</div>
    </nav>
    <aside>
    	<?php //dynamic_sidebar('blog-sidebar-area-2'); ?>
    </aside>
</div> -->
<?php //get_footer(); ?>
<?php get_header(); ?>
<section id="content" role="main">
<article id="post-0" class="post not-found">
<header class="header">
<h1 class="entry-title"><?php _e( 'Not Found', 'blankslate' ); ?></h1>
</header>
<section class="entry-content">
<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</section>
</article>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>