var login = document.getElementById("login");
var login_cross = document.getElementById("login_cross");
var login_box = document.querySelector(".pop_up_login");
var std=document.getElementById('std');
var std_reg=document.querySelector('.studer_reg');
var uni =document.getElementById('uni');
var uni_reg=document.querySelector('.uni_reg');
var std_cross=document.getElementById('std_cross');
var uni_cross=document.getElementById('uni_cross');

if (login) {
	login.addEventListener('click',function(){
		login_box.style.visibility='visible';
		login_box.style.transform='scale(1)';
		login_box.style.transition='.3s';
	});
}

if (login_cross) {

login_cross.addEventListener('click',function(){
	login_box.style.visibility='hidden';
	login_box.style.transform='scale(.0)';
});
}

if (std) {
std.addEventListener('click',function(){
	std_reg.style.visibility='visible';
	std_reg.style.transform='scale(1)';
	std_reg.style.transition='.3s';
});
}
if (std_cross) {
std_cross.addEventListener('click',function(){
	std_reg.style.visibility='hidden';
	std_reg.style.transform='scale(.0)';
});
}

if (uni) {
uni.addEventListener('click',function(){
	uni_reg.style.visibility='visible';
	uni_reg.style.transform='scale(1)';
	uni_reg.style.transition='.3s';
});
}
if (uni_cross) {
uni_cross.addEventListener('click',function(){
	uni_reg.style.visibility='hidden';
	uni_reg.style.transform='scale(.0)';
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


function stvelidetion(){
	var sfname=document.getElementById('sfname').value;
	var slname=document.getElementById('slname').value;
	var sdate=document.getElementById('sdate').value;
	var radio=document.getElementById('radio').value;
	var sphone=document.getElementById('sphone').value;
	var saddress=document.getElementById('saddress').value;
	var pcode=document.getElementById('pcode').value;
	var semail=document.getElementById('semail').value;
	var spass=document.getElementById('spass').value;
	var svpass=document.getElementById('svpass').value;
	var cnt=document.getElementById('cnt').value;


	var sfnames=document.getElementById('sfnames');
	var slnames=document.getElementById('slnames');
	var sdates=document.getElementById('sdates');
	var radios=document.getElementById('radios');
	var sphones=document.getElementById('sphones');
	var saddresss=document.getElementById('saddresss');
	var pcodes=document.getElementById('pcodes');
	var semails=document.getElementById('semails');
	var spasss=document.getElementById('spasss');
	var svpasss=document.getElementById('svpasss');
	var cnts=document.getElementById('cnts');

	if (!isNaN(sfname)) {
		sfnames.innerHTML="Number are not allowed";
		return false;
	}
	if (isNaN(sfname)) {
		sfnames.innerHTML="";
	}

	if (!isNaN(slname)) {
		slnames.innerHTML="Number are not allowed";
		return false;
	}
	if (isNaN(slname)) {
		slnames.innerHTML="";
	}

	if (isNaN(sphone)) {
		sphones.innerHTML="Only number are allowed";
		return false;
	}
	if (!isNaN(sphone)) {
		sphones.innerHTML="";
	}


	if (spass!=svpass) {
		svpasss.innerHTML="Password are not match";
		return false;
	}else{
		svpasss.innerHTML="";
	}
	
}


function unvelidetion(){
	var uname=document.getElementById('uname').value;
	// var rgcode=document.getElementById('rgcode').value;
	// var division=document.getElementById('division').value;
	var phone=document.getElementById('phone').value;
	var pass=document.getElementById('pass').value;
	var vrpasss=document.getElementById('vrpasss').value;
	// var email=document.getElementById('email').value;
	// var zcode=document.getElementById('zcode').value;
	// var district=document.getElementById('district').value;


	var unames=document.getElementById('unames');
	// var rgcodes=document.getElementById('rgcodes');
	// var divisions=document.getElementById('divisions');
	 // var phones=document.getElementById('phones');
	var vrpassss=document.getElementById('vrpassss');
	// var emails=document.getElementById('emails');
	// var zcodes=document.getElementById('zcodes');
	// var districts=document.getElementById('districts');

	if (!isNaN(uname)) {
		unames.innerHTML="Number are not allowed";
		return false;
	}
	if (isNaN(uname)) {
		unames.innerHTML="";
	}

	if (isNaN(phone)) {
		phones.innerHTML="Only number are allowed";
		return false;
	}
	if (!isNaN(phone)) {
		phones.innerHTML="";
	}

	if (pass!=vrpasss) {
		vrpassss.innerHTML="Password are not match";
		return false;
	}else{
		vrpassss.innerHTML="";
	}


}


