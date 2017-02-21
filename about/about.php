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
Durian is a leading global ICT solutions provider. Through our dedication to customer-centric innovation and strong partnerships, we have established end-to-end capabilities and strengths across the carrier networks, enterprise, consumer, and cloud computing fields. We are committed to creating maximum value for telecom carriers, enterprises, and consumers by providing competitive ICT solutions and services. Our products and solutions have been deployed in over 140 countries, serving more than one third of the world's population.
By leveraging our strong R&D capabilities and comprehensive technical expertise, Huawei�s strategy in the enterprise domain focuses on close cooperation and integration with partners to deliver a wide range of highly efficient customer-centric ICT solutions and services that are based on a deep understanding of customer needs. In line with our strategy, we offer a broad portfolio of innovative ICT solutions that cater to global vertical industry and enterprise customers across government and public sector, finance, transportation, energy, large enterprises, and small and midsize enterprises (SMEs). Our portfolio covers enterprise networking, unified communications & collaboration (UC&C), cloud computing & data center, enterprise wireless, network energy and infrastructure services.
Looking ahead, we are committed to serving as the most innovative and optimal ICT technology partner for global enterprises, accelerating their ICT development and improving their operational efficiency. We will work with our global enterprise customers and partners to jointly embrace the challenges brought about by ICT transformations, build a favorable industry ecosystem, and promote the sound development of the ICT industry and society at large.

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
Notwithstanding the provisions of sections 17 U.S.C. § 106 and 17 U.S.C. § 106A, the fair use of a copyrighted work, including such use by reproduction in copies or phonorecords or by any other means specified by that section, for purposes such as criticism, comment, news reporting, teaching (including multiple copies for classroom use), scholarship, or research, is not an infringement of copyright.



</div><!--- end of warp-->
<div id="footer">
	<?php require '../global/footer.php';?>
</div> <!--end of footer -->
</div> <!-- end of content -->
</body>
</html>
