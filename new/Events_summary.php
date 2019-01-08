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
                <h6>Summary Report - Booked Event</h6>
            </div>
            <div class="row col-lg-12">
                <table class="table col-lg-12">
                    <tr>
                        <th colspan="5"><p>From :</p></th>
                        <th colspan="5" class="textAlignRight"><p>To :</p></th>
                    </tr>
                </table>
            </div>
            <div>
                <table class='table table-bordered userTable text-center'>
                    <tr>
                        <th>Bill No</th>
                        <th>Customer Id</th>
                        <th>Function Date</th>
                        <th>Event Type</th>
                        <th>Crew</th>
                    </tr>
                    <tr>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                    </tr>
                    <tr>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                    </tr>
                    <tr>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                    </tr>
                    <tr>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                    </tr>
                    <tr>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                        <td class=\"textAlignRight\"></td>
                    </tr>
            </div>
            <div class="row col-lg-12">
                <table class="table col-lg-12">
                    <tr>
                        <th colspan="5"><p>No of wedding(s) to be Covered:</p></th>
                    </tr>
                </table>
            </div>
            <div class="row col-lg-12">
                <table class="table col-lg-12">
                    <tr>
                        <th colspan="5"><p>No of Home Comming to be Covered:</p></th>
                    </tr>
                </table>
            </div>
            <div class="row col-lg-12">
                <table class="table col-lg-12">
                    <tr>
                        <th colspan="5"><p>No of pre shoot(s) to be Covered:</p></th>
                    </tr>
                </table>
            </div>
            <div class="row col-lg-12">
                <table class="table col-lg-12">
                    <tr>
                        <th colspan="5"><p>No of Birthday party(s) to be Covered:</p></th>
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