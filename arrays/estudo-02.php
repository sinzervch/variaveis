<?php

	$pessoas = array(
		'nome' => 'Joao',
		'idade' => '20',
		'profissao' => array(
			'programador1' => 'iniciante',
			'programador2' => 'senior',
			'programador3' => 'profissional')
	);

	$pessoas = array(
		'nome' => 'Joao',
		'idade' => '20',
		'profissao' => array(
			'1' => 'programador php',
			'2' => 'programador JAVA',
			'3' => 'programador C++')
	);

	echo json_encode($pessoas);

	echo "<br><br>";

	$json = '{"nome":"Joao","idade":"20","profissao":{"1":"programador php","2":"programador JAVA","3":"programador C++"}}';

	$code = json_decode($json, true);

	print_r($code);

?>