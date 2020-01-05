<article class="column column-33" id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/BlogPosting">
    <div class="card has-margin-top-3">
		<?php $post_image = mokime_get_post_thumbnail_url( get_post() ); ?>
        <div class="card-image"<?php if ( $post_image ): ?> style="<?php echo sprintf( " background-image: url('%s')", $post_image ) ?>"<?php endif ?>></div>

        <div class="card-content">
            <h3 class="title is-4 has-text-weight-bold has-margin-top-1" itemprop="headline">
                <a href="<?php the_permalink() ?>" class="has-text-black has-text-900">
					<?php the_title(); ?>
                </a>
            </h3>

            <p class="subtitle is-6 has-text-justified"><?php echo get_the_excerpt(); ?></p>
			<?php get_template_part( 'template-parts/content/content-article-categories' ); ?>

            <div class="card-footer">
                <div class="card-footer-item">
                    <img src="/wp-content/themes/mokime/assets/img/icons/_ionicons_svg_md-person.svg" alt="Utilisateur"
                         class="hover has-margin-right-05" width="16">
                    <small><?php the_author(); ?></small>
                </div>
                <div class="card-footer-item">
                    <img src="/wp-content/themes/mokime/assets/img/icons/_ionicons_svg_md-calendar.svg" alt="Date"
                         class="hover has-margin-right-05" width="16">
                    <time class="is-small-text has-text-grey-dark" datetime="<?php echo get_the_date( 'c' ); ?>"
                          itemprop="datePublished">
                        <small><?php echo get_the_date( 'j F Y' ); ?></small>
                    </time>
                </div>
            </div>

        </div>

    </div>
</article>
