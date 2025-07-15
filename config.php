<?php

function RootUrl(){

	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
	$host = $_SERVER['HTTP_HOST'];
	$script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
	$script_dir = rtrim($script_dir, '/');

	if ($script_dir === '/') {
		$script_dir = '';
	}

	return $protocol . '://' . $host . $script_dir . '/';

}

?>