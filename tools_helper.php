<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function debug($var){
	echo "<pre>";
	print_r($var);
	echo "</pre>";
}

function diebug($var){
	debug($var).die;
}
