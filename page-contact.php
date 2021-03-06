<?php
/*
	Template Name: Contact Page
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
	<div class="contact-form">
		<?php the_content(); ?>
	</div>


</div>

<?php get_footer(); ?>