<?php

	$anoNascimento = 1990;

	$nome = "Jhonathan";

	$sobrenome = "Sinzervch";

	$nomeCompleto = $nome . " " . $sobrenome;

	echo $nomeCompleto;

	echo "<br/>";

	unset($nomeCompleto);

	if(isset($nomeCompleto))
	{
		echo $nomeCompleto;
	}
?>