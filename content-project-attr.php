<?php if( get_field('client') || get_field('role') || get_field('tasks') || get_field('technologies') || get_field('website') ) : ?>
	<ul class="cf project-attributes large-3 medium-12 small-12">
		<?php if( get_field('client') ) : ?>
			<li class="column large-12 medium-6 small-12">								
				<h2>Client</h2>
				<p><?php the_field('client'); ?></p>								
			</li>
		<?php endif; ?>

		<?php if( get_field('role') ) : ?>
			<li class="column large-12 medium-6 small-12 hide-for-small-only">								
				<h2>Role</h2>
				<p><?php the_field('role'); ?></p>								
			</li>
		<?php endif; ?>

		<?php if( get_field('tasks') ) : ?>
			<li class="column large-12 medium-6 small-12">								
				<h2>Tasks</h2>
				<p><?php the_field('tasks'); ?></p>								
			</li>
		<?php endif; ?>

		<?php if( get_field('technologies') ) : ?>
			<li class="column large-12 medium-6 small-12">								
				<h2>Technologies</h2>
				<p><?php the_field('technologies'); ?></p>								
			</li>
		<?php endif; ?>

		<?php if( get_field('website') ) : ?>
			<li class="column large-12 medium-6 small-12 hide-for-small-only">								
				<h2>Website</h2>
				<p><a href="http://<?php the_field('website'); ?>">
				<?php 
					$subject = get_field('website');
					$search = 'http://';
					$trimmed = str_replace($search, '', $subject);
					echo $trimmed
				?></a></p>								
			</li>
		<?php endif; ?>
	</ul>
<?php endif; ?>