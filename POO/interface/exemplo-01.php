<?php

interface Veiculo
{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

Class Civic implements Veiculo
{
	public function acelerar($velocidade)
	{
		echo "O veículo acelerou até " . $velocidade . " Km/h";
	}
	public function frenar($velocidade)
	{
		echo "O veículo frenou até " . $velocidade . " Km/h";
	}
	public function trocarMarcha($marcha)
	{
		echo "O veículo engatou a marcha " . $marcha;
	}
}

$carro = new Civic();

$carro->acelerar(55);

echo "<br>";

$carro->frenar(22);

echo "<br>";

$carro->trocarMarcha(3);

?>