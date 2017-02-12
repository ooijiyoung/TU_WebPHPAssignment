<?php
	session_start();
?>
<html>
<head>
<!---
Simulate Payment Gateway

TU_ Web Dev Assignment PHP
-->
<meta charset="utf-8">
<title>One Time Pin - JYDesign</title>
<style>
	body{
		font-family: Arial, sans-serif;
		font-size: 14px;
	}
	p{
		clear: both;
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
	table {
		font-size: 14px;
		table-layout: auto;
		border-collapse: collapse;
		width: 100%;
	}
	td{
		vertical-align: top;
	}
	button{
		min-width: 100px;
		margin-left: 20px;
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
	<?php
		$tel = $_SESSION["telno"];
		$strx = " ";
		$telNum = strlen($tel);
		for($x=0;$x<($telNum-7);$x++){
			$strx .= "x";
		}
		$strx .= " ";
		$newtel = substr($tel, 0, 3). $strx . substr($tel, -4);
	?>
		The One Time Password has been sent to your mobile number (<?php echo $newtel;?>)<br>
		Please enter the OTP to authenticate this payment.<br><br>
		
		<table>
		<tr>
			<td>Merchant Name</td><td>: Durian Computers</td>
		</tr>
		<tr>
			<td>Transaction Date</td><td>: <?php echo date("D M d Y")."<br>&nbsp;&nbsp;".date("H:i:s")." GMT".date("O"); ?></td>
		</tr>
		<tr>
			<td>Amount</td><td>: <?php echo "RM".number_format($_SESSION["gTotal"],2); ?></td>
		</tr>
		<tr>
			<td>Credit Card No</td><td>: xxxx-xxxx-xxxx-<?php echo substr($_SESSION["cardNum"],-4)?></td>
		</tr>	
		<tr>
			<td>OTP</td><td>: <input type="password" maxlength="6" size="4" required></td>
		</tr>			
	</table>
	
	</p>
	<script>
		function completeOrder(){
			window.location.href = "complete.php";
		}
		function cancelOrder(){
			window.location.href = "orderfailed.php";
		}
		function doNothing(){
			var doAbsoutelyNothing = "This Function Is Designed to do nothing at all!";
			console.log(doAbsoutelyNothing);
		}
	</script>
	<button onClick="completeOrder();">Ok</button>
	<button onClick="cancelOrder();">Cancel</button>
	<button onClick="doNothing();">Resend OTP</button>
	<p style="color: red">
	Please enter any random number in the OTP field above.<br>DO NOT enter any real information.
	
	</p>
</div>

</body>
</html>
