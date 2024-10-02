<?php 
session_start();

include("dataconnection.php"); 

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
    <title>52Hz | Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="80x80" href="favicon/52Hz_logo.ico">
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="../assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="css/pages/dashboard1.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="navigation.css">
</head>
<script>

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
<body class="fix-header fix-sidebar card-no-border">
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
                        
                        <li class="nav-item hidden-xs-down search-box"> 
                               
                        </li>
                    </ul>
                   
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#"
                                id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="adminjpg.png" alt="user" class="" /> <span
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
                            class="fa fa-plus"></i><span class="hide-menu">Product Group</span></a>
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
						<li> <a class="waves-effect waves-dark" href="feedback.php" aria-expanded="false"><i
                            class="fa fa-list"></i><span class="hide-menu">User Feeback</span></a>
                        </li>
						<li> <a class="waves-effect waves-dark" href="review.php" aria-expanded="false"><i
                            class="fa fa-list"></i><span class="hide-menu">User Review</span></a>
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
                        <h3 class="text-themecolor">Dashboard</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
					<?php
					$product = mysqli_query($connect, "select * from product");
					$product_count = mysqli_num_rows($product);
					$new = mysqli_query($connect, "select * from product where new_arrive=1");
					$new_count = mysqli_num_rows($new);
					
					$total = 0;
					
					$user_result= mysqli_query($connect, "select purchase_history.* ,product_type.product_type_price from  purchase_history ,product_type WHERE purchase_history.history_isDelete=0 and purchase_history.product_type_id=product_type.product_type_id");
					while($user_row = mysqli_fetch_assoc($user_result))
					{
						$total+=($user_row["product_type_price"]*$user_row["product_qty"]);
					}
					
					$monthly_profit = $total*0.4;
					$total_purchase_amount = $total*0.6;
					
					?>
                    <!-- Column -->
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body">
							<div id="mychartcontainer" style="height: 370px; width: 100%;"></div>
							<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                                <script>
									window.onload = function () {

									var chart = new CanvasJS.Chart("mychartcontainer", {
										theme: "dark2",
										exportFileName: "Doughnut Chart",
										exportEnabled: true,
										animationEnabled: true,
										title:{
											text: "Inventory"
										},
										legend:{
											cursor: "pointer",
											itemclick: explodePie
										},
										data: [{
											type: "doughnut",
											innerRadius: 90,
											showInLegend: true,
											toolTipContent: "<b>{name}</b>: {y} (#percent%)",
											indexLabel: "{name} - #percent%",
											dataPoints: [
												{ y: <?php echo $product_count ?>, name: "Product" },
												{ y: <?php echo $new_count ?>, name: "New Arrived Product" }
											]
										}]
									});
									chart.render();

									function explodePie (e) {
										if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
											e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
										} else {
											e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
										}
										e.chart.render();
									}
									
									var chart = new CanvasJS.Chart("mychart2", {
									theme: "dark2",
									exportFileName: "Doughnut Chart",
									exportEnabled: true,
									animationEnabled: true,
									title:{
										text: "Sales profile"
									},
									legend:{
										cursor: "pointer",
										itemclick: explodePie
									},
									data: [{
										type: "doughnut",
										innerRadius: 90,
										showInLegend: true,
										toolTipContent: "<b>{name}</b>: RM {y} (#percent%)",
										indexLabel: "{name} - #percent%",
										dataPoints: [
											{ y: <?php echo $monthly_profit ?>, name: "Profit" },
											{ y: <?php echo $total_purchase_amount ?>, name: "Purchase Amount" }
										]
									}]
								});
								chart.render();

								function explodePie (e) {
									if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
										e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
									} else {
										e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
									}
									e.chart.render();
								}

									}
									</script>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
					<?php 
						
						$user_result = mysqli_query($connect, "SELECT * from user");	
						$user_count = mysqli_num_rows($user_result);
						$admin_result = mysqli_query($connect, "SELECT * from admin");	
						$admin_count = mysqli_num_rows($admin_result);						
					?>
					
                    <div class="col-lg-4">
                        <canvas id="myChart" style="width:100%;max-width:1200px"></canvas>
						<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
						<script>
						
						
						var xValues = ["User", "Admin"];
						var yValues = [<?php echo $user_count; ?>, <?php echo $admin_count; ?>];
						var barColors = [
						  "#b91d47",
						  "#00aba9"
						];

						new Chart("myChart", {
						  type: "doughnut",
						  data: {
							labels: xValues,
							datasets: [{
							  backgroundColor: barColors,
							  data: yValues
							}]
						  },
						  options: {
							title: {
							  display: true,
							  text: "User and Admin Amount"
							}
						  }
						});
						</script>
						<br>
						<br>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Sales Chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Projects of the Month -->
                <!-- ============================================================== -->
				<div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body">
							
								<div id="mychart2" style="height: 370px; width: 100%;"></div>
								<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
								<!--
								<script>
								window.onload = function () {

								var chart = new CanvasJS.Chart("mychart2", {
									theme: "dark2",
									exportFileName: "Doughnut Chart",
									exportEnabled: true,
									animationEnabled: true,
									title:{
										text: "Monthly Expense"
									},
									legend:{
										cursor: "pointer",
										itemclick: explodePie
									},
									data: [{
										type: "doughnut",
										innerRadius: 90,
										showInLegend: true,
										toolTipContent: "<b>{name}</b>: ${y} (#percent%)",
										indexLabel: "{name} - #percent%",
										dataPoints: [
											{ y: 450, name: "Food" },
											{ y: 120, name: "Insurance" },
											{ y: 300, name: "Travelling" },
											{ y: 800, name: "Housing" },
											{ y: 150, name: "Education" },
											{ y: 150, name: "Shopping"},
											{ y: 250, name: "Others" }
										]
									}]
								});
								chart.render();

								function explodePie (e) {
									if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
										e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
									} else {
										e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
									}
									e.chart.render();
								}

								}
								</script>-->
								
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
					<br>
					<br>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Projects of the Month -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Notification And Feeds -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Start Notification -->
                    <div class="col-lg-6 col-md-12">
                    <!--kosong-->
                    </div>
                    <!-- End Notification -->
                    <!-- Start Feeds -->
                    <div class="col-lg-6">
                    <!--kosong-->
                    </div>
                    <!-- End Feeds -->
                </div>
                <!-- ============================================================== -->
                <!-- End Notification And Feeds -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2022 52Hz Team</footer>
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
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/node_modules/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/node_modules/d3/d3.min.js"></script>
    <script src="../assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
</body>
</html>


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
?>