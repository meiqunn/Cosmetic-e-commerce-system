<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd>
<html >
<?php 

include("dataconnection.php"); 
session_start();

if(isset($_SESSION['id']))
{
	$user=$_SESSION['id'];
	$result=mysqli_query($connect,"SELECT * FROM user where user_id='$user'");
}
			
?>
  <head>
    <title>52hz | Customize Lipstick</title>
    <link href="cutomize_styles.css" rel="stylesheet" type="text/css">
	<style>
	.sub_btn{padding:10px;
				font-weight:bold;
				letter-spacing:1px;
				background:#566D7E;
				color:white;
				margin-top:20px;
				width:20%;}
				
	.sub_btn:hover{background:#87AFC7;
				letter-spacing:2px;
				cursor:grabbing;
				color:black;}
	*rating*/

	.rating {
	  border: 2px solid #ccc;
	  background-color:transparent;
	  border-radius: 5px;
	  padding: 16px;
	  
	}

	.rating img {
	  float: left;
	  margin-right: 20px;
	  border-radius: 50%;
	}

	.rating span {
	  font-size: 20px;
	  margin-right: 15px;
	}

	</style>
  </head>
  <body> 
  <div class="logoPic" >
		<a href="a.php"><img src="logo.png" width="150px" class="logo"></a>
	</div>
	
<form method="post">
    <h1 style="text-align:center;">Customize lisptick </h1>


    <div id="background" style="background-color: rgb(204, 19, 66);width:300px;height:300px;">
			<div id="Layer1copy3"><img src="images/Layer1copy3.png" style="width:300px;height:300px;"></div>
		</div>


<div style="text-align: center;"> 
  <p>Choose the colors:</p>
    <a href="#" style="text-decoration:none;" onchange="changecolor();">
      <input type="color" id="head" name="head" value="#e66465">
    </a>
    <br>
	<input type="text" id="color" name="color" value="rgb(204, 19, 66)" hidden>
	<input type="submit" class="sub_btn" name="buy" value="BUY NOW">
	<h1 align="center" style="margin-top:70px; margin-bottom:20px;">Customer Review</h1>


<?php
		$result = mysqli_query($connect,"SELECT * from customer_review where product_id=999 order by time desc");
		while($product = mysqli_fetch_assoc($result))
		{ 
					
				
			if(mysqli_num_rows($result)> 0 )
			{
				
				?>
				<table width="80%" style=" margin-left:180px; display:inline;">
					<tr>
						<th>
							<div class="rating" style="text-align:left;">
							  <img src="user.jpg" alt="User" style="width:100px; margin:20px; margin-right:100px;">
							  
							  <span style="margin-left:700px; color:grey; font-size:15px;"><?php echo $product["time"] ?></span>
							  <p style="font-weight:bold; letter-spacing:2px; font-size:20px; color:blue; font-style:italic;"><?php echo $product["customer_name"] ?></p>
							  <p style="color:grey; font-style:italic;">COLOR : <?php echo $product["product_type_name"] ?></p>
							  <p style="font-size:18px;"><?php echo $product["review"] ?></p>
							  
							</div>
						</th>	
					</tr>
				</table>
				<?php 
				
			}
			
			

		}
		if(mysqli_num_rows($result) < 1)
			{
				?>
				<table width="80%" style=" margin-top:50px; margin-left:180px;">
					<tr>
						<th>
							<div class="rating" style="text-align:left;">
							  <p style="text-align:center">No Review Yet</p>
							  
							</div>
						</th>	
					</tr>
				</table>
				<?php
			}
		
		?>
</div>
<script>
  function changecolor()
  {
    color=document.getElementById("head").value;
   
    div=document.getElementById("background");
    div.style.backgroundColor=color;
    
	
	document.getElementById("color").value=color;
  }

</script>
</form>
 	
<?php
if (isset($_POST['addbtn'])&&!isset($_SESSION['id'])) 
{
	?>
		<script>
		alert("Please login first.");
		</script>
		
		<?php
}
if(isset($_POST['buy']))
{
	$color=$_POST["color"]; 
	
			mysqli_query($connect,"CREATE TABLE `52hz`.`tempo_customize` ( `customize_id` INT(255) NOT NULL  AUTO_INCREMENT , `color` VARCHAR(255) NOT NULL,PRIMARY KEY (`customize_id`))  ;");
			$table=mysqli_query($connect,"select * from tempo_customize" );
			$got_value = mysqli_fetch_array($table, MYSQLI_ASSOC) ;
			if(!$got_value)
			{
				mysqli_query($connect,"insert into tempo_customize (customize_id,color) values (1,'$color');");
			}
			else//makesure the table only store one data!
			{
				mysqli_query($connect,"DROP TABLE `52hz`.`tempo_customize`");
				mysqli_query($connect,"CREATE TABLE `52hz`.`tempo_customize` ( `customize_id` INT(255) NOT NULL  AUTO_INCREMENT , `color` VARCHAR(255) NOT NULL ,PRIMARY KEY (`customize_id`)) ;");
				mysqli_query($connect,"insert into tempo_customize (customize_id,color) values (1,'$color');");
				
			}
		 
		
			
	?>
	<script>
	window.location.href = "buynow(customize).php";
	</script>
	<?php
}

?>
 </body>
 </html>