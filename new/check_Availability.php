<?php
    session_start();
    require_once('inc/connection.php');
    //checking if the user logged in
    //if(!isset($_SESSION['user_id']) ){
       // header('Location:index.php');
    //}
    if(isset($_POST['bookingDate'])){
        $bookingDate = mysqli_real_escape_string($connection,$_POST['bookingDate']);

        $query = "SELECT * FROM employer_details WHERE emp_id NOT IN (SELECT emp_id FROM availability WHERE booking_date = '{$bookingDate}' AND is_booked = 1)  AND emp_is_deleted = 0";
        $resultSet= mysqli_query($connection,$query);
        $count = mysqli_num_rows($resultSet);
        $userList = '';
        $_SESSION['bookingDate'] = $bookingDate;

        if($resultSet && $count > 0){
                $userList .= "<h5 class='available text-center'> These employees are available to serve you on {$bookingDate}.</h5>";
				$userList .= "<form action='crew.php'>";
				$userList .= " <input type='submit' value='Add Booking'>";
				$userList .= "</form>";
                //$userList .= "<button type='button' class='btn btn-outline-danger marginTop10px marginBottom10px float-left' id='addBookingBTN'>Add Booking</button>";
				//$userList .= "<form action='CustomerReg.php'>";
				//$userList .= " Emp ID:<br>";
				//$userList .= " <input type='text' name='eid'>";
				//$userList .= " <input type='submit' value='Submit'>";
				//$userList .= "</form>";
                $userList .= "<table class='table table-bordered userTable text-center'>";
                $userList .= "<tr>";
                $userList .= "<th>ID</th>";
                $userList .= "<th>Name of Employee</th>";
                $userList .= "<th>Position</th>";
                $userList .= "</tr>";
            while($result=mysqli_fetch_assoc($resultSet)){

                $userList .= "<tr>";
                $userList .= "<td>{$result['emp_id']}</td>";
                $userList .= "<td>{$result['emp_name']}</td>";
                $userList .= "<td>{$result['emp_position']}</td>";
                $userList .= "</tr>";
            }
            $userList .= "</table>";
        }
        else{
           $userList .= "<h5 class='redFonts'>Sorry,We have no available employees on {$bookingDate}</h5>";
        }
    }
    $starting_date = date('Y-m-d');
    $end_date = date('Y-m-d', strtotime('+1 week'));

    $query = "SELECT * FROM event_details WHERE function_date BETWEEN '{$starting_date}' AND '{$end_date}'";
    $result_set = mysqli_query($connection,$query);
    $count = mysqli_num_rows($result_set);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Check Bookings - Max Studio</title>
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
                        <h6><a href="logout.php">Logout</a></h6>
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
			<div class="col-lg-12 adminDiv">
				<form action="check_Availability.php" method="post">
                    <div class="col-lg-12 marginBottom10px textAlignRight marginTop10px">
                        <h5 class="text-center">Check Availability</h5>
                    </div>
                    <div class="row col-lg-12 marginTop10px">
                        <h5 class="text-center"></h5>
                    </div>
                    <div class="row col-lg-12 marginTop30px">
                        <div class="col-lg-4">
                            <h6 class="textAlignRight">Event Type</h6>
                        </div>
                        <div class="col-lg-3">
                            <select name="emp_position" id="" class="form-control">
                                <option value="Wedding" class="form-control">Wedding</option>
                                <option value="Home_coming" class="form-control">Home Coming</option>
                                <option value="Pre_shoot" class="form-control">Pre-shoot</option>
                                <option value="BirthDayParty" class="form-control">Birthday Party</option>
                                <option value="Concert" class="form-control">Concert</option>
                                <option value="Commercial" class="form-control">Comercial</option>
                            </select>
                        </div>
                    </div>
					<div class="row col-lg-12 marginTop10px">
                        <div class="col-lg-4">
                            <h6 class="textAlignRight">Date</h6>
                        </div>
                        <div class="col-lg-3">
                            <input type="date" class="form-control" name="bookingDate" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d');?>" required>
                        </div>

                    </div>
                    <div class="row col-lg-12 marginTop10px">
                        <div class="col-lg-4">
                            <h6 class="textAlignRight">Time</h6>
                        </div>
                        <div class="col-lg-3">
                            <input type="time" class="form-control" required>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary fullWidthButton">Check Availability</button>
                        </div>
                    </div>


				</form>
               <div class="col-lg-12 marginTop10px">
                   <?php if(isset($_POST['bookingDate'])){
                       echo $userList;
                   }
                   ?>
               </div>
			</div>
		</div>
		<div class="row">
			<div class="row col-lg-12 footer">
				<p></p>
			</div>
		</div>
	</div> <!--content-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/crew.js"></script>
</body>
</html>
<?php mysqli_close($connection);?>