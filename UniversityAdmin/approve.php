<?php
    include_once("sheader.php");
 ?>


    <div class="p-5">
        <div class="notice">
            <div class="row">
                <div class="col-md-9">
                    <ul>
                        <li><a id="allapr" href="#">All Approved Student</a></li>
                        <li><a id="allpend" href="#">All Pending Modarator</a></li>
                        <li><a id="allrej" href="#">All Reject Student</a></li>    
                    </ul>
                    </div>
            </div>
            <hr>
            <div id="allApprovedStudent">
                <p>All Approved</p>
            </div>
            <div id="allPendingStudent">
                <p>Pending</p>
            </div>
            <div id="allRejectStudent">
				 <p>Reject</p>
            </div>
        </div>
    </div>

    <?php
    include_once("sfooter.php");
 ?>