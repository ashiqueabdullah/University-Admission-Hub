function editcheck(chk){
    console.log(ckk);
    if(chk==10){
        swal("this email already exists!", "", "error");
    }
}


function edit(edt){
    var link="modaratorEdit.php?id=";
    var mainlink=link.concat(edt);
    swal({
      title: "Are you sure want to edit?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      return:false
    })
    .then((willDelete) => {
      if (willDelete) {
           window.open(mainlink, "_self");
      } 
    });
}




function dlt(dlt){
    
    var link="modaratorActiveDeactiveDelete.php?delete=";
    var mainlink=link.concat(dlt);
    swal({
      title: "Are you sure want to delete?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      return:false
    })
    .then((willDelete) => {
      if (willDelete) {
           window.open(mainlink, "_self");
      } 
    });
}




function deacts(deact){
    
    var link="modaratorActiveDeactiveDelete.php?active=";
    var mainlink=link.concat(deact);
    swal({
      title: "Are you sure want to Deactive?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      return:false
    })
    .then((willDelete) => {
      if (willDelete) {
           window.open(mainlink, "_self");
      } 
    });
}



function activ(aact){
    var link="modaratorActiveDeactiveDelete.php?deactive=";
    var mainlink=link.concat(aact);
    swal({
      title: "Are you sure want to Active?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      return:false
    })
    .then((willDelete) => {
      if (willDelete) {
           window.open(mainlink, "_self");
      } 
    });
}





var mdcceck=document.getElementById("mdcceck");
if(mdcceck){
    if(mdcceck.value==10){
        swal("this email already exists!", "", "error");
    
    }else if(mdcceck.value==5){
        swal("Done successfully!", "", "success");
       
    }
}
    


function adminFormvalid(){
    
    var modaname=document.modaaddform.modaname;
    if(modaname.value==""){
        swal("Please Enter Modarator or admin Name!", "", "error");
        return false;
    }


var modaimg=document.modaaddform.modaimg;
    if(modaimg.value==""){
        swal("Please upload image!", "", "error");
        return false;
    }


var modaemail=document.modaaddform.modaemail;
    if(modaemail.value==""){
        swal("Please Enter email!", "", "error");
        return false;
    }


var modapass=document.modaaddform.modapass;
    if(modapass.value==""){
        swal("Please Enter Password!", "", "error");
        return false;
    }


var modaphone=document.modaaddform.modaphone;
    if(modaphone.value==""){
        swal("Please Enter phone Number!", "", "error");
        return false;
    }


var address=document.modaaddform.address;
    if(address.value==""){
        swal("Please Enter Address!", "", "error");
        return false;
    }


var city=document.modaaddform.city;
    if(city.value==""){
        swal("Please Enter City!", "", "error");
        return false;
    }


var zip=document.modaaddform.zip;
    if(zip.value==""){
        swal("Please Enter Zip code!", "", "error");
        return false;
    }

}



function adminFormvalid2(){
    
    var modaname=document.modaaddform.modaname;
    if(modaname.value==""){
        swal("Please Enter Modarator or admin Name!", "", "error");
        return false;
    }




var modaemail=document.modaaddform.modaemail;
    if(modaemail.value==""){
        swal("Please Enter email!", "", "error");
        return false;
    }


var modapass=document.modaaddform.modapass;
    if(modapass.value==""){
        swal("Please Enter Password!", "", "error");
        return false;
    }


var modaphone=document.modaaddform.modaphone;
    if(modaphone.value==""){
        swal("Please Enter phone Number!", "", "error");
        return false;
    }


var address=document.modaaddform.address;
    if(address.value==""){
        swal("Please Enter Address!", "", "error");
        return false;
    }


var city=document.modaaddform.city;
    if(city.value==""){
        swal("Please Enter City!", "", "error");
        return false;
    }


var zip=document.modaaddform.zip;
    if(zip.value==""){
        swal("Please Enter Zip code!", "", "error");
        return false;
    }

}



var depertmentbtn=document.getElementById("depertmentbtn");
var subjectbtn=document.getElementById("subjectbtn");
var quatabtn=document.getElementById("quatabtn");
var addunitbtn=document.getElementById("addunitbtn");
var seatbtn=document.getElementById("seatbtn");
var allUnitbtn=document.getElementById("allUnitbtn");





