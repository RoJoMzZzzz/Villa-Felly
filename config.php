<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbVillaFelly";

$conn = mysqli_connect($servername, $username, $password, $database) or die(mysqli_error());   
if(!$conn){
	echo "NO DATABASE SELECTED";
}


?>