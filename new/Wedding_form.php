<?php
    session_start();
    require_once ('inc/connection.php');
	$bill_no = $_SESSION['bill_no'];
	$cus_id = $_SESSION['cus_id'];
	$evnt_data = $_SESSION['bookingDate'];
	$func = $_SESSION['fcategory'];
	
	if(isset($_POST['wedSaveBTN'])){
		echo "test";
		
        $bill_no = $_SESSION['bill_no'];
		/*$fdate = ($_POST['fdate']);
		$ftime = ($_POST['ftime']);
        $total = ($_POST['tot']);
		$advance = ($_POST['advance']);
		$balance = ($_POST['bal']);
        $_SESSION['tot'] = $total;
		$_SESSION['adv'] = $advance;
		$_SESSION['bal'] = $balance;*/
		
		$_SESSION['bill_no'] = $bill_no;
		$fdate = mysqli_real_escape_string($connection,$_POST['fdate']);
		$ftime = mysqli_real_escape_string($connection,$_POST['ftime']);
		$total = mysqli_real_escape_string($connection,$_POST['tot']);
		$advance = mysqli_real_escape_string($connection,$_POST['advance']);
		$balance = mysqli_real_escape_string($connection,$_POST['bal']);
		$_SESSION['date'] = $fdate;
		$_SESSION['time'] = $ftime;
		$_SESSION['total'] = $total;
		$_SESSION['adv'] = $advance;
		$_SESSION['balance'] = $balance;
		
		$query6 = "SELECT id FROM payment_details ORDER BY id DESC LIMIT 1";

		$result_set = mysqli_query($connection,$query6);
		$result = mysqli_fetch_row($result_set);

		$bid =$result[0]+1;
		
		$query4 = "select cus_name,cus_mobile from customer where cus_id = '{$cus_id}';";
		$result_set = mysqli_query($connection, $query4);
		$result = mysqli_fetch_row($result_set);
		$customerName = $result[0];
		$cPhone = $result[1];
		$result_set =mysqli_query($connection,$query4);
		$query3 ="INSERT INTO payment_details (id, bill_no, category, billing_date, client_name, client_contact_no, total, advance, balance, billing_month, billing_year, deleted_event) VALUES('{$bid}', '{$bill_no}', '{$functionCategory}', CURDATE(), '{$customerName}', '{$cPhone}', '{$total}', '{$advance}', '{$balance}', 3, 2018, 0);";
			//print_r($result_set);
			$result_set = mysqli_query($connection, $query3);

        
        if($result_set){
            header("Location:print_Booking.php?bill_no=$bill_no");
        }
    }
	


?>

