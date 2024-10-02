<?php
include("dataconnection.php");
session_start();

unset($_SESSION["id"]);//if unset just remove one data only

session_destroy();

?>

<script>
alert("You have been logout successfully");
window.location.href = "login.php";
</script>