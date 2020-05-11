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


   
});


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
var modaratoraddsows=document.getElementById("modaratoraddsows"); 


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
        modaratoraddsows.style.display='none';
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
        modaratoraddsows.style.display='none';
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
        modaratoraddsows.style.display='block';
    })
}
