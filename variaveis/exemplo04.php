<?php

	$nome = "danilo";

	function teste() {
		global $nome;
		echo $nome;
	}

	function teste2() {
		echo $nome." agora no teste2";
	}
	teste();
	teste2();
?>