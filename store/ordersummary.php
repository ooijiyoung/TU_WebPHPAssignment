<!doctype html>
<html>
<head>
<!---
JYDesign - Ooi Ji Young

Web Dev Diploma in IT Taylors

Assignment

-->
<meta charset="utf-8">
<title>Order Summary - Durian</title>
<link rel="stylesheet"  href="../script/style.css" type="text/css">
<link rel="stylesheet"  href="../script/store.css" type="text/css">
<!--
<link rel="stylesheet"  href="../script/forms_style.css" type="text/css">
-->
<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="../icon/favicon-16x16.png" sizes="16x16" />
<script src="../script/jquery.min.js"></script>
<script src="../script/pageResize.js"></script>
<script src="../script/cart.js"></script>
<script src="../script/cartCalculate.js"></script>
</head>

<body onLoad="loadSummaryPage();">
<div id="header">
	<?php require '../global/header.php';?>
</div><!-- end of header-->
<div id="content">
<div id="warp">
<h1>Order Summary</h1>
<?php
	$phoneP = 3499;
	$noteP = 3199;
	$mbpP = 4199;
	$spP = 4999;
	$nbP = 5699;
	$total = 0;
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$phone = $_POST["phoneQuantity"];
		$note = $_POST["noteQuantity"];
		$mbp = $_POST["macBookQuantity"];
		$surface = $_POST["surfaceQuantity"];
		$laptop = $_POST["laptopQuantity"];
		
		$phSubT = ($phone * $phoneP);
		$noteSubT = ($note * $noteP);
		$mbpSubT = ($mbp * $nbP);
		$spSubT = ($surface * $spP);
		$mbSubT = ($laptop * $nbP);
		
		$total = $phSubT + $noteSubT + $mbpSubT + $spSubT + $mbSubT;
	}
	
	echo "iPhone: $phone <br> Note 7:$note <br> MacBook Air: $mbp <br> Surface: $surface <br> laptop: $laptop <br>total: $total";

?>
<form name="buy">
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
					<img width="150" class="crt_dev_img" src="img/dPhone.png">
					<div class="crt_prd_title">
						<span class="sum_dev_title">dPhone</span> <br>
						Rethink what a phone can do<br>
					</div>
				</div>
			<td>3,499.00</td>
			<td><?php echo $phone; ?></td>
			<td><?php echo number_format($phSubT, 2); ?></td>
		</tr>
		<tr id="c4" class="sum_device">
			<td>
				<div class="sum_prod">
					<img width="150" class="crt_dev_img" src="img/c4.png">
					<div class="crt_prd_title">
						<span class="sum_dev_title">Durian C4</span> <br>
						Mind Blowing Performance<br>
					</div>
				</div>
			<td>3,199.00</td>
			<td><?php echo $note; ?></td>
			<td><?php echo number_format($noteSubT, 2); ?></td>
		</tr>
		<tr id="book" class="sum_device">
			<td>
				<div class="sum_prod">
					<img width="150" class="crt_dev_img" src="img/dBookPro.png">
					<div class="crt_prd_title">
						<span class="sum_dev_title">DurianBook Air</span> <br>
						Revolutionary, Lightweight Laptop<br>
					</div>
				</div>
			<td>4,199.00</td>
			<td><?php echo $mbp; ?></td>
			<td><?php echo number_format($mbpSubT, 2); ?></td>
		</tr>
		<tr id="surface" class="sum_device">
			<td>
				<div class="sum_prod">
					<img width="150" class="crt_dev_img" src="img/durface.png">
					<div class="crt_prd_title">
						<span class="sum_dev_title">Durface</span> <br>
						Hybrid Tablet that will become your laptop<br>
					</div>
				</div>
			<td>4,999.00</td>
			<td><?php echo $surface; ?></td>
			<td><?php echo number_format($spSubT, 2); ?></td>
		</tr>
		<tr id="laptop" class="sum_device">
			<td>
				<div class="sum_prod">
					<img width="150" class="crt_dev_img" src="img/gaminglaptop.png">
					<div class="crt_prd_title">
						<span class="sum_dev_title">Durian Gaming Laptop</span> <br>
						For all your gaming needs<br>
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
	<br>
</div><!--end of warp-->
<div id="footer">
	<?php require '../global/footer.php';?>
</div>
</div> <!-- end of content -->
</body>
</html>
