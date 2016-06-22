<?php
/*
 * Search Form template
 */
?>

<form role="search" method="get" id="searchform" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <?php //<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ? ></label> ?>
        <input type="text" class="form-control" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <!--input type="submit" id="searchsubmit" class="btn btn-primary"
			value="<?php// echo esc_attr_x( 'Search', 'submit button' ); ?>" /-->
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span><?php echo esc_attr_x('Search', 'submit button'); ?></button>
    </div>
</form>
