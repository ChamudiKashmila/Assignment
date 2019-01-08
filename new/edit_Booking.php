<?php

    date_default_timezone_set("Asia/Colombo");

    session_start();
    require_once('inc/connection.php');
    //checking if the user logged in
    if(!isset($_SESSION['user_id']) ){
        header('Location:index.php');
    }
    //$bill_no = $_GET['bill_no'];

    $total ='';
    $balance ='';
    $advance ='';
    $category = '';
    $client_name = '';
    $function_date = '';
    $function_time = '';
    $location = '';
    $billing_date = '';
    $query = '';
    $query1 = '';
    if(isset($_GET['bill_no'])){
		$bill_no = $_GET['bill_no'];
        //$query = "SELECT * FROM event_details WHERE bill_no ='{$bill_no}' LIMIT 1";
        $query1 = "SELECT bill_no,client_name,total,advance,balance FROM payment_details WHERE id ='{$bill_no}' LIMIT 1";

        $result_set = mysqli_query($connection,$query1);
		$result = mysqli_fetch_row($result_set);
        //while($result = mysqli_fetch_assoc($result_set)){
            $bill_no = $result[0];
            $_SESSION['bill_no'] = $bill_no;
            //$category = $result['category'];
            $client_name = $result[1];
            //$function_time = date("h:i A",strtotime("{$result['function_time']}"));
            //$function_date = $result['function_date'];
            //$location = $result['location'];
            //$billing_date = $result['billing_date'];
        //}
		//print_r($result);

        //$payments=mysqli_query($connection,$query1);

        //while ($payment = mysqli_fetch_assoc($payments)){
            $total = $result[2];
            $advance =$result[3];
            $_SESSION['advance'] = intval($advance);
            $balance = $result[4];
        //}
    }


    if(isset($_POST['updateBillBTN'])){
        $bill_no = $_SESSION['bill_no'];
        $new_Balance= mysqli_real_escape_string($connection,$_POST['new_Balance']);
        $new_Payment= mysqli_real_escape_string($connection,$_POST['new_Payment']);
        $total_Paid = intval($new_Payment)+intval($_SESSION['advance']);

        $query = "UPDATE payment_details SET advance ='{$total_Paid}' , balance ='{$new_Balance}' WHERE bill_no = '{$bill_no}' LIMIT 1";

        $result_set =mysqli_query($connection,$query);
        if($result_set){
            header("Location:print_Booking.php?bill_no=$bill_no");
        }
    }
    if(isset($_POST['deleteBillBTN'])){
        $query .= "UPDATE availability SET is_booked = 0 WHERE bill_no = '{$_SESSION['bill_no']}';";
        $query .= "UPDATE event_details SET deleted_event = 1 WHERE bill_no ='{$_SESSION['bill_no']}' LIMIT 1;";
        $query .= "UPDATE payment_details SET deleted_event = 1 WHERE bill_no ='{$_SESSION['bill_no']}' LIMIT 1;";

        $result_set = mysqli_multi_query($connection,$query);

        if ($result_set){
            header("Location:view_Bookings.php");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Edit Booking - Max Studio</title>
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
            <div class="col-lg-12  mainDiv">
                <form action="edit_Booking.php" method="post">
                    <div class="row col-lg-12 marginTop30px marginBottom10px">
                        <div class="col-lg-12 text-center">
                            <h5>Bill Details</h5>
                        </div>
                        <div class="row col-lg-12 marginTop30px">
                            <div class="col-lg-3 textAlignRight">
                                <h6>Bill No</h6>
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="row col-lg-12 marginTop30px">
                            <div class="col-lg-3 textAlignRight">
                                <h6>Customer Name</h6>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" value="<?php echo $client_name?>" readonly>
                            </div>
                        </div>
                        <!--<div class="row col-lg-12 marginTop30px">
                            <div class="col-lg-3 textAlignRight">
                                <h6>Function Description</h6>
                            </div>
                            <div class="col-lg-4">
                                <textarea name="" id="" cols="30" rows="4" class="form-control" readonly><?php echo $category ." on ".$function_date." " .$function_time." at ".$location?></textarea>
                            </div>
                        </div>-->
                        <div class="row col-lg-12 marginTop30px">
                            <div class="col-lg-3 textAlignRight"> $
                                <h6>Total Amount</h6>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" value="<?php echo $total?>"  readonly>
                            </div>
                        </div>
                        <div class="row col-lg-12 marginTop30px">
                            <div class="col-lg-3 textAlignRight">
                                <h6>Current Balance</h6>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" value="<?php echo $balance?>" id="total" readonly>
                            </div>
                        </div>
                        <div class="row col-lg-12 marginTop30px">
                            <div class="col-lg-3 textAlignRight">
                                <h6>New Payment</h6>
                            </div>
                            <div class="col-lg-4">
                                <input type="number" class="form-control" name="new_Payment" id="advance">
                            </div>
                        </div>
                        <div class="row col-lg-12 marginTop30px">
                            <div class="col-lg-3 textAlignRight">
                                <h6>New Balance</h6>
                            </div>
                            <div class="col-lg-4">
                                <input type="number" class="form-control" name="new_Balance" id="balance" readonly>
                            </div>
                        </div>
                        <div class="row col-lg-12 marginTop30px">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary fullWidthButton confirm_Action" name="updateBillBTN" id="updateBillBTN" >Update Bill</button>
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-danger fullWidthButton confirm_Action" name="deleteBillBTN" id="deleteBillBTN">Delete Bill</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="row col-lg-12 footer">
                <p>Developed By Dilki Sonali</p>
            </div>
        </div>
    </div> <!--content-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/balance_Calc.js"></script>
    <script src="js/confirmClick.js"></script>
</body>
</html>
<?php
    mysqli_close($connection);
?>