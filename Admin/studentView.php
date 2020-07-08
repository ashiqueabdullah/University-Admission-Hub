<?php
    include_once("sheader.php");
?>
    
<div class="viewStudent">
    <div class="inner">
        <?php
            $id=$_GET['id'];
            $phpcls=new phpclass();
            $res=$phpcls->getAllStudentForView($id);
            if($res){
                while($value=$res->fetch_assoc()){ ?>

            <h5 class="mt-1 mb-1" class="text-center">Information About Ashique Abdullah</h5>
        <hr>
        <center><img class="img-thumbnail proimg" src="../StudentAdmin/img/Upload/<?php echo $value['image']?>" alt=""></center>
        <div class="row">
            <div class="col-md-6">
                <h4 class="mt-5">Personal Information</h4>
                            
                            <p class="mt-1">Name: <?php echo $value['fname']." "; echo $value['lname']?></p>
                            <p class="mt-1">Date Of barth: <?php echo $value['dateOfbirth']?></p>
                            <p class="mt-1">Gender: <?php echo $value['gender']?></p>
                            <p class="mt-1">Natonality: <?php echo $value['nationality']?></p>
                            <p class="mt-1">Blood group: <?php echo $value['BloodGroup']?></p>
                            <p class="mt-1">Married status: <?php echo $value['married']?></p>
                            <p class="mt-1">Email: <?php echo $value['email']?></p>
                            <p class="mt-1">Phone: <?php echo $value['phone']?></p>
                            <p class="mt-1">Place of birth district: <?php echo $value['placeOfBirthDistrict']?></p>

                            <h4 class="mt-5">Parents Information</h4>
                            <h5 class="text-center mt-1 mb-1">Fathers Information</h5>
                            <p class="mt-1">Fathers Name: A<?php echo $value['fatherName']?></p>
                            <p class="mt-1">Occipation: <?php echo $value['fatherOccipation']?></p>
                            <p class="mt-1">Address: <?php echo $value['fatherAddress']?></p>
                            <p class="mt-1">Phone: <?php echo $value['fatherPhone']?></p>
                            <p class="mt-1">Email: <?php echo $value['fatherEmail']?></p>
                            <h5 class="text-center mt-2 mb-2">Mothers Information</h5>
                            <p class="mt-1">Fathers Name: <?php echo $value['motherName']?></p>
                            <p class="mt-1">Occipation: <?php echo $value['motherOccipation']?></p>
                            <p class="mt-1">Address: <?php echo $value['motherAddress']?></p>
                            <p class="mt-1">Phone: <?php echo $value['motherPhone']?></p>
                            <p class="mt-1">Email: <?php echo $value['motherEmail']?></p>

                            <h4 class="mt-5">SAT/TOFFEL/IELTS/GAMAT</h4>
                            <p class="mt-1">SAT Point: <?php echo $value['sat']?></p>
                            <p class="mt-1">SAT Date: <?php echo $value['satDate']?></p>
                            <p class="mt-1">TOFFEL Point: <?php echo $value['tofel']?></p>
                            <p class="mt-1">TOFFEL Date: <?php echo $value['tofelDate']?></p>
                            <p class="mt-1">IELTS Point: <?php echo $value['ielts']?></p>
                            <p class="mt-1">IELTS Date: <?php echo $value['ieltsDate']?></p>
                            <p class="mt-1">GAMAT Point: <?php echo $value['gmat']?></p>
                            <p class="mt-1">GAMAT Date: <?php echo $value['gmatDate']?></p>
            </div>
            <div class="col-md-6">
                <h4 class="mt-5">Address</h4>
                            <p class="mt-1">House: <?php echo $value['ParmanentAddress']?></p>
                            <p class="mt-1">City: <?php echo $value['ParmanentCity']?></p>
                            <p class="mt-1">Division: <?php echo $value['ParmanentDivision']?></p>
                            <p class="mt-1">District: <?php echo $value['ParmanentDistrict']?></p>
                            <p class="mt-1">zip code: <?php echo $value['ParmanentZipCode']?></p>
                            

                            <h4 class="mt-5">Name of local guardian</h4>
                            <p class="mt-1">Guardian Name: <?php echo $value['nameOfLocalGuardian']?></p>
                            <p class="mt-1">Relationship: <?php echo $value['relationshipOfLocalGuardian']?></p>
                            <p class="mt-1">Address: <?php echo $value['addressOfLocalGuardian']?></p>
                            <p class="mt-1">Phone: <?php echo $value['phoneOfLocalGuardian']?></p>
                            <p class="mt-1">Email: <?php echo $value['emailOfLocalGuardian']?></p>

                            <h4 class="mt-5">Name of the person who will pay the fee</h4>
                            <p class="mt-1">Guardian Name: <?php echo $value['personPayTheFeeName']?></p>
                            <p class="mt-1">Relationship: <?php echo $value['personPayTheFeeRealtion']?></p>
                            <p class="mt-1">Annual Income: <?php echo $value['personPayTheFeeAnnualIncome']?></p>
                            <p class="mt-1">Address: <?php echo $value['personPayTheFeeAddress']?></p>
                            <p class="mt-1">Phone: <?php echo $value['personPayTheFeePhone']?></p>
                            <p class="mt-1">Email: <?php echo $value['personPayTheFeeEmail']?></p>

                            <h4 class="mt-5">Academic information</h4>
                            <h5 class="text-center mt-2 mb-2">SCC/O'Lavel record</h5>
                            <p class="mt-1">Institute name: <?php echo $value['sscInstituteName']?></p>
                            <p class="mt-1">SSC Roll: <?php echo $value['sscRoll']?></p>
                            <p class="mt-1">SSC Registation Number: <?php echo $value['sscRgNumber']?></p>
                            <p class="mt-1">Board name: <?php echo $value['sscBordeName']?></p>
                            <p class="mt-1">GPA: <?php echo $value['sscGpa']?></p>
                            <p class="mt-1">Passing Year: <?php echo $value['sscpassingYear']?></p>
                            <p class="mt-1">SSC Certificate:</p>
                            <img class="img-thumbnail mb-1" src="../StudentAdmin/img/upload/<?php echo $value['sscCertificate']?>" width="200" alt="">


                            <h5 class="text-center mt-2 mb-2">HSC/A'Lavel record</h5>
                            <p class="mt-1">Institute name: <?php echo $value['hscInstituteName']?></p>
                            <p class="mt-1">HSC Roll: <?php echo $value['hscRoll']?></p>
                            <p class="mt-1">HSC Registation Number: <?php echo $value['hscRgNumber']?></p>
                            <p class="mt-1">Board name: <?php echo $value['hscBordeName']?></p>
                            <p class="mt-1">GPA: <?php echo $value['hscGpa']?></p>
                            <p class="mt-1">Passing Year: <?php echo $value['hscpassingYear']?></p>
                            <p class="mt-1">SSC Certificate:</p>
                            <img class="img-thumbnail mb-1" src="../StudentAdmin/img/upload/<?php echo $value['hscCertificate']?>" width="200" alt="">
            </div>
        </div>
        <h5>Cheack Sudent information</h5><br>
    <iframe src="http://www.educationboardresults.gov.bd/" height="600" width="700" title="Iframe Example"></iframe>
    <?php }}?>
    
    </div>

</div>

<?php
    include_once("sfooter.php");
?>


