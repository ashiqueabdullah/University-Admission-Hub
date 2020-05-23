<?php
	include_once("sheader.php");
	$id=$_SESSION['morId'];
	$phpcls=new phpclass();
	$res=$phpcls->getModaratorInformation($id);
	if($res){
		while($r=$res->fetch_assoc()){
	?>

   
   <div class="unserProfile">
	<center>
	<img src="img/upload/<?php echo $r['img']?>">
	<p><strong>Name:</strong> <?php echo $r['name']?></p>
	<hr>
	<p><strong>Address:</strong> <?php echo $r['adress']?></p>
	<hr>
	<p><strong>City:</strong> <?php echo $r['city']?></p>
	<hr>
	<p><strong>Zip Code:</strong> <?php echo $r['zip']?></p>
	<hr>
	<p><strong>Phone:</strong> <?php echo $r['phone']?></p>
	<hr>
	<p><strong>Email:</strong> <?php echo $r['email']?></p>
	<hr>


	</center>
   </div>
   
<?php
		}}
    include_once("sfooter.php");
 ?>