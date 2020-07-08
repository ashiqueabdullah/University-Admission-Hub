
function formvalidation2(){
    var name=document.modaratorAddform.modaname;
    var modaemail=document.modaratorAddform.modaemail;
    var modapass=document.modaratorAddform.modapass;
    var modaphone=document.modaratorAddform.modaphone;
    var address=document.modaratorAddform.address;
    var city=document.modaratorAddform.city;
    var zip=document.modaratorAddform.zip;
    if(name.value==""){
        swal("Please Admin/Modarator Name!", "", "error");
        return false;
    }
   

    if(modaemail.value==""){
        swal("Please Enter Email!", "", "error");
        return false;
    }
    if(modapass.value==""){
        swal("Please Enter Password!", "", "error");
        return false;
    }

    if(modaphone.value==""){
        swal("Please Enter Phone Number!", "", "error");
        return false;
    }
    if(zip.value==""){
        swal("Please Enter Zip code!", "", "error");
        return false;
    }

    if(address.value==""){
        swal("Please Enter Address!", "", "error");
        return false;
    }
    if(city.value==""){
        swal("Please Enter City!", "", "error");
        return false;
    }
}



var chck=document.getElementById("chck");
if(chck){
if(chck.value==10){
    swal("This email already exists!", "", "error");
    
}else if(chck.value==5){
    swal("Done successfully!", "", "success");
    
}
}


function chekform(){
    var title=document.adminnotice.title;
    if(title.value==""){
        swal("Please Enter title!", "", "error");
        return false;
    }


   

var whome=document.adminnotice.whome;
    if(whome.value==""){
        swal("Please Select Student/University or Both!", "", "error");
        return false;
    }



var description=document.adminnotice.description;
    if(description.value==""){
        swal("Write Some description!", "", "error");
        return false;
    }



}



