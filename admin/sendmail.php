<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Order Information - Admin Panel</title>
<link rel="stylesheet"  href="../script/style.css" type="text/css">
<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="../icon/favicon-16x16.png" sizes="16x16" />
<style>
table, td, th {    
    border: 1px solid #ddd;
	text-align: center;
}
table {
    border-collapse: collapse;
    width: 100%;	
	
</style>
</head>

<body>
<div id="header">
	<?php require 'adminheader.php';?>
</div><!-- end of header-->
<div id="content">
<div id="warp">
<h1>User Feedback / Contact</h1>
<?php
$to = "ooijiyoung@gmail.com";
$subject = "HTML email test2";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
TestTestTestTestTest
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "From: donotreply@ooijiyoung.tk \r\n";
$headers .= "Reply-To: donotreply@ooijiyoung.tk \r\n";
$headers .= "Return-Path: <donotreply@ooijiyoung.tk> \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to,$subject,$message,$headers);
?>
</div><!--end of warp-->
<div id="footer">
</div>
</div> 
</body>
</html>