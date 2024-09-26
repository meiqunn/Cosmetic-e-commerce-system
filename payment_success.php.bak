<?php include("dataconnection.php"); 
session_start();
?>


<html>
<head>
<title>52 Hz | Review Payment</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 body {
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
		  text-align: center;
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin-left:500px;
		margin-top:60px;
		margin-bottom:20px;}
		
		a{text-decoration:none;
			font-weight:bold;
			letter-spacing:2px;
			border:1px dotted white;}
			
		a:hover{text-decoration:overline;
				letter-spacing:4px;
				color:#85929E;
				cursor:grabbing;}
</style>
</head>
<script>
 
</script>

<body>
	<div style="margin-top:-10px;">
		<?php 
		 if(isset($_GET['payid']))
		 {
			 $payid=$_GET['payid'];
		 }
		if(isset($_SESSION['id']))
		{
			$user=$_SESSION['id'];
			$result=mysqli_query($connect,"SELECT * FROM user where user_id='$user'");
			
			$row=mysqli_fetch_assoc($result);
			echo"welcome ---".$row["user_name"]."----";
			//echo"<br><a href='logout.php'>LOGOUT</a>";
			
			}
		
		
		?>
		
	</div>
	
      <div class="card">
		<div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
			<i class="checkmark">✓</i>
		</div>
        <h1>Success</h1> 
        <p>We received your purchase request;<br/> we'll be in touch shortly!</p>
		<h3 style="text-align:center;">YOUR ORDER ID IS : <?php echo $payid; ?> </h3>
			<a href="a.php"><p style="text-align:center"><i style="padding-right:5px; color:#85929E;" class="fa fa-home" aria-hidden="true"></i>BACK TO HOME</p></a>
			<a href="view_purchase.php?payid=<?php echo $payid?>"><p style="text-align:center"><i style="padding-right:5px; color:#85929E;" class="fa fa-history" aria-hidden="true"></i>view purchase</p></a>
      </div>

			
</body>
</html>

