<?php 

	function soma(int ...$valores):string { //todos os parametros serão do mesmo tipo : o tipo de retorno

		return array_sum($valores);

	}

	echo soma(2, 2);
	echo "<br>";
	echo soma(25, 33);
	echo "<br>";
	echo soma(1.5, 3);
	echo "<br>";

 ?>