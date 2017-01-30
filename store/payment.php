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
</head>

<body>
<div id="header">
	<?php require '../global/header.php';?>
</div><!-- end of header-->
<div id="content">
<div id="warp">
<h1>Store</h1>

<form action="done.html" id="cardID"  method="post">
    <div>
        <label for="cardhholder">*Name On Card:</label>
        <input required type="text" id="cardhholder" name="cardholdername"/>
    </div>
    <div>
        <label for="cardno">*Card Number:</label>
        <input required type="tel" id="cardno" maxlength="16" placeholder="Card No"  name="CardNum"/>
        <input type="password" id="ccv" maxlength="3"  placeholder="CVV" name="CVV"/>
    </div>
    <div >
        <label>*Expiration Date:</label>
        <input required type="tel" id="expMM" maxlength="2" placeholder="MM" name="expMM"/>
        <input required type="tel" id="expYY" maxlength="2" placeholder="YY"  name="expYY"/>
</div>
<button>Continue</button>
</form>

</div>
<div id="footer">
	<?php require '../global/footer.php';?>
</div>
</div> <!-- end of content -->
</body>
</html>
