<?php
   include_once("sheader2.php");
	
	$phpcls=new phpclass();

	if(isset($_GET['depetDelete'])){
		$id=$_GET['depetDelete'];
		$res=$phpcls->deletedept($id);
	}
  
	
	if(isset($_GET['active'])){
		$id=$_GET['active'];
		$res=$phpcls->deptactive($id);
	}
	
	if(isset($_GET['deactive'])){
		$id=$_GET['deactive'];
		$res=$phpcls->deptDeactive($id);
	}
	
	if(isset($_GET['subjectDelete'])){
		$id=$_GET['subjectDelete'];
		$res=$phpcls->subjectDelete($id);
	}
	
	if(isset($_GET['subjectActive'])){
		$id=$_GET['subjectActive'];
		$res=$phpcls->subjectActive($id);
	}
  
	
	if(isset($_GET['subjectDeactive'])){
		$id=$_GET['subjectDeactive'];
		$res=$phpcls->subjectDeactive($id);
	}
	
	
	if(isset($_GET['quatDelete'])){
		$id=$_GET['quatDelete'];
		$res=$phpcls->quatDelete($id);
	}
	
	if(isset($_GET['qutadeactive'])){
		$id=$_GET['qutadeactive'];
		$res=$phpcls->qutadeactive($id);
	}
	
	if(isset($_GET['quataactive'])){
		$id=$_GET['quataactive'];
		$res=$phpcls->quataactive($id);
	}
	
	
	if(isset($_GET['seatDelete'])){
		$id=$_GET['seatDelete'];
		$res=$phpcls->seatDelete($id);
	}
	
	if(isset($_GET['seatActive'])){
		$id=$_GET['seatActive'];
		$res=$phpcls->seatActive($id);
	}
	
	if(isset($_GET['seatDeactive'])){
		$id=$_GET['seatDeactive'];
		$res=$phpcls->seatDeactive($id);
	}
	
	
	
	if(isset($_GET['unitdlete'])){
		$id=$_GET['unitdlete'];
		$res=$phpcls->unitdlete($id);
	}
	
	if(isset($_GET['unitdeactive'])){
		$id=$_GET['unitdeactive'];
		$res=$phpcls->unitdeactive($id);
	}
	
	if(isset($_GET['unitactive'])){
		$id=$_GET['unitactive'];
		$res=$phpcls->unitactive($id);
	}
  
  
   include_once("sfooter.php");
   ?>