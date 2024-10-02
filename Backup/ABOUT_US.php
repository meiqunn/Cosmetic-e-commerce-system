<?php include("dataconnection.php"); 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>52 Hz | About Us</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

body {font-family: Arial, Helvetica, sans-serif;
		}

.nav{margin-top:30px;
	margin-left:100px;
	}

.nav a{text-decoration:none;
		padding:13px;
		font-size:20px;
		color:#0C3252;
		font-weight:bold;
		font-style:italic;
		letter-spacing:2px;
		}	

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
	box-shadow:4px 4px;
	letter-spacing:2px;
	}

.cart:hover{background-color:#BCC6CC;
			box-shadow:2px 2px;
			letter-spacing:3px;
			font-weight:bold;}

.dropbtn {
  background-color: #lightgrey;
  color: brown;
  padding: 20px;
  border: none;
  cursor: grabbing;
    border-radius:10px;
	font-size:16px;
	box-shadow:4px 4px;
	letter-spacing:2px;
}

.dropbtn:hover{background-color:#BCC6CC;
			top:5px;
			left:10px;
			box-shadow:2px 2px;
			letter-spacing:3px;
			font-weight:bold;}

.dropdown {
  position: relative;
  display: inline-block;
  margin-left:-30px;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-size:15px;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}

.login{	float:right;
		margin-top:-20px;
		
		}


.image-container {
  background-image: url("images.jpg");
  background-size: cover;
  position: relative;
  height: 300px;
  margin-top:30px;

}


.text {
  background-color: white;
  color: #7CB2E0;
  font-size: 5vw; 
  font-weight: bold;
  margin: 0 auto;
  padding: 10px;
  width: 50%;
  text-align: center;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  mix-blend-mode: screen;
 
}

/* Float four columns side by side */
.column {
  float: left;
  width: 24%;
  padding: 0 5px;
}

.row {/* margin: 0 -5px;*/
		margin-top:30px;
		}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background:linear-gradient(10deg,#29465B, #98AFC7, #fff);
  color: #EDEFF1;
  margin-bottom:20px;
  border-radius:10px;
  margin-top:10px;
}

.card .fa {font-size:50px;}

th{letter-spacing:2px;}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

th img:hover{animation:shake 0.5s;
			animation-iteration-count: infinite;
			cursor:grabbing;}
			
@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
  
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
?>

				
function user_status_link()
{
	var user_status="<?php echo $user_status;?>";
	if(user_status=="login")
	{
		window.location.href = "login.php";
	}
	else
	{
		window.location.href = "profile.php";
	}
	
}
	
</script>
<body>
<a href="a.php"><img src="logo.png" width="100px;" style="float:left; margin-left:10px; margin-top:-25px;"></a>

<div class="nav">
				<a href="a.php">HOME</a>
				<a href="ABOUT_US.php">ABOUT US</a>
				<a href="product_catogery.php?category=lipstick">LIPSTICK</a>
				<a href="product_catogery.php?category=eyebrow">EYEBROW</a>
				<a href="product_catogery.php?category=foundation">FOUNDATION</a>
				<a href="product_catogery.php?category=eyeshadow">EYESHADOW</a>
				<a href="CONTACT_US.php">CONTACT US</a> 


<div class="login">

	<button class="cart" style="margin-right:90px;" onclick="document.location='makeorder.php'"><i class="fa fa-cart-plus" style="margin-right:5px;"></i> CARTS</button>
							
		<div class="dropdown">
			<button class="dropbtn"><?php echo $user_status ;?><i class="fa fa-caret-down" style="margin-left:5px;"></i></button>
							
				<div class="dropdown-content">
						
					<a href="javascript:user_status_link();"><?php echo $user_status ;?></a>
					<a href="show-wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i>MY WISHLIST</a>
					<a href="#">HELP</a>
					<a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
					
				  </div>
			</div>
</div>
			
</div>


	<div class="image-container">
		
			<div class="text">BORN IN BEAUTY</div>
			
	</div>

<table width="100%" style="margin-top:100px;">

<tr>
		
		<th width="44%"><img src="sean.jpg" width="300px;" style="margin-left:-100px; padding:10px 10px;"></th>
		
		<th colspan="2" style="text-align:left;"><h3>SEAN KHOO CHONG QIN</h3><br>I'm in charge of admin site which to manage our product as well as having responsibility to ensure our product always in stock.</th>
		
		<th></th>
		
				
</tr>
</table>		

<table>			
<tr>
		<th  colspan="2" width="1300px" ><h3>TEY MEI QUN</h3><br>My responsibility is to make our website executed more fluently.Also distribute and guide the work for other collegues.</th>
		<th><img src="mg.jpg" width="300px" style="padding:10px 10px; padding-left:20px; margin-left:100px; margin-right:100px;"></th>
		<th></th>		
</tr>
</table>		


<table>
<tr>
		
		<th width="44%"><img src="yin.jpg" width="300px;" style="margin-left:-100px; padding:10px 10px;"></th>
		<th colspan="2" style="text-align:left;"><h3>KONG ZI YIN</h3><br>We are pleased to receive your suggestion with out website layout as well as any inquiry about our product. We glad to make any changes with our dearest users' opinion.</th>
		<th></th>
				
</tr>		
</table>

	
<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>11+</h3>
      <p>Partners</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>55+</h3>
      <p>Projects</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-smile-o"></i></p>
      <h3>100+</h3>
      <p>Happy Clients</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-coffee"></i></p>
      <h3>100+</h3>
      <p>Meetings</p>
    </div>
  </div>
</div>

</body>
</html>
