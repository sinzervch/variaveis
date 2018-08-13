<?php


class Teste
{
	private $varTeste = "teste 123";
	
	public function funcTeste()
	{
		return $this->varTeste;
	}
	
	
	
}

$test = new Teste();

echo $test->funcTeste();




?>