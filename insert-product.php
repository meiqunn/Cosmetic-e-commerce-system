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
    <title>52Hz Product Group</title>
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
<?php include 'dataconnection.php';?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/core-style.css">
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
function getFile(filePath) {
        return filePath.substr(filePath.lastIndexOf('\\') + 1).split('.')[0];
    }

    function getoutput() {
        outputfile.value = getFile(inputfile.value);
        extension.value = inputfile.value.split('.')[1];
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
                        <li class="nav-item hidden-xs-down search-box"> 
                               
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
						<li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="adminjpg.png" alt="user" class="" /> <span
                                    class="hidden-md-down"><?php echo $admin_status;?></span> </a>
                            <div class="dropdown-content">
							<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
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
                        <h3 class="text-themecolor">Product Group</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Product Group</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">
                                    <table class="table">
                                        <tbody>                                                                             
                                             <tr>
                                                <td><b>Product Code: </b></td> 
                                                <td><input type="number" name="product_code" size="30px"></td>
                                    
                                            </tr>
											
											<tr>
                                                <td><b>Product Category: </b></td> 
                                                <td>
                                                <select name="ptype">
                                            
                                                <option value="lipstick">lipstick</option>
                                                <option value="foundation">foundation</option>
                                                <option value="eyebrow">eyebrow</option>
												<option value="eyeshadow">eyeshadow</option>
                                                </select>
                                                    
                                                </td> 
                                            </tr>
                                            
                                            <tr>
                                                <td><b>Product Name: </b></td> 
                                                <td><input type="text" name="product_name" size="30px"></td>
                                    
                                            </tr>
											
											<tr>
                                                <td><b>Product Price: </b></td> 
                                                <td><input type="number" name="product_price" size="30px" min="1"></td>
                                    
                                            </tr>
                                            
                                            <tr>
                                                <td><b>Product Description: </b></td> 
                                                <td><input type="text" name="product_des" size="30px"></td>
                                    
                                            </tr>
                                                               
											<tr>
                                                <td><b>Product Picture: </b></td> 
                                                <td>
												<input type="file" name="choosefile" />
												
												
												</td> 
                                            </tr> 
											
                                            <tr>
                                                <td colspan="2">
                                                <input type="submit" name="btn_submit" value="Submit">
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
            <footer class="footer"> © 2022 52Hz Team </footer>
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
$msg="";

if(isset($_POST['btn_submit']) )	
{
	echo"<pre>",print_r($_FILES['choosefile']['name']),"</pre>";
	
	$pcode=$_POST['product_code'];
	$pname=$_POST['product_name'];
	$image=($_FILES['choosefile']['name']);
	$pprice = $_POST['product_price'];
	$pdes=$_POST['product_des'];
	$cat=$_POST['ptype'];
	
	if($pcode == "" && $pname == "" && $pdes == "" && $pprice == "" && $_FILES['choosefile']['name']=="")
	{
		?>
			<script>
			alert("Please fill up all of the require details.");
			</script>
		<?php
	}
	else if($pcode == "")
	{
		?>
			<script>
			alert("Please fill up the product code.");
			</script>
		<?php
	}
	else if($pname == "")
	{
		?>
			<script>
			alert("Please fill up the product name.");
			</script>
		<?php
	}
	else if($pdes == "")
	{
		
	}
	else if($pprice == "")
	{
		?>
			<script>
			alert("Please fill up the product price.");
			</script>
		<?php
	}
	else
	{
		
	
	$img=time() . '_' . $_FILES['choosefile']['name'];
	
	
	$target='Product_img/' . $img;
	if(move_uploaded_file($_FILES['choosefile']['tmp_name'],$target))
	{
		$msg = "Upload Sucessfully";
		
	} else{
		$msg = "Failed to upload";
	}
	
	
	
	$product=mysqli_query($connect, "Select count(*) from product where product_name like '$pname'");
	$prow=mysqli_fetch_assoc($product);
	$repeat=$prow['count(*)'];
	
	$code=mysqli_query($connect, "Select count(*) from product where product_id like '$pcode'");
	$coderow=mysqli_fetch_assoc($code);
	$coderepeat=$coderow['count(*)'];
	
	if($repeat==0 && $coderepeat == 0)
	{
		
		
			mysqli_query($connect, "INSERT INTO product(product_id, product_category, product_name, product_description, product_price, img_dir,new_arrive,product_isDelete) VALUES ('$pcode', '$cat','$pname','$pdes', '$pprice', '$img','1','0')");
			?>
			<script>
			alert("Product had successfully added!");
			</script>
			<?php
		
	}
	else if($repeat > 0)
	{
		?>
		<script>
		alert("Product name had been used! Please enter another product name that had not been used!");
		</script>
		<?php
	}
	else if($coderepeat > 0)
	{
		?>
		<script>
		alert("Product code had been used! Please enter another product code that had not been used!");
		</script>
		<?php
	}
	
	
		
}
}


?>


</div>

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