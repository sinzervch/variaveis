<?php

	$nome = "Glaucio";



	function teste()
	{
		global $nome;
		echo $nome . "<br/>";
	}

	function teste2()
	{
		$nome = "Joao";
		echo $nome . " agora no teste2";

	}

	teste();

	teste2();

?>