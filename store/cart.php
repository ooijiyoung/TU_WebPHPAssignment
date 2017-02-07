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

<body onLoad="checkCart();">
<div id="header">
	<?php require '../global/header.php';?>
</div><!-- end of header-->
<div id="content">
<div id="warp">
<h1>Store</h1>
	<div id="cart">
	</div>
	<form action="checkout.php" method="post">
		<div id="phone" class="crt_device">
		<img class="cart_dev_img" src="img/dPhone.png">dPhone <br>
		adadad<br>asdasd
		</div>
		<div id="c4" class="crt_device">
		c4 
		</div>
		<div id="book" class="crt_device">
		dBook Pro 
		</div>
		<div id="surface" class="crt_device">
		durface 
		</div>
		<div id="glaptop" class="crt_device">
		Gaming Laptop 
		</div>
	</form>
</div><!--end of warp-->
<div id="footer">
	<?php require '../global/footer.php';?>
</div>
</div> <!-- end of content -->
</body>
</html>
