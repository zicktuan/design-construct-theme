<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php
		get_header();
		get_template_part('page', 'content');
		get_sidebar();
		get_footer();
		?>
<?php endwhile;
endif; ?>