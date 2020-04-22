<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--TITLE START-->
    <title>University Admission</title>
    <!--TITLE END-->

    <!--CSS LINK START-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!--CSS LINK END-->
    <!--FEVICON START-->
    <link rel="icon" href="img/fevicon.png" type="image">
    <!--FEVICON END-->
</head>

<body>

    <div class="menu_bar bgrg rg_ps">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5 col-5">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="d-block d-lg-none col-sm-5 col-5">
                    <ul class="sm_login">
                        <li><i class="myicons far fa-user"></i></li>
                        <li style="margin-left: 10px;">Login</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9 col-sm-2 col-2">
                    <div class="myNav float-right">
                        <div class="toggle">
                            <i class="fa fa-bars"></i>
                        </div>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="">Review</a></li>
                            <li><a href="">Career</a></li>
                            <li><a href="">Information</a></li>
                            <li><a class="marginR" href="">About</a></li>
                            <li class="myvsl"><i class=" myicon far fa-user"></i></li>
                            <li class="myvsl"><a class=" mypaddin" href="">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rg-hero">
        <div class="container">
            <h1>Registration</h1>
        </div>
    </div>

    <div class="from_section">
        <div class="container">
            <h1>ONLINE ADMISSION FORM</h1>
            <div class="from_inner">
                <form>
                    <h4>Basic Information</h4>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="naton">Nationality</label>
                                <input id="naton" type="text" class="form-control" placeholder="What is your Nationality">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bdst">Place of birth district</label>
                                <select class="form-control" name="birthDistrict" id="bdst">
                                    <option value="name">Name</option>
                                    <option value="name">Name</option>
                                    <option value="name">Name</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="imgupload">Upload your image</label>
                                <input id="imgupload" type="file" class="form-control-file">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Marital Status</label>
                            <div class="form-group">
                                <div class="form-check">
                                    <input id="married" class="form-check-input" name="as" type="radio" value="one" checked>
                                    <label for="married">Married</label>
                                </div>
                                <div class="form-check">
                                    <input id="single" class="form-check-input" name="as" type="radio" value="two">
                                    <label for="single">Single</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Blood Group</label>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input id="ap" class="form-check-input" name="as" type="radio" value="one" checked>
                                    <label for="ap">A+</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input id="an" class="form-check-input" name="as" type="radio" value="two">
                                    <label for="an">A-</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input id="bp" class="form-check-input" name="as" type="radio" value="two">
                                    <label for="bp">B+</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input id="bn" class="form-check-input" name="as" type="radio" value="two">
                                    <label for="bn">B-</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input id="op" class="form-check-input" name="as" type="radio" value="two">
                                    <label for="op">O+</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input id="on" class="form-check-input" name="as" type="radio" value="two">
                                    <label for="on">O-</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input id="abp" class="form-check-input" name="as" type="radio" value="two">
                                    <label for="abp">AB+</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input id="abn" class="form-check-input" name="as" type="radio" value="two">
                                    <label for="abn">AB-</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    

                    <h4>Parmanent Address</h4>
                    <small><mark>If diffrent from present address</mark></small>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input id="address" type="text" class="form-control" placeholder="Enter Your address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="division">Division</label>
                                <input id="division" type="text" class="form-control" placeholder="Enter your division">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input id="phone" type="text" class="form-control" placeholder="Enter your phone">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="text" class="form-control" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="zip">Zip code</label>
                                <input id="zip" type="text" class="form-control" placeholder="Enter your zip">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="district">District</label>
                                <input id="district" type="text" class="form-control" placeholder="Enter your district">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input id="city" type="text" class="form-control" placeholder="Enter your city">
                            </div>
                        </div>
                    </div>

                    <h4>Parents Information</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="fathername">Father Name</label>
                                <input id="fathername" type="text" class="form-control" placeholder="Enter Your name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="foccipation">Occipation</label>
                                <input id="foccipation" type="text" class="form-control" placeholder="Enter Your profession">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="faddress">Address</label>
                                <input id="faddress" type="text" class="form-control" placeholder="Enter Your Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fphone">Phone</label>
                                <input id="fphone" type="text" class="form-control" placeholder="Enter Your number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="femail">Email</label>
                                <input id="femail" type="text" class="form-control" placeholder="Enter Your Email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mname">Mother Name</label>
                                <input id="mname" type="text" class="form-control" placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="moccipation">Occipation</label>
                                <input id="moccipation" type="text" class="form-control" placeholder="Enter Your profession">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="maddress">Address</label>
                                <input id="maddress" type="text" class="form-control" placeholder="Enter Your address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mphone">Phone</label>
                                <input id="mphone" type="text" class="form-control" placeholder="Enter Your Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="memail">Email</label>
                                <input id="memail" type="text" class="form-control" placeholder="Enter Your Email">
                            </div>
                        </div>
                    </div>

                    <h4>Name of local guardian</h4>
                    <small><mark>If have</mark></small>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gname">Guardian Name</label>
                                <input id="gname" type="text" class="form-control" placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="grelation">Relationship</label>
                                <input id="grelation" type="text" class="form-control" placeholder="Enter Your Relationship">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gaddress">Address</label>
                                <input id="gaddress" type="text" class="form-control" placeholder="Enter Your address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gphone">Phone</label>
                                <input id="gphone" type="text" class="form-control" placeholder="Enter Your Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gemail">Email</label>
                                <input id="gemail" type="text" class="form-control" placeholder="Enter Your Email">
                            </div>
                        </div>
                    </div>

                    <h4>Person to be notified is case of emergency <small><mark>If have</mark></small></h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="erelation">Relationship</label>
                                <input id="erelation" type="text" class="form-control" placeholder="Relationship">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="eaddress">Name</label>
                                <input id="eaddress" type="text" class="form-control" placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="eaddress">Address</label>
                                <input id="eaddress" type="text" class="form-control" placeholder="Enter your Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="eaddress">Phone</label>
                                <input id="eaddress" type="text" class="form-control" placeholder="Enter your Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="eaddress">Email</label>
                                <input id="eaddress" type="text" class="form-control" placeholder="Enter your Email">
                            </div>
                        </div>
                    </div>

                    <h4>Name of the person who will pay the fee</h4>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="asd" id="fpfather" >
                        <label class="form-check-label" for="inlineRadio3">Father</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="asd" id="fpfather" >
                        <label class="form-check-label" for="inlineRadio3">Mother</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="asd" id="fpfather" >
                        <label class="form-check-label" for="inlineRadio3">Local guardian</label>
                    </div>
                    <h4><mark>OR</mark></h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pname">Name</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter your Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pname">Relation</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter Your Relationship">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pname">Address</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter your Address">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pname">Phone</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter your Number">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pname">Email</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pname">Annual Income</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter Your Income">
                            </div>
                        </div>
                    </div>

                    <h4>SAT/TOFFEL/IELTS/GAMAT <small><mark>If any</mark></small></h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">SAT</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">Date taken</label>
                                <input id="pname" type="date" class="form-control" placeholder="Enter Address">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">IELTS</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">Date taken</label>
                                <input id="pname" type="date" class="form-control" placeholder="Enter Address">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">TOFEL</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">Date taken</label>
                                <input id="pname" type="date" class="form-control" placeholder="Enter Address">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">GMAT</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">Date taken</label>
                                <input id="pname" type="date" class="form-control" placeholder="Enter Address">
                            </div>
                        </div>
                    </div>


                    <h4>SCC/O'Lavel record</h4>
                     <div class="row">
                         <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">institute name</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter institute Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">Board name</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter your Board">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">Division</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter your Division">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">GPA</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter Your GPA">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">Passing Year</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter your passing year">
                            </div>
                        </div>
                     </div>




                     <h4>HSC/A'Lavel record</h4>
                     <div class="row">
                         <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">institute name</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter institute name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">Board name</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter your Board">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">Division</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter your division">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">GPA</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter your GPA">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pname">Passing Year</label>
                                <input id="pname" type="text" class="form-control" placeholder="Enter your passing year">
                            </div>
                        </div>
                     </div>
                    
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
    </div>

    <!--JAVASCRIPT START-->
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/style.js"></script>
    <!--JAVASCRIPT END-->
</body>

</html>