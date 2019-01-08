 <?php
    session_start();
    require_once('inc/connection.php');
    //checking if the user logged in
    //if(!isset($_SESSION['user_id']) ){
       // header('Location:index.php');
    //}
        $query1 = "SELECT id FROM employer_details ORDER BY id DESC LIMIT 1";

        $result_set = mysqli_query($connection,$query1);
        $result = mysqli_fetch_row($result_set);
        $id =$result[0]+1;
        $emp_id = "ms_".$id;

    if(isset($_POST['addEmployerBTN'])){

        $emp_id = mysqli_real_escape_string($connection,$_POST['emp_id']);
        $emp_name = mysqli_real_escape_string($connection,$_POST['emp_name']);
        $emp_position = mysqli_real_escape_string($connection,$_POST['emp_position']);
        $emp_contact_no = mysqli_real_escape_string($connection,$_POST['emp_contact_no']);
       //$emp_id = mysqli_real_escape_string($connection,$_POST['email']);

        $query = "INSERT INTO employer_details(";
        $query.="id,emp_id,emp_name,emp_position,emp_contact_no,emp_is_deleted";
        $query.=") VALUES (";
        $query.="'{$id}','{$emp_id}','{$emp_name}','{$emp_position}','{$emp_contact_no}',0";
        $query.=")";

        $result_set = mysqli_query($connection,$query);

        if($result_set){
            header('Location:add_Employee.php');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Add Employee - Max Studio</title>
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
                    <h6><a href="index.php"><img src="images/icons/logout.png" alt="">Logout</a></h6>
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
                        <li><a href="check_Availability.php">Availability</a></li>
                        <li><a href="view_Bookings.php">Bookings</a></li>
                        <li><a href="add_Employee.php">Employee</a></li>
                        <li><a href="CustomerReg.php">Customer</a></li>
                        <li><a href="edit_Booking.php">Payment</a></li>
                    </ul>
                </div>
            </div>
        </div> <!--navigationBar-->
    </div>
		<div class="row">
			<div class="col-lg-12  mainDiv">
                <form action="add_Employee.php" method="post">
                    <div class="col-lg-12 marginBottom10px marginTop30px">
                        <h5 class="text-center">Add New Employee</h5>
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
                            <input type="text" class="form-control" name="emp_name" placeholder="Name with initials" required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Contact No</h6>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="emp_contact_no" maxlength="10" minlength="10" id="phoneNumber" ma required>
                        </div>
                    </div>
                    <!--<div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Email</h6>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="email"  required>
                        </div>
                    </div>-->
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Employee Position</h6>
                        </div>
                        <div class="col-lg-4">
                            <select name="emp_position" id="" class="form-control">
                                <option value="Photographer" class="form-control">Photographer</option>
                                <option value="Videographer" class="form-control">Videographer</option>
                                <option value="Other_crew" class="form-control">Supportive Crew</option>
                            </select>
                        </div>
                    </div>

                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary fullWidthButton" name="addEmployerBTN">Save</button>
                        </div>
                        <div class="col-lg-2">
                            <button type="reset" class="btn btn-danger fullWidthButton">Cancel</button>
                        </div>
                    </div>
                </form>
			</div>
		</div>
		<div class="row">
			<div class="row col-lg-12 footer">
				<p></p>
			</div>
		</div>
	</div> <!--content-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/fade.js"></script>
    <script src="js/phoneNoValidate.js"></script>
</body>
</html>
<?php mysqli_close($connection);