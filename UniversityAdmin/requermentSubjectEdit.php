<?php
   include_once("sheader2.php");
   
   $phpcls=new phpclass();
   $ids=$_GET["id"];
 ?>
 
 
 
 <div id="dept_edit">
	<div class="inner">
	<?php 
		if(isset($_POST['editSub'])){
			$res=$phpcls->insertEditSub($ids,$_POST);
		}
	
	?>
		<h1 style="color:white;text-align:center;">Edit Subject</h1>
		<form method="post" >
		<?php
			if(isset($_GET["id"])){
				$id=$_GET["id"];
				$res=$phpcls->getSubForEdit($id);
				if($res){
					while($r=$res->fetch_assoc()){ ?>
			<input type="text" class="form-control" name="subname" value="<?php echo $r['subjectname']?>">
			<input type="text" class="form-control mt-2" name="submark" value="<?php echo $r['subjectMark']?>">
			<input type="submit" name="editSub" class="btn btn-success w-100 mt-2">
			<?php }}} ?>
		</form>
	</div>
 </div>
 
 
 <?php
   include_once("sfooter.php");
  ?>