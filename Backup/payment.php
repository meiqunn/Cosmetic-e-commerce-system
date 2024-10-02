<?php include("dataconnection.php"); 
session_start();


?>

<html>
<head>
<title>52 Hz | Payment</title>
</head>
<style>
    .cc-img {height: 200px;
			width: 500px;
			padding:10px;}
	
	h1{color:grey;
		font-style:italic;
		}
	
	.label{font-weight:bold;
			text-shadow:1px 2px grey;
			padding:10px;}
			
  .card_input{padding:10px;
				text-align:center;
				width:35%;
				font-size:17px;}
	
	.input-group{padding:10px;}
	
	.cv{margin-left:280px;
		margin-top:-85px;}
		
	.input{padding:10px;
			text-align:center;
			width:240px;
			font-size:17px;}
			
	input{border:1px solid #2B1B17;
			box-shadow:1px 2px 1px 2px grey;
			border-radius:5px;}
	
	.submit_btn{padding:10px;
					box-shadow:2px 2px powerblue;
					cursor:grabbing;
					margin:10px;
					margin-left:340px;
					margin-top:19px;
					letter-spacing:3px;
					color:#151B54;}	
					
	.submit_btn:hover{font-weight:bold;
						font-size:15px;
						text-shadow:2px 1px grey;
						background-color:#FFE6E8;}
						
			
table {
  margin-top:-570px;
  margin-right:50px;
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

.subtotal,.shipping{letter-spacing:2px;}

.total{letter-spacing:4px;}

.info{text-shadow:1px 2px grey;
		letter-spacing:5px;
		font-style:italic;}
</style>
<body>
<?php if(isset($_SESSION['id']))
	{
		$user=$_SESSION['id'];
		$result=mysqli_query($connect,"SELECT * FROM user where user_id='$user'");
			
		$row=mysqli_fetch_assoc($result);
			
	}
	?>
	
	<h2 class="info" style="margin-top:50px;">PAYMENT DETAILS </h2>
	<h2 class="info" style="margin-left:730px; margin-top:-45px; padding-bottom:40px;"><a href="comfirmorder.php" style="text-decoration:none; color:black;">ORDER SUMMARY </a></h2>
	
	
	<img class="img-responsive cc-img" src="https://www.nicepng.com/png/full/54-542683_credit-card-pay-now-visa-and-mastercard-accepted.png" style="margin-top:-30px;">

<form name="payment_form">	
      
     <label class="label">CARD NUMBER</label>
        <div  class="input-group">
			<input type="tel" name="card" id="card" class="card_input" maxlength="19" placeholder="xxxx xxxx xxxx xxxx"  autocomplete="off" required/>
		</div>
	
	<script>
			document.querySelector('#card').addEventListener('keydown', (e) => {
			e.target.value = e.target.value.replace(/(\d{4})(\d+)/g, '$1 $2')
		})
		/* Jquery */
		$('#card').keyup(function() {
		  $(this).val($(this).val().replace(/(\d{4})(\d+)/g, '$1 $2'))
		});
	</script>
	
	 <label class="label">CARD OWNER</label>
			<div class="input-group">
				<input type="text" name="cname" class="card_input" placeholder="Kong Zi Yin" pattern="[a-zA-Z]{1,30}" title="Character only" autocomplete="off" required>
			</div>       
			
	 <label class="label">EXPIRATION DATE</label>
		<div class="input-group">
			<input type="month" class="input" name="exp" min="2022-01" placeholder="MM / YY" required/>
		</div>
	<div class="cv">	 
		<label class="label">CV CODE</label>
			<div class="input-group">
				<input type="tel" name="cv" class="input" placeholder="xxx" minlength="3" maxlength="3" autocomplete="off" pattern="[0-9]{1,3}" title="Three Number CV Code" required/>
			</div>                  
	</div>
	
	<input type="submit" name="btn" class="submit_btn" value="SUBMIT PAYMENT">
 </form>
 
            	<table border="1" width="800px">
			
		<?php
			
			$result = mysqli_query($connect, "select * from shopping_cart WHERE user_id='$user' and cart_selected=1");
			$no=0;
			$subtotal=0;
	         while($row = mysqli_fetch_assoc($result))
			{
					
				$no++;
				$total=($row["product_price"]*$row["product_qty"]);
				$subtotal+=$total;
		?>	
		
			<tr>
				
				<?php 
					$num=0;
					$r = mysqli_query($connect, "select product_type.*, shopping_cart.* from product_type, shopping_cart WHERE product_type.product_type_id = '$row[product_type_id]' and user_id='$user'");
					$pic = mysqli_fetch_assoc($r);
					
					$num++;
					
				?>
				<td><img src="<?php echo $pic["img_dir"] ?>" width="150px;"></td>
				
				<td>
					<p class="p_name"><?php echo $row["product_name"] ?> </p>
					<p class="p_type_name"><?php echo $row["product_type_name"] ?></p>
				</td>
				
				<!--<td name="price"></td>-->
				
				<td class="p_qty">
					x<?php echo $row["product_qty"];?>
				</td >
				
				
				<td class="p_subtotal">RM <?php echo $row["product_price"] ?></td>
				
			</tr>	
					
		<?php
				
				
				}
		?>		
		
			<tr>
				<th colspan="9" align="right" class="subtotal">SUBTOTAL : RM <?php echo number_format($subtotal, 2, '.', ''); ?>
				<p align="left" style="margin-left:530px;">SHIPPING <p style="margin-top:-38px; margin-left:628px; text-align:left;">: FREE</p></p>
			</tr>
				
				<tr>
					
					<th colspan="10" align="right" class="total"><hr><br>	TOTAL: <span style="font-size:25px;">MYR <?php echo number_format($subtotal, 2, '.', ''); ?></span>
					</tr>
</body>
</html>
<?php

if(isset($_SESSION['id']))
{
	$id=($_SESSION["id"]);

	
}


if (isset($_GET['btn']))
{
	
	$result=mysqli_query($connect,"SELECT MAX(shipping_id) from shipping;");
	while($row = mysqli_fetch_assoc($result)){
	   print_r($row);
	   $sid=$row['MAX(shipping_id)'];
	}
	
	//get card info
	$card=($_GET['card']);
	$exp=($_GET['exp']);
	$cv=($_GET['cv']);
	$name=($_GET['cname']);
	
	mysqli_query($connect,"INSERT INTO payment (credit_card_no,credit_card_expired,credit_card_cvv,credit_card_name,user_id,shipping_id) values ('$card','$exp','$cv','$name','$id','$sid');");
	
	?>
	
	<script>
		alert("Your payment made successfully.");
		window.location.href="updatepurchase.php";
	</script>
	
	
	<?php
	
	
	

}


?>
