<?php
    session_start();
    require_once('inc/connection.php');

    if(!isset($_SESSION['user_id']) ){
        header('Location:index.php');
    }
    /*echo date("Y/m/d h:m:sa");*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Manage System - Max Studio</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container content">
		<div class="row">
            <div class="row col-lg-12 navigationBar">
                <div class="row logOut col-lg-12">
                    <div class="col-lg-6  textAlignLeft visibilityHidden">
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
                            <li><a href="check_Availability.php" class="active">Exit</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!--navigationBar-->
		</div>
		<div class="row">
			<div class="col-lg-12 adminDiv">
                <div class="col-lg-12 marginTop30px">
                    <div class="col-lg-12">
                        <div class="col-lg-12 clearfix">
                            <h4>1 .Employee Settings</h4>
                        </div>
                        <div class="col-lg-3 btn btn-outline-warning">
                            <h6><a href="add_Employee.php" target="_blank">Add Employee<img src="images/icons/add_new_user.png" alt="Add Employee"></a></h6>
                        </div>
                        <div class="col-lg-3 btn btn-outline-warning">
                            <h6><a href="employee_List.php">Employee List <img src="images/icons/user_list.png" alt="Employee List"></a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12 marginTop30px marginBottom10px">
                        <div class="col-lg-12 clearfix">
                            <h4>2. System Settings</h4>
                        </div>
                        <div class="col-lg-3 btn btn-outline-warning">
                            <h6><a href="add_SystemUser.php">Add System User<img src="images/icons/add_new_user.png" alt="Add System User"></a></h6>
                        </div>
                        <div class="col-lg-3 btn btn-outline-warning">
                            <h6><a href="user_List.php" target="_blank">System User List <img src="images/icons/user_list.png" alt="System User List"></a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12 marginTop30px marginBottom10px">
                        <div class="col-lg-12 clearfix">
                            <h4>3. Status</h4>
                        </div>
                        <div class="col-lg-3 btn btn-outline-warning">
                            <h6><a href="earnings.php" target="_blank">Payment<img src="images/icons/money.png" alt="System User List"></a></h6>
                        </div>
                    </div>
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
<?php mysqli_close($connection); ?>