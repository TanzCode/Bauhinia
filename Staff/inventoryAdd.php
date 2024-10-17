<?php

include 'config.php';



$itemCode = $_POST["itemCode"];
$itemName = $_POST["itemName"];
$description = $_POST["description"];
$size=$_POST["size"];
$quantity=$_POST["quantity"];


 
$sql = "insert into inventory(itemCode, itemName, description, size,quantity )  values('$itemCode', '$itemName', '$description', '$size','$quantity')";



if(mysqli_query($conn, $sql)){
	echo "<h3>data stored in the database successfully.</h3>";

}
else
{
	echo( "ERROR : Hush! SORRY $sql. ".mysqli_error($conn));

}

mysqli_close($conn);

?>

