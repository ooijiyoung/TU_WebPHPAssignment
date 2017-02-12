<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<!---
JYDesign - Ooi Ji Young

Web Dev Diploma in IT Taylors

Assignment

-->
<meta charset="utf-8">
<title>Checkout - JYDesign</title>
<link rel="stylesheet"  href="../script/style.css" type="text/css">
<link rel="stylesheet"  href="../script/store.css" type="text/css">
<link rel="stylesheet"  href="../script/forms_style.css" type="text/css">
<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="../icon/favicon-16x16.png" sizes="16x16" />
<script src="../script/jquery.min.js"></script>
<script src="../script/pageResize.js"></script>
<script src="../script/payment.js"></script>
</head>

<body>
<div id="header">
	<?php require '../global/header.php';?>
</div><!-- end of header-->
<div id="content">
<div id="warp">
<h1>Checkout</h1>
<?php

	#include
	//declare var
	$fName = $lName = $telno = $email = $addr = $city = $zipcode = $state = "";
	$nameErr = $telErr = $emailErr = $addrErr = $cityErr = $posErr = $stateErr = "";

	if($_SERVER['REQUEST_METHOD']=="POST"){
		$fName = sanitize($_POST["fName"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$fName)) {
			$nameErr = "Only letters and white space allowed <script>fNameErr();</script>"; 
		}
		
		$lName = sanitize($_POST["lName"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$lName)){
			$nameErr = "Only letters and white space allowed <script>lNameErr();</script>"; 
		}
		if (!preg_match("/^[a-zA-Z ]*$/",$fName) && (!preg_match("/^[a-zA-Z ]*$/",$lName))) {
			$nameErr = "Only letters and white space allowed <script>fNameErr();lNameErr();</script>"; 
		}
		$telno = sanitize($_POST["telno"]);
		if (!preg_match("/^[+0-9]*$/",$telno)){
			$telErr = "Invalid phone number <script>telErr();</script>";
		}
		if (strlen($telno)<10) {
			$telErr = "Invalid phone number <script>telErr();</script>"; 
		}
		$email = sanitize($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailErr = "Invalid email format <script>emailErr();</script>"; 
		}
		$addr = sanitize($_POST["addr"]);
		$city = sanitize($_POST["city"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
			$cityErr = "Only letters and white space allowed <script>cityErr();</script>"; 
		}
		$zipcode = sanitize($_POST["zipcode"]);
		if (strlen($zipcode)!=5) {
			$posErr = "Not a valid zipcode <script>posErr();</script>"; 
		}
		$state = sanitize($_POST["state"]);
		if($nameErr == "" && $telErr == "" && $emailErr == "" && $addrErr == "" && $cityErr == "" && $posErr == "" && $stateErr == ""){
			$_SESSION["fName"] = $fName;
			$_SESSION["lName"] = $lName;
			$_SESSION["telno"] = $telno;
			$_SESSION["email"] = $email;
			$_SESSION["addr"] = $addr;
			$_SESSION["city"] = $city;
			$_SESSION["zipcode"] = $zipcode;
			$_SESSION["state"] = $state;
			echo "<script>window.location.href = 'payment.php';</script>";
		}
		
	}

	function sanitize($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="chkoutFrm"  method="post">
    <div>
        <label>Name</label><br>
		<!-- use both onchange and onblur.. cuz sometimes onblur does not work propley-->
		<input class="half" type="text" id="firstName" placeholder="First" name="fName" value="<?php echo $fName;?>">
		<input class="half" type="text" id="lastName"  placeholder="Last" style="float:right;" name="lName" value="<?php echo $lName;?>">
    </div>
    <div id="nameEmpty" class="formErrorMsg">
    	You can't leave this empty.
    </div>
    <div class="phpError">
    	<?php echo $nameErr; ?>
	</div>
   
    <div>
        <label for="telno">Mobile Phone:</label>
        <input type="tel" id="telno" name="telno"  value="<?php echo $telno;?>" maxlength="11"/>
    </div>
    <div id="telEmpty" class="formErrorMsg">
    	You can't leave this empty.
    </div>
    <div class="phpError">
    	<?php echo $telErr; ?>
	</div>
   
    <div>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" name="email" value="<?php echo $email;?>"/>
    </div>
    <div id="emailEmpty" class="formErrorMsg">
    	You can't leave this empty.
    </div>
    <div class="phpError">
    	<?php echo $emailErr; ?>
	</div>
   
    <div>
        <label for="addr">Delivery address:</label>
        <input type="text" id="addr" name="addr"  value="<?php echo $addr;?>"/>
    </div>
    <div id="addrEmpty" class="formErrorMsg">
    	You can't leave this empty.
    </div>
    <div class="phpError">
    	<?php echo $addrErr; /*temporary not be using */?>
	</div>
   
    <div class="half" style="float:left;">
        <label for="city">City:</label><br>
        <input type="text" id="city" name="city"  value="<?php echo $city;?>"/>
    </div>
    <div class="half" style="float:right;">
        <label for="postcode">Post code:</label><br>
        <input type="text" id="postcode" name="zipcode"  value="<?php echo $zipcode;?>"/>
    </div>
    <div class="half" style="float:left;">
    	<label id="cityEmpty" class="formErrorMsg" >You can't leave this empty.</label>
        
    </div>
    <div class="half" style="float:right;">
        <label id="posEmpty" class="formErrorMsg">You can't leave this empty.</label>
    </div>
    <div class="phpError" style="clear: both;">
   		<label class="half" style="float:left;"><?php echo $cityErr;?></label>
        <label class="half" style="float:right;"><?php echo $posErr; ?></label><br>
	</div>
   
    <div>
        <label for="state">State:</label>
        <select name="state" id="state">
        	<option value="" disabled selected>Please select state</option>
			<option value="Johor" 
			<?php if ($state == "Johor") echo "selected='selected'"; ?>>Johor</option>
			<option value="Kedah"
			<?php if ($state == "Kedah") echo "selected='selected'"; ?>>Kedah</option>
			<option value="Kelantan"
			<?php if ($state == "Kelantan") echo "selected='selected'"; ?>>Kelantan</option>
			<option value="Kuala Lumpur"
			<?php if ($state == "Kuala Lumpur") echo "selected='selected'"; ?>>Kuala Lumpur</option>
			<option value="Melaka"
			<?php if ($state == "Melaka") echo "selected='selected'"; ?>>Melaka</option>
			<option value="Negeri Sembilan"
			<?php if ($state == "Negeri Sembilan") echo "selected='selected'"; ?>>Negeri Sembilan</option>
			<option value="Pahang"
			<?php if ($state == "Pahang") echo "selected='selected'"; ?>>Pahang</option>
			<option value="Perak"
			<?php if ($state == "Perak") echo "selected='selected'"; ?>>Perak</option>
			<option value="Perlis"
			<?php if ($state == "Perlis") echo "selected='selected'"; ?>>Perlis</option>
			<option value="Pulau Pinang"
			<?php if ($state == "Pulau Pinang") echo "selected='selected'"; ?>>Pulau Pinang</option>
			<option value="Sabah"
			<?php if ($state == "Sabah") echo "selected='selected'"; ?>>Sabah</option>
			<option value="Sarawak"
			<?php if ($state == "Sarawak") echo "selected='selected'"; ?>>Sarawak</option>
			<option value="Selangor"
			<?php if ($state == "Selangor") echo "selected='selected'"; ?>>Selangor</option>
			<option value="Terengganu"
			<?php if ($state == "Terengganu") echo "selected='selected'"; ?>>Terengganu</option>
			<option value="Labuan"
			<?php if ($state == "Labuan") echo "selected='selected'"; ?>>Labuan</option>
		</select>
    </div>
    <div id="stateEmpty" class="formErrorMsg">
    	You can't leave this empty.
    </div>
    <button type="button" onClick="cmdContinue()">Continue</button>

</form>
	
	
	
	
</div> <!-- end warp-->
<div id="footer">
	<?php require '../global/footer.php';?>
</div>
</div> <!-- end of content -->
</body>
</html>
