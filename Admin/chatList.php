	
<?php
    include_once"../session.php";
    include_once"../php_function.php";
    session::checklogin();

    if(isset($_SESSION['admid'])){
         $id=$_SESSION['admid'];
     }else if(isset($_SESSION['uid'])){
         $id=$_SESSION['uid'];
     }


    $phpcls=new phpclass();

    $res=$phpcls->getchatList($id);
   
    if($res){
    	while ($r=$res->fetch_assoc()) {

?>



	<a  style="text-decoration:none;" href="?id=<?php echo $r['frinid']?>">
		<?php 

			if($r['karsathe']=="admin" || $r['karsathe']=="adminModarator"){ 
				$id=$r['name'];
				$ress=$phpcls->getsingleInfo($id)->fetch_assoc();


				?>
				<img class="ml-1" src="img/upload/<?php echo $ress['img']?>" alt="">
				<h6><?php echo $ress['name']?></h6>
				<p>Admin</p>




			<?php }else if($r['karsathe']=="university"){
				$id=$r['name'];
				$ress=$phpcls->getsingleuniname($id)->fetch_assoc();

				?>
				<img class="ml-1" src="../UniversityAdmin/img/upload/<?php echo $ress['universityImg']?>" alt="">
				<h6><?php echo $ress['universityName']?></h6>
				<p>University Admin</p>


			<?php }else if($r['karsathe']=="universityModarator"){
				$id=$r['name'];
				$ress=$phpcls->getsingleInfo($id)->fetch_assoc();

				?>
				<img class="ml-1" src="../UniversityAdmin/img/upload/<?php echo $ress['img']?>" alt="">
				<h6><?php echo $ress['name']?></h6>
				<p>University Admin</p>



			<?php }else if($r['karsathe']=="student"){
				$id=95;
				$ress=$phpcls->gtchatstudent($id)->fetch_assoc();

				?>
				<img class="ml-1" src="../StudentAdmin/img/upload/<?php echo $ress['image']?>" alt="">
				<h6><?php echo $ress['fname']." ".$ress['lname'] ?></h6>
				<p>Student</p>


			<?php } ?>

		
	</a>
	<hr>

	<?php }} ?>