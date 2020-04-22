<?php 
    include_once"header.php";
    include_once"php_function.php";
    include_once"session.php";
    session::checkSession();
?>
    <div class="mid_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="left_box">
                        <button id="login" class="btn btn-info">Login</button>
                        <button id="std" class="btn btn-info">Student Registation</button>
                        <button id="uni" class="btn btn-info">University Registration</button>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="right_box owl-carousel">
                        <div class="sigle">
                            <div class="left">
                                <img src="img/1.jpg" alt="">
                            </div>
                            <div class="right">
                                <h4>North East University Bangladesh</h4>
                                <button class="btn btn-info">Want to know about this university?</button>
                            </div>
                        </div>

                        <div class="sigle">
                            <div class="left">
                                <img src="img/2.jpg" alt="">
                            </div>
                            <div class="right">
                                <h4>Shahjalal University of Science & Technology</h4>
                                <button class="btn btn-info">Want to know about this university?</button>
                            </div>
                        </div>

                        <div class="sigle">
                            <div class="left">
                                <img src="img/3.jpg" alt="">
                            </div>
                            <div class="right">
                                <h4>Shahjalal University of Science & Technology</h4>
                                <button class="btn btn-info">Want to know about this university?</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pop_up_login">
        <div class="container">
            <div class="pop_box">
                <div id="login_cross">
                    <i class="far fa-times-circle"></i>
                </div>
                <center>
                    <form action="" method="post">
                        <?php
                            $phcls=new phpclass();
                            if (isset($_POST['logins'])) {
                                $res=$phcls->login($_POST);
                            }
                        ?>
                        <div class="form-group mt-4">
                            <input class="form-control" name="email" type="email" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="pass" type="password" placeholder="Enter password" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="index.html" style="color: #5CDB94">Forget Password</a>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" name="logins" class="form-control btn-info mt-2">
                            </div>
                        </div>
                    </form>
                </center>
            </div>
        </div>
    </div>
    
    <div class="studer_reg">
        <div class="inner">
            <div id="std_cross">
                <i class="far fa-times-circle"></i>
            </div>
            <div class="container">
                <h4 class="text-center">Every place has to be filled</h4>
                <form action="#" method="post" onsubmit="return stvelidetion()">
                    <?php
                        $phcls=new phpclass();
                        if (isset($_POST["submit"])) {
                            $res=$phcls->RegistrationStudent($_POST);
                        }
                    ?>
                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <div class="form-group">
                                <label><span class="text-danger">*</span> First Name</label>
                                <input type="text" class="form-control" id="sfname" name="sfname" placeholder="Enter Fast Name" required>
                                <small class="text-danger" id="sfnames"></small>
                            </div>
                            <div class="form-group">
                                <label><span class="text-danger">*</span> Last Name</label>
                                <input type="text" class="form-control" id="slname" name="slname" placeholder="Enter Last Name" required>
                                <small class="text-danger" id="slnames"></small>
                            </div>
                            <div class="form-group">
                                <label><span class="text-danger">*</span> Date of birth</label>
                                <input type="date" id="sdate" name="sdate" class="form-control" required>
                                <small class="text-danger" id="sdates"></small>
                            </div>
                            <label><span class="text-danger">*</span> Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="radio" name="radio" value="Male">
                                <label class="form-check-label">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="radio" id="radio" type="radio" value="female">
                                <label class="form-check-label">
                                    Female
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" name="radio" id="radio" type="radio" value="Other">
                                <label class="form-check-label">
                                    Other
                                </label>
                            </div>
                            <small id="radios"></small>
                            <div class="form-group mt-2">
                                <label><span class="text-danger">*</span> Phone</label>
                                <input type="text" class="form-control" id="sphone" name="sphone" placeholder="Enter phone" required>
                                <small class="text-danger" id="sphones"></small>
                            </div>

                        </div>
                        <div class="col-md-5 ">
                            <div class="form-group">
                                <label><span class="text-danger">*</span> Address</label>
                                <input type="text" class="form-control" id="saddress" name="saddress" placeholder="Enter address" required>
                                <small class="text-danger" id="saddresss"></small>
                            </div>
                            <div class="form-group">
                                <label><span class="text-danger">*</span> Post Code</label>
                                <input type="text" id="pcode" name="pcode" class="form-control" placeholder="Enter post code" required>
                                <small class="text-danger" id="pcodes"></small>
                            </div>
                           
                            <small class="text-danger" id="cnts"></small>
                            <div class="form-group">
                                <label><span class="text-danger">*</span> Email</label>
                                <input type="email" class="form-control" id="semail" name="semail" placeholder="Enter email" required>
                                <small id="semails"></small>
                            </div>
                            <div class="form-group">
                                <label><span class="text-danger">*</span> Password</label>
                                <input type="password" class="form-control" id="spass" name="spass" placeholder="Enter password" required>
                                <small class="text-danger" id="spasss"></small>
                            </div>
                            <div class="form-group">
                                <label><span class="text-danger">*</span> Verify password</label>
                                <input type="password" class="form-control" id="svpass" name="svpass" placeholder="Verify password" required>
                                <small class="text-danger" id="svpasss"></small>
                            </div>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary mt-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="uni_reg">
        <div class="inner">
            <div id="uni_cross">
                <i class="far fa-times-circle"></i>
            </div>
            <div class="container">
                <h4 class="text-center">Every place has to be filled</h4>
                <form action="" method="post" onsubmit="return unvelidetion()">
                   <?php
                    $pcls=new phpclass();
                    if (isset($_POST["reg"])) {
                        $res=$pcls->RegistationUniversity($_POST);
                    }
                   ?>
                    <div class="from_inner">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >University name</label>
                                    <input id="uname" name="uname" type="text" class="form-control" placeholder="Enter Your university name" required>
                                    <span id="unames" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="division">University Code</label>
                                    <input id="rgcode" name="rgcode" type="text" class="form-control" placeholder="Enter university code" required>
                                    <span id="" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="form-group">
                                    <label>University Image</label>
                                    <input id="unimage" name="unimage" type="file" class="form-control-file" required>
                                </div>
                            </div>
                           
                             <div class="col-md-4
                             mt-3">
                                <div class="form-group">
                                    <label>Select Division</label>
                                    <select id="cnt" name="division" class="form-control">
                                        <option value="Dhaka">Dhaka </option>
                                        <option value="Chittagong">Chittagong</option>
                                        <option nvalue="Rajshahi">Rajshahi</option>
                                        <option namvalue="Khulna">Khulna</option>
                                        <option value="Mymensingh">Mymensingh</option>
                                        <option value="Sylhet">Sylhet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4
                            mt-3">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input id="phone" name="phone" type="text" class="form-control" placeholder="Enter University phone" required>
                                    <span id="phones" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-4
                            mt-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Enter university email" required>
                                    <span id="emails" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-4
                            mt-3">
                                <div class="form-group">
                                    <label for="zip">Zip code</label>
                                    <input id="zcode" name="zcode" type="text" class="form-control" placeholder="Enter university zip" required>
                                    <span id="zcodes" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-4
                            mt-3">
                                <div class="form-group">
                                    <label for="district">District</label>
                                    <input id="district" name="district" type="text" class="form-control" placeholder="Enter university district" required>
                                    <span id="districts" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-4
                            mt-3">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input id="city" name="city" type="text" class="form-control" placeholder="Enter your city" required>
                                    <span id="citys" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-4
                            mt-3">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="pass" name="pass" type="password" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-md-4
                            mt-3">
                                <div class="form-group">
                                    <label>Verify Password</label>
                                    <input id="vrpasss" name="vrpasss" type="password" class="form-control"  required>
                                    <span id="vrpassss" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Submit" name="reg" class="form-control btn btn-primary mt-2">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include_once"footer.php"?>