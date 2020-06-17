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
        document.getElementById("errorShow").innerHTML="Please Admin/Modarator Name";
        return false;
    }
    if(modaimg.value==""){
        document.getElementById("errorShow").innerHTML="Please Upload Image";
        return false;
    }

    if(modaemail.value==""){
        document.getElementById("errorShow").innerHTML="Please Enter Email";
        return false;
    }
    if(modapass.value==""){
        document.getElementById("errorShow").innerHTML="Please Password";
        return false;
    }

    if(modaphone.value==""){
        document.getElementById("errorShow").innerHTML="Please Enter Phone";
        return false;
    }
    if(zip.value==""){
        document.getElementById("errorShow").innerHTML="Please Enter Zip code";
        return false;
    }

    if(address.value==""){
        document.getElementById("errorShow").innerHTML="Please Enter Address";
        return false;
    }
    if(city.value==""){
        document.getElementById("errorShow").innerHTML="Please Enter City";
        return false;
    }
}





$(document).ready(function(){
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
        $('#amidnMOdaratoList').html(respos);
    })
}



function approveModarator(page) {
    $.post('modaratorApprove.php?page=' + page, function(respos) {
        $('#approveModarator').html(respos);
    })
}


