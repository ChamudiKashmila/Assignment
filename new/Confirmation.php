<!doctype html>
<html>
<head>
    <title>Confirmation - Max Studio</title>
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
                <!--<div class="col-lg-6 textAlignRight">
                    <h6>Hello <?php echo $_SESSION['last_name']?> <a href="logout.php">Logout</a></h6>
                </div>-->
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

        <div class="col-lg-12 mainDiv">
            <div class="col-lg 4"></div>

            <div class="col-lg-12">
                <form action="index.php" method="post">
                    <div class="col-lg-12 marginBottom10px textAlignRight marginTop10px">
                        <h5 class="text-center">Confirmation</h5>
                    </div>
                    <div class="row col-lg-12 marginTop10px">
                        <h5 class="text-center"></h5>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Date</h6>
                        </div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="date" class="form-control" name="bookingDate">
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Customer ID</h6>
                        </div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="bookingDate">
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Event Type</h6>
                        </div>
                        <div class="col-lg-4">
                            <select name="emp_position" id="" class="form-control">
                                <option value="Wedding" class="form-control">Wedding</option>
                                <option value="BirthDayParty" class="form-control">Birthday Party</option>
                                <option value="Concert" class="form-control">Concert</option>
                                <option value="Commercial" class="form-control">Comercial</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px marginTop30px">
                        <div class="col-lg-5">
                            <h6>Available Crew</h6>
                            <select name="crewSelect" class="form-control " size="3" id="crewSelect">
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
                        <div class="col-lg-4"></div>
                    </div>

                    <div class="row col-lg-12 marginBottom10px marginTop30px">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-4textAlignRight marginTop30px">
                            <input type="checkbox" checked="checked" value="Latest Offers" name="ch[]"/><label for="latest-events">Customer Signature</label>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-2"></div>

                        <div class="col-lg-2 textAlignRight">
                            <button type="submit" class="btn btn-primary fullWidthButton marginTop10px " name="searchBTN">Search</button>
                        </div>
                        <div class="col-lg-2 textAlignRight">
                            <button type="submit" class="btn btn-primary fullWidthButton marginTop10px " name="searchBTN">Edit</button>
                        </div>
                        <div class="col-lg-2 textAlignRight">
                            <button type="submit" class="btn btn-primary fullWidthButton marginTop10px " name="searchBTN">Save</button>
                        </div>
                        <div class="col-lg-2 textAlignRight">
                            <button type="submit" class="btn btn-danger fullWidthButton marginTop10px " name="claerBTN">Clear</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div><!--content-->
</body>
</html>
