<footer>
	<div class="row footer">
		<div class="row-height">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-height"> 
			<nav>
			<?php
				wp_nav_menu([
					'menu'=>'footer',
					'theme-location'=>'clbase-footer',
					'depth'=>1
				]);
			?>
			</nav>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-height">
			<nav>
			<?php
				wp_nav_menu([
					'menu'=>'social-media',
					'theme-location'=>'social',
					'depth'=>1
				]);
			?>
			</nav>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-height">
		<?php
			if(is_active_sidebar('footer')){
				dynamic_sidebar('footer');
			}
		?>
		</div>
		</div>
	</div>
	<div class="row text-center">
		&copy; This website is created by <a href="http://coding-labs.eu/">coding-labs.eu</a>
	</div>
</footer>
<?php wp_footer(); ?>
