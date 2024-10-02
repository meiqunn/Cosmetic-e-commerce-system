<!DOCTYPE HTML>
<html>
<?php include("dataconnection.php"); 
session_start();
?>

<head>
<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Core Style CSS -->
	<link rel="stylesheet" href="new_nav.css">

<head>
<style>


* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
   height: auto;
   margin-bottom:30px;
  background: linear-gradient(130deg, #FFFAFA 10%, #F5F5F5 30%);
}

.logo{width:150px;}

.nav{margin-top:-60px;}

.login{margin-top:-70px;}

img{
 border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;

}

th{padding:10px;
	width:300px;
	color:#2B3856;
	}

a{text-decoration:none;}

.review{border:2px solid grey; 
			padding:10px; 
			letter-spacing:2px;
			color:#151B54;}
			
.review:hover{background:#F5F5F5;
				letter-spacing:5px;}

.time{font-weight:bold;
		color:black;
		padding:8px;
		font-size:17px;
		}				
.time i{color:#A5AFAA;}

.break{color:#1E90FF;}

/*pagination */
.pagination {
  display: inline-block;
  text-align:center;
  margin-top:50px;
}

.pagination a {
  color: #25383C;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  font-weight:bold;
  font-size:20px;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}
		
.view_more{margin-left:137px;
			border:2px solid grey;
			padding:10px;
			cursor:grabbing;
			letter-spacing:2px;
			color:grey;}

.view_more:hover{letter-spacing:5px;
					color:#000621;}

.view{text-align:center;
		text-decoration:none;
		font-weight:bold;
		font-size:20px;
		letter-spacing:2px;
		color:#002618;
		border:2px solid #002618;
		padding:10px;
		cursor:grabbing;}		
		
.view:hover{letter-spacing:5px;
			color:#002126;
			background-color:#B2D4F7;}
			

.snav 
{
	list-style-type: none;
	center:align;
}

.snav li {
  text-decoration:none;
	background-color:white;
	display:inline-block;
	padding:10px;                          
	box-shadow:0px 0px 0px 2px ;
	border-radius:5px;
	margin:1px;
	center:align;
}

.snav li a {
  display: block;
  padding: 8px;
  background-color: white;		
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
<!--header-->
	<div class="logoPic">
		<a href="a.php"><img src="logo.png" class="logo"></a>
	</div>
	
	<div class="header">
		
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
			
			<ul class="nav" >
			
				<li><a href="a.php">HOME</a></li> 
				<li><a href="ABOUT_US.php">ABOUT US</a></li>
				<li><a href="product_catogery.php?category=lipstick">LIPSTICK</a></li>
				<li><a href="product_catogery.php?category=eyebrow">EYEBROW</a></li>
				<li><a href="product_catogery.php?category=foundation">FOUNDATION</a></li>
				<li><a href="product_catogery.php?category=eyeshadow">EYESHADOW</a></li>
				<li><a href="CONTACT_US.php">CONTACT US</a></li> 
				
			</ul>

	</div>
<!--header end-->
<div class="snav">
<ul class="situation" style="margin-left:30px;">
  <li><a href="orderhistory.php?page=1">All</a></li>
  <li><a href="orderhistory.php?page=1&status=pending">To Ship</a></li>
  <li><a href="orderhistory.php?page=1&status=delivery">To Receive</a></li>
  <li><a href="orderhistory.php?page=1&status=arrived">Completed</a></li>
  <li><a href="orderhistory.php?page=1&status=arrived">To Rate</a></li>
</ul>
</div>

<?php
	//define total number of results you want per page  
    $results_per_page = 3;  
  
    //find the total number of results stored in the database  
    $query = "select *from purchase_history WHERE user_id='$user' and status='arrived' group by payment_id"; 
    $result = mysqli_query($connect, $query);  
    $number_of_result = mysqli_num_rows($result);  
  
    //determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
  
    //determine which page number visitor is currently on  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
  
    //determine the sql LIMIT starting number for the results on the displaying page  
	
    $page_first_result = ($page-1) * $results_per_page;  
   
	
			if(isset($_SESSION['id']))
			{
				$user=$_SESSION['id'];
				$result = mysqli_query($connect, "select * from purchase_history WHERE user_id='$user' and status='arrived' group by payment_id  LIMIT ".$page_first_result.','.$results_per_page);
				
				if(mysqli_num_rows($result) > 0)
				{
				?>
				<div>
				<table border="0" width="100%" style="text-shadow:1px 2px #D3D3D3; font-size:17px;">
						
					<tr>
						<th></th>
						<th></th>
						<th style="float:right; margin-left:40px;">Unit Price</th>
						<th>Quantity</th>
						<th>Total Price</th>
						<th></th>
					</tr>
				</table>
				<?php
			
			 while($row = mysqli_fetch_assoc($result))
				{
				 $payid=$row["payment_id"];
					
				?>	
				
  
   <div class="column">
  
		<hr class="break">
	<span class="time">Purchase Time <i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php echo $row["time"];?><span style="margin-left:25px; color:grey;"> Payment ID <i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php echo $row["payment_id"];?></span>
	<p style="margin-left:8px; margin-bottom:-10px;">Status <i class="fa fa-hand-o-right" aria-hidden="true" style="margin-left:68px;"></i><?php echo $row["status"];?><a href="view_purchase.php?payid=<?php echo $payid?>"><span class="view_more">view more</span></a></p>
	<?php
	
	$num=mysqli_query($connect, "select product.*,purchase_history.*,product_type.*  from purchase_history , product ,product_type WHERE product_type.product_type_id=purchase_history.product_type_id and product_type.product_id=product.product_id and purchase_history.user_id='$user' and purchase_history.payment_id='$payid'");
	while($rownum = mysqli_fetch_assoc($num))
	{
		$price = $rownum["product_price"];
		$sub = ( $price * $rownum["product_qty"] );
		
		if($rownum["product_type_id"]==999)
		{
			$payid=$rownum["payment_id"];
			$c_result = mysqli_query($connect, "select * from customize where payment_id='$payid'");
			$customize= mysqli_fetch_assoc($c_result);
			
		?>
				
			<div class="card">
			<a href="customize.php?prod_id=<?php echo $rownum["product_id"]; ?>">
		  
				<table border="0" width="100%" class="product">
				
					<tr>
						<th> <img src="<?php echo $rownum["img_dir"] ?>" width="200px;" style="background-color:<?php echo $customize['color']?>;padding:0px;"></th>
						<th style="font-size:19px;"> <?php echo $rownum["product_name"] ?>
							<p style="color:grey; font-style:italic;">	<?php echo $customize["color"] ?></p>
						</th>
						<th style="font-size:16px;"> RM <?php echo number_format($price, 2, '.', '');?></th>
						<th>x<?php echo $rownum["product_qty"] ?></th>
						<th> RM <?php echo number_format($sub, 2, '.', '');?></th>
						
						<?php 
						
							if($rownum["comment"] == 0)
							{
								?>
								
						<th><a href="leavecomment.php?procode=<?php echo$rownum['product_type_id']?>&purchaseid=<?php echo $rownum['purchase_history_id']?>&color" class="review">REVIEW</a></th>
							<?php
							}
							else
							{
								?>
								<th>PRODUCT HAVE BEEN REVIEWED</th>
								<?php
							}
							?>
					</tr>
				</table>
				
			</a>
			</div>
	
  </div>
  
	
<?php
		} // end line 277
		else
		{
			?>
			
		<div class="card">
		<a href="product_detail.php?prod_id=<?php echo $rownum["product_id"]; ?>">
	  
			<table border="0" width="100%" class="product">
			
			<tr>
				<th> <img src="Admin/working_site/Product_img/<?php echo $rownum["img_dir"] ?>" width="200px;" style="margin-top:19px;"></th>
				<th style="font-size:19px;"> <?php echo $rownum["product_name"] ?>
					<p style="color:grey; font-style:italic;">	<?php echo $rownum["product_type_name"] ?></p>
				</th>
				<th style="font-size:16px;"> RM <?php echo number_format($price, 2, '.', '');?></th>
				<th>x<?php echo $rownum["product_qty"] ?></th>
				<th> RM <?php echo number_format($sub, 2, '.', '');?></th>
				
				<?php 
				
					if($rownum["comment"] == 0)
					{
					?>
						
						<th><a href="leavecomment.php?procode=<?php echo$rownum['product_type_id']?>&purchaseid=<?php echo $rownum['purchase_history_id']?>" class="review">REVIEW</a></th>
					<?php
					}
					else
					{
						?>
						<th style="color:#848B79;">PRODUCT IS REVIEWED</th>
						<?php
					}
					?>
			</tr>
		</table>
		
	</a>
    </div>
	</div>
	<?php
		} // end line 326
	}	// end line 272
				} // end line 258
				
				?>
				<div class="pagination">
				<a href="review.php?page=<?php if(($page-1)>0 ){echo ($page-1);}else{echo $page;}?>">&laquo;</a>
			<?php
			for($page = 1; $page<= $number_of_page; $page++) 
			{  
				?>
				<a href="review.php?page=<?php echo $page;?>"><?php echo $page;?></a>
				 
				<?php
			}  		
				$page=$_GET['page'];
			?>
		
			<a href="review.php?page=<?php if(($page+1)<=$number_of_page){echo ($page+1);}else{echo $page;}?>">&raquo;</a>
			</div>
				<?php
				
			}
			else
			{
				?>
				<p style="text-align:center; margin-top:200px; font-size:25px; font-weight:bold; color:#504A4B;">NO RECORD.</p>
					
				<?php
			}
			
		}
		 
		 
			//display the link of the pages in URL  
			?>
			
			
		
</div>
	
</body>
</html>
