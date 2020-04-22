<?php
   
    include_once"../php_function.php";
    


    if ($_GET['reject']) {
    	$id=$_GET['reject'];

    	$phpcls=new phpclass();
    	$res=$phpcls->noticeReject($id);
    }

    if ($_GET['approve']) {
        $id=$_GET['approve'];

        $phpcls=new phpclass();
        $res=$phpcls->NoticeApprove($id);
    }

    if ($_GET['delete']) {
        $id=$_GET['delete'];

        $phpcls=new phpclass();
        $res=$phpcls->noticedelete($id);
    }

?>
