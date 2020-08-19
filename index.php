<?php get_header(); ?>

<section id="content" role="main">
    <?php get_template_part('loop'); ?>
    <?php comments_template(); ?>
</section>
<?php get_footer(); ?>