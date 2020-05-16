<?php
	include_once("sheader.php");
?>





    <div class="p-5">
    <div class="modaratorviews">
        

        <?php
            if ($_GET['id']) {
                $id=$_GET['id'];
            }
            $phpcls=new phpclass();
            $res=$phpcls->getUnitsforshow($id);
            if ($res) {
                while ($r=$res->fetch_assoc()) {
                    
                
            
        ?>
        <h5 class="text-center">Information About Unit <?php echo $r['unitName']?></h5>
        <hr>
        
        <div class="row">
            <div class="col-md-6">
                <p class="mt-3"><strong>Unit Name: </strong><?php echo $r['unitName']?></p>
                
                <p class="mt-3"><strong>Status: </strong><?php echo $r['statuss']?></p>
                <p class="mt-3"><strong>Minimum SSC GPA: </strong><?php echo $r['minSSCGpa']?></p>
                <p class="mt-3"><strong>Minimum HSC GPA: </strong><?php echo $r['minHSCGpa']?></p>
				
				<p class="mt-3"><strong>HSC Reguler GPA: </strong><?php echo $r['hscReg']?></p>
                <p class="mt-3"><strong>HSC Ireguler GPA: </strong><?php echo $r['hscIreg']?></p>
                <p class="mt-3"><strong>Allow: </strong><?php echo $r['allow']?></p>
            </div>
            <div class="col-md-6">
                <p class="mt-3"><strong>Total GPA: </strong><?php echo $r['TotalGpa']?></p>
                <p class="mt-3"><strong>SSC Reguler GPA: </strong><?php echo $r['sscReguler']?></p>
                <p class="mt-3"><strong>SSC Ireguler GPA: </strong><?php echo $r['sscIreg']?></p>
				
				<p class="mt-3"><strong>Exam Duration: </strong><?php echo $r['examDuration']?></p>
                <p class="mt-3"><strong>Notes: </strong><?php echo $r['notes']?></p>
				<p class="mt-3"><strong>Groups: </strong><?php echo $r['groups']?></p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
				<?php if($r['statuss']==1){?>
                <a href="deleteApproveReject.php?unitdeactive=<?php echo $r['uniId']?>" class=" btn btn-success  mr-1 w-50">Active</a>
				<?php }else{ ?>
				<a href="deleteApproveReject.php?unitactive=<?php echo $r['uniId']?>" class=" btn btn-secondary  mr-1 w-50">Deactive</a>
				<?php }?>
				
            </div>
            <div class="col-md-6">
                <a href="deleteApproveReject.php?unitdlete=<?php echo $r['uniId']?>" class=" btn btn-danger  float-right mr-1 w-50">Delete</a>
            </div>

        </div>
    <?php }}?>
    </div>

    </div> 


    <?php
    include_once("sfooter.php");
?>