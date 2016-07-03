<footer>
	<div class="row footer">
		<div class="row-height">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-height"> 
			<nav>
			<?php
				wp_nav_menu([
					'menu'=>'footer',
					'theme-location'=>'hmbase-footer',
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
		&copy; Created by theseas for <a href="http://hypermorph.com/">hypermorph</a>
	</div>
</footer>