var depertment=document.getElementById("depertment");
var subject=document.getElementById("subject");
var quata=document.getElementById("quata");
var addunit=document.getElementById("addunit"); 
var seat=document.getElementById("seat");
var allunits=document.getElementById("allunits");



if(seatbtn){
    seatbtn.addEventListener('click',function(){
        seatbtn.style.color='#101924';
        seatbtn.style.background='#A4CFFF';

        subjectbtn.style.color='#A4CFFF';
        subjectbtn.style.background='#101924';

        depertmentbtn.style.color='#A4CFFF';
        depertmentbtn.style.background='#101924';

        quatabtn.style.color='#A4CFFF';
        quatabtn.style.background='#101924';

        addunitbtn.style.color='#A4CFFF';
        addunitbtn.style.background='#101924';

        allUnitbtn.style.color='#A4CFFF';
        allUnitbtn.style.background='#101924';

        
        seat.style.display='block';
        depertment.style.display='none';
        subject.style.display='none';
        quata.style.display='none';
        addunit.style.display='none';
        allunits.style.display='none';
    

    })
}




if(depertmentbtn){
    depertmentbtn.addEventListener('click',function(){
        depertmentbtn.style.color='#101924';
        depertmentbtn.style.background='#A4CFFF';

        seatbtn.style.color='#A4CFFF';
        seatbtn.style.background='#101924';

        subjectbtn.style.color='#A4CFFF';
        subjectbtn.style.background='#101924';

        quatabtn.style.color='#A4CFFF';
        quatabtn.style.background='#101924';

        addunitbtn.style.color='#A4CFFF';
        addunitbtn.style.background='#101924';

        allUnitbtn.style.color='#A4CFFF';
        allUnitbtn.style.background='#101924';

       


        depertment.style.display='block';
        subject.style.display='none';
        quata.style.display='none';
        addunit.style.display='none';
        allunits.style.display='none';
        seat.style.display='none';

    })
}


if(quatabtn){
    quatabtn.addEventListener('click',function(){
        depertmentbtn.style.color='#A4CFFF';
        depertmentbtn.style.background='#101924';

        seatbtn.style.color='#A4CFFF';
        seatbtn.style.background='#101924';

        subjectbtn.style.color='#A4CFFF';
        subjectbtn.style.background='#101924';

        quatabtn.style.color='#101924';
        quatabtn.style.background='#A4CFFF';

        addunitbtn.style.color='#A4CFFF';
        addunitbtn.style.background='#101924';

        allUnitbtn.style.color='#A4CFFF';
        allUnitbtn.style.background='#101924';

       


        depertment.style.display='none';
        subject.style.display='none';
        quata.style.display='block';
        addunit.style.display='none';
        allunits.style.display='none';
       
        seat.style.display='none';

    })
}



if(subjectbtn){
    subjectbtn.addEventListener('click',function(){
        depertmentbtn.style.color='#A4CFFF';
        depertmentbtn.style.background='#101924';

        seatbtn.style.color='#A4CFFF';
        seatbtn.style.background='#101924';

        subjectbtn.style.color='#101924';
        subjectbtn.style.background='#A4CFFF';

        quatabtn.style.color='#A4CFFF';
        quatabtn.style.background='#101924';

        addunitbtn.style.color='#A4CFFF';
        addunitbtn.style.background='#101924';

        allUnitbtn.style.color='#A4CFFF';
        allUnitbtn.style.background='#101924';

        


        depertment.style.display='none';
        subject.style.display='block';
        quata.style.display='none';
        addunit.style.display='none';
        allunits.style.display='none';
        
        seat.style.display='none';

    })
}




if(addunitbtn){
    addunitbtn.addEventListener('click',function(){
        depertmentbtn.style.color='#A4CFFF';
        depertmentbtn.style.background='#101924';

        seatbtn.style.color='#A4CFFF';
        seatbtn.style.background='#101924';

        subjectbtn.style.color='#A4CFFF';
        subjectbtn.style.background='#101924';

        quatabtn.style.color='#A4CFFF';
        quatabtn.style.background='#101924';

        addunitbtn.style.color='#101924';
        addunitbtn.style.background='#A4CFFF';

        allUnitbtn.style.color='#A4CFFF';
        allUnitbtn.style.background='#101924';

       

        depertment.style.display='none';
        subject.style.display='none';
        quata.style.display='none';
        addunit.style.display='block';
        allunits.style.display='none';
       
        seat.style.display='none';

    })
}




