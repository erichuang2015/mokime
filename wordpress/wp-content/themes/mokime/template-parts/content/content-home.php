<?php

/**
 * Display the content from the static page
 */
if ( is_home() && !is_front_page() && have_posts() ) {
	the_post();
	the_content();
}

/**
 * Display the last articles
 */
if ( is_home() || (bool) get_theme_mod( 'homepage_header_search', true ) ) {

	$recent_posts = get_posts( array(
		'posts_per_page' => 6,
		'offset'=> 0,
		'post_status' => 'publish'
	) );

	if ( $recent_posts ) {

		echo '<div class="has-margin-top-3 columns">';

		foreach ( $recent_posts as $post ) {
			setup_postdata( $post );
			get_template_part('template-parts/content/content-article');
		}

		wp_reset_postdata();

		echo '</div>';

//		get_template_part( 'template-parts/pagination' );
	}

	wp_reset_query();
}
