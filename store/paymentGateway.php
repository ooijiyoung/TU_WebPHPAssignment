<?php
	session_start();
?>
<html>
<head>
<!---
JYDesign - Ooi Ji Young

Web Dev Diploma in IT Taylors

Assignment

-->
<meta charset="utf-8">
<meta http-equiv="refresh" content="5;url=OTP.php"/>
<title>Payment Gateway - JYDesign</title>
<style>
	html{
		cursor:wait;
	}
	.red{
		color:red;
	}
	p{
		color: blue;
	}
	#content{
		text-align: center;
		width:400px;
		margin: auto;
		margin-top: 100px;
	}
</style>
<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="../icon/favicon-16x16.png" sizes="16x16" />
<script src="../script/jquery.min.js"></script>
</head>

<body>
<div id="content">
	<h1>Contacting Issuing Bank...</h1>
	<br>
	<img src="img/loading.gif"/>
	<p>
		Please do not click on <span class="red">Back</span>, <span class="red">Stop</span> 
		or <span class="red">Refresh</span> buttons,<br>
		or <span class="red">close window</span> while we are processing your payment<br><br><br><br>

		Thank you for your patience
	</p>
</div>

</body>
</html>
