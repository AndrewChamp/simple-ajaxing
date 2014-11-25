<?php

	if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest'):
		header('HTTP/1.1 403 Forbidden');
		exit('Error processing request');
	endif;


	$file = filter_var($_POST['file'], FILTER_SANITIZE_STRING);

	define('INSTALL_DIR', dirname(__FILE__).'/');
	define('SOURCE', $file.'.php');


	if(!isset($file) || !file_exists(INSTALL_DIR.SOURCE)):
		print 'File doesn\'t exist';
	else:
		include(INSTALL_DIR.SOURCE);
	endif;

?>
