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
			<p class="mt-3"><strong>Depertment: </strong>
				<?php 
					$rr=$phpcls->getdeptForUnitshow($id);
					if($rr){
						while($rs=$rr->fetch_assoc()){
							echo $rs['deptname'].", ";
						}
					}
				?>
			</p>
                <p class="mt-3"><strong>Unit Name: </strong><?php echo $r['unitName']?></p>
                
                <p class="mt-3"><strong>Minimum SSC GPA: </strong><?php echo $r['minSSCGpa']?></p>
                <p class="mt-3"><strong>Minimum HSC GPA: </strong><?php echo $r['minHSCGpa']?></p>
				
				<p class="mt-3"><strong>HSC Reguler GPA: </strong><?php echo $r['hscReg']?></p>
                <p class="mt-3"><strong>HSC Ireguler GPA: </strong><?php echo $r['hscIreg']?></p>
                <p class="mt-3"><strong>Allow: </strong><?php echo $r['allow']?></p>
				<p class="mt-3"><strong>Quta: </strong>
				
				<form class="" method="post" action="">
				<?php 
				if(isset($_POST['adds'])){
					$ress=$phpcls->addmission($id,$_POST);
				}
					$uniID=$r['universityId'];
					$rr=$phpcls->getUnitForUnitshow($uniID);
					if($rr){
						while($rs=$rr->fetch_assoc()){ ?>
							<input type="radio" name="qutas" value="<?php echo $rs['quotaId']?>" ><?php echo $rs['quotaName']."=".$rs['soutaseat']?><br>
						
					
					<?php }}?>
				
					<input type="submit" name="adds" class="btn btn-success mt-3">
					
				</form>
				
				
				</p>
            </div>
            <div class="col-md-6">
			<p class="mt-3"><strong>Subject: </strong>
				<?php 
					$rr=$phpcls->getsubForUnitshow($id);
					if($rr){
						while($rs=$rr->fetch_assoc()){
							echo $rs['subName'].", ";
						}
					}
				?>
			</p>
                <p class="mt-3"><strong>Total GPA: </strong><?php echo $r['TotalGpa']?></p>
                <p class="mt-3"><strong>SSC Reguler GPA: </strong><?php echo $r['sscReguler']?></p>
                <p class="mt-3"><strong>SSC Ireguler GPA: </strong><?php echo $r['sscIreg']?></p>
				
				<p class="mt-3"><strong>Exam Duration: </strong><?php echo $r['examDuration']?></p>
                <p class="mt-3"><strong>Notes: </strong><?php echo $r['notes']?></p>
				<p class="mt-3"><strong>Groups: </strong><?php echo $r['groups']?></p>
				<p class="mt-3"><strong>Number Of Seat: </strong><?php echo $r['groups']?></p>
				<p class="mt-3"><strong>Addmisson Fee: </strong><?php echo $r['admsFee']?></p>
            </div>
        </div>
        
    <?php }}?>
    </div>

    </div> 


    <?php
    include_once("sfooter.php");
?>