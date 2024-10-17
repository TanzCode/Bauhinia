<!Doctype html>
<html>
<head>
<title> Form Example PHP </title>
<style type="text/css">
	table{
		margin: 0 auto;
		font-size: large;
		border:1px solid black;
	}
	h1{
		text-align: center;
		color: #AA14F0;
		font-size: xx-large;
		font-family: 'gill Sans', 'Gill Sans Nt', 'Calibri';


	}
	td{
		background-color: #E0B0FF;
		border:1px solid black;

	}
	th,td{
		font-weight: bold;
		border:1px solid black;
		padding:10px;
		text-align: center;

	}
	td{
		font-weight: lighter;

	}
	
</style>
</head>
<body>
<?php 
include_once 'configb.php';
$sql= "select * from inventory";
?>

<h1>Inventory managemnt</h1>

<?php
$sql= "select * from inventory";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0)
	?>
<table border="1">
	<tr>
		<th>Item code</th>
		<th>Item name</th>
		<th>Description</th>
		<th>size</th>
		<th>price</th>
		<th>quantity</th>
		

	</tr>

	<?php
	$i=0;
	while($row=mysqli_fetch_array($result)){
		
	?>
	<tr>
		<td><?php echo $row["itemCode"];?></td>
		<td><?php echo $row["itemNAme"];?></td>
		<td><?php echo $row["description"];?></td>
		<td><?php echo $row["size"];?></td>
		<td><?php echo $row["prize_1"];?></td>
		<td><?php echo $row["quantity"];?></td>
		
		

		<td>
			<!--Re-Correct Update-->
		 <a href="inventory_update.php?itemCode=<?php echo $row["itemCode"]; ?>Update</a>
                    </td>
                    <td>
         <a href="inventory_delete.php?itemCode=<?php echo $row["itemCode"]; ?> Delete</a>
                    </td>
	</tr>
	<?php
		$i++;
		}
	?>
</table>

<?php
	}

else{
		echo "There is no any record";
	}
?>

</body>
</html>