<?php
/**
 * Navigation Menu template functions
 *
 * @package hmbase
 * @version 0.1
 */

require_once('utils.php');

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



		if($item->ID === $id){
			$item->classes[] = 'active';
		}

		hmbase_log('item', $item);

		hmbase_log('args', $args);
		

		$output .= apply_filter('walker_nav_menu_start_el')

} // Walker_Nav_Menu
