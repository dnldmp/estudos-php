<?php 

	# CLASSE PESSOA
	class Pessoa { //SEMPRE COMEÇA COM A PRIMEIRA LETRA MAIÚSCULA

		public $nome; //ATRIBUTO

		public function falar() { //MÉTODO

			return "O meu nome é ".$this->nome; 

		}

	}

	$danilo = new Pessoa();
	$danilo->nome = "Danilo Dominoni";
	echo $danilo->falar();

 ?>