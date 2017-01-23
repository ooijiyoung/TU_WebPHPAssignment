function sendForm() {
	var name1 = document.getElementById("fname").value;
	var useMail = document.getElementById("mail").value;
	var usrMsg = document.getElementById("msg").value;
	if( name1 != '' && useMail != '' && usrMsg !=''){
		var elem = document.getElementById("cform");
		elem.remove();
		document.getElementById("respfrm").innerHTML ="<br>Dear " + name1 + ",<br>Thank You For Your Response. <br>We will reply you shortly." ;
		makeFooterAtBottom();
	}else{
		contactChkName();
		contactChkEmail();
		contactChkMsg();
	}
}
function contactChkName(){
	var name1 = document.getElementById("fname").value;
	if(name1 == ''){
		document.getElementById("fname").className = document.getElementById("fname").className + " error";
		document.getElementById("nameEmpty").style.display = "inline";
	}else{
		document.getElementById("fname").className = document.getElementById("fname").className.replace(" error", "");
		document.getElementById("nameEmpty").style.display = "none";
	}
}


function contactChkEmail(){
	var useMail = document.getElementById("mail").value;
	if(useMail == ''){
		document.getElementById("userEmailEmpty").style.display = "inline";
		document.getElementById("mail").className = document.getElementById("mail").className + " error";
	}else{
		document.getElementById("userEmailEmpty").style.display = "none";
		document.getElementById("mail").className = document.getElementById("mail").className.replace(" error", "");
	}
}

function contactChkMsg(){
	var usrMsg = document.getElementById("msg").value;
	if(usrMsg == ''){
		document.getElementById("msgEmpty").style.display = "inline";
		document.getElementById("msg").className = document.getElementById("msg").className + " error";
	}else{
		document.getElementById("msgEmpty").style.display = "none";
		document.getElementById("msg").className = document.getElementById("msg").className.replace(" error", "");
	}
}