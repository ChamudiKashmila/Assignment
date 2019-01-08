<?php
    session_start();
    require_once('inc/connection.php');
    //checking if the user logged in
    //if(!isset($_SESSION['user_id']) ){
       // header('Location:index.php');
    //}

    if(isset($_GET['id'])){
        $emp_id = mysqli_real_escape_string($connection,$_GET['id']);

        $query = "SELECT emp_name,emp_position employer_details WHERE emp_id ='{$emp_id}' LIMIT 1";

        $result_set = mysqli_query($connection,$query);
        $result ='';
        if($result_set){
            while ($result = mysqli_fetch_assoc($result_set)){
                $emp_id = $result['emp_id'];
                $emp_name = $result['emp_name'];
                $emp_position = $result['emp_position'];
            }
        }
    }
    if(isset($_POST['deleteEmployeeBTN'])){
        $emp_id =mysqli_real_escape_string($connection,$_POST['emp_id']);
        $query = "UPDATE employer_details SET emp_is_deleted = 1 WHERE emp_id = '{$emp_id}' LIMIT 1";
        $result = mysqli_query($connection,$query);

        if($result){
            header('Location:employee_List.php?deleted=Yes');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Home - Max Studio</title>
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
                <div class="col-lg-1 logoDiv">
                    <img src="images/Max_logo.png" alt="">
                </div>
                <div class="col-lg-3 MaxName">
                    <h1>Max Studio</h1>
                </div>
                <div class="col-lg-8 links">
                    <ul>
                        <li><a href="Home_page.php">Home</a></li>
                        <li><a href="view_Bookings.php">Availability</a></li>
                        <li><a href="view_Bookings.php">Bookings</a></li>
                        <li><a href="view_Bookings.php">Employee</a></li>
                        <li><a href="view_Bookings.php">Customer</a></li>
                        <li><a href="view_Bookings.php">Payment</a></li>
                    </ul>
                </div>
            </div>
        </div> <!--navigationBar-->
    </div>
		<div class="row">
			<div class="row col-lg-12 mainDiv">
                <div class="col-lg-12">
                    <form action="delete_Employee.php" method="post">
                        <div class="col-lg-12 marginBottom10px marginTop30px">
                            <h5 class="text-center">Delete Employee</h5>
                        </div>
                        <div class="row col-lg-12 marginBottom10px">
                            <div class="col-lg-4 textAlignRight">
                                <h6>Employee ID</h6>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="emp_id" value="<?php echo $emp_id?>" readonly>
                            </div>
                        </div>
                        <div class="row col-lg-12 marginBottom10px">
                            <div class="col-lg-4 textAlignRight">
                                <h6>Employee Name</h6>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="emp_name" value="<?php echo $emp_name?>" readonly>
                            </div>
                        </div>

                        <div class="row col-lg-12 marginBottom10px">
                            <div class="col-lg-4 textAlignRight">
                                <h6>Employee Position</h6>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" value="<?php echo $emp_position?>" readonly>
                            </div>
                        </div>

                        <div class="row col-lg-12 marginBottom10px">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-2">
                                <button type="reset" class="btn btn-danger fullWidthButton">Cancel</button>
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary fullWidthButton confirm_Action" name="deleteEmployeeBTN">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="row col-lg-12 footer">
				<p>Developed By Dilki Sonali</p>
			</div>
		</div>
	</div> <!--content-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/confirmClick.js"></script>
</body>
</html>
<?php mysqli_close($connection);?>