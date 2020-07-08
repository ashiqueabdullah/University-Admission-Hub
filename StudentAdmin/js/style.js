var chkaddmissonn = document.getElementById('chkaddmissonn');
if(chkaddmissonn){
  if(chkaddmissonn.value==2){
    swal("You have applied once before!", "", "error");
  }else if(chkaddmissonn.value==3){
    swal("Not enough money. Please recharge!", "", "error");
  }else if(chkaddmissonn.value==4){
    swal("Your CGPA is lower than required!", "", "error");
  }else if(chkaddmissonn.value==5){
    swal("Done successfully!", "", "success");
  }
}


$(document).ready(function() {
    progress();
    progress2();
    showpaymet(0);
	progress2();
	progress();
    getnotice(0);
    showapplieds(0);
    apply(0);

    //google location
    var la=document.getElementById("lat").value;
    var ln=document.getElementById("lng").value;
    console.log(la);

    var map=  new GMaps({
          div: '#map',
          lat: la,
          lng: ln
        });

    map.addMarker({
      lat: la,
      lng: ln,
      title: 'Lima'
    });
});

function ccomplitProfileValidation(){

    var nationality=document.cmtForm.nationality;
    if(nationality.value==""){
        swal("Please Enter Nationality!", "", "error");
        return false;
    }

    var myimage=document.cmtForm.myimage;
    if(myimage.value==""){
        swal("Please Chose your Image!", "", "error");
        return false;
    }
    
    var fatherName=document.cmtForm.fatherName;
    if(fatherName.value==""){
        swal("Please Enter Father Name!", "", "error");
        return false;
    }
    var fatherOccipation=document.cmtForm.fatherOccipation;
    if(fatherOccipation.value==""){
        swal("Please Enter Father Occipation!", "", "error");
        return false;
    }
    var fatherAddress=document.cmtForm.fatherAddress;
    if(fatherAddress.value==""){
        swal("Please Enter Father Address!", "", "error");
        return false;
    }
    var fatherPhone=document.cmtForm.fatherPhone;
    if(fatherPhone.value==""){
        swal("Please Enter Father Phone!", "", "error");
        return false;
    }
    
    var motherName=document.cmtForm.motherName;
    if(motherName.value==""){
        swal("Please Enter Mother Name!", "", "error");
        return false;
    }
    var motherOccipation=document.cmtForm.motherOccipation;
    if(motherOccipation.value==""){
        swal("Please Enter Mother Occipation!", "", "error");
        return false;
    }
   
    
    var emergencyPersonRelationshipe=document.cmtForm.emergencyPersonRelationshipe;
    if(emergencyPersonRelationshipe.value==""){
        swal("Please Enter Emergency Person relationship!", "", "error");
        return false;
    }
    var emergencyPersonName=document.cmtForm.emergencyPersonName;
    if(emergencyPersonName.value==""){
        swal("Please Enter Emergency Person name!", "", "error");
        return false;
    }
    var emergencyPersonAddress=document.cmtForm.emergencyPersonAddress;
    if(emergencyPersonAddress.value==""){
        swal("Please Enter Emergency person address!", "", "error");
        return false;
    }
    var emergencyPersonPhone=document.cmtForm.emergencyPersonPhone;
    if(emergencyPersonPhone.value==""){
        swal("Please Enter Emengency person Phone!", "", "error");
        return false;
    }
    
    var personPayTheFeeName=document.cmtForm.personPayTheFeeName;
    if(personPayTheFeeName.value==""){
        swal("Please Enter Name Who pay the fee!", "", "error");
        return false;
    }
    var personPayTheFeeRealtion=document.cmtForm.personPayTheFeeRealtion;
    if(personPayTheFeeRealtion.value==""){
        swal("Please Enter Relationship!", "", "error");
        return false;
    }
    var personPayTheFeeAddress=document.cmtForm.personPayTheFeeAddress;
    if(personPayTheFeeAddress.value==""){
        swal("Please Enter Person pay the fee Address!", "", "error");
        return false;
    }
    var personPayTheFeePhone=document.cmtForm.personPayTheFeePhone;
    if(personPayTheFeePhone.value==""){
        swal("Please Enter Person pay the fee Phone!", "", "error");
        return false;
    }
    
    var personPayTheFeeAnnualIncome=document.cmtForm.personPayTheFeeAnnualIncome;
    if(personPayTheFeeAnnualIncome.value==""){
        swal("Please Enter Anual Income!", "", "error");
        return false;
    }
    var sscInstituteName=document.cmtForm.sscInstituteName;
    if(sscInstituteName.value==""){
        swal("Please Enter SSC Instruite Name!", "", "error");
        return false;
    }
    var sscBordeName=document.cmtForm.sscBordeName;
    if(sscBordeName.value==""){
        swal("Please Enter SSC Bord!", "", "error");
        return false;
    }
    var sscGpa=document.cmtForm.sscGpa;
    if(sscGpa.value==""){
        swal("Please Enter SSC GPA!", "", "error");
        return false;
    }
    var sscpassingYear=document.cmtForm.sscpassingYear;
    if(sscpassingYear.value==""){
        swal("Please Enter SSC Passing Year!", "", "error");
        return false;
    }
    var sscCertificate=document.cmtForm.sscCertificate;
    if(sscCertificate.value==""){
        swal("Upload SSC cirtificate!", "", "error");
        return false;
    }
    var hscInstituteName=document.cmtForm.hscInstituteName;
    if(hscInstituteName.value==""){
        swal("Please Enter HSC Instruite Name!", "", "error");
        return false;
    }
    var hscBordeName=document.cmtForm.hscBordeName;
    if(hscBordeName.value==""){
        swal("Please Enter HSC Bord name!", "", "error");
        return false;
    }
    var hscGpa=document.cmtForm.hscGpa;
    if(hscGpa.value==""){
        swal("Please Enter HSC GPA!", "", "error");
        return false;
    }
    var hscpassingYear=document.cmtForm.hscpassingYear;
    if(hscpassingYear.value==""){
        swal("Please Enter HSC Passing Year!", "", "error");
        return false;
    }
    var hscCertificate=document.cmtForm.hscCertificate;
    if(hscCertificate.value==""){
        swal("Upload HSC cirtificate!", "", "error");
        return false;
    }
    
}






