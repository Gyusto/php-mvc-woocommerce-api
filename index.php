<?php
//require_once('api.php');
//print_r($_SERVER);
 spl_autoload_register(function($class){
 
 	if (file_exists('classes/'.$class.'.php')) {
 		require_once'classes/'.$class.'.php';
 	}
 	else if(file_exists('controllers/'.$class.'.php')){
        require_once 'controllers/'.$class.'.php';
 	}
});
require_once('api.php');


//Route::getID();

?>