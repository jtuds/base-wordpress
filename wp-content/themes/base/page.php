<?php get_header(); ?>

<?php the_post(); ?>

<?php get_template_part('partials/layout', 'banner'); ?>
<?php get_template_part('partials/layout', 'content'); ?>
<?php get_template_part('partials/layout', get_post_type()); ?>

<?php get_footer(); ?>