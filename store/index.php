<!doctype html>
<html>
<head>
<!---
JYDesign - Ooi Ji Young

Web Dev Diploma in IT Taylors

Assignment

-->
<meta charset="utf-8">
<title>Store - Durian</title>
<link rel="stylesheet"  href="../script/style.css" type="text/css">
<link rel="stylesheet"  href="../script/store.css" type="text/css">
<link rel="stylesheet"  href="../script/forms_style.css" type="text/css">
<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="../icon/favicon-16x16.png" sizes="16x16" />
<script src="../script/jquery.min.js"></script>
<script src="../script/pageResize.js"></script>
<script src="../script/cart.js"></script>
</head>

<body>
<div id="header">
	<?php require '../global/header.php';?>
</div><!-- end of header-->
<div id="content">
<div id="warp">
<h1>Store</h1>
<div class="devices">
	<img src="img/dPhone.png" width="100%">
	<div class="devicename">dPhone</div>
	<div class="deviceprice">$1999</div>
	<div class="devicebuy">
	<a id="btn1" onclick="addCart(1);" href="javascript:void(0)" class="buyBtn">Buy</a></div>
</div>
<div class="devices">
	<img src="img/c4.png" width="100%">
	<div class="devicename">Durian C4</div>
	<div class="deviceprice">$1999</div>
	<div class="devicebuy">
	<a id="btn2" onclick="addCart(2);" href="javascript:void(0)" class="buyBtn">Buy</a></div>
</div>
<div class="devices">
	<img src="img/dBookPro.png" width="100%">
	<div class="devicename">DurianBook Pro</div>
	<div class="deviceprice">$1999</div>
	<div class="devicebuy">
	<a id="btn3" onclick="addCart(3);" href="javascript:void(0)" class="buyBtn">Buy</a></div>
</div>
<div class="devices">
	<img src="img/durface.png" width="100%">
	<div class="devicename">Durface</div>
	<div class="deviceprice">$1999</div>
	<div class="devicebuy">
	<a id="btn4" onclick="addCart(4);" href="javascript:void(0)" class="buyBtn">Buy</a></div>
</div>
<div class="devices">
	<img src="img/gaminglaptop.png" width="100%">
	<div class="devicename">Gaming Laptop</div>
	<div class="deviceprice">$1999</div>
	<div class="devicebuy">
	<a id="btn5" onclick="addCart(5);" href="javascript:void(0)" class="buyBtn">Buy</a></div>
</div>
</div>
<div id="footer">
	<?php require '../global/footer.php';?>
</div>
</div> <!-- end of content -->
</body>
</html>
