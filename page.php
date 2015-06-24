<?php get_header(); ?>

	<?php if( get_field('show_title') ) : ?>
		<?php get_template_part( 'content', 'title' ); ?>
	<?php endif; ?>

	<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<section class="main column large-12 medium-12 small-12">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</section>
		</div>	
	<?php endwhile; else: get_template_part( 'content', 'none' ); endif; ?>

<?php get_footer(); ?>