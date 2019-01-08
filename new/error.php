<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Error</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container content">
		<div class="row">
            <div class="row col-lg-12 navigationBar">
                <div class="row logOut col-lg-12">
                    <div class="col-lg-6  textAlignLeft">
                        <h6><a href="admin.php"><img src="images/icons/settings-icon.png" alt="">Manage System</a></h6>
                    </div>
                    <div class="col-lg-6 textAlignRight">
                        <h6>Hello <?php echo $_SESSION['last_name']?> <a href="logout.php">Logout</a></h6>
                    </div>
                </div>
                <div class="row col-lg-12">
                    <div class="col-lg-2 logoDiv">
                        <img src="images/Max_logo.png" alt="">
                    </div>
                    <div class="col-lg-10 links">
                        <ul>
                            <li><a href="check_Availability.php">Exit</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!--navigationBar-->
		</div>
		<div class="row">
			<div class="row col-lg-12 mainDiv">
                <div class="col-lg-12 marginTop40px marginBottom10px">
                    <h4 class="text-center">Sorry ! Requested operation could not be completed. <br> </h4>
                    <h5 class="text-center marginTop30px">Please Contact System Administrator Kalhara on +94710322500</h5>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="row col-lg-12 footer">
				<p>Developed By Dilki Sonali</p>
			</div>
		</div>

	</div> <!--content-->
</body>
</html>