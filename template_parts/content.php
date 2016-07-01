<article>
	<div class="container-fluid article">
		<h2>
			<a href="<?php echo(esc_attr(get_permalink())); ?>"><?php the_title(); ?></a>
		</h2>
		<p>
			<?php the_content(__('Read More ...', 'hmbase')); ?>
		</p>
		<div class="row info">
			<div class="col-md-9 col-lg-9">
				<?php
				_e('Submitted on', 'hmbase');
				echo(' ' . esc_attr(get_the_date()) . ' ');

				_e('by', 'hmbase'); ?>
				<a href="<?php esc_attr(the_author_link()); ?>"> <?php the_author(); ?> </a>

				<?php
				_e('to', 'hmbase');
				$categories = get_the_category();
				$format = ' <a href="%s/category/%s">%s</a>';

				for($i=0; $i<sizeof($categories); $i++){
					printf($format, esc_attr(get_bloginfo('url')), esc_attr($categories[$i]->slug), esc_attr($categories[$i]->name));
					if($i<sizeof($categories)-1){
						echo(',');
					}
				}
				echo(' ');
				?>
			</div>
			<div class="col-md-3 col-lg-3">
				<?php 
				printf("%s(%d)",__('Comments'), get_comments_number());
				?>				
		</div>
	</div>
</article>
