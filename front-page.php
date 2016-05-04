<?php get_header(); ?>

<div id="front-page-hero">
	<?php the_post(); ?>
	<?php the_post_thumbnail('large'); ?>
	<div id="front-page-hero-text">
		<h2>Nate Conley</h2>
		<h3>Front End Web Developer</h3>
	</div>
</div>

<?php get_footer(); ?>