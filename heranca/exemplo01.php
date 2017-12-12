<?php 

	class Documento {

		private $numero;

		public function getNumero(){

			return $this->numero;

		}

		public function setNumero($numero){

			$this->numero = $numero;

		}

	}	

	class CPF extends Documento {

		public function validar():bool{

			//validação do CPF

			return true;

		}

	}

	$doc = new CPF();

	$doc->setNumero("111.164.999-59");

	var_dump($doc->validar());

	echo "</br>";

	var_dump($doc->getNumero());

 ?>