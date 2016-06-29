<?php
get_header();
?>
	<section>
		<main>
			<div class="<?php echo(is_active_sidebar('right-sidebar')?'col-md-9 col-lg-9':'');?>">
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
			</div>
			<?php
			if(is_active_sidebar('right-sidebar')){
			?>
				<aside>
					<div>
						<?php get_sidebar(); ?>
					</div>
				</aside>
			<?php
			} // end sidebar if 
			?>
		</main>
	</section>
</div>
</body>
</html>
