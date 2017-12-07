<?php 

	session_id('9rh3pk8idrhqrl53h61k4stlm8');//REUTILIZAR SESSION
	
	require_once("config.php");

	session_regenerate_id();

	echo session_id();

	var_dump($_SESSION);

 ?>