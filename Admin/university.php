<?php
    include_once("sheader.php");
 ?>
    <div class="profile p-5">
        <div class="main">
            <div class="uniPage">
               

                <div class="row">
                    <div class="col-md-9">
                    <ul>
                    <li><a id="allsuni" href="#">All University</a></li>
                    <li><a id="penuni" href="#">Pending University</a></li>
                    <li><a id="apuni" href="#">Approved University</a></li>
                    <li><a id="unihold" href="#">Hold University</a></li>
                    
                </ul>
                    </div>
                    <div class="col-md-3">
                      <input class="p-3 form-control form-control-sm mr-3" id="universitySearch" type="text" placeholder="Search Student By SSC Rool Or Name"
                            >  
                    </div>
                </div>

                
            </div>
            <div id="alluni">
                <p>All</p>
            </div>
            
            <div id="allPendinguni">
                <p>Pen</p>                
            </div>
            <div id="allApproveuni">
                <p>Apr</p>   
            </div>
            <div id="universityHold">
                <p>Hold</p>   
            </div>
        </div>
    </div>
    <?php
    include_once("sfooter.php");
 ?>