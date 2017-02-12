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
<h1>Order Information</h1>
<table border="1">
<tr>
	<th width="auto" colspan="9">Customer Information</th>
	<th width="auto" colspan="5">Customer Order (Quantity)</th>
	<th width="auto" colspan="3">Payment Information</th>
</tr>
<tr>
	<th width="auto">No</th>
	<th width="auto">First Name</th>
	<th width="auto">Last Name</th>
	<th width="auto">Mobile Number</th>
	<th width="auto">E-mail</th>
	<th width="auto">Address</th>
	<th width="auto">City</th>
	<th width="auto">Post Code</th>
	<th width="auto">State</th>
	<th width="auto">dP</th>
	<th width="auto">C4</th>
	<th width="auto">DBP</th>
	<th width="auto">DF</th>
	<th width="auto">MB</th>
	<th width="auto">Card Type</th>
	<th width="auto">Card Number</th>
	<th width="auto">Total Amount (RM)</th>
</tr>

<?php
	$n = 1;
	$fh = fopen('order.txt','r');
	while ($line = fgets($fh)) {
		echo "<tr>";
		$data = explode('|',$line);
		echo '<td>';
		echo $n;
		echo '</td>';		
		foreach($data as $cell){
			echo '<td>';
			echo $cell;
			echo '</td>';

		}
		echo '</tr>';
		$n++;
	}
	fclose($fh);
?>
</table>
*Legend:<br>
dP = dPhone<br>
C4 = Durian C4<br>
DBP = DurianBook Pro<br>
DF = Durface<br>
MB = Gaming Laptop<br>
</div><!--end of warp-->
<div id="footer">
</div>
</div> 
</body>
</html>