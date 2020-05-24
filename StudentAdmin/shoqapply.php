<?php
    include_once"../session.php";
    include_once"../php_function.php";
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

            <div class="col-md-4">
			<a href="prospectusUniversityInfoShow.php?id=<?php echo $r['universityId']?>" class="linkache">
                <div class="universityShowBox">
					<center>
						<img src="../UniversityAdmin/img/upload/<?php echo $r['universityImg']?>" class="mb-2 img-thumbnail">
						<h5><?php echo $r['universityName']?></h5>
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