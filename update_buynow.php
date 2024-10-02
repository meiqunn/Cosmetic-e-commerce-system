 <?php include("dataconnection.php"); 
session_start();

if (isset($_GET['userid']))
{
	$userid=($_GET['userid']);
	$shipping=($_GET['shipping']);
	$address=($_GET['address']);
	
	
}
	
	if (isset($_GET['procode']))
	{
		$procode=($_GET['procode']);
		$qty=($_GET['qty']);
	}
	
	$sql=mysqli_query($connect,"INSERT INTO shipping (shipping_type, user_id,address) values ('$shipping','$userid','$address');");


	$result=mysqli_query($connect,"SELECT MAX(shipping_id) from shipping;");
	while($row = mysqli_fetch_assoc($result)){
	   print_r($row);
	   $sid=$row['MAX(shipping_id)'];
	}
	
	
	$result=mysqli_query($connect,"select * from tempo_buynow");//for reload the procode n qty 
	while($row = mysqli_fetch_assoc($result)){
	  
	   $procode=$row['code'];
	   $qty=$row['qty'];
	}
	
	header("location:payment(buynow).php?shippingid=$sid&id=$userid&procode=$procode&qty=$qty");
	
	
	
?>