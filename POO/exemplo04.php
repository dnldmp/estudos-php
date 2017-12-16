<?php 

	class Endereco {

		private $logradouro;
		private $numero;
		private $cidade;

		public function __construct($logradouro, $numero, $cidade){

			$this->logradouro = $logradouro;
			$this->numero = $numero;
			$this->cidade = $cidade;

		}

		public function __destruct(){

			var_dump("destruct");

		}

		public function __toString(){

			return $this->logradouro.", ".$this->numero." - ".$this->cidade;

		}

	}

	$meuEndereco = new Endereco("Rua Mamão", "123", "Curitiba");

	var_dump($meuEndereco);
	
	echo $meuEndereco;


 ?>