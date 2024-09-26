<DOCTYPE HTML>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
	<link rel="stylesheet" href="navigation.css">

<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 22%;
  margin-left:25px;
}

/* Remove extra left and right margins, due to padding */


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px){
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 15px;
  background-color: #f1f1f1;
  margin-top:50px;
  margin-left:30px;
  margin-bottom:50px;
}


img {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
 padding-left:150px;
  top:510px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}


.column:hover img {
  opacity: 0.3;
}

.column:hover .middle {
  opacity: 1;
}

.text {
  background-color: #D3D3D3;
  color: #778899;
  font-size: 10px;
  padding: 8px 18px;
  border-radius:20px;
  letter-spacing:3px;
  font-weight:bold;
  width:300px;
}
img{
 border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
 <!-- width: 150px; -->
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);


				
</style>
</head>


<body>
<!--header-->
	<div class="header">
		

			<div class="login">

							
							<button class="cart" style="margin-right:30px;" onclick="document.location='makeorder.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i> CARTS</button>
							
						<div class="dropdown">
							<button class="dropbtn">LOGIN<i class="fa fa-caret-down" style="margin-left:15px;"></i></button>
							
						<div class="dropdown-content">
						
					<a href="login.php">LOGIN</a>
					<a href="profile.php">MY PROFILE</a>
					<a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
					<a href="#">HELP</a>
					
				  </div>
				</div>
			</div>
			
			<div class="search">
				<input type="text" placeholder="Search..."style="width:300px;"><i class="fa fa-search" aria-hidden="true" style="padding:5px;"></i>
			</div>

		
			<ul class="nav">
				<li><a href="#">HOME</a></li> 
				<li><a href="#">CATEGORY</a></li> 
				<li><a href="CONTACT_US.html">CONTACT US</a></li> 
				<li><a href="CONTACT_US.html">ABOUT US</a></li>
				<li><a href="#">LIPSTICK</a></li>
				<li><a href="#">EYEBROW</a></li>
				<li><a href="#">FOUNDATION</a></li>
				<li><a href="#">MASCARA</a></li>

			</ul>
		
	 
	</div>
<!--header end-->


<form>
<div class="row">
  <div class="column">
    <div class="card">
	<a href="MAC/SATIN LIPSTICK-RETRO.jpg">
    <img src="MAC/SATIN LIPSTICK-RETRO.jpg" width="250px;">
		<div class="middle" style="left:215px;">
			<div class="text">DIOR WaterProof ForeverDream 101-Liquid Lipstick</div>
		</div>
	</a>
    </div>
  </div>

  <div class="column">
    <div class="card">
	<a href="MAC/SATIN LIPSTICK-RETRO.jpg">
       <img src="MAC/SATIN LIPSTICK-RETRO.jpg" width="250px;">
	   <div class="middle" style="left:575px;">
			<div class="text">DIOR ROUGE FOREVER LIQUID 100-Forever-Nude</div>
		</div>
	</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
	<a href="MAC/SATIN LIPSTICK-RETRO.jpg">
      <img src="MAC/SATIN LIPSTICK-RETRO.jpg" width="250px;">
	  <div class="middle" style="left:925px;">
			<div class="text">DIOR 626-Forever-Famous_liquid_lipstick</div>
		</div>
	</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
	<a href="MAC/SATIN LIPSTICK-RETRO.jpg">
      <img src="MAC/SATIN LIPSTICK-RETRO.jpg" width="250px;">
	  <div class="middle" style="left:1275px;">
			<div class="text">DIOR refillable_lipstick_762-Dioramour Metallic Finish</div>
		</div>
	</a>
    </div>
  </div>
</div>

<div class="row">
  <div class="column">
    <div class="card">
	<a href="MAC/SATIN LIPSTICK-RETRO.jpg">
		<img src="MAC/SATIN LIPSTICK-RETRO.jpg" width="250px;">
		<div class="middle" style="top:780px; left:200px;">
			<div class="text">DIOR lipstick_999-MatteFinish</div>
		</div>
	</a>
    </div>
  </div>

  <div class="column">
    <div class="card">
	<a href="MAC/SATIN LIPSTICK-RETRO.jpg">
       <img src="MAC/SATIN LIPSTICK-RETRO.jpg" width="250px;">
	   <div class="middle" style="top:780px; left:570px;">
			<div class="text">DIOR lipstick_724-Tendresse Matte Finish</div>
		</div>
	</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
	<a href="MAC/SATIN LIPSTICK-RETRO.jpg">
      <img src="MAC/SATIN LIPSTICK-RETRO.jpg" width="250px;">
	  <div class="middle" style="top:780px; left:923px;">
			<div class="text">DIOR lipstick_000-Tendresse Matte Finish</div>
		</div>
	</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
	<a href="MAC/SATIN LIPSTICK-RETRO.jpg">
      <img src="MAC/SATIN LIPSTICK-RETRO.jpg" width="280px;">
	  <div class="middle" style="top:780px; left:1280px;">
			<div class="text">MAC SATIN LIPSTICK-RETRO</div>
		</div>
	</a>
    </div>
  </div>
</div>

<div class="row">
  <div class="column">
    <div class="card">
	<a href="MAC/SATIN LIPSTICK-PINK NOUVEAU.jpg">
		<img src="MAC/SATIN LIPSTICK-PINK NOUVEAU.jpg" width="250px;">
		<div class="middle" style="top:1100px; left:217px;">
			<div class="text">MAC SATIN LIPSTICK-PINK NOUVEAU</div>
		</div>
	</a>
    </div>
  </div>

  <div class="column">
    <div class="card">
	<a href="MAC/SATIN LIPSTICK-MAC RED.jpg">
       <img src="MAC/SATIN LIPSTICK-MAC RED.jpg" width="250px;">
	   <div class="middle" style="top:1100px; left:570px;">
			<div class="text">SATIN LIPSTICK-MAC RED</div>
		</div>
	</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
	<a href="MAC/SATIN LIPSTICK.jpg">
      <img src="MAC/SATIN LIPSTICK.jpg" width="250px;">
	  <div class="middle" style="top:1100px; left:925px;">
			<div class="text">SATIN LIPSTICK</div>
		</div>
	</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
	<a href="MAC/PATENT PAINT LIP LACQUER-VARNISHED REPUTATION.jpg">
      <img src="MAC/PATENT PAINT LIP LACQUER-VARNISHED REPUTATION.jpg" width="250px;">
	  <div class="middle" style="top:1100px; left:1280px;">
			<div class="text">PATENT PAINT LIP LACQUER-VARNISHED REPUTATION</div>
		</div>
	</a>
    </div>
  </div>
</div>
		<script src="jquery-2.2.4.min.js"></script>
		<script src="plugins.js"></script>
		 <script src="active.js"></script>

</body>
</html>
