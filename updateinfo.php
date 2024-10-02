<?php include("dataconnection.php"); 
session_start();

if (isset($_GET['userid']))
{
	$userid=($_GET['userid']);
	$shipping=($_GET['shipping']);
	$address=($_GET['address']);
	$email=($_GET['email']);
	$phone=($_GET['phone']);
	$name=($_GET['name']);
	
}
	
	if (isset($_GET['procode']))
	{
		$procode=($_GET['procode']);
		$qty=($_GET['qty']);
	}
	
	$sql=mysqli_query($connect,"INSERT INTO shipping (user_id,address,recipient_email,recipient_name,recipient_phone) values ('$userid','$address','$email','$name','$phone');");


	$result=mysqli_query($connect,"SELECT MAX(shipping_id) from shipping;");
	while($row = mysqli_fetch_assoc($result)){
	   print_r($row);
	   $sid=$row['MAX(shipping_id)'];
	}

	
	header("location:payment.php?shippingid=$sid&id=$userid");
	
	
	
?>