<!doctype html>
<html>
<head>
<!---
JYDesign - Ooi Ji Young

Web Dev Diploma in IT Taylors

Assignment

-->
<meta charset="utf-8">
<title>Login - JYTravel</title>
<link rel="stylesheet"  href="../script/style.css" type="text/css">
<link rel="stylesheet"  href="../script/forms_style.css" type="text/css">
<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="../icon/favicon-16x16.png" sizes="16x16" />
<script src="../script/jquery.min.js"></script>
<script src="../script/loginCtrl.js"></script>
<script src="../script/pageResize.js"></script>
</head>

<body onLoad="chkIsLoggedin()">
<div id="header">
	<?php require '../global/header.php';?>
</div><!-- end of header-->
<div id="content">
<div id="warp">
<h1>Forgot your password?</h1>
Don't worry, just enter your email address we will send you the details to reset your password.<br><br>

<form id="cform" action="#" onsubmit="cmdSubmitForgotPwd();">
<!-- this form use onsubmit and action to capture ENER key-->
  <!-- remove name="" in input to prevent POST or GET data -->
    <label for="userEmail">Email:</label><br>
    <input class="forgotPwd" type="email" id="userEmail" placeholder="johndoe@example.com" onchange="rgstChkEmail()" onblur="rgstChkEmail()">


    <button class="forgotPwdBtn" type="button" id="cmdSubmit" onClick="cmdSubmitForgotPwd()">Submit</button>
    
</form>
    <div id="userEmailEmpty" class="formErrorMsg">
    You can't leave this empty.
    </div>
    <div id="respfrm"></div>

</div>
<div id="footer">
    	<?php require '../global/footer.php';?>
</div>
</div> <!-- end of content -->
<script>
</script>
</body>
</html>
