<?php
/*
 * Template Name: Home
 */
get_header(); ?>

<div class="my-slider">
  <div class="item">1</div>
  <div class="item">2</div>
  <div class="item">3</div>
  <div class="item">4</div>
  <div class="item">5</div>
  <div class="item">6</div>
  <div class="item">7</div>
</div>

<?php get_template_part( 'partials/block', 'banner' ); ?>
<?php get_template_part( 'partials/block', 'about' ); ?>
<?php get_template_part( 'partials/block', 'services' ); ?>
<?php get_template_part( 'partials/block', 'projects' ); ?>
<?php get_template_part( 'partials/block', 'testimonials' ); ?>
<?php get_template_part( 'partials/block', 'experts' ); ?>
<?php get_template_part( 'partials/block', 'contacts' ); ?>

<?php get_footer(); ?>
