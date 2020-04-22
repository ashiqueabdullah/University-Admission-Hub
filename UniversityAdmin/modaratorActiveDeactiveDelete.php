<?php 
include_once"../php_function.php";

$phpcls=new phpclass();

if($_GET['delete']){
    $id=$_GET['delete'];
    $res=$phpcls->ModaDlt($id);
}


if($_GET['active']){
    $id=$_GET['active'];
    $res=$phpcls->Modadeactive($id);
}


if($_GET['deactive']){
    $id=$_GET['deactive'];
    $res=$phpcls->Modaactive($id);
}



?>