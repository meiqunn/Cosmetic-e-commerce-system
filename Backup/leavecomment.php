<!DOCTYPE HTML>
<html>
<?php include("dataconnection.php"); 
session_start();
?>
<head>
<title>52 Hz | Leave Review</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>
<link rel="stylesheet" href="new_nav.css">
<style>

.logo{width:150px;}

.nav{margin-top:-50px;
		margin-left:180px;}

.login{margin-top:-90px;}

a{text-decoration:none;}
		
th{padding:10px;}		

td{padding:15px;
	color:grey;
	font-style:italic;}

table, td, th{border:2px solid #A6BDCE;}

/*rating*/

.rating {
  border: 2px solid #ccc;
  background-color:transparent;
  border-radius: 5px;
  padding: 16px;
  
}

.rating img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.rating span {
  font-size: 20px;
  margin-right: 15px;
}

.review_frm{background-color:#F2F2F2; 
			float:left; 
			padding:50px; 
			padding-right:0px;
			width:100%;	
			margin-bottom:20px;
			margin-top:100px;}
			
.review_frm input {padding:13px;
					font-size:18px;
					text-align:center;
					border-radius:3px;
				}
					
textarea{padding:5px;
			border-radius:3px;
			border:2px solid black;
			font-size:15px;}
					
.review_btn{padding:10px;
			letter-spacing:3px;
			cursor:grabbing;
			width:90%;}
			
.review_btn:hover{background-color:#F0FFFF;
					font-weight:bold;
					letter-spacing:5px;}
					
/* The Modal (background) */
.modal {
  display:none; /* Hidden by default */
  padding-top: 150px; /* Location of the box */
  
  
}

/* Modal Content */
.modal-content {
  margin: auto;
  padding: 20px;
}

.cus_name{width:84%;}
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
<div class="header">
	
		<div class="logoPic">
			<a href="a.php"><img src="logo.png" class="logo"></a>
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
			<li><a href="a.php">HOME</a></li> 
			<li><a href="ABOUT_US.php">ABOUT US</a></li>
			<li><a href="product_catogery.php?category=lipstick">LIPSTICK</a></li>
			<li><a href="product_catogery.php?category=eyebrow">EYEBROW</a></li>
			<li><a href="product_catogery.php?category=foundation">FOUNDATION</a></li>
			<li><a href="product_catogery.php?category=eyeshadow">EYESHADOW</a></li>
			<li><a href="CONTACT_US.php">CONTACT US</a></li> 
		</ul>
		
	 
	</div>
<?php if(isset($_SESSION['id']))
		{
			$user=$_SESSION['id'];
			$name_result = mysqli_query($connect, "select * from user WHERE user_id='$user' ");
	        $name = mysqli_fetch_assoc($name_result);
			if(isset($_GET['procode']))
			{
				$code=$_GET['procode'];
			}
			if(isset($_GET['purchaseid']))
			{
				$pid=$_GET['purchaseid'];
			}
			
			
			$result=mysqli_query($connect, "select purchase_history.*,product.*,product_type.* from purchase_history ,product,product_type WHERE  product_type.product_id=product.product_id and product_type.product_type_id=purchase_history.product_type_id and purchase_history.user_id='$user' and purchase_history.product_type_id='$code' and purchase_history.purchase_history_id='$pid'");
			
			while($row = mysqli_fetch_assoc($result))
			{
			if($row['comment']!=0)
			{
				
				?>
				<script>
					alert("You already leave a  review!");
					window.location.href = "review.php?page=1";
				</script>
				<?php
				
			}
			else
			{
			
?>

<table border="1" style="margin-top:100px; border-collapse: collapse; margin-left:50px; font-size:20px;">
	<tr>
		<th></th>
		<th><img src="<?php echo $row["img_dir"] ?>" width="200px;" class="pro_img"></th>
	</tr>
	<tr>
		<th>PRODUCT NAME</th>
		<td><?php echo $row["product_name"] ?></td>
	</tr>	
	<tr>
		<th>PRODUCT TYPE</th>
		<td><?php echo $row["product_type_name"] ?></td>
	</tr>	
		
</table>

					<div style="display:inline-block; float:right; margin-top:-500px; margin-right:200px;">
					<form id="modal-content" name="review_frm" class="review_frm" method="post">
						<p style="font-weight:bold; font-size:25px; letter-spacing:3px; text-shadow:2px 1px grey; margin-top:-30px;">Comment</p>
						<p style="font-weight:bold; font-size:24px; letter-spacing:3px; text-shadow:2px 1px grey;">NAME</p>
							<input type="text" name="cus_name" class="cus_name" value="<?php echo $name['user_name']?>" required>
						<p style="font-weight:bold; font-size:24px; letter-spacing:3px; text-shadow:2px 1px grey;">REVIEW</p>
							<textarea rows="9" cols="50" name="cus_review" placeholder="Enter Your Review " required></textarea>	
							<br><br>
					
					<br>

						<input type="submit" value="SUBMIT REVIEW" name="review_btn" class="review_btn" width="700px;">
					</form>	
				  
				</div>


<?php 
			
if(isset($_POST["review_btn"]))
{
	$cname = $_POST['cus_name'];
	$creview = $_POST['cus_review'];
	$typeid=$row["product_type_name"];
	$prod_id=$row["product_id"];
	mysqli_query($connect,"INSERT INTO customer_review (customer_name,product_type_name,review,product_id) values ('$cname','$typeid','$creview','$prod_id')");
	mysqli_query($connect,"Update purchase_history set comment=1 where purchase_history_id='$pid'");
	?>
	<script>
		alert("Review sent successfully.");
		window.location.href="review.php?page=1";
	</script>
	<?php
}
			}
			
		}
			
		}
			?>

</body>
</html>
