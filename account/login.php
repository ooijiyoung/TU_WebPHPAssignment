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
<?php
	
$userErr = $pwdErr = $formError = "";
$userID = $userPwd = "";
	
	if($_SERVER['REQUEST_METHOD']=="POST"){

		$userID = sanitize($_POST["userID"]);
		if (preg_match("/[^a-z_\-0-9]/i",$userID)){
			/*
			nvm...
			if(preg_match("/^[ ]*$/",$userID)){
				$userErr = "Your username must not contains space"; 
			}else if(strlen($userID)<3){
				$userErr = "Your username must at least 3 characters long";
			}
			*/
			$userErr = "Your username must not contains space and illegal characters"; 
		}else if(strlen($userID)<3){
			$userErr = "Your username must at least 3 characters long";
		}
		
		$userPwd = sanitize($_POST["userPwd"]);
		if (preg_match("/\\s/",$userPwd)){
			$pwdErr = "Your password must not contains space";
		}
		
		if($userErr == "" && $pwdErr == ""){
			echo("Login Success");
			//parse data to JS.
			echo("<script>	var usrID = '$userID';
	sessionStorage.jyUserName = usrID;</script>");
		}
		else
			$formError = "<center>Please check if you've filled all the fields </center>";
	
}

function sanitize($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
	
?>	
<h1>Member Login</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="loginFrm">
  <!-- remove name="" in input to prevent POST or GET data -->
    <label for="userID">Username</label>
    <input type="text" id="userID" name="userID"><br>
	<div class="phpError">
	<?php echo $userErr;?>
	</div>

    <label for="userPwd">Password</label> (<a href="forgotpassword.html" tabindex="-1">Forget Password?</a>)
    <input type="password" id="userPwd" name="userPwd"><br>
	<div class="phpError">
	<?php echo $pwdErr;?>
	</div>

    <button type="button" id="cmdSubmit" onClick="cmdLogin()">Log In</button>
    <div id="errorMsg" style="color:red"></div>
	<div class="phpError">
	<?php echo $formError;?>
	</div>
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
