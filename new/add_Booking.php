<?php
session_start();
require_once('inc/connection.php');
//checking if the user logged in
//if(!isset($_SESSION['user_id']) ){
    //header('Location:index.php');
//}
//if(!isset($_SESSION['bookingDate'])){
    //header('Location:check_Availability.php');
//}

$bill_no = '';
$query = "SELECT id FROM event_details ORDER BY id DESC LIMIT 1";

$result_set = mysqli_query($connection,$query);
$result = mysqli_fetch_row($result_set);

$id =$result[0]+1;
$bill_no = date("Ymd")."_".$id;
$_SESSION['bill_no'] = $bill_no;

if(isset($_POST['saveOrderBTN'])){

    $functionCategory = mysqli_real_escape_string($connection,$_POST['functionCategory']);
    $clientName= mysqli_real_escape_string($connection,$_POST['clientName']);
    $clientcontactNumber = mysqli_real_escape_string($connection,$_POST['clientcontactNumber']);
    $functionDate = mysqli_real_escape_string($connection,$_POST['functionDate']);
    $functionTime = mysqli_real_escape_string($connection,$_POST['functionTime']);
    $location = mysqli_real_escape_string($connection,$_POST['location']);
    $others = mysqli_real_escape_string($connection,$_POST['others']);
    $total = mysqli_real_escape_string($connection,$_POST['total']);
    $advance = mysqli_real_escape_string($connection,$_POST['advance']);
    $balance = mysqli_real_escape_string($connection,$_POST['balance']);
    $selected_crew = $_POST['selected_crew'];
    $billing_date = '';

    $query = '';
    $crewMembers ='';
    $month = date("m");
    $year = date("Y");
    $empCount = count($selected_crew);
    for($i=0; $i < $empCount; $i++){
        $crewMembers .=$selected_crew[$i].",";
        $query .= "INSERT INTO availability(bill_no,emp_id,booking_date,is_booked) VALUES ('{$bill_no}','$selected_crew[$i]','{$_SESSION['bookingDate']}',1);";
        $query1 = "SELECT emp_name FROM employer_details WHERE emp_id = '{$selected_crew[$i]}';";
        $result_set = mysqli_query($connection,$query1);
        $result = mysqli_fetch_row($result_set);
        $people .="* ".$result[0]."<br>";
    }

    $query .= "INSERT INTO event_details(id,bill_no,category,client_name,client_contact_no,function_date,function_time,location,others,crew,billing_date,deleted_event) VALUES ('{$id}','{$bill_no}','{$functionCategory}','{$clientName}','{$clientcontactNumber}','{$functionDate}','{$functionTime}','{$location}','{$others}','{$people}',CURDATE(),0);";
    $query .= "INSERT INTO payment_details (bill_no,category,billing_date,client_name,client_contact_no,total,advance,balance,billing_month,billing_year,deleted_event) VALUES ('{$bill_no}','{$functionCategory}',curdate(),'{$clientName}','{$clientcontactNumber}','{$total}','{$advance}','{$balance}','{$month}','{$year}',0);";
    $result_set = mysqli_multi_query($connection,$query);
    if($result_set){
        header("Location:print_Booking.php?bill_no=$bill_no");
    }
    else{
        header('Location:error.php');
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
            <div class="col-lg-12 formDiv">
                <form action="add_Booking.php" method="post">
                    <h5 class="text-center marginTop10px">Add Booking For Event</h5>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight ">
                            <h6>Bill No</h6>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="billNo" readonly value="<?php echo $bill_no?>" >
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight ">
                            <h6>Category</h6>
                        </div>
                        <div class="col-lg-4">
                            <select name="functionCategory" id="functionCategory" class="form-control" required>
                                <option value="Wedding" class="form-control">Wedding</option>
                                <option value="Homecomming" class="form-control">Homecomming</option>
                                <option value="Engagement" class="form-control">Engagement</option>
                                <option value="Birthday_Party" class="form-control">Birthday Party</option>
                                <option value="Outdoor_Event" class="form-control">Outdoor Event</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
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
                    <!--<div class="payments" id="payments">
                        <div class="row col-lg-12 marginBottom10px">
                            <div class="col-lg-4 textAlignRight">
                                <h6>Total Amount Rs:</h6>
                            </div>
                            <div class="col-lg-4">
                                <input type="number" class="form-control" name="total" placeholder="Total Amount" id="total">
                            </div>
                        </div>
                        <div class="row col-lg-12 marginBottom10px">
                            <div class="col-lg-4 textAlignRight">
                                <h6>Advance Payment Rs:</h6>
                            </div>
                            <div class="col-lg-4">
                                <input type="number" class="form-control" name="advance" placeholder="Advance Payment" id="advance">
                            </div>
                        </div>
                        <div class="row col-lg-12 marginBottom10px">
                            <div class="col-lg-4 textAlignRight">
                                <h6>Balance Rs:</h6>
                            </div>
                            <div class="col-lg-4">
                                <input type="number" class="form-control" name="balance" placeholder="Balance" id="balance" readonly>
                            </div>
                        </div>
                    </div>-->
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4"></div>

                        <div class="col-lg-2">
                            <button type="reset" class="btn btn-danger fullWidthButton" id="resetBTN">Reset</button>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary fullWidthButton" name="saveOrderBTN" id="saveOrderBTN">Save</button>
                        </div>
                        <div class="col-lg-4"></div>
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
<script src="js/copySelectedValue.js"></script>
<script src="js/hideDiv.js"></script>
<script>
    $('#saveOrderBTN').click(function () {
        window.open('check_Availability.php');
    });
</script>
</body>
</html>
<?php mysqli_close($connection);?>
