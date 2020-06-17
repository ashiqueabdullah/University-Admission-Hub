<?php
    include_once("sheader.php");
 ?>


    <div class="p-5">
        <div class="result">
            <div class="row">
                <div class="col-md-9">
                    <ul>
                        <li><a id="pendinstudent" href="#">Pending Result</a></li>
                        <li><a id="passStudent" href="#">Passed Student</a></li>
                        <li><a id="failrStudent" href="#">Failed Student</a></li>    
                    </ul>
                    </div>
                <div class="col-md-3">
                    <input id="resutSearch" class="p-4 form-control form-control-sm mr-3 w-100 " type="text" placeholder="Search...."
                        name="resutSearch">
                </div>
            </div>
            <hr>
            <div id="pendisgResult">
                <p>Pending</p>
            </div>
            <div id="PassedResult">
                <p>Passed</p>
            </div>
            <div id="failResult">
                <p>Failed</p>
            </div>
            
        </div>
    </div>

    <?php
    include_once("sfooter.php");
 ?>