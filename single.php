<?php get_header(); ?>

<?php the_post(); ?>
<div class="container">
	<div class="single-content">

		<h2 class="post-title"><?php the_title(); ?></h2>
		<p class="author">by <?php the_author(); ?></p>
		<p class="date"><?php the_date(); ?></p>

		<hr class="title-break">

		<p><?php the_content(); ?></p>




		<p>
			<?php previous_post_link(); ?>
			<a href="<?php bloginfo('url'); ?>/work">Back to Work</a>
			<?php next_post_link(); ?>
		</p>



	</div>
</div>

<?php get_footer(); ?>