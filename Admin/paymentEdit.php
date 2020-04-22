<?php
    include_once("sheader.php");
 ?>

    <div id="showpayment">
        <div class="inner p-5">

            <h2 style="text-align: center;font-size: 60px;padding: 20px 0px;">Payment Information</h2>
            <?php 
                $id=$_GET['edit'];
                $phpcls=new phpclass();
                $res=$phpcls->showpaymentByAdmin($id);
                if (!empty($res)) {
                    while ($r=$res->fetch_assoc()) {
                        if (!empty($r['banksrecipt'])) {

                        	?>
                <center>
                    <img src="../StudentAdmin/img/upload/<?php echo $r['banksrecipt']?>" width="200" class="img-thumbnail mb-2" alt="">
                </center>

                <?php }?>

                    <div class="row">
                        <div class="col-md-6">
                            <p class="mt-1"><strong>Payment Ammount: </strong>
                                <?php echo $r['amount']; session::set("amt",$r['amount']);?>Tk</p>

                            <p class="mt-1"><strong>Payment Method: </strong>
                                <?php echo $r['method']?>
                            </p>
                            <p class="mt-1"><strong>Payment Date: </strong>
                                <?php echo $r['reDate']?>
                            </p>
                        </div>
                        <div class="col-md-6">

                            <?php if($r['method']!="Bank"){?>
                                <p class="mt-1"><strong>Text Id: </strong>
                                    <?php echo $r['txtId']?>
                                </p>

                                <?php 
                }
                        if ($r['method']=="Bank") { ?>
                                    <p class="mt-1"><strong>Phone Or NID: </strong>
                                        <?php echo $r['nidOrphone']?>
                                    </p>
                                    <?php }else{?>

                                        <p class="mt-1"><strong>Phone Or NID: </strong>
                                            <?php echo $r['phoneN']?>
                                        </p>
                                        <?php }

                        if ($r['method']=="Bank") { ?>
                                            <p class="mt-1"><strong>Depositor name: </strong>
                                                <?php echo $r['depositname']?>
                                            </p>
                                            <?php }?>

                        </div>
                    </div>
                    <?php }}?>
                        <h2 style="text-align: center;font-size: 60px;padding: 20px 0px;">Edit Payment</h2>
                        <center>
                            <form method="post">
                                <?php 
            		$id=$_GET['edit'];
               		 $phpcls=new phpclass();
            			if (isset($_POST['editpayment'])) {
            				$res=$phpcls->enterPayment($id,$_POST);
            				echo $res;
            			}
            		?>
                                    <h5>Enter Payment</h5>
                                    <input type="text" name="edtamt" class="form-control w-75 mb-1 mt-1" value="<?php echo $_SESSION['amt']?>" placeholder="Enter Payment Ammount">
                                    <input type="submit" name="editpayment" class="btn btn-danger w-75 mb-5">
                            </form>

                        </center>
        </div>
    </div>

    <?php
    include_once("sfooter.php");
 ?>