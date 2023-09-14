<?php
/*
 * The template for displaying 404 pages (not found)
 */
get_header(); ?>

<section class="page404">
	<div class="container">
		<div>
			<a class="page404__logo" href="<?php echo home_url(); ?>"><?php the_field('logo', 'option'); ?></a>
			<h2 class="txt txt-yellow">ERROR 404</h2>
			<h2 class="txt txt-white">Oops! Something went wrong.</h2>
			<a href="<?php echo home_url(); ?>" class="btn btn-yellow">Go to home page</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>