if(allUnitbtn){
    allUnitbtn.addEventListener('click',function(){
        depertmentbtn.style.color='#A4CFFF';
        depertmentbtn.style.background='#101924';

        seatbtn.style.color='#A4CFFF';
        seatbtn.style.background='#101924';

        subjectbtn.style.color='#A4CFFF';
        subjectbtn.style.background='#101924';

        allUnitbtn.style.color='#101924';
        allUnitbtn.style.background='#A4CFFF';

        addunitbtn.style.color='#A4CFFF';
        addunitbtn.style.background='#101924';

        quatabtn.style.color='#A4CFFF';
        quatabtn.style.background='#101924';

       


        depertment.style.display='none';
        subject.style.display='none';
        quata.style.display='none';
        addunit.style.display='none';
        allunits.style.display='block';
        seat.style.display='none';

    })
}





var noticeallbtn=document.getElementById("noticeallbtn");
var noticeformebtn=document.getElementById("noticeformebtn");
var noticeaddbtn=document.getElementById("noticeaddbtn");

var NoticeAll=document.getElementById("NoticeAll");
var NoticeForMe=document.getElementById("NoticeForMe");
var NoticeAdd=document.getElementById("NoticeAdd"); 


if(noticeallbtn){
    noticeallbtn.addEventListener('click',function(){
        noticeallbtn.style.color='#101924';
        noticeallbtn.style.background='#A4CFFF';

        noticeformebtn.style.color='#A4CFFF';
        noticeformebtn.style.background='#101924 ';

        noticeaddbtn.style.color='#A4CFFF';
        noticeaddbtn.style.background='#101924 ';

        NoticeAll.style.display='block';
        NoticeForMe.style.display='none';
        NoticeAdd.style.display='none';
    })
}


if(noticeformebtn){
    noticeformebtn.addEventListener('click',function(){
        noticeformebtn.style.color='#101924';
        noticeformebtn.style.background='#A4CFFF';

        noticeallbtn.style.color='#A4CFFF';
        noticeallbtn.style.background='#101924 ';

        noticeaddbtn.style.color='#A4CFFF';
        noticeaddbtn.style.background='#101924 ';

        NoticeAll.style.display='none';
        NoticeForMe.style.display='block';
        NoticeAdd.style.display='none';
    })
}



if(noticeaddbtn){
    noticeaddbtn.addEventListener('click',function(){
        noticeaddbtn.style.color='#101924';
        noticeaddbtn.style.background='#A4CFFF';

        noticeallbtn.style.color='#A4CFFF';
        noticeallbtn.style.background='#101924 ';

        noticeformebtn.style.color='#A4CFFF';
        noticeformebtn.style.background='#101924 ';

        NoticeAll.style.display='none';
        NoticeForMe.style.display='none';
        NoticeAdd.style.display='block';
    })
}



$(document).ready(function() {
  
    noticeForMes(0);
    allNoticeForUni(0);
    modaratorAllshow(0);
    modaratorApproveShow(0);
    showdepertment(0);
    showdsubject(0);
    getqutas(0);
	getseat(0);
	getUnit(0);
	showpendingstudent(0);
	showapprovedstudent(0);
    showrejectstudent(0);
    shoresult(0);



    


    

    $('#noticeSearch').keyup(function(){
        var src=$('#noticeSearch').val();
        if (src=="") {
            allNoticeForUni(0);
        }else{
           $.ajax({
            url:'noticeSearch.php',
            data:'noticeSearch='+src,
            success:function(data){
                $('#NoticeAll').html(data);
            }
        }); 
        }
        
    });




    $('#modaratorunisearch').keyup(function(){
        var src=$('#modaratorunisearch').val();
        if (src=="") {
            modaratorAllshow(0);
        }else{
           $.ajax({
            url:'modaratorSearch.php',
            data:'modaratorSearch='+src,
            success:function(data){
                $('#modaratorallshows').html(data);
            }
        }); 
        }
        
    });


    $('#resutSearch').keyup(function(){
        var src=$('#resutSearch').val();
        if (src=="") {
            shoresult(0);
        }else{
           $.ajax({
            url:'resultSearch.php',
            data:'resultSearch='+src,
            success:function(data){
                $('#pendisgResult').html(data);
            }
        }); 
        }
        
    });



    showreseltPassed(0);
    showreseltfailed(0);
   
});

