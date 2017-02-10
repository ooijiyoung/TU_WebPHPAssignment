/* OOI JI YOUNG(C) 2015-2016 JYDesign 

My Account Page Javascript
*/


function start() {
	var proceed = checkLoggedIn();
	if(proceed == 1){
		writeUsrName();
		writeUsrMail();
		//writeUsrID();
		if(sessionStorage.jyJustRegistered == 1){
			document.getElementById("welcome").style.display = "inline";
			sessionStorage.jyJustRegistered = 0;
		}
	}
}

function writeUsrName(){
	var membername = sessionStorage.jyUserName;
	document.getElementById("my_acc_usrName").innerHTML= "<b>" + membername + "</b>," ;
	console.log("JY: Username Writted ERROR_SUCCESS");
}

function writeUsrID(){
	var usrUUID = sessionStorage.jyUserIDNo;
	if(usrUUID == null){
		var usrUUID = generateUselessNumber();
		sessionStorage.jyUserIDNo = usrUUID;
		console.log("JY: New UUID Generated");
	}else{
		//for debug purpose
		console.log("JY: Using previous randomly generated UUID");
	}
	document.getElementById("my_acc_usrID").innerHTML= usrUUID ;
}
function writeUsrMail(){
	var memberEmail = sessionStorage.jyEmail;
	if (memberEmail == null){
		document.getElementById("currentEmail").value = "No Email, Please Update Your Email";
	}
	else{
		document.getElementById("currentEmail").value = memberEmail;
	}
}

function checkLoggedIn(){
	var membername = sessionStorage.jyUserName;
	console.log("jyUserName=" + sessionStorage.jyUserName);
	console.log("jyEmail=" + sessionStorage.jyEmail);
	console.log("jyUserIDNo=" + sessionStorage.jyUserIDNo);
	console.log("jyJustRegistered="	+ sessionStorage.jyJustRegistered);
	if (membername == null){
		document.getElementById("warp").innerHTML ="<h1>Login Required</h1><br>Please Login before accessing your account.<br><a href='login.html'>Click Here to login</a>";
		console.log("Not logged in -> REMOVE WHOLE PAGE ");
		return 0;
	}else{
		console.log("JY: User logged in");
		return 1;
	}
}

function generateUselessNumber(){
	var rString = randomString(10, '0123456789');
	function randomString(length, chars) {
		var result = "";
		for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
		return result;
	}
	return rString;
}

function rgstChkEmail(){
	var usrID = document.getElementById("userEmail").value;
	if(usrID == ''){
		document.getElementById("userEmailEmpty").style.display = "inline";
		document.getElementById("userEmail").className = document.getElementById("userEmail").className + " error";
	}else{
		document.getElementById("userEmailEmpty").style.display = "none";
		document.getElementById("userEmail").className = document.getElementById("userEmail").className.replace(" error", "");
	}
}

function rgstCnfmPwd(){
	var pwd1 = document.getElementById("currentPwd").value;
	var pwd2 = document.getElementById("newPwd").value;
	var pwd3 = document.getElementById("cfmNewPwd").value;
	if(pwd2 != pwd3 && pwd3 != ''){
		document.getElementById("pwdNotMatch").style.display = "inline";
		document.getElementById("cfmNewPwd").className = document.getElementById("cfmNewPwd").className + " error";
	}else{
		document.getElementById("pwdNotMatch").style.display = "none";
		document.getElementById("cfmNewPwd").className = document.getElementById("cfmNewPwd").className.replace(" error", "");
	}
	if(pwd1 == ''){
		document.getElementById("userCurPwdEmpty").style.display = "inline";
		document.getElementById("currentPwd").className = document.getElementById("currentPwd").className + " error";
	}else{
		document.getElementById("userCurPwdEmpty").style.display = "none";
		document.getElementById("currentPwd").className = document.getElementById("currentPwd").className.replace(" error", "");
	}
	if(pwd2 == ''){
		document.getElementById("userNewPwdEmpty").style.display = "inline";
		document.getElementById("newPwd").className = document.getElementById("newPwd").className + " error";
	}else{
		document.getElementById("userNewPwdEmpty").style.display = "none";
		document.getElementById("newPwd").className = document.getElementById("newPwd").className.replace(" error", "");
	}
	if(pwd3 == ''){
		document.getElementById("userCfmPwdEmpty").style.display = "inline";
		document.getElementById("cfmNewPwd").className = document.getElementById("cfmNewPwd").className + " error";
	}else{
		document.getElementById("userCfmPwdEmpty").style.display = "none";
		document.getElementById("cfmNewPwd").className = document.getElementById("cfmNewPwd").className.replace(" error", "");
	}
}

function chgEmail(){
	var email = document.getElementById("userEmail").value;
	
	if( email != ''){
		sessionStorage.jyEmail = email;
		var elem = document.getElementById("chgEmail");
		elem.remove();
		document.getElementById("respEmail").innerHTML ="<br> Email Successfully Updated to " + email +"<br><br> " ;
	}
	else{
		rgstChkEmail();
	}
}

function chgPassword(){
	var pwd1 = document.getElementById("currentPwd").value;
	var pwd2 = document.getElementById("newPwd").value;
	var pwd3 = document.getElementById("cfmNewPwd").value;
	
	if(pwd1 !='' && pwd2 == pwd3){
		var elem = document.getElementById("chgPassword");
		elem.remove();
		document.getElementById("respPassword").innerHTML ="<br> Password Successfully Updated." ;
	}
	else{
		rgstCnfmPwd();
	}
}



window.onload = start;