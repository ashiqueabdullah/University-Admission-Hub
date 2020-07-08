<?php
   include_once 'database.php';
   include_once 'session.php';
   
   
   /**
    * 
    */
   class phpclass
   {
   	private $db;
   	function __construct()
   	{
   		$this->db = new Database();
   	}
   
   	//Function start from Here
   	function RegistrationStudent($data){

         $sscroll=$data['sscroll'];
         $sscregis=$data['sscregis'];
         $hscroll=$data['hscroll'];
         $hscreg=$data['hscreg'];
         $sdate=$data['sdate'];
         $semail=$data['semail'];
         $sfname=$data['sfname'];
         $slname=$data['slname'];
   		$radio=$data['radio'];
   		$sphone=$data['sphone'];
   		$spass=$data['spass'];
   		
   		$studentTable="SELECT `email` FROM student_one WHERE email='$semail' LIMIT 1";
         $universityTable="SELECT `email` FROM `university` WHERE email='$semail' LIMIT 1";
         $modaratortable="SELECT `email` FROM modarator WHERE email='$semail' LIMIT 1";


         $StudentResult=$this->db->select($studentTable);
         $universityResult=$this->db->select($universityTable);
         $modaratorResult=$this->db->select($modaratortable);




         $sscRollchk="SELECT `sscRoll` FROM `student_one` WHERE `sscRoll`=$sscroll";
         $sscRegchk="SELECT `sscRgNumber` FROM `student_one` WHERE `sscRgNumber`=$sscregis";
         $hscRlsschk="SELECT `hscRoll` FROM `student_one` WHERE `hscRoll`=$hscroll";
         $hhscRlchk="SELECT `hscRgNumber` FROM `student_one` WHERE `hscRgNumber`=$hscreg";


         $sscRlckeres=$this->db->select($sscRollchk);
         $sscrgchekres=$this->db->select($sscRegchk);
         $hscRlchkres=$this->db->select($hscRlsschk);
         $hscrgres=$this->db->select($hhscRlchk);

   			
   		if ($sscRlckeres==true || $sscrgchekres==true || $hscRlchkres==true || $hscrgres==true) {
            //roll ager ache
            return 2;
         }else if ($StudentResult==true || $universityResult==true || $modaratorResult==true) {
   			//email ager ache
            return 10;
   		}else{
   
   				$query="INSERT INTO `student_one`(`fname`, `lname`, `dateOfbirth`, `gender`, `phone`, `sscRoll`, `sscRgNumber`, `email`, `pass`, `hscRoll`, `hscRgNumber`) 
   				VALUES ('$sfname','$slname','$sdate','$radio','$sphone','$sscroll','$sscregis','$semail','$spass','$hscroll','$hscreg')";
   
   				$getresult=$this->db->insert($query);

   				$query="SELECT studentId FROM student_one ORDER BY studentId DESC LIMIT 1";
   				$getresult=$this->db->select($query)->fetch_assoc();
   				$val=$getresult["studentId"];
   				$query="INSERT INTO `student_two` (`std_one`,`satuss`) VALUES ($val,0)";
   				$getresult=$this->db->insert($query);



              

               //for chat with student and admin
               $query="SELECT * FROM `university`";
               $query2="SELECT * FROM `modarator`";
               $uniinformation=$this->db->select($query);
               $admiModaAndAmdin=$this->db->select($query2);



               if ($uniinformation) {
                  
               while ($unidinfo=$uniinformation->fetch_assoc()) {
                  
                  $timess=date("h:m:sa");
                  $datess=date("Y-m-d");
                  $kassathe="university";
                  $name=$unidinfo['universityId'];
                  $amike="student";

                  $sql="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$kassathe','$name','$amike','$val','$datess','$timess')";

                  $sql2="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$amike','$val','$kassathe','$name','$datess','$timess')";

                  $getresult=$this->db->insert($sql);
                  $getresult=$this->db->insert($sql2);
                  
               }
            }



               if ($admiModaAndAmdin) {
                  
               while ($info=$admiModaAndAmdin->fetch_assoc()) {
                  
                  $timess=date("h:m:sa");
                  $datess=date("Y-m-d");

                  if($info['uniid']==NULL && $info['types']=="Admin"){
                     $kassathe="admin";
                  }else if($info['uniid']==NULL && $info['types']=="Modarator"){
                     $kassathe="adminModarator";
                  }else if($info['uniid']!=NULL && $info['types']=="Admin"){
                     $kassathe="adminUniversity";
                  }else if($info['uniid']!=NULL && $info['types']=="Modarator"){
                     $kassathe="universityModarator";
                  }
                  


                  $name=$info['morId'];
                  $amike="student";
                  

                  $sql="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$kassathe','$name','$amike','$val','$datess','$timess')";

                  $sql2="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$amike','$val','$kassathe','$name','$datess','$timess')";

                  $getresult=$this->db->insert($sql);
                  $getresult=$this->db->insert($sql2);
                  
               }
            }







            return 5;
   		}
   	}
   
   
   
   	function RegistrationStudentTwo($data,$file) {
   																						
   		$nationality=$data["nationality"];
   		$placeOfBirthDistrict=$data["placeOfBirthDistrict"];
   		$married=$data["married"];
   		$BloodGroup=$data["BloodGroup"];
   		$ParmanentAddress=$data["ParmanentAddress"];
   		$ParmanentDivision=$data["ParmanentDivision"];
   		$ParmanentZipCode=$data["ParmanentZipCode"];
   		$ParmanentDistrict=$data["ParmanentDistrict"];
   		$ParmanentCity=$data["ParmanentCity"];
   		$fatherName=$data["fatherName"];
   		$fatherOccipation=$data["fatherOccipation"];
   		$fatherAddress=$data["fatherAddress"];
   		$fatherPhone=$data["fatherPhone"];
   		$fatherEmail=$data["fatherEmail"];
   		$motherName=$data["motherName"];
   		$motherOccipation=$data["motherOccipation"];
   		$motherAddress=$data["motherAddress"];
   		$motherPhone=$data["motherPhone"];
   		$motherEmail=$data["motherEmail"];
   		$nameOfLocalGuardian=$data["nameOfLocalGuardian"];
   		$relationshipOfLocalGuardian=$data["relationshipOfLocalGuardian"];
   		$addressOfLocalGuardian=$data["addressOfLocalGuardian"];
   		$phoneOfLocalGuardian=$data["phoneOfLocalGuardian"];
   		$emailOfLocalGuardian=$data["emailOfLocalGuardian"];
   		$emergencyPersonRelationshipe=$data["emergencyPersonRelationshipe"];
   		$emergencyPersonName=$data["emergencyPersonName"];
   		$emergencyPersonAddress=$data["emergencyPersonAddress"];
   		$emergencyPersonPhone=$data["emergencyPersonPhone"];
   		$emergencyPersonEmail=$data["emergencyPersonEmail"];
   		$personPayTheFeeName=$data["personPayTheFeeName"];
   		$personPayTheFeeRealtion=$data["personPayTheFeeRealtion"];
   		$personPayTheFeeAddress=$data["personPayTheFeeAddress"];
   		$personPayTheFeePhone=$data["personPayTheFeePhone"];
   		$personPayTheFeeEmail=$data["personPayTheFeeEmail"];
   		$personPayTheFeeAnnualIncome=$data["personPayTheFeeAnnualIncome"];
   		$sat=$data["sat"];
   		$satDate=$data["satDate"];
   		$ielts=$data["ielts"];
   		$ieltsDate=$data["ieltsDate"];
   		$tofel=$data["tofel"];
   		$tofelDate=$data["tofelDate"];
   		$gmat=$data["gmat"];
   		$gmatDate=$data["gmatDate"];
   		$sscInstituteName=$data["sscInstituteName"];
   		$sscBordeName=$data["sscBordeName"];
   		$sscGpa=$data["sscGpa"];
   		$sscpassingYear=$data["sscpassingYear"];
   		$hscInstituteName=$data["hscInstituteName"];
   		$hscBordeName=$data["hscBordeName"];
   		$hscGpa=$data["hscGpa"];
   		$hscpassingYear=$data["hscpassingYear"];
   
   
   		$image2=$file['myimage']['name'];
         $filetemp=$file['myimage']['tmp_name'];
         move_uploaded_file($filetemp,"img/upload/".$image2);
   
         $sscCertificate2=$file['sscCertificate']['name'];
         $filetemp2=$file['sscCertificate']['tmp_name'];
         move_uploaded_file($filetemp2,"img/upload/".$sscCertificate2);
   
   
         $hscCertificate2=$file['hscCertificate']['name'];
         $filetemp3=$file['hscCertificate']['tmp_name'];
         move_uploaded_file($filetemp3,"img/upload/".$hscCertificate2);
   		
   
   
   		$sid=$_SESSION["sid"];
   		$query="UPDATE `student_two` SET 
   		`nationality`='$nationality',
   		`placeOfBirthDistrict`='$placeOfBirthDistrict',
   		`image`='$image2',
   		`married`='$married',
   		`BloodGroup`='$BloodGroup',
   		`ParmanentAddress`='$ParmanentAddress',
   		`ParmanentDivision`='$ParmanentDivision',
   		`ParmanentZipCode`='$ParmanentZipCode',
   		`ParmanentDistrict`='$ParmanentDistrict',
   		`ParmanentCity`='$ParmanentCity',
   		`fatherName`='$fatherName',
   		`fatherOccipation`='$fatherOccipation',
   		`fatherAddress`='$fatherAddress',
   		`fatherPhone`='$fatherPhone',
   		`fatherEmail`='$fatherEmail',
   		`motherName`='$motherName',
   		`motherOccipation`='$motherOccipation',
   		`motherAddress`='$motherAddress',
   		`motherPhone`='$motherPhone',
   		`motherEmail`='$motherEmail',
   		`nameOfLocalGuardian`='$nameOfLocalGuardian',
   		`relationshipOfLocalGuardian`='$relationshipOfLocalGuardian',
   		`addressOfLocalGuardian`='$addressOfLocalGuardian',
   		`phoneOfLocalGuardian`='$phoneOfLocalGuardian',
   		`emailOfLocalGuardian`='$emailOfLocalGuardian',
   		`emergencyPersonName`='$emergencyPersonName',
   		`emergencyPersonRelationshipe`='$emergencyPersonRelationshipe',
   		`emergencyPersonAddress`='$emergencyPersonAddress',
   		`emergencyPersonPhone`='$emergencyPersonPhone',
   		`emergencyPersonEmail`='$emergencyPersonEmail',
   		`personPayTheFeeName`='$personPayTheFeeName',
   		`personPayTheFeeRealtion`='$personPayTheFeeRealtion',
   		`personPayTheFeeAddress`='$personPayTheFeeAddress',
   		`personPayTheFeePhone`='$personPayTheFeePhone',
   		`personPayTheFeeEmail`='$personPayTheFeeEmail',
   		`personPayTheFeeAnnualIncome`='$personPayTheFeeAnnualIncome',
   		`sat`='$sat',
   		`satDate`='$satDate',
   		`ielts`='$ielts',
   		`ieltsDate`='$ieltsDate',
   		`tofel`='$tofel',
   		`tofelDate`='$tofelDate',
   		`gmat`='$gmat',
   		`gmatDate`='$gmatDate',
   		`sscInstituteName`='$sscInstituteName',
   		`sscBordeName`='$sscBordeName',
   		`sscGpa`='$sscGpa',
   		`sscpassingYear`='$sscpassingYear',
   		`sscCertificate`='$sscCertificate2',
   		`hscInstituteName`='$hscInstituteName',
   		`hscBordeName`='$hscBordeName',
   		`hscGpa`='$hscGpa',
   		`hscpassingYear`='$hscpassingYear',
   		`hscCertificate`='$hscCertificate2',
   		`satuss`=1
   		WHERE std_one=$sid";

   		$getresult=$this->db->insert($query);
         
   		echo "<script type='text/javascript'>
          window.open('profile.php','_self');
          </script>";
   	}
   
   		
   	function getInformation($id){
   		 $sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId and student_two.std_one=$id";
   		 $getresult=$this->db->select($sql);
   		 return $getresult;
   	}
   
   	function editValue($data,$file){
   		$nationality=$data["nationality"];
   		$placeOfBirthDistrict=$data["placeOfBirthDistrict"];
   		
   		$married=$data["married"];
   		$BloodGroup=$data["BloodGroup"];
   		$ParmanentAddress=$data["ParmanentAddress"];
   		$ParmanentDivision=$data["ParmanentDivision"];
   		$ParmanentZipCode=$data["ParmanentZipCode"];
   		$ParmanentDistrict=$data["ParmanentDistrict"];
   		$ParmanentCity=$data["ParmanentCity"];
   		$fatherName=$data["fatherName"];
   		$fatherOccipation=$data["fatherOccipation"];
   		$fatherAddress=$data["fatherAddress"];
   		$fatherPhone=$data["fatherPhone"];
   		$fatherEmail=$data["fatherEmail"];
   		$motherName=$data["motherName"];
   		$motherOccipation=$data["motherOccipation"];
   		$motherAddress=$data["motherAddress"];
   		$motherPhone=$data["motherPhone"];
   		$motherEmail=$data["motherEmail"];
   		$nameOfLocalGuardian=$data["nameOfLocalGuardian"];
   		$relationshipOfLocalGuardian=$data["relationshipOfLocalGuardian"];
   		$addressOfLocalGuardian=$data["addressOfLocalGuardian"];
   		$phoneOfLocalGuardian=$data["phoneOfLocalGuardian"];
   		$emailOfLocalGuardian=$data["emailOfLocalGuardian"];
   		$emergencyPersonRelationshipe=$data["emergencyPersonRelationshipe"];
   		$emergencyPersonName=$data["emergencyPersonName"];
   		$emergencyPersonAddress=$data["emergencyPersonAddress"];
   		$emergencyPersonPhone=$data["emergencyPersonPhone"];
   		$emergencyPersonEmail=$data["emergencyPersonEmail"];
   		$personPayTheFeeName=$data["personPayTheFeeName"];
   		$personPayTheFeeRealtion=$data["personPayTheFeeRealtion"];
   		$personPayTheFeeAddress=$data["personPayTheFeeAddress"];
   		$personPayTheFeePhone=$data["personPayTheFeePhone"];
   		$personPayTheFeeEmail=$data["personPayTheFeeEmail"];
   		$personPayTheFeeAnnualIncome=$data["personPayTheFeeAnnualIncome"];
   		$sat=$data["sat"];
   		$satDate=$data["satDate"];
   		$ielts=$data["ielts"];
   		$ieltsDate=$data["ieltsDate"];
   		$tofel=$data["tofel"];
   		$tofelDate=$data["tofelDate"];
   		$gmat=$data["gmat"];
   		$gmatDate=$data["gmatDate"];
   		$sscInstituteName=$data["sscInstituteName"];
   		$sscBordeName=$data["sscBordeName"];
   		$sscGpa=$data["sscGpa"];
   		$sscpassingYear=$data["sscpassingYear"];
   		$hscInstituteName=$data["hscInstituteName"];
   		$hscBordeName=$data["hscBordeName"];
   		$hscGpa=$data["hscGpa"];
   		$hscpassingYear=$data["hscpassingYear"];
   
   
   		$image=$file['myimage']['name'];
   		$filetemp=$file['myimage']['tmp_name'];
   		move_uploaded_file($filetemp,"img/upload/".$image);
   
   		$sscCertificate=$file['sscCertificate']['name'];
   		$filetemp2=$file['sscCertificate']['tmp_name'];
   		move_uploaded_file($filetemp2,"img/upload/".$sscCertificate);
   
   
   		$hscCertificate=$file['hscCertificate']['name'];
   		$filetemp3=$file['hscCertificate']['tmp_name'];
   		move_uploaded_file($filetemp3,"img/upload/".$hscCertificate);


         $iddds=$_SESSION['sid'];
         $sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId and
         student_two.std_one=$iddds limit 1";
         $naivalue=$this->db->select($sql);

         while($r=$naivalue->fetch_assoc()){
            $miimage=$r['image'];
            $hsc=$r['hscCertificate'];
            $ssc=$r['sscCertificate'];
         }

         if(empty($image)){
            $image=$miimage;
         }

         if(empty($hscCertificate)){
            $hscCertificate=$hsc;
         }
         
         if(empty($sscCertificate)){
            $sscCertificate=$ssc;
         }



   
   
   		$sid=$_SESSION["sid"];
   		$query="UPDATE `student_two` SET 
   		`nationality`='$nationality',
   		`placeOfBirthDistrict`='$placeOfBirthDistrict',
   		`image`='$image',
   		`married`='$married',
   		`BloodGroup`='$BloodGroup',
   		`ParmanentAddress`='$ParmanentAddress',
   		`ParmanentDivision`='$ParmanentDivision',
   		`ParmanentZipCode`='$ParmanentZipCode',
   		`ParmanentDistrict`='$ParmanentDistrict',
   		`ParmanentCity`='$ParmanentCity',
   		`fatherName`='$fatherName',
   		`fatherOccipation`='$fatherOccipation',
   		`fatherAddress`='$fatherAddress',
   		`fatherPhone`='$fatherPhone',
   		`fatherEmail`='$fatherEmail',
   		`motherName`='$motherName',
   		`motherOccipation`='$motherOccipation',
   		`motherAddress`='$motherAddress',
   		`motherPhone`='$motherPhone',
   		`motherEmail`='$motherEmail',
   		`nameOfLocalGuardian`='$nameOfLocalGuardian',
   		`relationshipOfLocalGuardian`='$relationshipOfLocalGuardian',
   		`addressOfLocalGuardian`='$addressOfLocalGuardian',
   		`phoneOfLocalGuardian`='$phoneOfLocalGuardian',
   		`emailOfLocalGuardian`='$emailOfLocalGuardian',
   		`emergencyPersonName`='$emergencyPersonName',
   		`emergencyPersonRelationshipe`='$emergencyPersonRelationshipe',
   		`emergencyPersonAddress`='$emergencyPersonAddress',
   		`emergencyPersonPhone`='$emergencyPersonPhone',
   		`emergencyPersonEmail`='$emergencyPersonEmail',
   		`personPayTheFeeName`='$personPayTheFeeName',
   		`personPayTheFeeRealtion`='$personPayTheFeeRealtion',
   		`personPayTheFeeAddress`='$personPayTheFeeAddress',
   		`personPayTheFeePhone`='$personPayTheFeePhone',
   		`personPayTheFeeEmail`='$personPayTheFeeEmail',
   		`personPayTheFeeAnnualIncome`='$personPayTheFeeAnnualIncome',
   		`sat`='$sat',
   		`satDate`='$satDate',
   		`ielts`='$ielts',
   		`ieltsDate`='$ieltsDate',
   		`tofel`='$tofel',
   		`tofelDate`='$tofelDate',
   		`gmat`='$gmat',
   		`gmatDate`='$gmatDate',
   		`sscInstituteName`='$sscInstituteName',
   		`sscBordeName`='$sscBordeName',
   		`sscGpa`='$sscGpa',
   		`sscpassingYear`='$sscpassingYear',
   		`sscCertificate`='$sscCertificate',
   		`hscInstituteName`='$hscInstituteName',
   		`hscBordeName`='$hscBordeName',
   		`hscGpa`='$hscGpa',
   		`hscpassingYear`='$hscpassingYear',
   		`hscCertificate`='$hscCertificate'
   		WHERE std_one=$sid";
   		$getresult=$this->db->insert($query);
   	}
   	function getStatus($id){
   		$query="SELECT * FROM `student_two` WHERE std_one=$id";
   		$getresult=$this->db->select($query);
   		return $getresult;
   	}
   
   	function addNoticeUni($data){
   		$title=$data['title'];
   		$file=$data['file'];
   		$msz=$data['msz'];
   		$autId=$_SESSION['uid'];
   		$date=date("d/m/y");
   		$time=date("h:m:s");
   		$status=2;
   		$sql="INSERT INTO `notice`(`noticeTitle`, `noticeMessage`, `file`, `author`, `dates`, `times`, `statuss`) VALUES ('$title','$msz','$file','$autId','$date','$time','$status')";
   		$getresult=$this->db->insert($sql);
   	}
   
   	
   	function getNotice2(){
   		$sql="SELECT * FROM `notice` limit 2";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   
   	function noticeSearch($search){
   		$sql="SELECT * FROM `notice` WHERE `whoAdd`=1 AND `noticeTitle` LIKE '%$search%'";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   
   	function modaratorSearch($search){
   		$id=$_SESSION['uid'];
   		$sql="SELECT * FROM `modarator` WHERE uniid=$id AND `name` LIKE '%$search%'";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   
   	function getNoticeForUni(){
   		$sql="SELECT * FROM `notice` WHERE `statuss`=1";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   	function getNoticeCreateUni(){
   		$sql="SELECT * FROM `notice`  limit 2";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   	function getUniversity(){
   		$sql="SELECT * FROM `university` ";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   	
   	function getuniversityInfoForprospectus($id){
   		$sql="SELECT * FROM `university` WHERE universityId =$id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   	
   	function unitinformationFroProspectus($id){
   		$sql="SELECT * FROM `unit` WHERE universityId =$id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   	function addModarator($data,$file){
   		$name=$data['modaname'];
   		$modaemail=$data['modaemail'];
   		$modapass=$data['modapass'];
   		$modaphone=$data['modaphone'];
   		$modatype=$data['modatype'];
   		$address=$data['address'];
   		$city=$data['city'];
   		$zip=$data['zip'];
         $mdtp=$data['modatype'];
   		$adminId=$_SESSION['admid'];
   		
   
   		$modaimg=$file['modaimg']['name'];
   		$filetemp=$file['modaimg']['tmp_name'];
   		move_uploaded_file($filetemp,"img/upload/".$modaimg);

		   $status=1;
		   



		   $studentTable="SELECT `email` FROM student_one WHERE email='$modaemail' LIMIT 1";
         $universityTable="SELECT `email` FROM `university` WHERE email='$modaemail' LIMIT 1";
         $modaratortable="SELECT `email` FROM modarator WHERE email='$modaemail' LIMIT 1";



         $StudentResult=$this->db->select($studentTable);
         $universityResult=$this->db->select($universityTable);
         $modaResult=$this->db->select($modaratortable);

         if($StudentResult || $universityResult || $modaResult){
            return 10;
         }else{
            $sql="INSERT INTO `modarator`
         (`name`,  `adress`, `email`, `pass`,  `img`,  `status`, `phone`, `types`, `city`, `zip`, `adminId`) VALUES 
         ('$name','$address','$modaemail','$modapass','$modaimg','$status','$modaphone','$mdtp','$city','$zip','$adminId')";
         $getresult=$this->db->insert($sql);




         //for chat with student and admin
         $sql="SELECT * FROM `modarator` WHERE `uniid` IS NULL ORDER BY `morId` DESC LIMIT 1";
         $amarId=$this->db->select($sql)->fetch_assoc();
         $val=$amarId['morId'];



               
               $query="SELECT * FROM `student_one`";
               $query2="SELECT * FROM `modarator`";
               $query3="SELECT * FROM `university`";
               $stdinformation=$this->db->select($query);
               $admiModaAndAmdin=$this->db->select($query2);
               $university=$this->db->select($query3);



               if ($university) {
                  
               while ($uni=$university->fetch_assoc()) {
                  
                  $timess=date("h:m:sa");
                  $datess=date("Y-m-d");
                  $kassathe="university";
                  $name=$uni['universityId'];


                  if($amarId['uniid']==NULL && $amarId['types']=="Admin"){
                     $amike="admin";
                  }else if($amarId['uniid']==NULL && $amarId['types']=="Modarator"){
                     $amike="adminModarator";
                  }



                  $sql="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$kassathe','$name','$amike','$val','$datess','$timess')";

                  $sql2="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$amike','$val','$kassathe','$name','$datess','$timess')";

                  $getresult=$this->db->insert($sql);
                  $getresult=$this->db->insert($sql2);
                  
               }
            }



               if ($stdinformation) {
                  
               while ($stdinfo=$stdinformation->fetch_assoc()) {
                  
                  $timess=date("h:m:sa");
                  $datess=date("Y-m-d");
                  $kassathe="student";
                  $name=$stdinfo['studentId'];

                  if($amarId['uniid']==NULL && $amarId['types']=="Admin"){
                     $amike="admin";
                  }else if($amarId['uniid']==NULL && $amarId['types']=="Modarator"){
                     $amike="adminModarator";
                  }


   




                  $sql="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$kassathe','$name','$amike','$val','$datess','$timess')";

                  $sql2="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$amike','$val','$kassathe','$name','$datess','$timess')";

                  $getresult=$this->db->insert($sql);
                  $getresult=$this->db->insert($sql2);
                  
               }
            }



               


         return 5;
         }

   		
   	}
   
   
   
   	function addModaratorFormUniversity($data,$file){
   		$name=$data['modaname'];
   		$modaemail=$data['modaemail'];
   		$modapass=$data['modapass'];
   		$modaphone=$data['modaphone'];
   		$modatype=$data['modatype'];
   		$address=$data['address'];
   		$city=$data['city'];
   		$zip=$data['zip'];
         $mdtp=$data['modatype'];
   		$uid=$_SESSION['uid'];
   		$status=0;
   
   		$modaimg=$file['modaimg']['name'];
   		$filetemp=$file['modaimg']['tmp_name'];

         $studentTable="SELECT `email` FROM student_one WHERE email='$modaemail' LIMIT 1";
         $universityTable="SELECT `email` FROM `university` WHERE email='$modaemail' LIMIT 1";
         $modaratortable="SELECT `email` FROM modarator WHERE email='$modaemail' LIMIT 1";



         $StudentResult=$this->db->select($studentTable);
         $universityResult=$this->db->select($universityTable);
         $modaResult=$this->db->select($modaratortable);

         if($StudentResult || $universityResult || $modaResult){
            return 10;
         }else{
            
         move_uploaded_file($filetemp,"img/upload/".$modaimg);
   
         $sql="INSERT INTO `modarator`(`name`,  `adress`, `email`, `pass`,  `img`,  `status`, `phone`, `types`, `city`, `zip`, `uniid`) VALUES ('$name','$address','$modaemail','$modapass','$modaimg','$status','$modaphone','$mdtp','$city','$zip','$uid')";
         $getresult=$this->db->insert($sql);









         //for chat with student and admin
         $sql="SELECT * FROM `modarator` WHERE `uniid` IS NOT NULL ORDER BY `morId` DESC LIMIT 1";
         $amarId=$this->db->select($sql)->fetch_assoc();
         $val=$amarId['morId'];



               
               $query="SELECT * FROM `student_one`";
               $query2="SELECT * FROM `modarator`";
               $query3="SELECT * FROM `university`";
               $stdinformation=$this->db->select($query);
               $admiModaAndAmdin=$this->db->select($query2);
               $university=$this->db->select($query3);



             






               if ($stdinformation) {
                  
               while ($stdinfo=$stdinformation->fetch_assoc()) {
                  
                  $timess=date("h:m:sa");
                  $datess=date("Y-m-d");
                  $kassathe="student";
                  $name=$stdinfo['studentId'];


                  if($amarId['uniid']!=NULL && $amarId['types']=="Admin"){
                     $amike="universityAdmin";
                  }else if($amarId['uniid']!=NULL && $amarId['types']=="Modarator"){
                     $amike="universityModarator";
                  }



                  $sql="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$kassathe','$name','$amike','$val','$datess','$timess')";

                  $sql2="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$amike','$val','$kassathe','$name','$datess','$timess')";

                  $getresult=$this->db->insert($sql);
                  $getresult=$this->db->insert($sql2);
                  
               }
            }



               if ($admiModaAndAmdin) {
                  
               while ($info=$admiModaAndAmdin->fetch_assoc()) {
                  
                  $timess=date("h:m:sa");
                  $datess=date("Y-m-d");

                  if($info['uniid']==NULL && $info['types']=="Admin"){
                     $kassathe="admin";
                  }else if($info['uniid']==NULL && $info['types']=="Modarator"){
                     $kassathe="adminModarator";
                  }else if($info['uniid']!=NULL && $info['types']=="Admin" && $val!=$info['uniid']){
                     $kassathe="universityAdmin";
                  }else if($info['uniid']!=NULL && $info['types']=="Modarator" && $val!=$info['uniid']){
                     $kassathe="universityModarator";
                  }
                  

                  if($val!=$info['uniid']){

                  $name=$info['morId'];

                  if($info['uniid']!=NULL && $info['types']=="Admin"){
                     $amike="universityAdmin";
                  }else if($info['uniid']!=NULL && $info['types']=="Modarator"){
                     $amike="universityModarator";
                  }
                  

                  $sql="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$kassathe','$name','$amike','$val','$datess','$timess')";


                  $sql2="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$amike','$val','$kassathe','$name','$datess','$timess')";

                  $getresult=$this->db->insert($sql);
                  $getresult=$this->db->insert($sql2);
               }
                  
               }
            }







   
         return 5;
         }
   	}
   
   
   	function getModaratorInfo2($limit,$offset){
		$id=$_SESSION['admid'];
   		$sql="SELECT * FROM `modarator` WHERE `adminId`=$id ORDER BY morId DESC limit $limit,$offset ";
   		$getresult=$this->db->select($sql);
   
   		$sqls="select count(`morId`) FROM modarator WHERE `adminId`=$id";
   
   		$gcou=$this->db->select($sqls);		
   		return array($getresult,$gcou);
	   }
	   


	   function getModaratorInfo($limit,$offset){
		$sql="SELECT * FROM `modarator` WHERE `status`=0 AND `uniid` IS NOT NULL limit $limit,$offset";
		$getresult=$this->db->select($sql);

		$sqls="select count(`morId`) FROM modarator WHERE `status`=0 AND `adminId` IS NOT NULL";

		$gcou=$this->db->select($sqls);		
		return array($getresult,$gcou);
	}


   function getModaratorInfo3($limit,$offset){
      $sql="SELECT * FROM `modarator` WHERE `status`=1 AND `uniid` IS NOT NULL limit $limit,$offset";
      $getresult=$this->db->select($sql);

      $sqls="select count(`morId`) FROM modarator WHERE `status`=1 AND `adminId` IS NOT NULL";

      $gcou=$this->db->select($sqls);     
      return array($getresult,$gcou);
   }
   
   
   	function getModaratorInfoForUniversity($limit,$offset){
   		$id=$_SESSION['uid'];
   		$sql="SELECT * FROM `modarator` WHERE `uniid`=$id  limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   
   		$sqls="select count(`morId`) FROM modarator WHERE `uniid`=$id";
   
   		$gcou=$this->db->select($sqls);		
   		return array($getresult,$gcou);
   	}
   
   
   	function getApproveModaratorInfoForUniversity($limit,$offset){
   		$id=$_SESSION['uid'];
   		$sql="SELECT * FROM `modarator` WHERE `uniid`=$id AND (`status`=1 OR `status`=2)  limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   
   		$sqls="select count(`morId`) FROM modarator WHERE `uniid`=$id AND `status`=1";
   
   		$gcou=$this->db->select($sqls);		
   		return array($getresult,$gcou);
   	}
   	
   
   	function getModarator($id){
   		$sql="SELECT * FROM `modarator` WHERE  `morId`=$id";
   		$getresult=$this->db->select($sql);		
   		return $getresult;
   	}
   
   
   	function ModaAprove($id){
   		$sql="UPDATE `modarator` SET `status`=1 WHERE `morId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:modarator.php");
   		return $getresult;
   	}
   
   
   	function Modaactive($id){
   		$sql="UPDATE `modarator` SET `status`=1 WHERE `morId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:modarator.php");
   		return $getresult;
   	}
   
   	function Modadeactive($id){
   		$sql="UPDATE `modarator` SET `status`=2 WHERE `morId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:modarator.php");
   		return $getresult;
   	}
   
   
   	function editModarator($data,$file,$id){
   		$name=$data['modaname'];
   		$modaemail=$data['modaemail'];
   		$modapass=$data['modapass'];
   		$modaphone=$data['modaphone'];
   		$mdtp=$data['modatype'];
   		$address=$data['address'];
   		$city=$data['city'];
   		$zip=$data['zip'];
   		
   
   		$modaimg=$file['modaimg']['name'];
   		$filetemp=$file['modaimg']['tmp_name'];
   		move_uploaded_file($filetemp,"img/upload/".$modaimg);
   
   		if(empty($modaimg)){
            $sql="UPDATE `modarator` SET 
         `name`='$name', 
         `email`='$modaemail', 
         `pass`='$modapass', 
         `phone`='$modaphone', 
         `adress`='$address', 
         `types`='$mdtp', 
         `city`='$city', 
         `zip`='$zip'
         WHERE morId=$id";
         $getresult=$this->db->insert($sql);
        
         echo "<script type='text/javascript'>
          window.open('modarator.php','_self');
          </script>";

         }else{
   
   		$sql="UPDATE `modarator` SET 
   		`name`='$name', 
   		`email`='$modaemail', 
   		`pass`='$modapass', 
   		`phone`='$modaphone', 
   		`adress`='$address', 
   		`types`='$mdtp', 
   		`city`='$city', 
   		`zip`='$zip', 
   		`img`='$modaimg'
   		WHERE morId=$id";
   		$getresult=$this->db->insert($sql);
        
         echo "<script type='text/javascript'>
          window.open('modarator.php','_self');
          </script>";

         }
   
   	}
   
   
   
   	function editModaratorForUniversity($data,$file,$id){
   		$name=$data['modaname'];
   		$modaemail=$data['modaemail'];
   		$modapass=$data['modapass'];
   		$modaphone=$data['modaphone'];
   		$mdtp=$data['modatype'];
   		$address=$data['address'];
   		$city=$data['city'];
   		$zip=$data['zip'];
   		
   
   		$modaimg=$file['modaimgg']['name'];
   		$filetemp=$file['modaimgg']['tmp_name'];


         if (empty($modaimg)) {
            $sql="UPDATE `modarator` SET 
            `name`='$name', 
            `email`='$modaemail', 
            `pass`='$modapass', 
            `phone`='$modaphone', 
            `adress`='$address', 
            `types`='$mdtp', 
            `city`='$city', 
            `status`=0,
            `zip`='$zip'
            WHERE morId=$id";
            $getresult=$this->db->insert($sql);
            header("Location:modarator.php");
         }else{
            move_uploaded_file($filetemp,"img/upload/".$modaimg);
            $sql="UPDATE `modarator` SET 
            `name`='$name', 
            `email`='$modaemail', 
            `pass`='$modapass', 
            `phone`='$modaphone', 
            `adress`='$address', 
            `types`='$mdtp', 
            `city`='$city', 
            `zip`='$zip',
            `status`=0, 
            `img`='$modaimg'
            WHERE morId=$id";
            $getresult=$this->db->insert($sql);
            hheader("Location:modarator.php");
         }
   	}
   
   
   	function ModaDlt($id){
   		$sql="DELETE FROM `modarator` WHERE `morId`=$id";
   		$getresult=$this->db->delete($sql);
   		header("Location:modarator.php");
   		return $getresult;
   	}
   
   
   	function addPost($data,$file){
   		$title=$data['title'];
   		$whome=$data['whome'];
   		$description=$data['description']; 
   
   		$dates=date("Y/m/d");
   		$time=date("h:i:sa");
   
   		$whoAdd="Admin";
   		$statuss=1;
   		$authors=$_SESSION['admid'];
   		
   
   		$filess=$file['files']['name'];
   		$filetemp=$file['files']['tmp_name'];
   		move_uploaded_file($filetemp,"img/upload/".$filess);
   
   
   
   		$sql="INSERT INTO `notice`(`noticeTitle`, `noticeMessage`, `file`, `author`, `dates`,`times`,  `statuss`, `whome`,`whoAdd`) VALUES ('$title','$description','$filess','$authors','$dates','$time','$statuss','$whome','$whoAdd')";
   
   		$getresult=$this->db->insert($sql);
   
   	}
   
   
   	function AddNoticeByUniversity($data,$file){
   		$title=$data['title'];
   		$whome=$data['whome'];
   		$description=$data['description']; 
   
   		$dates=date("Y/m/d");
   		$time=date("h:i:sa");
   
   		$whoAdd="University";
   		$statuss=0;
   		$authors=$_SESSION['uid'];
   
   		
   		$filess=$file['files']['name'];
   		$filetemp=$file['files']['tmp_name'];
   		move_uploaded_file($filetemp,"img/upload/".$filess);
   
   		$sql="INSERT INTO `notice`(`noticeTitle`, `noticeMessage`, `file`, `author`, `dates`,`times`,  `statuss`, `whome`,`whoAdd` ) VALUES ('$title','$description','$filess','$authors','$dates','$time','$statuss','$whome','$whoAdd' )";
   
   		$getresult=$this->db->insert($sql);
   
   	}
   
   
   	function noticeEdit($data,$file,$id){
   
   		$title=$data['title'];
   		$whome=$data['whome'];
   		$description=$data['description']; 
   
   		$dates=date("Y/m/d");
   		$time=date("h:i:sa");
   
   		$whoAdd=1;
   		$statuss=0;
   		$authors=$_SESSION['uid'];
   
   		
   		$filess=$file['files']['name'];
   		
   
   
   		if(!empty($filess)){
   			$filetemp=$file['files']['tmp_name'];
   			move_uploaded_file($filetemp,"img/upload/".$filess);
   
   			$sql="UPDATE `notice` SET `noticeTitle`='$title',
   			`noticeMessage`='$description',
   			`file`='$filess',
   			`author`='$authors',
   			`dates`='$dates',
   			`times`='$time',
   			`statuss`='$statuss',
   			`whome`='$whome',
   			`whoAdd`='$whoAdd'
   			WHERE `noticeId`= $id";
   		}else{
   			$sql="UPDATE `notice` SET `noticeTitle`='$title',
   			`noticeMessage`='$description',
   			`author`='$authors',
   			`dates`='$dates',
   			`times`='$time',
   			`statuss`='$statuss',
   			`whome`='$whome',
   			`whoAdd`='$whoAdd'
   			WHERE `noticeId`= $id";
   		}
   		$getresult=$this->db->update($sql);
   
   	}
   
   	function deleteNotice($id){
   		$sql="DELETE FROM `notice` WHERE `noticeId`= $id";
   		$getresult=$this->db->delete($sql);
   		header("Location:notice.php");
   		return $getresult;
   	}
   
   
   	function noticeForStudent($limit,$offset){
   		$sql="SELECT * FROM `notice`  WHERE `whome`='Student' OR `whome`='Both'  limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   
   		$sqls="select count(`noticeId`) FROM notice  WHERE `whome`='Student' OR `whome`='Both'";
   
   		$gcou=$this->db->select($sqls);		
   		return array($getresult,$gcou);
   	}
   
   	function noticeForUniversity($limit,$offset){
   		$sql="SELECT * FROM `notice`  WHERE `whome`='Both' OR `whome`='University'  limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   
   		$sqls="select count(`noticeId`) FROM notice  WHERE `whome`='Both' OR `whome`='University'";
   
   		$gcou=$this->db->select($sqls);		
   		return array($getresult,$gcou);
   	}
   
   	function noticeAllReadyApprove($limit,$offset){
   		$sql="SELECT * FROM `notice`  WHERE `statuss`=1 AND `whoAdd`='University'  limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   
   		$sqls="select count(`noticeId`) FROM notice  WHERE `statuss`=1 AND `whoAdd`='University'";
   
   		$gcou=$this->db->select($sqls);		
   		return array($getresult,$gcou);
   	}
   
   
   	function noticeWantApprove($limit,$offset){
   		$sql="SELECT * FROM `notice` WHERE `statuss`=0 AND `whoAdd`='University'  limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   
   		$sqls="select count(`noticeId`) FROM notice  WHERE `statuss`=0 AND `whoAdd`='University'";
   
   		$gcou=$this->db->select($sqls);		
   		return array($getresult,$gcou);
   	}
   
   
   
   
   	function noticeReject($id){
   		$sql="UPDATE `notice` SET `statuss`=2  WHERE `noticeId` =$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:notice.php");
   		return $getresult;
   	}
   
   
   	function NoticeApprove($id){
   		$sql="UPDATE `notice` SET `statuss`=1  WHERE `noticeId` =$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:notice.php");
   		return $getresult;
   	}
   
   	function getNotice($limit,$offset){
   		$id=$_SESSION['uid'];
   		$sql="SELECT * FROM `notice` where `noticeId`=$id limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   
   		$sqls="select count(`noticeId`) FROM notice  WHERE `noticeId`=$id";
   
   		$gcou=$this->db->select($sqls);	
   		return $getresult;
	   }
	   
	   function getnoticeforhomepage(){
		$sql="SELECT * FROM `notice` WHERE `statuss`=1 AND `whome`<>2 LIMIT 5";
		$getresult=$this->db->select($sql);	
   		return $getresult;
	   }

	   function getappliedinfo($id){
		$sqls="select count(`addmissonId`) FROM addmisson  WHERE `studentId`=$id";
		$getresult=$this->db->select($sqls);	
		return $getresult;
	   }
   
   
   	function getNoticeInformationAdminPanale($id){
   		$sql="SELECT * FROM `notice` where `noticeId`=$id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   
   	function getNoticeInformationUniversityPannel($limit,$offset){
   		$id=$_SESSION['uid'];
   		$sql="SELECT * FROM `notice` where `author`=$id limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   
   		$sqls="select count(`noticeId`) FROM notice  WHERE `author`=$id";
   
   		$gcou=$this->db->select($sqls);	
   
   		return array($getresult,$gcou);
   	}
   	
   	
   	
   	function getNoticeForStudent($limit,$offset){
   		
   		$sql="SELECT * FROM `notice` WHERE `whome`<>2 AND `statuss`=1 limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   
   		$sqls="select count(`noticeId`) FROM notice WHERE `whome`<>2 AND `statuss`=1";
   
   		$gcou=$this->db->select($sqls);	
   
   		return array($getresult,$gcou);
   	}
   			 
   	function shownoticestudentview($id){
   		$sql="SELECT * FROM `notice` WHERE `noticeId` =$id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   
   	function noticedelete($id){
   		$sql="DELETE FROM `notice` WHERE  `noticeId` =$id";
   		$getresult=$this->db->delete($sql);
   		header("Location:notice.php");
   		return $getresult;
   	}
   
   	function editNotice($data,$file,$id){
   		$title=$data['title'];
   		$whome=$data['whome'];
   		$description=$data['description'];
   		$dates=date("Y/m/d");
   		$time=date("h:i:sa");
   		$authors=$_SESSION['admid'];
   
   		$filess=$file['files']['name'];
   		$filetemp=$file['files']['tmp_name'];
   		move_uploaded_file($filetemp,"img/upload/".$filess);
   
   		if (empty($filess)) {
   		$sql="UPDATE `notice` SET 
   		`noticeTitle`='$title', 
   		`whome`='$whome', 
   		`noticeMessage`='$description', 
   		`dates`='$dates', 
   		`times`='$time', 
   		`author`='$authors'
   		WHERE noticeId=$id";
   		}else{
   		$sql="UPDATE `notice` SET 
   		`noticeTitle`='$title', 
   		`whome`='$whome', 
   		`noticeMessage`='$description', 
   		`dates`='$dates', 
   		`times`='$time', 
   		`author`='$authors',
   		`file`='$filess'
   		WHERE noticeId=$id";
   		}
   		$getresult=$this->db->update($sql);
   	}
   
   
   	function paymentApprovedbyAdmin($id){
   		
   		$sql="UPDATE `paymenthistory` SET `statuss`=1  WHERE `payId`=$id";
   		$getresult=$this->db->update($sql);
   
   		$sql="SELECT * FROM `paymenthistory` WHERE `payId`=$id";
   		$getresult=$this->db->select($sql)->fetch_assoc();
   		$ammount=$getresult['amount'];
   		$stdid=$getresult['stId'];
   
   		$sqls="SELECT * FROM `student_two` WHERE `std_one`=$stdid";
   		$getresult=$this->db->select($sqls)->fetch_assoc();
   		$stdammount=$getresult['balace'];
   		
   		$total=$ammount+$stdammount;
   
   		$sql="UPDATE `student_two` SET `balace`=$total  WHERE `std_one`=$stdid";
   		$getresult=$this->db->update($sql);
   	
   		header('Location:payment.php');
   	}
   
   	function paymentRejectbyAdmin($id){
   		$sql="UPDATE `paymenthistory` SET `statuss`=2  WHERE `payId`=$id";
   		$getresult=$this->db->update($sql);
   		header('Location:payment.php');
   	}
   
   	function paymentRejectFrombyAdmin($id){
   		$sql="UPDATE `paymenthistory` SET `statuss`=2  WHERE `payId`=$id";
   		$getresult=$this->db->update($sql);
   
   
   		$sql="SELECT * FROM `paymenthistory` WHERE `payId`=$id";
   		$getresult=$this->db->select($sql)->fetch_assoc();
   		$ammount=$getresult['amount'];
   		$stdid=$getresult['stId'];
   
   		$sqls="SELECT * FROM `student_two` WHERE `std_one`=$stdid";
   		$getresult=$this->db->select($sqls)->fetch_assoc();
   		$stdammount=$getresult['balace'];
   		
   		$total=$stdammount-$ammount;
   
   		$sql="UPDATE `student_two` SET `balace`=$total  WHERE `std_one`=$stdid";
   		$getresult=$this->db->update($sql);
   
   		header('Location:payment.php');
   	}
   
   	function showpaymentByAdmin($id){
   		$sql="SELECT * FROM `paymenthistory` WHERE `payId`=$id";
   		$getresult=$this->db->update($sql);
   		return $getresult;
   	}
   
   	function enterPayment($id,$data){
   		$amount=$data['edtamt'];
   		if (!empty($amount)) {
   			$sql="UPDATE `paymenthistory` SET `amount`='$amount' WHERE `payId`=$id";
   			$getresult=$this->db->update($sql);
   
   		}
   		
   	}
   
   
   	function recentUniversity(){
   		$sql="SELECT * FROM `university` ORDER BY `universityId` DESC LIMIT 4";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   	function recentModarator(){
   		$sql="SELECT * FROM modarator ORDER BY `morId` DESC LIMIT 5";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   
   	function recentPayment(){
   		$sql="SELECT * FROM paymenthistory ORDER BY `payId` DESC LIMIT 5";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   
   	function bkashAndRocketPayment($data){
   		$bamounts=$data['bamount'];
   		$ramounts=$data['ramount'];
   
   		$bphoneNs=$data['bphoneN'];
   		$rphoneNs=$data['rphoneN'];
   
   		$btxtId=$data['btxtId'];
   		$rtxtId=$data['rtxtId'];
   
   		$dates=date("Y/m/d");
   		$time=date("h:i:sa");
   		$studentid=$_SESSION['sid'];
   		$status=0;
   		$method=$data['slectpayment'];
   
   		if ($method=="Bkash") {
   			$sql="INSERT INTO `paymenthistory`(`amount`, `phoneN`, `txtId`, `reDate`, `reTime`, `stId`, `statuss`, `method`) VALUES ('$bamounts','$bphoneNs','$btxtId','$dates','$time','$studentid','$status','$method')";
   		}else{
   			$sql="INSERT INTO `paymenthistory`(`amount`, `phoneN`, `txtId`, `reDate`, `reTime`, `stId`, `statuss`, `method`) VALUES ('$ramounts','$rphoneNs','$rtxtId','$dates','$time','$studentid','$status','$method')";
   		}
   
   
   		
   		$getresult=$this->db->insert($sql);
   		return $getresult;
   	}
   	function bankPayment($data,$file){
   		$youname=$data['youname'];
   		$youid=$data['urid'];
   		$amount=$data['bankamount'];
   		$dates=date("Y/m/d");
   		$time=date("h:i:sa");
   		$studentid=$_SESSION['sid'];
   		$status=0;
   		$method=$data['slectpayment'];
   
   		$paymentrct=$file['paymentrct']['name'];
   		$files=$file['paymentrct']['tmp_name'];
   
   		move_uploaded_file($files, "img/upload/".$paymentrct);
   
   		$sql="INSERT INTO `paymenthistory`(`reDate`, `reTime`, `stId`, `statuss`, `method`, `banksrecipt`, `depositname`, `nidOrphone`, `amount`) VALUES ('$dates','$time','$studentid','$status','$method','$paymentrct','$youname','$youid','$amount');";
   
   		$getresult=$this->db->insert($sql);
   		header("Location:payment.php");
   		return $getresult;
   
   	}
   
   	function getPaymentHistory($limit,$offset){
   		$id=$_SESSION['sid'];
   		$sql="SELECT * FROM `paymenthistory` WHERE `stId`=$id  limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   
   		$sqls="select count(`payId`) FROM paymenthistory WHERE `stId`=$id";
   
   		$gcou=$this->db->select($sqls);		
   		return array($getresult,$gcou);
   	}
   
   
   	function getPaymentHistoryForAdminApprove($limit,$offset){
   		$sql="SELECT * FROM `paymenthistory` WHERE `statuss`=1 limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   
   		$sqls="select count(`payId`) FROM paymenthistory WHERE `statuss`=1 ";
   
   		$gcou=$this->db->select($sqls);		
   		return array($getresult,$gcou);
   	}
   
   
   	function getPaymentHistoryForAdminPending($limit,$offset){
   		$sql="SELECT * FROM `paymenthistory` WHERE `statuss`=0 limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   
   		$sqls="select count(`payId`) FROM paymenthistory WHERE `statuss`=0 ";
   
   		$gcou=$this->db->select($sqls);		
   		return array($getresult,$gcou);
   	}
   
   
   	function getPaymentHistoryForAdminReject($limit,$offset){
   		$sql="SELECT * FROM `paymenthistory` WHERE `statuss`=2 limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   
   		$sqls="select count(`payId`) FROM paymenthistory WHERE `statuss`=2 ";
   
   		$gcou=$this->db->select($sqls);		
   		return array($getresult,$gcou);
   	}
   
   
   
   
   
   	function getUniversityInfo($id){
   		$sql="SELECT * FROM `university` where `universityId`=$id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   	function studentSearch($search){
   		$sql="SELECT * FROM `student_one` JOIN `student_two` WHERE student_two.std_one= student_one.studentId AND `fname` LIKE '%$search%'";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   	function getAllStudent($limit,$offset){
   		$sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId limit $limit,$offset";
   		$count="select count(`student_id`) FROM student_two";
   		$getresult=$this->db->select($sql);
   		$gcou=$this->db->select($count);
   		return array($getresult,$gcou);
   	}
   
   	function getAllPendingStudent($limit,$offset){
   		$sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId and
   		(student_two.satuss = 0 and (student_two.hold IS NULL OR student_two.hold <> 1)) limit $limit,$offset";
   		$count="select count(`student_id`) FROM student_two WHERE student_two.satuss = 0 and student_two.hold <> 1";
   		$getresult=$this->db->select($sql);
   		$gcou=$this->db->select($count);
   		return array($getresult,$gcou);
   	}
   
   	function getAllApproveStudent($limit,$offset){
   		$sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId and
   		student_two.satuss = 2  and (student_two.hold IS NULL OR  student_two.hold =0) limit $limit,$offset";
   		$count="select count(`student_id`) FROM student_two WHERE student_two.satuss = 2  and student_two.hold <> 1 ";
   		$getresult=$this->db->select($sql);
   		$gcou=$this->db->select($count);
   		return array($getresult,$gcou);
   	}
   
   
   
   
   	function getAllHoldStudent($limit,$offset){
   		$sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId and
   		student_two.hold = 1 limit $limit,$offset";
   		$count="select count(`student_id`) FROM student_two WHERE student_two.hold = 1";
   		$getresult=$this->db->select($sql);
   		$gcou=$this->db->select($count);
   		return array($getresult,$gcou);
   	}
   
   
   	function getPendingStd(){
   		$sql="SELECT COUNT(`satuss`) FROM student_two WHERE `satuss`=1";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   	function getStudentInfo($id){
   		$sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId and
   		student_two.student_id=$id limit 1";
   		 $getresult=$this->db->select($sql);
   		 return $getresult;
   	}

      function getStudentInfoforedit(){
         $id=$_SESSION['sid'];
         $sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId and
         student_two.std_one=$id limit 1";
          $getresult=$this->db->select($sql);
          return $getresult;
      }


      function getStudentInfoForChat($id){
         $sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId and
         student_one.studentId=$id limit 1";
          $getresult=$this->db->select($sql);
          return $getresult;
      }
   
   	function stdApprove($id){
   		$sql="UPDATE `student_two` SET `satuss`=2 WHERE `student_id`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:Verifystudent.php");
   
   	}
   
   	function studentDelete($id){
   		$sql="DELETE FROM `student_two` WHERE `std_one`=$id";
   		$sql2="DELETE FROM `student_one` WHERE `studentId`=$id";
   		$getresult=$this->db->delete($sql);
   		$getresult2=$this->db->delete($sql2);
   		header("Location:student.php");
   	}
   
   
   	function studentHold($id){
   		$sql="UPDATE `student_two` SET `hold`=1  WHERE  `std_one`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:student.php");
   	}
   
   	
   	function studentUnHold($id){
   		$sql="UPDATE `student_two` SET `hold`=0  WHERE  `std_one`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:student.php");
   	}
   
   	function studentApprove($id){
   		$sql="UPDATE `student_two` SET `satuss`=2  WHERE  `std_one`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:student.php");
   	}
   
   
   
   	function universitySearch($search){
   		$sql="SELECT * FROM `university` WHERE `universityName` LIKE '%$search%'";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   	function adminMOdaraSearch($search){
		$id=$_SESSION['admid'];
   		$sql="SELECT * FROM `modarator` WHERE `adminId`=$id AND `name` LIKE '%$search%'";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   	function getPendingUniversity(){
   		$sql="SELECT * FROM `university` WHERE `statuss` =0";
   		$getresult=$this->db->select($sql);
   		$count="select count(`universityId`) FROM university WHERE statuss = 0";
   		
   		$gcou=$this->db->select($count);
   		return array($getresult,$gcou);
   	}
   
   	function getAllApproveUniversity(){
   		$sql="SELECT * FROM `university` WHERE `statuss` =2 and hold <> 1";
   		$getresult=$this->db->select($sql);
   		$count="select count(`universityId`) FROM university WHERE `statuss` =2 and hold <> 1 ";
   		$gcou=$this->db->select($count);
   		return array($getresult,$gcou);
   	}
   
   	function getAllUniversity(){
   		$sql="SELECT * FROM `university`";
   		$getresult=$this->db->select($sql);
   		$count="select count(`universityId`) FROM university ";
   		$gcou=$this->db->select($count);
   		return array($getresult,$gcou);
   	}
   
   	function universityHold($id){
   		$sql="UPDATE `university` SET `hold`=1  WHERE  `universityId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:university.php");
   	}
   
   	
   	function universityUnHold($id){
   		$sql="UPDATE `university` SET `hold`=0  WHERE  `universityId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:university.php");
   	}
   
   	function universityApprove($id){
   		$sql="UPDATE `university` SET `statuss`=2  WHERE  `universityId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:university.php");
   	}
   
   
   	function universityDelete($id){
   		$sql="DELETE FROM `university` WHERE `universityId`=$id";
   		$getresult=$this->db->delete($sql);
   		header("Location:university.php");
   	}
   
   	function getUniInfo2($id){
   		$sql="SELECT * FROM `university` WHERE universityId=$id ";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   	function uniApprove($id){
   		$sql="UPDATE `university` SET `statuss`=2 WHERE `universityId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:VerifyUniversity.php");
   
   	}
   
   	function stdDlt($id){
   		$sql="DELETE FROM `student_two` WHERE `std_one`=$id";
   		$sql2="DELETE FROM `student_one` WHERE `studentId`=$id";
   		$getresult=$this->db->delete($sql);
   		$getresult=$this->db->delete($sql2);
   		header("Location:Verifystudent.php");
   		return $getresult;
   	}
   
   	function unidDlt($id){
   		$sql="DELETE FROM `university` WHERE `universityId`=$id";
   		$getresult=$this->db->delete($sql);
   		header("Location:VerifyUniversity.php");
   		return $getresult;
   	}
   
   	function geModaInfo(){
   		$sql="SELECT * FROM `modarator` WHERE `status`=0";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   	function adddepertment($data){
   		$dptname=$data['dptname'];
   		$dptshortname=$data['dptshortname'];
   		$status=1;
   		$id=$_SESSION['uid'];
   
   		$sql="INSERT INTO `depertment`(`depertmentName`, `statuss`, `uid`, `depertshortname`) VALUES ('$dptname','$status','$id','$dptshortname')";
   		$getresult=$this->db->insert($sql);
   	}
   
   
   	function getDepertment($limit,$offset){
   		$id=$_SESSION['uid'];
   		$sql="SELECT * FROM `depertment` WHERE uid=$id limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   	
   		$count="select count(`depertmentId`) FROM depertment WHERE uid=$id";
   		$gcou=$this->db->select($count);
   		return array($getresult,$gcou);
   	}
   
   	function getDepertmentForuni(){
   		$id=$_SESSION['uid'];
   		$sql="SELECT * FROM `depertment` WHERE uid=$id ";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   
   	function addsubject($data){
   		$subjecname=$data['subjecname'];
   		$subjectmark=$data['subjectmark'];
   		$status=1;
   		$id=$_SESSION['uid'];
   
   		$sql="INSERT INTO `subject`(`subjectname`, `subjectMark`, `uid`,`statuss`) VALUES ('$subjecname','$subjectmark','$id','$status')";
   		$getresult=$this->db->insert($sql);
   	}
   
   	function getsubject($limit,$offset){
   		$id=$_SESSION['uid'];
   		$sql="SELECT * FROM `subject` WHERE uid=$id limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   	
   		$count="select count(`subjectId`) FROM subject WHERE uid=$id";
   		$gcou=$this->db->select($count);
   		return array($getresult,$gcou);
   	}
   
   
   	function getsubjectforUnit(){
   		$id=$_SESSION['uid'];
   		$sql="SELECT * FROM `subject` WHERE uid=$id ";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   
   
   	function addquta($data){
   		$qutaName=$data['qutaName'];
   		$qutaSeat=$data['qutaSeat'];
   		$status=1;
   		$id=$_SESSION['uid'];
   
   		$sql="INSERT INTO `quota`(`quotaName`, `statuss`, `soutaseat`, `uid`) VALUES ('$qutaName','$status','$qutaSeat','$id')";
   		$getresult=$this->db->insert($sql);
   	}
   
   	
   	function gequta($limit,$offset){
   		$id=$_SESSION['uid'];
   		$sql="SELECT * FROM `quota` WHERE uid=$id limit $limit,$offset";
   		$getresult=$this->db->select($sql);
   	
   		$count="select count(`quotaId`) FROM quota WHERE uid=$id";
   		$gcou=$this->db->select($count);
   		return array($getresult,$gcou);
   	}
   
   	function RegistationUniversity($data,$file){
   
   		$uname=$data['uname'];
   		$rgcode=$data['rgcode'];
   		$division=$data['division'];
   		$phone=$data['phone'];
   		$email=$data['email'];
   		$zcode=$data['zcode'];
   		$city=$data['city'];
   		$pass=$data['pass'];
         $lan=$data['lan'];
         $lat=$data['lat'];


        
         $studentTable="SELECT `email` FROM student_one WHERE email='$email' LIMIT 1";
         $universityTable="SELECT `email` FROM `university` WHERE email='$email' LIMIT 1";
         $modaratortable="SELECT `email` FROM modarator WHERE email='$email' LIMIT 1";

         $universutyname="SELECT `universityName` FROM university WHERE universityName='$uname' LIMIT 1";


         $StudentResult=$this->db->select($studentTable);
         $universityResult=$this->db->select($universityTable);
         $modaResult=$this->db->select($modaratortable);
         $uninameResult=$this->db->select($universutyname);

         if($StudentResult || $universityResult || $modaResult || $uninameResult){
            return 10;
         }else{
   
               $image=$file['unimage']['name'];
               $filetemp=$file['unimage']['tmp_name'];
               move_uploaded_file($filetemp,"UniversityAdmin/img/upload/".$image);


               $image2=$file['single']['name'];
               $filetemp2=$file['single']['tmp_name'];
               move_uploaded_file($filetemp2,"UniversityAdmin/img/upload/".$image2);


   				$query="INSERT INTO `university`(`universityName`, `universityCode`, `universityImg`, `division`, `city`, `zip`, `pohne`, `email`, `pass`, `statuss`, `hold`, `online`, `lat`, `lng`, `single`) 

               VALUES ('$uname','$rgcode','$image','$division','$city','$zcode','$phone','$email','$pass', 0,0,'offline','$lat','$lan','$image2')";
   
   				$getresult=$this->db->insert($query);
   				

               //for chat with student and admin
               $query="SELECT universityId FROM university ORDER BY universityId DESC LIMIT 1";
               $getresult=$this->db->select($query)->fetch_assoc();
               $val=$getresult["universityId"];




               
               $query="SELECT * FROM `student_one`";
               $query2="SELECT * FROM `modarator`";
               $query3="SELECT * FROM `university`";
               $stdinformation=$this->db->select($query);
               $admiModaAndAmdin=$this->db->select($query2);
               $university=$this->db->select($query3);



               if ($university) {
                  
               while ($uni=$university->fetch_assoc()) {
                  
                  $timess=date("h:m:sa");
                  $datess=date("Y-m-d");
                  $kassathe="university";
                  $name=$uni['universityId'];


                  $amike="university";

                  if($name!=$val){

                  $sql="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$kassathe','$name','$amike','$val','$datess','$timess')";

                  $sql2="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$amike','$val','$kassathe','$name','$datess','$timess')";

                  $getresult=$this->db->insert($sql);
                  $getresult=$this->db->insert($sql2);
               }
                  
               }
            }



               if ($stdinformation) {
                  
               while ($stdinfo=$stdinformation->fetch_assoc()) {
                  
                  $timess=date("h:m:sa");
                  $datess=date("Y-m-d");
                  $kassathe="student";
                  $name=$stdinfo['studentId'];
                  $amike="university";

                  $sql="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$kassathe','$name','$amike','$val','$datess','$timess')";

                  $sql2="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$amike','$val','$kassathe','$name','$datess','$timess')";

                  $getresult=$this->db->insert($sql);
                  $getresult=$this->db->insert($sql2);
                  
               }
            }



               if ($admiModaAndAmdin) {
                  
               while ($info=$admiModaAndAmdin->fetch_assoc()) {
                  
                  $timess=date("h:m:sa");
                  $datess=date("Y-m-d");

                  if($info['uniid']==NULL && $info['types']=="Admin"){
                     $kassathe="admin";
                  }else if($info['uniid']==NULL && $info['types']=="Modarator"){
                     $kassathe="adminModarator";
                  }else if($info['uniid']!=NULL && $info['types']=="Admin" && $val!=$info['uniid']){
                     $kassathe="adminUniversity";
                  }else if($info['uniid']!=NULL && $info['types']=="Modarator"){
                     $kassathe="universityModarator";
                  }
                  


                  $name=$info['morId'];
                  $amike="university";
                  

                  $sql="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$kassathe','$name','$amike','$val','$datess','$timess')";

                  $sql2="INSERT INTO `friedns` (`karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) 
                  VALUES ('$amike','$val','$kassathe','$name','$datess','$timess')";

                  $getresult=$this->db->insert($sql);
                  $getresult=$this->db->insert($sql2);
                  
               }
            }





            return 5;
                 
   		}
   	}
   
   
   	function moneyInsert($data){
   		$amount=$data['amount'];
   		$phoneN=$data['phoneN'];
   		$txtId=$data['txtId'];
   		$reDate=date("d/m/y");
   		$reTime=date("h:i:s");
   		$stId=$_SESSION['sid'];
   
   		$sql="INSERT INTO `paymenthistory`(`amount`, `phoneN`, `txtId`, `reDate`, `reTime`, `stId`,`statuss`) VALUES ('$amount','$phoneN','$txtId','$reDate','$reTime','$stId',0)";
   		$res=$this->db->insert($sql);
   	}
   	
   	
   	function addUnit($data){
   		$unitName=$data['unitName'];
   		$statuss=1;
   		$minimumSSCgpa=$data['minimumSSCgpa'];
   		$minimumHSCgpa=$data['minimumHSCgpa'];
   		$totalGPA=$data['totalGPA'];
   		$SSSCGPAForRegulerStudent=$data['SSSCGPAForRegulerStudent'];
   		$SSSCGPAForIegulerStudent=$data['SSSCGPAForIegulerStudent'];
   		$HSCGPAForRegulerStudent=$data['HSCGPAForRegulerStudent'];
   		$HSCGPAForIregulerStudent=$data['HSCGPAForIregulerStudent'];
   		$allow=$data['allow'];
   		$examduration=$data['examduration'];
   		$specialnote=$data['specialnote'];
   		$universityId=$_SESSION['uid'];
   		$group=$data['group'];
   		$admissionfeees=$data['admissionfeee'];
   		
   		$sql="INSERT INTO `unit`(`unitName`, `statuss`, `minSSCGpa`, `minHSCGpa`, `TotalGpa`, `sscReguler`, `sscIreg`, `hscReg`, `hscIreg`, `allow`, `examDuration`, `notes`, `universityId`,`groups`,`admsFee`) VALUES ('$unitName','$statuss','$minimumSSCgpa','$minimumHSCgpa','$totalGPA','$SSSCGPAForRegulerStudent','$SSSCGPAForIegulerStudent','$HSCGPAForRegulerStudent','$HSCGPAForIregulerStudent','$allow','$examduration','$specialnote','$universityId','$group','$admissionfeees')";
   		
   		$getresult=$this->db->insert($sql);
   		
   		$sql="SELECT * FROM unit ORDER BY `uniId` DESC LIMIT 1";
   		$r=$this->db->select($sql)->fetch_assoc();
   		$last_id=$r['uniId'];
   		
   	
   		$sublist=$data['subject_list'];
   		
   		if(!empty($sublist)){
   			for($i=0; $i<sizeof($sublist); $i++){
   				$list=$sublist[$i];
   				$sql="INSERT INTO `unitandsubject`( `unitId`, `subName`) VALUES ('$last_id','$list')";
   				$getresult=$this->db->insert($sql);
   			}
   		}
   		
   		
   		$deptlist=$data['depert_list'];
   		
   		if(!empty($deptlist)){
   			for($i=0; $i<sizeof($deptlist); $i++){
   				$list=$deptlist[$i];
   				$sql="INSERT INTO `unitanddepert`( `unitId`, `deptname`) VALUES ('$last_id','$list')";
   				$getresult=$this->db->insert($sql);
   			}
   		}
   	}
   	
   	
   	function getUnit(){
   		$uni_id=$_SESSION['uid'];
   		$sql="SELECT * FROM `unit` WHERE `universityId`=$uni_id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   	
   	function getdept(){
   		$uni_id=$_SESSION['uid'];
   		$sql="SELECT * FROM `depertment` WHERE `uid`=$uni_id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   	
   	function addSeat($data){
   		$unit=$data['unit'];
   		$dept=$data['dept'];
   		$seatNumber=$data['seatNumber'];
   		$ubiversityId=$_SESSION['uid'];
   		$stauts=1;
   		
   		$sql="INSERT INTO `seet`(`numberOfSet`, `deptname`, `unitname`, `ubiversityId`, `statuss`) VALUES ('$seatNumber','$dept','$unit','$ubiversityId','$stauts');";
   		$getresult=$this->db->insert($sql);
   	}
   	
   	function getSeat($limit,$offset){
   		$id=$_SESSION['uid'];
   		$sql="SELECT * FROM `seet` WHERE `ubiversityId`=$id limit $limit,$offset";
   		
   		$getresult=$this->db->select($sql);
   	
   		$count="select count(`seatId`) FROM seet WHERE ubiversityId=$id";
   		$gcou=$this->db->select($count);
   		return array($getresult,$gcou);
   	}
   	
   	function getUnits($limit,$offset){
   		$id=$_SESSION['uid'];
   		$sql="SELECT * FROM `unit` WHERE `universityId`=$id limit $limit,$offset";
   		
   		$getresult=$this->db->select($sql);
   	
   		$count="select count(`uniId`) FROM unit WHERE universityId=$id";
   		$gcou=$this->db->select($count);
   		
   		$sql="SELECT * FROM `unitanddepert`";
   		$dept=$this->db->select($sql);
   		$sql="SELECT * FROM `unitandsubject`";
   		$sub=$this->db->select($sql);
   		
   		return array($getresult,$gcou,$dept,$sub);
   	}
   	
   	function getUnitsforshow($id){
   		$sql="SELECT * FROM `unit` WHERE `uniId`=$id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   	
   	function anotherUnit(){
   		$sql="SELECT * FROM `unitanddepert`";
   		$dept=$this->db->select($sql);
   		$sql="SELECT * FROM `unitandsubject`";
   		$sub=$this->db->select($sql);
   		return array($dept,$sub);
   	}
   	
   	function deletedept($id){
   		$sql="DELETE FROM `depertment` WHERE `depertmentId`=$id";
   		$getresult=$this->db->delete($sql);
   		header("Location:requerment.php");
   	}
   	
   	function deptDeactive($id){
   		$sql="UPDATE `depertment` SET `statuss`=0  WHERE `depertmentId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:requerment.php");
   	}
   	
   	function deptactive($id){
   		$sql="UPDATE `depertment` SET `statuss`=1  WHERE `depertmentId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:requerment.php");
   	}
   		
   	function getDeptForEdit($id){
   		$sql="SELECT * FROM `depertment` WHERE `depertmentId`=$id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   	
   	function insertEditDept($ids,$data){
   		$fulname=$data['fullname'];
   		$shortname=$data['shotname'];
   		
   		$sql="UPDATE `depertment` SET `depertmentName`='$fulname',`depertshortname`='$shortname' WHERE `depertmentId`='$ids'";
   		$getresult=$this->db->insert($sql);
   		header("Location:requerment.php");
   	}
   	
   	
   	function subjectDelete($id){
   		$sql="DELETE FROM `subject` WHERE `subjectId`=$id";
   		$getresult=$this->db->delete($sql);
   		header("Location:requerment.php");
   	}
   	function subjectActive($id){
   		$sql="UPDATE `subject` SET `statuss`=1  WHERE `subjectId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:requerment.php");
   	}
   	function subjectDeactive($id){
   		$sql="UPDATE `subject` SET `statuss`=0  WHERE `subjectId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:requerment.php");
   	}
   	function getSubForEdit($id){
   		$sql="SELECT * FROM `subject` WHERE `subjectId`=$id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   	
   	function insertEditSub($ids,$data){
   		$subname=$data['subname'];
   		$submark=$data['submark'];
   		
   		$sql="UPDATE `subject` SET `subjectname`='$subname',`subjectMark`='$submark' WHERE `subjectId`='$ids'";
   		$getresult=$this->db->insert($sql);
   		header("Location:requerment.php");
   	}
   	
   	function quatDelete($id){
   		$sql="DELETE FROM `quota` WHERE `quotaId`=$id";
   		$getresult=$this->db->delete($sql);
   		header("Location:requerment.php");
   	}
   	function qutadeactive($id){
   		$sql="UPDATE `quota` SET `statuss`=0  WHERE `quotaId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:requerment.php");
   	}
   	function quataactive($id){
   		$sql="UPDATE `quota` SET `statuss`=1  WHERE `quotaId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:requerment.php");
   	}
   	
   	
   	function getQuataForEdit($id){
   		$sql="SELECT * FROM `quota` WHERE `quotaId`=$id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   	
   	function insertEditQuta($ids,$data){
   		$qutaname=$data['qutaname'];
   		$qutaseat=$data['qutaseat'];
   		
   		$sql="UPDATE `quota` SET `quotaName`='$qutaname',`soutaseat`='$qutaseat' WHERE `quotaId`='$ids'";
   		$getresult=$this->db->insert($sql);
   		header("Location:requerment.php");
   	}
   	
   	function seatDelete($id){
   		$sql="DELETE FROM `seet` WHERE `seatId`=$id";
   		$getresult=$this->db->delete($sql);
   		header("Location:requerment.php");
   	}
   	
   	function seatActive($id){
   		$sql="UPDATE `seet` SET `statuss`=1  WHERE `seatId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:requerment.php");
   	}
   	
   	function seatDeactive($id){
   		$sql="UPDATE `seet` SET `statuss`=0  WHERE `seatId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:requerment.php");
   	}
   	
   	function getSeatForEdit($id){
   		$sql="SELECT * FROM `seet` WHERE `seatId`=$id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   	
   	
   	function unitdlete($id){
   		$sql="DELETE FROM `unit` WHERE `uniId`=$id";
   		$getresult=$this->db->delete($sql);
   		header("Location:requerment.php");
   	}
   	function unitdeactive($id){
   		$sql="UPDATE `unit` SET `statuss`=0  WHERE `uniId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:requerment.php");
   	}
   	function unitactive($id){
   		$sql="UPDATE `unit` SET `statuss`=1  WHERE `uniId`=$id";
   		$getresult=$this->db->insert($sql);
   		header("Location:requerment.php");
   	}
   	
   	function getdeptForUnitshow($id){
   		$sql="SELECT * FROM `unitanddepert` WHERE `unitId`=$id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   	
   	function getsubForUnitshow($id){
   		$sql="SELECT * FROM `unitandsubject` WHERE `unitId`=$id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
   	
   	function addmission($id,$data){

         
         if(isset($data['qutas'])){
            $qutaIds=$data['qutas'];
         }else{
            $qutaIds=0;
         }
         $sql="SELECT * FROM `unit` WHERE `uniId`=$id LIMIT 1";
         $uniID=$this->db->select($sql);
         while($r=$uniID->fetch_assoc()){
            $rr=$r['universityId'];
            $fee=$r['admsFee'];
            $totalGpa=$r['TotalGpa'];
         }
         
         $studentId = $_SESSION["sid"];
         $sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId and student_two.std_one=$studentId";
         $getresult=$this->db->select($sql);
         
         while($r=$getresult->fetch_assoc()){
            $ttgpa=$r['sscGpa'] + $r['hscGpa'];
         }

         // Unit cheakc ei unit a age addmisson niche ki nah
         $sql="SELECT * FROM `addmisson` WHERE `unitId`=$id AND studentId=$studentId LIMIT 1";
         $cheakUnit=$this->db->select($sql);

         
         
         
         $universityId=$rr;
         $statuss=0;
         $dates=date("Y/m/d");
         $times=date("h:i:sa");
         $unitId=$id;
         $mt=$_SESSION['amoint'];
         
         //unit cheak
         if(!$cheakUnit){
         //addmisson fee cheack
         if($fee<=$mt){
            
            //cgp cheack
            if($totalGpa<=$ttgpa){





         $afterblnc=$mt-$fee;
         $_SESSION['amoint']=$afterblnc;
         $stdId=$_SESSION['sid'];
         $sql="UPDATE `student_two` SET `balace`=$afterblnc WHERE `std_one`=$stdId";
         $getresult=$this->db->update($sql);
         
         $sql="INSERT INTO `addmisson`(`studentId`, `universityId`, `statuss`, `dates`, `times`, `unitId`,`qutaId`,`results`) VALUES ('$studentId','$universityId','$statuss','$dates','$times','$unitId','$qutaIds',0)";
         $getresult=$this->db->insert($sql);
         return 5;   
      
      
            }else{
               //CG kom
               return 4;
            }
         
         }else{
            //Tk nai
            return 3;
         }
      }else{
         //unit age ache
         return 2;
      }
   }

   	
   	function getUnitForUnitshow($id){
   		$sql="SELECT * FROM `quota` WHERE `uid`=$id";
   		$getresult=$this->db->select($sql);
   		return $getresult;
   	}
	
	function getStudentwhoareappied($limit,$offset){
      $id=$_SESSION['uid'];
		$sql="SELECT * FROM `addmisson` WHERE `statuss`=0 AND universityId=$id limit $limit,$offset";
		$pending=$this->db->select($sql);
   		
		$count="select count(`addmissonId`) FROM addmisson WHERE `statuss`=0 AND universityId=$id";
   		$gcou=$this->db->select($count);
		
		return array($pending,$gcou);
		
	}

   function getStudentwhoareappied2(){
      $id=$_SESSION['uid'];
      $sql="SELECT * FROM `addmisson` WHERE `statuss`=0 AND universityId=$id  ORDER BY `addmissonId` DESC limit 5";
      $pending=$this->db->select($sql);
      return $pending;
   }
	
	
	function sendstudentvalue($id){
		$sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId and student_two.std_one=$id";
		$getresult=$this->db->select($sql);
		return $getresult;
	}
	
	
	function admissonactive($id){
		$sql="UPDATE `addmisson` SET `statuss`=1 WHERE `addmissonId`=$id";
		$getresult=$this->db->update($sql);
		header("Location:approve.php");
	}
	
	function admissondelete($id){
		$sql="DELETE FROM `addmisson` WHERE `addmissonId`=$id";
		$getresult=$this->db->update($sql);
		header("Location:approve.php");
	}
	
	function getStudentInfoForaddmioosn($id){
		$sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId and student_two.std_one=$id";
		$getresult=$this->db->select($sql);
		return $getresult;
	}
	
	
	function getStudentwhoareapproved($limit,$offset){
		$sql="SELECT * FROM `addmisson` WHERE `statuss`=1 limit $limit,$offset";
		$pending=$this->db->select($sql);
   		
		$count="select count(`addmissonId`) FROM addmisson WHERE `statuss`=1";
   		$gcou=$this->db->select($count);
		
		return array($pending,$gcou);
		
	}
	
	
	function getStudentwhoareReject($limit,$offset){
		$sql="SELECT * FROM `addmisson` WHERE `statuss`=2 limit $limit,$offset";
		$pending=$this->db->select($sql);
   		
		$count="select count(`addmissonId`) FROM addmisson WHERE `statuss`=2";
   		$gcou=$this->db->select($count);
		
		return array($pending,$gcou);
		
	}
	
	function admissonreject($id){
		$sql="UPDATE `addmisson` SET `statuss`=2 WHERE `addmissonId`=$id";
		$getresult=$this->db->update($sql);
		header("Location:approve.php");
	}
	
	function getnuitnameuniname($id){
		$sql="SELECT * FROM `addmisson` WHERE `statuss`=1 AND `studentId`=$id";
		$getresult=$this->db->select($sql);
		return $getresult;
	}
   	
	
	function geruniforaddmisson($id){
		$sql="SELECT * FROM `university` WHERE `universityId`=$id";
		$getresult=$this->db->select($sql);
		return $getresult;
	}
	
	function getunitforaddmisson($id){
		$sql="SELECT * FROM `unit` WHERE `uniId`=$id";
		$getresult=$this->db->select($sql);
		return $getresult;
	}
	

	function edituniversity($id,$data,$file){
		$code=$data['code'];
		$name=$data['name'];
		$division=$data['division'];
		$city=$data['city'];
		$zip=$data['zip'];
		$phone=$data['phone'];
		$emil=$data['emil'];
      $lat=$data['lat'];
      $lng=$data['lng'];

		$image=$file['image']['name'];
   	$filetemp=$file['image']['tmp_name'];
		

      if(!empty($image)){
      move_uploaded_file($filetemp,"img/upload/".$image);

		$sql="UPDATE `university` SET 
		`universityName`='$name',
		`universityCode`='$code',
		`universityImg`='$image',
		`division`='$division',
		`city`='$city',
		`zip`='$zip',
		`pohne`='$phone',
      `lat`='$lat',
      `lng`='$lng',
		`email`='$emil'
		 WHERE `universityId`=$id";

		$getresult=$this->db->update($sql);
		return $getresult;
   }else{
      $sql="UPDATE `university` SET 
      `universityName`='$name',
      `universityCode`='$code',
      `division`='$division',
      `city`='$city',
      `zip`='$zip',
      `pohne`='$phone',
      `lat`='$lat',
      `lng`='$lng',
      `email`='$emil'
       WHERE `universityId`=$id";

      $getresult=$this->db->update($sql);
      return $getresult;
   }
	
   }

	function getuniname($id){
		$sql="SELECT * FROM `university` WHERE `universityId`=$id";
		$getresult=$this->db->update($sql);
		return $getresult;
	}

	function getModaratorInformation($id){
		$sql="SELECT * FROM `modarator` WHERE `morId`=$id";
		$getresult=$this->db->select($sql);
		return $getresult;
	}
	function getstdinfotforprofile($id){
		$sql="SELECT * FROM `student_two` join student_one WHERE 
		student_two.std_one= student_one.studentId and student_two.std_one=$id";
		   $getresult=$this->db->select($sql);
		   return $getresult;
	}

	function getadmitcardinfo($id){
		$sql="SELECT * FROM `unit` WHERE  `uniId`=$id";
		$getresult=$this->db->select($sql);
		return $getresult;
	}

	function getstdinfoforadmitcard($id){
		$sql="SELECT * FROM `student_two` join student_one WHERE 
		student_two.std_one= student_one.studentId and student_two.std_one=$id";
		   $getresult=$this->db->select($sql);
		   return $getresult;
	}

	function getappliediformation($limit,$offset){
		$id=$_SESSION['sid'];
		$sql="SELECT * FROM `addmisson` WHERE `studentId`=$id limit $limit,$offset";
		$pending=$this->db->select($sql);
   		
		$count="select count(`addmissonId`) FROM addmisson WHERE `studentId`=$id";
   		$gcou=$this->db->select($count);
		
		return array($pending,$gcou);
	}
	
	function getuniveristynameForaddmisson($id){
		$sql="SELECT * FROM `university` WHERE `universityId`=$id";
		$getresult=$this->db->select($sql);
		return $getresult;
	}

	function getunitnameForaddmisson($id){
		$sql="SELECT * FROM `unit` WHERE `uniId`=$id";
		$getresult=$this->db->select($sql);
		return $getresult;
	}

	

	function resultShows($limit,$offset){
		$sql="SELECT * FROM `addmisson` WHERE `statuss`=1 AND `results`=0 limit $limit,$offset";
		$pending=$this->db->select($sql);
   		
		$count="select count(`addmissonId`) FROM addmisson WHERE `statuss`=1 AND `results`=0";
   		$gcou=$this->db->select($count);
		
		return array($pending,$gcou);
	}


	function passed($id){
		$sql="UPDATE `addmisson` SET `results`=1 WHERE `addmissonId`=$id";
		$getresult=$this->db->select($sql);
		header("Location:result.php");
	}
	function fail($id){
		$sql="UPDATE `addmisson` SET `results`=2 WHERE `addmissonId`=$id";
		$getresult=$this->db->select($sql);
		header("Location:result.php");
	}

	function resultShowspassed($limit,$offset){
		$sql="SELECT * FROM `addmisson` WHERE `statuss`=1 AND `results`=1 limit $limit,$offset";
		$pending=$this->db->select($sql);
   		
		$count="select count(`addmissonId`) FROM addmisson WHERE `statuss`=1 AND `results`=1";
   		$gcou=$this->db->select($count);
		
		return array($pending,$gcou);
	}

	function resultShowsfailed($limit,$offset){
		$sql="SELECT * FROM `addmisson` WHERE `statuss`=1 AND `results`=2 limit $limit,$offset";
		$pending=$this->db->select($sql);
   		
		$count="select count(`addmissonId`) FROM addmisson WHERE `statuss`=1 AND `results`=2";
   		$gcou=$this->db->select($count);
		
		return array($pending,$gcou);
	}


	function resultsearchs($search){
		$id=$_SESSION['uid'];
   		$sql="SELECT * FROM `addmisson` WHERE universityId=$id AND `studentId` LIKE '%$search%'";
   		$getresult=$this->db->select($sql);
   		return $getresult;
	}

	function getAllStudentForView($id){
		$sql="SELECT * FROM `student_two` join student_one WHERE 
		student_two.std_one= student_one.studentId and student_two.std_one=$id";
		   $getresult=$this->db->select($sql);
		   return $getresult;
	}


	function approved($id){
		$sql="UPDATE `modarator` SET `status`=1 WHERE `morId`=$id";
		$getresult=$this->db->select($sql);
		header("Location:modarator.php");
	}

	function  getalluniversitymodarators($limit,$offset){
		$sql="SELECT * FROM `modarator` WHERE `uniid` IS NOT NULL limit $limit,$offset";
		$getresult=$this->db->select($sql);

		$sqls="select count(`morId`) FROM modarator WHERE `uniid` IS NOT NULL";

		$gcou=$this->db->select($sqls);		
		return array($getresult,$gcou);
	}

	function getuniversitynameformoradaratorsoe($id){
		$sql="SELECT * FROM `university` WHERE `universityId`=$id";
		$getresult=$this->db->select($sql);
		return $getresult;
	}
	
	function modaratorSearch2($search){
		$sql="SELECT * FROM `modarator`  WHERE `adminId` IS NULL AND `name` LIKE '%$search%'";
		$getresult=$this->db->select($sql);
		return $getresult;
	}

  
   function getindividualeUniversity($id){
      $sql="SELECT * FROM `university` WHERE universityId=$id limit 1";
      $getresult=$this->db->select($sql);
      return $getresult;
   }


   function getchaat($id){
      $sql="SELECT * FROM `chatwith` WHERE chatwhomeId=$id";
      $getresult=$this->db->select($sql);
      return $getresult;
   }

   function getchaat2($id){
      $sql="SELECT * FROM `chatwith` WHERE stdId=$id";
      $getresult=$this->db->select($sql);
      return $getresult;
   }

   


  

  function universitynameforchat($id){
      $sql="SELECT * FROM `university` WHERE  `universityId`=$id";
      $getresult=$this->db->select($sql);
      return $getresult;
  }





    function getchatlist($id){
      $sql="SELECT * FROM `friedns` WHERE `amarId`=$id ORDER BY `time` DESC";
      $getresult=$this->db->select($sql);
      return $getresult;
   }

   function getchatlist2($id){
      $sql="SELECT * FROM `friedns` WHERE `frinid`=$id LIMIT 1";
      $getresult=$this->db->select($sql);
      return $getresult;
   }

    function getchatlist3($id){
      $sql="SELECT * FROM `friedns` WHERE `amarId`=$id LIMIT 1";
      $getresult=$this->db->select($sql);
      return $getresult;
   }

   function getatramarId($id){
      $sql="SELECT * FROM `friedns` WHERE `frinid`=$id LIMIT 1";
      $getresult=$this->db->select($sql);
      return $getresult;
   }

   function getsingleInfo($id){
      $sql="SELECT * FROM `modarator` WHERE `morId`=$id LIMIT 1";
      $getresult=$this->db->select($sql);
      return $getresult;
   }

    function getsingleuniname($uniid){
      $sql="SELECT * FROM `university` WHERE  `universityId`=$uniid";
      $getresult=$this->db->select($sql);
      return $getresult;
   }

   function gtchatstudent($id){
         $sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one=$id AND student_one.studentId=$id LIMIT 1";
          $getresult=$this->db->select($sql);
          return $getresult;
      }


      function getmsz($id1,$id2){
      $sql="SELECT * FROM `chatwith` WHERE (`name`=$id1 AND `amike`=$id2 ) OR (`name`=$id2 AND `amike`=$id1 )";
      $getresult=$this->db->select($sql);
      return $getresult;
      }


      function infoforchatHead($id){
         $sql="SELECT * FROM `friedns` WHERE `frinid`=$id LIMIT 1";
         $getresult=$this->db->select($sql);
         return $getresult;
      }

      function gectadminInfoforchat($id){
         $sql="SELECT * FROM `modarator` WHERE  `morId`=$id";
         $getresult=$this->db->select($sql);
         return $getresult;
      }
   function offline($id){
      $sql="UPDATE `student_one` SET `online`='offline' WHERE `studentId`=$id";
      $upt=$this->db->update($sql);
   }


   function unioffline($id){

      $sql="SELECT * FROM `modarator` WHERE `morId`=$id";
      $getresult=$this->db->select($sql);
      if($getresult){
         $sql="UPDATE `modarator` SET `online`='offline' WHERE `morId`=$id";
         $upt=$this->db->update($sql);
      }else{
         $sql="UPDATE `university` SET `online`='offline' WHERE `universityId`=$id";
         $upt=$this->db->update($sql);
      }
      

   }

   function getmdinfo($id){
      $sql="SELECT * FROM `modarator` WHERE `morId`=$id";
      $getresult=$this->db->select($sql);
      return $getresult;
   }

   function adminffline($id){
      $sql="UPDATE `modarator` SET `online`='offline' WHERE `morId`=$id";
      $upt=$this->db->update($sql);
   }

   function addmsz($data,$tarname,$amike){

      $msz=$data['msz'];
      $tim=date("h:m:sa");
      $dts=date("Y-m-d");

      $sql="INSERT INTO `chatwith`(`name`, `amike`,`times`, `dates`, `msz`) 
      
      VALUES ('$tarname','$amike','$tim','$dts','$msz')";

      $getresult=$this->db->insert($sql);
      return $getresult;
   }
   	//login
   	function login($data){
   		$email=$data['email'];
   		$passs=$data['pass'];

   		$sqr="SELECT * FROM student_one WHERE email='$email' AND pass='$passs'";
		   $uqr="SELECT * FROM university WHERE email='$email' AND pass='$passs'";
		   
   		
		   $adminsql="SELECT * FROM modarator WHERE email='$email' AND pass='$passs'";
		   
   		$sres=$this->db->select($sqr);
   		$ures=$this->db->select($uqr);
   		$adminqr=$this->db->select($adminsql);
   		 if ($sres==true) {
            
   		$value=$sres->fetch_assoc();
         $studentIds=$value['studentId'];
         $payment="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId and student_two.std_one=$studentIds";
         $pmt=$this->db->select($payment);
      
         $valuess=$pmt->fetch_assoc();

            if($valuess['satuss']==2 && $value['hold']==0){
               $amt=$valuess['balace'];
               session::set("amoint",$amt);
      			session::set("std",true);
   			   session::set("sid",$value['studentId']);
   			   session::set("stdname",$value['fname']." ".$value['lname']);
               session::set("msz",1);

               $id=$valuess['studentId'];
               $sql="UPDATE `student_one` SET `online`='online' WHERE `studentId`=$id";
               $upt=$this->db->update($sql);

      			header("Location:StudentAdmin/index.php");
      }else{
         return 2;
      }
   		}else if ($ures==true) {
            
   			$value=$ures->fetch_assoc();
            if($value['statuss']==2 && $value['hold']==0){
   			session::set("uni",true);
			   session::set("uid",$value['universityId']);
			   session::set("unicheck",2);
			   session::set("typ",1);


            $id=$value['universityId'];
            $sql="UPDATE `university` SET `online`='online' WHERE `universityId`=$id";
            $upt=$this->db->update($sql);



   			header("Location:UniversityAdmin/index.php");
         }else{
            return 2;
         }
   		}else if ($adminqr==true) {
   			$value=$adminqr->fetch_assoc();
   			if($value['status']==1){
			if(empty($value['uniid']) && !empty($value['adminId']) && $value['status']==1){
				//admin
				session::set("admin",true);
				session::set("admid",$value['morId']);
				session::set("admintype",$value['types']);
				session::set("adminname",$value['name']);
				session::set("unicheck",0);

            $id=$value['morId'];
            $sql="UPDATE `modarator` SET `online`='online' WHERE `morId`=$id";
            $upt=$this->db->update($sql);



				header("Location:Admin/index.php");	
			}else if(!empty($value['uniid']) && empty($value['adminId']) && $value['status']==1){
				//university
				session::set("uni",true);
				session::set("uid",$value['uniid']);
				session::set("typ",$value['types']);
				session::set("name",$value['name']);
				session::set("morId",$value['morId']);
				session::set("userimg",$value['img']);
				session::set("unicheck",1);

            $id=$value['morId'];
            $sql="UPDATE `modarator` SET `online`='online' WHERE `morId`=$id";
            $upt=$this->db->update($sql);



   			header("Location:UniversityAdmin/index.php");
			}
      }else{
         return 2;
      }
   			
   		}else{
   			return 10;
   		}
   	}
   }
   ?>