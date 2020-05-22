<?php
    include_once("sheader.php");
 ?>

    <div class="payment p-5">
        <h1 class="text-center mb-5">Available balance: <span style="color: #E3106E"><?php echo $_SESSION['amoint'];?> Tk</span></h1>
        <div class="row">
            <div class="col-md-6">
                
                <form action="" method="post" class="" enctype="multipart/form-data">
                    <?php

                        $phpcls=new phpclass();
                        if (isset($_POST['bks']) || isset($_POST['rct'])) {
                            $res=$phpcls->bkashAndRocketPayment($_POST);
                        }else if (isset($_POST['bnk'])){
                            $res=$phpcls->bankPayment($_POST,$_FILES);
                        }
                    ?>
                    <div class="box">
                        <h3>Select Payment method</h3>
                        <div class="form-group">
                            <select name="slectpayment" id="paymentselect" class="form-control w-50" onchange="chosePayment()">
                                <option value="Bkash">Bkash</option>
                                <option value="Rocket">Rocket</option>
                                <option value="Bank">Bank Deposite</option>
                            </select>
                        </div>
                        <hr>
                        <div id="bkash">
                            <center><img class="plogo img-thumbnail" src="img/bkash2.png" alt="Payment"></center>
                            <h2 class="text-center mt-4">এই <span style="color: #E3106E">017xxxxxxxx</span> নাম্বারে টাকা সেন্ড করতে হবে তার পর কার্যসম্পাদন (TrxID) আইডি নিচের বক্স এ দিয়ে সাবমিট করতে হবে </h2>



                            <div class="boxs boxs p-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Enter Amount</h6>
                                        <input name="bamount" class="form-control" type="text" placeholder="Enter Amount">
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Enter Phone Number</h6>
                                        <input name="bphoneN" class="form-control" type="text" placeholder="Enter Phone NUmber">
                                        <br>
                                    </div>
                                </div>
                                <h6>Enter Text Id</h6>
                                <input name="btxtId" class="form-control" type="text" placeholder="Enter TrxID">
                                <br>
                                <input type="submit" class="btn btn-success w-100" name="bks">
                            </div>

                        </div>



                        <div id="rocket" class="mt-1">
                            <center><img class="plogo img-thumbnail" src="img/rocket.jpg" alt="Payment"></center>
                              <h2 class="text-center mt-4">এই <span style="color: #E3106E">017xxxxxxxx</span> নাম্বারে টাকা সেন্ড করতে হবে তার পর কার্যসম্পাদন (TrxID) আইডি নিচের বক্স এ দিয়ে সাবমিট করতে হবে </h2>

                              <div class="boxs p-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Enter Amount</h6>
                                        <input name="ramount" class="form-control" type="text" placeholder="Enter Amount">
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Enter Phone Number</h6>
                                        <input name="rphoneN" class="form-control" type="text" placeholder="Enter Phone NUmber">
                                        <br>
                                    </div>
                                </div>
                                <h6>Enter Text Id</h6>
                                <input name="rtxtId" class="form-control" type="text" placeholder="Enter TrxID">
                                <br>
                                <input type="submit" class="btn btn-success w-100" name="rct">
                            </div>
                              



                        </div>

                        <div id="banks" class=" mt-1">
                            <center>
                                <img class="plogo img-thumbnail" src="img/bank.png" alt="Payment">
                            </center>
                            <div class="row mt-3">
                                <div class="col-md-6 ">
                                    <div class="boxs">
                                        <center>
                                            <img class="sonali" src="img/sonalibank.jpg" alt="">
                                        </center>
                                        <p><strong>Account Number: </strong>124.236.35.20</p>
                                        <p><strong>Branch Name: </strong>Sonali Bank Amborkhana Sylhet</p>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="boxs">
                                        <center>
                                            <img class="ducth" src="img/ducthbank.png" alt="">
                                        </center>
                                        <p><strong>Account Number: </strong>124.236.35.20</p>
                                        <p><strong>Branch Name: </strong>Dutch Bangla Bank Amborkhana Sylhet</p>
                                    </div>
                                </div>
                            </div>
                            <div class="boxs p-3">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h6 class="ml-0 pl-0">Upload Payment receipt</h6>
                                        <input name="paymentrct" type="file" class="form-file-control">
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Depositor name</h6>
                                        <input name="youname" class="form-control" type="text" placeholder="Enter Name">
                                        <br>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="ml-0 pl-0">Enter Ammount</h6>
                                        <input name="bankamount" type="text" placeholder="Enter Ammount" class="form-control">
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Depositor Phone or NID</h6>
                                        <input name="urid" class="form-control" type="text" placeholder="Enter Phone or NID">
                                        <br>
                                    </div>
                                </div>

                                <br>
                                <input type="submit" class="btn btn-success w-100" name="bnk">
                            </div>

                        </div>
                    </div>

                    </form>

            </div>
            <div class="col-md-6">
                
                <div class="box2">
                    <h3>Payment History</h3>
                    <hr>
                    <div id="paymentShow">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once("sfooter.php");
 ?>