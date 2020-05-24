<?php
    include_once("sheader.php");
	
	$phpcls=new phpclass();
   ?>
    <div class="admitAndnotice">
        <div class="row">
			
			<?php 
				$id=$_SESSION['sid'];
				$res=$phpcls->getnuitnameuniname($id);
				if($res){
					while($r=$res->fetch_assoc()){
						$uniid=$r['universityId'];
						$un=$phpcls->geruniforaddmisson($uniid);
						if($un){
							while($rr=$un->fetch_assoc()){
								$uniname=$rr['universityName'];
							}
						}
						$unitId=$r['unitId'];
						$unit=$phpcls->getunitforaddmisson($unitId);
						if($unit){
							while($rrr=$unit->fetch_assoc()){
								$unitname=$rrr['unitName'];
								$GLOBALS['uniId']=$rrr['uniId'];
							}
						}
				
			?>
		
			
			<div class="col-md-3 inneradmit">
			<a href="admitcarddownload.php?id=<?php echo $uniId?>" target="_blank">
			  <h4><?php echo $uniname ?></h4>
			  <h4><?php echo $unitname ?></h4>
			  </a>
			</div>
			
			<?php }}?>
			
		</div>
	</div>
        <?php
    include_once("sfooter.php");
   ?>