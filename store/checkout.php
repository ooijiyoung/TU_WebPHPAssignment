<!doctype html>
<html>
<head>
<!---
JYDesign - Ooi Ji Young

Web Dev Diploma in IT Taylors

Assignment

-->
<meta charset="utf-8">
<title>Checkout - JYDesign</title>
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
<h1>Checkout</h1>

<form action="payment.html" id="cform"  method="post">
    <div>
        <label for="fname">Name:</label>
        <input type="text" id="name" name="name"/>
    </div>
    <div>
        <label for="telno">Mobile Phone:</label>
        <input type="tel" id="telno" name="telno"/>
    </div>
    <div>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" name="mail"/>
    </div>
    <div>
        <label for="addr">Address:</label>
        <input type="text" id="addr" name="add"/>
    </div>
    <div>
        <label for="postcode">Post code:</label>
        <input type="text" id="postcode" name="zipcode"/>
    </div>
    <div>
        <label for="city">City:</label>
        <input type="text" id="city" name="city"/>
    </div>
    <div>
        <label for="state">State:</label>
        <input type="text" id="state" name="state"/>
    </div>
    <button>Continue</button>

</form>
	
	
	
	
</div> <!-- end warp-->
<div id="footer">
	<?php require '../global/footer.php';?>
</div>
</div> <!-- end of content -->
</body>
</html>
