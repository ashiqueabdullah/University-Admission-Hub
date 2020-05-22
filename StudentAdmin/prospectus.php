<?php
    include_once("sheader.php");
 ?>
    <div class="pros">
        <h3>Requirement of each university</h3>
        <div class="row">

            <?php 
                $phpcls=new phpclass();
                $res=$phpcls->getUniversity();
                if(isset($res)){
                    while($r=$res->fetch_assoc()){
            ?>

            <div class="col-md-3">
			<a href="prospectusUniversityInfoShow.php?id=<?php echo $r['universityId']?>" class="linkache">
                <div class="universityShowBox">
					<center>
						<img src="../UniversityAdmin/img/upload/<?php echo $r['universityImg']?>" height="150" class="mb-2">
						<h6><?php echo $r['universityName']?></h6>
						</center>
						<p>Divisition: <strong><?php echo $r['division']?></strong></p>
						<p>District: <strong><?php echo $r['district']?></strong></p>
						<p>City: <strong><?php echo $r['city']?></strong></p>
						<p>Phone: <strong><?php echo $r['pohne']?></strong></p>
					
				</div>
				</a>
            </div>
                    <?php }}?>
        </div>
    </div>
    <?php
    include_once("sfooter.php");
 ?>