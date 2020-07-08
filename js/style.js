
var loginerrors=document.getElementById("loginerror").value;
if(loginerrors==10){
	swal("Login Failed!", "Password and Email dont mathc!", "error");
}else if(loginerrors==2){
	swal("Login Failed!", "The administration is monitoring your account!", "error");
}

var stdsubcheck=document.getElementById("stdsubcheck").value;
if(stdsubcheck==10){
	swal("Registation Failed!", "This email allready exsist!", "error");
}else if(stdsubcheck==5){
	swal("Success!", "Registation Successfully done!", "success");
}else if(stdsubcheck==2){
	swal("Registation Failed!", "This roll and registation id allready exsist!", "error");
}


var unisubcheck=document.getElementById("unisubcheck").value;
if(unisubcheck==10){
	swal("Registation Failed!", "This University allready registered!", "error");
}else if(unisubcheck==5){
	swal("Success!", "University registation Successfully done!", "success");
}

var loginBox = document.getElementById("loginBox");
var student = document.getElementById("student");
var univerity = document.getElementById("univerity");

var getUser = document.getElementById("getUser");
var addUniversity = document.getElementById("addUniversity");



var signFormStudent = document.getElementById("signFormStudent");
var signFormUniversity = document.getElementById("signFormUniversity");


// var std=document.getElementById('std');
// var std_reg=document.querySelector('.studer_reg');
// var uni =document.getElementById('uni');
// var uni_reg=document.querySelector('.uni_reg');
// var std_cross=document.getElementById('std_cross');
// var uni_cross=document.getElementById('uni_cross');

if (getUser) {
	getUser.addEventListener('click',function(){
		student.style.display='block';
		loginBox.style.display='none';
		univerity.style.display='none';
	});
}

if (addUniversity) {
	addUniversity.addEventListener('click',function(){
		student.style.display='none';
		loginBox.style.display='none';
		univerity.style.display='block';
	});
}


if (signFormStudent) {
	signFormStudent.addEventListener('click',function(){
		student.style.display='none';
		loginBox.style.display='block';
		univerity.style.display='none';
	});
}


if (signFormUniversity) {
	signFormUniversity.addEventListener('click',function(){
		student.style.display='none';
		loginBox.style.display='block';
		univerity.style.display='none';
	});
}





$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})



function unvelidetion(){
	var uname=document.getElementById('uname').value;
	var rgcode=document.getElementById('rgcode').value;
	var unimage=document.getElementById('unimage').value;
	var division=document.getElementById('division').value;
	var zcode=document.getElementById('zcode').value;
	var city=document.getElementById('city').value;
	var phone=document.getElementById('phone').value;
	var email=document.getElementById('email').value;
	var pass=document.getElementById('pass').value;
	var vrpasss=document.getElementById('vrpasss').value;
	
	var lat=document.getElementById('lat').value;
	var lan=document.getElementById('lan').value;
	var sing=document.getElementById('sing').value;

	if (uname=="") {
		swal("University Name!", "Please Enter University name", "error");
		return false;
	}

	if (!isNaN(uname)) {
		swal("University Name!!", "Number are not allowed", "error");
		return false;
	}

	if (rgcode=="") {
		swal("University code!", "Please Enter University code", "error");
		return false;
	}

	if (unimage=="") {
		swal("University Image!", "Please Upload image", "error");
		return false;
	}

	if (division=="") {
		swal("University Divisition!", "Please select divisition", "error");
		return false;
	}


	if (zcode=="") {
		swal("University Zip code!", "Please Enter zip code", "error");
		return false;
	}

	if (isNaN(zcode)) {
		swal("University zip code!!", "Only number are allowed", "error");
		return false;
	}

	if (city=="") {
		swal("University city!", "Please Enter city", "error");
		return false;
	}

	if (phone=="") {
		swal("University phone!", "Please Enter phone number", "error");
		return false;
	}

	if (isNaN(phone)) {
		swal("University phone!!", "Only number are allowed", "error");
		return false;
	}

	if (email=="") {
		swal("University email!", "Please Enter email", "error");
		return false;
	}




	if (pass=="") {
		swal("Password!", "Please enter Password", "error");
		return false;
	}


	if (vrpasss=="") {
		swal("Password!", "Password enter verify password", "error");
		return false;
	}

	if (pass!=vrpasss) {
		swal("Password!", "Password are dont mathc", "error");
		return false;
	}


	if (lat=="") {
		swal("Goole location Latitude!", "Please Enter Latitude", "error");
		return false;
	}

	if (lan=="") {
		swal("Goole location long altitude!", "Please Enter long altitude", "error");
		return false;
	}
	if (sing=="") {
		swal("Signature image!", "Please Upload Signature image", "error");
		return false;
	}

}








