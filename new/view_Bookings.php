
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>View Bookings - Max Studio</title>
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
                <div class="col-lg-12">
                    <div class="row marginTop10px marginBottom10px">
                        <form action="view_Bookings.php" class="row col-lg-12" method="post">
                            <div class="col-lg-4">
                                <h6>Select starting date</h6>
                                <input type="date" name="startingDate" class="form-control" value="<?php echo date('Y-m-d');?>" required >
                            </div>
                            <div class="col-lg-4">
                                <h6>Select end date</h6>
                                <input type="date" name="endDate" class="form-control" >
                            </div>
                            <div class="col-lg-4 marginTop30px">
                                <button type="submit" class="btn btn-outline-info fullWidthButton" name="submitDateRange">Go</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row col-lg-12">
                    <div class="col-lg-12">
                        <?php
                        if(isset($eventList)){
                            echo $eventList;
                        }
                        ?>
                    </div>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="row col-lg-12 footer">
				<p></p>
			</div>
		</div>

	</div> <!--content-->
</body>
</html>
