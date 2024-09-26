<?php
session_start();
include("dataconnection.php");

if(!isset($_SESSION['id']))
{
	?>
	<script>
		alert("Please log in first.");
	</script>
	<?php
	header('location:a.php');
	
}
else
{
	
	$user = $_GET['user'];
	$prod_id = $_GET['prod_id'];
	
	$delWish = "DELETE FROM wishlist WHERE pid ='$prod_id' AND uid='$user'";
	if(mysqli_query($connect, $delWish))
	{
		?>
		<script>
			alert("Product Delete Successfully.");
			window.location.href="show-wishlist.php";
		</script>
		<?php

	}
}

?>
