<div class="row">
    <section class="title column large-12 medium-12 small-12">
    	<?php if( get_field('title_icon') ) : ?>
    		<span class="<?php the_field('title_icon') ?>"></span>
    	<?php endif; ?>
    	<?php if( get_field('title_text') ) : ?>
    		<p><?php the_field('title_text') ?></p>
    	<?php endif; ?>
    	<hr>
    </section>
</div>