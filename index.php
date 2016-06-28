<?php
define('WP_USE_THEMES', false);
get_header();
?>
	<section>
		<main>
			<div>
				<?php
					// The Loop Begins
					if(have_posts()){
						while(have_posts()){
							the_post();
							hmbase_log('the_post', $post);
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
		</main>
	</section>
</div>
</body>
</html>
