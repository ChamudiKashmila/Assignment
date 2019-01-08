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
                <div class="col-lg-4  printPage">
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
                <h6>Order Delivery Report</h6>
            </div>
            <div class="row col-lg-12">
                <table class="table col-lg-12">
                    <tr>
                        <th colspan="5"><p>Bill No :</p></th>
                    </tr>
                </table>
            </div>
            <div class="row col-lg-12">
                <table class="table col-lg-12">
                    <tr>
                        <td></td>
                        <td colspan="5">Customer Id :</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5">Event Type :</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5">Date of Delivery :</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5">Deliver or Not :</td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-12"></div>
            <div class="col-lg-12"></div>
            <div class="row col-lg-12 mar">
                <table class="table col-lg-12">
                    <tr>
                        <th colspan="5" ><p>Issued Date :</p></th>
                        <th colspan="5" class="text-right"><p></p></th>
                    </tr>
                </table>
            </div>
            <div class="col-lg-12 ">
                <p class="text-center">Max Studio <?php echo date("Y")?></p>
            </div>

</body>
</html>