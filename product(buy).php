<?php include("dataconnection.php"); 
session_start();
?>

<html>
<head>

</head>
<body>


		<?php
		

		    if(isset($_GET["buy"]))
			{
			$pcode = $_GET["procode"];

			$result = mysqli_query($connect, "select * from product where product_id='$pcode'");
			
			$row = mysqli_fetch_assoc($result);
			$pdes=$row["product_description"];
			}
		?>

		<?php if(isset($_SESSION['id']))
		{
			$user=$_SESSION['id'];
			$result=mysqli_query($connect,"SELECT * FROM user where user_id='$user'");
			
			$srow=mysqli_fetch_assoc($result);
			$username=$srow["user_name"];
			echo"<br><br>welcome ---".$username."----";
			echo"<br><a href='logout.php'>LOGOUT</a>";
			
		}
		?>
		
		<h1>Product Detail</h1>
		
		<p>
		<br>Product Code : <?php echo $row["product_id"]?>
		<br>Product Name : <?php echo $row["product_name"]?>
		<br>Product Price : <?php echo $row["product_price"] ?>
		<br>Product Stock : <?php echo $row["product_stock"] ?>

		</p>
		
		<h1>Your Order Detail</h1>

		<form name="purchasefrm" method="post" action="">

			<p>Customer Name:<?php echo $srow["user_name"] ?></p>
			<p>Quantity:<input type="text" name="cust_qty" ></p>

			<p><input type="submit" name="orderbtn" value="Send Order">

		</form>
	
</body>
</html>

<?php



if (isset($_POST['orderbtn'])) 	
{
	$cqty = $_POST["cust_qty"]; 
	
	$pprice = $row["product_price"];  
	$balance = $row["product_stock"] - $cqty;  

	$pname=$row["product_name"];
	$pprice=$row["product_price"];
	
	
	if($balance>=0)
	{
		mysqli_query($connect, "INSERT INTO shopping_cart (product_id,product_name,product_price,product_qty,user_name,user_id,product_des) values 
													('$pcode','$pname','$pprice','$cqty','$username','$user' ,'$pdes')");

		mysqli_query($connect,"UPDATE product SET product_stock='$balance' where product_id='$pcode'");

		header("location:user_product(view).php");
	}
	else
	{
		
		?>
		<script>
		alert("your quantity is more than the stock that we have.Please change.");
		</script>
		<?php
	}
	
}

?>