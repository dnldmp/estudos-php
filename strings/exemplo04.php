<?php 

	$frase =  "A repetição é a mãe da retenção.";
	$palavra = "mãe";

	$q = strpos($frase, $palavra);
	$text = substr($frase, 0, $q);
	$text2 = substr($frase, $q + strlen($palavra), strlen($frase));

	var_dump($text2);


 ?>