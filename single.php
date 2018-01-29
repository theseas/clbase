<?php get_header(); ?>
	<div class="row main round-border">
			<div class="<?php echo(is_active_sidebar('right-sidebar')?'col-lg-9 col-md-9':'');?> col-sm-12 col-xs-12">
				<main>
					<?php
						// The Loop Begins
						if(have_posts()){
								the_post();
								if(post_password_required()){
									return;
								}
								get_template_part('template_parts/content', get_post_format());

								if(comments_open() || get_comments_number()){
									get_template_part('template_parts/comments', get_post_format());
								}else{
									echo '<p>' . _e('Comments are closed.', 'clbase') . '</p>';
								}
					?>
					<?php
						// The Loop Ends
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
	<?php get_footer() ?>
</div>
</body>
</html>
