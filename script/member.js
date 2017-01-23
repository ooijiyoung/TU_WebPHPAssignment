/* OOI JI YOUNG(C) 2015-2016 JYDesign 

Fake login - display name on webpage
dynamic min-height for warp
*/

var membername = sessionStorage.jyUserName;

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
		document.write("<li><a href='account/login.html'>Login</a></li>");
		document.write("<li><a href='account/register.html'>Not a member yet?<br>Register Now</a></li>");
	}else{
		document.getElementById("loginContainer").style.width = "250px";
		document.write("<li><a href='account/account.html'>My Account</a></li>");
		document.write("<li><a href='account/logout.html'>Not <span class='noLightFont'>" + membername + "</span>? Logout</a></li>");
	}
}
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
		document.write("<li><a href='../account/login.html'>Login</a></li>");
		document.write("<li><a href='../account/register.html'>Not a member yet?<br>Register Now</a></li>");
	}else{
		document.getElementById("loginContainer").style.width = "250px";
		document.write("<li><a href='../account/account.html'>My Account</a></li>");
		document.write("<li><a href='../account/logout.html'>Not <span class='noLightFont'>" + membername + "</span>? Logout</a></li>");
	}
}