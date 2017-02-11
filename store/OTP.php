<?php
	session_start();
?>
<html>
<head>
<!---
JYDesign - Ooi Ji Young

Web Dev Diploma in IT Taylors

Assignment

-->
<meta charset="utf-8">
<title>One Time Pin - JYDesign</title>
<style>
	.red{
		color:red;
	}
	p{
		color: blue;
	}
	#imgBankLogo{
		float: left;
		display: inline-block;
	}
	#cardLogo{
		float: right;
		display: inline-block;
	}
	#content{

		width:400px;
		margin: auto;
		margin-top: 100px;
	}
</style>
<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="../icon/favicon-16x16.png" sizes="16x16" />
<script src="../script/jquery.min.js"></script>
</head>

<body>
<div id="content">
	<img id="imgBankLogo" src="img/JYDesignNew2.png" width="200px">
	<?php
		if($_SESSION["cardType"] == "Visa"){
			echo '<img id="cardLogo" src="img/visa.jpg" width="100px">';
		}else if($_SESSION["cardType"] == "MasterCard"){
			echo '<img id="cardLogo" src="img/master.jpg" width="100px">';
		}else{
			echo '<img id="cardLogo" src="img/amex.png" width="50px">';
		}
	?>
	<br>
	<p>
		The One Time Password has been sent to your mobile number<br>
		Please enter the OTP to authenticate this payment.
		
		Merchant Name : Durian Computers
		Amount : <?php echo "RM".number_format($_SESSION["gTotal"],2); ?>
		Transaction Date:
		OTP
		DO NOT ENTER REAL CARD DETAILS. THIS IS FOR ASSIGNEMNT PURPOSE
	</p>
</div>

</body>
</html>
