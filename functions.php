<?php
/*
 * Copyright: coding-labs.eu 2016-2017
 */


/* 
 * Utility Functions BEGIN
 * -------------------------------------------
 */

/*
 * @description Formats and logs an object
 * @param string	$name	Name of the object	 
 * @param mixed		$obj 	Object to be loged
 */
function clbase_log($name, $obj){
	if(WP_DEBUG===true){
		$obj_str = print_r($obj, true);
		$obj_str = $name . ': ' .str_replace("\n", '', $obj_str);
		error_log($obj_str);
	}
}


/* 
 * Utility Functions END
 * --------------------------------------------
 */


/*
 * @description Add theme's css files to wp_head for display.
 */
function clbase_enqueue_styles(){
	wp_enqueue_style("clbase-main-css", clbase_get_style('style'));
	wp_enqueue_style("bootstrap", clbase_get_style('bootstrap', 'css'));
	wp_enqueue_style("bootstrap-theme", clbase_get_style('bootstrap-theme', 'css'));
}
add_action('wp_enqueue_scripts', 'clbase_enqueue_styles');

/*
 * @description Constracts proper URIs for css files minified or not 
 			according to hm_debug flag.
 * @param $name: The filename without suffix.
 * @param $path: relative path of the file in the theme 
 			folder without leading or trailing slashes.
 * @return full uri for the file.
 */
function clbase_get_style($name, $path = ""){
	$file = "";
	$path = trim($path, '/');
	$path = empty($path)?"":'/'.$path;
	if(WP_DEBUG===true){
		$file = get_template_directory_uri() . $path .'/'. $name . ".css";
	}
	else{
		$file = get_template_directory_uri() . $path .'/'. $name . '.min.css';
	}
	return $file;
}

/*
 * @description Add theme's js files in wp_head for display
 */
function clbase_enqueue_scripts(){
	wp_enqueue_script('jquery', clbase_get_script('jquery'));
	//wp_enqueue_script('jquery-ui', clbase_get_script('jquery-ui'));
	wp_enqueue_script('bootstrap', clbase_get_script('bootstrap'));
}
add_action('wp_enqueue_scripts', 'clbase_enqueue_scripts');


/*
 * @description Constructs the proper uri for theme's javascript files.
 * @param $name: filename without suffix
 * @param $path: file's path relative to js theme folder.
 * @return full uri of minified or not js file.
 */
function clbase_get_script($name, $path = ''){
	$file = '';
	$path = trim($path, '/');
	$path = empty($path)? '' : '/'.$path;
	if(WP_DEBUG===true){
		$file = get_template_directory_uri() . '/js' . $path . '/' . $name . '.js';
	}
	else{
		$file = get_template_directory_uri() . '/js' . $path . '/' . $name . '.min.js';
	}
	return $file;
}

/*
 * @description Initialize theme
 */
function clbase_setup(){
	load_theme_textdomain('clbase', get_template_directory() . '/languages');
	
	register_nav_menus( array(
		'clbase-top' => __('Top Menu', 'clbase'),
		'clbase-footer'=>__('Footer Menu', 'clbase'),
		'social' => __('Social Links Menu', 'clbase')
		));
	
	// Adds feed links into head section
	add_theme_support('automatic-feed-links');

	// custom header support (header image etc.)
	add_theme_support('custom-header');

	// custom logo support (site-title, site-description etc.)
	//	add_theme_support('custom-logo', array(
	//		'height' => 100,
	//		'width' => 400,
	//		'flex-height' => true,
	//		'flex-width' => true,
	//		'header-text' => array('site-title', 'site-description'),
	//	));

	// Adds post thumbnail support
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(1200, 9999);

	// Adds title tag customization option
	add_theme_support('title-tag');

	// Make the output html5 for the following
	add_theme_support('html5', 
		['search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption']);
	
	// Enable post format support
	add_theme_support('post-formats',
		['aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio'
		'chat']);

}
add_action('after_setup_theme', 'clbase_setup');

function clbase_widgets_init(){
	// Registrer right sidebar
	register_sidebar([
		'name' => __('Right Sidebar', 'clbase'),
		'id' => 'right-sidebar',
		'description' => __('Add widgets here to appear to the sidebar.', 'clbase'),
		'class' => 'col-md-3 hidden-xs hidden-sm',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>']);
	
	register_sidebar([
		'name'=>__('Footer', 'clbase'),
		'id'=>'footer',
		'description'=>__('Add widgets here to appear to the footer.', 'clbase'),
		'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h4 class="footer-widget-title">',
		'after_title' => '</h4>']);
	
	if(true){
		show_admin_bar(true);
	}else{
		show_admin_bar(false);
	}
}
add_action('widgets_init', 'clbase_widgets_init');



?>
