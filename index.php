<?php get_header(); ?>

<!-- Page Title -->
<div class="container">
	<div class="page-title">
		<h2><?php wp_title($sep = ''); ?></h2>
	</div>
	<hr class="title-break">

<!-- Sidebar -->
	<ul class="blog-category-list">
		<?php dynamic_sidebar(); ?>
	</ul>

<!-- The Loop -->
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="blog-preview">
		<a href="<?php the_permalink(); ?>">
			<h3><?php the_title(); ?></h3>
			<?php the_post_thumbnail('large'); ?>
		</a>
	</div>

<?php endwhile; endif; ?>

</div>



<?php get_footer(); ?>