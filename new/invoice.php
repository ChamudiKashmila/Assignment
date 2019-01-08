
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
                    <h6>Reciept</h6>
                </div>
                <div class="row col-lg-12">
                    <table class="table col-lg-12">
                        <tr>
                            <th colspan="5"><p>Bill No :</p></th>
                            <th colspan="5" class="textAlignRight"><p>Billing Date :</p></th>
                        </tr>
                        <tr>
                            <td colspan="5">Category :</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="5">Client's Name :</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="5">Function Date :</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="5">Function Time :</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="5">Location :</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="5">Total Amount :</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">Advance Payment :</td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">Balance :</td>
                            <td>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="row col-lg-12 marginTop10px" style="margin-top: 10px">
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
                <div class="row col-lg-12 marginTop10px" style="margin-top: 10px">
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
                </div>
            </div>
        </div>
    </div> <!--content-->
    </body>
    </html>
