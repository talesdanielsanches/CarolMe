<?php
	
	$autoload = function($class){
		if($class == 'Email'){
		include('classes/'.$class.'.php');
		}
	};

	spl_autoload_register($autoload);

	define('INCLUDE_PATH','http://localhost/CarolME_Local/');

?>