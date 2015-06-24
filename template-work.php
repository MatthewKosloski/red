<?php 
/*  

Template Name: Work Gallery

*/

get_header(); ?>
	<?php if( get_field('show_title') ) : ?>
        <?php get_template_part( 'content', 'title' ); ?>
    <?php endif; ?>
	<?php
	if( get_field('number_of_posts') ): $num_posts = get_field('number_of_posts'); else: $num_posts = 9; endif;
	$args = array(
	'post_type' => 'work',
	'posts_per_page' => $num_posts
	);
	$query = new WP_Query( $args );
	?>
	<div class="row">
		<section class="cf main">
			<?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		        <?php if ( get_field('link_type') == 1 ) : ?>
		        	<div class="shot column large-4 medium-6 small-12">
			          <div class="shot__container">
			            <a href="<?php the_field('website'); ?>">
			              <div class="overlay"><span class="pe-7s-glasses"></span></div>
			              <?php the_post_thumbnail(); ?>
			            </a>
			            <p><?php the_title(); ?></p>
			          </div>
		        	</div>
		    	<?php else: ?>
		    		<div class="shot column large-4 medium-6 small-12">
			          <div class="shot__container">
			            <a href="<?php the_permalink(); ?>">
			              <div class="overlay"><span class="pe-7s-glasses"></span></div>
			              <?php the_post_thumbnail(); ?>
			            </a>
			            <p><?php the_title(); ?></p>
			          </div>
		        	</div>
		        <?php endif; ?>
			<?php endwhile; else: get_template_part( 'content', 'none' ); endif; ?>
		</section>
	</div>	
<?php get_footer(); ?>