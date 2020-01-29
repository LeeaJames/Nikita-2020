<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($classname){
	$path = "classes/";
	$fullpath = $path . $classname . ".php";

	if (!file_exists($fullpath)) {
		echo "Check class names are titled the same as the class file name";
		return false;
	}

	include_once $fullpath;
}

// ------------------------------------------------------- Sanatize function
function escape($string) {
	return htmlentities($string, ENT_QUOTES, 'UTF-8');
}