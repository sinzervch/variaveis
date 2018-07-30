<?php

	function ola($texto = "Mundo", $periodo = "Bom dia")
	{
		return "Olá $texto! $periodo<br>";
	}

	echo ola();
	echo ola("Terra", "Boa noite");
	echo ola("Marte", "Boa madrugada");
	echo ola("Saturno");
	echo ola("Terráqueo");

?>