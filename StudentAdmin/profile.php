<?php
    include_once"sheader.php";
    include_once"../php_function.php";
 ?>
        <div class="profile">
        <div class="top">
            <div class="row zin">
                <div class="col-md-2">
                    <img src="img/upload/<?php echo $userimage?>" alt="">
                </div>
                <div class="col-md-4 text-white">
                    <h1><?php echo $username?></h1>
                    <p><i class="fas fa-map-marker-alt"></i> <?php echo $ParmanentAddress?>
                </div>
                <div class="col-md-4 text-white offset-md-2">

                    <?php
                        $sid=$_SESSION['sid'];
                        $phpcls=new phpclass();
                        $res=$phpcls->getStatus($sid);
                        while($r=$res->fetch_assoc() ){
                            if($r['satuss']==0 || $r['satuss']==2){
                        ?>
                        <h4 class="">Your profile <span class="count">20%</span> done</h4>
                        <small>You must complete profile 100% to apply</small>
                        <div class="pr_bar">
                            <div class="pr"></div>
                        </div>
                        <button class="cmp btn btn-danger mt-2">Complete your profile</button>
                        <?php  }else{?>
                            <h4 class="">Your profile <span class="count2">100%</span> done</h4>
                            <small>You must complete profile 100% to apply</small>
                            <div class="pr_bar2">
                                <div class="pr2"></div>
                            </div>
                            <Button class="myedit btn btn-info mt-2">Edit your profile</Button>
                            <?php }}?>
                </div>
            </div>
        </div>
        <div class="cmpt_prof">
            <form name="cmtForm" onsubmit="return ccomplitProfileValidation()" action="" method="post" enctype="multipart/form-data">
                
                    <div class="basic">
                        <p>1/4</p>
                        <h3>Basic Information</h3>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="naton">Nationality</label>
                                    <input id="naton" name="nationality" type="text" class="form-control" placeholder="What is your Nationality">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="placeOfBirthDistrict">Place of birth district</label>
                                    <select class="form-control" name="placeOfBirthDistrict" id="bdst">
                                        <option value="Chittagong">Chittagong</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Jessore">Jessore</option>
                                        <option value="Dinajpur">Dinajpur</option>
                                        <option value="Mymensingh">Mymensingh</option>
                                        <option value="Comilla">Comilla</option>
                                        <option value="Barisal">Barisal</option>
                                        <option value="Faridpur">Faridpur</option>
                                        <option value="Bogra">Bogra </option>
                                        <option value="Pabna">Pabna</option>
                                        <option value="Rangamati">Rangamati </option>
                                        <option value="Kushtia">Kushtia </option>
                                        <option value="Rangpur">Rangpur </option>
                                        <option value="Noakhali">Noakhali </option>
                                        <option value="Khulna">Khulna </option>
                                        <option value="Tangail">Tangail </option>
                                        <option value="Panchagarh">Panchagarh </option>
                                        <option value="Bhola">Bhola </option>
                                        <option value="Bandarban">Bandarban </option>
                                        <option value="Chandpur">Chandpur </option>
                                        <option value="Habiganj">Habiganj </option>
                                        <option value="Lakshmipur">Lakshmipur</option>
                                        <option value="Barguna">Barguna </option>
                                        <option value="Jhalokati">Jhalokati</option>
                                        <option value="Pirojpur">Pirojpur</option>
                                        <option value="Patuakhali">Patuakhali </option>
                                        <option value="Jhenaidah">Jhenaidah</option>
                                        <option value="Narail">Narail</option>
                                        <option value="Magura">Magura</option>
                                        <option value="Lalmonirhat">Lalmonirhat</option>
                                        <option value="Kurigram">Kurigram</option>
                                        <option value="Nilphamari">Nilphamari </option>
                                        <option value="Gaibandha">Gaibandha </option>
                                        <option value="Thakurgaon">Thakurgaon </option>
                                        <option value="Satkhira">Satkhira </option>
                                        <option value="Bagerhat">Bagerhat </option>
                                        <option value="Chuadanga">Chuadanga</option>
                                        <option value="Meherpur">Meherpur</option>
                                        <option value="Sirajganj">Sirajganj</option>
                                        <option value="Joypurhat">Joypurhat</option>
                                        <option value="Natore">Natore</option>
                                        <option value="Naogaon">Naogaon</option>
                                        <option value="Nawabganj">Nawabganj</option>
                                        <option value="Khagrachhari">Khagrachhari</option>
                                        <option value="Feni">Feni</option>
                                        <option value="Brahmanbaria">Brahmanbaria</option>
                                        <option value="Sunamganj">Sunamganj</option>
                                        <option value="Cox's Baza">Cox's Baza</option>
                                        <option value="Moulvibazar">Moulvibazar</option>
                                        <option value="Gopalganj">Gopalganj</option>
                                        <option value="Shariatpur">Shariatpur</option>
                                        <option value="Madaripur">Madaripur</option>
                                        <option value="Rajbari">Rajbari</option>
                                        <option value="Gazipur">Gazipur</option>
                                        <option value="Kishoreganj">Kishoreganj</option>
                                        <option value="Jamalpur">Jamalpur</option>
                                        <option value="Sherpur">Sherpur</option>
                                        <option value="Netrakona">Netrakona</option>
                                        <option value="Munshiganj">Munshiganj</option>
                                        <option value="Narsingdi">Narsingdi</option>
                                        <option value="Narayanganj">Narayanganj</option>
                                        <option value="Manikganj">Manikganj</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="imgupload">Upload your image</label>
                                    <input id="imgupload" name="myimage" type="file" class="form-control-file">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Marital Status</label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input id="married" class="form-check-input" name="married" type="radio" value="Married" checked>
                                        <label for="married">Married</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="single" class="form-check-input" name="married" type="radio" value="Single">
                                        <label for="single">Single</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Blood Group</label>
                                    <select name="BloodGroup" class="form-control" id="exampleFormControlSelect1">
                                        <option value="a+">A+</option>
                                        <option value="o+">O+</option>
                                        <option value="a-">A-</option>
                                        <option value="o-">O-</option>
                                        <option value="ab">AB</option>
                                        <option value="ab-">AB-</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <h4 class="clear-left">Parmanent Address</h4>
                        <small><mark>If diffrent from present address</mark></small>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input name="ParmanentAddress" id="address" type="text" class="form-control" placeholder="Enter Your address">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Division</label>
                                    <select name="ParmanentDivision" class="form-control" id="exampleFormControlSelect1">
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Barisal">Barisal</option>
                                        <option value="Chittagong">Chittagong</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Mymensingh">Mymensingh</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Sylhet">Sylhet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="zip">Zip code</label>
                                    <input id="zip" name="ParmanentZipCode" type="text" class="form-control" placeholder="Enter your zip">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ParmanentDistrict">District</label>
                                    <select class="form-control" name="ParmanentDistrict" id="bdst">
                                        <option value="Chittagong">Chittagong</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Jessore">Jessore</option>
                                        <option value="Dinajpur">Dinajpur</option>
                                        <option value="Mymensingh">Mymensingh</option>
                                        <option value="Comilla">Comilla</option>
                                        <option value="Barisal">Barisal</option>
                                        <option value="Faridpur">Faridpur</option>
                                        <option value="Bogra">Bogra </option>
                                        <option value="Pabna">Pabna</option>
                                        <option value="Rangamati">Rangamati </option>
                                        <option value="Kushtia">Kushtia </option>
                                        <option value="Rangpur">Rangpur </option>
                                        <option value="Noakhali">Noakhali </option>
                                        <option value="Khulna">Khulna </option>
                                        <option value="Tangail">Tangail </option>
                                        <option value="Panchagarh">Panchagarh </option>
                                        <option value="Bhola">Bhola </option>
                                        <option value="Bandarban">Bandarban </option>
                                        <option value="Chandpur">Chandpur </option>
                                        <option value="Habiganj">Habiganj </option>
                                        <option value="Lakshmipur">Lakshmipur</option>
                                        <option value="Barguna">Barguna </option>
                                        <option value="Jhalokati">Jhalokati</option>
                                        <option value="Pirojpur">Pirojpur</option>
                                        <option value="Patuakhali">Patuakhali </option>
                                        <option value="Jhenaidah">Jhenaidah</option>
                                        <option value="Narail">Narail</option>
                                        <option value="Magura">Magura</option>
                                        <option value="Lalmonirhat">Lalmonirhat</option>
                                        <option value="Kurigram">Kurigram</option>
                                        <option value="Nilphamari">Nilphamari </option>
                                        <option value="Gaibandha">Gaibandha </option>
                                        <option value="Thakurgaon">Thakurgaon </option>
                                        <option value="Satkhira">Satkhira </option>
                                        <option value="Bagerhat">Bagerhat </option>
                                        <option value="Chuadanga">Chuadanga</option>
                                        <option value="Meherpur">Meherpur</option>
                                        <option value="Sirajganj">Sirajganj</option>
                                        <option value="Joypurhat">Joypurhat</option>
                                        <option value="Natore">Natore</option>
                                        <option value="Naogaon">Naogaon</option>
                                        <option value="Nawabganj">Nawabganj</option>
                                        <option value="Khagrachhari">Khagrachhari</option>
                                        <option value="Feni">Feni</option>
                                        <option value="Brahmanbaria">Brahmanbaria</option>
                                        <option value="Sunamganj">Sunamganj</option>
                                        <option value="Cox's Baza">Cox's Baza</option>
                                        <option value="Moulvibazar">Moulvibazar</option>
                                        <option value="Gopalganj">Gopalganj</option>
                                        <option value="Shariatpur">Shariatpur</option>
                                        <option value="Madaripur">Madaripur</option>
                                        <option value="Rajbari">Rajbari</option>
                                        <option value="Gazipur">Gazipur</option>
                                        <option value="Kishoreganj">Kishoreganj</option>
                                        <option value="Jamalpur">Jamalpur</option>
                                        <option value="Sherpur">Sherpur</option>
                                        <option value="Netrakona">Netrakona</option>
                                        <option value="Munshiganj">Munshiganj</option>
                                        <option value="Narsingdi">Narsingdi</option>
                                        <option value="Narayanganj">Narayanganj</option>
                                        <option value="Manikganj">Manikganj</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input id="city" name="ParmanentCity" type="text" class="form-control" placeholder="Enter your city">
                                </div>
                            </div>
                            <div class="col-md-1 offset-md-11">
                                <p class="next1 btn btn-info">Next</p>
                            </div>
                        </div>
                    </div>
                    <div class="parentsLocal">
                        <p>2/4</p>
                        <h4>Parents Information</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fathername">Father Name</label>
                                    <input id="fathername" name="fatherName" type="text" class="form-control" placeholder="Enter Your name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="foccipation">Occipation</label>
                                    <input id="foccipation" name="fatherOccipation" type="text" class="form-control" placeholder="Enter Your profession">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="faddress">Address</label>
                                    <input id="faddress" name="fatherAddress" type="text" class="form-control" placeholder="Enter Your Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fphone">Phone</label>
                                    <input id="fphone" name="fatherPhone" type="text" class="form-control" placeholder="Enter Your number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="femail">Email</label>
                                    <input id="femail" name="fatherEmail" type="text" class="form-control" placeholder="Enter Your Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mname">Mother Name</label>
                                    <input id="mname" name="motherName" type="text" class="form-control" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="moccipation">Occipation</label>
                                    <input id="moccipation" name="motherOccipation" type="text" class="form-control" placeholder="Enter Your profession">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="maddress">Address</label>
                                    <input id="maddress" name="motherAddress" type="text" class="form-control" placeholder="Enter Your address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mphone">Phone</label>
                                    <input id="mphone" name="motherPhone" type="text" class="form-control" placeholder="Enter Your Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="memail">Email</label>
                                    <input id="memail" name="motherEmail" type="text" class="form-control" placeholder="Enter Your Email">
                                </div>
                            </div>
                        </div>

                        <h4>Name of local guardian</h4>
                        <small><mark>If have</mark></small>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gname">Guardian Name</label>
                                    <input id="gname" name="nameOfLocalGuardian" type="text" class="form-control" placeholder="Enter Your Name">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="grelation">Relationship</label>
                                    <input id="grelation" name="relationshipOfLocalGuardian" type="text" class="form-control" placeholder="Enter Your Relationship">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gaddress">Address</label>
                                    <input id="gaddress" name="addressOfLocalGuardian" type="text" class="form-control" placeholder="Enter Your address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gphone">Phone</label>
                                    <input id="gphone" name="phoneOfLocalGuardian" type="text" class="form-control" placeholder="Enter Your Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gemail">Email</label>
                                    <input id="gemail" name="emailOfLocalGuardian" type="text" class="form-control" placeholder="Enter Your Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p class="pre1 btn btn-danger">Previous</p>
                            </div>
                            <div class="col-md-2 offset-md-8">
                                <p class="next2 btn btn-info float-right">Next</p>
                            </div>
                        </div>
                    </div>
                    <div class="anothergur">
                        <p>3/4</p>

                        <h4>Person to be notified is case of emergency <small><mark>If have</mark></small></h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="erelation">Relationship</label>
                                    <input id="erelation" name="emergencyPersonRelationshipe" type="text" class="form-control" placeholder="Relationship">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="eaddress">Name</label>
                                    <input id="eaddress" name="emergencyPersonName" type="text" class="form-control" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="eaddress">Address</label>
                                    <input id="eaddress" name="emergencyPersonAddress" type="text" class="form-control" placeholder="Enter your Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="eaddress">Phone</label>
                                    <input id="eaddress" name="emergencyPersonPhone" type="text" class="form-control" placeholder="Enter your Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="eaddress">Email</label>
                                    <input id="eaddress" name="emergencyPersonEmail" type="text" class="form-control" placeholder="Enter your Email">
                                </div>
                            </div>
                        </div>
                        <h4>Name of the person who will pay the fee</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pname">Name</label>
                                    <input id="pname" name="personPayTheFeeName" type="text" class="form-control" placeholder="Enter your Name">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pname">Relation</label>
                                    <input id="pname" name="personPayTheFeeRealtion" type="text" class="form-control" placeholder="Enter Your Relationship">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pname">Address</label>
                                    <input id="pname" name="personPayTheFeeAddress" type="text" class="form-control" placeholder="Enter your Address">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pname">Phone</label>
                                    <input id="pname" name="personPayTheFeePhone" type="text" class="form-control" placeholder="Enter your Number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pname">Email</label>
                                    <input id="pname" name="personPayTheFeeEmail" type="text" class="form-control" placeholder="Enter your Email">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pname">Annual Income</label>
                                    <input id="pname" name="personPayTheFeeAnnualIncome" type="text" class="form-control" placeholder="Enter Your Income">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p class="pre2 btn btn-danger">Previous</p>
                            </div>
                            <div class="col-md-2 offset-md-8">
                                <p class="next3 btn btn-info float-right">Next</p>
                            </div>
                        </div>
                    </div>
                    <div class="academi">
                        <p>4/4</p>
                        <h4>SAT/TOFFEL/IELTS/GAMAT <small><mark>If any</mark></small></h4>
                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">SAT</label>
                                    <input id="pname" name="sat" type="text" class="form-control" placeholder="Enter">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Date taken</label>
                                    <input id="pname" name="satDate" type="date" class="form-control" placeholder="Enter Address">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">IELTS</label>
                                    <input id="pname" name="ielts" type="text" class="form-control" placeholder="Enter">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Date taken</label>
                                    <input id="pname" name="ieltsDate" type="date" class="form-control" placeholder="Enter Address">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">TOFEL</label>
                                    <input id="pname" name="tofel" type="text" class="form-control" placeholder="Enter">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Date taken</label>
                                    <input id="pname" name="tofelDate" type="date" class="form-control" placeholder="Enter Address">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">GMAT</label>
                                    <input id="pname" name="gmat" type="text" class="form-control" placeholder="Enter">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Date taken</label>
                                    <input id="pname" name="gmatDate" type="date" class="form-control" placeholder="Enter Address">
                                </div>
                            </div>
                        </div>

                        <h4>SCC/O'Lavel record</h4>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Institute name</label>
                                    <input id="pname" name="sscInstituteName" type="text" class="form-control" placeholder="Enter institute Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Board name</label>
                                    <input id="pname" name="sscBordeName" type="text" class="form-control" placeholder="Enter your Board">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">GPA</label>
                                    <input id="pname" name="sscGpa" type="text" class="form-control" placeholder="Enter Your GPA">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Passing Year</label>
                                    <input id="pname" name="sscpassingYear" type="text" class="form-control" placeholder="Enter your passing year">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">SSC Certificate</label>
                                    <input id="pname" name="sscCertificate" type="file" class="file-control">
                                </div>
                            </div>
                        </div>

                        <h4>HSC/A'Lavel record</h4>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Institute name</label>
                                    <input id="pname" name="hscInstituteName" type="text" class="form-control" placeholder="Enter institute name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Board name</label>
                                    <input id="pname" name="hscBordeName" type="text" class="form-control" placeholder="Enter your Board">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">GPA</label>
                                    <input id="pname" name="hscGpa" type="text" class="form-control" placeholder="Enter your GPA">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Passing Year</label>
                                    <input id="pname" name="hscpassingYear" type="text" class="form-control" placeholder="Enter your passing year">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">HSC Certificate</label>
                                    <input id="pname" name="hscCertificate" type="file" class="file-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p class="pre3 btn btn-danger">Previous</p>
                            </div>
                            <div class="col-md-2 offset-md-8">

                                <input class="btn btn-info float-right" type="submit" name="submit" value="submit" >
                            </div>
                        </div>
                    </div>
            </form>
            <?php
                    $phcls=new phpclass();
                        if (isset($_POST['submit'])) {
                            $res=$phcls->RegistrationStudentTwo($_POST,$_FILES);
                        }
                    ?>
        </div>
        <div class="secnd_part">
            <?php
                $sid=$_SESSION["sid"];
                $phcls=new phpclass();
                $res=$phcls->getInformation($sid);
                if (isset($res)) {
                    while ($value=$res->fetch_assoc()) {

                ?>

                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <h2>Personal Information</h2>
                            <img class="img-thumbnail mb-1" src="img/Upload/<?php echo $value['image']?>" width="200" alt="">
                            <p><b>Name: </b><?php echo $value['fname']." "; echo $value['lname']?></p>
                            <p><b>Date Of barth:</b> <?php echo $value['dateOfbirth']?></p>
                            <p><b>Gender:</b> <?php echo $value['gender']?></p>
                            <p><b>Natonality:</b> <?php echo $value['nationality']?></p>
                            <p><b>Blood group:</b> <?php echo $value['BloodGroup']?></p>
                            <p><b>Married status:</b> <?php echo $value['married']?></p>
                            <p><b>Email:</b> <?php echo $value['email']?></p>
                            <p><b>Phone:</b> <?php echo $value['phone']?></p>
                            <p><b>Place of birth district:</b> <?php echo $value['placeOfBirthDistrict']?></p>

                            <h2>Parents Information</h2>
                            <h5 class="text-center">Fathers Information</h5>
                            <p><b>Fathers Name:</b> <?php echo $value['fatherName']?></p>
                            <p><b>Occipation:</b> <?php echo $value['fatherOccipation']?></p>
                            <p><b>Address:</b> <?php echo $value['fatherAddress']?></p>
                            <p><b>Phone:</b> <?php echo $value['fatherPhone']?></p>
                            <p><b>Email:</b> <?php echo $value['fatherEmail']?></p>
                            <h5 class="text-center">Mothers Information</h5>
                            <p><b>Fathers Name:</b> <?php echo $value['motherName']?></p>
                            <p><b>Occipation:</b> <?php echo $value['motherOccipation']?></p>
                            <p><b>Address:</b> <?php echo $value['motherAddress']?></p>
                            <p><b>Phone:</b> <?php echo $value['motherPhone']?></p>
                            <p><b>Email:</b> <?php echo $value['motherEmail']?></p>

                            <h2>SAT/TOFFEL/IELTS/GAMAT</h2>
                            <p>SAT Point: <?php echo $value['sat']?></p>
                            <p>SAT Date: <?php echo $value['satDate']?></p>
                            <p>TOFFEL Point: <?php echo $value['tofel']?></p>
                            <p>TOFFEL Date: <?php echo $value['tofelDate']?></p>
                            <p>IELTS Point: <?php echo $value['ielts']?></p>
                            <p>IELTS Date: <?php echo $value['ieltsDate']?></p>
                            <p>GAMAT Point: <?php echo $value['gmat']?></p>
                            <p>GAMAT Date: <?php echo $value['gmatDate']?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box2">
                            <h2>Address</h2>
                            <p><b>House:</b> <?php echo $value['ParmanentAddress']?></p>
                            <p><b>City:</b> <?php echo $value['ParmanentCity']?></p>
                            <p><b>Division:</b> <?php echo $value['ParmanentDivision']?></p>
                            <p><b>District:</b> <?php echo $value['ParmanentDistrict']?></p>
                            <p><b>zip code:</b> <?php echo $value['ParmanentZipCode']?></p>
                            

                            <h2>Name of local guardian</h2>
                            <p><b>Guardian Name:</b> <?php echo $value['nameOfLocalGuardian']?></p>
                            <p><b>Relationship:</b> <?php echo $value['relationshipOfLocalGuardian']?></p>
                            <p><b>Address:</b> <?php echo $value['addressOfLocalGuardian']?></p>
                            <p><b>Phone:</b> <?php echo $value['phoneOfLocalGuardian']?></p>
                            <p><b>Email:</b> <?php echo $value['emailOfLocalGuardian']?></p>

                            <h2>Name of the person who will pay the fee</h2>
                            <p><b>Guardian Name:</b> <?php echo $value['personPayTheFeeName']?></p>
                            <p><b>Relationship:</b> <?php echo $value['personPayTheFeeRealtion']?></p>
                            <p><b>Annual Income:</b> <?php echo $value['personPayTheFeeAnnualIncome']?></p>
                            <p><b>Address:</b> <?php echo $value['personPayTheFeeAddress']?></p>
                            <p><b>Phone:</b> <?php echo $value['personPayTheFeePhone']?></p>
                            <p><b>Email:</b> <?php echo $value['personPayTheFeeEmail']?></p>

                            <h2>Academic information</h2>
                            <h5 class="text-center">SCC/O'Lavel record</h5>
                            <p>Institute name: <?php echo $value['sscInstituteName']?></p>
                            <p>Board name: <?php echo $value['sscBordeName']?></p>
                            <p>GPA: <?php echo $value['sscGpa']?></p>
                            <p>Passing Year: <?php echo $value['sscpassingYear']?></p>
                            <p>SSC Certificate:</p>
                            <img class="img-thumbnail mb-1" src="img/upload/<?php echo $value['sscCertificate']?>" width="200" alt="">


                            <h5 class="text-center">HSC/A'Lavel record</h5>
                            <p>Institute name: <?php echo $value['hscInstituteName']?></p>
                            <p>Board name: <?php echo $value['hscBordeName']?></p>
                            <p>GPA: <?php echo $value['hscGpa']?></p>
                            <p>Passing Year: <?php echo $value['hscpassingYear']?></p>
                            <p>SSC Certificate:</p>
                            <img class="img-thumbnail mb-1" src="img/upload/<?php echo $value['hscCertificate']?>" width="200" alt="">
                        </div>
                    </div>
                </div>
                <?php }}?>
        </div>
        <div class="edit_part">
                
            <form onsubmit="return editFormvalidation();" name="editform" action="" method="POST" enctype="multipart/form-data">
            
            <?php 
                $phpcls=new phpclass();
                $res=$phpcls->getStudentInfoforedit();
                if($res){
                    while ($r=$res->fetch_assoc()) {?>
        
                
                        
                        <h3>Basic Information</h3>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="naton">Nationality</label>
                                    <input  id="naton" value="<?php echo $r['nationality']?>" name="nationality" type="text" class="form-control" placeholder="What is your Nationality">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="placeOfBirthDistrict">Place of birth district</label>
                                    <select class="form-control" name="placeOfBirthDistrict" id="bdst">
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Chittagong'){ echo ' selected="selected"'; } ?> value="Chittagong">Chittagong</option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Dhaka'){ echo ' selected="selected"'; } ?> value="Dhaka">Dhaka</option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Rajshahi'){ echo ' selected="selected"'; } ?> value="Rajshahi">Rajshahi</option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Sylhet'){ echo ' selected="selected"'; } ?> value="Sylhet">Sylhet</option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Jessore'){ echo ' selected="selected"'; } ?> value="Jessore">Jessore</option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Dinajpur'){ echo ' selected="selected"'; } ?> value="Dinajpur">Dinajpur</option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Mymensingh'){ echo ' selected="selected"'; } ?> value="Mymensingh">Mymensingh</option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Comilla'){ echo ' selected="selected"'; } ?> value="Comilla">Comilla</option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Barisal'){ echo ' selected="selected"'; } ?> value="Barisal">Barisal</option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Faridpur'){ echo ' selected="selected"'; } ?> value="Faridpur">Faridpur</option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Bogra'){ echo ' selected="selected"'; } ?> value="Bogra">Bogra </option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Pabna'){ echo ' selected="selected"'; } ?> value="Pabna">Pabna</option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Rangamati'){ echo ' selected="selected"'; } ?> value="Rangamati">Rangamati </option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Kushtia'){ echo ' selected="selected"'; } ?> value="Kushtia">Kushtia </option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Rangpur'){ echo ' selected="selected"'; } ?> value="Rangpur">Rangpur </option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Noakhali'){ echo ' selected="selected"'; } ?> value="Noakhali">Noakhali </option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Khulna'){ echo ' selected="selected"'; } ?> value="Khulna">Khulna </option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Tangail'){ echo ' selected="selected"'; } ?> value="Tangail">Tangail </option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Panchagarh'){ echo ' selected="selected"'; } ?> value="Panchagarh">Panchagarh </option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Bhola'){ echo ' selected="selected"'; } ?> value="Bhola">Bhola </option>
                                        <option <?php if($r['placeOfBirthDistrict'] == 'Bandarban'){ echo ' selected="selected"'; } ?> value="Bandarban">Bandarban </option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Chandpur'){ echo ' selected="selected"'; } ?> value="Chandpur">Chandpur </option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Habiganj'){ echo ' selected="selected"'; } ?> value="Habiganj">Habiganj </option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Lakshmipur'){ echo ' selected="selected"'; } ?> value="Lakshmipur">Lakshmipur</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Barguna'){ echo ' selected="selected"'; } ?> value="Barguna">Barguna </option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Jhalokati'){ echo ' selected="selected"'; } ?> value="Jhalokati">Jhalokati</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Pirojpur'){ echo ' selected="selected"'; } ?> value="Pirojpur">Pirojpur</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Patuakhali'){ echo ' selected="selected"'; } ?> value="Patuakhali">Patuakhali </option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Jhenaidah'){ echo ' selected="selected"'; } ?> value="Jhenaidah">Jhenaidah</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Narail'){ echo ' selected="selected"'; } ?> value="Narail">Narail</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Magura'){ echo ' selected="selected"'; } ?> value="Magura">Magura</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Lalmonirhat'){ echo ' selected="selected"'; } ?> value="Lalmonirhat">Lalmonirhat</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Kurigram'){ echo ' selected="selected"'; } ?> value="Kurigram">Kurigram</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Nilphamari'){ echo ' selected="selected"'; } ?> value="Nilphamari">Nilphamari </option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Gaibandha'){ echo ' selected="selected"'; } ?> value="Gaibandha">Gaibandha </option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Thakurgaon'){ echo ' selected="selected"'; } ?> value="Thakurgaon">Thakurgaon </option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Satkhira'){ echo ' selected="selected"'; } ?> value="Satkhira">Satkhira </option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Bagerhat'){ echo ' selected="selected"'; } ?> value="Bagerhat">Bagerhat </option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Chuadanga'){ echo ' selected="selected"'; } ?> value="Chuadanga">Chuadanga</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Meherpur'){ echo ' selected="selected"'; } ?> value="Meherpur">Meherpur</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Sirajganj'){ echo ' selected="selected"'; } ?> value="Sirajganj">Sirajganj</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Joypurhat'){ echo ' selected="selected"'; } ?> value="Joypurhat">Joypurhat</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Natore'){ echo ' selected="selected"'; } ?> value="Natore">Natore</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Naogaon'){ echo ' selected="selected"'; } ?> value="Naogaon">Naogaon</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Nawabganj'){ echo ' selected="selected"'; } ?> value="Nawabganj">Nawabganj</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Khagrachhari'){ echo ' selected="selected"'; } ?> value="Khagrachhari">Khagrachhari</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Feni'){ echo ' selected="selected"'; } ?> value="Feni">Feni</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Brahmanbaria'){ echo ' selected="selected"'; } ?> value="Brahmanbaria">Brahmanbaria</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Sunamganj'){ echo ' selected="selected"'; } ?> value="Sunamganj">Sunamganj</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Coxs Baza"'){ echo ' selected="selected"'; } ?> value="Coxs Baza">Cox's Baza</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Moulvibazar'){ echo ' selected="selected"'; } ?> value="Moulvibazar">Moulvibazar</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Gopalganj'){ echo ' selected="selected"'; } ?> value="Gopalganj">Gopalganj</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Shariatpur'){ echo ' selected="selected"'; } ?> value="Shariatpur">Shariatpur</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Madaripur'){ echo ' selected="selected"'; } ?> value="Madaripur">Madaripur</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Rajbari'){ echo ' selected="selected"'; } ?> value="Rajbari">Rajbari</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Gazipur'){ echo ' selected="selected"'; } ?> value="Gazipur">Gazipur</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Kishoreganj'){ echo ' selected="selected"'; } ?> value="Kishoreganj">Kishoreganj</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Jamalpur'){ echo ' selected="selected"'; } ?> value="Jamalpur">Jamalpur</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Sherpur'){ echo ' selected="selected"'; } ?> value="Sherpur">Sherpur</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Netrakona'){ echo ' selected="selected"'; } ?> value="Netrakona">Netrakona</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Munshiganj'){ echo ' selected="selected"'; } ?> value="Munshiganj">Munshiganj</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Narsingdi'){ echo ' selected="selected"'; } ?> value="Narsingdi">Narsingdi</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Narayanganj'){ echo ' selected="selected"'; } ?> value="Narayanganj">Narayanganj</option>
                                        <option<?php if($r['placeOfBirthDistrict'] == 'Manikganj'){ echo ' selected="selected"'; } ?> value="Manikganj">Manikganj</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="imgupload">Upload your image</label><br>
                                    <img src="img/upload/<?php echo $r['image']?>" alt="" width="100" height="100">
                                    <input id="imgupload" name="myimage" type="file" class="form-control-file mt-1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Marital Status</label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input <?php if($r['married']=='one'){ echo 'checked'; }?> id="married" class="form-check-input" name="married" type="radio" value="one">
                                        <label for="married">Married</label>
                                    </div>
                                    <div class="form-check">
                                        <input <?php if($r['married']=='two'){ echo 'checked'; }?> id="single" class="form-check-input" name="married" type="radio" value="two">
                                        <label for="single">Single</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Blood Group</label>
                                    <select name="BloodGroup" class="form-control" id="exampleFormControlSelect1">
                                        <option <?php if($r['BloodGroup'] == 'a+'){ echo ' selected="selected"'; } ?> value="a+">A+</option>
                                        <option <?php if($r['BloodGroup'] == 'o+'){ echo ' selected="selected"'; } ?> value="o+">O+</option>
                                        <option <?php if($r['BloodGroup'] == 'a-'){ echo ' selected="selected"'; } ?> value="a-">A-</option>
                                        <option <?php if($r['BloodGroup'] == 'o-'){ echo ' selected="selected"'; } ?> value="o-">O-</option>
                                        <option <?php if($r['BloodGroup'] == 'ab'){ echo ' selected="selected"'; } ?> value="ab">AB</option>
                                        <option <?php if($r['BloodGroup'] == 'ab-'){ echo ' selected="selected"'; } ?> value="ab-">AB-</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <h4 class="clear-left">Parmanent Address</h4>
                        <small><mark>If diffrent from present address</mark></small>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input value="<?php echo $r['ParmanentAddress']?>" name="ParmanentAddress" id="address" type="text" class="form-control" placeholder="Enter Your address">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Division</label>
                                    <select name="ParmanentDivision" class="form-control" id="exampleFormControlSelect1">
                                        <option <?php if($r['ParmanentDivision'] == 'Dhaka'){ echo ' selected="selected"'; } ?> value="Dhaka">Dhaka</option>
                                        <option <?php if($r['ParmanentDivision'] == 'Barisal-'){ echo ' selected="selected"'; } ?> value="Barisal">Barisal</option>
                                        <option <?php if($r['ParmanentDivision'] == 'Chittagong'){ echo ' selected="selected"'; } ?> value="Chittagong">Chittagong</option>
                                        <option <?php if($r['ParmanentDivision'] == 'Khulna'){ echo ' selected="selected"'; } ?> value="Khulna">Khulna</option>
                                        <option <?php if($r['ParmanentDivision'] == 'Mymensingh'){ echo ' selected="selected"'; } ?> value="Mymensingh">Mymensingh</option>
                                        <option <?php if($r['ParmanentDivision'] == 'Rajshahi'){ echo ' selected="selected"'; } ?> value="Rajshahi">Rajshahi</option>
                                        <option <?php if($r['ParmanentDivision'] == 'Sylhet'){ echo ' selected="selected"'; } ?> value="Sylhet">Sylhet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="zip">Zip code</label>
                                    <input value="<?php echo $r['nationality']?>" id="zip" name="ParmanentZipCode" type="text" class="form-control" placeholder="Enter your zip">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ParmanentDistrict">District</label>
                                    <select class="form-control" name="ParmanentDistrict" id="bdst">
                                         <option <?php if($r['ParmanentDistrict'] == 'Chittagong'){ echo ' selected="selected"'; } ?> value="Chittagong">Chittagong</option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Dhaka'){ echo ' selected="selected"'; } ?> value="Dhaka">Dhaka</option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Rajshahi'){ echo ' selected="selected"'; } ?> value="Rajshahi">Rajshahi</option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Sylhet'){ echo ' selected="selected"'; } ?> value="Sylhet">Sylhet</option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Jessore'){ echo ' selected="selected"'; } ?> value="Jessore">Jessore</option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Dinajpur'){ echo ' selected="selected"'; } ?> value="Dinajpur">Dinajpur</option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Mymensingh'){ echo ' selected="selected"'; } ?> value="Mymensingh">Mymensingh</option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Comilla'){ echo ' selected="selected"'; } ?> value="Comilla">Comilla</option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Barisal'){ echo ' selected="selected"'; } ?> value="Barisal">Barisal</option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Faridpur'){ echo ' selected="selected"'; } ?> value="Faridpur">Faridpur</option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Bogra'){ echo ' selected="selected"'; } ?> value="Bogra">Bogra </option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Pabna'){ echo ' selected="selected"'; } ?> value="Pabna">Pabna</option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Rangamati'){ echo ' selected="selected"'; } ?> value="Rangamati">Rangamati </option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Kushtia'){ echo ' selected="selected"'; } ?> value="Kushtia">Kushtia </option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Rangpur'){ echo ' selected="selected"'; } ?> value="Rangpur">Rangpur </option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Noakhali'){ echo ' selected="selected"'; } ?> value="Noakhali">Noakhali </option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Khulna'){ echo ' selected="selected"'; } ?> value="Khulna">Khulna </option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Tangail'){ echo ' selected="selected"'; } ?> value="Tangail">Tangail </option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Panchagarh'){ echo ' selected="selected"'; } ?> value="Panchagarh">Panchagarh </option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Bhola'){ echo ' selected="selected"'; } ?> value="Bhola">Bhola </option>
                                        <option <?php if($r['ParmanentDistrict'] == 'Bandarban'){ echo ' selected="selected"'; } ?> value="Bandarban">Bandarban </option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Chandpur'){ echo ' selected="selected"'; } ?> value="Chandpur">Chandpur </option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Habiganj'){ echo ' selected="selected"'; } ?> value="Habiganj">Habiganj </option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Lakshmipur'){ echo ' selected="selected"'; } ?> value="Lakshmipur">Lakshmipur</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Barguna'){ echo ' selected="selected"'; } ?> value="Barguna">Barguna </option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Jhalokati'){ echo ' selected="selected"'; } ?> value="Jhalokati">Jhalokati</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Pirojpur'){ echo ' selected="selected"'; } ?> value="Pirojpur">Pirojpur</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Patuakhali'){ echo ' selected="selected"'; } ?> value="Patuakhali">Patuakhali </option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Jhenaidah'){ echo ' selected="selected"'; } ?> value="Jhenaidah">Jhenaidah</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Narail'){ echo ' selected="selected"'; } ?> value="Narail">Narail</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Magura'){ echo ' selected="selected"'; } ?> value="Magura">Magura</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Lalmonirhat'){ echo ' selected="selected"'; } ?> value="Lalmonirhat">Lalmonirhat</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Kurigram'){ echo ' selected="selected"'; } ?> value="Kurigram">Kurigram</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Nilphamari'){ echo ' selected="selected"'; } ?> value="Nilphamari">Nilphamari </option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Gaibandha'){ echo ' selected="selected"'; } ?> value="Gaibandha">Gaibandha </option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Thakurgaon'){ echo ' selected="selected"'; } ?> value="Thakurgaon">Thakurgaon </option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Satkhira'){ echo ' selected="selected"'; } ?> value="Satkhira">Satkhira </option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Bagerhat'){ echo ' selected="selected"'; } ?> value="Bagerhat">Bagerhat </option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Chuadanga'){ echo ' selected="selected"'; } ?> value="Chuadanga">Chuadanga</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Meherpur'){ echo ' selected="selected"'; } ?> value="Meherpur">Meherpur</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Sirajganj'){ echo ' selected="selected"'; } ?> value="Sirajganj">Sirajganj</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Joypurhat'){ echo ' selected="selected"'; } ?> value="Joypurhat">Joypurhat</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Natore'){ echo ' selected="selected"'; } ?> value="Natore">Natore</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Naogaon'){ echo ' selected="selected"'; } ?> value="Naogaon">Naogaon</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Nawabganj'){ echo ' selected="selected"'; } ?> value="Nawabganj">Nawabganj</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Khagrachhari'){ echo ' selected="selected"'; } ?> value="Khagrachhari">Khagrachhari</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Feni'){ echo ' selected="selected"'; } ?> value="Feni">Feni</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Brahmanbaria'){ echo ' selected="selected"'; } ?> value="Brahmanbaria">Brahmanbaria</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Sunamganj'){ echo ' selected="selected"'; } ?> value="Sunamganj">Sunamganj</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Coxs Baza"'){ echo ' selected="selected"'; } ?> value="Coxs Baza">Cox's Baza</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Moulvibazar'){ echo ' selected="selected"'; } ?> value="Moulvibazar">Moulvibazar</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Gopalganj'){ echo ' selected="selected"'; } ?> value="Gopalganj">Gopalganj</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Shariatpur'){ echo ' selected="selected"'; } ?> value="Shariatpur">Shariatpur</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Madaripur'){ echo ' selected="selected"'; } ?> value="Madaripur">Madaripur</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Rajbari'){ echo ' selected="selected"'; } ?> value="Rajbari">Rajbari</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Gazipur'){ echo ' selected="selected"'; } ?> value="Gazipur">Gazipur</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Kishoreganj'){ echo ' selected="selected"'; } ?> value="Kishoreganj">Kishoreganj</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Jamalpur'){ echo ' selected="selected"'; } ?> value="Jamalpur">Jamalpur</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Sherpur'){ echo ' selected="selected"'; } ?> value="Sherpur">Sherpur</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Netrakona'){ echo ' selected="selected"'; } ?> value="Netrakona">Netrakona</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Munshiganj'){ echo ' selected="selected"'; } ?> value="Munshiganj">Munshiganj</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Narsingdi'){ echo ' selected="selected"'; } ?> value="Narsingdi">Narsingdi</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Narayanganj'){ echo ' selected="selected"'; } ?> value="Narayanganj">Narayanganj</option>
                                        <option<?php if($r['ParmanentDistrict'] == 'Manikganj'){ echo ' selected="selected"'; } ?> value="Manikganj">Manikganj</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input value="<?php echo $r['ParmanentCity']?>" id="city" name="ParmanentCity" type="text" class="form-control" placeholder="Enter your city">
                                </div>
                            </div>
                            
                        </div>
                    
                        
                        <h4>Parents Information</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fathername">Father Name</label>
                                    <input value="<?php echo $r['fatherName']?>" id="fathername" name="fatherName" type="text" class="form-control" placeholder="Enter Your name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="foccipation">Occipation</label>
                                    <input value="<?php echo $r['fatherOccipation']?>" id="foccipation" name="fatherOccipation" type="text" class="form-control" placeholder="Enter Your profession">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="faddress">Address</label>
                                    <input value="<?php echo $r['fatherAddress']?>" id="faddress" name="fatherAddress" type="text" class="form-control" placeholder="Enter Your Address"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fphone">Phone</label>
                                    <input value="<?php echo $r['fatherPhone']?>" id="fphone" name="fatherPhone" type="text" class="form-control" placeholder="Enter Your number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="femail">Email</label>
                                    <input value="<?php echo $r['fatherEmail']?>" id="femail" name="fatherEmail" type="text" class="form-control" placeholder="Enter Your Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mname">Mother Name</label>
                                    <input value="<?php echo $r['motherName']?>" id="mname" name="motherName" type="text" class="form-control" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="moccipation">Occipation</label>
                                    <input value="<?php echo $r['motherOccipation']?>" id="moccipation" name="motherOccipation" type="text" class="form-control" placeholder="Enter Your profession">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="maddress">Address</label>
                                    <input value="<?php echo $r['motherAddress']?>" id="maddress" name="motherAddress" type="text" class="form-control" placeholder="Enter Your address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mphone">Phone</label>
                                    <input value="<?php echo $r['motherPhone']?>" id="mphone" name="motherPhone" type="text" class="form-control" placeholder="Enter Your Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="memail">Email</label>
                                    <input value="<?php echo $r['motherEmail']?>" id="memail" name="motherEmail" type="text" class="form-control" placeholder="Enter Your Email">
                                </div>
                            </div>
                        </div>

                        <h4>Name of local guardian</h4>
                        <small><mark>If have</mark></small>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gname">Guardian Name</label>
                                    <input value="<?php echo $r['nameOfLocalGuardian']?>" id="gname" name="nameOfLocalGuardian" type="text" class="form-control" placeholder="Enter Your Name">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="grelation">Relationship</label>
                                    <input value="<?php echo $r['relationshipOfLocalGuardian']?>" id="grelation" name="relationshipOfLocalGuardian" type="text" class="form-control" placeholder="Enter Your Relationship">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gaddress">Address</label>
                                    <input value="<?php echo $r['addressOfLocalGuardian']?>" id="gaddress" name="addressOfLocalGuardian" type="text" class="form-control" placeholder="Enter Your address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gphone">Phone</label>
                                    <input value="<?php echo $r['phoneOfLocalGuardian']?>" id="gphone" name="phoneOfLocalGuardian" type="text" class="form-control" placeholder="Enter Your Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gemail">Email</label>
                                    <input value="<?php echo $r['emailOfLocalGuardian']?>" id="gemail" name="emailOfLocalGuardian" type="text" class="form-control" placeholder="Enter Your Email">
                                </div>
                            </div>
                        </div>
                        
                    
                        

                        <h4>Person to be notified is case of emergency <small><mark>If have</mark></small></h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="erelation">Relationship</label>
                                    <input value="<?php echo $r['emergencyPersonRelationshipe']?>" id="erelation" name="emergencyPersonRelationshipe" type="text" class="form-control" placeholder="Relationship">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="eaddress">Name</label>
                                    <input value="<?php echo $r['emergencyPersonName']?>" id="eaddress" name="emergencyPersonName" type="text" class="form-control" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="eaddress">Address</label>
                                    <input value="<?php echo $r['emergencyPersonAddress']?>" id="eaddress" name="emergencyPersonAddress" type="text" class="form-control" placeholder="Enter your Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="eaddress">Phone</label>
                                    <input value="<?php echo $r['emergencyPersonPhone']?>" id="eaddress" name="emergencyPersonPhone" type="text" class="form-control" placeholder="Enter your Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="eaddress">Email</label>
                                    <input value="<?php echo $r['emergencyPersonEmail']?>" id="eaddress" name="emergencyPersonEmail" type="text" class="form-control" placeholder="Enter your Email">
                                </div>
                            </div>
                        </div>
                        <h4>Name of the person who will pay the fee</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pname">Name</label>
                                    <input value="<?php echo $r['personPayTheFeeName']?>" id="pname" name="personPayTheFeeName" type="text" class="form-control" placeholder="Enter your Name">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pname">Relation</label>
                                    <input value="<?php echo $r['personPayTheFeeRealtion']?>" id="pname" name="personPayTheFeeRealtion" type="text" class="form-control" placeholder="Enter Your Relationship">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pname">Address</label>
                                    <input value="<?php echo $r['personPayTheFeeAddress']?>" id="pname" name="personPayTheFeeAddress" type="text" class="form-control" placeholder="Enter your Address">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pname">Phone</label>
                                    <input value="<?php echo $r['personPayTheFeePhone']?>" id="pname" name="personPayTheFeePhone" type="text" class="form-control" placeholder="Enter your Number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pname">Email</label>
                                    <input value="<?php echo $r['personPayTheFeeEmail']?>" id="pname" name="personPayTheFeeEmail" type="text" class="form-control" placeholder="Enter your Email">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pname">Annual Income</label>
                                    <input value="<?php echo $r['personPayTheFeeAnnualIncome']?>" id="pname" name="personPayTheFeeAnnualIncome" type="text" class="form-control" placeholder="Enter Your Income">
                                </div>
                            </div>
                        </div>
                        
                    
                        
                        <h4>SAT/TOFFEL/IELTS/GAMAT <small><mark>If any</mark></small></h4>
                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">SAT</label>
                                    <input value="<?php echo $r['sat']?>" id="pname" name="sat" type="text" class="form-control" placeholder="Enter">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Date taken</label>
                                    <input value="<?php echo $r['satDate']?>" id="pname" name="satDate" type="date" class="form-control" placeholder="Enter Address">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">IELTS</label>
                                    <input value="<?php echo $r['ielts']?>" id="pname" name="ielts" type="text" class="form-control" placeholder="Enter">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Date taken</label>
                                    <input value="<?php echo $r['ieltsDate']?>" id="pname" name="ieltsDate" type="date" class="form-control" placeholder="Enter Address">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">TOFEL</label>
                                    <input value="<?php echo $r['tofel']?>" id="pname" name="tofel" type="text" class="form-control" placeholder="Enter">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Date taken</label>
                                    <input value="<?php echo $r['tofelDate']?>" id="pname" name="tofelDate" type="date" class="form-control" placeholder="Enter Address">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">GMAT</label>
                                    <input value="<?php echo $r['gmat']?>" id="pname" name="gmat" type="text" class="form-control" placeholder="Enter">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Date taken</label>
                                    <input value="<?php echo $r['gmatDate']?>" id="pname" name="gmatDate" type="date" class="form-control" placeholder="Enter Address">
                                </div>
                            </div>
                        </div>

                        <h4>SCC/O'Lavel record</h4>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Institute name</label>
                                    <input value="<?php echo $r['sscInstituteName']?>" id="pname" name="sscInstituteName" type="text" class="form-control" placeholder="Enter institute Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Board name</label>
                                    <input value="<?php echo $r['sscBordeName']?>" id="pname" name="sscBordeName" type="text" class="form-control" placeholder="Enter your Board">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">GPA</label>
                                    <input value="<?php echo $r['sscGpa']?>" id="pname" name="sscGpa" type="text" class="form-control" placeholder="Enter Your GPA">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Passing Year</label>
                                    <input value="<?php echo $r['sscpassingYear']?>" id="pname" name="sscpassingYear" type="text" class="form-control" placeholder="Enter your passing year">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">SSC Certificate</label>
                                    <img src="img/upload/<?php echo $r['sscCertificate']?>" alt="" height="100">
                                    <input value="<?php echo $r['sscCertificate']?>" id="pname" name="sscCertificate" type="file" class="file-control">
                                </div>
                            </div>
                        </div>

                        <h4>HSC/A'Lavel record</h4>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Institute name</label>
                                    <input value="<?php echo $r['hscInstituteName']?>" id="pname" name="hscInstituteName" type="text" class="form-control" placeholder="Enter institute name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Board name</label>
                                    <input value="<?php echo $r['hscBordeName']?>" id="pname" name="hscBordeName" type="text" class="form-control" placeholder="Enter your Board">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">GPA</label>
                                    <input value="<?php echo $r['hscGpa']?>" id="pname" name="hscGpa" type="text" class="form-control" placeholder="Enter your GPA">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">Passing Year</label>
                                    <input value="<?php echo $r['hscpassingYear']?>" id="pname" name="hscpassingYear" type="text" class="form-control" placeholder="Enter your passing year">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pname">HSC Certificate</label>
                                    <img src="img/upload/<?php echo $r['hscCertificate']?>" alt="" height="100">
                                    <input value="<?php echo $r['hscCertificate']?>" id="pname" name="hscCertificate" type="file" class="file-control">
                                </div>
                            </div>

                        </div>
                        <input  class="btn btn-info float-right" type="submit" name="submittwo" value="submit" >

                      
            </form>
              <?php
                } }
                    $phcls=new phpclass();
                        if (isset($_POST['submittwo'])) {
                            $res=$phcls->editValue($_POST, $_FILES);
                        }
                    ?>
        </div>
    </div>
    <?php
    include_once("sfooter.php");
 ?>