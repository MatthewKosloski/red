<?php get_header(); ?>

	<div class="row">
		<div class="article column large-12 medium-12 small-12">
			<section class="cf main">
				<article>
					<section class="article-title">
						<h1><?php _e( '404 Page Not Found' ); ?></h1>
						<h2><?php _e( 'The page you were looking for doesn\'t exist. :(' ); ?></h2>
					 	<hr class="article-sep">
					</section>
					<p class="textalign--center"><a href="<?php bloginfo('url') ?>" class="btn btn--small"><?php _e( 'Return Home' ); ?></a></p>
				</article>
			</section>
		</div>
	</div>

<?php get_footer(); ?>