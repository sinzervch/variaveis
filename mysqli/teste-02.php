<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7teste");

if($error = $conn->connect_error)
{
	echo "Error: " . $error;
}

$result = $conn->query("SELECT * FROM tb_usuarios");

while($row = $result->fetch_array())
{
	var_dump($row);
}



 ?>