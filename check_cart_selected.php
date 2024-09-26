<?php include("dataconnection.php"); 
session_start();


if(isset($_POST['tick']))
{
	$cart=$_GET['procode'];
	$selected=1;
	mysqli_query($connect,"update shopping_cart set cart_selected=$selected where shopping_cart_id='$cart'");
						
}

?>