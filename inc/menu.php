<?php

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function mokime_menus() {

	$locations = array(
		'primary'  => __( 'Main menu', 'mokime' ),
		'social'   => __( 'Social Menu', 'mokime' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'mokime_menus' );
