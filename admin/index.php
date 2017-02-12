<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Order Information - Admin Panel</title>
<link rel="stylesheet"  href="../script/style.css" type="text/css">
<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="../icon/favicon-16x16.png" sizes="16x16" />
<style>
	.adminBtn{
		display: inline-block;
		background-color: #0078d7;
		color: #FFF !important;
		margin-top: 20px;
		text-decoration: none;
		padding: 10px 20px;
		font-size: 16px;
	}
	
</style>
</head>

<body>
<div id="header">
	<?php require 'adminheader.php';?>
</div><!-- end of header-->
<div id="content">
<div id="warp">
	<h1>Admin Panel</h1>
	<a class="adminBtn" href="readorder.php">View Order</a>
	<a class="adminBtn" href="readfeedback.php">View Feedback</a>
	<a class="adminBtn" href="readuser.php">View Member</a>
</div><!--end of warp-->
<div id="footer">
</div>
</div> 
</body>
</html>