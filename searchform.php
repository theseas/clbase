<?php
/*
 * Search Form template
 */
?>

<form role="search" method="get" id="searchform" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-group">
        <input type="text" class="form-control" value="<?php echo get_search_query(); ?>" name="s" id="s" />
		<button type="submit" class="btn btn-primary">
			<?php echo esc_attr_x('Search', 'submit button'); ?>
		</button>
    </div>
</form>
