<?php include("dataconnection.php"); 
session_start();


if(isset($_SESSION['id']))
{

$user=($_SESSION['id']);
}
$result = mysqli_query($connect, "select * from purchase_history WHERE user_id='$user' ");
$row = mysqli_fetch_assoc($result);
					

?>

<table>
<tr>
    <td>purchase history </td>
    <td>user id </td>
    <td>total </td>
    <td>profit </td>

</tr>

<?php 
$user_result= mysqli_query($connect, "select user.* ,purchase_history.* ,product_type.product_price from user, purchase_history ,product_type WHERE user.user_id='$user' and purchase_history.history_isDelete=0 and purchase_history.product_type_id=product_type.product_type_id");
while($user_row = mysqli_fetch_assoc($user_result))
{
?>

<tr>
    <td><?php echo $user_row['purchase_history_id'] ?></td>
    <td><?php echo$user_row["user_id"]?> </td>
    <td><?php echo $user_row["product_price"]*$user_row["product_qty"]?> </td>
    <td><?php echo 0.40*($user_row["product_price"]*$user_row["product_qty"])?> </td>

</tr>
<?php


}
?>
</table>

<?php 

header("Content-Type: application/vnd.ms-excel");
header ("Content-Type:application/xls") ;
header ("Content-Disposition:attachment, filename=t.xls");
header("Pragma: no-cache");  
header("Expires: 0");  


?>
