<!DOCTYPE HTML>
<html>
<?php include("dataconnection.php"); 
session_start();
?>

<head>
<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Core Style CSS -->
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
  background: linear-gradient(130deg, #FFFAFA 10%, #F5F5F5 30%);
}

.logo{width:200px;}

img{
 border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;

}

th{padding:10px;
	width:300px;

	}

a{text-decoration:none;}

.view_more{margin-left:1350px;
			padding:10px;
			border:2px solid grey;
			font-weight:bold;
			letter-spacing:2px;}
			
.view_more:hover{letter-spacing:5px;}

.time{font-weight:bold;
		color:black;
		padding:8px;
		font-size:17px;}
		
.time i{color:#A5AFAA;}

.break{color:#1E90FF;
		border-width:5px;
		margin-top:20px;}

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
	<div class="logoPic">
		<a href="a.php"><img src="logo.png" class="logo"></a>
	</div>
	
	<div class="header" style="margin-top:-150px;">
		
			<div class="login">

					
							<button class="cart" style="margin-right:30px;" onclick="document.location='makeorder.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i> CARTS</button>
							
						<div class="dropdown">
							<button class="dropbtn"><?php echo $user_status ;?><i class="fa fa-caret-down" style="margin-left:15px;"></i></button>
							
						<div class="dropdown-content">
						
					
					<a href="javascript:user_status_link();"><?php echo $user_status ;?></a>
					<a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
					<a href="show-wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i>MY WISHLIST</a>
					<a href="#">HELP</a>
					
				  </div>
				</div>
			</div>
			
			<div class="search">
				<input type="text" id="searching" placeholder="Search..."style="width:300px;"><i class="fa fa-search" aria-hidden="true" onclick="search();"style="padding:5px;" ></i>
			</div>

		
			<ul class="nav" style="margin-left:30px;">
			
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
  <li><a href="review.php?page=1">To Rate</a></li>
</ul>
</div>


<?php
	//define total number of results you want per page  
    $results_per_page = 3;  
  
    //find the total number of results stored in the database  
	if(isset($_GET['status']))
	{
		$status=$_GET['status'];
		$query = "select *from purchase_history WHERE user_id='$user' and status='$status' group by payment_id";  
	}
	else
	{
		$query = "select *from purchase_history WHERE user_id='$user' group by payment_id";  
	}
    
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
			if(isset($_GET['status']))
			{
				$status=$_GET['status'];
				$result = mysqli_query($connect, "select * from purchase_history WHERE user_id='$user' and status='$status' group by payment_id  LIMIT ".$page_first_result.','.$results_per_page);
	        
			}
			else
			{
				$result = mysqli_query($connect, "select * from purchase_history WHERE user_id='$user' group by payment_id  LIMIT ".$page_first_result.','.$results_per_page);
	        
			}
			
			 while($row = mysqli_fetch_assoc($result))
				{
				 $payid=$row["payment_id"];
					
					
				?>	
				<p class="time">Purchase Time <i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php echo $row["time"];?><span style="margin-left:25px; color:grey;"> Payment ID <i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php echo $row["payment_id"];?></span>
				<span style="margin-left:25px;">Status <i class="fa fa-hand-o-right" aria-hidden="true"></i><?php echo $row["status"];?></p>
				<div style="margin-top:-50px;">
					<a href="view_purchase.php?payid=<?php echo $payid?>"><span class="view_more">view more</span></a>
				</div>
 
		<hr class="break">
		<?php
	$num=mysqli_query($connect, "select product.*,purchase_history.*,product_type.*  from purchase_history , product ,product_type WHERE product_type.product_type_id=purchase_history.product_type_id and product_type.product_id=product.product_id and purchase_history.user_id='$user' and purchase_history.payment_id='$payid'");
	while($rownum = mysqli_fetch_assoc($num))
	{
		if($rownum["product_type_id"]==999)
		{
			$payid=$rownum["payment_id"];
			$c_result = mysqli_query($connect, "select * from customize where payment_id='$payid'");
			$customize= mysqli_fetch_assoc($c_result);
			?>	
		
    <div class="card">
	<a href="product_detail.php?prod_id=<?php echo $rownum["product_id"]; ?>">
  
		<table border="0" width="100%" class="product">
		
			<tr>
				<td> <img src="<?php echo $rownum["img_dir"] ?>" width="200px;" style="background-color:<?php echo $customize['color']?>;padding:0px;"></td>
				
				<td style="font-weight:bold; color:black; letter-spacing:3px;"> <?php echo $rownum["product_name"] ?>
				<p style="color:grey; font-style:italic;">		<?php echo $rownum["product_type_name"] ?></p>
				</td>
				<th style="letter-spacing:2px;"> RM <?php echo $rownum["product_type_price"] ?></th>
				<td style="padding:15px; font-weight:bold; letter-spacing:2px;">x<?php echo $rownum["product_qty"] ?></td>
				<td style="padding:10px; font-weight:bold; text-align:right; letter-spacing:2px;"> RM <?php echo $rownum["product_type_price"]*$rownum["product_qty"] ?></td>
				
			</tr>
		</table>
		
	</a>
    </div>
	
  </div>
  
 
<?php
		}
		else
		{
			?>
			
			 <div class="card">
				<a href="product_detail.php?prod_id=<?php echo $rownum["product_id"]; ?>">
  
		<table border="0" width="100%" class="product">
		
			<tr>
				<td> <img src="<?php echo $rownum["img_dir"] ?>" width="200px;" style="margin-top:19px;"></td>
				
				<td style="font-weight:bold; color:black; letter-spacing:3px;"> <?php echo $rownum["product_name"] ?>
				<p style="color:grey; font-style:italic;">		<?php echo $rownum["product_type_name"] ?></p>
				</td>
				<th style="letter-spacing:2px;"> RM <?php echo $rownum["product_type_price"] ?></th>
				<td style="padding:15px; font-weight:bold; letter-spacing:2px;">x<?php echo $rownum["product_qty"] ?></td>
				<td style="padding:10px; font-weight:bold; text-align:right; letter-spacing:2px;"> RM <?php echo $rownum["product_type_price"]*$rownum["product_qty"] ?></td>
				
			</tr>
		</table>
		
	</a>
    </div>
	
  </div>
  <?php
		}
			
	}
					
				
				}
			}
			
			//display the link of the pages in URL  
			?> 
			<div class="pagination">
			<?php
			if(isset($_GET['status']))
			{
				?>
				<a href="orderhistory.php?page=<?php if(($page-1)>0 ){echo ($page-1);}else{echo $page;}?>&status=<?php echo $status?>">&laquo;</a>
				<?php
				
					
				for($page = 1; $page<= $number_of_page; $page++) 
				{  
				
						?>
						<a href="orderhistory.php?page=<?php echo $page;?>&status=<?php echo $status?>"><?php echo $page;?></a>
						

					<?php
			
				}  
				
				$page=$_GET['page'];
				?>
			
				<a href="orderhistory.php?page=<?php if(($page+1)<=$number_of_page){echo ($page+1);}else{echo $page;}?>&status=<?php echo $status?>">&raquo;</a>
				</div>
				<?php
				
			}
			else
			{?>
				<a href="orderhistory.php?page=<?php if(($page-1)>0 ){echo ($page-1);}else{echo $page;}?>">&laquo;</a>
				<?php
				
					
				for($page = 1; $page<= $number_of_page; $page++) 
				{  
				
						?>
						<a href="orderhistory.php?page=<?php echo $page;?>"><?php echo $page;?></a>
						

					<?php
			
				}  
				
				$page=$_GET['page'];
				?>
			
				<a href="orderhistory.php?page=<?php if(($page+1)<=$number_of_page){echo ($page+1);}else{echo $page;}?>">&raquo;</a>
				</div>
			<?php	
			}
			
			
			?>
			
</div>
	
</body>
</html>