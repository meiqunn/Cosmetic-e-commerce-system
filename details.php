<!DOCTYPE html>
<html>
<head>
<?php include("dataconnection.php"); ?>
</head>
<body>
<h1>Products Details</h1>
<?php
	if(isset($_GET['view']))
	{
		$pcode = $_GET["procode"];
		$result = mysqli_query($connect, "SELECT * from product WHERE product_id = '$pcode'");
		$row = mysqli_fetch_assoc($result);
		
		echo "<br><b>Product ID</b></br>";
		echo $row["product_id"];
		
		echo "<br><b>Product Name</b></br>";
		echo $row["product_name"];
		
		echo "<br><b>Product Description</b></br>";
		echo $row["product_description"];
		
		echo "<br><b>Product Price</b></br>";
		echo $row["product_price"];
		
		echo "<br><b>Product Category</b></br>";
		echo $row["product_category"];
		
		echo "<br><b>Product Stock</b></br>";
		echo $row["product_stock"];
		
	}
?>
<div>
</div>
</body>
</html>

