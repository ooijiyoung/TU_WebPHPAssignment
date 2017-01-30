<!doctype html>
<html>
<head>
<!---
JYDesign - Ooi Ji Young

Web Dev Diploma in IT Taylors

Assignment

-->
<meta charset="utf-8">
<title>About Us - JYTravel</title>
<link rel="stylesheet"  href="../script/style.css" type="text/css">
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
<h1>About Us</h1>
The purpose of this website is to show all of you all the amazing staff which created and designed by our company that included high-tech phones and computer. Stay-tuned to our website from time to time as we will bring you on an amazing journey. ðŸ˜‰<br><br>
Help center operating hour: 24/7
We provide 1 year warranty for all our customers, so that if our customers have any issues about our product like the product don’t function well or spoilt within 1 year they can exchange their product with us for a new one. Screen repairer are free to all our customer at all times, we could handle any scratch or dirt on the screen as long as it is Durian’s product. Furthermore, if customers were having battery power issues like the power dried out faster than before. We would replace a new battery for you as well. On the other hand, customers have two ways to send their product towards us for repair. The first choice are request online collector online through email and we will send our worker to collect the product from your place but this could take up to 1 week. 2nd choice is make an appointment with us and come to meet us up at our company on time, we will repair immediately for you within 2 hours.
	Lastly, we provide free shipping towards all the online purchaser of our product and no GST charges nor service charges as well. The prices we shown in our webpage is fixed and wouldn’t be any changes without any inform. Hope you enjoy shopping with us.
<?php
function absolute_include($file)
         {
         /*
         $file is the file url relative to the root of your site.
         Yourdomain.com/folder/file.inc would be passed as
         "folder/file.inc"
         */

         $folder_depth = substr_count($_SERVER["PHP_SELF"] , "/");

         if($folder_depth == false)
            $folder_depth = 1;

         return(str_repeat("../", $folder_depth - 1) . $file);
         }

		 echo absolute_include("test.html");
?>
<br><br>

Disclaimer:<br>
Durian is a fictional Webpage created and designed by<br>
Ooi Ji Young (0328592)<br>
Ng Yi Le <br><br>
<img src="../img/tulogo.png" width="200px"><br>
Diploma in Information Technology (DIT) <br> Principles Of Web Development (ITS40203) Assignment.
<br><br>

Copyright Disclaimer Under Section 107 of the Copyright Act 1976<br>
All articles and photos are used under Fair Use for Education Purposes.<br>
Notwithstanding the provisions of sections 17 U.S.C. Â§ 106 and 17 U.S.C. Â§ 106A, the fair use of a copyrighted work, including such use by reproduction in copies or phonorecords or by any other means specified by that section, for purposes such as criticism, comment, news reporting, teaching (including multiple copies for classroom use), scholarship, or research, is not an infringement of copyright.



</div><!--- end of warp-->
<div id="footer">
	<?php require '../global/footer.php';?>
</div> <!--end of footer -->
</div> <!-- end of content -->
</body>
</html>
