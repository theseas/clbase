<?php
// Utility functions

/*
 * @description Formats and logs an object
 * @param string	$name	Name of the object	 
 * @param mixed		$obj 	Object to be loged
 */
function hmbase_log($name, $obj){
	$obj_str = print_r($obj, true);
	$obj_str = $name . ': ' .str_replace("\n", '', $obj_str);
	error_log($obj_str);
}

?>
