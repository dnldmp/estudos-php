<?php
	$nome = "Danilo";
	$sobrenome = "Dominoni";
	$nomeCompleto = $nome . " " . $sobrenome;	
	echo $nomeCompleto;  //name
	echo "<br/>";
	unset($nome, $sobrenome, $nomeCompleto); //excluir variáveis

	if (isset($nome)) {
		echo $nomeCompleto;
	}

?>
