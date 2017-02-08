<!doctype html>
<html>
<head>
<!---
JYDesign - Ooi Ji Young

Web Dev Diploma in IT Taylors

Assignment

-->
<meta charset="utf-8">
<meta http-equiv="Refresh" content="3; URL=../index.html">
<title>Logout - JYTravel</title>
<link rel="stylesheet"  href="../script/style.css" type="text/css">
<link rel="stylesheet"  href="../script/forms_style.css" type="text/css">
<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="../icon/favicon-16x16.png" sizes="16x16" />
<script src="../script/jquery.min.js"></script>
<script src="../script/loginCtrl.js"></script>
<script src="../script/pageResize.js"></script>
</head>

<body onLoad="cmdLogout()">
<div id="header">
	<?php require '../global/header.php';?>
</div><!-- end of header-->
<div id="content">
<div id="warp">
<h1>Logout successful</h1>

You have successfully logged out from site. Thank you.<br><br>

You will be redirect in <span id="countdown">3</span>
</div>
<div id="footer">
	<?php require '../global/footer.php';?>
</div>
</div> <!-- end of content -->
<script>
var time_left = 3;
	var cinterval;
	function time_dec(){
		time_left--;
		document.getElementById('countdown').innerHTML = time_left;
		if(time_left == 0){
			clearInterval(cinterval);
		}
	}
cinterval = setInterval('time_dec()', 1000);
</script>
</body>
</html>
