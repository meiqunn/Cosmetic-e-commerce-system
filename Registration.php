<!DOCTYPE html>
<?php include("dataconnection.php"); ?>
<html>
<head>
  <title>52Hz | Registration</title>
  <link rel="icon" type="image/png" sizes="80x80" href="favicon/52Hz_logo.ico">
  <link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" href="passwordMeter.css" />
<style>
body{
	margin:0;
	color:#6a6f8c;
	background:#E1E8EE;
	font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:1600px;
	position:relative;
	background:linear-gradient(30deg, #BCC6CC,#F5F5F5, #fff);
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
	margin-bottom:20px;
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:55px 70px 0px 70px;
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:10;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}

/*adjust input type layout*/
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}

/*adjust input type*/
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:#98AFC7;
}

.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#17272B;
	text-shadow:1px 1px #aaa;
	font-size:12px;
}

/*adjust btn*/
.login-form .group .button{
	font-weight:bold;
	letter-spacing:2px;
	font-style:italic;
}
.login-form .group label .icon{
	width:20px;
	height:20px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:transparent;
	border:2px solid black;
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:black;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}

.login-form .group .check:checked + label .icon{
	background:#F8F6F0;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	margin-top:-30px;
	text-align:center;
}

<!--Google button-->
 #customBtn {
      display: inline-block;
      background: white;
      color: #444;
      width: 190px;
      border-radius: 5px;
      border: thin solid #888;
      box-shadow: 1px 1px 1px grey;
      white-space: nowrap;
    }
    #customBtn:hover {
      cursor: pointer;
    }
    span.label {
      font-family: serif;
      font-weight: normal;
    }
    span.icon {
      background: url('/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
      display: inline-block;
      vertical-align: middle;
      width: 42px;
      height: 42px;
    }
    span.buttonText {
      display: inline-block;
      vertical-align: middle;
      padding-left: 42px;
      padding-right: 42px;
      font-size: 14px;
      font-weight: bold;
      /* Use the Roboto font that is loaded in the <head> */
      font-family: 'Roboto', sans-serif;
    }
	
.design_error{
		color:red;
		font-size: 12px;
		font-family: 'Roboto', sans-serif;
	}
	
.terms_design:hover{
  color:#5b8dde;
  transition: transform .3s ease;
}
.terms_design::before {  
  transform: scaleX(0);
  transform-origin: bottom right;
}

.terms_design:hover::before {
  transform: scaleX(1);
  transform-origin: bottom left;
}

.terms_design::before{
  color:;
  transition: transform .3s ease;
  
.button:hover
{
	type:pointer;
}

</style>
<script src="https://apis.google.com/js/client:platform.js?onload=startApp"></script>
<meta name="google-signin-client_id" content="115783678529-81iebbqhmoj9qrm8kdof80ke4284dbak.apps.googleusercontent.com">
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
var recaptcha_response = false;
function regisvalidation()
{
	var user, uemail, uaddress, ucity, ustate;
	var uphone, upostal;
	var checkbox;
	var password = document.getElementById('password').value;
	var ucpassword = document.regform.c_password.value;
	
	user = document.regform.username.value;
	uemail = document.regform.email.value;
	uphone = document.regform.phonenum.value;
	uaddress = document.regform.address.value;
	ucity = document.regform.city.value;
	ustate = document.regform.state.value;
	upostal = document.regform.postal.value;
	checkbox = document.getElementById('check');
	

	if(user=="")
	{
		
		document.getElementById("user_error").innerHTML=("Username is required for this form.");
		
	}
	else
	{
		document.getElementById("user_error").innerHTML=("");
	}
	
	if(uemail=="")
	{
		
		document.getElementById("email_error").innerHTML=("Email is required for this form.");
	}
	else
	{
		document.getElementById("email_error").innerHTML=("");
	}
	
	if(uphone=="")
	{
		
		document.getElementById("phone_error").innerHTML=("Phone number is required for this form.");
		
	}
	else
	{
		document.getElementById("phone_error").innerHTML=("");
	}
	
	if(uaddress=="")
	{
		document.getElementById("address_error").innerHTML=("Address is required for this form.");
		
	}
	else
	{
		document.getElementById("address_error").innerHTML=("");
	}
	
	if(password=="")
	{
		document.getElementById("password_error").innerHTML=("Password is required for this form.");
	}
	else
	{
		document.getElementById("password_error").innerHTML=("");
	}
	
	if(password != ucpassword)
	{
		document.getElementById("cpassword_error").innerHTML=("Your confirm password was not the same OR did not fill it up.");
	}
	else
	{
		document.getElementById("cpassword_error").innerHTML=("");
	}
	
	if(checkbox.checked==false)
	{
		alert("You should confirm to the terms and condition.");
	}
	
	if(recaptcha_response==true) 
	{
		document.getElementById('g-recaptcha-error').innerHTML = '';
		return true;
	}
	else
	{
		alert("Please tick the recaptcha, in order to verify whether it is human or robot.");
        return false;
	}
	
	
	if(user==""||uemail==""||uphone==""||uaddress==""||ucpassword==""||ucpassword!=password||checkbox.checked==false||upassword.length<8)
	{
		return false;
	}
    
}

function verifyCaptcha(token) {
    recaptcha_response = true;
    document.getElementById('g-recaptcha-error').innerHTML = '';
}

function expCaptcha(token){
    recaptcha_response = false;
    document.getElementById('g-recaptcha-error').innerHTML = '';
}

function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction2() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab" style="color:#2B1B17;">Sign Up</label>
		<div class="login-form">
		<form method="get" name="regform">
			<div class="sign-up-htm">
				<div class="group"> 
					<label for="user" style="margin-top:30px;" class="label">User Name</label>
					<input id="user" name="username" type="text" placeholder="David" class="input" autofocus required autocomplete="off"> <!-- requei-->
					<span class="design_error" id="user_error" name="user_error"></span>
				</div>
				<div class="group" style="padding-top:15px;">
					<label for="email" class="label">Email</label>
					<input id="email" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" oninvalid="this.setCustomValidity('Email format is not correct. Example: xxx@mail.com')" oninput="this.setCustomValidity('')"  placeholder="user@example.com" class="input" autocomplete="off">
					<span class="design_error" id="email_error" name="email_error"></span>
				</div>
				<div class="group" style="padding-top:15px;">
					<label for="phone" class="label">Mobile Number</label>
					<input id="phone" name="phonenum" type="text" class="input" pattern="[0-9]{10,11}" oninvalid="this.setCustomValidity('Minimum of 10 numbers, Maximum of 11 numbers.')" oninput="this.setCustomValidity('')" placeholder="01134567890" autocomplete="off">
					<span class="design_error" id="phone_error" name="phone_error"></span>
				</div>
				<div class="group" style="padding-top:15px;">
					<label for="address" class="label">Address</label>
					<input id="address" name="address" type="text" placeholder="32-1, Jalan PO 9, Melaka." class="input" autocomplete="off">
					<span class="design_error" id="address_error" name="address_error"></span>
				</div>
				<div class="group" style="padding-top:15px;">
					<label for="city" class="label">City</label>
					<select name="city" class="input" oninvalid="this.setCustomValidity('Please choose a city.')" oninput="this.setCustomValidity('')"  required> 
							<option value=""></option>
							<option value="Ayer Keroh">Ayer Keroh</option>
							<option value="Malim">Malim</option>
							<option value="Kota Laksamana">Kota Laksamana</option>
							<option value="Batu Pahat">Batu Pahat</option>
							<option value="Segamat">Segamat</option>
							<option value="Senai">Senai</option>
							<option value="Petaling Jaya">Petaling Jaya</option>
							<option value="Cheras">Cheras</option>
							<option value="Seri Kembangan">Seri Kembangan</option>
				</select>
					<span class="design_error" id="city_error" name="city_error"></span>
				</div>
				<div class="group" style="padding-top:15px;">
					<label for="state" class="label">State</label>
					<select name="state" class="input" oninvalid="this.setCustomValidity('Please choose a state')" oninput="this.setCustomValidity('')"  required> 
						<option value=""></option>
						<option value="Malacca">Malacca</option>
						<option value="Johor">Johor</option>
						<option value="Selangor">Selangor</option>
				</select>
					<span class="design_error" id="state_error" name="state_error"></span>
				</div>
				<div class="group" style="padding-top:15px;">
					<label for="postal" class="label">Postal Code</label>
					<input id="postal" name="postal" type="text" placeholder="75250" pattern="[0-9]{5}" oninvalid="this.setCustomValidity('Five number of postal code is required ')" oninput="this.setCustomValidity('')" class="input" autocomplete="off" required>
					<span class="design_error" id="postal_error" name="postal_error"></span>
				</div>
				<div class="group" style="padding-top:15px;">
					<label for="pass" class="label">Password</label>
					<input id="password" name="password" type="password" class="input" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$" oninvalid="this.setCustomValidity('At least one uppercase letter, lowercase letter and numeric value with the minimum range from 8 to 16 characters')" oninput="this.setCustomValidity('')" placeholder="12345678" autocomplete="off"><i class="bi bi-eye-slash" id="togglePassword"></i>
					<br>
					<input type="checkbox" onclick="myFunction()">Show Password
					<label style="margin-left:305px;" class="rating"></label>
					<br>
					<span class="design_error" id="password_error" name="password_error"></span>
				</div>
				<div class="group" style="padding-top:15px;">
					<label for="pass" class="label">Confirm Password</label>
					<input id="pass" name="c_password" type="password" class="input" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$" oninvalid="this.setCustomValidity('At least one uppercase letter, lowercase letter and numeric value with the minimum range from 8 to 16 characters')" oninput="this.setCustomValidity('')"  placeholder="12345678" autocomplete="off">
					<br>
					<input type="checkbox" onclick="myFunction2()">Show Password
					<br>
					<br>
					<span class="design_error" id="cpassword_error" name="cpassword_error"></span>
				</div>
				<div class="group" style="padding-top:25px; padding-bottom:20px;">
					<input id="check" type="checkbox" class="check" required>
					<label for="check" style="color:#FF7F50;"><span class="icon"></span> I have checked the <a class="terms_design" href="terms&condition.html">terms and condition</a></label>
					<span class="design_error" id="check" name="check"></span>
				</div>
				<div class="g-recaptcha" data-sitekey="6LcjpjMeAAAAAGT6f6HfJ6_7ge9EwjUhmxalaoOv" data-callback="verifyCaptcha" data-expired-callback="expCaptcha"></div>
				<div id="g-recaptcha-error"></div>

				<div class="group">
					<input type="submit" style=" margin-top:60px;" onMouseOver="this.style.cursor='pointer'" name="submitbtn" class="button" onclick="return regisvalidation();" value="Register">
				</div>
	</form>
			</div>
		</div>
	</div>
</div>
<!-- partial -->
  <script  src="./script.js"></script>
</form>
<script>onload();</script>
<script src="passwordMeter.js"></script>
</body>
</html>
<?php 
	if(isset($_GET['submitbtn']))
	{
		
			$name=$_GET['username'];
			$email=$_GET['email'];
			$address=$_GET['address'];
			$city = $_GET['city'];
			$state = $_GET['state'];
			$postal = $_GET['postal'];
			$phone=$_GET['phonenum'];
			$pass=$_GET['password'];
			$cpass=$_GET['c_password'];
			
			$user_exist = "select * from user where user_name = '$name' OR user_email = '$email'";
			$result_user_exist = mysqli_query($connect, $user_exist);
			
			if(mysqli_num_rows($result_user_exist)>0)
			{
				
					$fetch_data = mysqli_fetch_assoc($result_user_exist);
					if($fetch_data['user_name']==$name)
					{
						?>
						<script>
						alert("Username has been registered. Please use another unregistered username")
						window.location.href = 'Registration.php';
						</script>
						<?php
					}
					else if($fetch_data['user_email']==$email)
					{
						?>
						<script>
						alert("Email has been registred. Please use another unregistered email.")
						window.location.href = 'Registration.php';
						</script>
						<?php
					}
					else
					{
						mysqli_query($connect,"TRUNCATE `52hz`.`tempo_verification`");
						mysqli_query($connect,"insert into tempo_verification (name,email,phone,address, state, city, postal, pass)
												values ('$name','$email','$phone','$address', '$state', '$city', '$postal', '$cpass')");
					?>					
						<script>
						window.location.href = 'validation.php?validation';
						</script>
					<?php
					}
					
			}
			else
			{
						mysqli_query($connect,"TRUNCATE `52hz`.`tempo_verification`");
						mysqli_query($connect,"insert into tempo_verification (name,email,phone,address, state, city, postal, pass)
												values ('$name','$email','$phone','$address', '$state', '$city', '$postal', '$cpass')");
					?>					
						<script>
						window.location.href = 'validation.php?validation';
						</script>
					<?php
			}
	}
	?>
			
	