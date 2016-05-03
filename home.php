<?php get_header(); ?>

<!-- Page Title -->
<div class="container">
	<div class="page-title">
		<h2><?php wp_title($sep = ''); ?></h2>
	</div>

<!-- The Loop -->
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

	<h2><?php the_title(); ?></h2>

</div>


<?php endwhile; endif; ?>


<?php get_footer(); ?>