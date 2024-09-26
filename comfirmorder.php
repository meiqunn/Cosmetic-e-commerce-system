<?php include("dataconnection.php"); 
session_start();

?>

<html>
<head>
<title>52Hz | Order Summary</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

body {
  font-family: Arial, Helvetica, sans-serif;
 /* background:linear-gradient(50deg, #B0C4DE, #fff);*/
}

.info{text-shadow:1px 2px grey;
		letter-spacing:5px;
		font-style:italic;}
	
.user_info{width:43%;
			height:500px;
			padding-left:14px;
			padding-top:35px;
			margin-top:30px;}

.label{font-size:17px;
		font-weight:bold;
		color:#778899;
		text-shadow:1px 1px #B8860B;}

.user_email{padding:10px;
				text-align:center;
				border-radius:5px;
				width:98%;
				font-style:italic;
				font-size:15px;}

.address_frm{padding:10px;
				text-align:center;
				border-radius:5px;
				width:160px;}

.name_frm{padding:10px;
			text-align:center;
			border-radius:5px;
			width:290px;
			}
				
.change_btn{padding:10px;
			margin-top:40px;
			float:right;
			border:none;
			background:transparent;
			color:#4B0082;
			font-size:20px;
			font-weight:bold;
			letter-spacing:2px;
			margin-left:30px;}
			
.change_btn:hover{text-decoration:overline;
					letter-spacing:4px;
					color:#9FC4B5;
					cursor:grabbing;}

.return_btn{padding:10px;
			margin-top:40px;
			float:right;
			border:none;
			background:transparent;
			color:#191970;
			text-decoration:underline;
			font-size:20px;
			font-weight:bold;
			letter-spacing:2px;}

.return_btn:hover{text-decoration:overline;
					letter-spacing:4px;
					color:#9FC4B5;
					cursor:grabbing;}
		
table {
  margin-top:-500px;
  border-spacing: 0;
  border: none;
  float:right;
  width:50%;
}

th, td {
  
  padding: 16px;
  border:none;
}

.p_name{font-size:20px;
			font-weight:bold;
			color:#000080;}

.p_type_name{color:grey;
				font-size:15px;
				padding-left:5px;
				font-style:italic;}

.p_qty{font-weight:bold;
		}

.p_subtotal{font-weight:bold;
			color:black;}

.subtotal,.shipping{letter-spacing:3px;}

.total{letter-spacing:4px;}

.btnsub{padding:20px;
			border:none;
			box-shadow:1px 1px 2px 3px lightgrey;
			background-color:#F9FFFF;
			color:#696969;
			letter-spacing:1px;
			font-size:18px;
			letter-spacing:5px;
			margin-top:15px;
			margin-right:19px;}
			
.btnsub:hover{background-color:#9AAFC1;
				font-weight:bold;
				letter-spacing:2px;
				cursor:grabbing;
				color:#E9F5FF;
				letter-spacing:7px;
				margin-top:5px;}
				
option{text-align:left;
		padding:5px;}
				
</style>
</head>
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
?>


<body>
	<?php if(isset($_SESSION['id']))
	{
		$user=$_SESSION['id'];
		$result=mysqli_query($connect,"SELECT * FROM user where user_id='$user'");
			
		$row=mysqli_fetch_assoc($result);
			
	}
	?>
		
<div class="user_info">
	<h2 class="info">RECIPIENT CONTACT INFO </h2>
		<form method="get">
		
		<?php 
			$address=mysqli_query($connect,"SELECT * FROM user where user_id='$user'");
			$row_add = mysqli_fetch_assoc($address);
		?>
			
			<p class="label">Recipient  Name</p>
			<div ><input type="text" name="r_name" class="name_frm" value="<?php echo $row_add['user_name']; ?>" required></div>
			
			<p class="label" style="margin-left:350px; margin-top:-75px;">Contact Number</p>
			<div style="margin-left:350px;"><input type="text" name="r_phone" class="name_frm" value="<?php echo $row_add['phone_num']; ?>" pattern="[0-9]{10,11}" title = "Minimum 10 numbers. Maximum 11 numbers" required></div>
			
			<p class="label">Email</p>
			<input type="email" name="email" class="user_email" value="<?php echo $row_add['user_email']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Format : xxx@email.com" autocomplete="off" required>
			
			<p class="label" class="user_address">Address</p>
			<input type="text" name="address" class="user_email" value="<?php echo $row_add["user_address"];?>" required>
						
			<p class="label">Postal Code</p>
			<div ><input type="text" name="postal" class="address_frm" pattern="[0-9]{5}" title="Five Number Postal Code" value="<?php echo $row_add['postal']; ?>" required></div>
			
			<p class="label" style="margin-left:240px; margin-top:-75px;">State</p>
			<div style="margin-left:240px;">
				<select name="state" class="address_frm" required> 
					<option hidden><?php echo $row_add['state']; ?></option>
					<option value="Malacca">Malacca</option>
					<option value="Johor">Johor</option>
					<option value="Selangor">Selangor</option>
				</select>
			</div>
			
			<p class="label" style="margin-left:480px; margin-top:-75px;">City</p>
			<div style="margin-left:480px;">
					<select name="city" class="address_frm" required> 
						<option hidden><?php echo $row_add['city']; ?></option>
						<option value="Ayer Keroh">Ayer Keroh</option>
						<option value="Malim">Malim</option>
						<option value="Kota Laksamana">Kota Laksamana</option>
						<option value="Batu Pahat">Batu Pahat</option>
						<option value="Segamat">Segamat</option>
						<option value="Senai">Senai</option>
						<option value="Petaling Jaya">Petaling Jaya</option>
						<option value="Cheras">Cheras</option>
						<option value="Seri Kembangan">Seri Kembangan</option>
					</select>
				</div>
			
			
			<input type="submit" value="Return to cart" name="return_btn" class="return_btn">
			
</div>

		<table width="800px" style="margin-top:-450px;">
			
		<?php
			
			$result = mysqli_query($connect, "select * from shopping_cart WHERE user_id='$user' and cart_selected=1");
			$no=0;
			$subtotal=0;
	         while($row = mysqli_fetch_assoc($result))
			{
					
				$no++;
				$price = $row["product_price"];
				$total=( $price * $row["product_qty"] );
				$subtotal=$subtotal+$total;
		?>	
		
		<h2 class="info" style="margin-left:800px; margin-top:-478px;">ORDER SUMMARY </h2>
			<tr>
				
				<?php 
					$num=0;
					$r = mysqli_query($connect, "select product_type.*, shopping_cart.* from product_type, shopping_cart WHERE product_type.product_type_id = '$row[product_type_id]' and user_id='$user'");
					$pic = mysqli_fetch_assoc($r);
					
					$num++;
					
				?>
				<td><img src="Admin/working_site/Product_img/<?php echo $pic["img_dir"] ?>" width="150px;"></td>
				
				<td>
					<p class="p_name"><?php echo $row["product_name"] ?> </p>
					<p class="p_type_name"><?php echo $row["product_type_name"] ?></p>
				</td>
				
				<td class="p_qty">
					x<?php echo $row["product_qty"];?>
				</td >
				
				
				<td class="p_subtotal">RM <?php echo number_format($price, 2, '.', ''); ?></td>
				
			</tr>	
					
		<?php
				
				
				}
		?>		
		
			<tr>
				<th colspan="9" align="right" class="subtotal">SUBTOTAL : RM <?php echo number_format($subtotal, 2, '.', ''); ?>
				<p align="left" style="margin-left:490px;">SHIPPING <p style="margin-top:-36px; margin-left:608px; text-align:left;">: FREE</p></p>
			</tr>
			
				<tr>
					
					<th colspan="10" align="right" class="total"><hr><br>	TOTAL: <span style="font-size:25px;">MYR <?php echo number_format($subtotal, 2, '.', ''); ?></span>
					<br><br>
					<input type="submit" class="btnsub" value="PROCEED" name="checkout">
					</th>
				
				</tr>

		</table>
		</form>
</body>
</html>
<?php

if (isset($_GET['return_btn']))
{
	?>
	<script>
		window.location.href="makeorder.php";
	</script>
	<?php
}


if (isset($_GET['checkout']))
{
	$name=$_GET["r_name"];
	$phone=$_GET["r_phone"];
	$add=$_GET["address"];
	$uemail=$_GET["email"];
	$ucity = $_GET['city'];
	$ustate = $_GET['state'];
	$upostal = $_GET['postal'];
	$address=$add.",".$ucity.",".$upostal.",".$ustate;
	
	?>
	
	<script>
		window.location.href="updateinfo.php?userid=<?php echo $user ?>&address= <?php echo $address ?>&name=<?php echo $name ?>&email=<?php echo $uemail ?>&phone=<?php echo $phone ?>";
	</script>
	
	<?php
}
	
mysqli_close($connect);
?>
