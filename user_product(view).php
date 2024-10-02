<?php include("dataconnection.php"); 
session_start();
?>

<html>
<head>
<style>


</style>
</head>

<body>
		<?php if(isset($_SESSION['id']))
		{
			$user=$_SESSION['id'];
			$result=mysqli_query($connect,"SELECT * FROM user where user_id='$user'");
			
			$row=mysqli_fetch_assoc($result);
			
			echo"<br><br>welcome ---".$row["user_name"]."----";
			echo"<br><a href='logout.php'>LOGOUT</a>";
			
		}
		?>

		<h1>List of Products</h1>

		<table border="1" width="650px">
			<tr>
				<th>Product id</th>
				<th>Product Name</th>
				<th>Product description</th>
				<th>Product price</th>
				<th>Product category</th>
				<th>Product stock</th>				
				<th></th>
			</tr>

			<?php
			
			$result = mysqli_query($connect, "select * from product WHERE product_isDelete=0");	
	         while($row = mysqli_fetch_assoc($result))
				{
				
				?>			

				<tr>
					<td><?php echo $row["product_id"] ?></td>
					<td><?php echo $row["product_name"] ?></td>
					<td><?php echo $row["product_description"] ?></td>
					<td><?php echo $row["product_price"] ?></td>
					<td><?php echo $row["product_category"] ?></td>
					<td><?php echo $row["product_stock"] ?></td>
					<td><a href="product(buy).php?buy&procode=<?php echo $row['product_id'];?>">buy</a></td>
				</tr>
				<?php
				
				}		
			
			?>

			
			
			
		</table>


	

</body>
</html>
<?php


mysqli_close($connect);
?>
