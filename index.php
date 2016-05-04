<?php get_header(); ?>

<!-- Page Title -->
<div class="container">
	<div class="page-title">
		<h2><?php wp_title($sep = ''); ?></h2>
	</div>
	<hr class="title-break">


	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


	<?php the_title(); ?>

	<?php the_excerpt(); ?>

	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

</div>

<?php get_footer(); ?>