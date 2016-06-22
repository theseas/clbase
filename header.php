<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<header>
			<div>
				<h1 id="header">
					<a href=<?php bloginfo('url'); ?><?php bloginfo('name'); ?></a>
				</h1>
			</div>
			<div>
				<p><?php bloginfo('description'); ?></p>
			</div>
		</header>
