<?php
include("dataconnection.php");
session_start();

if(!isset($_SESSION['id']))
{
	header('location:homepage.php');
}
else
{
	$user = $_SESSION['id'];
	$prod_id = $_GET['prod_id'];
	
	$checkWish = "SELECT * FROM wishlist WHERE pid = '$prod_id' AND uid = '$user'";
	$resultWish = mysqli_query($connect, $checkWish);
	
	if(mysqli_num_rows($resultWish) == 1)
	{
		echo 'product already exist in wishlist';
		header('location:show-wishlist.php');
	}
	else
	{
		$insertWish = "INSERT INTO wishlist (pid, uid) VALUES ('$prod_id', '$user')";
		if(mysqli_query($connect, $insertWish))
		{
			header('location:show-wishlist.php');
		}
		
	}
}

?>