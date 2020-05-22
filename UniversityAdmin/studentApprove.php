<?php
    include_once("sheader.php");
	include_once"../php_function.php";
	
	$phpcls=new phpclass();
	$id=$_GET['id'];
	
	$res=$phpcls->getStudentInfoForaddmioosn($id);
	
	if(isset($res)){
		while($r=$res->fetch_assoc()){
			
	
	
   ?>
    <div class="inbox">
        <div class="info_box p-5">
            <h1 class="text-center">Student Information</h1>
            <div class="row">
                <div class="col-md-6">
                <h4>Personal Information</h4>
                <p class="mt-3"><b>Name: </b><?php echo $r['fname']." ".$r['lname']?></p>
                <p><b>Date of birth: </b><?php echo $r['dateOfbirth']?></p>
                <p><b>Gender: </b><?php  
					if($r['gender']==0){
						echo "Male";
					}else{
						echo "Female";
					}
				?></p>
                <p><b>Natonality: </b><?php echo $r['nationality']?></p>
                <p><b>Blood group: </b><?php echo $r['BloodGroup']?></p>
                <p><b>Married status: </b><?php echo $r['married']?></p>
                <p><b>Email: </b>a<?php echo $r['email']?></p>
                <p><b>Phone: </b><?php echo $r['phone']?></p>

                <h4>Address</h4>
                <h6 class="text-center">Present Address</h6>
                <p class="mt-3"><b>House: </b><?php echo $r['address']?></p>
                <p class="mt-3"><b>City: </b><?php echo $r['ParmanentCity']?></p>
                <p class="mt-3"><b>Division: </b><?php echo $r['ParmanentDivision']?></p>
                <p class="mt-3"><b>Zip Code: </b><?php echo $r['postCode']?></p>

                <h6 class="text-center">Parmanent Address</h6>
                <p class="mt-3"><b>House: </b><?php echo $r['ParmanentAddress']?></p>
                <p class="mt-3"><b>City: </b><?php echo $r['ParmanentCity']?></p>
                <p class="mt-3"><b>Division: </b><?php echo $r['ParmanentDivision']?></p>
                <p class="mt-3"><b>Zip Code: </b><?php echo $r['ParmanentZipCode']?></p>


                <h4>Parents Information</h4>
                <h6 class="text-center">Fathers information</h6>
                <p class="mt-3"><b>Name: </b><?php echo $r['fatherName']?></p>
                <p class="mt-3"><b>Occupation: </b><?php echo $r['fatherOccipation']?></p>
                <p class="mt-3"><b>Address: </b><?php echo $r['fatherAddress']?></p>
                <p class="mt-3"><b>Phone: </b><?php echo $r['fatherPhone']?></p>
                <p class="mt-3"><b>Email: </b><?php echo $r['fatherEmail']?></p>

                
                <h6 class="text-center">Mothers information</h6>
                <p class="mt-3"><b>Name: </b>A<?php echo $r['motherName']?></p>
                <p class="mt-3"><b>Occupation: </b><?php echo $r['motherOccipation']?></p>
                <p class="mt-3"><b>Address: </b><?php echo $r['motherAddress']?></p>
                <p class="mt-3"><b>Phone: </b><?php echo $r['motherPhone']?></p>
                <p class="mt-3"><b>Email: </b><?php echo $r['motherEmail']?></p>

                <h4>Name of local guardian</h4>
                <p class="mt-3"><b>Name: </b><?php echo $r['nameOfLocalGuardian']?></p>
                <p class="mt-3"><b>Relationship: </b><?php echo $r['relationshipOfLocalGuardian']?></p>
                <p class="mt-3"><b>Address: </b><?php echo $r['addressOfLocalGuardian']?></p>
                <p class="mt-3"><b>Phone: </b><?php echo $r['phoneOfLocalGuardian']?></p>
                <p class="mt-3"><b>Email: </b><?php echo $r['emailOfLocalGuardian']?></p>
                
            </div>
            <div class="col-md-6">
                <h4>Person to be notified is case of emergency</h4>
				<p class="mt-3"><b>Relationship: </b><?php echo $r['emergencyPersonName']?></p>
                <p class="mt-3"><b>Name: </b><?php echo $r['emergencyPersonRelationshipe']?></p>
                <p class="mt-3"><b>Address: </b><?php echo $r['emergencyPersonAddress']?></p>
                <p class="mt-3"><b>Phone: </b><?php echo $r['emergencyPersonPhone']?></p>
                <p class="mt-3"><b>Email: </b><?php echo $r['emergencyPersonEmail']?></p>
                

                <h4>Name of the person who will pay the fee</h4>
                <p class="mt-3"><b>Relationship: </b><?php echo $r['personPayTheFeeName']?></p>
                <p class="mt-3"><b>Name: </b><?php echo $r['personPayTheFeeRealtion']?></p>
                <p class="mt-3"><b>Address: </b><?php echo $r['personPayTheFeeAddress']?></p>
                <p class="mt-3"><b>Phone: </b><?php echo $r['personPayTheFeePhone']?></p>
                <p class="mt-3"><b>Email: </b><?php echo $r['personPayTheFeeEmail']?></p>
                <p class="mt-3"><b>Annual Income: </b><?php echo $r['personPayTheFeeAnnualIncome']?></p>
                
                <h4>SAT/TOFFEL/IELTS/GAMAT</h4>
                <p class="mt-3"><b>SAT: </b><?php echo $r['sat']?></p>
                <p class="mt-3"><b>TOFFEL: </b><?php echo $r['tofel']?></p>
                <p class="mt-3"><b>IELTS: </b><?php echo $r['ielts']?></p>
                <p class="mt-3"><b>GAMAT: </b><?php echo $r['gmat']?></p>

                <h4>SCC/O'Lavel record</h4>
                <p class="mt-3"><b>Institute name: </b><?php echo $r['sscInstituteName']?></p>
                <p class="mt-3"><b>Board name: </b><?php echo $r['sscBordeName']?></p>
                <p class="mt-3"><b>Division: </b><?php echo $r['sscBordeName']?></p>
                <p class="mt-3"><b>GPA: </b><?php echo $r['sscGpa']?></p>
                <p class="mt-3"><b>Passing Year: </b><?php echo $r['sscpassingYear']?></p>
                <p class="mt-3"><b>SSC Certificate: </b><img src="img/<?php echo $r['sscCertificate']?>" width="200" alt=""></p>

                
                <h4>HSC/A'Lavel record</h4>
                <p class="mt-3"><b>Institute name: </b><?php echo $r['hscInstituteName']?></p>
                <p class="mt-3"><b>Board name: </b><?php echo $r['hscBordeName']?></p>
                <p class="mt-3"><b>Division: </b><?php echo $r['hscBordeName']?></p>
                <p class="mt-3"><b>GPA: </b><?php echo $r['hscGpa']?></p>
                <p class="mt-3"><b>Passing Year: </b><?php echo $r['hscpassingYear']?></p>
                <p class="mt-3"><b>SSC Certificate: </b><img src="img/<?php echo $r['hscCertificate']?>" width="200" alt=""></p>

            </div>
            </div>
        </div>
    </div>
    <?php
	}}
    include_once("sfooter.php");
   ?>