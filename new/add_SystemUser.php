<?php
    session_start();
    require_once('inc/connection.php');
    //checking if the user logged in
    //if(!isset($_SESSION['user_id']) ){
        //header('Location:index.php');
    //}
        $query1 = "SELECT id FROM system_user ORDER BY id DESC LIMIT 1";
        $result_set = mysqli_query($connection,$query1);
        $result = mysqli_fetch_row($result_set);
        $id =$result[0]+1;
        $user_id="mu_".$id;

    if(isset($_POST['addSystemUserBTN'])){
        $user_id = mysqli_real_escape_string($connection,$_POST['user_id']);
        $first_name = mysqli_real_escape_string($connection,$_POST['first_name']);
        $last_name = mysqli_real_escape_string($connection,$_POST['last_name']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);

        $hashed_Password =sha1($password);

        $query = "INSERT INTO system_user(";
        $query.="id,user_id,first_name,last_name,password,user_deleted";
        $query.=") VALUES (";
        $query.="'{$id}','{$user_id}','{$first_name}','{$last_name}','{$hashed_Password}',0";
        $query.=")";

        $result_set = mysqli_query($connection,$query);

        if($result_set){

            header('Location:add_SystemUser.php');
            //echo "<div class='infoDiv alert-info col-lg-12'>";
            //echo "<h5 class='text-center'>System User Added Succesfully</h5>";
            //echo "</div>";
        }
    }
?>
    <!doctype html>
    <html>
    <head>
        <title>Add System Users</title>
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
                <form action="add_SystemUser.php" method="post">
                    <div class="col-lg-12 marginBottom10px marginTop30px">
                        <h5 class="text-center">Add New System User</h5>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>User ID</h6>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="user_id" value="<?php echo $user_id?>" readonly>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>First Name</h6>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="first_name" required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Last Name</h6>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="last_name" required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Password</h6>
                        </div>
                        <div class="col-lg-4">
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-2">
                            <button type="reset" class="btn btn-danger fullWidthButton">Cancel</button>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary fullWidthButton" name="addSystemUserBTN">Save</button>
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
<?php mysqli_close($connection);?>