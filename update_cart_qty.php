 <?php include("dataconnection.php"); 
session_start();

		$cart=$_GET['procode'];
		$pqty=$_GET['pqty'];
		$num=$_GET['num'];//determine +1 or -1
		
		$pqty+=$num;//count +1 ot -1
		
		if($pqty<1)//set qty cant less than 1 
		{
			$pqty=1;
		}
		mysqli_query($connect,"UPDATE shopping_cart SET product_qty='$pqty' where shopping_cart_id='$cart'");
		header("location:makeorder.php");
?>