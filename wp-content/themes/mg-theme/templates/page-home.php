<?php
/*
 * Template Name: Home
 */
get_header(); ?>

<?php get_template_part( 'partials/block', 'banner' ); ?>
<?php get_template_part( 'partials/block', 'about' ); ?>
<?php get_template_part( 'partials/block', 'services' ); ?>
<?php get_template_part( 'partials/block', 'projects' ); ?>
<?php get_template_part( 'partials/block', 'testimonials' ); ?>
<?php get_template_part( 'partials/block', 'experts' ); ?>
<?php get_template_part( 'partials/block', 'contacts' ); ?>
<?php get_template_part( 'partials/block', 'popup' ); ?>

<?php get_footer(); ?>
