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
	$_SESSION["gTotal"] = $total;
	
	
	#end of receipt generation

?>
<div id="warp">
	<h1>Order Received</h1>
	Thank you, your order has been received.<br>

	Order Details:<br>
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
				</div>
			<td>4,199.00</td>
			<td><?php echo $mbp; ?></td>
			<td><?php echo number_format($mbpSubT, 2); ?></td>
		</tr>
		<tr id="surface" class="sum_device">
			<td>
				Durface
				</div>
			<td>4,999.00</td>
			<td><?php echo $surface; ?></td>
			<td><?php echo number_format($spSubT, 2); ?></td>
		</tr>
		<tr id="laptop" class="sum_device">
			<td>
				<div class="sum_prod">
						Durian Gaming Laptop
					</div>
				</div>
			<td>5,699.00</td>
			<td><?php echo $laptop; ?></td>
			<td><?php echo number_format($mbSubT, 2); ?></td>
		</tr>
		<td colspan="3" style="text-align: right">Grand Total (RM):</td>
			<td><?php echo number_format($total, 2); ?></td>
		</tr>
		
	</table>
</div><!--end of warp-->
<div id="footer">
	<?php require '../global/footer.php';?>
</div>
</div> <!-- end of content -->
</body>
</html>
