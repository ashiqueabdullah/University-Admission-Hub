<?php
    include_once"../php_function.php";

    $id=$_GET['id'];
    $phpcls=new phpclass();
    if($id){
        $res=$phpcls->deleteNotice($id);
    }



    include_once"sfooter.php";
?> 