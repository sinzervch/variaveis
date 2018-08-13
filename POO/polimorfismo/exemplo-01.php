<?php

abstract class Animal
{
	public function falar()
	{
		return "Som";
	}

	public function mover()
	{
		return "Move";
	}
}

class Cachorro extends Animal
{

	public function falar()
	{
		return "Late";
	}

}

class Gato extends Animal
{
	public function falar()
	{
		return "Mia";
	}
}

class Passaro extends Animal
{
	public function falar()
	{
		return "Canta";
	}

	public function mover()
	{
		return "Voa e " . parent::mover();
	}
}

$pluto = new Cachorro();

echo $pluto->falar();

echo "<br>";

echo $pluto->mover();

$garfield = new Gato();

echo "<br>";
echo "<br>";

echo $garfield->falar();

echo "<br>";

echo $garfield->mover();

$papagaio = new Passaro();

echo "<br>";
echo "<br>";

echo $papagaio->falar();

echo "<br>";

echo $papagaio->mover();

?>