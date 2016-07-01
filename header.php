<?php
require_once('hmbase_menu_walker.php');
?>
<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta value="Content-Type" content="<?php bloginfo('html_type');?> charset=<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<header>
				<section id="header">
					<div id="header" class="row jumbotron">
						<div>
							<h1 id="header">
								<?php
								$header_image = get_header_image();
								if(!empty($header_image)){
								?>
									<div class="col-md-4">
										<img class="img-responsive" src="<?php echo($header_image); ?>" alt="<?php bloginfo('title'); ?>">
									</div>
									<div class="col-md-2"></div>
									<div class="col-md-4 text-center">
										<p><?php bloginfo('description'); ?></p>
									</div>
								<?php }else{ ?>
									<a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a>
									<small><?php bloginfo('description'); ?></small>
								<?php } //end if ?>
							</h1>
						</div>
					</div>
				</section>
		</header>
		<?php
		if(has_nav_menu('hmbase-top')){
		?>
		<nav>
				<section id="navigation">
					<div class="row navbar navbar-default">
						<!-- menu start -->
						<div id="menu" class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<?php 
							wp_nav_menu(array(
								'menu'=>'hmbase-top',
								'menu_class'=>'nav navbar-nav',
								'container'=>'div',
								'container_class'=>'container-fluid',
								'depth' => 2,
								'walker' => new Hmbase_Menu_Walker()
								));
							?>
						</div>
						<!-- menu end -->
						<!-- search start -->
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 search">
							<?php echo get_search_form(); ?>
						</div>
						<!--search end -->
					</div>
				</section>
		</nav>
		<?php
		} // end if has_nav_menu 
		?>
