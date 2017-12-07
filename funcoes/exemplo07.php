<?php 

	function soma(int ...$valores){ //todos os parametros serão do mesmo tipo

		return array_sum($valores);

	}

	echo soma(2, 2);
	echo "<br>";
	echo soma(25, 33);
	echo "<br>";
	echo soma(1.5, 3);
	echo "<br>";

 ?>