<?php 

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

//$login = "joao";
//$password = "33546543";
$id = 3;

//$stmt->bindParam(":LOGIN", $login);
//$stmt->bindParam(":PASSWORD", $password);
//$stmt->bindParam(":ID", $id);



$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();

echo "Delete OK!";

 ?>