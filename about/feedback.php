<!doctype html>
<html>
<head>
<!---
JYDesign - Ooi Ji Young

Web Dev Diploma in IT Taylors

Assignment

-->
<meta charset="utf-8">
<title>Contact Us - Durian</title>
<link rel="stylesheet"  href="../script/style.css" type="text/css">
<link rel="stylesheet"  href="../script/forms_style.css" type="text/css">
<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="../icon/favicon-16x16.png" sizes="16x16" />
<script src="../script/jquery.min.js"></script>
<script src="../script/pageResize.js"></script>
</head>

<body>
<div id="header">
<div id="nav">
<li id="navLogoBtn"><a href="../index.html"><img src="../img/logoSmall.png" id="sitelogo" height="25px"> </a></li>

<li class="dropdown"><a href="#">Discover</a>
    <ul class="dropdown-content">
        <li><a href="../discover/phone.html">Phones</a></li>
        <li><a href="../discover/computer.html">Computers</a></li>
    </ul >
</li>
<li><a href="../store/index.html">Store</a></li>
<li class="dropdown right"><a href="#">About</a>
    <ul class="dropdown-content right-content">
        <li><a href="../about/about.html">About Us</a></li>
        <li><a href="../about/contact.html">Contact Us</a></li>
    </ul >
</li>
<li class="dropdown right"><a href="#"><script src="../script/member.js" onload="insideDirNavBar()"></script></a>
    <ul class="dropdown-content right-content" id="loginContainer">
            <script src="../script/member.js" onload="insideDirDropMenu()"></script>
    </ul >
</li>
</div><!-- end of nav-->
</div><!-- end of header-->
<div id="content">
<div id="warp">
<h1>Contact Us</h1>
We would like to hear from you! <br><br>

<!-- add php here -->
<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	
	echo("Dear, $name <br>");
	echo("Thank you for your response<br>");
	echo("We will reply you shortly at <i>$email</i>");
?>
<!-- end of contact form -->
<h1>Or Contact Us at</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.1182552163514!2d101.6145578148003!3d3.0630402045300453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4b62bbbe4a03%3A0x7b695a7770888b58!2sTaylor&#39;s+Lakeside!5e0!3m2!1sen!2smy!4v1483069606391" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe><br>
Address: <br>
No. 1 Jalan Taylor's<br>
47500 Subang Jaya,<br>
Selangor Darul Ehsan<br>
Malaysia. <br><br>

Phone:<br>
03-12345678<br><br>

Email: <br>
<a href="mailto:jiyoung.ooi@sd.taylors.edu.my">jiyoung.ooi@sd.taylors.edu.my</a>


</div><!--- end of warp-->
<div id="footer">
    <div id="footerwarp">
        <div class="col"><h1>Shop and Learn</h1>
        <a href="../discover/phone.html">Phones</a><br>
        <a href="discover/computer.html">Computers</a><br>
        </div>
		
		<div class="col"><h1>Devices</h1>
        <a href="../discover/c4.html">Durian C4</a><br>
        <a href="../discover/dbook.html">DurianBook Air</a><br>
        <a href="../discover/durface.html">Durface</a><br>
		<a href="../discover/dphone.html">dPhone 4G</a><br>
		<a href="../discover/glaptop.html">Gaming Laptop</a><br>
        </div>
        <div class="col"><h1>Durian Store</h1>
        Store<br>
        Tracking<br>
        </div>
        <div class="col"><h1>Account</h1>
        <a href="../account/account.html">Manage Your Account</a>
        </div>
        <div class="col"><h1>About Durian</h1>
        <a href="../about/about.html">About Us</a><br>
        <a href="../about/contact.html">Contact Us</a>
        </div>
    </div>
    <div id="footer_copyright">
    ITS41303 Web Development
    <hr>
    Copyright © 2016 Ng Yi Le / Ooi Ji Young.
    <ui>
        <li><a href="../legal/termsofuse.html">Terms of Use</a></li>
        <li><a href="../legal/privacypolicy.html">Privacy Policy</a></li>
    </ui>
    </div>
</div>
</div> <!-- end of content -->
</body>
</html>
