<?php 

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Danilo Dominoni");
	$cad->setEmail("danilodomp@gmail.com");
	$cad->setSenha("123456");

	$cad->registrarVenda();

 ?>