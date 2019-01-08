<?php
    session_start();
    require_once ('inc/connection.php');

    $bill_no= '';
    $query = "SELECT id FROM crew ORDER BY id DESC LIMIT 1";

    $result_set = mysqli_query($connection,$query);
    $result = mysqli_fetch_row($result_set);

    $id =$result[0]+1;
    $bill_no = date("Ymd")."_".$id;
    $_SESSION['bill_no'] = $bill_no;

    if(isset($_POST['nextBTN'])) {

        $cus_id = mysqli_real_escape_string($connection,$_POST['cus_id']);
        $functionCategory = mysqli_real_escape_string($connection,$_POST['functionCategory']);
        $billing_date = '';

        $query = '';
        $crewMembers = '';
        $month = date("m");
        $year = date("Y");
		$crewData = $_POST['selected_crew']; 
        $empCount = count($crewData);
		 $_SESSION['cus_id'] = $cus_id;

       for ($i = 0; $i < $empCount; $i++) {
            $crewMembers .= $crewData[$i] . ",";
            $query .= "INSERT INTO availability (id,bill_no,emp_id,booking_date,is_booked) VALUES (null,'{$bill_no}','{$crewData[$i]}','{$_SESSION['bookingDate']}',1);";
			$result_set = mysqli_query($connection, $query);
           $query1 = "SELECT emp_name FROM employer_details WHERE emp_id = '{$crewData[$i]}';";
           $result_set = mysqli_query($connection, $query1);
           $result = mysqli_fetch_row($result_set);
           $people .= "* " . $result[0] . "<br>";
        }
		$query4 = "select cus_name,cus_mobile from customer where cus_id = '{$cus_id}';";
		$result_set = mysqli_query($connection, $query4);
		$result = mysqli_fetch_row($result_set);
		$customerName = $result[0];
		$cPhone = $result[1];
		
		$query6 = "SELECT id FROM payment_details ORDER BY id DESC LIMIT 1";

		$result_set = mysqli_query($connection,$query6);
		$result = mysqli_fetch_row($result_set);

		$bid =$result[0]+1;
		//fix date time amout // or go through the event add page
		
        $query2 = "INSERT INTO crew (id,bill_no,cus_id,category,crew,billing_date,deleted_event) VALUES ('{$id}','{$bill_no}','{$cus_id}','{$functionCategory}','{$people}',CURDATE(),0);";
					//INSERT INTO `crew` (`id`, `bill_no`, `cus_id`, `category`, `crew`, `billing_date`, `deleted_event`) VALUES ('1', '5444kjk', '545', 'wedding', 'gvhgvhgv', '2018-12-28', '0');

		$result_set = mysqli_query($connection, $query2);
        if ($result_set) {
            //header("Location:edit_Booking.php?bill_no=$bid");
			$loca = "Location:".$functionCategory.".php";
			header($loca);
        } else {
            header('Location:error.php');
        }
    }
?>

<!doctype html>
<html>
<head>
    <title>Crew - Max Studio</title>
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
                        <li><a href="CustomerReg.php.php">Customer</a></li>
                        <li><a href="">Payment</a></li>
                    </ul>
                </div>
            </div>
        </div> <!--navigationBar-->
    </div>
        <div class="col-lg-12  mainDiv">
            <div class="col-lg-12 formDiv">
                <form action="crew.php" method="post">
                    <h5 class="text-center textAlignRight marginTop30px">Select Crew For Event</h5>
                    <div class="row col-lg-12 marginTop30px marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Bill No</h6>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="bill_no" value="<?php echo $bill_no?>" readonly>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Customer ID</h6>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="cus_id" required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight ">
                            <h6>Category</h6>
                        </div>
                        <div class="col-lg-4">
                            <select name="functionCategory" id="functionCategory" class="form-control" required>
                                <option value="Wedding_form" class="form-control">Wedding</option>
                                <option value="homeComing_form" class="form-control">Homecomming</option>
                                <option value="Pre_shoot" class="form-control">PreShoot</option>
                                <option value="weddAndHC_form" class="form-control">Wedding and Home com</option>
                                <option value="other_function" class="form-control">Other Event</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px marginTop30px">
                        <div class="col-lg-5">
                            <h6>Available Crew</h6>
                            <select name="crewSelect" class="form-control " size="3" id="crewSelect">
                                <?php
                                $query = "SELECT * FROM employer_details WHERE emp_id NOT IN (SELECT emp_id FROM availability WHERE booking_date = date('{$_SESSION['bookingDate']}') AND is_booked = 1) AND emp_is_deleted = 0";

                                $result_set = mysqli_query($connection, $query);
                                $count = mysqli_num_rows($result_set);
                                if($result_set && $count > 0){
                                    while($result=mysqli_fetch_assoc($result_set)){
                                        echo "<option class='form-control' value='{$result['emp_id']}'>{$result['emp_name']} ({$result['emp_position']})</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-2 marginTop30px">
                            <div class="col-lg-12">
                                <button type="button" id="addCrewBTN" class="btn btn-outline-primary fullWidthButton marginTop10px">Add</button>
                            </div>
                            <div class="col-lg-12">
                                <button type="button" id="removeCrewBTN" class="btn btn-outline-danger fullWidthButton marginTop10px">Remove</button>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <h6>Selected Crew</h6>
                            <select name="selected_crew[]" id="selected_crew" size="3" class="form-control" multiple="multiple"></select>
                        </div>
                    </div>
                    <div class="row col-lg-12 textAlignRight marginTop30px">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-2 marginTop60px">
                            <button type="submit" class="btn btn-primary fullWidthButton" name="nextBTN">Next</button>
                        </div>
                        <div class="col-lg-2 marginTop60px">
                            <button type="submit" class="btn btn-danger fullWidthButton" name="clearBTN">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/copySelectedValue.js"></script>
<script>
    $('#saveOrderBTN').click(function () {
        window.open('check_Availability.php');
    });
</script>
</body>
</html>
<?php mysqli_close($connection);?>