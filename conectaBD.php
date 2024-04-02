<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "shop";

$mysqli= new mysqli($servername,$username,$password,$database);


	if ($mysqli->connect_errno)
	{
	echo "Falha ao conectar:(" .$mysqli->connect_errno. "(" .$mysqli->connect_errno;
	}
?>
