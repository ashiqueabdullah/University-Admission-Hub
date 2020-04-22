<?php
    include_once("sheader.php");
   ?>
    <div class="inbox">
        <div class="info_box">
            <h1 class="text-center">University Information</h1>
            <div class="row">

            <?php 
            $id=$_GET['id'];
                            $phpcls=new phpclass();
                            $res=$phpcls->getUniInfo2($id);
                            if (isset($res)) {
                                while ($r=$res->fetch_assoc()) {
                                      
            ?>
            <div class="col-md-6">
                <p class="mt-3"><b>University name: </b><?php echo $r['universityName']?></p>
                <p><b>University Code: </b><?php echo $r['universityCode']?></p>
                <p><b>University Image: </b><img src="img/cr.png" width="200" alt=""></p>
                <p><b>Division: </b><?php echo $r['division']?></p>
                
            </div>
            <div class="col-md-6">
                <p><b>Phone: </b><?php echo $r['pohne']?></p>
                <p><b>Email: </b><?php echo $r['email']?></p>
                <p><b>Zip code: </b><?php echo $r['zip']?></p>
                <p><b>District: </b>S<?php echo $r['district']?></p>
                <p><b>City: </b><?php echo $r['city']?></p> 
            </div>
        <?php }}?>
            
            </div>
            
        </div>
    </div>
    <?php
    include_once("sfooter.php");
   ?>