function showreseltfailed(page) {
    $.post('resultfailed.php?page=' + page, function(respos) {
        $('#failResult').html(respos);
    })
}


function showreseltPassed(page) {
    $.post('resultPassed.php?page=' + page, function(respos) {
        $('#PassedResult').html(respos);
    })
}


function shoresult(page) {
    $.post('resultshow.php?page=' + page, function(respos) {
        $('#pendisgResult').html(respos);
    })
}

function showapprovedstudent(page) {
    $.post('allapprovestudent.php?page=' + page, function(respos) {
        $('#allApprovedStudent').html(respos);
    })
}


function showrejectstudent(page) {
    $.post('allrejectStudent.php?page=' + page, function(respos) {
        $('#allRejectStudent').html(respos);
    })
}

function showpendingstudent(page) {
    $.post('approvePendingstudent.php?page=' + page, function(respos) {
        $('#allPendingStudent').html(respos);
    })
}

function getUnit(page) {
    $.post('requerUnitShow.php?page=' + page, function(respos) {
        $('#allunits').html(respos);
    })
}




function getseat(page) {
    $.post('requerSeatShow.php?page=' + page, function(respos) {
        $('#showSeat').html(respos);
    })
}

function getqutas(page) {
    $.post('requerQoutaShow.php?page=' + page, function(respos) {
        $('#showquta').html(respos);
    })
}

function showdsubject(page) {
    $.post('requerSubjectShow.php?page=' + page, function(respos) {
        $('#subjectshow').html(respos);
    })
}

function showdepertment(page) {
    $.post('requermentDepertmentShow.php?page=' + page, function(respos) {
        $('#depertmentshow').html(respos);
    })
}


function modaratorAllshow(page) {
    $.post('modaratorAllShow.php?page=' + page, function(respos) {
        $('#modaratorallshows').html(respos);
    })
}

function modaratorApproveShow(page) {
    $.post('modaratorApproveShow.php?page=' + page, function(respos) {
        $('#modaratorapproveshows').html(respos);
    })
}




function noticeForMes(page) {
    $.post('noticeForMe.php?page=' + page, function(respos) {
        $('#NoticeForMe').html(respos);
    })
}


function allNoticeForUni(page) {
    $.post('noticeAll.php?page=' + page, function(respos) {
        $('#NoticeAll').html(respos);
    })
}



var modaratorallbtn=document.getElementById("modaratorallbtn");
var modaratorapprove=document.getElementById("modaratorapprove");
var modaratoradd=document.getElementById("modaratoradd");

var modaratorallshows=document.getElementById("modaratorallshows");
var modaratorapproveshows=document.getElementById("modaratorapproveshows");
var modaratoraddsow=document.getElementById("modaratoraddsow"); 



var allApprovedStudent=document.getElementById("allApprovedStudent");
var allPendingStudent=document.getElementById("allPendingStudent");
var allRejectStudent=document.getElementById("modaratoraddsow"); 


if(modaratorallbtn){
    modaratorallbtn.addEventListener('click',function(){
        modaratorallbtn.style.color='#101924';
        modaratorallbtn.style.background='#A4CFFF';

        modaratorapprove.style.color='#A4CFFF';
        modaratorapprove.style.background='#101924 ';

        modaratoradd.style.color='#A4CFFF';
        modaratoradd.style.background='#101924 ';

        modaratorallshows.style.display='block';
        modaratorapproveshows.style.display='none';
        modaratoraddsow.style.display='none';
    })
}


if(modaratorapprove){
    modaratorapprove.addEventListener('click',function(){
        modaratorapprove.style.color='#101924';
        modaratorapprove.style.background='#A4CFFF';

        modaratorallbtn.style.color='#A4CFFF';
        modaratorallbtn.style.background='#101924 ';

        modaratoradd.style.color='#A4CFFF';
        modaratoradd.style.background='#101924 ';

        modaratorallshows.style.display='none';
        modaratorapproveshows.style.display='block';
        modaratoraddsow.style.display='none';
    })
}



