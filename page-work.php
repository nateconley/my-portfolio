<?php
/*
	Template Name: Portfolio Page
*/
?>

<?php get_header(); ?>


<div class="container">
	<!-- Page Title -->
	<div class="page-title">
		<h2><?php wp_title($sep = ''); ?></h2>
	</div>
	<hr class="title-break">
	<!-- Start Portfolio Gallery -->
	<div class="portfolio-gallery">
		<!-- Query for Posts Categorized as 'Work' -->
		<?php
			$args = array(
					'post_type' => 'portfolio'
				);

			$work_query = new WP_Query( $args );

		?>

		<!-- The Loop -->
		<?php if($work_query->have_posts()) : while($work_query->have_posts()): $work_query->the_post(); ?>

			<div class="portfolio-item">
				<a href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
					<?php the_post_thumbnail('large'); ?>
				</a>
			</div>


		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</div>


<?php get_footer(); ?>