<?php
session_start();
include ("dataconnection.php");
$error = "";

if(isset($_GET["sendbtn"]))
{
	if(empty($_GET["email"])|| empty($_GET["upassword"]))
	{
		$error="Email or password is empty";
	}
	else
	{
		$email = $_GET["email"];
		$pass = $_GET["upassword"];
		
		$email= mysqli_real_escape_string($connect, $email);
		$pass= mysqli_real_escape_string($connect, $pass);
		//escape those special characters
		
		$result=mysqli_query($connect, 
		"SELECT * FROM admin WHERE admin_email='$email' 
		AND admin_password='$pass'");
		
		$count=mysqli_num_rows($result);
		
		if($count==1)
		{
			$row=mysqli_fetch_assoc($result);
			$_SESSION["admin"]=$row["admin_id"]; //created session variable.
			header("location:index.php");
		}
		else
		{
			?>
			<script>
			alert("Admin Email Or Password is wrong.");
			</script>
			<?php
		}
		
	}
}
?>
<!DOCTYPE html>
<html>
 <head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
	<script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
	</script>
	</head>
    <body>
       <h1 id="heading1">Admin Portal</h1>
       <img src="https://img.icons8.com/cute-clipart/344/login-rounded-right.png" alt="Login Logo" style="width:100px; height:100px;">
     <div>
         <form class="myForm" name="myForm">
             <div class="input-container">
                 <i class="fa fa-envelope icon"></i>
                 <input type="email" placeholder="Email" name="email" class="input-field"  oninvalid="this.setCustomValidity('Please enter a complete email format(eg.123@email.com)')" oninput="this.setCustomValidity('')" autocomplete="off" required>
             </div>
             <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input type="password" id="pass" placeholder="password" name="upassword" class="input-field" autocomplete="off" required>
			  </div>
			   <div class="input-container">
				<input type="checkbox" onclick="myFunction()">Show Password
			  </div>
            <div><input type="submit" name="sendbtn" class="bttn"></div>
         </form>
     </div>
    </body>
</html>