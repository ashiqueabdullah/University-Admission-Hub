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
		$sfname=$data['sfname'];
		$slname=$data['slname'];
		$sdate=$data['sdate'];
		$radio=$data['radio'];
		$sphone=$data['sphone'];
		$saddress=$data['saddress'];
		$pcode=$data['pcode'];
		$semail=$data['semail'];
		$spass=$data['spass'];
		
			$query="SELECT * FROM student_one WHERE email='$semail' LIMIT 1";
			$getresult=$this->db->select($query);
			if ($getresult==true) {
				echo '<script type="text/javascript">';
				echo ' alert("This email already exist")';
				echo '</script>';
			}else{

				$query="INSERT INTO `student_one`(`fname`, `lname`, `dateOfbirth`, `gender`, `phone`,`address`, `postCode`,`email`, `pass`) 
				VALUES ('$sfname','$slname','$sdate','$radio','$sphone','$saddress','$pcode','$semail','$spass')";

				$getresult=$this->db->insert($query);
				$query="SELECT studentId FROM student_one ORDER BY studentId DESC LIMIT 1";
				$getresult=$this->db->select($query)->fetch_assoc();
				$val=$getresult["studentId"];
				$query="INSERT INTO `student_two` (`std_one`,`satuss`) VALUES ($val,0)";
				$getresult=$this->db->insert($query);
				if ($getresult) {
					$msz="Registration Successful complete ";
					$sfname="";
					$slname="";
					$sdate="";
					$radio="";
					$sphone="";
					$saddress="";
					$pcode="";
					$CounSelct="";
					$semail="";
					$spass="";
					$svpass="";
					return $msz;
				}
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


		$image=$file['myimage']['name'];
		$filetemp=$file['myimage']['tmp_name'];
		move_uploaded_file($filetemp,"img/upload/".$image);

		$sscCertificate=$file['sscCertificate']['name'];
		$filetemp2=$file['sscCertificate']['tmp_name'];
		move_uploaded_file($filetemp2,"img/upload/".$sscCertificate);


		$hscCertificate=$file['hscCertificate']['name'];
		$filetemp3=$file['hscCertificate']['tmp_name'];
		move_uploaded_file($filetemp3,"img/upload/".$hscCertificate);
		


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
		`hscCertificate`='$hscCertificate',
		`satuss`=1
		WHERE std_one=$sid";
		$getresult=$this->db->insert($query);
		if ($getresult) {
		$nationality="";
		$placeOfBirthDistrict="";
		$image="";
		$married="";
		$BloodGroup="";
		$ParmanentAddress="";
		$ParmanentDivision="";
		$ParmanentZipCode="";
		$ParmanentDistrict="";
		$ParmanentCity="";
		$fatherName="";
		$fatherOccipation="";
		$fatherAddress="";
		$fatherPhone="";
		$fatherEmail="";
		$motherName="";
		$motherOccipation="";
		$motherAddress="";
		$motherPhone="";
		$motherEmail="";
		$nameOfLocalGuardian="";
		$relationshipOfLocalGuardian="";
		$addressOfLocalGuardian="";
		$phoneOfLocalGuardian="";
		$emailOfLocalGuardian="";
		$emergencyPersonRelationshipe="";
		$emergencyPersonName="";
		$emergencyPersonAddress="";
		$emergencyPersonPhone="";
		$emergencyPersonEmail="";
		$personPayTheFeeName="";
		$personPayTheFeeRealtion="";
		$personPayTheFeeAddress="";
		$personPayTheFeePhone="";
		$personPayTheFeeEmail="";
		$personPayTheFeeAnnualIncome="";
		$sat="";
		$satDate="";
		$ielts="";
		$ieltsDate="";
		$tofel="";
		$tofelDate="";
		$gmat="";
		$gmatDate="";
		$sscInstituteName="";
		$sscBordeName="";
		$sscGpa="";
		$sscpassingYear="";
		$sscCertificate="";
		$hscInstituteName="";
		$hscBordeName="";
		$hscGpa="";
		$hscpassingYear="";
		$hscCertificate="";

		}
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
		$query="SELECT `satuss` FROM `student_two` WHERE std_one=$id";
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
		$sql="SELECT `universityName` FROM `university` ";
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
		$adminId=$_SESSION['admid'];
		

		$modaimg=$file['modaimg']['name'];
		$filetemp=$file['modaimg']['tmp_name'];
		move_uploaded_file($filetemp,"img/upload/".$modaimg);

		if ($modatype=='Modarator') {
			$mdtp=0;
		}else{
			$mdtp=1;
		}
		
		$status=1;

		

		$sql="INSERT INTO `modarator`(`name`,  `adress`, `email`, `pass`,  `img`,  `status`, `phone`, `types`, `city`, `zip`, `adminId`) VALUES ('$name','$address','$modaemail','$modapass','$modaimg','$status','$modaphone','$mdtp','$city','$zip','$adminId')";
		$getresult=$this->db->insert($sql);

		$sqls="select count(`morId`) FROM modarator WHERE `adminId`IS NOT NULL";

		$gcou=$this->db->select($sqls);		
		return array($getresult,$gcou);
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
		$uid=$_SESSION['uid'];
		

		$modaimg=$file['modaimg']['name'];
		$filetemp=$file['modaimg']['tmp_name'];
		move_uploaded_file($filetemp,"img/upload/".$modaimg);

		if ($modatype=='Modarator') {
			$mdtp=0;
		}else{
			$mdtp=1;
		}
		
		$status=0;

		

		$sql="INSERT INTO `modarator`(`name`,  `adress`, `email`, `pass`,  `img`,  `status`, `phone`, `types`, `city`, `zip`, `uniid`) VALUES ('$name','$address','$modaemail','$modapass','$modaimg','$status','$modaphone','$mdtp','$city','$zip','$uid')";
		$getresult=$this->db->insert($sql);

		$sqls="select count(`morId`) FROM modarator WHERE `adminId`IS NOT NULL";

		$gcou=$this->db->select($sqls);		
		return array($getresult,$gcou);
	}


	function getModaratorInfo($limit,$offset){
		$sql="SELECT * FROM `modarator`  limit $limit,$offset";
		$getresult=$this->db->select($sql);

		$sqls="select count(`morId`) FROM modarator WHERE `adminId` IS NOT NULL";

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
		$sql="SELECT * FROM `modarator` WHERE `uniid`=$id AND `status`=1  limit $limit,$offset";
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


	function editModarator($data,$file,$id,$img){
		$name=$data['modaname'];
		$modaemail=$data['modaemail'];
		$modapass=$data['modapass'];
		$modaphone=$data['modaphone'];
		$modatype=$data['modatype'];
		$address=$data['address'];
		$city=$data['city'];
		$zip=$data['zip'];
		

		$modaimg=$file['modaimg']['name'];
		$filetemp=$file['modaimg']['tmp_name'];
		move_uploaded_file($filetemp,"img/upload/".$modaimg);

		if ($modatype=='Modarator') {
			$mdtp=0;
		}else{
			$mdtp=1;
		}

		if (empty($modaimg)) {
			$modaimg=$img;
		}

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

	}



	function editModaratorForUniversity($data,$file,$id,$img){
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



		if (empty($modaimg)) {
			$modaimg=$img;
		}

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

		$whoAdd=2;
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

		$whoAdd=1;
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
		$sql="SELECT * FROM `notice`  WHERE `whome`=1  limit $limit,$offset";
		$getresult=$this->db->select($sql);

		$sqls="select count(`noticeId`) FROM notice  WHERE `whome`=1";

		$gcou=$this->db->select($sqls);		
		return array($getresult,$gcou);
	}

	function noticeForUniversity($limit,$offset){
		$sql="SELECT * FROM `notice`  WHERE `whome`=2  limit $limit,$offset";
		$getresult=$this->db->select($sql);

		$sqls="select count(`noticeId`) FROM notice  WHERE `whome`=2";

		$gcou=$this->db->select($sqls);		
		return array($getresult,$gcou);
	}

	function noticeAllReadyApprove($limit,$offset){
		$sql="SELECT * FROM `notice`  WHERE `statuss`=1 AND `whoAdd`=1  limit $limit,$offset";
		$getresult=$this->db->select($sql);

		$sqls="select count(`noticeId`) FROM notice  WHERE `statuss`=1 AND `whoAdd`=1";

		$gcou=$this->db->select($sqls);		
		return array($getresult,$gcou);
	}


	function noticeWantApprove($limit,$offset){
		$sql="SELECT * FROM `notice` WHERE `statuss`=0 AND `whoAdd`=1  limit $limit,$offset";
		$getresult=$this->db->select($sql);

		$sqls="select count(`noticeId`) FROM notice  WHERE `statuss`=0 AND `whoAdd`=1";

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


	function recentSudent(){
		$sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId limit 5";
		$getresult=$this->db->select($sql);
		return $getresult;
	}

	function recentModarator(){
		$sql="SELECT * FROM modarator LIMIT 5";
		$getresult=$this->db->select($sql);
		return $getresult;
	}


	function recentPayment(){
		$sql="SELECT * FROM paymenthistory LIMIT 5";
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
		header("Location:payment.php");
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
		student_two.satuss = 1 and student_two.hold <> 1 limit $limit,$offset";
		$count="select count(`student_id`) FROM student_two WHERE student_two.satuss = 1 and student_two.hold <> 1";
		$getresult=$this->db->select($sql);
		$gcou=$this->db->select($count);
		return array($getresult,$gcou);
	}

	function getAllApproveStudent($limit,$offset){
		$sql="SELECT * FROM `student_two` join student_one WHERE student_two.std_one= student_one.studentId and
		student_two.satuss = 2 and student_two.hold <> 1 limit $limit,$offset";
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
		student_two.student_id=$id";
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
		$sql="SELECT * FROM `modarator` WHERE `adminId` IS NOT NULL AND `name` LIKE '%$search%'";
		$getresult=$this->db->select($sql);
		return $getresult;
	}

	function getPendingUniversity(){
		$sql="SELECT * FROM `university` WHERE `statuss` =1";
		$getresult=$this->db->select($sql);
		$count="select count(`universityId`) FROM university WHERE statuss = 1";
		
		$gcou=$this->db->select($count);
		return array($getresult,$gcou);
	}

	function getAllApproveUniversity(){
		$sql="SELECT * FROM `university` WHERE `statuss` =2 and hold <> 1";
		$getresult=$this->db->select($sql);
		$count="select count(`universityId`) FROM university WHERE statuss = 2";
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
		$sql="SELECT *  FROM `university` where universityId=$id";
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
		$status=0;
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
		$status=0;
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
		$status=0;
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

	function RegistationUniversity($data){

		$uname=$data['uname'];
		$rgcode=$data['rgcode'];
		$unimage=$data['unimage'];
		$division=$data['division'];
		$phone=$data['phone'];
		$email=$data['email'];
		$zcode=$data['zcode'];
		$district=$data['district'];
		$city=$data['city'];
		$pass=$data['pass'];

			$query="SELECT * FROM university WHERE email='$email' and universityName='$uname' LIMIT 1";
			$getresult=$this->db->select($query);
			if ($getresult==true) {
				echo '<script type="text/javascript">';
				echo ' alert("This university already exist")';
				echo '</script>';
			}else{

				$query="INSERT INTO `university`(`universityName`, `universityCode`, `universityImg`, `division`, `district`, `city`, `zip`, `pohne`, `email`, `pass`, `statuss`) VALUES ('$uname','$rgcode','$unimage','$division','$district','$city','$zcode','$phone','$email','$pass', 0)";

				$getresult=$this->db->insert($query);
				if ($getresult) {
					$msz="Registration Successful complete ";
					$uname="";
					$rgcode="";
					$division="";
					$phone="";
					$email="";
					$zcode="";
					$district="";
					$city="";
					$pass="";
					return $msz;
				}
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
			session::set("std",true);
			session::set("sid",$value['studentId']);
			header("Location:StudentAdmin/index.php");
		}
		if ($ures==true) {
			$value=$ures->fetch_assoc();
			session::set("uni",true);
			session::set("uid",$value['universityId']);
			header("Location:UniversityAdmin/index.php");
		}if ($adminqr==true) {
			$value=$adminqr->fetch_assoc();
			session::set("admin",true);
			session::set("admid",$value['morId']);
			session::set("admintype",$value['types']);
			session::set("adminname",$value['name']);
			header("Location:Admin/index.php");
		}else{
			echo '<script type="text/javascript">';
			echo ' alert("Password and email do not match")';
			echo '</script>';	
		}
	}
}
?>