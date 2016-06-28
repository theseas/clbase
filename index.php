<?php
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
							hmbase_log('$post', $post);
							hmbase_log('get_post_format', get_post_format);
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
