<!DOCTYPE html>
    <html>
    <head>
        <title>Other Events - Max Studio</title>
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
            <div class="col-lg-12  mainDiv">
                <form action="other_function.php" method="post" style="height: 850px;">
                    <div class="col-lg-12 marginBottom10px textAlignRight marginTop10px">
                        <h5 class="text-center">Select The Occation</h5>
                    </div>
                    <div class=""></div>
                    <div class="row col-lg-12 marginBottom10px marginTop30px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Bill No</h6>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="bill_no" required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Customer ID</h6>
                        </div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row col-lg-12 marginBottom10px marginTop30px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Event type</h6>
                        </div>
                        <div class="col-lg-2 textAlignLeft">
                            <label><input type="radio" name="event"  value="birthday" > Birthday</label>
                            <br><label><input type="radio" name="event" value="fashion" > Fashion</label></br>
                            <label><input type="radio" name="event" value="concert" > Concert</label>
                            <br><label><input type="radio" name="event" value="othet" >Other Event</label></br>

                        </div>
                    </div>

                    <div class="row col-lg-12 marginBottom10px">

                        <div class="col-lg-3 textAlignRight marginTop30px">
                            <h6><input type="checkbox" checked="checked" value="photo" name="photography"/>Photography</label></h6>
                        </div>
                        <div class="col-lg-3 textAlignRight marginTop30px">
                            <h6><input type="checkbox" checked="checked" value="video" name="videography"/>Videography</label></h6>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3 textAlignRight marginTop30px">
                            <h6><input type="checkbox" checked="checked" value="video" name="videography"/>Photography and Videography</label></h6>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Function Date</h6>
                        </div>
                        <div class="col-lg-4">
                            <input type="date" class="form-control" name="bookingDate" value="" min="" required>
                        </div>
                    </div>

                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Function time</h6>
                        </div>
                        <div class="col-lg-1">
                            <h6>From</h6>
                        </div>
                        <div class="col-lg-3">
                            <input type="time" class="form-control" name="usr_time">
                        </div>

                        <div class="col-lg-1">
                            <h6>To</h6>
                        </div>
                        <div class="col-lg-3">
                            <input type="time" class="form-control" name="usr_time1">
                        </div>

                    </div>

                    <div class="row col-lg-12 ">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Location</h6>
                        </div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="cus_address_no" placeholder="No">
                        </div>
                    </div>
                    <div class="row col-lg-12 ">
                        <div class="col-lg-4 textAlignRight"></div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="cus_street" placeholder="Street">
                        </div>
                    </div>
                    <div class="row col-lg-12 ">
                        <div class="col-lg-4 textAlignRight"></div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="cus_city1" placeholder="City1">
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight"></div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="cus_city2" placeholder="City2">
                        </div>
                    </div>
-
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>No of Photos</h6>
                        </div>
                        <div class="col-lg-2 textAlignRight">
                            <input type="number" class="form-control" name="quantity">
                        </div>
                    </div>

                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Total Amount</h6>
                        </div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="TotalPayment" id="totalPayment" ma required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Advance Payment</h6>
                        </div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="AdvancePayment" id="advPayment" ma required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Balance</h6>
                        </div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="Balance" id="balance" ma required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2 textAlignRight">
                            <button type="submit" class="btn btn-primary fullWidthButton" name="addEmployerBTN">Save</button>
                        </div>
                        <div class="col-lg-2 textAlignRight">
                            <button type="submit" class="btn btn-primary fullWidthButton" name="addEmployerBTN">Update</button>
                        </div>
                        <div class="col-lg-2 textAlignRight">
                            <button type="submit" class="btn btn-danger fullWidthButton" name="addEmployerBTN">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>><!--content-->
    </body>
</html>
