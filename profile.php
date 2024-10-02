<?php 
include("dataconnection.php");
session_start();
?>

<html>


<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>52Hz | My Profile</title>

<style>

body{background:linear-gradient(45deg, #EBF4FA, #F5FFFA);}

.logo{width:120px;}

.nav{margin-top:-60px;
	margin-left:140px;}

.nav a{text-decoration:none;
		padding:20px;
		font-size:20px;
		color:#0C3252;
		font-weight:bold;}	

.nav a:hover{text-decoration:overline;
			letter-spacing:3px;
			font-weight:bold;
			color:#5392C8;}
		
.cart{background-color: #lightgrey;
  color: brown;
  padding: 20px;
  border: none;
  cursor: grabbing;
    border-radius:10px;
	font-size:16px;
	letter-spacing:2px;
	box-shadow:4px 4px #36454F;}

.cart:hover{background-color:#BCC6CC;
			font-weight:bold;
			letter-spacing:3px;
			box-shadow:2px 2px #36454F;
			top:5px;
			left:5px;}

.dropbtn {
  background-color: #lightgrey;
  color: brown;
  padding: 20px;
  border: none;
  cursor: grabbing;
    border-radius:10px;
	font-size:16px;
	letter-spacing:2px;
	box-shadow:4px 4px #36454F;}

.dropdown {
  position: relative;
  display: inline-block;
  margin-left:-30px;}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-size:15px;
  letter-spacing:2px;
  font-weight:bold;
  font-style:italic;}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #BCC6CC;
							font-weight:bold;
							letter-spacing:4px;
							box-shadow:2px 2px #36454F;}

.login{	float:right;
		margin-top:-20px;}

ul li{list-style-type:none;
	padding:20px;
	width:100px;
	margin-left:40px;
	letter-spacing:2px;}

ul li a:hover{letter-spacing:3px;
				cursor:grabbing;
				font-weight:bold;
				color:#5392C8;}
				
input[type]{height:40px; 
			width:350px;
			border-radius:20px;
			border:none;
			background:#F5F5F5;
			padding:25px;
			font-weight:bold;
			font-style:italic;}
			
.state, .city{height:45px; 
		width:350px;
		border-radius:20px;
		border:none;
		background:#F5F5F5;
		font-weight:bold;
		font-style:italic;
		padding-left:20px;
		padding-right:-20px;}

option{font-weight:bold;
		padding:10px;}

input[type=submit]{width:150px;
					color:#033E3E;
					text-align:center;
					font-weight:bold;
					padding:0px;
					margin-top:30px;
					background:#BCC6CC;
					cursor:grabbing;}
					
input[type=submit]:hover{background:#F5FFFA;
							letter-spacing:3px;}
							
a{text-decoration:none;}

p{font-weight:bold;
	letter-spacing:2px;
	color:#566D7E;}
	

</style>

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
?>


</script>
</head>
<body>

<div class="logoPic">
			<a href="index.php"><img src="logo.png" class="logo"></a>
		</div>
		
<div style="background:linear-gradient(90deg, #F5F8FF, #F5FFFA); color:white; height:100px; margin-top:-8px; width:101%; margin-left:-7px;">
	
	<div class="nav">
				<a href="index.php">HOME</a>
				<a href="ABOUT_US.php">ABOUT US</a>
				<a href="product_catogery.php?category=lipstick">LIPSTICK</a>
				<a href="product_catogery.php?category=eyebrow">EYEBROW</a>
				<a href="product_catogery.php?category=foundation">FOUNDATION</a>
				<a href="product_catogery.php?category=eyeshadow">EYESHADOW</a>
				<a href="CONTACT_US.php">CONTACT US</a> 


			<div class="login">

				<button class="cart" style="margin-right:40px;" onclick="document.location='makeorder.php'"><i class="fa fa-cart-plus" style="margin-right:5px;"></i> CARTS</button>
										
					<div class="dropdown" style="margin-right:30px;">
						<button class="dropbtn"><?php echo $user_status ;?><i class="fa fa-caret-down" style="margin-left:5px;"></i></button>
										
							<div class="dropdown-content">
									
								<a href="profile.php"><?php echo $user_status ;?></a>
								<a href="show-wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i>MY WISHLIST</a>
								<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
								
							  </div>
						</div>
			</div>
			
	</div>

</div>
					

<div style=" margin-left:50px; margin-top:20px; font-weight:bold;">
<ul>
	<li><a href="profile.php">My Account</a></li>
		<ul>
		<li>Profile</li>
		<!--<li><a>Bank & Card</a></li>-->
		<li><a href="profile.php#address">Address</a></li>
		<li><a href="change_pass.php" >Change Password</a></li>
		
		</ul>	
	<li><a href="orderhistory.php?page=1">My Purchase</a></li>
</ul>
</div>
<div style="margin-left:400px; background:white; margin-top:-400px; padding:30px; width:800px;">

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

if(isset($_SESSION['id']))
{
	$user_id=$_SESSION['id'];
	$result=mysqli_query($connect,"SELECT * FROM user where user_id='$user_id'");
	
	$row=mysqli_fetch_assoc($result);
	
	echo"<h1>My Profile</h1><hr>";
}

?>

<h3>ACCOUNT INFORMATION</h3>
<form name="login" method="get" >

 <p for="fname"><i class="fa fa-user"></i> User Name</p>
  <input type="text" value="<?php echo $row["user_name"]; ?>" id="fname" name="firstname" placeholder="John M. Doe" style="cursor:not-allowed;" disabled>

<div style="margin-left:450px; margin-top:-105px;">
	<p for="email" ><i class="fa fa-envelope"></i> Email</p>
	  <input type="email" value="<?php echo $row["user_email"]; ?>" id="email" name="email" placeholder="kong@gmail.com" style="cursor:not-allowed;" disabled>
</div>

<p >Mobile Number </p>
	<input type="text" value="<?php echo $row["phone_num"]; ?>" name="phone_num" placeholder="eg:01134567890" pattern="[0-9]{10,11}" title = "Minimum 10 numbers. Maximum 11 numbers." required>

<div style="margin-top:10px;">
	<input type="submit" name="update_btn" value="UPDATE" > 

</div>

<hr>

<h4 id="address" style="text-decoration:none;">ADDRESS DETAILS</h4>


<p for="adr"><i class="fa fa-address-card-o"></i> Address</p>
  <input type="text" id="adr" name="address" placeholder="No 1, Jalan MMU 1, Taman MMU" value="<?php echo $row["user_address"]; ?>" required>

<div style="margin-left:450px; margin-top:-105px;">
	<p for="city"><i class="fa fa-institution"></i> City</p>
	<select name="city" class="city"required> 
					<option hidden><?php echo $row['city']; ?></option>
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

<p for="state">State</p>
  <select name="state" class="state" required> 
					<option hidden><?php echo $row['state']; ?></option>
					<option value="Malacca">Malacca</option>
					<option value="Johor">Johor</option>
					<option value="Selangor">Selangor</option>
				</select>
<div style="margin-left:450px; margin-top:-105px;">
	<p for="zip" >Postal Code</p>
	   <input type="text" id="zip" name="zip" placeholder="75450" value="<?php echo $row["postal"]; ?>" pattern="[0-9]{5}" title="Five Number Postal Code" required>
</div>

<input type="submit" name="update" value="UPDATE">


</div>             
</form>

</div>


</script>
</body>
</html>

<?php 

if(isset($_GET["update_btn"]))
{
	$uphone_num = $_GET['phone_num'];
	mysqli_query($connect,"update user set phone_num='$uphone_num' where user_id='$user_id'");	
	
	?>
	
	<script>
		alert("Update successfully.");
		window.location.href="profile.php";
	</script>
	<?php
	
}

if(isset($_GET["update"]))
{
	$uaddress = $_GET['address'];
	$ucity = $_GET['city'];
	$ustate = $_GET['state'];
	$upostal = $_GET['zip'];
	mysqli_query($connect,"update user set city = '$ucity' where user_id='$user_id'");
	mysqli_query($connect,"update user set state = '$ustate' where user_id='$user_id'");	
	mysqli_query($connect,"update user set postal = '$upostal' where user_id='$user_id'");		
	mysqli_query($connect,"update user set user_address = '$uaddress' where user_id='$user_id'");
	?>
	
	<script>
		alert("Update successfully.");
		window.location.href="profile.php#address";
	</script>
	<?php 
	
}
mysqli_close($connect);
?>