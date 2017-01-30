<!doctype html>
<html>
<head>
<!---
JYDesign - Ooi Ji Young

Web Dev Diploma in IT Taylors

Assignment

-->
<meta charset="utf-8">
<title>Register - JYTravel</title>
<link rel="stylesheet"  href="../script/style.css" type="text/css">
<link rel="stylesheet"  href="../script/forms_style.css" type="text/css">
<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="../icon/favicon-16x16.png" sizes="16x16" />
<script src="../script/jquery.min.js"></script>
<script src="../script/loginCtrl.js"></script>
<script src="../script/pageResize.js"></script>
</head>

<body onLoad="chkIsRegistered()">
<div id="header">
	<?php require '../global/header.php';?>
</div><!-- end of header-->
<div id="content">
<div id="warp">
<h1>Member Registration</h1>
  <form>
  <!-- remove name="" in input to prevent POST or GET data -->
  	<label>Name</label><br>
	<!-- use both onchange and onblur.. cuz sometimes onblur does not work propley-->
    <input class="half" type="text" id="firstName" placeholder="First" onchange="rgstChkName()" onblur="rgstChkName()">
    <input class="half" type="text" id="lastName"  placeholder="Last" style="float:right;" onchange="rgstChkName()" onblur="rgstChkName()"><br>
    <div id="nameEmpty" class="formErrorMsg">
    You can't leave this empty.<br><br>
    </div>
    
    <label for="userID">Choose Your Username</label>
    <input type="text" id="userID" onchange="rgstChkID()" onblur="rgstChkID()"><br>
    <div id="userIDempty" class="formErrorMsg">
    You can't leave this empty.<br><br>
    </div>

    <label for="userPwd">Password</label>
    <input type="password" id="userPwd" onchange="rgstCnfmPwd()" onblur="rgstCnfmPwd()"><br>
    <div id="userPwdEmpty" class="formErrorMsg">
    You can't leave this empty.<br><br>
    </div>
    
    <label for="userCfmPwd">Confirm Password</label>
    <input type="password" id="userCfmPwd" onchange="rgstCnfmPwd()" onblur="rgstCnfmPwd()"><br>
    <div id="userCfmPwdEmpty" class="formErrorMsg">
    You can't leave this empty.<br><br>
    </div>
    <div id="pwdNotMatch" class="formErrorMsg">
    These passwords don't match. Try again?<br><br>
    </div>
    <label for="userEmail">E-mail</label>
    <input type="email" id="userEmail" onchange="rgstChkEmail()" onblur="rgstChkEmail()"><br>
    <div id="userEmailEmpty" class="formErrorMsg">
    You can't leave this empty.<br><br>
    </div>
    
    <button type="button" id="cmdSubmit" onClick="cmdRegister()">Register</button>
  </form>


</div>
<div id="footer">
	<?php require '../global/footer.php';?>
</div>
</div> <!-- end of content -->
<script>
</script>
</body>
</html>
