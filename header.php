<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta value="Content-Type" content="<?php bloginfo('html_type');?> charset=<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container-fluid">
		<?php
		var_dump(is_admin());
		if(is_admin()){
			show_admin_bar();
		}
		?>
	</div>
	<div class="container">
		<section id="header">
				<header>
					<div id="header" class="row jumbotron">
						<div >
							<h1 id="header">
								<a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a>
								<small><?php bloginfo('description'); ?></small>
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
							<?php wp_nav_menu(array(
								'menu'=>'hmbase-top',
								'menu_class'=>'nav navbar-nav',
								'container'=>'div',
								'container_class'=>'container-fluid'
								)); ?>
							<ul>
								<li><a href="#">test</a></li>
							</ul>
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
