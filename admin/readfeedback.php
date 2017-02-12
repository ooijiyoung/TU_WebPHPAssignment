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
<table border="1">
<tr>
	<th width="auto">No</th>
	<th width="auto">Name</th>
	<th width="auto">E-mail</th>
	<th width="auto">Mobile Number</th>
	<th width="auto">Message</th>
</tr>

<?php
	$n = 1;
	$fh = fopen('feedback.txt','r');
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
</div><!--end of warp-->
<div id="footer">
</div>
</div> 
</body>
</html>