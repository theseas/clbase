<?php get_header(); ?>
	<section>
		<main>
			<div>
				<?php
					// The Loop Begins
					if(have_posts()){
						while(have_posts()){
							the_post();
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
