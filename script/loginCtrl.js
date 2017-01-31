/*
Login Control and Cookies/ Session Storage. (HTML5 oni)
JYDesign (C) Ooi Ji Young 2016 
*/

function cmdLogin() {
	var usrname = document.getElementById("userID").value;
	var passwd = document.getElementById("userPwd").value;
	if ((usrname == "") || (passwd == "")){
		document.getElementById("errorMsg").innerHTML ="Error! Username or Password field cannot be empty";
		}
	else{
		sessionStorage.jyUserName = usrname;
		window.location.href = "account.html"; //send user to another page
		console.log("Login Success");
	}
}

function chkIsLoggedin(){
	var membername = sessionStorage.jyUserName;
	if (membername != null){
		document.getElementById("warp").innerHTML ="<h1>Login Failed</h1><br>Reason: You already logged in.<br> You need to be logged out to log in. Please log out to log in";
	}else{
		document.getElementById("userID")
		.addEventListener("keyup", function(event) {
			event.preventDefault();
			if (event.keyCode == 13) {
				document.getElementById("cmdSubmit").click();
			}
		});
		document.getElementById("userPwd")
		.addEventListener("keyup", function(event) {
			event.preventDefault();
			if (event.keyCode == 13) {
				document.getElementById("cmdSubmit").click();
			}
		});
	}
}

function cmdLogout(){
	var membername = sessionStorage.jyUserName;
	if (membername==null){
		alert("Logout Failed! You need to be logged in to log out. Please log in to log out");
		window.location.href = "login.html";
	}else{
		sessionStorage.removeItem("jyUserName");
		sessionStorage.removeItem("jyUserIDNo");
		sessionStorage.removeItem("jyEmail");
	}	
}

function chkIsRegistered(){
	var membername = sessionStorage.jyUserName;
	/* if (membername != null){
		document.getElementById("warp").innerHTML ="<h1>Hi "+ membername +"</h1>You are already registered, no need to register again.";
	} */
}

function rgstChkName(){
	var name1 = document.getElementById("firstName").value;
	var name2 = document.getElementById("lastName").value;
	if(name1 == ''){
		document.getElementById("firstName").className = document.getElementById("firstName").className + " error";
	}else{
		document.getElementById("firstName").className = document.getElementById("firstName").className.replace(" error", "");
	}
	if(name1 == '' || name2 == ''){
		document.getElementById("nameEmpty").style.display = "inline";
	}else{
		document.getElementById("nameEmpty").style.display = "none";
	}
}

function rgstChkLName(){
	var name1 = document.getElementById("firstName").value;
	var name2 = document.getElementById("lastName").value;
	if(name2 == ''){
		document.getElementById("lastName").className = document.getElementById("lastName").className + " error";
	}else{
		document.getElementById("lastName").className = document.getElementById("lastName").className.replace(" error", "");
	}
	if(name1 == '' || name2 == ''){
		document.getElementById("nameEmpty").style.display = "inline";
	}else{
		document.getElementById("nameEmpty").style.display = "none";
	}
}
function rgstChkID(){
	var usrID = document.getElementById("userID").value;
	if(usrID == ''){
		document.getElementById("userIDempty").style.display = "inline";
		document.getElementById("userID").className = document.getElementById("userID").className + " error";
	}else{
		document.getElementById("userIDempty").style.display = "none";
		document.getElementById("userID").className = document.getElementById("userID").className.replace(" error", "");
	}
}

function rgstCnfmPwd(){
	var pwd1 = document.getElementById("userPwd").value;
	var pwd2 = document.getElementById("userCfmPwd").value;
	if(pwd1 != pwd2 && pwd2 != ''){
		document.getElementById("pwdNotMatch").style.display = "inline";
		document.getElementById("userCfmPwd").className = document.getElementById("userCfmPwd").className + " error";
	}else{
		document.getElementById("pwdNotMatch").style.display = "none";
		document.getElementById("userCfmPwd").className = document.getElementById("userCfmPwd").className.replace(" error", "");
	}
	if(pwd1 == ''){
		document.getElementById("userPwdEmpty").style.display = "inline";
		document.getElementById("userPwd").className = document.getElementById("userPwd").className + " error";
	}else{
		document.getElementById("userPwdEmpty").style.display = "none";
		document.getElementById("userPwd").className = document.getElementById("userPwd").className.replace(" error", "");
	}
	if(pwd2 == ''){
		document.getElementById("userCfmPwdEmpty").style.display = "inline";
		document.getElementById("userCfmPwd").className = document.getElementById("userCfmPwd").className + " error";
	}else{
		document.getElementById("userCfmPwdEmpty").style.display = "none";
		document.getElementById("userCfmPwd").className = document.getElementById("userCfmPwd").className.replace(" error", "");
	}
	
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

function cmdRegister(){
	var name1 = document.getElementById("firstName").value;
	var name2 = document.getElementById("lastName").value;
	var usrID = document.getElementById("userID").value;
	var pwd1 = document.getElementById("userPwd").value;
	var pwd2 = document.getElementById("userCfmPwd").value;
	var email = document.getElementById("userEmail").value;
	
	if( name1 != '' && name2 != '' && usrID !='' && pwd1 == pwd2 && email !=''){
		sessionStorage.jyUserName = usrID;
		sessionStorage.jyEmail = email;
		document.getElementById("regist_form").submit();
	}
	else{
		rgstChkName();
		rgstChkLName();
		rgstChkID();
		rgstCnfmPwd();
		rgstChkEmail();
	}
}

function cmdSubmitForgotPwd(){
	var usrmail = document.getElementById("userEmail").value;
	if (usrmail == ""){
		rgstChkEmail();
		}
	else{
		var elem = document.getElementById("cform");
		elem.remove();
		document.getElementById("respfrm").innerHTML ="An e-mail has been sent to your email (" + usrmail + ") to reset your password. If you did not receive the e-mail, please check your spam inbox. Please do not hesitate to contact us if you having trouble accessing your account" ;
		makeFooterAtBottom();
	}
}