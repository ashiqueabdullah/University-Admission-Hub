<?php
    include_once("sheader.php");
   ?>

    <div class="profile p-5">
        <div class="main">
                <?php 
                $id=$_GET['id'];
                $phpcls=new phpclass();
                $res=$phpcls->getUniInfo2($id);
                if(!empty($res)) {
                    
                      $r=$phpcls->getUniInfo2($id)->fetch_assoc();                       
                ?>
        <center>
            <h4>Information About <?php echo $r['universityName']?></h4>
            <img class=" mt-3" src="../UniversityAdmin/img/upload/<?php echo $r['universityImg']?>" alt="" height="350" width="100%" />
        </center>
        <h2 class="text-center mt-2">Basic information</h2>
        <div class="row">
             <div class="col-md-5 offset-md-1">
                <p class="mt-3"><b>University name: </b><?php echo $r['universityName']?></p>
                <p class="mt-2"><b>University Code: </b><?php echo $r['universityCode']?></p>
                <p class="mt-2"><b>Division: </b><?php echo $r['division']?></p>
                <p class="mt-2"><b>Signature: </b></p>
                <img src="../UniversityAdmin/img/upload/<?php echo $r['single']?>" alt="" height="80" width="150">
        </div>
        <div class="col-md-5 offset-md-1">
                <p class="mt-2"><b>Phone: </b><?php echo $r['pohne']?></p>
                <p class="mt-2"><b>Email: </b><?php echo $r['email']?></p>
                <p class="mt-2"><b>Zip code: </b><?php echo $r['zip']?></p>
                <p class="mt-2"><b>City: </b><?php echo $r['city']?></p> 
        </div>
        </div>

    <hr>



    <h2 class="text-center">Unit Information</h2>
    <div class="row">
    <?php 
    $id=$r['universityId'];
        $res=$phpcls->unitinformationFroProspectus($id);
        if(!empty($res)){
            while($rr=$res->fetch_assoc()){
        
    ?>
    
    <div class="col-md-3 mb-5">
            <a target="_blanks" href="universityUnitInfo.php?id=<?php echo $rr['uniId']?>" class="linkache">
                <div class="universityShowBox">
                    <center>
                        <h4><?php echo $rr['unitName']?></h4>
                        </center>
                        <p ><b>University name: </b><?php echo $r['universityName']?></p>
                        <p>Groups: <strong><?php echo $rr['groups']?></strong></p>
                        <p>Exam Duration: <strong><?php echo $rr['examDuration']?></strong></p>
                        <p>SSC GPA: <strong><?php echo $rr['sscReguler']?></strong></p>
                        <p>HSC GPA: <strong><?php echo $rr['hscReg']?></strong></p>
                    
                </div>
                </a>
            </div>
        <?php }} ?>
 </div>







    <hr>
    <h2 class="text-center">Google Map Location</h2>
    <input style="display: none" id="lat" value="<?php echo $r['lat']?>">
    <input style="display: none" id="lng" value="<?php echo $r['lng']?>">
        <div id="map">
        
        
        </div>


        <?php }?>


        </div>
    </div>


    


   <?php
    include_once("sfooter.php");
   ?>