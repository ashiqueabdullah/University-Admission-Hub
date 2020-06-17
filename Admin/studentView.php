<?php
    include_once("sheader.php");
?>
    
<div class="viewStudent">
    <div class="inner">
        <div class="row">
        <?php
            $id=$_GET['id'];
            $phpcls=new phpclass();
            $res=$phpcls->getAllStudentForView($id);
            if($res){
                while($value=$res->fetch_assoc()){ ?>

            <div class="col-md-6">
                <h5>Information About Ashique Abdullah</h5>
            </div>
            <div class="col-md-6">
                <a href="studentDeleteApprove.php?delete=<?php echo $value['std_one']?>" class="btn btn-danger float-right">Delete Student Profile</a>
                <a href="studentDeleteApprove.php?hold=<?php echo $value['std_one']?>" class="btn btn-warning mr-1 float-right">Hold Student Profile</a>
            </div>
        </div>
        <hr>
        <center><img class="img-thumbnail proimg" src="img/user.jpeg" alt=""></center>
        <div class="row">
            <div class="col-md-6">
                <h4>Personal Information</h4>
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

                            <h4>Parents Information</h4>
                            <h5 class="text-center">Fathers Information</h5>
                            <p><b>Fathers Name:</b> A<?php echo $value['fatherName']?></p>
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

                            <h4>SAT/TOFFEL/IELTS/GAMAT</h4>
                            <p>SAT Point: <?php echo $value['sat']?></p>
                            <p>SAT Date: <?php echo $value['satDate']?></p>
                            <p>TOFFEL Point: <?php echo $value['tofel']?></p>
                            <p>TOFFEL Date: <?php echo $value['tofelDate']?></p>
                            <p>IELTS Point: <?php echo $value['ielts']?></p>
                            <p>IELTS Date: <?php echo $value['ieltsDate']?></p>
                            <p>GAMAT Point: <?php echo $value['gmat']?></p>
                            <p>GAMAT Date: <?php echo $value['gmatDate']?></p>
            </div>
            <div class="col-md-6">
                <h4>Address</h4>
                            <p><b>House:</b> <?php echo $value['ParmanentAddress']?></p>
                            <p><b>City:</b> <?php echo $value['ParmanentCity']?></p>
                            <p><b>Division:</b> <?php echo $value['ParmanentDivision']?></p>
                            <p><b>District:</b> <?php echo $value['ParmanentDistrict']?></p>
                            <p><b>zip code:</b> <?php echo $value['ParmanentZipCode']?></p>
                            

                            <h4>Name of local guardian</h4>
                            <p><b>Guardian Name:</b> <?php echo $value['nameOfLocalGuardian']?></p>
                            <p><b>Relationship:</b> <?php echo $value['relationshipOfLocalGuardian']?></p>
                            <p><b>Address:</b> <?php echo $value['addressOfLocalGuardian']?></p>
                            <p><b>Phone:</b> <?php echo $value['phoneOfLocalGuardian']?></p>
                            <p><b>Email:</b> <?php echo $value['emailOfLocalGuardian']?></p>

                            <h4>Name of the person who will pay the fee</h4>
                            <p><b>Guardian Name:</b> <?php echo $value['personPayTheFeeName']?></p>
                            <p><b>Relationship:</b> <?php echo $value['personPayTheFeeRealtion']?></p>
                            <p><b>Annual Income:</b> <?php echo $value['personPayTheFeeAnnualIncome']?></p>
                            <p><b>Address:</b> <?php echo $value['personPayTheFeeAddress']?></p>
                            <p><b>Phone:</b> <?php echo $value['personPayTheFeePhone']?></p>
                            <p><b>Email:</b> <?php echo $value['personPayTheFeeEmail']?></p>

                            <h4>Academic information</h4>
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
                <?php }}?>
    </div>
</div>

<?php
    include_once("sfooter.php");
?>


