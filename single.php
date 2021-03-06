<?php get_header(); ?>
	<div class="row main round-border">
			<div id="posts" class="<?php echo(is_active_sidebar('right-sidebar')?'col-lg-9 col-md-9':'');?> col-sm-12 col-xs-12">
				<main>
					<?php
						// The Loop Begins
						if(have_posts()){
								the_post();
								get_template_part('template_parts/content', get_post_format());

								if(comments_open()){
									comments_template();
								}else{
									echo '<p>' . _e('Comments are closed.', 'clbase') . '</p>';
								}
					?>
					<?php
						// The Loop Ends
						} // end if
						else{
							_e('Sorry, no posts matched your criteria.', 'clbase');
						}
					?>
				</main>
				<div class="row">
					<div id="posts_pagination" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<?php echo get_the_posts_pagination(['mid_size'=>1,
							'prev_text'=>'< '. __('Previous', 'clbase') ,
							'next_text'=>__('Next', 'clbase') . ' >']);
						?>
					</div><!-- END #posts_pagination -->
				</div><!-- END .row -->
			</div><!-- END #posts -->
			<?php
			if(is_active_sidebar('right-sidebar')){
				get_sidebar();
			} // endif sidebar
			?>
	</div> <!-- END .main -->
	<?php get_footer() ?>
</div>
</body>
</html>
