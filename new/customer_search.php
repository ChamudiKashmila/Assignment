<?php
session_start();
require_once ('inc/connection.php');

if(isset($_POST['searchBTN'])){

    $id = $_POST['id'];

    $query1 = "SELECT * FROM customer WHERE id='{$id}' LIMIT 1";

    $result_set = mysqli_query($connection,$query1);

    if(mysqli_num_rows($result_set)>0){
        while($row = mysqli_fetch_assoc($result_set)){

            $cus_name = $row['cus_name'];
            $cus_mobile = $row['cus_mobile'];
            $cus_land =$row['cus_land'];
            $cus_email = $row['cus_email'];
            $cus_address_no = $row['cus_address_no'];
            $cus_street = $row['cus_street'];
            $cus_city1 = $row['cus_city1'];
            $cus_city2 = $row['cus_city2'];

        }

        mysqli_free_result($result_set);
        mysqli_close($connection);
    }
    else{
        $cus_name = "";
        $cus_mobile = "";
        $cus_land = "";
        $cus_email = "";
        $cus_address_no = "";
        $cus_street = "";
        $cus_city1 = "";
        $cus_city2 = "";

    }

}
?>
<!doctype html>
<html>
<head>
    <title>Customer Information - Max Studio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
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
                        <li><a href="">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div> <!--navigationBar-->
        <div class="col-lg-12  mainDiv">
            <div class="col-lg-12 formDiv">
                <form action="CustomerInfo.php" method="post">
                    <h5 class="text-center textAlignRight marginTop10px">Customer Information</h5>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4 textAlignRight ">
                            <h6>Customer ID</h6>
                        </div>
                        <div class="col-lg-4 textAlignRight">
                            <input type="text" class="form-control" name="id" required>
                        </div>
                    </div>
                    <div class="row col-lg-12 marginBottom10px">
                        <div class="col-lg-4"></div>

                        <div class="col-lg-2 textAlignRight marginTop30px">
                            <button type="submit" class="btn btn-primary fullWidthButton" name="searchBTN"  value="Find">Search</button>
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
    </div>
</div>
</body>
</html>
<?php mysqli_close($connection);