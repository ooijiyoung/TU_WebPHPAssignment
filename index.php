<!doctype html>
<html>
<head>
<!---
Ooi Ji Young
Ng Yi Le

Web Dev Diploma in IT Taylors

Assignment

-->
<meta charset="utf-8">
<title>Durian</title>
<link rel="stylesheet"  href="script/style.css" type="text/css">
<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="icon/favicon-16x16.png" sizes="16x16" />
<script src="script/jquery.min.js"></script>
<script type="text/javascript" src="script/jquery.nivo.slider.js"></script>
<link rel="stylesheet" href="script/nivo/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="script/nivo-slider.css" type="text/css" media="screen" />
</head>

<body>
<div id="header">
	<?php require 'global/header.php'; ?>
</div><!-- end of header-->
<div id="content">

<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="img/image1.jpg" data-transition="slideInLeft" />
                <img src="img/image2.jpg" data-transition="slideInLeft" />
                <img src="img/image3.jpg" data-transition="slideInLeft" />
            </div>
</div>

<div id="IEerror">
<center>
It seems that you're using Internet Explorer.<br>
This Browser Is Not Supported By This Website As Some Element May Not Display Properly.<br>
Please download recommended browser below:<br>
<a href="https://www.microsoft.com/en-us/windows/microsoft-edge">Microsoft Edge</a><br>
<a href="https://www.google.com/chrome/">Google Chrome</a><br>
<a href="https://www.mozilla.org/en-US/firefox/new/">Mozilla Firefox</a><br>
<a href="http://www.opera.com/">Opera Browser</a><br>
</center>
</div>
<script type="text/javascript">
	if (navigator.userAgent.match(/Trident.*rv\:11\./)){
	document.getElementById("IEerror").style.display = "inline";
	console.log("Internet Explorer Detected!");
	}
	else{
	console.log("Not Internet Explorer, Proceed As Usual");
	}

</script>
<noscript><h1>Note: <br>Javascript are needed for this page to display properly. Please Enable Javascript.</h1> </noscript>
<div class="promoContainer">
    <div class="promo">
    <img src="img/promo/img1.jpg" width="100%">
    </div>
    <div class="promo">
    <img src="img/promo/img2.jpg" width="100%">
    </div>
    <div class="promo">
     <img src="img/promo/img3.jpg" width="100%">
    </div>
    <div class="promo">
    <img src="img/promo/img4.jpg" width="100%">
    </div>
</div> <!--- end of promo-->
<br>
<div id="footer">
	<?php require 'global/footer.php';?>
</div>

</div> <!-- end of content -->

    <script type="text/javascript">
    $(document).ready(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>