<?php
    header ("Access-Control-Allow-Origin: *");
    header ("Access-Control-Allow-Headers: origin, x-requested-with, content-type");
    header ("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
    date_default_timezone_set("Asia/Colombo");

    session_start();
    require_once('inc/connection.php');
    //checking if the user logged in
    //if(!isset($_SESSION['user_id']) ){
        //header('Location:index.php');
    //}
    $bill_no = $_GET['bill_no'];
    $total ='';
    $balance ='';
    $advance ='';
    $category = '';
    $client_name = '';
    $function_date = '';
    $function_time = '';
    $location = '';
    $billing_date = '';

    if(isset($_GET['bill_no'])){
        $query = "SELECT * FROM event_details WHERE bill_no ='{$bill_no}' ORDER BY bill_no DESC LIMIT 1";
        $query1 = "SELECT total,advance,balance FROM payment_details WHERE bill_no ='{$bill_no}' ORDER BY bill_no DESC LIMIT 1";

        $result_set = mysqli_query($connection,$query);


        while($result = mysqli_fetch_assoc($result_set)){
            $bill_no = $result['bill_no'];
            $category = $result['category'];
            $client_name = $result['client_name'];
            $function_date = $result['function_date'];
            $function_time = $result['function_time'];
            $location = $result['location'];
            $billing_date = $result['billing_date'];
        }

        $function_time = date("h:i A",strtotime("{$function_time}"));

        $homecomming ='';
        $payments=mysqli_query($connection,$query1);
        while ($payment = mysqli_fetch_assoc($payments)){
            if(trim($payment['total'])!=''){
                $homecomming = 1;
                $total = number_format("{$payment['total']}");
                $advance = number_format("{$payment['advance']}");
                $balance = number_format("{$payment['balance']}");
            }
            else{
                $total = "Please Refer Wedding Bill";
                $advance = "Please Refer Wedding Bill";
                $balance = "Please Refer Wedding Bill";
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title><?php echo $bill_no ?> Print Reciept - Max Studio</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/print.css">
</head>
<body>
	<div class="container content" id="capture">
		<div class="row">
            <div class="col-lg-12 printDiv">
                <div class="row col-lg-12 ">
                    <div class="col-lg-4 printPage">
                        <img src="images/Max_logo.png" alt="">
                    </div>
                    <div class="col-lg-7 printHeading">
                        <div class="col-lg-9 text-center">
                            <h6>Max Studio</h6>
                            <p>No 17/A , Gnanodaya Mawatha , Kalutara</p>
                            <p>071 577 0 535 / 034 57 00 821</p>
                            <p>maxstudiok@gmail.com</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-lg-12 text-center">
                    <h6>Reciept</h6>
                </div>
                <div class="row col-lg-12">
                    <table class="table col-lg-12">
                        <tr>
                            <th colspan="5"><p>Bill No :<?php echo $bill_no ?></p></th>
                            <th colspan="5" class="textAlignRight"><p>Billing Date :<?php echo  $billing_date ?></p></th>
                        </tr>
                        <tr>
                            <td colspan="5">Category :</td>
                            <td><?php echo $category ?></td>
                        </tr>
                        <tr>
                            <td colspan="5">Client's Name :</td>
                            <td><?php echo $client_name ?></td>
                        </tr>
                        <tr>
                            <td colspan="5">Function Date :</td>
                            <td><?php echo $function_date ?></td>
                        </tr>
                        <tr>
                            <td colspan="5">Function Time :</td>
                            <td><?php echo $function_time ?></td>
                        </tr>
                        <tr>
                            <td colspan="5">Location :</td>
                            <td><?php echo $location ?></td>
                        </tr>
                        <tr>
                            <td colspan="5">Total Amount :</td>
                            <td>
                                <?php
                                if($homecomming != 1){
                                    echo $total;
                                }else{
                                    echo "Rs :".$total."/=";
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">Advance Payment :</td>
                            <td>
                                <?php
                                if($homecomming != 1){
                                    echo $advance;
                                }else{
                                    echo "Rs :".$advance."/=";
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">Balance :</td>
                            <td>
                                <?php
                                if($homecomming != 1){
                                    echo $balance;
                                }else{
                                    echo "Rs :".$balance."/=";
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="row col-lg-12 marginTop50px" style="margin-top: 50px">
                    <table class="signature col-lg-12">
                        <tr>
                            <td colspan="2" class="text-center"><p>____________________________________</p></td>
                            <td></td>
                            <td colspan="2" class="text-center"><p>____________________________________</p></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><p>Customer Signature</p></td>
                            <td></td>
                            <td colspan="2" class="text-center"><p>Autherized Signature</p></td>
                        </tr>
                    </table>
                </div>
                <div class="row col-lg-12 marginTop70px" style="margin-top: 50px">
                    <p><b>Conditions :</b></p>
                    <div class="col-lg-12">
                        <p>* 50% of total bill should be paid to confirm the booking in advance.</p>
                        <p>* No refund is issued upon confirmed event.</p>
                        <p>* We can arrange a new date,for the cancellation upon the request and </p>
                        <p> &nbsp&nbsp the availability in our schedule.</p>
                    </div>
                </div>
                <hr>
                <div class="col-lg-12">
                    <p class="text-center">Max Studio <?php echo date("Y")?></p>
                    <p class="textAlignRight" style="font-size: 8px;text-align: right;margin-top: -10px">Printed on <?php echo date("Y-F-d")?></p>
                    <p style="font-size: 7px;text-align: center;">Software Solution By Kusal Kalhara</p>
                </div>
            </div>
		</div>
	</div> <!--content-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/print_Page.js"></script>
</body>
</html>
<?php
    mysqli_close($connection);
?>