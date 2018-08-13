<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7teste");

if($error = $conn->connect_error)
{
	echo "Error: " . $error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "jhonathan";
$pass = "senhateste";

$stmt->execute();



 ?>