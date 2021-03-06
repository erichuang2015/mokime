<?php

if ( have_posts() ) {

	$i = 0;
	echo '<div class="wp-block-columns">';

	while ( have_posts() ) {
		if ( $i !== 0 && ( $i % 3 ) === 0 ) {
			echo '</div><div class="has-margin-top-3 wp-block-columns">';
		}
		$i ++;
		the_post();

		get_template_part( 'template-parts/entry/entry-article' );
	}

	echo '</div>';

	get_template_part( 'template-parts/pagination' );
}
