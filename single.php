<?php get_header(); ?>
<div class="row">
	<div class="article column large-9 large-centered medium-12 small-12">
		<section class="cf main">
            <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    			<article>
    				<section class="article-title">
    					<h1><?php the_title(); ?></h1>
    					<h2><?php the_time('F j, Y'); ?></h2>
    				 	<hr class="article-sep">
    				</section>
    				<?php the_content(); ?>
    			</article>

    			<?php get_template_part( 'content', 'post-attr' ); ?>
            <?php endwhile; else: get_template_part( 'content', 'none' ); endif; ?>
		</section>
	</div>
</div>
<?php get_footer(); ?>  