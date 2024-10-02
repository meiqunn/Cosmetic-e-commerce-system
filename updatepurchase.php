 <?php include("dataconnection.php"); 
session_start();

if (isset($_SESSION['id']))
{
		$id=($_SESSION['id']);
		$sid=($_GET['sid']);
		
		$result=mysqli_query($connect,"SELECT MAX(payment_id) from payment;");
			while($row = mysqli_fetch_assoc($result)){
			  
			   $pay_id=$row['MAX(payment_id)'];//to get the payment_id(auto_increment) that process just now
			   
			}
		
		
		$getdata = mysqli_query($connect, "select* from shopping_cart where user_id='$id' and cart_selected=1");
		while($datarow= mysqli_fetch_assoc($getdata))
		{
			
			$code=$datarow['product_type_id'];
			$qty=$datarow['product_qty'];
			mysqli_query($connect,"	Update product_type set product_stock=(product_stock-'$qty') where product_type_id='$code'");
			
			mysqli_query($connect,"Insert into purchase_history (payment_id,user_id,product_type_id,product_qty) values ('$pay_id','$id','$code','$qty')");
			
			
		}
		mysqli_query($connect,"delete from shopping_cart where user_id='$id' and cart_selected=1");
		header("location:payment_success.php?payid=$pay_id");
}

?>