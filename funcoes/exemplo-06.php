<?php

	$pessoa = array(
		'Nome' => 'João',
		'Idade' => 20
	);

	foreach ($pessoa as &$value) {
		
		if(gettype($value) === 'integer') $value += 10;

		echo $value.'<br>';
	}

	print_r($pessoa);

?>