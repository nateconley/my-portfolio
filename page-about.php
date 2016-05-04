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
	<hr class="title-break">

	<?php the_post(); ?>

	<div id="about-picture"><?php the_post_thumbnail(); ?></div>

	<div id="about-copy"><?php the_content(); ?></div>

</div>

<?php the_post(); ?>

<?php get_footer(); ?>