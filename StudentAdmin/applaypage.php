<?php
    include_once"../php_function.php";
	
	$phpcls=new phpclass();
	
	if($_GET['id']){
		$id=$_GET['id'];
		$res=$phpcls->addmission($id);
		if($res){
			header("Location:prospectus.php");
		}
	}
	

?>