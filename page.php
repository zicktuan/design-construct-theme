<?php
    global $awesomeTheme;
    $awesomeTheme->pageTemplateInit()->Init(get_the_ID()); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php
		get_header();
        echo get_the_ID();
		get_template_part('page', 'content');
		get_sidebar();
		get_footer();
		?>
<?php endwhile;
endif; ?>