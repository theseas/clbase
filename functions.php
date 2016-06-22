<?php
/*
 * Copyright: hypermorph 2016
 */


/*
 * @description Add theme's css files to wp_head for display.
 */
function hmbase_enqueue_styles(){
	wp_enqueue_style("hmbase-main-css", hmbase_get_style('style'));
	wp_enqueue_style("hmbase-bootstrap-css", hmbase_get_style('bootstrap', 'css/bootstrap'));
	wp_enqueue_style("hmbase-bootstrap-theme-css", hmbase_get_style('bootstrap-theme', 'css/bootstrap'));
	//wp_enqueue_style('hmbase-jquery-mobile-css', hmbase_get_style('jquery.mobile-1.4.5', '/css/jquery-mobile/'));
}
add_action('wp_enqueue_scripts', 'hmbase_enqueue_styles');

/*
 * @description Constracts proper URIs for css files minified or not 
 			according to hm_debug flag.
 * @param $name: The filename without suffix.
 * @param $path: relative path of the file in the theme 
 			folder without leading or trailing slashes.
 * @return full uri for the file.
 */
function hmbase_get_style($name, $path = ""){
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
 * @description Add theme's js file in wp_head for display
 */
function hmbase_enqueue_scripts(){
	wp_enqueue_script('hmbase-jquery-js', hmbase_get_script('jquery-2.2.4'));
	//wp_enqueue_script('hmbase-jquery-mobile-js', hmbase_get_script('jquery.mobile-1.4.5'));
	wp_enqueue_script('hmbase-bootstrap-js', hmbase_get_script('bootstrap'));
}
add_action('wp_enqueue_scripts', 'hmbase_enqueue_scripts');


/*
 * @description Constructs the proper uri for theme's javascript files.
 * @param $name: filename without suffix
 * @param $path: file's path relative to js theme folder.
 * @return full uri of minified or not js file.
 */
function hmbase_get_script($name, $path = ''){
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

?>
