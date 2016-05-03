<?php
/*
	Template Name: About Me
*/
?>

<?php get_header(); ?>

<?php the_post(); ?>
<div class="container">
	<h1><?php the_title(); ?></h1>

	<p><?php the_content(); ?></p>
</div>

<?php get_footer(); ?>