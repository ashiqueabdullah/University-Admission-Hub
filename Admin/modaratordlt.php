<?php
    include_once"../php_function.php";
    

  

    if ($_GET['id']) {
    	$id=$_GET['id'];

    	$phpcls=new phpclass();
    	$res=$phpcls->ModaDlt($id);
    }

    
    if ($_GET['approved']) {
    	$id=$_GET['approved'];

    	$phpcls=new phpclass();
    	$res=$phpcls->approved($id);
    }

?>
