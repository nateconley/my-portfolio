<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<header>
		<h1>Nate Conley</h1>
		<img src="/portfolio-wp/wp-content/uploads/2016/05/nate-conley-logo-main.png" alt="Nate Conley Logo">
		<nav>
			<?php
				$defaults = array(
					'container' => false,
					'theme_location' => 'primary-menu'
				);

				wp_nav_menu( $defaults );
			?>
		</nav>
	</header>