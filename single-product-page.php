<!DOCTYPE html>
<html>
<?php include("dataconnection.php"); 
session_start();
?>

<head>
<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/core-style.css">
<link rel="stylesheet" href="navigation.css">

<style>
/* width */
::-webkit-scrollbar {
  width: 15px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #6B858D; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #99CCFF; 
}

img{margin:30px;
	}

<!--buttton-->
{}
		
.c{padding:20px;
		margin-right:20px;
		background:transparent;
		border-radius:5px;
		font-weight:bold;}


.c:hover{background-color:#B3D8F2;
			cursor:grabbing;}
<!--rating -->
body {
  font-family: Arial;
  margin: 0 auto; /* Center website */
  max-width: 800px; /* Max width */
  padding: 20px;
}

.heading {
  font-size: 25px;
  margin-right: 25px;
  margin-left:30px;
  
}

.fa {
  font-size: 25px;
  
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
  
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: center;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 50%;
  }
  .right {
    display: none;
  }
}

.star{margin-left:30px;}

p{margin-left:30px;}
<!--rating end-->

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

function search()
{
	var search_name=document.getElementById("searching").value;
	
	window.location.href = "search.php?search="+search_name;
}

</script>
</head>
<body>
<!--header-->
	<div class="header">
		
		
				
			
			<div class="login">

					
							<button class="cart" style="margin-right:30px;" onclick="document.location='makeorder.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i> CARTS</button>
							
						<div class="dropdown">
							<button class="dropbtn"><?php echo $user_status ;?><i class="fa fa-caret-down" style="margin-left:15px;"></i></button>
							
						<div class="dropdown-content">
						
					
					<a href="javascript:user_status_link();"><?php echo $user_status ;?></a>
					<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
					<a href="#">HELP</a>
					
				  </div>
				</div>
			</div>
			
			<div class="search">
				<input type="text" id="searching" placeholder="Search..."style="width:300px;"><i class="fa fa-search" aria-hidden="true" onclick="search();"style="padding:5px;" ></i>
			</div>

		
			<ul class="nav">
				<li><a href="homepage.php">HOME</a></li> 
				<li><a href="#">CATEGORY</a></li> 
				<li><a href="CONTACT_US.html">CONTACT US</a></li> 
				<li><a href="CONTACT_US.html">ABOUT US</a></li>
				<li><a href="#">LIPSTICK</a></li>
				<li><a href="#">EYEBROW</a></li>
				<li><a href="#">FOUNDATION</a></li>
				<li><a href="#">MASCARA</a></li>

			</ul>
		
	 
	</div>
<!--header end-->
<img src="DIor/Transfer-Proof Liquid Lipstick - Ultra-Pigmented Matte - Weightless Comfort_200-ForeverDream.jpg" alt="lipstick" width="500" height="600">

<div  style="margin-left:700px; margin-top:-500px;">
<h3>DIOR BLA BLA BLA WATERPROOF LIPSTICK</h3>

<form>
COLOR
<input type="button" value="666" style="padding:20px;">
<br><br>
Quantity
<input type="text" >
</form>
<br><br>

<button class="c">ADD TO CART</button>

<button class="c">BUY</button>

</div>
<!--rating-->

<div style="margin-top:300px;">
<span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div class="star">5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div class="star">4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div class="star">3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div class="star">2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div class="star">1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>

</div>
</body>

</html>