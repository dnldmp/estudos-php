<?php 

	spl_autoload_register(function($nomeClass){

		var_dump($nomeClass);

		$dirClass = "class";
		$filename = $dirClass . DIRECTORY_SEPARATOR . $nomeClass . ".php";

		if (file_exists($filename)){

			require_once($filename);

		}

	});

 ?>