function editFormvalidation(){

    var nationality=document.editform.nationality;
    if(nationality.value==""){
        swal("Please Enter Nationality!", "", "error");
        return false;
    }

   
    var fatherName=document.editform.fatherName;
    if(fatherName.value==""){
        swal("Please Enter Father Name!", "", "error");
        return false;
    }
    var fatherOccipation=document.editform.fatherOccipation;
    if(fatherOccipation.value==""){
        swal("Please Enter Father Occipation!", "", "error");
        return false;
    }
    var fatherAddress=document.editform.fatherAddress;
    if(fatherAddress.value==""){
        swal("Please Enter Father Address!", "", "error");
        return false;
    }
    var fatherPhone=document.editform.fatherPhone;
    if(fatherPhone.value==""){
        swal("Please Enter Father Phone!", "", "error");
        return false;
    }
    
    var motherName=document.editform.motherName;
    if(motherName.value==""){
        swal("Please Enter Mother Name!", "", "error");
        return false;
    }
    var motherOccipation=document.editform.motherOccipation;
    if(motherOccipation.value==""){
        swal("Please Enter Mother Occipation!", "", "error");
        return false;
    }
   
    
    var emergencyPersonRelationshipe=document.editform.emergencyPersonRelationshipe;
    if(emergencyPersonRelationshipe.value==""){
        swal("Please Enter Emergency Person relationship!", "", "error");
        return false;
    }
    var emergencyPersonName=document.editform.emergencyPersonName;
    if(emergencyPersonName.value==""){
        swal("Please Enter Emergency Person name!", "", "error");
        return false;
    }
    var emergencyPersonAddress=document.editform.emergencyPersonAddress;
    if(emergencyPersonAddress.value==""){
        swal("Please Enter Emergency person address!", "", "error");
        return false;
    }
    var emergencyPersonPhone=document.editform.emergencyPersonPhone;
    if(emergencyPersonPhone.value==""){
        swal("Please Enter Emengency person Phone!", "", "error");
        return false;
    }
    
    var personPayTheFeeName=document.editform.personPayTheFeeName;
    if(personPayTheFeeName.value==""){
        swal("Please Enter Name Who pay the fee!", "", "error");
        return false;
    }
    var personPayTheFeeRealtion=document.editform.personPayTheFeeRealtion;
    if(personPayTheFeeRealtion.value==""){
        swal("Please Enter Relationship!", "", "error");
        return false;
    }
    var personPayTheFeeAddress=document.editform.personPayTheFeeAddress;
    if(personPayTheFeeAddress.value==""){
        swal("Please Enter Person pay the fee Address!", "", "error");
        return false;
    }
    var personPayTheFeePhone=document.editform.personPayTheFeePhone;
    if(personPayTheFeePhone.value==""){
        swal("Please Enter Person pay the fee Phone!", "", "error");
        return false;
    }
    
    var personPayTheFeeAnnualIncome=document.editform.personPayTheFeeAnnualIncome;
    if(personPayTheFeeAnnualIncome.value==""){
        swal("Please Enter Anual Income!", "", "error");
        return false;
    }
    var sscInstituteName=document.editform.sscInstituteName;
    if(sscInstituteName.value==""){
        swal("Please Enter SSC Instruite Name!", "", "error");
        return false;
    }
    var sscBordeName=document.editform.sscBordeName;
    if(sscBordeName.value==""){
        swal("Please Enter SSC Bord!", "", "error");
        return false;
    }
    var sscGpa=document.editform.sscGpa;
    if(sscGpa.value==""){
        swal("Please Enter SSC GPA!", "", "error");
        return false;
    }
    var sscpassingYear=document.editform.sscpassingYear;
    if(sscpassingYear.value==""){
        swal("Please Enter SSC Passing Year!", "", "error");
        return false;
    }
   
    var hscInstituteName=document.editform.hscInstituteName;
    if(hscInstituteName.value==""){
        swal("Please Enter HSC Instruite Name!", "", "error");
        return false;
    }
    var hscBordeName=document.editform.hscBordeName;
    if(hscBordeName.value==""){
        swal("Please Enter HSC Bord name!", "", "error");
        return false;
    }
    var hscGpa=document.editform.hscGpa;
    if(hscGpa.value==""){
        swal("Please Enter HSC GPA!", "", "error");
        return false;
    }
    var hscpassingYear=document.editform.hscpassingYear;
    if(hscpassingYear.value==""){
        swal("Please Enter HSC Passing Year!", "", "error");
        return false;
    }
    
    
}




