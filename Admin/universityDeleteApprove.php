<?php
    include_once"../php_function.php";


	if (isset($_GET['delete'])) {
		$id=$_GET['delete'];
		$phpcls=new phpclass();
		$res=$phpcls->universityDelete($id);
	}


	if (isset($_GET['approve'])) {
		$id=$_GET['approve'];
	 	$phpcls=new phpclass();
	 	$res=$phpcls->universityApprove($id);
	}


	if (isset($_GET['hold'])) {
		$id=$_GET['hold'];
	 	$phpcls=new phpclass();
	 	$res=$phpcls->universityHold($id);
	}

	if (isset($_GET['unhold'])) {
		$id=$_GET['unhold'];
	 	$phpcls=new phpclass();
	 	$res=$phpcls->universityUnHold($id);
	}



    include_once("sfooter.php");
 ?>