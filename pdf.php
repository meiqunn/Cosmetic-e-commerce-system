<?php include("dataconnection.php"); 
session_start();

require_once __DIR__ . '/vendor/autoload.php';

//create new pdf instance
$mpdf = new \Mpdf\Mpdf();


if(isset($_GET['payid']))
{
	$payid=$_GET['payid'];
}
$user=($_SESSION['id']);

	
		//create pdf 
$data='';

$data.='<h1 style="text-shadow:1px 2px black; letter-spacing:2px; color:#566D7E;">Purchase Detail</h1>';

$result = mysqli_query($connect, "select * from purchase_history WHERE user_id='$user' and payment_id='$payid'");
$row = mysqli_fetch_assoc($result);
					
$user_result= mysqli_query($connect, "select user.* ,shipping.* ,payment.* from user,shipping,payment WHERE user.user_id='$user' and payment.payment_id='$payid' and payment.shipping_id=shipping.shipping_id");
$user_row = mysqli_fetch_assoc($user_result);


	
$data.='<div style="display:inline-block;">';
$data.='<b>Purchase Date :</b> '.$row["time"];
$data.='<br><br><b>Payment ID : </b>'.$row["payment_id"];

$data.='<br><br><div style="float:left; width:300px;">';	
$data.='<h3 style="text-shadow:1px 2px black; letter-spacing:2px; color:#566D7E;">Shipping Details</h3>';

$data.='<br><b>Recipient Name:</b>'.$user_row["recipient_name"];
$data.='<br><b>Recipient Email:</b>'.$user_row["recipient_email"];
$data.='<br><b>Recipient Phone:</b>'.$user_row["recipient_phone"];
$data.='<br><br><b>Shipping Address :</b> <br>'.$user_row["address"] ;
$data.='</div>';




$data.='</div>';
$data.='<br><br>';
$data.='<hr>';
$data.='<br><br>';
  $data.='<div class="column" style="display:block;">';
	
	$subtotal=0;
	$num=mysqli_query($connect, "select purchase_history.*,product.*,product_type.* from purchase_history ,product,product_type WHERE  product_type.product_id=product.product_id and product_type.product_type_id=purchase_history.product_type_id and purchase_history.user_id='$user' and purchase_history.payment_id='$payid'");
	while($rownum = mysqli_fetch_assoc($num))
	{
		$total=$rownum["product_type_price"]*$rownum["product_qty"];
		$subtotal+=$total;
			
		if($rownum["product_type_id"]==999)//specially for customize product
		{
			$location="Admin/working_site/Product_img/".$rownum["img_dir"];	
			
			$payid=$rownum["payment_id"];
			$c_result = mysqli_query($connect, "select * from customize where payment_id='$payid'");
			$customize= mysqli_fetch_assoc($c_result);	
			
		
			$data.='<div class="card">';
				$data.='<div>';
				$data.='<img src="'.$location.'"width="150px" style="background-color:'.$customize['color'].';">';
			$data.='</div>';
				
					$data.='<div style="display:inline-block; padding-left:200px; padding-bottom:25px;">';
						$data.='<p style="margin-top:-140px; color:#102738; letter-spacing:2px;">'.$rownum["product_name"].'</p>';
						$data.='<p style="color:#102738; letter-spacing:2px;">Color: '.$customize["color"].'</p>';
						$data.='<p>Quantity : '.$rownum["product_qty"].'</p>';
						$data.='<p>Unit Price : RM '.$rownum["product_type_price"].'</p>';
						$data.='<p>Subtotal : RM '.$total .'</p>';
					$data.='</div>';
			$data.='</div>';
		  $data.='</div>';
		  $data.='<br>';

				
		}
		else
		{
			$payid=$rownum["payment_id"];
			$c_result = mysqli_query($connect, "select * from customize where payment_id='$payid'");
			$customize= mysqli_fetch_assoc($c_result);	
			
			$location="Admin/working_site/Product_img/".$rownum["img_dir"];	
			
			$data.='<div class="card">';
				$data.='<div>';
				$data.='<img src="'.$location.'"width="150px" onerror="this.onerror=null; this.src="Default.png"">';
			$data.='</div>';
				
					$data.='<div style="display:inline-block; padding-left:200px; padding-bottom:25px;">';
						$data.='<p style="margin-top:-140px; color:#102738; letter-spacing:2px;">'.$rownum["product_name"].'</p>';
						$data.='<p>Quantity : '.$rownum["product_qty"].'</p>';
						$data.='<p>Unit Price : RM '.$rownum["product_type_price"].'</p>';
						$data.='<p>Subtotal : RM '.$total .'</p>';
					$data.='</div>';
			$data.='</div>';
		  $data.='</div>';
		  $data.='<br>';		
					
		}
	}			

			$data.='<b style="font-size:28px; letter-spacing:2px; padding-left:20px;">Total : RM '.$subtotal.'</b>';
	
$mpdf->WriteHTML($data);
$mpdf->Output('purchasehistory.pdf','D');

?>
