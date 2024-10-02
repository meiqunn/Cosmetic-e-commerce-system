<?php 
session_start();

?>

<?php
if (isset($_GET['search']))
{
		$search=($_GET['search']);

?>
		
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, AdminWrap lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, AdminWrap lite design, AdminWrap lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="AdminWrap Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title> 52Hz Admin Dashboard </title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="80x80" href="favicon/52Hz_logo.ico">
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php include("dataconnection.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/core-style.css">
<link rel="stylesheet" href="navigation.css">
</head>
<script>

function confirmation()
{
	var option;
	option=confirm("do you want to delete this product?");
	return option;
}


var search_name=document.getElementById("searching").value;
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();

  	window.location.href = "search.php?search="+search_name;
  }
}

<?php

	if(isset($_SESSION['admin']))
	{
		$admin=$_SESSION['admin'];
		$result=mysqli_query($connect,"SELECT * FROM admin where admin_id='$admin'");
						
		$row=mysqli_fetch_assoc($result);
						
		$admin_status=$row["admin_name"];
						
?>

function status()
{
	
	var admin_status="<?php echo $admin_status;?>";
	alert(admin_status);
	if(admin_status=="login")
	{
		window.location.href = "login.php";
	}
	else
	{
		window.location.href = "pro-list.php";
	}
	
}
</script>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">52Hz</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="favicon/52Hz_logo.ico" width="50" height="55" alt="homepage" class="dark-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src="favicon/52Hz_Logo_w.png" style="margin-left:-84px" width="230" height="70" alt="homepage" class="dark-logo" />
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="fa fa-search"></i></a>
                             <form class="app-search">
                                <input type="text" id="seaching" class="form-control" placeholder="Search..." onfocus="this.value''" name="search" autocomplete="off"><a
                                    class="srh-btn"><i class="fa fa-times"></i></a></form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="../assets/images/users/1.jpg" alt="user" class="" /> <span
                                    class="hidden-md-down"><?php echo $admin_status;?></span> </a>
                            <div class="dropdown-content">
							<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
							<a href="#">HELP</a>
							</div>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="profile.php" aria-expanded="false"><i
                                    class="fa fa-user-circle-o"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="insert-product.php" aria-expanded="false"><i
                                    class="fa fa-plus"></i><span class="hide-menu">Insert Product</span></a>
                        </li>
						<li> <a class="waves-effect waves-dark" href="insert-product-type.php" aria-expanded="false"><i
                                    class="fa fa-plus"></i><span class="hide-menu">Insert Product Type</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pro-list.php" aria-expanded="false"><i
                            class="fa fa-list"></i><span class="hide-menu">Product List</span></a>
                        </li>
						<li> <a class="waves-effect waves-dark" href="user-list.php" aria-expanded="false"><i
                            class="fa fa-list"></i><span class="hide-menu">User List</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="view_purchase_history.php" aria-expanded="false"><i
                            class="fa fa-history"></i><span class="hide-menu">Purchase History</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Product List</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="pro-list.php">Product List</a></li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
			
			<div style="font-size:20px;">
			<?php
		                    
                    $result = mysqli_query($connect, "select * from product WHERE product_isDelete=0 and product_name like '%$search%' ");	
					if(mysqli_num_rows($result)==0 )		
					{
						echo"<br><br>You are searching ".$search."<br>The product you search was not find!Please try again!";
						echo"<br>";
						echo"<br>";
					}
					else{
					?>
					</div>
                <div class="container" style="color:black; font-size:15px;">
		<table class="pro-list">
		<thead>
		<div class="container" style="color:black; font-size:15px;">
		<table class="pro-list">
		<thead>
			<tr>
				
				<th style="padding-right:20px; padding-bottom:20px;">Product id</th>
                <th style="padding-bottom:20px;">Product Name</th>
				<th style="padding-bottom:20px;padding-left:30px;">Product type name</th>
                <th style="padding-right:30px; padding-bottom:20px;;padding-left:30px;">Product price</th>	
                <th style="padding-left:30px; padding-bottom:20px;">Action</th>
			</tr>
		</thead>
		<tbody>
		<div style="text-align:center;font-size:30px;">
		
		<?php
                    while($row = mysqli_fetch_assoc($result))
                    {
                            $prodid=$row["product_id"];
							$p_result = mysqli_query($connect, "select * from product_type WHERE product_id='$prodid' and product_isDelete=0" ); 
							while($p_row = mysqli_fetch_assoc($p_result))
							{
                    ?>			
                    <script>
					function confirmation()
					{
					var option;
					option=confirm("do you want to delete this product?");
					return option;
					}
					</script>
					
                    <tr>
					<td style="padding-left:30px; padding-bottom:50px;"><?php echo $p_row["product_id"] ?></td>
                    <td style="padding-right:40px; padding-bottom:50px;"><?php echo $row["product_name"] ?></td>
                    <td style="padding-left:30px; padding-bottom:50px;"><?php echo $p_row["product_type_name"] ?></td>
                    <td style="padding-left:30px; padding-bottom:50px;">RM <?php echo $p_row["product_type_price"] ?></td>
                    <td style="padding-left:30px; padding-bottom:50px;"><a href="edit.php?edit&procode=<?php echo $p_row['product_type_id'];?>">Edit</a></td>
                    <td style="padding-left:12px; padding-bottom:50px;"><a href="pro-list.php?del&procode=<?php echo $p_row['product_type_id'];?>" onclick="return confirmation();">Delete</a></td>
					<td style="padding-left:30px; padding-bottom:50px;"><a href="details.php?view&procode=<?php echo $p_row['product_type_id'];?>">More details</a></td>
                    </tr>
                    <?php
                                            
					}	
					}	              
     
					}
		

			
	?>	
	</tbody>
	</table>
</div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2021 52Hz by <a href="https://www.wrappixel.com/">wrappixel.com</a> </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- jQuery peity -->
    <script src="../assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="../assets/node_modules/peity/jquery.peity.init.js"></script>

</body>
</html>

<?php
	
if (isset($_GET['del'])) 
{
	$pcode=$_GET["procode"];
	mysqli_query($connect,"UPDATE product SET product_isDelete=1 where product_id='$pcode'");
	header("location:pro-list.php");
}

mysqli_close($connect);
?>






		<script src="jquery-2.2.4.min.js"></script>
		<script src="plugins.js"></script>
		<script src="active.js"></script>

<?php



	}
	else
	{
		?>
	<script>
	alert("please log in!");
	window.location.href = "login.php";
	</script>
	<?php
	}
	}
?>