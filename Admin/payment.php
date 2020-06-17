<?php
    include_once("sheader.php");
 ?>
    <div class="profile p-5">
        <div class="main">
            <div class="uniPage">
               

                <div class="row">
                    <div class="col-md-9">
                    <ul>
                    <li><a id="allpa" href="#">Approved Payment</a></li>
                    <li><a id="penpa" href="#">Pending Payment</a></li>
                    <li><a id="aprpa" href="#">Rejected Payment</a></li>
                    
                </ul>
                    </div>
                    
                </div>

                
            </div>

            <div id="approvepayment">
                <p>Approve</p>
            </div>
            
            <div id="pendingpayments">
                <p>Pending</p>                
            </div>

            <div id="rejectpayment">
                <p>Reject</p>   
            </div>
            
        </div>
    </div>
    <?php
    include_once("sfooter.php");
 ?>