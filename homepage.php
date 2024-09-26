<!DOCTYPE HTML>
<html>
<?php include("dataconnection.php"); 
session_start();
?>

<head>
<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
	<link rel="stylesheet" href="navigation.css">

<head>
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

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
   height: 3000px;
  background: linear-gradient(141deg, #EBF5F9 0%, #EEF6F9 51%, #CFF2FF 75%);
}

/* Float four columns side by side */
.column {
  float: left;
  width: 22%;
  margin-left:25px;
}

/* Remove extra left and right margins, due to padding */

<!--
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
  transition: .5s ease;
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

img{
 border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;

}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
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
					<a href="show-wishlist.php"><i class="#" aria-hidden="true"></i>WISHLIST</a>
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
				<li><a href="ABOUT_US.php">ABOUT US</a></li>
				<li><a href="product_catogery.php?category=lipstick">LIPSTICK</a></li>
				<li><a href="product_catogery.php?category=eyebrow">EYEBROW</a></li>
				<li><a href="product_catogery.php?category=foundation">FOUNDATION</a></li>
				<li><a href="product_catogery.php?category=mascara">MASCARA</a></li>

			</ul>
		
	 
	</div>
<!--header end-->

	
<div>

			<?php
			
			$result = mysqli_query($connect, "select * from product WHERE product_isDelete=0");	
	         while($row = mysqli_fetch_assoc($result))
				{
				
				?>	
  <div class="column">
    <div class="card">
	<a href="product_detail.php?prod_id=<?php echo $row["product_id"]; ?>">
    <img src="<?php echo $row["img_dir"] ?>" width="200px;">
		<div class="middle">
			<div class="text"><button onclick="document.location='makeorder.php'" style="border:none; background:transparent; cursor:grabbing; padding:20px;">ADD TO CART</button></div>
			</div>
			<p><?php echo $row["product_name"] ?></p>
					<p>RM <?php echo $row["product_price"] ?></p>
			

		</div>
	</a>
    </div>
  </div>
<?php
				
				}		
			
			?>
 
</div>
		<script src="jquery-2.2.4.min.js"></script>
		<script src="plugins.js"></script>
		 <script src="active.js"></script>

</body>
</html>
