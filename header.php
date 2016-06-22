<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta value="Content-Type" content="<?php bloginfo('html_type');?> charset=<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<header>
			<div class="row">
				<div class="col-xs-8">
					<h1 id="header">
						<a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a>
						<small><?php bloginfo('description'); ?></small>
					</h1>
				</div>
			</div>
		</header>
		<nav>
			<div class="row">
				<div id="menu" class="col-xs-8">
					<ul>
						<li><a href="#">test</a></li>
					</ul>
				</div>
				<div class="col-xs-4 search">
					<?php echo get_search_form(); ?>
				</div>
			</div>
		</nav>
