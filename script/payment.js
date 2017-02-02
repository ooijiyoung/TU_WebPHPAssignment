/*
Payment Gateway Control and Cookies/ Session Storage. (HTML5 oni)
JYDesign/JYSolutions (C) Ooi Ji Young 2017
*/

//forms validation 
/*
fNameErr();
lNameErr()
telErr()
emailErr()
addErr()
cityErr()
posErr()
stateErr()
*/
function fNameErr(){
	document.getElementById("firstName").className = document.getElementById("firstName").className + " error";
}

function lNameErr(){
	document.getElementById("lastName").className = document.getElementById("lastName").className + " error";
}

function telErr(){
	document.getElementById("telno").className = document.getElementById("telno").className + " error";
}

function emailErr(){
	document.getElementById("mail").className = document.getElementById("mail").className + " error";	
}

function addErr(){
	document.getElementById("addr").className = document.getElementById("addr").className + " error";
}

function cityErr(){
	document.getElementById("city").className = document.getElementById("city").className + " error";
}

function posErr(){
	document.getElementById("postcode").className = document.getElementById("postcode").className + " error";
}

function stateErr(){
	document.getElementById("state").className = document.getElementById("state").className + " error";
}
function payChkFName(){
	var name1 = document.getElementById("firstName").value;
	var name2 = document.getElementById("lastName").value;
	if(name1 == ''){
		fNameErr();
	}else{
		document.getElementById("firstName").className = document.getElementById("firstName").className.replace(" error", "");
	}
	if(name1 == '' || name2 == ''){
		document.getElementById("nameEmpty").style.display = "inline";
	}else{
		document.getElementById("nameEmpty").style.display = "none";
	}
}

function payChkLName(){
	var name1 = document.getElementById("firstName").value;
	var name2 = document.getElementById("lastName").value;
	if(name2 == ''){
		lNameErr();
	}else{
		document.getElementById("lastName").className = document.getElementById("lastName").className.replace(" error", "");
	}
	if(name1 == '' || name2 == ''){
		document.getElementById("nameEmpty").style.display = "inline";
	}else{
		document.getElementById("nameEmpty").style.display = "none";
	}
}

function payChkTel(){
	var TelNo = document.getElementById("telno").value;
	if(TelNo == ''){
		telErr();
		document.getElementById("telEmpty").style.display = "inline";
	}else{
		document.getElementById("telEmpty").style.display = "none";
		document.getElementById("telno").className = document.getElementById("telno").className.replace(" error", "");
	}
}

function payChkEmail(){
	var usrID = document.getElementById("mail").value;
	if(usrID == ''){
		emailErr();
		document.getElementById("emailEmpty").style.display = "inline";
	}else{
		document.getElementById("emailEmpty").style.display = "none";
		document.getElementById("mail").className = document.getElementById("mail").className.replace(" error", "");
	}
}

function payChkAddr(){
	var userAdd = document.getElementById("addr").value;
	if(userAdd == ''){
		addErr();
		document.getElementById("addrEmpty").style.display = "inline";
	}else{
		document.getElementById("addrEmpty").style.display = "none";
		document.getElementById("addr").className = document.getElementById("addr").className.replace(" error", "");
	}
}

function payChkCity(){
	var city = document.getElementById("city").value;
	if(city == ''){
		cityErr();
		document.getElementById("cityEmpty").style.display = "inline";
	}else{
		document.getElementById("cityEmpty").style.display = "none";
		document.getElementById("city").className = document.getElementById("city").className.replace(" error", "");
	}
}

function payChkPos(){
	var postcode = document.getElementById("postcode").value;
	if(postcode == ''){
		posErr();
		document.getElementById("posEmpty").style.display = "inline";
	}else{
		document.getElementById("posEmpty").style.display = "none";
		document.getElementById("postcode").className = document.getElementById("postcode").className.replace(" error", "");
	}
}

function payChkState(){
	var state = document.getElementById("state").value;
	if(state == ''){
		stateErr();
		document.getElementById("stateEmpty").style.display = "inline";
	}else{
		document.getElementById("stateEmpty").style.display = "none";
		document.getElementById("state").className = document.getElementById("state").className.replace(" error", "");
	}
}
function cmdContinue(){
	var name1 = document.getElementById("firstName").value;
	var name2 = document.getElementById("lastName").value;
	var TelNo = document.getElementById("telno").value;
	var usrID = document.getElementById("mail").value;
	var userAdd = document.getElementById("addr").value;
	var city = document.getElementById("city").value;
	var postcode = document.getElementById("postcode").value;
	var state = document.getElementById("state").value;
	
	if( name1 != '' && name2 != '' && TelNo !='' && usrID !='' && userAdd !='' 
	   && city !='' && postcode !='' && state !=''){
		document.getElementById("chkoutFrm").submit();
	}
	else{
		payChkFName();
		payChkLName();
		payChkTel();
		payChkEmail();
		payChkAddr();
		payChkCity();
		payChkPos();
		payChkState();
	}
}