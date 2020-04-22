<?php
    include_once("sheader.php");
   ?>
    <div class="inbox">
        <div class="info_box">

            <?php
                    $id=$_GET['vi'];
                    $phpcls=new phpclass();
                    $res=$phpcls->getStudentInfo($id);
                    if (isset($res)) {
                       while($value=$res->fetch_assoc()){

                ?>

                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <h2>Personal Information</h2>
                            <img class="img-thumbnail mb-1" src="../StudentAdmin/img/Upload/<?php echo $value['image']?>" width="200" alt="">
                            <p><b>Name: </b>
                                <?php echo $value['fname']." "; echo $value['lname']?>
                            </p>
                            <p><b>Date Of barth:</b>
                                <?php echo $value['dateOfbirth']?>
                            </p>
                            <p><b>Gender:</b>
                                <?php echo $value['gender']?>
                            </p>
                            <p><b>Natonality:</b>
                                <?php echo $value['nationality']?>
                            </p>
                            <p><b>Blood group:</b>
                                <?php echo $value['BloodGroup']?>
                            </p>
                            <p><b>Married status:</b>
                                <?php echo $value['married']?>
                            </p>
                            <p><b>Email:</b>
                                <?php echo $value['email']?>
                            </p>
                            <p><b>Phone:</b>
                                <?php echo $value['phone']?>
                            </p>
                            <p><b>Place of birth district:</b>
                                <?php echo $value['placeOfBirthDistrict']?>
                            </p>

                            <h2>Parents Information</h2>
                            <h5 class="text-center">Fathers Information</h5>
                            <p><b>Fathers Name:</b> A
                                <?php echo $value['fatherName']?>
                            </p>
                            <p><b>Occipation:</b>
                                <?php echo $value['fatherOccipation']?>
                            </p>
                            <p><b>Address:</b>
                                <?php echo $value['fatherAddress']?>
                            </p>
                            <p><b>Phone:</b>
                                <?php echo $value['fatherPhone']?>
                            </p>
                            <p><b>Email:</b>
                                <?php echo $value['fatherEmail']?>
                            </p>
                            <h5 class="text-center">Mothers Information</h5>
                            <p><b>Fathers Name:</b>
                                <?php echo $value['motherName']?>
                            </p>
                            <p><b>Occipation:</b>
                                <?php echo $value['motherOccipation']?>
                            </p>
                            <p><b>Address:</b>
                                <?php echo $value['motherAddress']?>
                            </p>
                            <p><b>Phone:</b>
                                <?php echo $value['motherPhone']?>
                            </p>
                            <p><b>Email:</b>
                                <?php echo $value['motherEmail']?>
                            </p>

                            <h2>SAT/TOFFEL/IELTS/GAMAT</h2>
                            <p>SAT Point:
                                <?php echo $value['sat']?>
                            </p>
                            <p>SAT Date:
                                <?php echo $value['satDate']?>
                            </p>
                            <p>TOFFEL Point:
                                <?php echo $value['tofel']?>
                            </p>
                            <p>TOFFEL Date:
                                <?php echo $value['tofelDate']?>
                            </p>
                            <p>IELTS Point:
                                <?php echo $value['ielts']?>
                            </p>
                            <p>IELTS Date:
                                <?php echo $value['ieltsDate']?>
                            </p>
                            <p>GAMAT Point:
                                <?php echo $value['gmat']?>
                            </p>
                            <p>GAMAT Date:
                                <?php echo $value['gmatDate']?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box2">
                            <h2>Address</h2>
                            <p><b>House:</b>
                                <?php echo $value['ParmanentAddress']?>
                            </p>
                            <p><b>City:</b>
                                <?php echo $value['ParmanentCity']?>
                            </p>
                            <p><b>Division:</b>
                                <?php echo $value['ParmanentDivision']?>
                            </p>
                            <p><b>District:</b>
                                <?php echo $value['ParmanentDistrict']?>
                            </p>
                            <p><b>zip code:</b>
                                <?php echo $value['ParmanentZipCode']?>
                            </p>

                            <h2>Name of local guardian</h2>
                            <p><b>Guardian Name:</b>
                                <?php echo $value['nameOfLocalGuardian']?>
                            </p>
                            <p><b>Relationship:</b>
                                <?php echo $value['relationshipOfLocalGuardian']?>
                            </p>
                            <p><b>Address:</b>
                                <?php echo $value['addressOfLocalGuardian']?>
                            </p>
                            <p><b>Phone:</b>
                                <?php echo $value['phoneOfLocalGuardian']?>
                            </p>
                            <p><b>Email:</b>
                                <?php echo $value['emailOfLocalGuardian']?>
                            </p>

                            <h2>Name of the person who will pay the fee</h2>
                            <p><b>Guardian Name:</b>
                                <?php echo $value['personPayTheFeeName']?>
                            </p>
                            <p><b>Relationship:</b>
                                <?php echo $value['personPayTheFeeRealtion']?>
                            </p>
                            <p><b>Annual Income:</b>
                                <?php echo $value['personPayTheFeeAnnualIncome']?>
                            </p>
                            <p><b>Address:</b>
                                <?php echo $value['personPayTheFeeAddress']?>
                            </p>
                            <p><b>Phone:</b>
                                <?php echo $value['personPayTheFeePhone']?>
                            </p>
                            <p><b>Email:</b>
                                <?php echo $value['personPayTheFeeEmail']?>
                            </p>

                            <h2>Academic information</h2>
                            <h5 class="text-center">SCC/O'Lavel record</h5>
                            <p>Institute name:
                                <?php echo $value['sscInstituteName']?>
                            </p>
                            <p>Board name:
                                <?php echo $value['sscBordeName']?>
                            </p>
                            <p>GPA:
                                <?php echo $value['sscGpa']?>
                            </p>
                            <p>Passing Year:
                                <?php echo $value['sscpassingYear']?>
                            </p>
                            <p>SSC Certificate:</p>
                            <img class="img-thumbnail mb-1" src="../StudentAdmin/img/upload/<?php echo $value['sscCertificate']?>" width="200" alt="">

                            <h5 class="text-center">HSC/A'Lavel record</h5>
                            <p>Institute name:
                                <?php echo $value['hscInstituteName']?>
                            </p>
                            <p>Board name:
                                <?php echo $value['hscBordeName']?>
                            </p>
                            <p>GPA:
                                <?php echo $value['hscGpa']?>
                            </p>
                            <p>Passing Year:
                                <?php echo $value['hscpassingYear']?>
                            </p>
                            <p>SSC Certificate:</p>
                            <img class="img-thumbnail mb-1" src="../StudentAdmin/img/upload/<?php echo $value['hscCertificate']?>" width="200" alt="">
                        </div>
                    </div>
                </div>

                <?php }}?>

                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <h6>This profile 100% complete</h6>
                        </div>
                        <div class="col-md-4 mt-3">
                            <a href="" class="btn btn-danger float-right">Reject</a>
                        </div>
                        <div class="col-md-4 mt-3">
                            <a href="apAnddlt.php?ap=<?php echo $r['student_id']?>" class="btn btn-success mykaj">Approve</a><br>
                        </div>
                    </div>
        </div>
    </div>
    <?php
    include_once("sfooter.php");
   ?>