<?php 

	$name = "images";

	if (!is_dir($name)) {

		mkdir($name);
		echo "Diretório $name criado com sucesso";

	} else {

		rmdir($name);
		echo "Já exite o diretório: $name foi 	removido";

	}

 ?>