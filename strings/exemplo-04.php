<?php

	$frase = "A repeticao e a mae da retencao";

	$palavra = "mae";

	$q = strpos($frase, "mae");

	$texto = substr($frase, 0, $q);

	var_dump($texto);

	$texto2 = substr($frase, $q + strlen($palavra) + 1, strlen($frase));

	var_dump($texto2);



?>