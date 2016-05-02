<?php

function nate_theme_styles() {
	wp_enqueue_style( 'normalize.css', 'https://necolas.github.io/normalize.css/4.1.1/normalize.css' );
	wp_enqueue_style( 'main.css', get_template_directory_uri() . '/css/styles.css' );
}

add_action( 'wp_enqueue_scripts', 'nate_theme_styles' );

?>