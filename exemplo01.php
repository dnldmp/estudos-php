<?php
	$nome = "Danilo";
	$sobrenome = "Dominoni";
	$nomeCompleto = $nome . " " . $sobrenome;	
	echo $nomeCompleto;	
	echo "<br/>";
	unset($nome, $sobrenome, $nomeCompleto);

	if (isset($nome)) {
		echo $nomeCompleto;
	}

?>