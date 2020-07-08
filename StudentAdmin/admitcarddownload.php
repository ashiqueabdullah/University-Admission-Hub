<?php
    include_once"../session.php";
    include_once"../php_function.php";
    session::checklogin();
    $phpcls=new phpclass();
    //unit id
    $id=$_GET['id'];

    $res=$phpcls->getadmitcardinfo($id);
    if($res){
        while($r=$res->fetch_assoc()){
            $GLOBALS['unitname']=$r['unitName'];
            $GLOBALS['universityId']=$r['universityId'];
        }
    }
    $id=$_SESSION['sid'];
    $res=$phpcls->getstdinfoforadmitcard($id);
    if($res){
        while($rr=$res->fetch_assoc()){
            $GLOBALS['name']=$rr['fname']." ".$rr['fname'];
            $GLOBALS['fathername']=$rr['fatherName'];
            $GLOBALS['mothername']=$rr['motherName'];
            $GLOBALS['img']=$rr['image'];
            $GLOBALS['id']=$rr['studentId'];
        }
    }
    $uniname=$phpcls->getuniname($universityId)->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--TITLE START-->
    <title>University Admission</title>
    <!--TITLE END-->

    <!--CSS LINK START-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!--CSS LINK END-->
    <!--FEVICON START-->
    <link rel="icon" href="img/fevicon.png" type="image">
    <!--FEVICON END-->
</head>

<body>

<h1 class="text-danger text-center mt-5">Press Control + S to download Admit card</h1>
<div class="admitcardDownload">
    <h3 class="text-center">Admit Card</h3>
    <h5 class="text-center">North East University Bangladesh</h5>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <p><strong>Roll: </strong><?php echo $id ?></p>
            <p><strong>Name: </strong><?php echo $name ?></p>
            <p><strong>Fathers Name: </strong><?php echo $fathername ?></p>
            <p><strong>Mothers Name: </strong><?php echo $mothername ?></p>
            <p><strong>Unit Name: </strong><?php echo $unitname ?></p>

            <hr style="background-color:black;width:50%;" class="m-0 mt-5">
            <p class="ml-3"><strong>Applicante Signature</strong></p>
        </div>
        <div class="col-md-4">
            <img src="img/upload/<?php echo $img?>" alt="">

            <img src="../UniversityAdmin/img/upload/<?php echo $uniname['single'] ?>" alt="" class="singimg">
            <p class="ml-3"><strong>Applicante Signature</strong></p>
        </div>
        
    </div>
    
</div>





<!--JAVASCRIPT START-->
<script src="../js/jQuery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="js/style.js"></script>
    <script src="js/style2.js"></script>
    <!--JAVASCRIPT END-->
</body>

</html>