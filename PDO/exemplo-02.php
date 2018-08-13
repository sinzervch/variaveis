<?php 

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost", "sa", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchall(PDO::FETCH_ASSOC);

foreach($results as $row)
{
	foreach ($row as $key => $value) {
		echo "<strong>".$key.": </strong>".$value."<br/>";
	}
	echo "===============================================<br/>";
}

//$data = new array();

//array_push($data, $results);


 ?>