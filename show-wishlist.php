<?php
include("dataconnection.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>52 Hz | My Wish List</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<link rel="stylesheet" href="new_nav.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  position:relative;}

.logo{width:150px;}

.nav{margin-top:-60px;
		margin-left:145px;}

		
.login{margin-left:1200px;
		margin-top:-90px;}

.cart{box-shadow:5px 5px black;
		margin-left:15px;
		letter-spacing:1px;
		font-style:italic;
		padding:20px;}
		
.cart:hover{letter-spacing:3px;}

.dropbtn{margin-left:20px;
			box-shadow:5px 5px black;}

.dropdown-content{border-radius:3px;}

a{text-decoration:none;
	padding:5px;}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: none;
  margin-top:10px;
}

th, td {
  
  padding: 16px;
  border:none;
}

tr:nth-child(even) {
  background-color: #F8F8FF;
}

						
.dlt{font-weight:bold;
		letter-spacing:2px;
		font-size:17px;}

.dlt:hover{font-weight:bold;
			letter-spacing:4px;
			color:#573412;
			text-decoration:overline;}
			
.dlt i{color:#000225;}

</style>
</head>
<script>
<?php 
	if(isset($_SESSION['id']))
	{
		$user=$_SESSION['id'];
		$result=mysqli_query($connect,"SELECT * FROM user where user_id='$user'");
						
		$row=mysqli_fetch_assoc($result);
						
		$user_status=$row["user_name"];
						
	}
	else
	{
		$user_status="LOGIN";
						
	}
	mysqli_query($connect, "update shopping_cart set cart_selected=0 WHERE user_id='$user'");//reset all the product in shoppingcart being not selected
?>

</script>
<body>
<?php
if(!isset($_SESSION['id']))
{
	?>
	<script>
		alert("please log in!");
		window.location.href="login.php";
	</script>
	<?php
	
	exit();
}

?>
<!--header-->
	<div class="header">
	
		<div class="logoPic">
			<a href="index.php"><img src="logo.png" class="logo"></a>
		</div>
		

		<div class="login">

			<button class="cart" onclick="document.location='makeorder.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i> CARTS</button>
							
			<div class="dropdown">
			
				<button class="dropbtn"><?php echo $user_status ;?><i class="fa fa-caret-down" style="margin-left:15px;"></i></button>
							
				<div class="dropdown-content">
				
					<a href="profile.php"><?php echo $user_status ;?></a>
					<a href="show-wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i> MY WISHLIST</a>
					<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
					
				 </div>
			</div>
		</div>
		
			<ul class="nav">
				<li><a href="index.php">HOME</a></li> 
				<li><a href="ABOUT_US.php">ABOUT US</a></li>
				<li><a href="product_catogery.php?category=lipstick">LIPSTICK</a></li>
				<li><a href="product_catogery.php?category=eyebrow">EYEBROW</a></li>
				<li><a href="product_catogery.php?category=foundation">FOUNDATION</a></li>
				<li><a href="product_catogery.php?category=eyeshadow">EYESHADOW</a></li>
				<li><a href="CONTACT_US.php">CONTACT US</a></li> 
			</ul>
	 
	</div>
<!--header end-->

<?php 
if(isset($_SESSION['id']))
{
	$user=$_SESSION['id'];
	$result=mysqli_query($connect,"SELECT * FROM user where user_id='$user'");
			
	$row=mysqli_fetch_assoc($result);

}
?>

    <h2 style=" text-shadow:1px 2px grey; letter-spacing:5px; font-style:italic; margin:10px;">My Wishlist</h2>
						<table>
						
				<?php
				$user = $_SESSION['id']; 
  
				$match = "SELECT * FROM wishlist JOIN product on product.product_id=wishlist.pid where uid = '$user'";
				$result = mysqli_query($connect, $match);
			  
				if (mysqli_num_rows($result) > 0) 
				{
					 // output data of each row
					
					 while($row = mysqli_fetch_assoc($result)) 
					 {
						
						?>
						<tr>
							<th></th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Date and Time</th>
							<th>Action</th>
						</tr>
	
						<tr>
							<td>
								<img src="Admin/working_site/Product_img/<?php echo $row["img_dir"] ?>"alt="product picture" width="200">
							</td>
							<td>
								<a href="product_detail.php?prod_id=<?php echo $row["product_id"] ?>">	<span style="font-weight:bold; font-size:18px;"><?php echo $row["product_name"] ?></span></a>
							</td>
							<td>
								RM <?php echo $row["product_price"];?>
							</td>
						 
							<td>
							
							<?php echo date('M j g:i A', strtotime($row["timestamp"]));  ?>		
							</td>
							<td>
								<a href="delete-wishlist.php?prod_id=<?php echo $row["product_id"] ?>&user=<?php echo $_SESSION['id'] ?>"><span class="dlt">
									<i class="fa fa-trash" aria-hidden="true"></i>
									Delete
								</span>
								</a> 
								 
							</td>
						</tr>
					 
					
				<?php
					}
			   } 
			   else 
			   {
				   ?>
				   
				 <p style="text-align:center; margin-top:200px; font-size:25px; font-weight:bold; color:#504A4B;"><?php echo "You haven't add product into your wishlist.";?></p>
				 <?php
			   }
			 
			 
			 ?>
				</table>

</body>
</html>