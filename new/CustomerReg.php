<?php
    session_start();
    require_once('inc/connection.php');

    //checking if the user logged in
    //if(isset($_SESSION['user_id'])){
        //header('location:index.php');
    //}

    $query1= "SELECT id FROM customer ORDER BY id DESC LIMIT 1";

    $result_set = mysqli_query($connection,$query1);
    $result = mysqli_fetch_row($result_set);
    $id =$result[0]+1;
    $cus_id ="cus_".$id;
	
    if(isset($_POST['saveBTN'])){

        $cus_id = mysqli_real_escape_string($connection,$_POST['cus_id']);
        $cus_name = mysqli_real_escape_string($connection,$_POST['cus_name']);
        $cus_mobile = mysqli_real_escape_string($connection,$_POST['cus_mobile']);
        $cus_land = mysqli_real_escape_string($connection,$_POST['cus_land']);
        $cus_email = mysqli_real_escape_string($connection,$_POST['cus_email']);
        $cus_address_no = mysqli_real_escape_string($connection,$_POST['cus_address_no']);
        $cus_street = mysqli_real_escape_string($connection,$_POST['cus_street']);
        $cus_city1 = mysqli_real_escape_string($connection,$_POST['cus_city1']);
        $cus_city2 = mysqli_real_escape_string($connection,$_POST['cus_city2']);
        $reg_date = mysqli_real_escape_string($connection,$_POST['reg_date']);

        $query = "INSERT INTO customer(";
        $query.= "id,cus_id,cus_name,cus_mobile,cus_land,cus_email,cus_address_no,cus_street,cus_city1,cus_city2,reg_date,cus_delete";
        $query.= ") VALUES (";
        $query.= "'{$id}','{$cus_id}','{$cus_name}','{$cus_mobile}','{$cus_land}','{$cus_email}','{$cus_address_no}','{$cus_street}','{$cus_city1}','{$cus_city2}','{$reg_date}','0'";
        $query.= ")";
		echo $query;
		//$query = "INSERT INTO customer (id, cus_id, cus_name, cus_mobile, cus_land, cus_email, cus_address_no, cus_street, cus_city1, cus_city2, reg_date) values($id, '$cus_id' , '$cus_name', $cus_mobile, $cus_land, '$cus_email', '$cus_address_no', '$cus_street', '$cus_city1', '$cus_city2', '$reg_date')";
        $result_set = mysqli_query($connection,$query);

        if($result_set){
            header('location:CustomerReg.php');
        }
    }
?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Customer Registration - Max Studio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container content">
    <div class="row">
        <div class="row col-lg-12 navigationBar">
            <div class="row logOut col-lg-12">
                <div class="col-lg-6  textAlignLeft">
                    <h6><a href="Home_page.php"><img src="images/icons/settings-icon.png" alt="">Manage System</a></h6>
                </div>
                <div class="col-lg-6 textAlignRight">
                    <h6><a href="logout.php">Logout</a></h6>
                </div>
            </div>
            <div class="row col-lg-12">
                <div class="col-lg-1 logoDiv">
                    <img src="images/Max_logo.png" alt="">
                </div>
                <div class="col-lg-3 MaxName marginTop10px">
                    <h1>Max Studio</h1>
                </div>
                <div class="col-lg-8 links marginTop10px">
                    <ul>
                        <li><a href="Home_page.php">Home</a></li>
                        <li><a href="CustomerReg.php">Registration</a></li>
                        <li><a href="customer_search.php">Information</a></li>
                        <li><a href="Home_page.php">Exit</a></li>
                    </ul>
                </div>
            </div>
        </div> <!--navigationBar-->
        <div class="col-lg-12  mainDiv">
            <div class="col-lg-12 formDiv">
                <form action="CustomerReg.php" method="post">
                    <h5 class="text-center textAlignRight marginTop10px">Customer Registration</h5>
                    <div class="row col-lg-12 marginBottom10px">

                        <div class="col-lg-4 textAlignRight ">
                            <h6>Customer ID</h6>
                        </div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="cus_id" value="<?php echo $cus_id?>" readonly>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Name</h6>
                        </div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="cus_name" placeholder="Name with Initials " required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight " id="validatePhone">
                            <h6>Contact Number</h6>
                        </div>
                        <div class="col-lg-1 textAlignRight">
                            <h6>Mobile</h6>
                        </div>
                        <div class="col-lg-3 textAlignRight">
                            <input type="text" class="form-control" name="cus_mobile" minlength="10" maxlength="10" required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-5 textAlignRight">
                            <h6>Land</h6>
                        </div>
                        <div class="col-lg-3 textAlignRight">
                            <input type="text" class="form-control" name="cus_land" minlength="10" maxlength="10">
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Email</h6>
                        </div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="cus_email" required>
                        </div>
                    </div>
                    <div class="row col-lg-12 ">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Address</h6>
                        </div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="cus_address_no" placeholder="No" required>
                        </div>
                    </div>
                    <div class="row col-lg-12 ">
                        <div class="col-lg-4 textAlignRight"></div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="cus_street" placeholder="Street" required>
                        </div>
                    </div>
                    <div class="row col-lg-12 ">
                        <div class="col-lg-4 textAlignRight"></div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="cus_city1" placeholder="City1" required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight"></div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="cus_city2" placeholder="City2">
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight">
                            <h6>Date</h6>
                        </div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="date" class="form-control" name="reg_date" value="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4"></div>

                        <div class="col-lg-2 textAlignRight marginTop30px">
                            <button type="submit" class="btn btn-primary fullWidthButton" name="saveBTN">Save</button>
                        </div>
                        <div class="col-lg-2 textAlignRight marginTop30px">
                            <button type="reset" class="btn btn-danger fullWidthButton" name="clearBTN">Clear</button>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="row col-lg-12 footer">
            <p>Developed By Dilki Sonali</p>
        </div>
ç¶</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/fade.js"></script>
<script src="js/phoneNoValidate.js"></script>
</body>
</html>
<?php mysqli_close($connection);