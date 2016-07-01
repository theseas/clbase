<?php get_header(); ?>
	<div class="row main round-border">
			<div class="<?php echo(is_active_sidebar('right-sidebar')?'col-lg-9 col-md-9':'');?> col-sm-12 col-xs-12">
				<main>
					<?php
						// The Loop Begins
						if(have_posts()){
							while(have_posts()){
								the_post();
								get_template_part('template_parts/content', get_post_format());
					?>
					<?php
						// The Loop Ends
							} // end while
						} // end if
						else{
							_e('Sorry, no posts matched your criteria.');
						}
					?>
				</main>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<?php echo get_the_posts_pagination(['mid_size'=>1,
							'prev_text'=>'< '. __('Previous') ,
							'next_text'=>__('Next') . ' >']);
						?>
					</div>
				</div>
			</div>
			<?php
			if(is_active_sidebar('right-sidebar')){
				get_sidebar();
			} // end sidebar if ?>
	</div>
</div>
</body>
</html>
