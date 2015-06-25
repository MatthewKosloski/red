<?php get_header(); 
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <div class="row">
			<section class="title column large-12 medium-12 small-12">
			  	<h1><?php the_title(); ?></h1>
			  	<hr>
			</section>
		</div>
		<div class="row">
			<section class="cf main">
				<?php get_template_part( 'content', 'project-attr' ); ?>
				<?php if( is_plugin_active( 'advanced-custom-fields/acf.php' ) ) : ?>

					<?php if( get_field('client') || get_field('role') || get_field('tasks') || get_field('technologies') || get_field('website') ) : ?>
							<div class="project-description large-8 medium-12 small-12">
						<?php else: ?>
							<div class="project-description large-12 medium-12 small-12">
					<?php endif; ?>

				<?php else: ?>
					<div class="project-description large-12 medium-12 small-12">
				<?php endif; ?>
				
					<div class="column large-12 medium-12 small-12">
						<?php the_content(); ?>
					</div>			
				</div>
			</section>
		</div>
	<?php endwhile; else: get_template_part( 'content', 'none' ); endif; ?>
<?php get_footer(); ?> 