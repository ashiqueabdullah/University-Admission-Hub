<?php
    include_once("sheader.php");
	
	$id=$_GET['id'];
	$phpcls=new phpclass();
	
	$res=$phpcls->getuniversityInfoForprospectus($id);
	if(!empty($res)){
		while($r=$res->fetch_assoc()){
		
 ?>
 
 
 <div class="universiyInformation">
	<h1 class="text-center">University Information</h1>
	<hr>
	<div class="row">
		<div class="col-md-6">
			<p>University Name: <strong><?php echo $r['universityName']?></strong></p>
			<p>Division: <strong><?php echo $r['division']?></strong></p>
			<p>Pone: <strong><?php echo $r['pohne']?></strong></p>
		</div>
		<div class="col-md-6">
			
			<p>Email: <strong><?php echo $r['email']?></strong></p>
			<p>City: <strong><?php echo $r['city']?></strong></p>
			<p>Zip: <strong><?php echo $r['zip']?></strong></p>
		</div>
	</div>
	
	<h1 class="text-center">Google Map</h1>
	<input style="display: none" id="lat" value="<?php echo $r['lat']?>">
	<input style="display: none" id="lng" value="<?php echo $r['lng']?>">
		<div id="map">
		
		
		</div>
<?php }} ?>
	<h1 class="text-center mt-3">Unit Information</h1>
	<hr>
	<div class="row">
	<?php 
		$res=$phpcls->unitinformationFroProspectus($id);
		if(!empty($res)){
			while($r=$res->fetch_assoc()){
		
	?>
	
	<div class="col-md-4">
			<a href="prospectusUnitInfo.php?id=<?php echo $r['uniId']?>" class="linkache">
                <div class="universityShowBox">
					<center>
						<h6><?php echo $r['unitName']?></h6>
						</center>
						<p>Groups: <strong><?php echo $r['groups']?></strong></p>
						<p>Exam Duration: <strong><?php echo $r['examDuration']?></strong></p>
						<p>SSC GPA: <strong><?php echo $r['sscReguler']?></strong></p>
						<p>HSC GPA: <strong><?php echo $r['hscReg']?></strong></p>
					
				</div>
				</a>
            </div>
		<?php }} ?>
 </div>
 </div>
 
 
 
<?php
    include_once("sfooter.php");
?>