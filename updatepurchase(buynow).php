 <?php include("dataconnection.php"); 
session_start();

if (isset($_GET['id']))
{
		$id=($_GET['id']);
		$sid=($_GET['sid']);
		
		$result=mysqli_query($connect,"SELECT MAX(payment_id) from payment;");
			while($row = mysqli_fetch_assoc($result)){
			  
			   $pay_id=$row['MAX(payment_id)'];//to get the payment_id(auto_increment) that process just now
			}
			
		
		$getdata = mysqli_query($connect, "select* from tempo_buynow");
		$datarow = mysqli_fetch_assoc($getdata);
		$code=$datarow['code'];
		$qty=$datarow['qty'];
		
		mysqli_query($connect,"	Update product_type set product_stock=(product_stock-'$qty') where product_type_id='$code'");
				
		mysqli_query($connect,"INSERT INTO purchase_history (payment_id,user_id,product_type_id,product_qty) VALUES ('$pay_id','$id','$code','$qty')");

		header("location:payment_success.php?payid=$pay_id");
}
?>