<?php
    include_once"../session.php";
    include_once"../php_function.php";
    session::checklogin();
    $phpcls=new phpclass();
    $id=$_SESSION['admid'];
    if (isset($_GET['log']) && $_GET['log'] == 'out') {
        $res=$phpcls->adminffline($id);
        session::destroy();
    }

    $res=$phpcls->getmdinfo($id)->fetch_assoc();

    

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
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-xl-2">
                <div id="mynav">
                    <div id="navopen">MENU</div>
                    <div id="navclose">X</div>
                    <center>
                        <img class="logo" src="img/logo1.png" alt="" width="200">
                        <img class="adminimage mb-3" src="img/upload/<?php echo $res['img']?>" alt="" width="200" height="150">
                        
                    </center>
                    
                    <ul>
                        <li>
                            <a href="index.php"><i class="fas fa-desktop mr-3"></i>Dashboard</a>
                        </li>
                         
                        <li>
                            <a href="student.php"><i class="fas fa-users mr-3"></i>Manage student</a>
                        </li>
                        <li>
                            <a href="university.php"><i class="fas fa-university mr-3"></i>Manage University</a>
                        </li>

                        <?php
                            if($res['types']=="Admin"){
                        ?>
                        <li>
                            <a href="modarator.php"><i class="fas fa-arrow-circle-right mr-3"></i>Approve Modarator</a>
                        </li>
<?php }?>

                        <li>
                            <a href="notice.php"><i class="far fa-bell mr-3"></i>Manage Notice</a>
                        </li>
                        <li>
                            <a href="inbox.php"><i class="far fa-envelope mr-3"></i>Inbox</a>
                        </li>

                        <?php
                            if($res['types']=="Admin"){
                        ?>
                        <li>
                            <a href="payment.php"><i class="fab fa-bitcoin mr-3"></i>Payment</a>
                        </li>
                       <?php }?>
                       
                    </ul>
                </div>
            </div>
            <div class="right_box">
                <div class="top_nav">
                    <div class="row">
                        <div class=" col-md-8">
                            <h2>Admin Dashbord</h2>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="float-right mt-1">
                                        <div class="row">
                                            <div class="col-md-2 float-left">
                                                <img src="img/upload/<?php echo $res['img']?>" alt="" width="50">
                                            </div>
                                            <div class="col-md-9 forInfo">
                                                <p><?php 
                                                   echo $res['types']; 
                                                ?></p>
                                                
                                                <h6><?php echo $res['name']?><i class="fas fa-caret-down"></i></h6>
                                                <div class="info">
                                                    <ul>
                                                        <li><a href="modaratorView.php?id=<?php echo $_SESSION['admid']?>"><i class="far fa-user"></i> View Profile</a></li>
                                                        
                                                        <li><a href="?log=out"><i class="far fa-bell"></i></i> Logout</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>