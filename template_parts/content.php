<article>
	<div class="container-fluid article">
		<h2>
			<a href="#"><?php the_title(); ?></a>
		</h2>
		<p>
		<?php
		if(has_excerpt()){
			the_excerpt();
		}else{
			$max_length = 450;
			if(mb_strlen(get_the_content())>$max_length){
				$end = mb_strpos(get_the_content(), ' ', $max_length - 30);
				if($end===false){
					$end = $max_length - 13;
				}
				echo(mb_substr(get_the_content(), 0, $end));
			}
			else{
				the_content();
			}
		?>
		<a href=""><?php _e('Read More', 'hmbase'); ?>&hellip;</a>
		<?php
		} //end if has_excerpt
		?>
		</p>	
	</div>
</article>
