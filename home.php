<?php get_header(); ?>

<!-- Page Title -->
<div class="container">
	<div class="page-title">
		<h2><?php wp_title($sep = ''); ?></h2>
	</div>
	<hr class="title-break">
<!-- The Loop -->
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="blog-preview">
		<h2><?php the_title(); ?></h2>
		<p><?php the_date(); ?></p>
		<p><?php the_category(' '); ?></p>
	</div>

<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>