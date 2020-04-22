<?php
    include_once"../session.php";
    include_once"../php_function.php";
    session::checklogin();

    if (isset($_GET['log']) && $_GET['log'] == 'out') {
        session::destroy();
    }

    $phpcls=new phpclass();
    
    if ($_GET['active']) {
    	$id=$_GET['active'];
    	$res=$phpcls->Modaactive($id);
    }

    if ($_GET['deactive']) {
        $id=$_GET['deactive'];
        $res=$phpcls->Modadeactive($id);
    }

?>