if(modaratoradd){
    modaratoradd.addEventListener('click',function(){
        modaratoradd.style.color='#101924';
        modaratoradd.style.background='#A4CFFF';

        modaratorallbtn.style.color='#A4CFFF';
        modaratorallbtn.style.background='#101924 ';

        modaratorapprove.style.color='#A4CFFF';
        modaratorapprove.style.background='#101924 ';

        modaratorallshows.style.display='none';
        modaratorapproveshows.style.display='none';
        modaratoraddsow.style.display='block';
    })
}







var allapr=document.getElementById("allapr");
var allpend=document.getElementById("allpend");
var allrej=document.getElementById("allrej"); 


var allApprovedStudent=document.getElementById("allApprovedStudent");
var allPendingStudent=document.getElementById("allPendingStudent");
var allRejectStudent=document.getElementById("allRejectStudent"); 


if(allapr){
    allapr.addEventListener('click',function(){
        allapr.style.color='#101924';
        allapr.style.background='#A4CFFF';

        allpend.style.color='#A4CFFF';
        allpend.style.background='#101924 ';

        allrej.style.color='#A4CFFF';
        allrej.style.background='#101924 ';

        allApprovedStudent.style.display='block';
        allPendingStudent.style.display='none';
        allRejectStudent.style.display='none';
    })
}



if(allpend){
    allpend.addEventListener('click',function(){
        allpend.style.color='#101924';
        allpend.style.background='#A4CFFF';

        allrej.style.color='#A4CFFF';
        allrej.style.background='#101924 ';

        allapr.style.color='#A4CFFF';
        allapr.style.background='#101924 ';

        allApprovedStudent.style.display='none';
        allPendingStudent.style.display='block';
        allRejectStudent.style.display='none';
    })
}



if(allrej){
    allrej.addEventListener('click',function(){
        allrej.style.color='#101924';
        allrej.style.background='#A4CFFF';

        allapr.style.color='#A4CFFF';
        allapr.style.background='#101924 ';

        allpend.style.color='#A4CFFF';
        allpend.style.background='#101924 ';

        allApprovedStudent.style.display='none';
        allPendingStudent.style.display='none';
        allRejectStudent.style.display='block';
    })
}




var pendinstudent=document.getElementById("pendinstudent");
var passStudent=document.getElementById("passStudent");
var failrStudent=document.getElementById("failrStudent"); 



var pendisgResult=document.getElementById("pendisgResult");
var PassedResult=document.getElementById("PassedResult");
var failResult=document.getElementById("failResult"); 


if(pendinstudent){
    pendinstudent.addEventListener('click',function(){
        pendinstudent.style.color='#101924';
        pendinstudent.style.background='#A4CFFF';

        passStudent.style.color='#A4CFFF';
        passStudent.style.background='#101924 ';

        failrStudent.style.color='#A4CFFF';
        failrStudent.style.background='#101924 ';

        pendisgResult.style.display='block';
        PassedResult.style.display='none';
        failResult.style.display='none';
    })
}



if(passStudent){
    passStudent.addEventListener('click',function(){
        passStudent.style.color='#101924';
        passStudent.style.background='#A4CFFF';

        pendinstudent.style.color='#A4CFFF';
        pendinstudent.style.background='#101924 ';

        failrStudent.style.color='#A4CFFF';
        failrStudent.style.background='#101924 ';

        pendisgResult.style.display='none';
        PassedResult.style.display='block';
        failResult.style.display='none';
    })
}


if(failrStudent){
    failrStudent.addEventListener('click',function(){
        failrStudent.style.color='#101924';
        failrStudent.style.background='#A4CFFF';

        pendinstudent.style.color='#A4CFFF';
        pendinstudent.style.background='#101924 ';

        passStudent.style.color='#A4CFFF';
        passStudent.style.background='#101924 ';

        pendisgResult.style.display='none';
        PassedResult.style.display='none';
        failResult.style.display='block';
    })
}

var la=document.getElementById("lat");
var ln=document.getElementById("lng");
//google location
    if(la && ln){
        var la=la.value;
    var ln=ln.value;
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
}


