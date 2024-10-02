<?php 
include("dataconnection.php");
session_start();
?>
<html>

<head>
<title>52Hz | Change Password</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- to use eye icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    

<style>


body{background:linear-gradient(45deg, #EBF4FA, #F5FFFA);}

.logo{width:150px;}

.nav{margin-top:-70px;
	margin-left:190px;}

.nav a{text-decoration:none;
		padding:20px;
		font-size:20px;
		color:#0C3252;
		font-weight:bold;
		}	

.nav a:hover{text-decoration:overline;
			letter-spacing:3px;
			font-weight:bold;
			color:#5392C8;}
		
.cart{background-color: #lightgrey;
  color: brown;
  padding: 20px;
  border: none;
  cursor: grabbing;
    border-radius:10px;
	font-size:16px;
	letter-spacing:2px;
	box-shadow:4px 4px #36454F;}

.cart:hover{background-color:#BCC6CC;
			font-weight:bold;
			letter-spacing:3px;
			box-shadow:2px 2px #36454F;
			top:5px;
			left:5px;}

.dropbtn {
  background-color: #lightgrey;
  color: brown;
  padding: 20px;
  border: none;
  cursor: grabbing;
    border-radius:10px;
	font-size:16px;
	letter-spacing:2px;
	box-shadow:4px 4px #36454F;
}

.dropdown {
  position: relative;
  display: inline-block;
  margin-left:-30px;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-size:15px;
  letter-spacing:2px;
  font-weight:bold;
  font-style:italic;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #BCC6CC;
							font-weight:bold;
							letter-spacing:4px;
							box-shadow:2px 2px #36454F;}


.login{	float:right;
		margin-top:-20px;
		
		}

ul li{list-style-type:none;
	padding:15px;
	width:100px;
	margin-left:50px;
	letter-spacing:1px;}

ul li a:hover{letter-spacing:2px;
				cursor:grabbing;
				font-weight:bold;
				color:#5392C8;}
				

input[type]{height:40px; 
			width:300px;
			border-radius:20px;
			border:none;
			background:#F5F5F5;
			padding:25px;}
			
input[type=submit]{width:150px;
					color:#033E3E;
					text-align:center;
					font-weight:bold;
					padding:0px;
					margin-top:30px;
					background:#BCC6CC;
					cursor:grabbing;}
					
input[type=submit]:hover{background:#F5FFFA;
							letter-spacing:3px;}
							
a{text-decoration:none;}

.pass{font-weight:bold;
		font-style:italic;
		color:#566D7E;}
		
#currentPassword{margin-left:15px;}

#newPassword{margin-left:20px;}

.confirmPassword{margin-left:20px;}

#confirmPassword{color:red;
					padding-left:10px;}
</style>
<script>
<?php 
	if(isset($_SESSION['id']))
	{
		$user=$_SESSION['id'];
		$result=mysqli_query($connect,"SELECT * FROM user where user_id='$user'");
						
		$row=mysqli_fetch_assoc($result);
						
		$user_status=$row["user_name"];
						
	}
	else
	{
		$user_status="LOGIN";
						
	}
?>

function validatePassword(){
	var currentPassword,newPassword,confirmPassword,output = true;

	currentPassword = document.frmchange_pass.current_pass.value;
	newPassword = document.frmchange_pass.new_pass.value;
	confirmPassword = document.frmchange_pass.confirm_pass.value;
/*
	if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
	}
	else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
	}
	else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
	}
*/
	if(newPassword != confirmPassword) {
	
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
	} 	
	return output;
}
	
</script>
</head>
<body>
<div class="logoPic">
			<a href="a.php"><img src="logo.png" class="logo"></a>
		</div>
<div style="background:linear-gradient(90deg, #F5F8FF, #F5FFFA); color:white; height:100px; margin-top:-8px; width:101%; margin-left:-7px;">
	<div class="nav">
				<a href="a.php">HOME</a>
				<a href="ABOUT_US.php">ABOUT US</a>
				<a href="product_catogery.php?category=lipstick">LIPSTICK</a>
				<a href="product_catogery.php?category=eyebrow">EYEBROW</a>
				<a href="product_catogery.php?category=foundation">FOUNDATION</a>
				<a href="product_catogery.php?category=eyeshadow">EYESHADOW</a>
				<a href="CONTACT_US.php">CONTACT US</a>  
				

			<div class="login">

				<button class="cart" style="margin-right:55px;" onclick="document.location='makeorder.php'"><i class="fa fa-cart-plus" style="margin-right:5px;"></i> CARTS</button>
										
					<div class="dropdown" style="margin-right:30px;">
						<button class="dropbtn"><?php echo $user_status ;?><i class="fa fa-caret-down" style="margin-left:5px;"></i></button>
										
							<div class="dropdown-content">
									
								<a href="profile.php"><?php echo $user_status ;?></a>
								<a href="show-wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i>MY WISHLIST</a>
								<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
								
							  </div>
						</div>
			</div>
			
	</div>

</div>
					

<div style=" margin-left:50px; margin-top:40px; font-weight:bold;">
<ul>
	<li><a href="profile.php">My Account</a></li>
		<ul>
		<li>Profile</li>
		<li><a href="profile.php#address">Address</a></li>
		<li><a href="change_pass.php" >Change Password</a></li>
		
		</ul>	
	<li><a href="orderhistory.php?page=1">My Purchase</a></li>
</ul>
</div>
<div style="margin-left:400px; background:white; margin-top:-380px; padding:30px; width:800px;">

<?php

if(!isset($_SESSION['id']))
{
	?>
	<script>
		alert("Please log in!");
	</script>
	<?php
	exit();
}

if(isset($_SESSION['id']))
{
	$user_id=$_SESSION['id'];
	$result=mysqli_query($connect,"SELECT * FROM user where user_id='$user_id'");
	
	$row=mysqli_fetch_assoc($result);
	
	echo"<h1>My Profile</h1><hr>";
	
}

?>

<h3>CHANGE PASSWORD</h3>
<div><?php if(isset($message)) { echo $message; } ?></div>
<form name="frmchange_pass" method="post" onSubmit="return validatePassword()">

<p class="pass">Current Password <span style="margin-left:15px;">:</span> <input type="password"  name="current_pass" id="currentPassword" required><i class="bi bi-eye-slash" id="togglePassword" style="margin-left:-40px; cursor:pointer;"></i></p>

<script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#currentPassword");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = currentPassword.getAttribute("type") === "currentPassword" ? "text" : "currentPassword";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('update_btn', function (e) {
            e.preventDefault();
        });
</script>

<p class="pass">New Password <span style="margin-left:30px;">:</span> <input type="password" name="new_pass" id="newPassword" min=8 required></p>

<p class="pass">Confirm Password : <input type="password" name="confirm_pass" class="confirmPassword" min=8 required><span id="confirmPassword"></span></p>

<input type="submit" name="update_btn" value="UPDATE" >

</div>             
</form>

</body>
</html>

<?php 
//include("dataconnection.php");
if(isset($_POST["update_btn"]))
{
	$cpass = $_POST['current_pass'];
	$npass = $_POST['new_pass'];
	$confirm_password = $_POST['confirm_pass'];
	
	if($_POST["current_pass"] == $row["user_pass"] && $cpass == $npass )
	{
		if($npass == $confirm_password )
		{
			?>
			
			<script>
				alert("New password cannot same with current password. Please change another password.");
			</script>
			<?php
		}
		
		
	}

	if($_POST["current_pass"] == $row["user_pass"] && $npass == $confirm_password ) {
		if(strlen($npass) < 8){
			$error="Change failed. Password is too short. Minimum required is 8 characters.";
		echo "<script>alert('$error');</script>";
		}
		else{
			mysqli_query($connect,"update user set user_pass='$npass' where user_id='$user' ");

			$message = "Password Changed Sucessfully.";
			echo "<script>alert('$message');</script>";
			
	?>
			<?php 
			
		}
		?>
	<?php
	} 
	
	if($_POST["current_pass"] != $row["user_pass"])
	{
		$message = "Current password is not correct. ";
		echo "<script>alert('$message');</script>";
		
	}
}

?>