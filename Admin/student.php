<?php
    include_once("sheader.php");
 ?>
    <div class="profile p-5">
        <div class="main">
            <div class="studentPage">
               

                <div class="row">
                    <div class="col-md-9">
                    <ul>
                        <li><a id="allstd" href="#">All Student</a></li>
                        <li><a id="penstd" href="#">Pending Student</a></li>
                        <li><a id="apstd" href="#">Approved Student</a></li>
                        <li><a id="hold" href="#">Hold Student</a></li>
                        
                    </ul>
                    </div>
                    <div class="col-md-3">
                      <input class="p-3 form-control form-control-sm mr-3 w-100 studentsearchs" type="text" placeholder="Search By name...."
                            name="stdSearch">
                    </div>
                </div>

                
            </div>
            <div id="allStudent">
                <p>all</p>
            </div>
            
            <div id="allPendingStudent">
                <p>Pen</p>                
            </div>
            <div id="allApproveStudent">
                <p>Apr</p>   
            </div>
             <div id="studentHold">
                <p>Hold</p>   
            </div>
        </div>
    </div>
    <?php
    include_once("sfooter.php");
 ?>