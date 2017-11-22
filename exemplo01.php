<?php
	$nome = "Danilo";
	$sobrenome = "Dominoni";
	$nomeCompleto = $nome . " " . $sobrenome;	
	echo $nomeCompleto;	
	echo "<br/>";
	unset($nome, $sobrenome, $nomeCompleto); //excluir variáveis

	if (isset($nome)) {
		echo $nomeCompleto;
	}

?>