function getnotice(page) {
    $.post('noticeShow.php?page=' + page, function(respos) {
        $('#noticeShow').html(respos);
    })
}

function showpaymet(page) {
    $.post('paymentHistory.php?page=' + page, function(respos) {
        $('#paymentShow').html(respos);
    })
}


var banks = document.getElementById("banks");
var bkash = document.getElementById("bkash");
var rocket = document.getElementById("rocket");

function chosePayment() {
    var x = document.getElementById("paymentselect").value;
    if (x == "Bank") {
        banks.style.display = "block";
        bkash.style.display = "none";
        rocket.style.display = "none";
    } else if (x == "Rocket") {
        banks.style.display = "none";
        bkash.style.display = "none";
        rocket.style.display = "block";
    } else {
        banks.style.display = "none";
        bkash.style.display = "block";
        rocket.style.display = "none";
    }
}

//Menu bar Js Start
var nav = document.getElementById('mynav');
var open = document.getElementById('navopen');
var close = document.getElementById('navclose');

if (open) {
    open.addEventListener('click', function() {
        nav.style.left = "0px";
        open.style.visibility = "hidden";
    });
}
if (close) {
    close.addEventListener('click', function() {
        nav.style.left = "-200px";
        open.style.visibility = "visible";
    });
}
//Menu bar Js End

var mainImage = document.querySelectorAll('.main-img');
var modalImg = document.querySelector('.modal-img');
var aclose = document.querySelector('.aclose');
if (mainImage) {
    for (let i = 0; i < mainImage.length; i++) {
        mainImage[i].addEventListener('click', function() {
            document.getElementById('display-modal').style.display = 'block';
            modalImg.src = mainImage[i].src
        })
    }
}

