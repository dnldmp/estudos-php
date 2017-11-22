<?php
	//TIPOS BÁSICOS
	$nome = "google";
	$site = 'www.google.com';

	$ano = 1990;
	$salario = 5500.99;
	$bloqueado = false;

	//TIPOS COMPOSTOS
	$frutas = array("abacaxi", "uva", "passas");
	echo $frutas[2];

	$nascimento = new DateTime();
	var_dump($nascimento) //mostrar o tipo da variável

	//LEITURA DE ARQUIVOS NO HD
	 $arquivo = fopen("exemplo02.php", "r");
	 var_dump($arquivo);

?>