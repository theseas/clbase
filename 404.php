<?php get_header(); ?>
	<div class="row main round-border">
			<div class="<?php echo(is_active_sidebar('right-sidebar')?'col-lg-9 col-md-9':'');?> col-sm-12 col-xs-12">
				<main>
					<h1>
						<?php _e('Error 404', 'clbase'); ?>
					</h1>
					<p>
						<?php _e('The page you requested does not exist. You can use the search functionality to find what you are looking.', 'clbase'); ?>
					</p>
					<p>
						<?php get_search_form(); ?>
					</p>
				</main>
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
