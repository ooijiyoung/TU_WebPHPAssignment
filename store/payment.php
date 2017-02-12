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
<title>Store - JYDesign</title>
<link rel="stylesheet"  href="../script/style.css" type="text/css">
<link rel="stylesheet"  href="../script/store.css" type="text/css">
<link rel="stylesheet"  href="../script/forms_style.css" type="text/css">
<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="../icon/favicon-16x16.png" sizes="16x16" />
<script src="../script/jquery.min.js"></script>
<script src="../script/pageResize.js"></script>
<script src="../script/cardPayment.js"></script>
</head>

<body>
<div id="header">
	<?php require '../global/header.php';?>
</div><!-- end of header-->
<div id="content">
<div id="warp">
<h1>Payment</h1>
<?php
$cardHolderErr = $numErr = $CCVErr = $expErr = $cardNoErr = $formErr = "";
$cardholdername = $CardNum = $cardtype = $cardCVV = $expMM = $expYY = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$cardholdername = sanitize($_POST["cardholdername"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$cardholdername)) {
		$cardHolderErr = "Only letters and white space allowed <script>cardholderErr();</script>"; 
	}
	$cardtype = sanitize($_POST["cardtype"]);
	$CardNum = sanitize($_POST["CardNum"]);
	if (!preg_match("/^[+0-9]*$/",$CardNum)){
		$numErr = "Invalid credit / debit card number <script>NoErr();</script>";
	}else if($cardtype== "Amex"){
		if (strlen($CardNum)!=15) {
		$numErr = "Invalid American Express card number <script>NoErr();</script>"; 
		}
	}else{
		if (strlen($CardNum)!=16) {
		$numErr = "Invalid $cardtype card number (must be 16 digit) <script>NoErr();</script>"; 
		}
	}
	
	$cardCVV = sanitize($_POST["CVV"]);
	if (!preg_match("/^[+0-9]*$/",$cardCVV)){
		$CCVErr = "Invalid CVV number <script>cvvErr();</script>";
	}else if($cardtype== "Amex"){
		if (strlen($cardCVV)!=4) {
		$CCVErr = "CID or 4DBC validation failed. Please recheck <script>cvvErr();</script>"; 
		}
	}else{
		if (strlen($cardCVV)!=3) {
		$CCVErr = "CVV code validation failed. Please recheck <script>cvvErr();</script> "; 
		}
	}
	if($numErr!=''){
		$cardNoErr = $numErr;
	}else if($CCVErr !=''){
		$cardNoErr = $CCVErr;
	}
	if($numErr!='' && $CCVErr !='') {
		$cardNoErr = $numErr . "<br>" . $CCVErr;
	}
	
	$expMM = sanitize($_POST["expMM"]);
	$expYY = sanitize($_POST["expYY"]);
	
	//check expired card
	if($expYY == date('Y') && $expMM < date('n')){
		$expErr = "Your card is expired! <script>expMMErr();expYYErr();</script>";
	}
	
	//mcomplete payment
	if($cardHolderErr == "" && $cardNoErr == "" && $expErr == ""){
		$_SESSION["cardHolder"] = $cardholdername;
		$_SESSION["cardType"] = $cardtype;
		$_SESSION["cardNum"] = $CardNum;
		echo "<script>window.location.href='paymentGateway.php'</script>";
	}
	else{
		$formErr = "<center>Please recheck card details! For security reasons, please input CVV again</center>";
	}
		

}

function sanitize($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
?>
	
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="cardIDfrm"  method="post">
    <div>
        <label for="cardhholder">*Name On Card:</label>
        <input type="text" id="cardhholder" name="cardholdername" value="<?php echo $cardholdername;?>"/>
    </div>
    <div id="cardEmpty" class="formErrorMsg">
    	You can't leave this empty.<br><br>
    </div>
    <div class="phpError">
    	<?php echo $cardHolderErr; ?>
	</div>
    <div>
        <label for="cardtype">*Card Type:</label>
        <select name="cardtype" id="cardtype">
        	<option value="" disabled selected>Please select card type</option>
			<option value="MasterCard" 
			<?php if ($cardtype == "MasterCard") echo "selected='selected'"; ?>>MasterCard</option>
			<option value="Visa"
			<?php if ($cardtype == "Visa") echo "selected='selected'"; ?>>Visa</option>
			<option value="Amex"
			<?php if ($cardtype == "Amex") echo "selected='selected'"; ?>>American Express</option>
		</select>
    </div>
    <div id="cardTypeEmpty" class="formErrorMsg">
    	Please select card type.<br><br>
    </div>
    <div>
        <label for="cardno">*Card Number:</label><br>
        <input type="tel" id="cardno" maxlength="16" placeholder="Card No"  name="CardNum" value="<?php echo $CardNum;?>"/>
        <!-- Amex 4 digit CCV -->
        <input type="password" id="cvv" maxlength="4"  placeholder="CVV" name="CVV"/>
    </div>
    <div id="cardNoEmpty" class="formErrorMsg">
    	You can't leave this empty.<br><br>
    </div>
    <div class="phpError">
    	<?php echo $cardNoErr; ?>
	</div>
    <div >
        <label>*Expiration Date:</label><br>
        <select class="half" name="expMM" id="expMM">
        	<option value="" disabled selected>Please select month</option>
        	<?php
			for($x=1;$x<13;$x++){
				if($x < 10)
					$MM = '0' . $x;
				else
					$MM = $x;
				echo '<option value="' . $MM . '">'. $MM . '</option>';
			}
			?>
		</select>
		<script type="text/javascript">
			document.getElementById('expMM').value = "<?php echo $_POST['expMM'];?>";
		</script>

        <select class="half" style="float:right;" id="expYY" name="expYY"/>
        	<option value="" disabled selected>Please select year</option>
        	<?php
			for($y=17;$y<30;$y++){
				$YY = '20' . $y;
				echo '<option value="' . $YY . '">'. $YY . '</option>';
			}
			?>
		</select>
        <script type="text/javascript">
			document.getElementById('expYY').value = "<?php echo $_POST['expYY'];?>";
		</script>
	</div>
	<div class="half" style="float:left;">
    	<label id="expMMEmpty" class="formErrorMsg" >Please select month.</label>
        
    </div>
    <div class="half" style="float:right;">
        <label id="expYYEmpty" class="formErrorMsg">Please select year.</label>
    </div>
    <div class="phpError">
    	<?php echo $expErr; ?>
	</div>
	<div class="phpError">
    	<?php echo $formErr; ?>
	</div>
	<div>
		Grand Total: <?php echo "RM".number_format($_SESSION["gTotal"],2); ?><br>
		By clicking continue, you agree to authorize Durian Computers to charge the payment amount indicated.
	</div>
<button type="button" onClick="cmdPay();">Continue</button>
</form>

</div>
<div id="footer">
	<?php require '../global/footer.php';?>
</div>
</div> <!-- end of content -->
</body>
</html>
