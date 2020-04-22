<?php
    include_once("sheader2.php");
 ?>
    <div class="profile">
        <div class="inner">
            <h1 class="text-center">North East university Bangladesh</h1>
            <div class="row">



            <?php 
                $phpcls=new phpclass();
                $id=$_SESSION['uid'];
                $res=$phpcls->getUniversityInfo($id);
                if(isset($res)){
                    while($r=$res->fetch_assoc()){  
            ?>
                <div class="col-md-6">
                    <p><b>University name: </b><?php echo $r['universityName']?></p>
                    <p><b>Division: </b><?php echo $r['division']?></p>
                    <p><b>District: </b><?php echo $r['district']?></p>
                    <p><b>Phone: </b><?php echo $r['pohne']?></p>
                </div>
                <div class="col-md-6">
                <p><b>Email: </b><?php echo $r['email']?></p>
                <p><b>Zip Code: </b><?php echo $r['zip']?></p>
                <p><b>City: </b><?php echo $r['city']?></p>
                <p><b>University Code: </b><?php echo $r['universityCode']?></p>
                </div>
                    <?php }}?>
            </div>
        </div>
    </div>
    <?php
    include_once("sfooter.php");
?>