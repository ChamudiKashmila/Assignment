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
            <form action="add_SystemUser.php" method="post" style="height: 1700px;">
                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-3 textAlignRight marginTop10px">
                        <h5>Home Coming</h5>
                    </div>
                    <div class="col-lg-5 marginTop10px textAlignRight">
                        <h6> Date</h6>
                    </div>
                    <div class="col-lg-3 marginTop10px">
                        <input type="date" class="form-control" name="bookingDate" value="<?php echo date('Y-m-d'); ?>" >
                    </div>
                </div>
                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-4 textAlignRight">
                        <h6>Bill No</h6>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="cus_id" id="cus_id" ma required>
                    </div>
                </div>
                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-4 textAlignRight">
                        <h6>Customer ID</h6>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="cus_id" id="cus_id" ma required>
                    </div>
                </div>
                <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>
                <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>
                <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>

                <div class="col-lg-4 textAlignRight">
                    <h6> <u><font color="blue"> Home Coming </font></u></h6>
                </div>
                <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>
                <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>
                <td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td><td> &nbsp;</td>

                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-4 textAlignRight">
                        <h6>Function Date</h6>
                    </div>
                    <div class="col-lg-4">
                        <input type="date" class="form-control" name="bookingDate" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d');?>" required>
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
                        <input type="time" class="form-control" name="usr_time">
                    </div>

                    <div class="col-lg-1">
                        <h6>To</h6>
                    </div>
                    <div class="col-lg-2">
                        <input type="time" class="form-control" name="usr_time1">
                    </div>

                </div>

                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-4 textAlignRight">
                        <h6>Venue</h6>
                    </div>
                    <div class="col-lg-4 textAlignRight">
                        <input type="text" class="form-control" name="clienAddress" placeholder="No" required>
                    </div>
                </div>
                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-4 textAlignRight"></div>
                    <div class="col-lg-4 textAlignRight">
                        <input type="text" class="form-control" name="clientStreet" placeholder="Street" required>
                    </div>
                </div>
                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-4 textAlignRight"></div>
                    <div class="col-lg-4 textAlignRight">
                        <input type="text" class="form-control" name="clientcity" placeholder="City" required>
                    </div>
                </div>
                <div class="row col-lg-12 marginBottom10px marginTop30px">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3textAlignRight">
                        <input type="checkbox" checked="checked" value="Latest Offers" name="ch[]"/><label for="latest-events">Only Photography</label>
                    </div>
                    <div class="col-lg-5 textAlignRight">
                        <input type="checkbox" checked="checked" value="Latest Offers" name="ch[]"/><label for="latest-events">Photography and Videography</label>
                    </div>
                    <div class="col-lg-3 textAlignRight">
                        <input type="checkbox" checked="checked" value="Latest Offers" name="ch[]"/><label for="latest-events">Only Videography</label>
                    </div >
                </div>
                <div class="row col-lg-12 marginBottom10px">
                    <div class="col-lg-4 textAlignRight">
                        <h6>Package</h6>
                    </div>
                    <div class="col-lg-4 textAlignRight marginTop30px">
                        <select name="emp_position" id="" class="form-control">
                            <option value="" class="form-control">Package 01</option>
                            <option value="" class="form-control">Package 02</option>
                            <option value="" class="form-control">Package 03</option>
                            <option value="" class="form-control">Budget Package</option>
                            <option value="" class="form-control">Special Budget Package</option>
                        </select>
                    </div>
                </div>
                <div class="row col-lg-12 marginBottom10px">
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
                                    <input type="text" class="form-control" name="emp_id">
                                </div>
                            </div>
                            <div class="row col-lg-8">
                                <div class="col-lg-4 textAlignRight">
                                    <h7>16*24 Enlargement</h7>
                                </div>
                                <div class="col-lg-2 textAlignRight marginBottom10px">
                                    <input type="text" class="form-control" name="emp_id">
                                </div>
                            </div><div class="row col-lg-8">
                                <div class="col-lg-4 textAlignRight">
                                    <h7>12*24 Enlargement</h7>
                                </div>
                                <div class="col-lg-2 textAlignRight marginBottom10px">
                                    <input type="text" class="form-control" name="emp_id">
                                </div>
                            </div>
                            <div class="row col-lg-8">
                                <div class="col-lg-4 textAlignRight">
                                    <h7>12*18 Enlargement</h7>
                                </div>
                                <div class="col-lg-2 textAlignRight marginBottom10px">
                                    <input type="text" class="form-control" name="emp_id">
                                </div>
                            </div>
                            <div class="row col-lg-8">
                                <div class="col-lg-4 textAlignRight">
                                    <h7>Thanking card</h7>
                                </div>
                                <div class="col-lg-2 textAlignRight">
                                    <input type="text" class="form-control" name="emp_id">
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
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="emp_contact_no" id="phoneNumber" ma required>
                            </div>
                        </div>
                        <div class="row col-lg-12 marginBottom10px">
                            <div class="col-lg-4 textAlignRight">
                                <h6>Advance Payment</h6>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="emp_contact_no" id="phoneNumber" ma required>
                            </div>
                        </div>
                        <div class="row col-lg-12 marginBottom10px">
                            <div class="col-lg-4 textAlignRight">
                                <h6>Balance</h6>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="emp_contact_no" id="phoneNumber" ma required>
                            </div>
                        </div>
                        <div class="row col-lg-12 marginBottom10px">
                            <div class="col-lg-4 textAlignRight">
                                <h6>Delivery Date</h6>
                            </div>
                            <div class="col-lg-4">
                                <input type="date" class="form-control" name="bookingDate" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d');?>" required>
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
                                <button type="submit" class="btn btn-primary fullWidthButton" name="wedSaveBTN">Save</button>
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