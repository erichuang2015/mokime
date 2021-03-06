</main><!-- #content -->

<footer id="site-footer" role="contentinfo">

	<?php if ( is_active_sidebar( 'sidebar-pre-footer' ) ) : ?>
        <div id="prefooter" class="container has-margin-top-5">
			<?php dynamic_sidebar( 'sidebar-pre-footer' ); ?>
        </div>
	<?php endif; ?>

    <div class="header-footer-group wrapper has-padding-top-5 has-margin-top-5 has-margin-x-0 has-padding-x-0">

		<?php get_template_part( 'template-parts/footer/menus-widgets' ); ?>

        <div class="section-inner">

            <div class="footer-credits">

                <p class="footer-copyright has-margin-0 has-padding-y-2 has-text-align-center">
                    <small class="is-white">
                        <a href="https://moki.me" title="Theme MokiMe" target="_blank" class="is-white">
							<?php _e( 'High performance theme', 'mokime' ) ?>
                        </a>
						<?php _e( 'made by ', 'mokime' ) ?>
                        <a href="https://www.security-helpzone.com" target="_blank" class="is-white">SHZ</a>.
                    </small>
                </p>

            </div>

        </div>

    </div>

</footer><!-- #site-footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
