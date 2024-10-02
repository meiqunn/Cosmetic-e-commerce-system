<?php include("dataconnection.php"); 
session_start();
?>


<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>52 Hz | Contact Us</title>
 
<link rel="stylesheet" href="contact_us style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/x-icon" href="cu_icon.ico">

<style>

/* width */
::-webkit-scrollbar {
  width: 15px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #6B858D; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #99CCFF; 
}

.nav{margin-top:30px;
	margin-left:90px;}

.nav a{text-decoration:none;
		padding:19px;
		font-size:20px;
		color:#0C3252;
		padding-right:25px;
		}	

.nav a:hover{text-decoration:overline;
			letter-spacing:3px;
			font-weight:bold;
			color:#5392C8;}
		
.cart{background-color: #lightgrey;
  color: #9E8F85;
  padding: 20px;
  border: none;
  cursor: grabbing;
    border-radius:10px;
	font-size:16px;
	box-shadow:5px 5px #36454F;
	position:relative;
	}

.cart:hover{background-color:#C7E1E1;
			box-shadow:3px 3px #36454F;
			top:5px;
			left:5px;
			font-weight:bold;
			letter-spacing:3px;}

.dropbtn {
  background-color: #lightgrey;
  color: #9E8F85;
  padding: 20px;
  border: none;
  cursor: grabbing;
    border-radius:10px;
	font-size:16px;
	letter-spacing:2px;
	box-shadow:5px 5px #36454F;
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
  font-weight:bold;
  letter-spacing:2px;
  font-style:italic;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-size:15px;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;
									border-radius:5px;
									}
									
.dropdown:hover .dropbtn {background-color:#C7E1E1;
							box-shadow:3px 3px #36454F;
							top:5px;
							left:5px;
							font-weight:bold;
							letter-spacing:3px;}

.login{	float:right;
		margin-top:-20px;
		
		}
		
		a{text-decoration:none;}
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
function user_status_link()
{
	var user_status="<?php echo $user_status;?>";
	if(user_status=="login")
	{
		window.location.href = "login.php";
	}
	else
	{
		window.location.href = "profile.php";
	}
	
}

function get_alert()
{
	alert("Sent successfully!");
}
</script>


</head>
<body>
<div class="nav">
				<a href="a.php">HOME</a>
				<a href="ABOUT_US.php">ABOUT US</a>
				<a href="product_catogery.php?category=lipstick">LIPSTICK</a>
				<a href="product_catogery.php?category=eyebrow">EYEBROW</a>
				<a href="product_catogery.php?category=foundation">FOUNDATION</a>
				<a href="product_catogery.php?category=eyeshadow">EYESHADOW</a>
				<a href="CONTACT_US.php">CONTACT US</a> 


<div class="login">

	<button class="cart" style="margin-right:75px;" onclick="document.location='makeorder.php'"><i class="fa fa-cart-plus" style="margin-right:5px;"></i> CARTS</button>
							
		<div class="dropdown" style="margin-right:30px;">
			<button class="dropbtn"><?php echo $user_status ;?><i class="fa fa-caret-down" style="margin-left:5px;"></i></button>
							
				<div class="dropdown-content">
						
					<a href="javascript:user_status_link();"><?php echo $user_status ;?></a>
					<a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
					<a href="show-wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i>MY WISHLIST</a>
					<a href="#">HELP</a>
					
				  </div>
			</div>
</div>
			
</div>

			<div class="contact-from" style="padding:10px;">
				<h4>Contact Us<hr></h4>
				<h2>Get in Touch</h2>
			<form name="contact" onsubmit="get_alert()" method="post">
				<span>NAME </span><i class="fa fa-id-card-o" aria-hidden="true"></i><input type="text" name="name" placeholder="Kong" size="30" required><br><br>
				<span>EMAIL </span><i class="fa fa-google" aria-hidden="true"></i><input type="email" name="email" placeholder="kong@gmail.com" size="37" required><br>
				<span class="notis">PLEASE USE A REAL EMAIL SO THAT WE WILL ABLE TO CONTACT YOU AS SOON AS POSSIBLE</span><br><br>
				<span>PHONE NUMBER </span><i class="fa fa-google" aria-hidden="true"></i><input type="text" name="phone_num" placeholder="eg:01123456789" size="30" required><br>
				<span class="notis">PLEASE USE A REAL PHONE NUMBER SO THAT WE WILL ABLE TO CONTACT YOU AS SOON AS POSSIBLE</span><br><br>
				
				<span>SUBJECT </span><i class="fa fa-pencil-square-o" aria-hidden="true"></i><input type="text" name="subject" placeholder="Subject" size="40"><br><br>
				<span>MESSAGE </span><i class="fa fa-comments-o" aria-hidden="true"></i><textarea name="message" placeholder="Any inquiry about your shopping experience" rows="10" cols="38" required></textarea>
				<input type="submit" name="sub" value="SUBMIT">
			</form>
				
				<?php 
				if(isset($_POST['sub']))
				{
					$user_name = $_POST["name"];
					$user_email = $_POST["email"];
					$phone_number = $_POST["phone_num"];
					$user_subject = $_POST["subject"];
					$user_message = $_POST["message"];
					
					mysqli_query($connect,"INSERT INTO contact_us (name,email,phone_number,subject,message) values ('$user_name','$user_email','$phone_number','$user_subject','$user_message')");
				}
				?>
				
	</div>
	<div style="margin-left:920px; margin-top:-450px; letter-spacing:2px; font-family:'Fantasy'; font-size:20px;">
	<p><a href="https://goo.gl/maps/YngYdFYYkMvY3R1UA"><i class="fa fa-map-signs" aria-hidden="true" style="color:#324552;"></i>  MULTIMEDIA UNIVERSITY MELAKA</a></p><br><br>
	<p><i class="fa fa-mobile fa-2x" aria-hidden="true"></i>  016-123 4567</p><br><br>
	<p><i class="fa fa-envelope-square fa-lg" aria-hidden="true" style="color:#3D3C3A;"></i>  mmu_melaka@email.com</p>
	</div>



</body>
</html>