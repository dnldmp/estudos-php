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
	//$usuario = new Usuario();
	//$usuario->login("root", "12345");
	//echo $usuario;

	//criando um novo usuário (insert)
	/*
	$aluno = new Usuario("aluno", "@lun0");
	$aluno->insert();
	echo $aluno;*/

	//Alterar um usuário 
	/*
	$usuario = new Usuario();
	$usuario->loadById(7);
	$usuario->update("danilo", "akdkkksk");
	echo $usuario;*/

	//Deletar um usuário
	$usuario = new Usuario();
	$usuario->loadById(8);
	$usuario->delete();
	echo $usuario;

 ?>