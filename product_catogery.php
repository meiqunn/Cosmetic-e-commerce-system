<!DOCTYPE HTML>
<html>
<?php include("dataconnection.php"); 
session_start();
?>

<head>
<title>52Hz | Product Category</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="new_nav.css">
<head>
<style>

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background: linear-gradient(141deg, #EBF5F9 10%, #EEF6F9 51%, #F5F5F5 75%);
}
	
/* Float four columns side by side */
.column {
  float: left;
  width: 22%;
  margin-left:25px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
*/

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 15px;
  background-color: #f1f1f1;
  margin-top:50px;
  margin-left:30px;
  
}


img {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  opacity: 0;
  padding-left:50px; <!-- to adjust position of cart -->
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  
}


.column:hover img {
  opacity: 0.3;
}

.column:hover .middle {
  opacity: 1;
}

.text {
  background-color: #D3D3D3;
  color: #778899;
  font-size: 13px;
  padding:0;
  border-radius:20px;
  letter-spacing:3px;
  font-weight:bold;
  width:150px;
  text-align:center;
  margin-top:-65px;  <!--to adjust position of cart-->
}

.p_name{text-shadow:1px 1px grey;
		font-weight:bold;
		color:black;}

.p_price{font-size:18px;
			color:#FF4500;
			font-weight:bold;
			font-style:italic;
			text-shadow:3px 1px #EEE8AA;}

.text_cart{font-weight:bold;}

img{
 border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;

}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}

.logo{width:150px;}
			
a{text-decoration:none;
	}			
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

var search_name=document.getElementById("searching").value;
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();

  	window.location.href = "search.php?search="+search_name;
  }
}
</script>
</head>


<body>
				
<!--header-->

		
	<div class="header">
		<div class="logoPic">
		<a href="a.php"><img src="logo.png" class="logo"></a>
		</div>
			
			<div class="login"> 
				<button class="cart" onclick="document.location='makeorder.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i> CARTS</button>
							
					<div class="dropdown" >
						<button class="dropbtn" ><?php echo $user_status ;?><i class="fa fa-caret-down" style="margin-left:15px;"></i></button>
						
							<div class="dropdown-content">
							
								<a href="profile.php"><?php echo $user_status ;?></a>
								<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
								<a href="show-wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i>MY WISHLIST</a>
								<a href="#">HELP</a>
							</div>
						</div>
			</div>
			
			<form class="search">
				<input type="text" id="searching" placeholder="Search..." onfocus="this.value=''" name="search" > 
			</form>

		
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
			if(isset($_GET['category']))
			{
			$category=$_GET['category'];
			$result = mysqli_query($connect, "select * from product WHERE product_isDelete=0 and product_category='$category'");	
	         while($row = mysqli_fetch_assoc($result))
				{
				
				?>	
		<div>
  <div class="column">
    <div class="card">
	<a href="product_detail.php?prod_id=<?php echo $row["product_id"]; ?>">
    <img src="Admin/working_site/Product_img/<?php echo $row["img_dir"]?>"  onerror="this.onerror=null; this.src='Default.png'" width="200px;" style="height:300px;">
		<div class="middle">
			<div class="text"><button onclick="document.location='makeorder.php'" style="border:none; background:transparent; cursor:grabbing; padding:20px;"><span class="text_cart">VIEW DETAILS</span></button></div>
		</div>
			<p class="p_name"><?php echo $row["product_name"] ?></p>
					<p class="p_price">RM <?php echo $row["product_price"] ?></p>
			

		</div>
	</a>
    </div>
  </div>
<?php
				
				}		
			}
			else{
				
			$search=$_GET['search'];
			$result = mysqli_query($connect, "select * from product WHERE product_isDelete=0 and product_name like '%$search%'");
			if(mysqli_num_rows($result)==0 )
			{
				
				echo"<br><br><center style='font-size:30px'>You are searching ".$search."<br>The product you search was not find!Please try again!</center>";
			
			}
			else
			{
				
				echo"<br><br><center style='font-size:30px'>The result are show as below</center>";
	         while($row = mysqli_fetch_assoc($result))
				{
				?>	
		<div>
  <div class="column">
    <div class="card">
	<a href="product_detail.php?prod_id=<?php echo $row["product_id"]; ?>">
    <img src="Admin/working_site/Product_img/<?php echo $row["img_dir"]?>" width="200px;" style="height:300px;">
		<div class="middle">
			<div class="text"><button onclick="document.location='makeorder.php'" style="border:none; background:transparent; cursor:grabbing; padding:20px;"><span class="text_cart">VIEW DETAILS</span></button></div>
		</div>
			<p class="p_name"><?php echo $row["product_name"] ?></p>
					<p class="p_price">RM <?php echo $row["product_price"] ?></p>
			

		</div>
	</a>
    </div>
  </div>
<?php
			}
		}
	}
			
			?>
 
</div>
		

</body>
</html>
