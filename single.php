<?php get_header(); ?>

<?php the_post(); ?>
<div class="container">
	<div class="single-content">

		<h2 class="post-title"><?php the_title(); ?></h2>
		<p class="author">by <?php the_author(); ?></p>

		<p><?php the_content(); ?></p>

	</div>
</div>

<?php get_footer(); ?>