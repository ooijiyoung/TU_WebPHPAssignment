/* OOI JI YOUNG(C) 2015-2016 JYDesign 

Fake login - display name on webpage
dynamic min-height for warp
*/

var membername = sessionStorage.jyUserName;

function getLink(file){
	var temp = window.location.pathname;
	var count = (temp.match(/\//g) || []).length;
	var url = ('../'.repeat(count - 1 )+file) ;
	console.log(url);
	return url;
}
function rootDirNavBar(){
	
	if (membername == null){
		document.write("My Account");
	}else{
		document.write("Hi, <span class='noLightFont'>" + membername + "</span>");
	}
}
function rootDirDropMenu(){
	if (membername == null){
		document.getElementById("loginContainer").style.width = "200px";
		document.write("<li><a href='" + getLink("account/login.php") + "'>Login</a></li>");
		document.write("<li><a href='" + getLink("account/register.php") + "'>Not a member yet?<br>Register Now</a></li>");
	}else{
		document.getElementById("loginContainer").style.width = "250px";
		document.write("<li><a href='" + getLink("account/account.php") + "'>My Account</a></li>");
		document.write("<li><a href='" + getLink("account/logout.php") + "'>Not <span class='noLightFont'>" + membername + "</span>? Logout</a></li>");
	}
}

/*
deprecated. updated js with relative path to compatible with PHP include function
function insideDirNavBar(){
	if (membername == null){
		document.write("My Account");
	}else{
		document.write("Hi, <span class='noLightFont'>" + membername + "</span>");
	}
}
function insideDirDropMenu(){
	if (membername == null){
		document.getElementById("loginContainer").style.width = "200px";
		document.write("<li><a href='../account/login.php'>Login</a></li>");
		document.write("<li><a href='../account/register.php'>Not a member yet?<br>Register Now</a></li>");
	}else{
		document.getElementById("loginContainer").style.width = "250px";
		document.write("<li><a href='../account/account.php'>My Account</a></li>");
		document.write("<li><a href='../account/logout.php'>Not <span class='noLightFont'>" + membername + "</span>? Logout</a></li>");
	}
}*/