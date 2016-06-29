<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta value="Content-Type" content="<?php bloginfo('html_type');?> charset=<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<section id="header">
				<header>
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
				</header>
		</section>
		<section id="navigation">
				<nav>
					<div class="row navbar navbar-default">
						<!-- menu start -->
						<div id="menu" class="col-xs-9">
							<?php 
							require_once('hmbase_menu_walker.php');
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
						<div class="col-xs-3 search">
							<?php echo get_search_form(); ?>
						</div>
						<!--search end -->
					</div>
				</nav>
		</section>
