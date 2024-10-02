<?php include("dataconnection.php"); 
session_start();
?>

<html>
<head>
<title>52 Hz | View Order History</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.logo{width:150px;}

h1{margin-top:-100px;
	text-shadow:1px 2px black;
	letter-spacing:2px;
	color:#566D7E;}
	
.pro_img{padding:10px;}

.download_btn{font-size:25px; 
				margin-left:500px; 
				margin-top:-70px; 
				padding:10px; 
				background:#607788;
				width:300px;}

.download_btn:hover{background:#B0C7D8;
					font-weight:bold;
					letter-spacing:3px;}

.download_a{text-decoration:none; 
			color:white;
			letter-spacing:1px;
			text-shadow:1px 2px black;}

.download_a:hover{color:black;
					text-shadow:grey;}
</style>
</head>
<script>

</script>

<body>
	<div class="logoPic">
		<a href="index.php"><img src="logo.png" class="logo"></a>
	</div>

		<?php 
		 if(isset($_GET['payid']))
		 {
			 $payid=$_GET['payid'];
		 }
		if(isset($_SESSION['id']))
		{
			?>
			
			<h1><center>Purchase Detail</center></h1>
			
			
			<?php
			$user=$_SESSION['id'];
			$result = mysqli_query($connect, "select * from purchase_history WHERE user_id='$user' and payment_id='$payid'");
	        $row = mysqli_fetch_assoc($result);
					
			$user_result= mysqli_query($connect, "select user.* ,shipping.* ,payment.* from user,shipping,payment WHERE user.user_id='$user' and payment.payment_id='$payid' and payment.shipping_id=shipping.shipping_id");
			$user_row = mysqli_fetch_assoc($user_result);

			?>	
			<div style="display:inline-block;margin-left:580px;" align="center">
				<p style="font-size:18px; font-weight:bold; font-style:italic;">
					<?php echo "Purchase Date & Time : ".$row["time"];?>
				</p>
				<p style="font-size:18px; font-weight:bold; font-style:italic; ">
					<?php echo "PAYMENT ID : ".$row["payment_id"]; ?>
				</p>
			</div>
			
			<div align="center" style="letter-spacing:3px;">
				<b><span style=" color:#7D6655;">Shipping Details<span></b>
				<p>Recipient Name : <?php echo $user_row["recipient_name"] ;?></p>
				<p>Recipient Email : <?php echo $user_row["recipient_email"] ;?></p>
				<p>Recipient Phone : <?php echo $user_row["recipient_phone"] ;?></p>
				<p>Shipping Address : <?php echo $user_row["address"] ;?></p>
			</div>
	
<br><hr>
<br>
	<div class="column" style="display:block;">
  
	<?php 
		$subtotal=0;
		$num=mysqli_query($connect, "select purchase_history.*,product.*,product_type.* from purchase_history ,product,product_type WHERE  product_type.product_id=product.product_id and product_type.product_type_id=purchase_history.product_type_id and purchase_history.user_id='$user' and purchase_history.payment_id='$payid'");
		while($rownum = mysqli_fetch_assoc($num))
		{
			$price = $rownum["product_type_price"];
			$total = $price*$rownum["product_qty"];
			$subtotal+=$total;
			
		if($rownum["product_type_id"]==999)
		{
			$payid=$rownum["payment_id"];
			$c_result = mysqli_query($connect, "select * from customize where payment_id='$payid'");
			$customize= mysqli_fetch_assoc($c_result);
			?>
			<div class="card">
			<a href="customize.php">
					<div style="float:left"  >
						<img src="<?php echo $rownum["img_dir"] ?>" style="background-color:<?php echo $customize['color']?>;padding:0px;" width="150px;" class="pro_img">
					</div>
						
					<div style="display:inline-block; padding-left:20px;">
						<p style="font-weight:bold; color:#102738; letter-spacing:2px;"><?php echo $rownum["product_name"] ?></p>
						<p style="color:#221038;">Product type : <?php echo $customize["color"] ?></p>
						<p style="color:#221038;">Quantity : <?php echo $rownum["product_qty"] ?></p>
						<p style="color:#221038;">Unit Price: RM <?php echo number_format($price, 2, '.', ''); ?></p>
						<p style="color:#221038;">Subtotal : RM <?php echo number_format($total, 2, '.', ''); ?></p>
					</div>
				</a>
			</div>
		</div>
	  <br>
  <?php
		}
		else
		{
		?>
		<div class="card">
			<a href="product_detail.php?prod_id=<?php echo $rownum["product_id"]; ?>">
				<div style="float:left">
					<img src="Admin/working_site/Product_img/<?php echo $rownum["img_dir"] ?>" onerror="this.onerror=null; this.src='Default.png'" width="150px;" class="pro_img">
				</div>
					
				<div style="display:inline-block; padding-left:20px;">
					<p style="font-weight:bold; color:#102738; letter-spacing:2px;"><?php echo $rownum["product_name"] ?></p>
					<p style="color:#221038;">Product type : <?php echo $rownum["product_type_name"] ?></p>
					<p style="color:#221038;">Quantity<span style="margin-left:30px;"> :</span> <?php echo $rownum["product_qty"] ?></p>
					<p style="color:#221038;">Unit Price<span style="margin-left:23px;"> :</span> RM <?php echo number_format($price, 2, '.', ''); ?></p>
					<p style="color:#221038;">Subtotal <span style="margin-left:31px;"> :</span> RM <?php echo number_format($total, 2, '.', ''); ?></p>
				</div>
			</a>
		</div>
	</div>
  <br>
<?php
		}
				}
			}				
			
			?>
			<b><p style="font-size:28px; font-weight:bold; letter-spacing:2px; padding-left:20px;">Total : RM <?php echo number_format($subtotal, 2, '.', ''); ?></p></b>

			<button class="download_btn">
				<a href="pdf.php?payid=<?php echo $payid;?>" class="download_a"><i class="fa fa-download"></i> Download</a>
			</button>
</body>
</html>




