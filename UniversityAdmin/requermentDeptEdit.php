<?php
   include_once("sheader2.php");
   
   $phpcls=new phpclass();
   $ids=$_GET["id"];
 ?>
 
 
 
 <div id="dept_edit">
	<div class="inner">
	<?php 
		if(isset($_POST['editdept'])){
			$res=$phpcls->insertEditDept($ids,$_POST);
		}
	
	?>
		<h1 style="color:white;text-align:center;">Edit Depertment</h1>
		<form method="post" >
		<?php
			if(isset($_GET["id"])){
				$id=$_GET["id"];
				$res=$phpcls->getDeptForEdit($id);
				if($res){
					while($r=$res->fetch_assoc()){ ?>
			<input type="text" class="form-control" name="fullname" value="<?php echo $r['depertmentName']?>">
			<input type="text" class="form-control mt-2" name="shotname" value="<?php echo $r['depertshortname']?>">
			<input type="submit" name="editdept" class="btn btn-success w-100 mt-2">
			<?php }}} ?>
		</form>
	</div>
 </div>
 
 
 <?php
   include_once("sfooter.php");
  ?>