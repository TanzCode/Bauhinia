<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "bauhinia";

//create connection
$conn = new mysqli($servername,$username,$password,$database);
echo "conn"
//check connection
if(!$conn) {
	die ("Connection Failed".$conn->connect_error);
}

echo "Connected Successfully";
?>