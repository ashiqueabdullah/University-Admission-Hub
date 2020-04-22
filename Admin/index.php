<?php
    include_once("sheader.php");
   ?>
    <div class="index pt-3 pl-5">
        <h2>Overview</h2>
        <p>Welcome to University Admission HUB</p>
        <div class="row">

            <div class="col-md-3">
                <div class="left">
                    <div class="row">
                        <div class="col-md-10">
                            <h5>Recent Student</h5>
                        </div>
                        <div class="col-md-2">
                            <a href="student.php" class="float-right btn btn-info">All</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        
                        <?php 
                            $phcls=new phpclass();
                            $res=$phcls->recentSudent();
                            if ($res) {
                                while ($r=$res->fetch_assoc()) {?>                        

                        <div class="col-md-3 mt-3">
                            <img src="../StudentAdmin/img/upload/<?php echo $r['image']?>" alt="">
                        </div>
                        <div class="col-md-9 mt-3">
                            <h6 class="mt-2" style="color: #798BFF"><?php echo $r['fname']." ".$r['lname']?></h6>
                            
                        </div>
                        <?php }}?>

                    </div>
                    
                </div>
            </div>


             <div class="col-md-3">
                <div class="left">
                    <div class="row">
                        <div class="col-md-10">
                            <h5>New Modarator</h5>
                        </div>
                        <div class="col-md-2">
                            <a href="modarator.php" class="float-right btn btn-info">All</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">

                         <?php 
                            $phcls=new phpclass();
                            $res=$phcls->recentModarator();
                            if ($res) {
                                while ($r=$res->fetch_assoc()) {?> 
                            
                            <div class="col-md-3 mt-3">
                                <img src="img/upload/<?php echo $r['img']?>" alt="">
                            </div>
                            <div class="col-md-9 mt-3">
                                <h6 class="mt-2" style="color: #798BFF"><?php echo $r['name']?></h6>
                            </div>
                        <?php }}?>

                    </div>
                    
                </div>
            </div>







             <div class="col-md-6">
                <div class="left">
                    <div class="row">
                        <div class="col-md-8">
                            <h5>Recent Payment</h5>
                        </div>
                        <div class="col-md-4">
                            <a href="payment.php" class="float-right btn btn-info">All</a>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Text ID OR Banks recit</th>
                                <th>Date</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $phcls=new phpclass();
                            $res=$phcls->recentPayment();
                            if ($res) {
                                while ($r=$res->fetch_assoc()) { ?> 

                            <tr>
                                <td><?php
                                    if (!empty($r['txtId'])) {
                                        echo $r['txtId'];
                                    }else{?>
                                        <img src="../StudentAdmin/img/upload/<?php echo $r['banksrecipt']?>" alt="" width="50">
                                    <?php }?>
                                    </td>
                                <td><?php echo $r['reDate']?></td>
                                <td><?php echo $r['amount']?></td>
                            </tr>
                            <?php }}?>
    
                        </tbody>
                    </table>
                    

                </div>
            </div>








        </div>
    </div>
    <?php
    include_once("sfooter.php");
   ?>