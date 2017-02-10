<!doctype html>
<html>
<head>
<!---
JYDesign - Ooi Ji Young

Web Dev Diploma in IT Taylors

Assignment

-->
<meta charset="utf-8">
<title>My Account - Durian</title>
<link rel="stylesheet"  href="../script/style.css" type="text/css">
<link rel="stylesheet"  href="../script/acc_style.css" type="text/css">
<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="../icon/favicon-16x16.png" sizes="16x16" />
<script src="../script/jquery.min.js"></script>
<script src="../script/myAcc.js"></script>
<script src="../script/pageResize.js"></script>
</head>

<body>
<div id="header">
	<?php require '../global/header.php';?>
</div><!-- end of header-->
<div id="content">
<div id="warp">
<h1>My Account </h1>
<div id="myacc">
    <div id="myacc_l">
        Hi <span id="my_acc_usrName"></span>
    </div>
</div>
<div id="welcome">
    <h1>Registration Success! </h1>
             
    Thanks for signing up with us!<br>
    You've just made it easier to keep track of all your order details<sup>1</sup> and shop for the best deals.<br><br>

    <div id="diclaimer">
    <sup>1</sup> Coming Soon. Feature not yet implemented.<br>

    </div>
</div>
<br>
Account Settings
<br><br>
Change your email
<form id="chgEmail">
	<label for="currentEmail">Your Current E-mail:</label>
    <input type="email" id="currentEmail" disabled><br>
    
    <label for="userEmail">New E-mail Address:</label>
    <input type="email" id="userEmail"><br>
    <div id="userEmailEmpty" class="formErrorMsg">
    <label></label>You can't leave this empty.<br><br>
    </div>
    <!-- do not remove empty label , for alignment -->
    <label></label><button type="button" id="cmdSubmit" onClick="chgEmail()">Change</button>
</form>
<div id="respEmail"></div>
Change your password
<form id="chgPassword">
	<label for="currentPwd">Current Password:</label>
    <input type="password" id="currentPwd"><br>
    <div id="userCurPwdEmpty" class="formErrorMsg">
    <label></label>You can't leave this empty.<br><br>
    </div>
    <label for="newPwd">New Password:</label>
    <input type="password" id="newPwd" onchange="rgstCnfmPwd()" onblur="rgstCnfmPwd()"><br>
    <div id="userNewPwdEmpty" class="formErrorMsg">
    <label></label>You can't leave this empty.<br><br>
    </div>
    <label for="cfmNewPwd">Re-enter new Password:</label>
    <input type="password" id="cfmNewPwd" onchange="rgstCnfmPwd()" onblur="rgstCnfmPwd()"><br>
    <div id="userCfmPwdEmpty" class="formErrorMsg">
    <label></label>You can't leave this empty.<br><br>
    </div>
    <div id="pwdNotMatch" class="formErrorMsg">
    <label></label>These passwords don't match. Try again?<br><br>
    </div>
    <!-- do not remove empty label , for alignment -->
    <label></label><button type="button" id="cmdSubmit2" onClick="chgPassword()">Change</button>
</form>
<div id="respPassword"></div>
</div><!--end of warp-->
<div id="footer">
    	<?php require '../global/footer.php';?>
</div>
</div> <!-- end of content -->
</body>
</html>
