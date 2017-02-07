<!doctype html>
<html>
<head>
<!---
JYDesign - Ooi Ji Young

Web Dev Diploma in IT Taylors

Assignment

-->
<meta charset="utf-8">
<title>Cart - Durian</title>
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

<body onLoad="checkCart();">
<div id="header">
	<?php require '../global/header.php';?>
</div><!-- end of header-->
<div id="content">
<div id="warp">
<h1>Cart</h1>
	<div id="cartEmpty">
		There are no items in this cart.<br>
		<a href="<?php linkfile("store/index.php");?>" id="cartShopping">Continue Shopping</a>
	</div>
	<form id="cartFrm" action="getorder.php" method="post" style="display:none;" novalidate>
		<div id="phone" class="crt_device">
			<img width="150" class="crt_dev_img" src="img/dPhone.png">
			<div class="crt_prd_title">
				<span class="crt_dev_title">dPhone</span> <br>
				Rethink what a phone can do<br>
			</div>
			<br>
			<ul class="crt_dev_quant">
				<li>RM3,499.00</li>
				<li><input id="phoneQuantity" name="phoneQuantity" class="crt_num" value="0" type="number" min="1" max="10"
				onchange="calc(this,3499.00,phoneTotal);"/></li>
				<li class="crt_dev_subt" id="phoneTotal">RM3,499.00</li>
			</ul>
			
			<hr style="clear: right">
				<span class="crt_item_remove" onClick="removeCart(1);">Remove Item</span>
		</div>
		<!--- note 7 -->
		<div id="c4" class="crt_device">
			<img width="150" class="crt_dev_img" src="img/c4.png">
			<div class="crt_prd_title">
				<span class="crt_dev_title">Durian C4</span> <br>
				Mind Blowing Performance<br>
			</div>
			<br>
			<ul class="crt_dev_quant">
				<li>RM3,199.00</li>
				<li><input id="noteQuantity" name="noteQuantity" class="crt_num" value="0" type="number" min="1" max="10"
				onchange="calc(this,3199.00,c4Total);"/></li>
				<li class="crt_dev_subt" id="c4Total">RM3,199.00</li>
			</ul>
			
			<hr style="clear: right">
				<span class="crt_item_remove" onClick="removeCart(2);">Remove Item</span>
		</div>
		<!--- mbp  -->
		<div id="book" class="crt_device">
			<img width="150" class="crt_dev_img" src="img/dBookPro.png">
			<div class="crt_prd_title">
				<span class="crt_dev_title">DurianBook Air</span> <br>
				Revolutionary, Lightweight Laptop<br>
			</div>
			<br>
			<ul class="crt_dev_quant">
				<li>RM4,199.00</li>
				<li><input id="macBookQuantity" name="macBookQuantity" class="crt_num" value="0" type="number" min="1" max="10"
				onchange="calc(this,4199.00,macTotal);"/></li>
				<li class="crt_dev_subt" id="macTotal">RM4,199.00</li>
			</ul>
			
			<hr style="clear: right">
				<span class="crt_item_remove" onClick="removeCart(3);">Remove Item</span>
		</div>
		<!--- SP4 -->
		<div id="surface" class="crt_device">
			<img width="150" class="crt_dev_img" src="img/durface.png">
			<div class="crt_prd_title">
				<span class="crt_dev_title">Durface</span> <br>
				Hybrid Tablet that will become your laptop<br>
			</div>
			<br>
			<ul class="crt_dev_quant">
				<li>RM4,999.00</li>
				<li><input id="surfaceQuantity" name="surfaceQuantity" class="crt_num" value="0" type="number" min="1" max="10"
				onchange="calc(this,4999.00,surfaceTotal);"/></li>
				<li class="crt_dev_subt" id="surfaceTotal">RM4,999.00</li>
			</ul>
			
			<hr style="clear: right">
				<span class="crt_item_remove" onClick="removeCart(4);">Remove Item</span>
		</div>
		
		<!--- Overpriced gaming laptop -->
		<div id="laptop" class="crt_device">
			<img width="150" class="crt_dev_img" src="img/gaminglaptop.png">
			<div class="crt_prd_title">
				<span class="crt_dev_title">Durian Gaming Laptop</span> <br>
				For all your gaming needs<br>
			</div>
			<br>
			<ul class="crt_dev_quant">
				<li>RM5,699.00</li>
				<li><input id="laptopQuantity" name="laptopQuantity" class="crt_num" value="0" type="number" min="1" max="10"
				onchange="calc(this,5699.00,laptopTotal);"/></li>
				<li class="crt_dev_subt" id="laptopTotal">RM5,699.00</li>
			</ul>
			
			<hr style="clear: right">
				<span class="crt_item_remove" onClick="removeCart(5);">Remove Item</span>
		</div>
		Total: $
		<input type="submit" value="Continue">
	</form>
</div><!--end of warp-->
<div id="footer">
	<?php require '../global/footer.php';?>
</div>
</div> <!-- end of content -->
</body>
</html>
