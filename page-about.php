<?php
/*
	Template Name: About Me
*/
?>

<?php get_header(); ?>

<div class="container">
	<!-- Page Title -->
	<div class="page-title">
		<h2><?php wp_title($sep = ''); ?></h2>
	</div>

	<?php the_post(); ?>

	<p><?php the_content(); ?></p>

</div>

<?php the_post(); ?>

<?php get_footer(); ?>