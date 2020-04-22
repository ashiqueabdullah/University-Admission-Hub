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
                    <div class="col-md-3">
                      <form class="form-inline d-flex justify-content-center md-form form-sm  mt-1">
                          <input class="p-3 form-control form-control-sm mr-3" type="text" placeholder="Search Student By SSC Rool Or Name"
                            aria-label="Search">
                          <i class="fas fa-search" aria-hidden="true"></i>
                        </form>  
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