function pmtrej(id){
    var link="paymentDeleteApprove.php?rejectfromapprove=";
    var mainlink=link.concat(id);
    swal({
      title: "Are you sure want to Reject?",
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



function pmappr(id){
    var link="paymentDeleteApprove.php?approve=";
    var mainlink=link.concat(id);
    swal({
      title: "Are you sure want to Approve?",
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

//form validation
function formvalidation(){
    var name=document.modaratorAddform.modaname;
    var modaimg=document.modaratorAddform.modaimg;
    var modaemail=document.modaratorAddform.modaemail;
    var modapass=document.modaratorAddform.modapass;
    var modaphone=document.modaratorAddform.modaphone;
    var address=document.modaratorAddform.address;
    var city=document.modaratorAddform.city;
    var zip=document.modaratorAddform.zip;
    if(name.value==""){
        swal("Please Admin/Modarator Name!", "", "error");
        return false;
    }
    if(modaimg.value==""){
        swal("Please Upload Image!", "", "error");
        return false;
    }

    if(modaemail.value==""){
        swal("Please Enter Email!", "", "error");
        return false;
    }
    if(modapass.value==""){
        swal("Please Enter Password!", "", "error");
        return false;
    }

    if(modaphone.value==""){
        swal("Please Enter Phone Number!", "", "error");
        return false;
    }
    if(zip.value==""){
        swal("Please Enter Zip code!", "", "error");
        return false;
    }

    if(address.value==""){
        swal("Please Enter Address!", "", "error");
        return false;
    }
    if(city.value==""){
        swal("Please Enter City!", "", "error");
        return false;
    }
}





$(document).ready(function(){


    //google location
    var la=document.getElementById("lat");
    var ln=document.getElementById("lng");
    if (la && ln) {
    var la=document.getElementById("lat").value;
    var ln=document.getElementById("lng").value;
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


    $('.studentsearchs').keyup(function(){
        var src=$('.studentsearchs').val();
        if (src=="") {
            loadstudent(0);
        }else{
           $.ajax({
            url:'studentSearch.php',
            data:'stdsearch='+src,
            success:function(data){
                $('#allStudent').html(data);
            }
        }); 
        }
        
    });



    $('#universitySearch').keyup(function(){
        var src=$('#universitySearch').val();
        if (src=="") {
            uniall(0);
        }else{
           $.ajax({
            url:'universitySearch.php',
            data:'stdsearch='+src,
            success:function(data){
                $('#alluni').html(data);
            }
        }); 
        }
        
    });


    $('#mymodasearch').keyup(function(){
        var src=$('#mymodasearch').val();
        if (src=="") {
            modaratorAdmin(0);
        }else{
           $.ajax({
            url:'adminModaSearch.php',
            data:'adminmodasearch='+src,
            success:function(data){
                $('#amidnMOdaratoList').html(data);
            }
        }); 
        }
    });




    $('#wantApproveModa').keyup(function(){
        var src=$('#wantApproveModa').val();
        if (src=="") {
            approveModarator(0);
        }else{
           $.ajax({
            url:'modaratorWantSearch.php',
            data:'wantApproveModa='+src,
            success:function(data){
                $('#approveModarator').html(data);
            }
        }); 
        }
    });







     $('#modaratorAllList').keyup(function(){
        var src=$('#modaratorAllList').val();
        if (src=="") {
            modaratorAll(0);
        }else{
           $.ajax({
            url:'modaratorAllSearch.php',
            data:'wantApproveMod='+src,
            success:function(data){
                $('#modaratorAll').html(data);
            }
        }); 
        }
    });







})


var mymodarator = document.getElementById('mymodarator');
var pendingModaraotr = document.getElementById('pendingModaraotr');
var approvedModarator = document.getElementById('approvedModarator');
var newModarator = document.getElementById('newModarator');


var mymoda = document.getElementById('mymoda');
var penmoda = document.getElementById('penmoda');
var apmoda = document.getElementById('apmoda');
var addmoda = document.getElementById('addmoda');

if (mymodarator) {
    mymodarator.addEventListener('click', function() {

        mymodarator.style.color = "white";
        mymodarator.style.background = "#798BFF";

        pendingModaraotr.style.color = "#A4CFFF";
        pendingModaraotr.style.background = "#101924";

        approvedModarator.style.color = "#A4CFFF";
        approvedModarator.style.background = "#101924";


        newModarator.style.color = "#A4CFFF";
        newModarator.style.background = "#101924";


        mymoda.style.display = "block";
        penmoda.style.display = "none";
        apmoda.style.display = "none";
        addmoda.style.display = "none";
    });
}




if (pendingModaraotr) {
    pendingModaraotr.addEventListener('click', function() {

        pendingModaraotr.style.color = "white";
        pendingModaraotr.style.background = "#798BFF";

        mymodarator.style.color = "#A4CFFF";
        mymodarator.style.background = "#101924";

        approvedModarator.style.color = "#A4CFFF";
        approvedModarator.style.background = "#101924";


        newModarator.style.color = "#A4CFFF";
        newModarator.style.background = "#101924";


        mymoda.style.display = "none";
        penmoda.style.display = "block";
        apmoda.style.display = "none";
        addmoda.style.display = "none";
    });
}





if (approvedModarator) {
    approvedModarator.addEventListener('click', function() {

        approvedModarator.style.color = "white";
        approvedModarator.style.background = "#798BFF";

        mymodarator.style.color = "#A4CFFF";
        mymodarator.style.background = "#101924";

        pendingModaraotr.style.color = "#A4CFFF";
        pendingModaraotr.style.background = "#101924";


        newModarator.style.color = "#A4CFFF";
        newModarator.style.background = "#101924";


        mymoda.style.display = "none";
        penmoda.style.display = "none";
        apmoda.style.display = "block";
        addmoda.style.display = "none";
    });
}




if (newModarator) {
    newModarator.addEventListener('click', function() {

        newModarator.style.color = "white";
        newModarator.style.background = "#798BFF";

        mymodarator.style.color = "#A4CFFF";
        mymodarator.style.background = "#101924";

        pendingModaraotr.style.color = "#A4CFFF";
        pendingModaraotr.style.background = "#101924";

        approvedModarator.style.color = "#A4CFFF";
        approvedModarator.style.background = "#101924";

        mymoda.style.display = "none";
        penmoda.style.display = "none";
        apmoda.style.display = "none";
        addmoda.style.display = "block";
    });
}









var allpa = document.getElementById('allpa');
var penpa = document.getElementById('penpa');
var aprpa = document.getElementById('aprpa');
var approvepayment = document.getElementById('approvepayment');
var pendingpayments = document.getElementById('pendingpayments');
var rejectpayment = document.getElementById('rejectpayment');

if (aprpa) {
    aprpa.addEventListener('click', function() {
        aprpa.style.color = "white";
        aprpa.style.background = "#798BFF";

        allpa.style.color = "#A4CFFF";
        allpa.style.background = "#101924";

        penpa.style.color = "#A4CFFF";
        penpa.style.background = "#101924";


        pendingpayments.style.display = "none";
        rejectpayment.style.display = "block";
        approvepayment.style.display = "none";
    });
}



if (allpa) {
    allpa.addEventListener('click', function() {
        allpa.style.color = "white";
        allpa.style.background = "#798BFF";

        penpa.style.color = "#A4CFFF";
        penpa.style.background = "#101924";

        aprpa.style.color = "#A4CFFF";
        aprpa.style.background = "#101924";

        pendingpayments.style.display = "none";
        rejectpayment.style.display = "none";
        approvepayment.style.display = "block";
    });
}

if (penpa) {
    penpa.addEventListener('click', function() {
        penpa.style.color = "white";
        penpa.style.background = "#798BFF";

        allpa.style.color = "#A4CFFF";
        allpa.style.background = "#101924";

        aprpa.style.color = "#A4CFFF";
        aprpa.style.background = "#101924";

        pendingpayments.style.display = "block";
        rejectpayment.style.display = "none";
        approvepayment.style.display = "none";
    });
}



//admit show Js End
var allstd = document.getElementById('allstd');
var penstd = document.getElementById('penstd');
var apstd = document.getElementById('apstd');
var hold = document.getElementById('hold');
var allStudent = document.getElementById('allStudent');
var allApproveStudent = document.getElementById('allApproveStudent');
var allPendingStudent = document.getElementById('allPendingStudent');
var studentHold = document.getElementById('studentHold');


if (hold) {
    hold.addEventListener('click', function() {
        hold.style.color = "white";
        hold.style.background = "#798BFF";

        allstd.style.color = "#A4CFFF";
        allstd.style.background = "#101924";

        penstd.style.color = "#A4CFFF";
        penstd.style.background = "#101924";

        apstd.style.color = "#A4CFFF";
        apstd.style.background = "#101924";

        allApproveStudent.style.display = "none";
        allPendingStudent.style.display = "none";
        allStudent.style.display = "none";
        studentHold.style.display = "block";
    });
}



if (allstd) {
    allstd.addEventListener('click', function() {
        allstd.style.color = "white";
        allstd.style.background = "#798BFF";

        penstd.style.color = "#A4CFFF";
        penstd.style.background = "#101924";

        hold.style.color = "#A4CFFF";
        hold.style.background = "#101924";

        apstd.style.color = "#A4CFFF";
        apstd.style.background = "#101924";

        allApproveStudent.style.display = "none";
        allPendingStudent.style.display = "none";
        studentHold.style.display = "none";
        allStudent.style.display = "block";
    });
}

if (penstd) {
    penstd.addEventListener('click', function() {
        penstd.style.color = "white";
        penstd.style.background = "#798BFF";

        allstd.style.color = "#A4CFFF";
        allstd.style.background = "#101924";

        apstd.style.color = "#A4CFFF";
        apstd.style.background = "#101924";

        hold.style.color = "#A4CFFF";
        hold.style.background = "#101924";

        studentHold.style.display = "none";
        allApproveStudent.style.display = "none";
        allPendingStudent.style.display = "block";
        allStudent.style.display = "none";
    });
}

if (apstd) {
    apstd.addEventListener('click', function() {
        penstd.style.color = "#A4CFFF";
        penstd.style.background = "#101924";

        allstd.style.color = "#A4CFFF";
        allstd.style.background = "#101924";

        apstd.style.color = "white";
        apstd.style.background = "#798BFF";

        hold.style.color = "#A4CFFF";
        hold.style.background = "#101924";

        studentHold.style.display = "none";
        allApproveStudent.style.display = "block";
        allPendingStudent.style.display = "none";
        allStudent.style.display = "none";
    });
}





var allsuni = document.getElementById('allsuni');
var penuni = document.getElementById('penuni');
var apuni = document.getElementById('apuni');
var unihold = document.getElementById('unihold');
var alluni = document.getElementById('alluni');
var allPendinguni = document.getElementById('allPendinguni');
var allApproveuni = document.getElementById('allApproveuni');
var universityHold = document.getElementById('universityHold');


if (unihold) {
    unihold.addEventListener('click', function() {
        unihold.style.color = "white";
        unihold.style.background = "#798BFF";

        allsuni.style.color = "#A4CFFF";
        allsuni.style.background = "#101924";

        penuni.style.color = "#A4CFFF";
        penuni.style.background = "#101924";

        apuni.style.color = "#A4CFFF";
        apuni.style.background = "#101924";

        allApproveuni.style.display = "none";
        allPendinguni.style.display = "none";
        alluni.style.display = "none";
        universityHold.style.display = "block";
    });
}


if (allsuni) {
    allsuni.addEventListener('click', function() {
        allsuni.style.color = "white";
        allsuni.style.background = "#798BFF";

        penuni.style.color = "#A4CFFF";
        penuni.style.background = "#101924";

        unihold.style.color = "#A4CFFF";
        unihold.style.background = "#101924";

        apuni.style.color = "#A4CFFF";
        apuni.style.background = "#101924";

        universityHold.style.display = "none";
        allApproveuni.style.display = "none";
        allPendinguni.style.display = "none";
        alluni.style.display = "block";
    });
}

if (penuni) {
    penuni.addEventListener('click', function() {
        penuni.style.color = "white";
        penuni.style.background = "#798BFF";

        allsuni.style.color = "#A4CFFF";
        allsuni.style.background = "#101924";

        unihold.style.color = "#A4CFFF";
        unihold.style.background = "#101924";

        apuni.style.color = "#A4CFFF";
        apuni.style.background = "#101924";

        universityHold.style.display = "none";
        allApproveuni.style.display = "none";
        allPendinguni.style.display = "block";
        alluni.style.display = "none";
    });
}

if (apuni) {
    apuni.addEventListener('click', function() {
        penuni.style.color = "#A4CFFF";
        penuni.style.background = "#101924";

        allsuni.style.color = "#A4CFFF";
        allsuni.style.background = "#101924";

        unihold.style.color = "#A4CFFF";
        unihold.style.background = "#101924";

        apuni.style.color = "white";
        apuni.style.background = "#798BFF";

        universityHold.style.display = "none";
        allApproveuni.style.display = "block";
        allPendinguni.style.display = "none";
        alluni.style.display = "none";
    });
}









var allnotice = document.getElementById('allnotice');
var ntfstd = document.getElementById('ntfstd');
var ntfuni = document.getElementById('ntfuni');
var showall = document.getElementById('showall');
var showstd = document.getElementById('showstd');
var showuni = document.getElementById('showuni');
var addntf = document.getElementById('addntf');
var addnt = document.getElementById('addnt');
var aprntf = document.getElementById('aprntf');
var apnotic = document.getElementById('apnotic');


if (allnotice) {
    allnotice.addEventListener('click', function() {
        allnotice.style.color = "white";
        allnotice.style.background = "#798BFF";

        ntfstd.style.color = "#A4CFFF";
        ntfstd.style.background = "#101924";

        ntfuni.style.color = "#A4CFFF";
        ntfuni.style.background = "#101924";

        addntf.style.color = "#A4CFFF";
        addntf.style.background = "#101924";

         aprntf.style.color = "#A4CFFF";
        aprntf.style.background = "#101924";

        showstd.style.display = "none";
        showuni.style.display = "none";
        showall.style.display = "block";
        addnt.style.display = "none";
        apnotic.style.display = "none";
    });
}

if (ntfstd) {
    ntfstd.addEventListener('click', function() {
        ntfstd.style.color = "white";
        ntfstd.style.background = "#798BFF";

        allnotice.style.color = "#A4CFFF";
        allnotice.style.background = "#101924";

        ntfuni.style.color = "#A4CFFF";
        ntfuni.style.background = "#101924";


        addntf.style.color = "#A4CFFF";
        addntf.style.background = "#101924";

         aprntf.style.color = "#A4CFFF";
        aprntf.style.background = "#101924";

        showstd.style.display = "none";
        showuni.style.display = "block";
        showall.style.display = "none";
        addnt.style.display = "none";
        apnotic.style.display = "none";
    });
}

if (ntfuni) {
    ntfuni.addEventListener('click', function() {
        ntfstd.style.color = "#A4CFFF";
        ntfstd.style.background = "#101924";

        allnotice.style.color = "#A4CFFF";
        allnotice.style.background = "#101924";

        ntfuni.style.color = "white";
        ntfuni.style.background = "#798BFF";


        addntf.style.color = "#A4CFFF";
        addntf.style.background = "#101924";

         aprntf.style.color = "#A4CFFF";
        aprntf.style.background = "#101924";

        showstd.style.display = "block";
        showuni.style.display = "none";
        showall.style.display = "none";
        addnt.style.display = "none";
        apnotic.style.display = "none";
    });
}


if (addntf) {
    addntf.addEventListener('click', function() {
        ntfstd.style.color = "#A4CFFF";
        ntfstd.style.background = "#101924";

        allnotice.style.color = "#A4CFFF";
        allnotice.style.background = "#101924";

        ntfuni.style.color = "#A4CFFF";
        ntfuni.style.background = "#101924";


        addntf.style.color = "white";
        addntf.style.background = "#798BFF";


        aprntf.style.color = "#A4CFFF";
        aprntf.style.background = "#101924";

        showstd.style.display = "none";
        showuni.style.display = "none";
        showall.style.display = "none";
        addnt.style.display = "block";
        apnotic.style.display = "none";
    });
}


if (aprntf) {
    aprntf.addEventListener('click', function() {
        ntfstd.style.color = "#A4CFFF";
        ntfstd.style.background = "#101924";

        allnotice.style.color = "#A4CFFF";
        allnotice.style.background = "#101924";

        ntfuni.style.color = "#A4CFFF";
        ntfuni.style.background = "#101924";


        addntf.style.color = "#A4CFFF";
        addntf.style.background = "#101924";


        aprntf.style.color = "white";
        aprntf.style.background = "#798BFF";

        showstd.style.display = "none";
        showuni.style.display = "none";
        showall.style.display = "none";
        addnt.style.display = "none";
        apnotic.style.display = "block";
    });
}










var admod=document.getElementById('admod');
var outer=document.getElementById('outer');
var cros=document.getElementById('cros');



if (admod) {
    admod.addEventListener('click',function(){
       outer.style.display='block';
       outer.style.transform='scale(1)';
       outer.style.transition='.3s';
       console.log("ok");

    })
}
if (cros) {
    cros.addEventListener('click',function(){
       outer.style.display="none" 
       outer.style.transform='scale(.2)';
       outer.style.transition='.3s';
    })
}




$(document).ready(function() {




    appromdarator(0);
    loadstudent(0);
    loadpen(0);
    loadapr(0);
    uniapr(0);
    unipen(0);
    uniall(0);
    modaratorAdmin(0);
    approveModarator(0);
    noticeForStudent(0);
    noticeForUniversity(0);
    noticewantApprove(0);
    noticeApprove(0);
    getAllHoldStudent(0);
    getAllHoldUniversity(0);
    paymentapproved(0);
    paymentpending(0);
    paymentRejects(0);
    modaratorAll(0);
    
});


function modaratorAll(page) {
    $.post('modaratorAll.php?page=' + page, function(respos) {
        $('#modaratorAll').html(respos);
    })
}

function paymentapproved(page) {
    $.post('paymentApprove.php?page=' + page, function(respos) {
        $('#approvepayment').html(respos);
    })
}

function paymentpending(page) {
    $.post('paymentPending.php?page=' + page, function(respos) {
        $('#pendingpayments').html(respos);
    })
}

function paymentRejects(page) {
    $.post('paymentReject.php?page=' + page, function(respos) {
        $('#rejectpayment').html(respos);
    })
}







function getAllHoldUniversity(page) {
    $.post('universityHold.php?page=' + page, function(respos) {
        $('#universityHold').html(respos);
    })
}

function getAllHoldStudent(page) {
    $.post('studenthold.php?page=' + page, function(respos) {
        $('#studentHold').html(respos);
    })
}

function noticeApprove(page) {
    $.post('noticeApprove.php?page=' + page, function(respos) {
        $('#apnotic').html(respos);
    })
}

function noticewantApprove(page) {
    $.post('noticeWantApprove.php?page=' + page, function(respos) {
        $('#showall').html(respos);
    })
}


function noticeForUniversity(page) {
    $.post('noticeForUniversity.php?page=' + page, function(respos) {
        $('#showuni').html(respos);
    })
}


function noticeForStudent(page) {
    $.post('noticeForStudent.php?page=' + page, function(respos) {
        $('#showstd').html(respos);
    })
}



function loadstudent(page) {
    $.post('studentall.php?page=' + page, function(respos) {
        $('#allStudent').html(respos);
    })
}

function loadpen(page) {
    $.post('studentPending.php?page=' + page, function(respos) {
        $('#allPendingStudent').html(respos);
    })
}

function loadapr(page) {
    $.post('studentApprove.php?page=' + page, function(respos) {
        $('#allApproveStudent').html(respos);
    })
}


function uniapr(page) {
    $.post('universityApprove.php?page=' + page, function(respos) {
        $('#allApproveuni').html(respos);
    })
}


function unipen(page) {
    $.post('universityPending.php?page=' + page, function(respos) {
        $('#allPendinguni').html(respos);
    })
}


function uniall(page) {
    $.post('universityAll.php?page=' + page, function(respos) {
        $('#alluni').html(respos);
    })
}

function modaratorAdmin(page) {
    $.post('modaratorAdmin.php?page=' + page, function(respos) {
        $('#mymoda').html(respos);
    })
}



function approveModarator(page) {
    $.post('modaratorApprove.php?page=' + page, function(respos) {
        $('#penmoda').html(respos);
    })
}



function appromdarator(page) {
    $.post('modaratorApproved.php?page=' + page, function(respos) {
        $('#apmoda').html(respos);
    })
}





