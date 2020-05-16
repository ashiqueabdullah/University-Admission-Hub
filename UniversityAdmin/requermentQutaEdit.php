<?php
   include_once("sheader2.php");
   
   $phpcls=new phpclass();
   $ids=$_GET["id"];
 ?>
 
 
 
 <div id="dept_edit">
	<div class="inner">
	<?php 
		if(isset($_POST['editQuat'])){
			$res=$phpcls->insertEditQuta($ids,$_POST);
		}
	
	?>
		<h1 style="color:white;text-align:center;">Edit Subject</h1>
		<form method="post" >
		<?php
			if(isset($_GET["id"])){
				$id=$_GET["id"];
				$res=$phpcls->getQuataForEdit($id);
				if($res){
					while($r=$res->fetch_assoc()){ ?>
			<input type="text" class="form-control" name="qutaname" value="<?php echo $r['quotaName']?>">
			<input type="text" class="form-control mt-2" name="qutaseat" value="<?php echo $r['soutaseat']?>">
			<input type="submit" name="editQuat" class="btn btn-success w-100 mt-2">
			<?php }}} ?>
		</form>
	</div>
 </div>
 
 
 <?php
   include_once("sfooter.php");
  ?>