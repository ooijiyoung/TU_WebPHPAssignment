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
<h1>Member Login</h1>
  <form method="post">
  <!-- remove name="" in input to prevent POST or GET data -->
    <label for="userID">Username</label>
    <input type="text" id="userID" name="userID"><br>

    <label for="userPwd">Password</label> (<a href="forgotpassword.html" tabindex="-1">Forget Password?</a>)
    <input type="password" id="userPwd" name="userPwd"><br>


    <button type="button" id="cmdSubmit" onClick="cmdLogin()">Log In</button>
    <div id="errorMsg" style="color:red"></div>
  </form>
<hr>
Not a member yet?<br>
<a href="register.html">Sign up or register here!</a>


</div>
<div id="footer">
    	<?php require '../global/footer.php';?>
    </div>
</div>
</div> <!-- end of content -->
</body>
</html>
