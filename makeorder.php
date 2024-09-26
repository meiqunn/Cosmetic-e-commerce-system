<?php include("dataconnection.php"); 
session_start();

?>

<html>
<head>
<title>52Hz | Shopping Cart </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<link rel="stylesheet" href="new_nav.css">
	
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  position:relative;
}

.logo{width:150px;}

.nav{margin-top:-60px;
		margin-left:145px;}

.nav a:hover{padding:20px;
				border-radius:10px;
				margin-left:-20px;}
		
.login{margin-left:1200px;
		margin-top:-90px;}
		
a{text-decoration:none;
	padding:5px;}

.title{text-shadow:2px 2px #FAEBD7;
		font-style:italic;}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: none;
  margin-top:70px;
}

th, td {
  
  padding: 16px;
  border:none;
}

tr:nth-child(even) {
  background-color: #F8F8FF;
}

.pname{font-weight:bold;
		color:#556B2F;}

.type{font-weight:bold;
		color:#008000;}

.price{border:none;
		color:red;
		padding:8px;
		text-align:center;
		font-size:20px;
		font-weight:bold;}
		
.qty_btn{border:none;
			background-color:transparent;
			padding-top:50px;
			font-size:30px;
			margin-right:10px;}
			
.qty_btn:hover{cursor:grabbing;}

.qty_btn_plus{border:none;
				background-color:transparent;
				margin-left:140px;
				}

.plus{font-size:25px;
		margin-top:-50px;
		padding-top:20px;}
		
.plus:hover{cursor:grabbing;}

.qty{border:none;
		border-radius:5px;
		font-weight:bold;
		background-color:#DCDCDC;
		font-size:15px;
		width:47px;
		text-align:center; 
		padding:15px; 
		height:10px;
		margin-bottom:-30px;
		margin-top:30px;
		margin-right:-130px;}

.minus{font-size:30px;
		margin-top:-50px;
		margin-left:-20px;
		padding-top:10px;}

.sub{text-align:right;
		letter-spacing:10px;
		padding-right:50px;
		color:#CD5C5C;}

#subtotal{color:red;}

.checkout_btn{padding:15px;
				font-weight:bold;
				letter-spacing:2px;
				border:none;
				background-color:#F8F8FF;
				color:#808080;
				box-shadow:2px 2px;
				}

.checkout_btn:hover{cursor:grabbing;
						letter-spacing:4px;
						text-decoration:underline;
						background:linear-gradient(10deg, #E6E6FA, #C9DFEC,#fff);
						color:#778899;
						font-weight:bold;
						font-style:italic;}
						
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


function showtotal()
{
	var total=[];
	var subtotal=0;
	var code=[];
	var no=0;
	
	if(document.frm.tick.length==undefined)//if there is only one product in the cart 
	{
		subtotal=parseFloat(document.frm.total.value);
		code=document.frm.tick.value;
		
	}
	
	for(var i=0;i<document.frm.tick.length;i++)
	{
		
		if(document.frm.tick[i].checked==true)
		{
			
			total=parseFloat(document.frm.total[i].value);
			code[no]=document.frm.tick[i].value;
			subtotal=subtotal+total;
			no++;
		}
		
	}
	
	document.getElementById("subtotal").innerHTML=subtotal;
	
	document.getElementById("codeid").value =code;
}



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

			<button class="cart" onclick="document.location='makeorder.php'"><i class="fa fa-cart-plus"></i> CARTS</button>
							
			<div class="dropdown">
			
				<button class="dropbtn"><?php echo $user_status ;?><i class="fa fa-caret-down" style="margin-left:10px;"></i></button>
							
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

<?php if(isset($_SESSION['id']))
{
	$user=$_SESSION['id'];
	$result=mysqli_query($connect,"SELECT * FROM user where user_id='$user'");
			
	$row=mysqli_fetch_assoc($result);

}
?>


	<?php
			
		$result = mysqli_query($connect, "select * from shopping_cart WHERE user_id='$user'");
		$no=0;
		$subtotal=0;
		?>
		
		<?php
		if(mysqli_num_rows($result) > 0)
		{
			?>
			
			<form name="frm" method="GET">
			<table border="1" width="800px">
				<tr class="title">
				
					<th></th>
					<th>No</th>
					<th>Product picture</th>
					<th>Product Name</th>
					<th>Product type</th>
					<th>Unit price</th>
					<th>Quantity</th>
					<th>Total (RM)</th>
					<th>Action</th>
						
				</tr>
			<?php
			
			while($row = mysqli_fetch_assoc($result))
			{
						
				$no++;
				$total=($row["product_price"] * $row["product_qty"]);
								
		?>		
				<tr>
					<td><input type="checkbox" name="tick" onclick="showtotal();" value="<?php echo $row["product_type_id"]?>"></td>
					<td style="font-weight:bold; color:#556B2F;"> 
						<?php echo $no; ?>
						<input type="hidden" name="custId" value="<?php echo $row["shopping_cart_id"] ?>">
					</td>
					
					<?php 
						$num=0;
						$r = mysqli_query($connect, "select product_type.*, shopping_cart.* from product_type, shopping_cart WHERE product_type.product_type_id = '$row[product_type_id]' and user_id='$user'");
						$pic = mysqli_fetch_assoc($r);
					
						$num++;
						
					?>
					<td><img src="Admin/working_site/Product_img/<?php echo $pic["img_dir"]?>" width="150px;"></td>
				
					<td class="pname"><?php echo $row["product_name"] ?></td>
					<td class="type"><?php echo $row["product_type_name"]?></td>
					<td class="price">RM <?php echo $row["product_price"]?></td>
					
					<td align="center">
						<div style="margin-top:-53px;">
							<button class="qty_btn" onclick="window.location.href='update_cart_qty.php?qty-&pqty=<?php echo $row['product_qty'];?>&num=-1&procode=<?php echo $row['shopping_cart_id'];?>'">-</button>
							<input class="qty" type="text" name="qty" value="<?php echo $row["product_qty"]?>" disabled>
							<span class="qty_btn_plus" >			
								<button style="font-size:25px; margin-top:-35px; border:none; background-color:transparent; cursor:grabbing;"onclick="window.location.href='update_cart_qty.php?qty+&pqty=<?php echo $row['product_qty'];?>&num=+1&procode=<?php echo $row['shopping_cart_id'];?>'">+</button>
							</span>
						</div>
					</td>
					
					<td class="price"><input class="price" name="total" size="10px" value="<?php echo number_format($total, 2, '.', '');?>" disabled></td>
					
					<td>
						<a  class="action"  href="makeorder.php?del&procode=<?php echo $row['shopping_cart_id'];?>" onclick="return confirmation();">
							<span class="dlt">
								<i class="fa fa-trash" aria-hidden="true"></i>
								Delete
							</span>
						</a>
					</td>
				
				</tr>	
						
			
					
			<?php
					
			} // end line 274
			
			?>
			
			
			<tr>
				<th colspan="9" class="sub"><span style="font-size:20px;">SUBTOTAL: RM  </span><span id="subtotal" style="font-size:20px;">0  </span> 
					<input type="hidden" id="codeid" name="codeid" >
					<br>
					<p><input type="submit" name="selected" value="CHECKOUT" class="checkout_btn"></p>
				</th>
			</tr>
				
			<?php
		}
		else 
		{
			?>
			 <h2 style=" text-shadow:1px 2px grey; letter-spacing:5px; font-style:italic; margin:10px;">My Shopping Cart</h2>
				<p style="text-align:center; margin-top:200px; font-size:25px; font-weight:bold; color:#504A4B;"><?php echo "You haven't add any product into your shopping cart.";?></p>
			<?php
		}
			 
			 
			 ?>	
			
	</table>
</form>
</body>
</html>
<?php
						
if (isset($_GET['del'])) 
{
	$cart=$_GET["procode"];//shippingcart_id
	mysqli_query($connect,"Delete from shopping_cart where shopping_cart_id='$cart'");
	?>
	
	<script>
		alert("Product Delete Successfully!");
		window.location.href="makeorder.php";
	</script>
	
	<?php
}


if (isset($_GET['selected']))
{

	
	$pcode=$_GET["codeid"];//type_id 
	if(strpos($pcode,',')!==false)
	{
		mysqli_query($connect, "update shopping_cart set cart_selected=1 WHERE user_id='$user' and product_type_id in($pcode)");

	}
	else
	{
		mysqli_query($connect, "update shopping_cart set cart_selected=1 WHERE user_id='$user' and product_type_id =$pcode");
	}
	
	$try = mysqli_query($connect, "select * from shopping_cart WHERE user_id='$user' and cart_selected = 1 ");
	
	if(mysqli_num_rows($try) > 0)
	{
		?><script>window.location.href="comfirmorder.php";</script><?php
		
	}
	else
	{
		?>
		<script>alert("Cannot proceed! You need to select at least one product to checkout.");</script>
		<?php
	}
	
	
	  
}




mysqli_close($connect);
?>
