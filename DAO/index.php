<?php 

	require_once("config.php");

	//Carrega um usuário
	//$root = new Usuario();
	//$root->loadById(3);
	//echo $root;

	//Carrega uma lista de usuários
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//Carrega uma lista de usuários buscando pelo login
	//$busca = Usuario::search("jo");
	//echo json_encode($busca);

	//Carrega um usuário usando o login e a senha
	$usuario = new Usuario();
	$usuario->login("root", "12345");
	echo $usuario;

 ?>