if (aclose) {
    aclose.addEventListener('click', function() {
        document.getElementById('display-modal').style.display = 'none';
    })
}


//progress bar Js start
function progress2() {
    var count = document.querySelector('.count2');
    var pr2 = document.querySelector('.pr2');
    var c = 10;
    var pro = 25;
    var id = setInterval(frame, 5);

    function frame() {
        if (pro == 250 && c == 100) {
            clearInterval(id);
        } else {
            pro += 5;
            c += 2;
            if (pr2) {
                pr2.style.width = pro + 'px';
            }
            if (count) {
                count.innerHTML = c + '%';
            }
        }
    }
}


function progress() {
    var count = document.querySelector('.count');
    var pr = document.querySelector('.pr');
    var c = 10;
    var pro = 25;
    var id = setInterval(frame, 5);

    function frame() {
        if (pro == 25 && c == 10) {
            clearInterval(id);
        } else {
            pro += 5;
            c += 2;
            pr.style.width = pro + 'px';
            count.innerHTML = c + '%';
        }
    }
}

//progress bar Js end

//complite profile Js Start
var cmp = document.querySelector('.cmp');
var secnd_part = document.querySelector('.secnd_part');
var pre1 = document.querySelector('.pre1');
var pre2 = document.querySelector('.pre2');
var pre3 = document.querySelector('.pre3');
var next1 = document.querySelector('.next1');
var next2 = document.querySelector('.next2');
var next3 = document.querySelector('.next3');

var myedit = document.querySelector('.myedit');
var edit_part = document.querySelector('.edit_part');

var basic = document.querySelector('.basic');
var parentsLocal = document.querySelector('.parentsLocal');
var anothergur = document.querySelector('.anothergur');
var academi = document.querySelector('.academi');

if (myedit) {
    myedit.addEventListener('click', function() {
        edit_part.style.display = 'block';
        secnd_part.style.display = 'none';
    });
}

if (cmp) {
    cmp.addEventListener('click', function() {
        secnd_part.style.display = 'none';
        basic.style.display = 'block';
    });
}

if (next1) {
    next1.addEventListener('click', function() {
        basic.style.display = 'none';
        parentsLocal.style.display = 'block';
    });
}

if (pre1) {
    pre1.addEventListener('click', function() {
        basic.style.display = 'block';
        parentsLocal.style.display = 'none';
    });
}

if (next2) {
    next2.addEventListener('click', function() {
        anothergur.style.display = 'block';
        parentsLocal.style.display = 'none';
    });
}

if (pre2) {
    pre2.addEventListener('click', function() {
        anothergur.style.display = 'none';
        parentsLocal.style.display = 'block';
    });
}

if (next3) {
    next3.addEventListener('click', function() {
        academi.style.display = 'block';
        anothergur.style.display = 'none';
    });
}

if (pre3)
    pre3.addEventListener('click', function() {
        academi.style.display = 'none';
        anothergur.style.display = 'block';
});

//complite profile Js end

var applyuniversity=document.getElementById("applyuniversity");
var applieduniversity=document.getElementById("applieduniversity");

var shoqapply=document.getElementById("shoqapply");
var showapplied=document.getElementById("showapplied");



if(applyuniversity){
    applyuniversity.addEventListener('click',function(){

        applyuniversity.style.color='white';
        applyuniversity.style.background='#798BFF';

        applieduniversity.style.color='white';
        applieduniversity.style.background='#101924';

        shoqapply.style.display='block';
        showapplied.style.display='none';
    
    })
}


if(applieduniversity){
    applieduniversity.addEventListener('click',function(){

        applieduniversity.style.color='white';
        applieduniversity.style.background='#798BFF';

        applyuniversity.style.color='white';
        applyuniversity.style.background='#101924';

        shoqapply.style.display='none';
        showapplied.style.display='block';
    
    })
}


function showapplieds(page) {
    $.post('showapplied.php?page=' + page, function(respos) {
        $('#showapplied').html(respos);
    })
}

function apply(page) {
    $.post('shoqapply.php?page=' + page, function(respos) {
        $('#shoqapply').html(respos);
    })
}






