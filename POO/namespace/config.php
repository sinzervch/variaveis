<?php 

spl_autoload_register(function($nomeClass)
{
	$dirClass = "class";
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nomeClass . ".php";

	if(file_exists($filename) === true)
	{
		require_once($filename);
	}


});


?>