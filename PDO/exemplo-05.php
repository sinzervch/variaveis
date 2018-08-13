<?php 

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

//$login = "joao";
//$password = "33546543";
$id = 4;

//$stmt->bindParam(":LOGIN", $login);
//$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Delete OK!";

 ?>