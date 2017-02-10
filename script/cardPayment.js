/*
Payment Gateway Control and Cookies/ Session Storage. (HTML5 oni)
JYDesign/JYSolutions (C) Ooi Ji Young 2017
*/

//forms validation 
/*
cardholderErr();
typeError()
telErr()
emailErr()
addErr()
cityErr()
posErr()
stateErr()
*/
function cardholderErr(){
	document.getElementById("cardhholder").className = document.getElementById("cardhholder").className + " error";
}

function typeError(){
	document.getElementById("cardtype").className = document.getElementById("cardtype").className + " error";
}

function NoErr(){
	document.getElementById("cardno").className = document.getElementById("cardno").className + " error";
}

function cvvErr(){
	document.getElementById("cvv").className = document.getElementById("cvv").className + " error";	
}

function expMMErr(){
	document.getElementById("expMM").className = document.getElementById("expMM").className + " error";
}

function expYYErr(){
	document.getElementById("expYY").className = document.getElementById("expYY").className + " error";
}

function cardChkHolder(){
	var cardholder = document.getElementById("cardhholder").value;
	if(cardholder == ''){
		cardholderErr();
		document.getElementById("cardEmpty").style.display = "inline";
	}else{
		document.getElementById("cardEmpty").style.display = "none";
		document.getElementById("cardhholder").className = document.getElementById("cardhholder").className.replace(" error", "");
	}
}

function cardChkType(){
	var cardType = document.getElementById("cardtype").value;
	if(cardType == ''){
		typeError();
		document.getElementById("cardTypeEmpty").style.display = "inline";
	}else{
		document.getElementById("cardTypeEmpty").style.display = "none";
		document.getElementById("cardtype").className = document.getElementById("cardtype").className.replace(" error", "");
	}
}

function cardChkNo(){
	var cardNo = document.getElementById("cardno").value;
	var cvv = document.getElementById("cvv").value;
	if(cardNo == ''){
		NoErr();
	}else{
		document.getElementById("cardno").className = document.getElementById("cardno").className.replace(" error", "");
	}
	if(cardNo == '' || cvv == ''){
		document.getElementById("cardNoEmpty").style.display = "inline";
	}else{
		document.getElementById("cardNoEmpty").style.display = "none";
	}
}

function cardChkcvv(){
	var cardNo = document.getElementById("cardno").value;
	var cvv = document.getElementById("cvv").value;
	if(cvv == ''){
		cvvErr();
	}else{
		document.getElementById("cvv").className = document.getElementById("cvv").className.replace(" error", "");
	}
	if(cardNo == '' || cvv == ''){
		document.getElementById("cardNoEmpty").style.display = "inline";
	}else{
		document.getElementById("cardNoEmpty").style.display = "none";
	}
}

function cardChkExpMM(){
	var expMM = document.getElementById("expMM").value;
	if(expMM == ''){
		expMMErr();
		document.getElementById("expMMEmpty").style.display = "inline";
	}else{
		document.getElementById("expMMEmpty").style.display = "none";
		document.getElementById("expMM").className = document.getElementById("expMM").className.replace(" error", "");
	}
}

function cardChkExpYY(){
	var expYY = document.getElementById("expYY").value;
	if(expYY == ''){
		expYYErr();
		document.getElementById("expYYEmpty").style.display = "inline";
	}else{
		document.getElementById("expYYEmpty").style.display = "none";
		document.getElementById("expYY").className = document.getElementById("expYY").className.replace(" error", "");
	}
}

function cmdPay(){
	var cardholder = document.getElementById("cardhholder").value;
	var cardType = document.getElementById("cardtype").value;
	var cardNo = document.getElementById("cardno").value;
	var cvv = document.getElementById("cvv").value;
	var expMM = document.getElementById("expMM").value;
	var expYY = document.getElementById("expYY").value;
	
	if( cardholder != '' && cardType != '' && cardNo !='' && cvv !='' && expMM !='' 
	   && expYY !=''){
		document.getElementById("cardIDfrm").submit();
	}
	else{
		cardChkHolder();
		cardChkType();
		cardChkNo();
		cardChkcvv();
		cardChkExpMM();
		cardChkExpYY();
	}
}