<!DOCTYPE html>
<html>
<head>
    <title>Wedding - Max Studio</title>
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
                    <!--<h6>Hello <?php echo $_SESSION['last_name']?> <a href="logout.php">Logout</a></h6>-->
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
            <form action="" method="post" style="height: 1700px;">
                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-3 textAlignRight marginTop10px">
                        <h5> Wedding </h5>
                    </div>
                    <div class="col-lg-5 marginTop10px textAlignRight">
                        <h6> Date</h6>
                    </div>
                    <div class="col-lg-3 marginTop10px">
                        <input type="date" class="form-control" name="bookingDate"  value="<?php echo date('Y-m-d'); ?>" >
                    </div>
                </div>
                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-4 textAlignRight">
                        <h6>Bill No</h6>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="billno" id="billno" value="<?php echo $bill_no?>" readonly>
                    </div>
                </div>
                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-4 textAlignRight">
                        <h6>Customer ID</h6>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="cust_id" id="cust_id" value="<?php echo $cus_id?>" readonly>
                    </div>
                </div>
                <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>
                <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>
                <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>

                <div class="col-lg-4 textAlignRight">
                    <h6> <u><font color="blue"> Wedding Details </font></u></h6>
                </div>
                <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>
                <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>
                <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>

                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-4 textAlignRight">
                        <h6>Function Date</h6>
                    </div>
                    <div class="col-lg-4">
                        <input type="date" class="form-control" name="bookingDate" id= "fdate" value="<?php echo $evnt_data; ?>" readonly>
                    </div>
                </div>

                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-4 textAlignRight">
                        <h6>Function time</h6>
                    </div>
                    <div class="col-lg-1">
                        <h6>From</h6>
                    </div>
                    <div class="col-lg-2">
                        <input type="time" class="form-control" id ="ftime" name="usr_time">
                    </div>

                    <div class="col-lg-1">
                        <h6>To</h6>
                    </div>
                    <div class="col-lg-2">
                        <input type="time" class="form-control" name="usr_time1">
                    </div>

                </div>

                <div class="row col-lg-12">
                    <div class="col-lg-4 textAlignRight">
                        <h6>Venue</h6>
                    </div>
                    <div class="col-lg-4 textAlignRight">
                        <input type="text" class="form-control" name="clintNo" placeholder="No">
                    </div>
                </div>
                <div class="row col-lg-12">
                    <div class="col-lg-4 textAlignRight"></div>
                    <div class="col-lg-4 textAlignRight">
                        <input type="text" class="form-control" name="clientStreet" placeholder="Street">
                    </div>
                </div>
                <div class="row col-lg-12">
                    <div class="col-lg-4 textAlignRight"></div>
                    <div class="col-lg-4 textAlignRight">
                        <input type="text" class="form-control" name="clientcity1" placeholder="City1">
                    </div>
                </div>
                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-4 textAlignRight"></div>
                    <div class="col-lg-4 textAlignRight">
                        <input type="text" class="form-control" name="clientcity2" placeholder="City2">
                    </div>
                </div>
                <div class="row col-lg-12 marginBottom10px marginTop30px">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3textAlignRight">
                        <input type="checkbox" checked="checked" value="Latest Offers" id = "photo" name="ch[]"/><label for="latest-events">Only Photography</label>
                    </div>
                    <div class="col-lg-5 textAlignRight">
                        <input type="checkbox" checked="checked" value="Latest Offers" id = "photoandvid" name="ch[]"/><label for="latest-events">Photography and Videography</label>
                    </div>
                    <div class="col-lg-3 textAlignRight">
                        <input type="checkbox" checked="checked" value="Latest Offers" id = "video" name="ch[]"/><label for="latest-events">Only Videography</label>
                    </div >
                </div>
                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-4 textAlignRight">
                        <h6>Package</h6>
                    </div>
                    <div class="col-lg-4 textAlignRight">
                        <select name="emp_position" id="PackageSelect" class="form-control">
                            <option value="Package01" class="form-control">Package 01</option>
                            <option value="Package02" class="form-control">Package 02</option>
                            <option value="Package03" class="form-control">Package 03</option>
                            <option value="Package04" class="form-control">Package 04</option>
                            <option value="Package05" class="form-control">Package 05</option>
                        </select>
                    </div>
                </div>
                <div class="row col-lg-12 marginBottom10px marginTop30px">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 marginTop30px">
                        <h6> <u><font color="blue"> Additional </font></u></h6>
                    </div>
                    <div class="row col-lg-12 marginTop10px">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10">
                            <div class="row col-lg-8">
                                <div class="col-lg-4 textAlignRight">
                                    <h7>20*30 Enlargement</h7>
                                </div>
                                <div class="col-lg-2 textAlignRight marginBottom10px">
                                    <input type="text" class="form-control" name="emp_id" id = "E1" value= "0">
                                </div>
                            </div>
                            <div class="row col-lg-8">
                                <div class="col-lg-4 textAlignRight">
                                    <h7>16*24 Enlargement</h7>
                                </div>
                                <div class="col-lg-2 textAlignRight marginBottom10px">
                                    <input type="text" class="form-control" name="emp_id"  id = "E2" value= "0">
                                </div>
                            </div><div class="row col-lg-8">
                                <div class="col-lg-4 textAlignRight">
                                    <h7>12*24 Enlargement</h7>
                                </div>
                                <div class="col-lg-2 textAlignRight marginBottom10px">
                                    <input type="text" class="form-control" name="emp_id"  id = "E3" value= "0">
                                </div>
                            </div>
                            <div class="row col-lg-8">
                                <div class="col-lg-4 textAlignRight">
                                    <h7>12*18 Enlargement</h7>
                                </div>
                                <div class="col-lg-2 textAlignRight marginBottom10px">
                                    <input type="text" class="form-control" name="emp_id"  id = "E4" value= "0">
                                </div>
                            </div>
                            <div class="row col-lg-8">
                                <div class="col-lg-4 textAlignRight">
                                    <h7>Thanking card</h7>
                                </div>
                                <div class="col-lg-2 textAlignRight">
                                    <input type="text" class="form-control" name="emp_id"  id = "TC" value= "0">
                                </div>
                            </div>
						
							
                            <!--</div>
                                <input type="checkbox" checked="checked" value="Latest Offers" name="ch[]"/><label for="latest-events">20*30 Enlargement </label>
                            <br><br><input type="checkbox" checked="checked" value="Latest Offers" name="ch[]"/><label for="latest-events">16*24 Enlargement</label></br><br>
                            <input type="checkbox" checked="checked" value="Latest Offers" name="ch[]"/><label for="latest-events">12*24 Enlargement</label>
                            <br><br> <input type="checkbox" checked="checked" value="Latest Offers" name="ch[]"/><label for="latest-events">12*18 Enlargement</label></br><br>
                            <input type="checkbox" checked="checked" value="Latest Offers" name="ch[]"/><label for="latest-events">Thanking card</label>-->

                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px marginTop30px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Total Amount</h6>
							<button onclick="myFunction()">Update Total</button>

								<script>
								function myFunction() {
								  
								  var x = document.getElementById("PackageSelect").value;
								  var y = 0;
								  if(x == "Package01"){
									  y = 145000;
								  }else if(x == "Package02"){
									 y = 70000; 
								  }else if(x == "Package03"){
									 y = 50000; 
								  }else if(x == "Package04"){
									 y = 190000; 
								  }else{
									 y = 85000; 
								 
								  
								 // document.getElementById("demo").innerHTML = "hfhfggjgf";
								 // document.getElementById("tot").value =y;
								  }
								   var e1 = document.getElementById("E1").value;
								   var e2 = document.getElementById("E2").value;
								   var e3 = document.getElementById("E3").value;
								   var e4 = document.getElementById("E4").value;
								   var tc = document.getElementById("TC").value;
								   var total = y + (e1*3500) + (e2*3000) + (e3*1800) + (e4*1000) + (tc*50);
								  
								  document.getElementById("tot").value = total;
								  
								  
								 }
								</script>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="total" id="tot" ma required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Advance Payment</h6>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="emp_contact_no" id="advance" value= "0">
                        </div>
                    </div>
					
					
					<div class="row col-lg-12 marginBottom10px marginTop30px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Balance</h6>
							<button onclick="myFunction2()">Update Balance</button>

								<script>
								function myFunction2() {
								  
								  
								 var total = document.getElementById("tot").value;
								 var advance = document.getElementById("advance").value;
								   
								 var balance = total-advance;
								  
								 document.getElementById("bal").value = balance;
								  
								  
								 }
								</script>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="balance" id="bal" ma required>
                        </div>
                    </div>
                    
					

                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Delivery Date</h6>
                        </div>
                        <div class="col-lg-4">
                            <input type="date" class="form-control" name="bookingDate" value="" min="<?php echo date('Y-m-d');?>" required>
                        </div>
                    </div>

                    <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>
                    <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>
                    <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td> <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>
                    <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>
                    <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>


                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-2"></div>

                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary fullWidthButton" name="wedDeleteBTN">Delete</button>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary fullWidthButton" name="wedSaveBTN" id="wedSaveBTN">Save</button>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary fullWidthButton" name="wedEditBTN">Edit</button>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-danger fullWidthButton" name="wedCloseBTN">Close</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div> <!--content-->
</body>
</html>