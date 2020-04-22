<?php
    include_once"../session.php";
    include_once"../php_function.php";
    session::checklogin();

    if (isset($_GET['log']) && $_GET['log'] == 'out') {
        session::destroy();
    }


    if ($_GET['id']) {
    	$id=$_GET['id'];

    	$phpcls=new phpclass();
    	$res=$phpcls->ModaDlt($id);
    }

?>
