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
			
		
		$getdata = mysqli_query($connect, "select* from tempo_customize");
		$datarow = mysqli_fetch_assoc($getdata);
		$color=$datarow['color'];
		
		mysqli_query($connect,"	Update product_type set product_stock=(product_stock-1) where product_type_id=999");
				
		mysqli_query($connect,"INSERT INTO purchase_history (payment_id,user_id,product_type_id,product_qty) VALUES ('$pay_id','$id',999,1)");
		
		mysqli_query($connect,"INSERT INTO customize (payment_id,color) VALUES ('$pay_id','$color')");
		
		header("location:payment_success.php?payid=$pay_id");
}
?>