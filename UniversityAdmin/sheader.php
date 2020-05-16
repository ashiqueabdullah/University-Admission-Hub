<?php
    include_once"../session.php";
    include_once"../php_function.php";
    session::checklogin();

    if (isset($_GET['log']) && $_GET['log'] == 'out') {
        session::destroy();
    }
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
                <div class="pfixed">
                    <div id="mynav">
                    <div id="navopen">MENU</div>
                    <div id="navclose">X</div>
                    <center>
                        <img class="logo" src="img/logo3.png" alt="" width="200" >
                        <img class="adminimage" src="img/university.jpg" alt="" width="200" >
                    </center>
                    <ul>
                        <li>
                            <a href="index.php"><i class="fas fa-desktop mr-3"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="profile.php"><i class="fas fa-user mr-3"></i>Profile</a>
                        </li>
                        <li>
                        <a href="requerment.php"><i class="fas fa-user mr-3"></i>Requirement</a>
                        </li>
                        <li>
                            <a href="approve.php"><i class="fas fa-arrow-circle-right mr-3"></i>Approve Addmission</a>
                        </li>
                        <li>
                            <a href="notice.php"><i class="far fa-bell mr-3"></i>Manage Notice</a>
                        </li>
                        <li>
                            <a href="modarator.php"><i class="far fa-bell mr-3"></i>Manage Moderator</a>
                        </li>
                        <li>
                            <a href="inbox.php"><i class="far fa-envelope mr-3"></i>Inbox</a>
                        </li>
                        <li>
                            <a href="studentlist.php"><i class="fas fa-money-bill-alt mr-3"></i>All Student</a>
                        </li>
                        <li>
                            <a href="result.php"><i class="fas fa-info-circle mr-3"></i>Result Update</a>
                        </li>
                      
                    </ul>
                </div>
                </div>
                
            </div>
            <div class="right_box">
                <div class="top_nav">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <h1>University Dashbord</h1>
                        </div>
                        
                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="float-right mt-1">
                                        <div class="row">
                                            <div class="col-md-2 float-left">
                                                <img src="img/user.jpeg" alt="" width="50">
                                            </div>
                                            <div class="col-md-9 forInfo">
                                                <h6>Admin</h6>
                                                <h6>Ashique Abdullah <i class="fas fa-caret-down"></i></h6>
                                                <div class="info">
                                                    <ul>
                                                        <li><a href="modaratorView.php?id=<?php echo $_SESSION['']?>"><i class="far fa-user"></i> View Profile</a></li>
                                                        
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