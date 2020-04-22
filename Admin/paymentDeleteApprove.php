<?php
    include_once"../php_function.php";

    $phpcls=new phpclass();

    if (isset($_GET['approve'])) {
    	$id=$_GET['approve'];
    	$res=$phpcls->paymentApprovedbyAdmin($id);
    }else if (isset($_GET['reject'])){
    	$id=$_GET['reject'];
    	$res=$phpcls->paymentRejectbyAdmin($id);
    }else if (isset($_GET['rejectfromapprove'])){
    	$id=$_GET['rejectfromapprove'];
    	$res=$phpcls->paymentRejectFrombyAdmin($id);
    }







?>