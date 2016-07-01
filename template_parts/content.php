<article>
	<div class="container-fluid article">
		<h2>
			<a href="<?php echo(get_permalink()); ?>"><?php the_title(); ?></a>
		</h2>
		<p>
			<?php the_content(__('Read More &hellip;', 'hmbase')); ?>
		</p>
	</div>
</article>
