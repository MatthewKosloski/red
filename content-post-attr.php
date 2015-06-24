<ul class="cf post-attributes">
	<li>
		<h3>Published on</h3>
		<p><?php the_time('F j, Y'); ?></p>
	</li>
	<li>
		<h3>Word Count</h3>
		
		<p><?php echo word_count(); ?></p>
	</li>
	<li>
		<h3>Reading time</h3>
		
		<p><?php post_read_time(); ?></p>
	</li>
</ul>