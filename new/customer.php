<?php
session_start();
require_once('inc/connection.php');
//checking if the user logged in
//if(!isset($_SESSION['user_id']) ){
//header('Location:index.php');
//}
$query = "SELECT * FROM customer WHERE cus_delete = 0 ORDER BY id ASC";
$result_set =mysqli_query($connection,$query);
$user_List = '';
if($result_set){
    $user_List .="<h5 class='available text-center marginTop30px marginBottom10px'>Customer</h5>";
    $user_List .= "<table class='table table-bordered userTable text-center'>";
    $user_List .="<tr>";
    $user_List .="<th>Customer ID</th>";
    $user_List .="<th>Name</th>";
    $user_List .="<th>Email</th>";
    $user_List .="</tr>";
    while($result = mysqli_fetch_assoc($result_set)){
        $user_List .="<tr>";
        $user_List .= "<td>{$result['cus_id']}</td>";
        $user_List .= "<td>{$result['cus_name']}</td>";
        $user_List .= "<td>{$result['cus_email']}</td>";
        $user_List .= "</tr>";
    }
    $user_List .="</table>";
}
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Customer List - Max Studio</title>
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
                        <h6>Hello <?php echo $_SESSION['last_name']?> <a href="logout.php">Logout</a></h6>
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
            <div class="col-lg-12 mainDiv">
                <?php echo $user_List; ?>
            </div>
        </div>
        <div class="row">
            <div class="row col-lg-12 footer">
                <p>Developed By Dilki Sonali</p>
            </div>
        </div>

    </div> <!--content-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/fade.js"></script>
    </body>
    </html>
<?php mysqli_close($connection);?>