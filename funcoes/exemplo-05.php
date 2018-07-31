<?php

	$a = 10;

	function trocaValor(&$a)
	{
		$a += 50;

		return $a;
	}

	var_dump(trocaValor($a));

	echo "<br>";

	var_dump($a);

?>