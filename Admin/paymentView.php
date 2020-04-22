<?php
    include_once("sheader.php");
 ?>

    <div id="showpayment">
        <div class="inner p-5">
             <?php 
                $id=$_GET['view'];
                $phpcls=new phpclass();
                $res=$phpcls->showpaymentByAdmin($id);
                if (!empty($res)) {
                    while ($r=$res->fetch_assoc()) {
                        if (empty($r['banksrecipt'])) {?>
                          <h2 style="text-align: center;font-size: 60px;padding: 20px 0px;">Payment Details</h2>  
                        <?php }else{?>

                        <img src="../StudentAdmin/img/upload/<?php echo $r['banksrecipt']?>" alt="">
                    <?php }?>
                        

            
            
            <div class="row">
                <div class="col-md-6">
                    <p class="mt-1"><strong>Payment Ammount: </strong><?php echo $r['amount']?>Tk</p>
                    <p class="mt-1"><strong>Payment Method: </strong><?php echo $r['method']?></p>
                    <p class="mt-1"><strong>Payment Date: </strong><?php echo $r['reDate']?></p>
                </div>
                <div class="col-md-6">

                    <?php if($r['method']!="Bank"){?>
                    <p class="mt-1"><strong>Text Id: </strong><?php echo $r['txtId']?></p>

                    <?php 
                }
                        if ($r['method']=="Bank") { ?>
                           <p class="mt-1"><strong>Phone Or NID: </strong><?php echo $r['nidOrphone']?></p>
                        <?php }else{?>

                        <p class="mt-1"><strong>Phone Or NID: </strong><?php echo $r['phoneN']?></p>
                        <?php }

                        if ($r['method']=="Bank") { ?>
                           <p class="mt-1"><strong>Depositor name: </strong><?php echo $r['depositname']?></p>
                        <?php }?>

                    
                    
                </div>
            </div>
        <?php }}?>
        </div>
    </div>


<?php
    include_once("sfooter.php");
 ?>