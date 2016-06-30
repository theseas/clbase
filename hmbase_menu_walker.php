<?php
/**
 * Navigation Menu template functions
 *
 * @package hmbase
 * @version 0.1
 */

/**
 * Create HTML list of nav menu items.
 *
 * @since 3.0.0
 * @uses Walker
 */
class Hmbase_Menu_Walker extends Walker_Nav_Menu{
	/**
	 * Starts the list before the elements are added.
	 *
	 * @see Walker::start_lvl()
	 *
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args   An array of arguments. @see wp_nav_menu()
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$classes = $depth>=0 ? 'dropdown-menu' : 'nav navbar-nav';
		$output .= "\n$indent<ul class=\"$classes\">\n";
	}

	/**
	 * Start the element output.
	 *
	 * @see Walker::start_el()
	 *
	 * @since 3.0.0
	 * @since 4.4.0 'nav_menu_item_args' filter was added.
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item   Menu item data object.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args   An array of arguments. @see wp_nav_menu()
	 * @param int    $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$item->classes = [];
		$elem_li='<li id="nav-menu-item-' . $item->ID . '"';
		$attributes = '';


		if($item->current){
			$item->classes[] = 'active';
		}

		if($args->walker->has_children){
			$item->classes[] = 'dropdown';
			$item->url = '#';
			$args->link_after = '<span class="caret"></span>';
			$attributes .= ' class="dropdown-toggle" data-toggle="dropdown"';
		}else{
			$args->link_after = '';
		}

		if(!empty($item->classes)){
			$classes = esc_attr(implode(' ', apply_filters('nav_menu_css_class', $item->classes , $item)));
			$elem_li .= sprintf(' class="%1$s"' , $classes);
		}

		if(!empty($item->attr_title)){
			$attr_title = esc_attr($item->attr_title);
			$attributes .= sprintf(' title="%1$s"', $attr_title);
		}

		if(!empty($item->target)){
			$target = esc_attr($item->target);
			$attributes .= sprintf(' target="%1$s"', $target);
		}

		if(!empty($item->xfn)){
			$xfn = esc_attr($item->xfn);
			$attributes .= sprintf(' rel="%1$s"', $xfn);
		}

		if(!empty($item->url)){
			$url = esc_attr($item->url);
			$attributes .= sprintf(' href="%1$s"', $url);
		}

		$elem_li .= '>';
		$output .= $indent . $elem_li;

		$item_output = sprintf('%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters('the_title', $item->title, $item->ID),
			$args->link_after,
			$args->after
		);

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}

} // Walker_Nav_Menu
