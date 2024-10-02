<html>
<style>
table, th, td {
  border:1px solid grey;
  text-align:center;
</style>


<?php include("dataconnection.php"); 
session_start();


if(isset($_SESSION['admin']))
{

$user=($_SESSION['admin']);
}
$result = mysqli_query($connect, "select * from purchase_history WHERE history_isDelete = 0 ");
$row = mysqli_fetch_assoc($result);
	
$output="";	

$output .='
<table>
<tr >
    <th>purchase history </th>
	<th>date </th>
    <th>user name </th>
    <th>total </th>
    <th>profit </th>

</tr>';
$total=0;
$user_result= mysqli_query($connect, "select user.* ,purchase_history.* ,product_type.product_type_price from user, purchase_history ,product_type WHERE user.user_id= purchase_history.user_id and purchase_history.history_isDelete=0 and purchase_history.product_type_id=product_type.product_type_id");
while($user_row = mysqli_fetch_assoc($user_result))
{


$output .='
<tr>
    <td>'. $user_row['purchase_history_id'].'</td>
	<td>'. $user_row["time"].'</td>
    <td>'.$user_row["user_name"].' </td>
    <td>'.$user_row["product_type_price"]*$user_row["product_qty"].'</td>
    <td>'. 0.40*($user_row["product_type_price"]*$user_row["product_qty"]).'</td>
</tr>';

	$total+=($user_row["product_type_price"]*$user_row["product_qty"]);

}

$output .='
	<tr>
			<td></td>
			<td></td>
			<td>total=</td>
			<td>'.$total.'</td>
			<td>'. 0.4*$total.'</td>
			
			
		</tr>';

$output .='</table>';


header("Content-Type: application/octet-stream");
header ("Content-Type:application/xls") ;
header ("Content-Disposition:attachment; filename=user_purchase_report.xls");
header("Pragma: no-cache");  
header("Expires: 0");  

echo $output;

?>
</html>