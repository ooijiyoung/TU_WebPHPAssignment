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
<?php
	
$nameErr = $userErr = $pwdErr = $emailErr = $telErr = $msgErr = $formError = "";
$fName = $lName = $userID = $userPwd = $email = "";
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
	//front end valdation handled by javascript
		
		$fName = sanitize($_POST["fName"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$fName)) {
			$nameErr = "Only letters and white space allowed"; 
		}
		
		$lName = sanitize($_POST["lName"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$lName)){
			$nameErr = "Only letters and white space allowed"; 
		}
		
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

		$email = sanitize($_POST["userEmail"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailErr = "Invalid email format"; 
		}
		
		
		
		if($nameErr == "" && $userErr == "" && $pwdErr == "" && $emailErr == ""){
			$userData = fopen("../admin/user.txt", "a") or die("An Error Occurred, Please contact us!");
			//hash password
			$hashpwd = md5($userPwd);
			$txt = "'$fName', '$lName', '$userID' , '$hashpwd', '$email'\n";
			fwrite($userData, $txt);
			fclose($userData);
			//parse data to JS.
			echo("<script>	var usrID = '$userID';
			var email = '$email';
			sessionStorage.jyUserName = usrID;
			sessionStorage.jyEmail = email;
			sessionStorage.jyJustRegistered = 1;</script>
			<script>window.location.href = 'account.php';</script>");
		}
		else
			$formError = "<center><span class='phpError'><br>Please check all fields before submitting!<br></span></center>";
	
}

function sanitize($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
	
?>	
<h1>Member Registration</h1>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="regist_form">
  <!-- remove name="" in input to prevent POST or GET data -->
  	<label>Name</label><br>
	<!-- use both onchange and onblur.. cuz sometimes onblur does not work propley-->
    <input class="half" type="text" id="firstName" placeholder="First" onchange="rgstChkName()" onblur="rgstChkName()" name="fName" value="<?php echo $fName;?>">
    <input class="half" type="text" id="lastName"  placeholder="Last" style="float:right;" onchange="rgstChkLName()" onblur="rgstChkLName()" name="lName" value="<?php echo $lName;?>"><br>
    <div id="nameEmpty" class="formErrorMsg">
    You can't leave this empty.<br><br>
    </div>
    <div class="phpError">
    	<?php echo $nameErr; ?>
	</div>
    <label for="userID">Choose Your Username</label>
    <input type="text" id="userID" onchange="rgstChkID()" onblur="rgstChkID()" value="<?php echo $userID;?>" name="userID"><br>
    <div id="userIDempty" class="formErrorMsg">
    You can't leave this empty.<br><br>
    </div>
    <div class="phpError">
    	<?php echo $userErr; ?>
	</div>

    <label for="userPwd">Password</label>
    <input type="password" id="userPwd" onchange="rgstCnfmPwd()" onblur="rgstCnfmPwd()" name="userPwd"><br>
    <div id="userPwdEmpty" class="formErrorMsg">
    You can't leave this empty.<br><br>
    </div>
    <div class="phpError">
    	<?php echo $pwdErr; ?>
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
    <input type="email" id="userEmail" onchange="rgstChkEmail()" onblur="rgstChkEmail()" name="userEmail" value="<?php echo $email;?>"><br>
    <div id="userEmailEmpty" class="formErrorMsg">
    You can't leave this empty.<br><br>
    </div>
    <div class="phpError">
    	<?php echo $emailErr; ?>
	</div>
    <div class="phpError">
    	<?php echo $formError; ?>
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
