<!DOCTYPE HTML>
<html>
 <?php include("dataconnection.php"); 
session_start();
?>
<head>
<title>52 Hz | Home Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="navigation.css">
<style>

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  margin-left:85px;
  margin-bottom:15px;
}


/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 10px;
  background-color: #f1f1f1;
  margin-top:50px;
  margin-left:30px;
  
}


.img {
  opacity: 1;
  display: block;
  width: 67%;
  height: 200px;
  transition: .5s ease;
  backface-visibility: hidden;
  margin-left:35px;
}

.middle {
  opacity: 0;
  padding-left:50px; <!-- to adjust position of cart -->
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
  font-size: 13px;
  padding:0;
  border-radius:20px;
  letter-spacing:3px;
  font-weight:bold;
  width:150px;
  text-align:center;
  margin-top:-65px;  <!--to adjust position of cart-->
}

.p_name{text-shadow:1px 1px grey;
		font-weight:bold;
		color:black;}

.p_price{font-size:18px;
			color:#FF4500;
			font-weight:bold;
			font-style:italic;
			text-shadow:3px 1px #EEE8AA;}

.text_cart{font-weight:bold;}

.img{
 border: 1px solid #ddd;
  border-radius: 4px;
  padding: 15px;
}

.img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}


.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.slide-btn{border:1px solid red; 
		background-color:red; 
		padding:10px; 
		text-decoration:none; 
		font-weight:bold; 
		color:white;}
/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin-top:400px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

#portfolio-menu{text-align:center;}

.btn{background-color:transparent;
		border:none;
		cursor:grabbing;
		padding:10px;
		font-weight:bold;}
		
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
		?>
			//windows.location.href="login.php";
		<?php
	}
	
	
?>


var search_name=document.getElementById("searching").value;
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();

  	window.location.href = "search.php?search="+search_name;
  }
}



function search()
{
	var search_name=document.getElementById("searching").value;
	
	window.location.href = "search.php?search="+search_name;
}


</script>
</head>


<body>
<!--header-->
	<div class="header">
		<a href="a.php"><img src="logo.png" width="150px;" style="float:left; margin-left:70px;"></a>

			<div class="login">
				 
					
							<button class="cart" onclick="document.location='makeorder.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i> CARTS</button>
							
						<div class="dropdown">
							<button class="dropbtn"><?php echo $user_status ;?><i class="fa fa-caret-down" style="margin-left:15px;"></i></button>
							
						<div class="dropdown-content">
						
					
					<a href="profile.php"><?php echo $user_status ;?></a>
					<a href="show-wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i>MY WISHLIST</a>
					<a href="#">HELP</a>
					<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
				  </div>
				</div>
			</div>

		<div>
			<ul class="nav">
				<li style="margin-left:-200px;"><a href="a.php">HOME</a></li> 
				<li><a href="ABOUT_US.php">ABOUT US</a></li>
				<li><a href="product_catogery.php?category=lipstick">LIPSTICK</a></li>
				<li><a href="product_catogery.php?category=eyebrow">EYEBROW</a></li>
				<li><a href="product_catogery.php?category=foundation">FOUNDATION</a></li>
				<li><a href="product_catogery.php?category=eyeshadow">EYESHADOW</a></li>
				<li><a href="CONTACT_US.php">CONTACT US</a></li> 

			</ul>
		
	 </div>
	</div>
<!--header end-->
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="chanel_1.jpg" style="width:100%; height:700px; " >
  <div class="slide-text" style="margin-left:60px; color:white;">
	  <h3 data-animation="bounceInDown" data-delay="0" data-duration="500ms" style="color:white; margin-top:-500px;">* Customization of lipstick is available</h3>
	  <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Fashion Trends</h2>
	  <a href="customize.php" data-animation="fadeInUp" data-duration="500ms" class="slide-btn" >Shop Now</a>
  </div>
</div>

<div class="mySlides fade">
  <img src="Velvet_1.jpg" style="width:100%; height:700px;">
    <div class="slide-text" style="margin-left:60px; color:white;">
	  <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Summer Collection</h2>
  </div>
</div>

<div class="mySlides fade">
  <img src="Mac_1.jpg" style="width:100%; height:700px;">
   <div class="slide-text" style="margin-left:60px; color:white;">
	  <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Variety of MakeUp acessory</h2>
  </div>
</div>

</div> 

<!-- ****** Welcome Slides Area Start ****** -->
 <script>
 
var slideIndex = 0;
showSlides();
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < 3; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
 for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  
  setTimeout(showSlides, 2500); // Change image every 2 seconds
}
</script>


<div style="text-align:center;">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
 
           <h2 align="center" style="margin-top:100px;">New Arrivals</h2>

         <!--
                <div id="portfolio-menu">
                    <button class="btn active"> <a href="a.php?">ALL</button>
                    <button class="btn"><a href="a.php?category=lipstick">LIPSTICK</button>
                    <button class="btn"><a href="a.php?category=eyebrow">EYEBROW</button>
                    <button class="btn"><a href="a.php?category=foundation">FOUNDATION</button>
                    <button class="btn"><a href="a.php?category=eyeshadow">EYESHADOW</button> 
                </div>
            -->
			<?php
			
			$result = mysqli_query($connect, "select * from product WHERE new_arrive=1 ");	
	         while($row = mysqli_fetch_assoc($result))
				{
				
				?>	
			  <div class="column">
			  
				<div class="card">
				<a href="product_detail.php?prod_id=<?php echo $row["product_id"]; ?>">
				<img src="<?php echo $row["img_dir"] ?>" class="img">
					<div class="middle">
						<div class="text"><button onclick="document.location='makeorder.php'" style="border:none; background:transparent; cursor:grabbing; padding:20px;"><span class="text_cart">VIEW DETAILS</span></button></div>
					</div>
						<p class="p_name"><?php echo $row["product_name"] ?></p>
								<p class="p_price">RM <?php echo $row["product_price"] ?></p>
						
							
				</a>
				</div>
	
		</div>
            
			<?php
			}
			?>
				
			<!-- footer-->
			<div style="margin-top:900px; margin-left:20px; margin-bottom:20px;" >
				<table style="background:#F5F5F5; padding:30px; width:1400px; border-radius:10px;">
					<tr>
						<th align="left" width="35%;">52 Hz Online Domestic Shop</th>
						<th>Quick Link</th>
						<th width="20%">Office Address</th>
					</tr>
					
					<tr>
						<td><p>52 Hz Online Domestic Shop is made from a group of junior IT students comes from all over Malaysia. Our team are precious to get your opinion to become better and take it to next level.</p></td>
						<th>
							<a href="ABOUT_US.php">ABOUT US</a>
							<br>
							<a href="CONTACT_US.php">CONTACT US</a>
							<br>
							<a href="product_catogery.php?category=lipstick">LIPSTICK</a>
							<br>
							<a href="product_catogery.php?category=eyebrow">EYEBROW</a>
							<br>
							<a href="product_catogery.php?category=eyeshadow">EYESHADOW</a>
							<br>
						</th>
						<th>
							<a href="https://goo.gl/maps/YngYdFYYkMvY3R1UA">Jalan Ayer Keroh Lama, 75450 Bukit Beruang, Melaka</a>
						</th>
						
					</tr>
				</table>
			</div>

</body>
</html>

