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
<title>Order Complete- Durian</title>
<link rel="stylesheet"  href="../script/style.css" type="text/css">
<link rel="stylesheet"  href="../script/store.css" type="text/css">
<!--
<link rel="stylesheet"  href="../script/forms_style.css" type="text/css">
-->
<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="../icon/favicon-16x16.png" sizes="16x16" />
<script src="../script/jquery.min.js"></script>
<script src="../script/pageResize.js"></script>
<script src="../script/cartCalculate.js"></script>
</head>

<body onLoad="loadSummaryPage();">
<div id="header">
	<?php require '../global/header.php';?>
</div><!-- end of header-->
<div id="content">
<?php
	
	#generate receipt
	$phoneP = 3499;
	$noteP = 3199;
	$mbpP = 4199;
	$spP = 4999;
	$nbP = 5699;
	$total = 0;
	
	$phone = $_SESSION["phone"];
	$note = $_SESSION["note"];
	$mbp = $_SESSION["mbp"];
	$surface = $_SESSION["surface"];
	$laptop = $_SESSION["laptop"];
	$phSubT = ($phone * $phoneP);
	$noteSubT = ($note * $noteP);
	$mbpSubT = ($mbp * $nbP);
	$spSubT = ($surface * $spP);
	$mbSubT = ($laptop * $nbP);
	
	$total = $phSubT + $noteSubT + $mbpSubT + $spSubT + $mbSubT;
	
	$gst = round(($total / 1.06), 2) * 0.06;
	
	#end of receipt generation
	
	//get deliver info
	$fName = $_SESSION["fName"];
	$lName = $_SESSION["lName"];
	$telno = $_SESSION["telno"];
	$email = $_SESSION["email"];
	$addr = $_SESSION["addr"];
	$city = $_SESSION["city"];
	$zipcode = $_SESSION["zipcode"];
	$state = $_SESSION["state"];
	
	$shipAddr = $fName . " " . strtoupper($lName) . "<br>" . $addr . "<br>" . $zipcode . " " . $city . "<br>" . $state;
	$contactInfo = $fName . " " . strtoupper($lName) . "<br>Mobile Phone: " . $telno . "<br>E-mail: " . $email;
	$cardType = $_SESSION["cardType"];
	$cardNum = "xxxx-xxxx-xxxx-" . substr($_SESSION["cardNum"],-4);
	$total_formatted = number_format($total, 2);
	//save order to txt file
	$orderFile = fopen("../admin/order.txt", "a") or die("Unable to open file!");
	//Name SurName TelNo Email Addr City ZipCode State Phone Note Mbp Surface Laptop  CardType CardNum(last 4 digit) Total
	$txt = "$fName|$lName|$telno|$email|$addr|$city|";
	$txt .=	"$zipcode|$state|$phone|$note|$mbp|$surface|$laptop|$cardType|$cardNum|$total_formatted\n";
	fwrite($orderFile, $txt);
	fclose($orderFile);
	
?>
<div id="warp">
<script>clearCart();</script>
	<h1>Order Received</h1>
	Thank you, your order has been received.<br><br>
	<div>
		<div class="com_half">Shipping Information:<br><?php echo $shipAddr; ?></div>
		<div class="com_half com_right">Contact Information:<br><?php echo $contactInfo; ?></div>
	</div>	
	
	<br>Please contact us as soon as possible if there is any mistakes.<br><br>

	<h2>Order Details:</h2>
		<table>
		<tr>
			<th width="auto">Product</th>
			<th width="auto">Price (RM)</th>
			<th width="auto">Quantity</th>
			<th width="auto">Sub Total (RM)</th>
		</tr>
		
		<tr id="phone" class="sum_device">
			<td>
				<div class="sum_prod">
					dPhone
				</div>
			<td>3,499.00</td>
			<td><?php echo $phone; ?></td>
			<td><?php echo number_format($phSubT, 2); ?></td>
		</tr>
		<tr id="c4" class="sum_device">
			<td>
				<div class="sum_prod">
					Durian C4
				</div>
			<td>3,199.00</td>
			<td><?php echo $note; ?></td>
			<td><?php echo number_format($noteSubT, 2); ?></td>
		</tr>
		<tr id="book" class="sum_device">
			<td>
				<div class="sum_prod">
						DurianBook Air
				</div>
			<td>4,199.00</td>
			<td><?php echo $mbp; ?></td>
			<td><?php echo number_format($mbpSubT, 2); ?></td>
		</tr>
		<tr id="surface" class="sum_device">
			<td>
				Durface
			<td>4,999.00</td>
			<td><?php echo $surface; ?></td>
			<td><?php echo number_format($spSubT, 2); ?></td>
		</tr>
		<tr id="laptop" class="sum_device">
			<td>
				<div class="sum_prod">
						Durian Gaming Laptop
				</div>
			<td>5,699.00</td>
			<td><?php echo $laptop; ?></td>
			<td><?php echo number_format($mbSubT, 2); ?></td>
		</tr>
		<td colspan="3" style="text-align: right">Shipping (RM):</td>
			<td>0.00</td>
		</tr>
		<td colspan="3" style="text-align: right">GST 6% Inclusive (RM):</td>
			<td><?php echo number_format($gst, 2); ?></td>
		</tr>
		<td colspan="3" style="text-align: right">Grand Total (RM):</td>
			<td><?php echo number_format($total, 2); ?></td>
		</tr>
		
	</table>
	
	<h2>Payment Details:</h2>
	<?php
	if($_SESSION["cardType"]=="Amex")
		echo "American Express";
	else
		echo $_SESSION["cardType"];
	?> - CONFIRMED <br>
	xxxx-xxxx-xxxx-<?php echo substr($_SESSION["cardNum"],-4)?> <span style="padding-left: 20px;"><?php echo "RM".number_format($_SESSION["gTotal"],2); ?></span><br>
<br>
<br>

</div><!--end of warp-->
<div id="footer">
	<?php require '../global/footer.php';?>
</div>
</div> <!-- end of content -->
</body>
</html>