function stvelidetion(){
	var sfname=document.getElementById('sfname').value;
	var slname=document.getElementById('slname').value;
	var sdate=document.getElementById('sdate').value;
	var radio=document.getElementsByName('radio');
	var sphone=document.getElementById('sphone').value;
	
	var semail=document.getElementById('semail').value;
	var spass=document.getElementById('spass').value;
	var svpass=document.getElementById('svpass').value;
	var cnt=document.getElementById('cnt').value;


	var sscroll=document.getElementById('sscroll').value;
	var sscregis=document.getElementById('sscregis').value;
	var hscroll=document.getElementById('hscroll').value;
	var hscreg=document.getElementById('hscreg').value;

	
	if (sscroll=="") {
		swal("SSC Roll!", "Please Enter SSC roll!", "error");
		return false;
	}
	
	if (isNaN(sscroll)) {
		swal("SSC Roll!", "Only Number are allowed!", "error");
		return false;
	}


	if (sscregis=="") {
		swal("SSC Registation Number!", "Please Enter SSC Registation Number!", "error");
		return false;
	}
	
	if (isNaN(sscregis)) {
		swal("SSC Registation Number!", "Only Number are allowed!", "error");
		return false;
	}

	if (hscroll=="") {
		swal("HSC Roll!", "Please Enter HSC roll!", "error");
		return false;
	}
	
	if (isNaN(hscroll)) {
		swal("HSC Roll!", "Only Number are allowed!", "error");
		return false;
	}


	if (hscreg=="") {
		swal("HSC Registation Number!", "Please Enter HSC Registation Number!", "error");
		return false;
	}
	
	if (isNaN(hscreg)) {
		swal("HSC Registation Number!", "Only Number are allowed!", "error");
		return false;
	}

	if (sdate=="") {
		swal("Birth Date!", "Please Enter Birth date", "error");
		return false;
	}

	if (semail=="") {
		swal("Email", "Please Enter Email", "error");
		return false;
	}

	if (sfname=="") {
		swal("First Name!", "Please Enter first name!", "error");
		return false;
	}
	
	if (!isNaN(sfname)) {
		swal("First Name!", "Number are not allowed!", "error");
		return false;
	}

	if (slname=="") {
		swal("Last Name!", "Please Enter last name!", "error");
		return false;
	}

	if (!isNaN(slname)) {
		swal("Last Name!", "Number are not allowed!", "error");
		return false;
	}


	if (isNaN(sphone)) {
		swal("Phone Number!", "Enter only digite!", "error");
		return false;
	}

	genValue = false; 
	for(var i=0; i<radio.length;i++){
        if(radio[i].checked == true){
           genValue = true;    
        }
    }
        
	if (!genValue) {
		swal("Gender!", "Please select Gender", "error");
		return false;
	}

	if (sphone=="") {
		swal("Phone Number", "Please Enter phone number", "error");
		return false;
	}

	if (isNaN(sphone)) {
		swal("Phone Number!", "Only Number are allowed!", "error");
		return false;
	}

	if (spass!=svpass) {
		swal("Password!", "Password dont match", "error");
		return false;
	}

	

	
}




